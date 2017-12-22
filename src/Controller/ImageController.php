<?php

namespace App\Controller;

use App\Entity\Image;
use App\Form\ImageType;
use App\Services\Upload;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

class ImageController extends Controller
{
    /**
     * @Route("/image", name="image")
     */
    public function index(Request $request, Upload $upload)
    {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form -> handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {

            $upload->uploadImage($image);
            $em->persist($image);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('Image/image.html.twig', array('form' => $form->createView()));
    }
}