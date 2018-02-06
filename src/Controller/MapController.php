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
       $dom = new \DOMDocument("1.0");
        $data = $mapHandler->generateData($request, $dom);
        if($data['form']->isSubmitted() && $data['form']->isValid())
        {
            return $this->redirectToRoute('map');
        }
        return $this->render($data['template'], array('form' => $data['form']->createView()));
    }
    
    /**
     * @Route("/validate", name="validate_obs")
     */
    public function Validate(Request $request, ValidateObsHandler $validatehand)
    {
        $obsid = filter_input(INPUT_POST, '_obsid');
        $validatehand->validateObs($obsid);
        return $this->redirectToRoute('dashboard');
    }
    /**
     * @Route("/deny", name="deny_obs")
     */
     public function Deny(Request $request, DenyObsHandler $denyhand)
    {
        $obsid = filter_input(INPUT_POST, '_obsid');
        $denyhand->denyObs($obsid);
        return $this->redirectToRoute('dashboard');
    }
}

