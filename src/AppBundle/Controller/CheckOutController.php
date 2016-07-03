<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 02/07/2016
 * Time: 11:19
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CheckOutController extends Controller
{
    /**
     * @Route("store/checkout/billing", name="billing_info")
     */
    public function billingAction()
    {
        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle:Led')
            ->findAll();

        return $this->render('public/checkOut/billing.html.twig', [
            'leds'    => $leds,
        ]);
    }

    /**
     * @Route("store/checkout/payment", name="payment_choice")
     */
    public function paymentChoiceAction()
    {
        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle:Led')
            ->findAll();

        return $this->render('public/checkOut/paymentchoice.html.twig', [
            'leds'    => $leds,
        ]);
    }

    /**
     * @Route("store/checkout/review", name="payment_review")
     */
    public function paymentReviewAction()
    {
        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle:Led')
            ->findAll();

        return $this->render('public/checkOut/review.html.twig', [
            'leds'    => $leds,
        ]);
    }
}