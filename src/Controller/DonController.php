<?php

namespace App\Controller;

use App\Services\DonHandler;
use App\Services\CheckOutHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DonController extends Controller
{
    /**
     * @Route("/don", name="don")
     */
    public function index(Request $request, DonHandler $donHandler)
    {
        $donData = $donHandler->generateData($request);
        $form = $donData['form'];        
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('CB')->isClicked()) {                
                return $this->redirectToRoute('donCB');
            }
        }
        return $this->render($donData['template'], array('form' => $form->createView()));
    }

    /**
     * @Route("/don/CB", name="donCB")
     */
    public function CB() {
        return $this->render('Don/CB.html.twig');
    }

    
    /**
     * @Route("/don/CB_checkout", name="CBcheckout")
     */
    public function CBcheckout(Request $request, CheckOutHandler $checkout) {
        try {
            $checkout->generateData($request);
            return $this->render('Don/merci.html.twig');
        } catch(\Stripe\Error\Card $e) {
            return $this->redirectToRoute("donCB");        }
    }
}
