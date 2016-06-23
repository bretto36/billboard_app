<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 23/06/2016
 * Time: 13:54
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class baseController extends Controller
{
        public function baseAction()
        {
            $em = $this->getDoctrine()->getManager();

            $leds = $em->getRepository('AppBundle:Led')
                ->findAll();

            return $this->render('base.html.twig', [
                'leds'  => $leds,
            ]);
        }


}