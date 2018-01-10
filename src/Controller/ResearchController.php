<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Aves;
use App\Form\ResearchBirdType;


class ResearchController extends Controller
{
    /**
     * @Route("/research", name="research")
     */
    public function index(Request $request)
    {
       $bird = new Aves; 
       $form = $this->createForm(ResearchBirdType::class, $bird);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()) {

       }

       return $this->render('research/research.html.twig', array('form' => $form->createView()));
    }
}
