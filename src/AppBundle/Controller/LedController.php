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
    public function listAction($ledId, $startTime = null, $endTime = null, Request $request)
    {

        if ($startTime == null) {
            $startTime = new \DateTime(strtotime('now'|date('m-d-Y')));
        }

        if ($endTime == null) {
            $endTime = new \DateTime(strtotime('+7 days'|date('m-d-Y')));
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
            ->findAllSlotsUnAvailable($startTime, $endTime);

        //only handles data on POST
        $form = $this->createForm(LedFormType::class);
        if ($form->isSubmitted() && $form->isValid()) {

            //THIS IS FOR INSERTING INTO DB//
            /*$runningTime = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($runningTime);
            $em->flush();

            return $this->redirectToRoute('led_list');*/
        }
        $form->handleRequest($request);

        return $this->render('public/led/list.html.twig', [
            'led'               => $led,
            'leds'              => $leds,
            'slots'             => $slots,
            'slotsUnAvailable'  => $slotsUnAvailable,
            'startTime'         => $startTime,
            'endTime'           => $endTime,
            'ledForm' => $form->createView(),
        ]);
    }
}