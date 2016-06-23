<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 22/06/2016
 * Time: 11:33
 */

namespace AppBundle\Controller;

use AppBundle\Form\LedFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LedController extends Controller
{
    /**
     * @Route("/store/{ledId}", name="led_list")
     */
    public function listAction($ledId, $startDate = null, $endDate = null)
    {

        if ($startDate == null) {
            $startDate = new \DateTime(strtotime('now'|date('m-d-Y')));
        }

        if ($endDate == null) {
            $endDate = new \DateTime(strtotime('+7 days'|date('m-d-Y')));
        }

        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle:Led')
            ->findAll();

        $led = $em->getRepository('AppBundle:Led')
            ->findOneBy(['id' => $ledId]);
        if (!$led) {
            throw $this->createNotFoundException('this LED Screen cannot be found');
        }

        $slots = $em->getRepository('AppBundle:Slot')
            ->findBy(['led' => $ledId]);

        $slotsUnAvailable = $em->getRepository('AppBundle:Slot')
            ->findAllSlotsUnAvailable($startDate, $endDate);

        $form = $this->createForm(LedFormType::class);

        return $this->render('public/led/list.html.twig', [
            'led'               => $led,
            'leds'              => $leds,
            'slots'             => $slots,
            'slotsUnAvailable'  => $slotsUnAvailable,
            'startDate'         => $startDate,
            'endDate'           => $endDate,
            'LedForm' => $form->createView(),
        ]);
    }
}