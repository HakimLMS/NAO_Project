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
            if ($form->get('CB')->isClicked()) {
                $don->setMeansOfPayment('CB');
                $session = $request->getSession();
                $session->set('don', $don);
                return $this->redirectToRoute('CB');
            }
            elseif ($form->get('CHQ')->isClicked()) {
                $don->setMeansOfPayment('CHQ');
                $em->persist($don);
                $em->flush();
                return $this->render('Don/CHQ.html.twig');
            }
            elseif ($form->get('VIR')->isClicked()) {
                $don->setMeansOfPayment('VIR');
                $em->persist($don);
                $em->flush();
                return $this->render('Don/VIR.html.twig');
            }
            else {
                return $this->redirectToRoute('home');
            }

        }

        return $this->render('Don/don.html.twig', array('form' => $form->createView()));

    }

    /**
     * @Route("/don/CB", name="CB")
     */
    public function CB() {
        return $this->render('Don/CB.html.twig');
    }

    public function CBcheckout(Request $request) {
        \Stripe\Stripe::setApiKey("sk_test_8QQmpwx1lhq1CggvKz28zqDz");

        // Get the credit card details submitted by the form
        $token = $request->request->get('stripeToken');
        $session = $request->getSession();
        $don = $session->get('don');
        $tarif = $don->getAmount();
        $tarif *= 100;

        try {
            \Stripe\Charge::create(array(
                "amount" => $tarif, // Amount in cents
                "currency" => "eur",
                "source" => $token,
                "description" => "Don de ".$don->getFirstname()." ".$don->getLastname()
            ));

            //FLUSH DB !
            $em = $this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();

            return $this->render('Don/merci.html.twig');

        } catch(\Stripe\Error\Card $e) {
            return $this->redirectToRoute("CB");
        }
    }
}
