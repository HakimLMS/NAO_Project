<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Aves;
use App\Form\ResearchBirdType;
use App\Services\ResearchHandler;
use Symfony\Component\Form\FormFactoryInterface;


class ResearchController extends Controller
{
    
    /**
     * @Route("/research", name="research")
     */
    public function index(Request $request/*, ResearchHandler $researchHandler*/)
    {
       
       /*$data = $researchHandler->generateData($request);
       $form = $data['form'];*/
       $aves = new Aves();
       $form = $this->get('form.factory')->create(ResearchBirdType::class, $aves);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()) {

          $vernName = $form->getData()->getVernName('aves');
       		$birds = $this->getDoctrine()
       			->getRepository(Aves::class)
            //->findBy($vernName);
       			->findByVernName($vernName);  

       		return $this->render('research/results.html.twig', array('birds' => $birds));	
       }

       return $this->render('research/research.html.twig', array('form' => $form->createview()));
    }

    /**
     * @Route("/research/results", name="results")
     */
   /* public function results(Request $request) {
    	$birds = $request->getSession()->get('birds');

    	return $this->render('research/results.html.twig', array('birds' => $birds));
    }*/
}
