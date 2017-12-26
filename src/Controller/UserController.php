<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\SubscriptionType;
use App\Services\FlusherService;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Services\CheckUserRoleService;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

     /**
     * @Route("/user/subscribe", name="subscribe")
     */
    public function subscribeAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(SubscriptionType::class, $user);
        $flusher = new FlusherService($this->getDoctrine()->getManager());
        $checktype = new CheckUserRoleService();
        $form->handleRequest($request);
        
        //if naturaliste need Admin vadilation. -> flush en BDD avec variable validé 
        if ($form->isSubmitted() && $form->isValid())
        {
            $user->setSalt(); //see to remove this one
            $checktype->checkRole($user); //checktype service
            $flusher->flushEntity($user);
        }
        
        return $this->render('Administration/subscription.html.twig', array('form' => $form->createView() ));
    }
    
    public function loginAction(Request $request)
    {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);
        

        
        if($form->isSubmitted() && $form->isValid())
        {
            $session = new Session();
            $session->start();
        }
    }


    //user/{id} dashboard.
    /**
     * @Route("/user/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request)
    {
       
    //if($_SESSION['role'] === 'Admin')
        //{
            $naturalistesqueued = $this->getDoctrine()->getRepository(User::class)->findbyState('queued');
        //}
        return $this->render('Administration/dashboard.html.twig', array('naturalistesqueued' => $naturalistesqueued));
    }
}