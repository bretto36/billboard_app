<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 23/06/2016
 * Time: 15:22
 */

namespace AppBundle\Controller;

use AppBundle\Entity\SlotSchedule;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session;
class CartController extends Controller
{


    /**
     * @Route("/store/cart/{ledId}/{slotId}/{cost}/{days}/{startTime}/{endTime}", defaults={"slotId" = null, "cost" = null, "days" = null, "startTime" = null, "endTime" = null}, name="cart")
     * @Method("GET")
     */
    public function indexAction($ledId, $slotId, $cost, $days, $startTime, $endTime)
    {
        $cartItems = array();
        $session = $this->get("session");
        /*$session->clear();*/

        $em = $this->getDoctrine()->getManager();
        $slot = $em->getRepository('AppBundle:Slot')
            ->findOneBy(['id' => $slotId]);


        if (isset($slot)) {
            $em->persist($slot);
            $em->flush();

            $slotSchedule = new SlotSchedule();
            $slotSchedule->setApplied(1);
            $slotSchedule->setStartTime($startTime);
            $slotSchedule->setEndTime($endTime);
            $slotSchedule->setSlot($slotId);
        }

        //check if the session has cartItems
        if ($session->has('cartItems')) {

            $cartItems = $session->get('cartItems');
            $newCartItem = array(
                'cartItem' => array(
                    'slot' => $slot,
                    'cost' => $cost,
                    'days' => $days,
                    'image' => '',
                ),
            );

            //check if the slot is already in the cart
            $slotExists = false;

            foreach ($cartItems as $key => $value) {
                if ($newCartItem['cartItem']['slot'] == $value['cartItem']['slot']) {
                    $slotExists = true;
                }
            }
            if ($slotExists == true) {
                $this->addFlash('success', 'you have already added this slot to your cart.');
            } else {
                array_push($cartItems, $newCartItem);
                $session->set('cartItems', $cartItems);
                $this->addFlash('success', 'you have added another LED and time slot to your cart.');
            }
        }
        //if session doesn't have any cartItems create the session and add cartItems
        else {
            if ($slot != null && $cost != null ) {
                $cartItems = array();
                $cartItem = array(
                    'cartItem' => array(
                        'slot' => $slot,
                        'cost' => $cost,
                        'days' => $days,
                        'image' => null,
                    ),
                );
                array_push($cartItems, $cartItem);
                $session->set('cartItems', $cartItems);

                $this->addFlash('success', 'you have added your first LED and time slot to your cart.');
            }
        }

        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle\Entity\Led')
            ->findAll();

        $led = $em->getRepository('AppBundle:Led')
            ->findOneBy(['id' => $ledId]);

        if (!$led) {
            throw $this->createNotFoundException('this LED Screen cannot be found');
        }

        return $this->render('public/cart/list.html.twig', [
            'cartItems'      => $cartItems,
            'leds'           => $leds,
            'led'            => $led,
            'session'        => $session,
        ]);
    }

    /**
     * @Route("/store/cart", name="cart_list")
     */
    public function listAction()
    {
        $session = $this->get("session");

        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle\Entity\Led')
            ->findAll();

        return $this->render('public/cart/list.html.twig', [
            'session'   => $session,
            'leds'      => $leds
        ]);
    }

    public function removeAction()
    {

    }


}