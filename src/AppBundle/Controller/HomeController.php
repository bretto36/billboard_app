<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 20/06/2016
 * Time: 10:21
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class HomeController extends Controller
{
    /**
     * @Route("/store/home", name="store_home_show")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle\Entity\Led')
            ->findAll();

        return $this->render('public/home/show.html.twig', array(
            'leds' => $leds,
        ));
    }

}