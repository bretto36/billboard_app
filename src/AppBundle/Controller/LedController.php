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
use AppBundle\Form\SlotAddToScheduleFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;
class LedController extends Controller
{
    /**
     * @Route("/store/{ledId}", name="led_list")
     */
    public function listAction($ledId,Request $request)
    {
        $session = $this->get("session");

        $startTime = null;
        $endTime = null;

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

        // This line was missing
        $ledAvailabilityForm->handleRequest($request);


        if ($ledAvailabilityForm->isSubmitted()) {
            if ($ledAvailabilityForm->isValid()) {
                $data = $ledAvailabilityForm->getData();

                $startTime = $data['startTime'];
                $endTime = $data['endTime'];
            } else {
                // Check for errors and show a message
            }
        }

        $slotSchedulesUnAvailable = $em->getRepository('AppBundle:SlotSchedule')
            ->findAllSlotSchedulesUnAvailable($startTime, $endTime, $ledId);

        foreach ($slotSchedulesUnAvailable as $unavailableSlot) {
            $unavailableId['id'] = $unavailableSlot->getId();
        }

        $slotsAvailable = null;

        if (isset($unavailableId)) {
            $slotsAvailable = $em->getRepository('AppBundle:Slot')
                ->findAllSlotsAvailable($unavailableId, $ledId);
        }

        return $this->render('public/led/list.html.twig', [
            'led'                           => $led,
            'leds'                          => $leds,
            'slots'                         => $slots,
            'slotSchedulesUnAvailable'      => $slotSchedulesUnAvailable,
            'slotsAvailable'                => $slotsAvailable,
            'startTime'                     => $startTime,
            'endTime'                       => $endTime,
            'ledAvailabilityForm'           => $ledAvailabilityForm->createView(),
            'session'                       => $session,
        ]);
    }
}
