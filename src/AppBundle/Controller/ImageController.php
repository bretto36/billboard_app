<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 28/06/2016
 * Time: 10:01
 */

namespace AppBundle\Controller;


use AppBundle\Form\ImageUploadFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Slot;
class ImageController extends Controller
{
    /**
     * @Route("/store/image/{slotId}", name="image_upload")
     */
    public function uploadAction(Request $request, $slotId)
    {
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
            $file = $data['image'];

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->container->getParameter('brochures_directory'),
                $fileName
            );

            // Update the 'image' property to store the Image file name
            // instead of its contents
            $slot->setImage($fileName);

            // ... persist the $product variable or any other work
            $em->persist($slot);
            $em->flush();

            return $this->redirect($this->generateUrl('image_upload'));
        }

        return $this->render('public/image/upload.html.twig', array(
            'form' => $form->createView(),
            'leds' => $leds,
            'slot' => $slot,
        ));

    }
}