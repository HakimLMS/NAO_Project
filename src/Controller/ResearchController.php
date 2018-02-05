<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use App\Services\ResearchHandler;


class ResearchController extends Controller
{
    
    /**
     * @Route("/research", name="research")
     */
    public function index(Request $request, ResearchHandler $researchHandler)
    {
       
        $form = $researchHandler->generateData($request);

        if($form->isSubmitted() && $form->isValid()) {

            $vernName = $form['vern_name']->getData();
            $birds = $researchHandler->generateBirds($vernName);
            $request->getSession()->set('birds', $birds);

            return $this->redirectToRoute('results');	
        }

        return $this->render('research/research.html.twig', array('form' => $form->createview()));
    }


    /**
     * @Route("/research/results", name="results")
     */
    public function results(Request $request)
    {
        $birds = $request->getSession()->get('birds');

        return $this->render('research/results.html.twig', array('birds' => $birds));
    }

    /**
     * @Route("/research/fiche-oiseau/{cd_name}", name="fiche_oiseau")
     */
    public function fiche(Request $request, ResearchHandler $researchHandler, $cd_name)
    {
        $bird = $researchHandler->generateBird($cd_name);

        return $this->render('research/fiche-oiseau.html.twig', array('bird' => $bird));
    }

}
