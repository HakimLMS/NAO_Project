<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Services\MapHandler;
use App\Services\ValidateObsHandler;
use App\Services\DenyObsHandler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class MapController extends Controller
{
    /**
     * @Route("/map", name="map")
     */
    public function MapAction(Request $request, MapHandler $mapHandler)
    {
        $data = $mapHandler->generateData($request);
        return $this->render('Map/map.html.twig', array('form' => $data['form']->createView()));
    }
    
    /**
     * @Route("/validate/{id}", name="validate_obs")
     */
    public function Validate(Request $request, ValidateObsHandler $validatehand, $id)
    {
        $validatehand->validateObs($id);
        return $this->redirectToRoute('dashboard');
    }
    /**
     * @Route("/deny/{id}", name="deny_obs")
     */
     public function Deny(Request $request, DenyObsHandler $denyhand, $id)
    {
        $denyhand->validateObs($id);
        return $this->redirectToRoute('dashboard');
    }
}

