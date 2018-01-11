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


class ResearchController extends Controller
{
    /**
     * @Route("/research", name="research")
     */
    public function index(Request $request, ResearchHandler $researchHandler)
    {
       $data = $researchHandler->generateData($request);

       return $this->render('research/research.html.twig', array('form' => $data['form']->createview()));
    }
}
