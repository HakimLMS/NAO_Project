<?php

namespace App\Controller;

use App\Entity\Don;
use App\Form\DonType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DonController extends Controller
{
    /**
     * @Route("/don", name="don")
     */
    public function index(Request $request)
    {
        $don = new Don();
        $form = $this->createForm(DonType::class, $don);
        $form -> handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($don);
            //$em->flush();
            //return $this->redirectToRoute('');
        }

        return $this->render('Don/don.html.twig', array('form' => $form->createView()));

    }
}
