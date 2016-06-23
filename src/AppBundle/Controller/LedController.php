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
use Symfony\Component\HttpFoundation\Request;

class LedController extends Controller
{
    /**
     * @Route("/store/{ledId}", name="led_list")
     */
    public function listAction($ledId, Request $request)
    {
        $startTime = new \DateTime(strtotime('now'|date('m-d-Y')));
        $endTime = new \DateTime(strtotime('+7 days'|date('m-d-Y')));

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

        //only handles data on POST
        $form = $this->createForm(LedFormType::class);

        // This line was missing
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();

                $startTime = $data['startTime'];
                $endTime = $data['endTime'];
            } else {
                // Check for errors and show a message
            }
        }

        $slotsUnAvailable = $em->getRepository('AppBundle:Slot')
            ->findAllSlotsUnAvailable($startTime, $endTime);

        return $this->render('public/led/list.html.twig', [
            'led'               => $led,
            'leds'              => $leds,
            'slots'             => $slots,
            'slotsUnAvailable'  => $slotsUnAvailable,
            'startTime'         => $startTime,
            'endTime'           => $endTime,
            'ledForm'           => $form->createView(),
        ]);
    }
}