<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 23/06/2016
 * Time: 15:22
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class CartController extends Controller
{
    /**
     * @Route("/store/cart/list", name="cart_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle\Entity\Led')
            ->findAll();

        return $this->render('public/cart/list.html.twig', array(
            'leds' => $leds,
        ));
    }
}