<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 28/06/2016
 * Time: 10:01
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Slot;
use AppBundle\Form\ImageUploadFormType;
use Symfony\Component\HttpFoundation\Session;
class ImageController extends Controller
{
    /**
     * @Route("/store/image/{slotId}", name="image_upload")
     */
    public function uploadAction(Request $request, $slotId)
    {
        $session = $this->get("session");

        $em = $this->getDoctrine()->getManager();

        $leds = $em->getRepository('AppBundle:Led')
            ->findAll();

        $slot = $em->getRepository('AppBundle:Slot')
            ->findOneBy(['id' => $slotId]);


        $form = $this->createForm(ImageUploadFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            // $file stores the uploaded Image file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $data->getImage();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->container->getParameter('images_directory'),
                $fileName
            );

            // Update the 'image' property to store the Image file name
            // instead of its contents
            
            //BELOW IS COMMENTED OUT BECAUSE I DONT WANT TO UPLOAD
            //THE IMAGE UNLESS THE ACTUAL TIME HAS ARRIVED, THERE COULD BE ANOTHER IMAGE
            //LOADED INTO THE SLOT FROM A PREVIOUS UPLOAD.
            /*$slot->setImage($fileName);*/

            // ... persist the $slot variable or any other work
            $em->persist($slot);
            $em->flush();

            //INSTEAD I WANT TO INSERT THE IMAGE NAME INTO SESSION VARIABLE
            //SO THAT THE CART WILL KNOW IF THE IMAGE HAS BEEN UPLOADED
            //--GETTING ERROR HERE--//
            if ($session->has('cartItems')) {

                $cartItems = $session->get('cartItems');

                foreach ($cartItems as $key => $value) {
                    if ($value['cartItem']['slot']->getId() == $slotId) {
                        $session->set($value['cartItem']['image'], $fileName);
                    }
                }

                $this->addFlash('success', 'Your Image has been uploaded. You can now purchase this time slot.');

                return $this->redirect($this->generateUrl('image_upload', [
                    'slotId' => $slotId,
                ]));
            }

        } else {

            /*$this->addFlash('success', 'Your form has not been submitted.');*/
        }

        return $this->render('public/image/upload.html.twig', array(
            'form'      => $form->createView(),
            'leds'      => $leds,
            'slot'      => $slot,
            'session'   => $session,
        ));

    }
}