<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 22/06/2016
 * Time: 11:33
 */

namespace AppBundle\Controller;

use AppBundle\Form\LedAddToCartFormType;
use AppBundle\Form\LedAvailabilityFormType;
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
        $startTime = new \DateTime(strtotime('+7 days'|date('m-d-Y')));
        $endTime = new \DateTime(strtotime('+50 days'|date('m-d-Y')));

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
        $ledAvailabilityForm = $this->createForm(LedAvailabilityFormType::class);
        $ledAddToCartForm = $this->createForm(LedAddToCartFormType::class, ['startTime' => $startTime, 'endTime' => $endTime]);

        // This line was missing
        $ledAvailabilityForm->handleRequest($request);
        $ledAddToCartForm->handleRequest($request);


        if ($ledAvailabilityForm->isSubmitted()) {
            if ($ledAvailabilityForm->isValid()) {
                $data = $ledAvailabilityForm->getData();

                $startTime = $data['startTime'];
                $endTime = $data['endTime'];
            } else {
                // Check for errors and show a message
            }
        }

        if ($ledAddToCartForm->isSubmitted()) {
            if ($ledAddToCartForm->isValid()) {
                $cartItem = $ledAddToCartForm->getData();

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($cartItem);
                $em->flush();

                $this->addFlash('success', 'you have added the LED Screen to your Cart');

                return $this->redirectToRoute('led_list', array('ledId' => $ledId));
            } else {
                // Check for errors and show a message
            }
        }

        $slotsAvailable = $em->getRepository('AppBundle:Slot')
            ->findAllSlotsAvailable($startTime, $endTime);

        return $this->render('public/led/list.html.twig', [
            'led'                           => $led,
            'leds'                          => $leds,
            'slots'                         => $slots,
            'slotsAvailable'                => $slotsAvailable,
            'startTime'                     => $startTime,
            'endTime'                       => $endTime,
            'ledAvailabilityForm'           => $ledAvailabilityForm->createView(),
            'ledAddToCartForm'              => $ledAddToCartForm->createView(),
        ]);
    }
}
