<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Services\ModifyUserHandler;
use App\Services\DashboardHandler;
use App\Services\SubscribeHandler;
use App\Services\ValidateUserHandler;
use App\Services\DowngradeUserHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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
     * @Route("/subscribe", name="subscribe")
     */
    public function subscribeAction(Request $request, SubscribeHandler $subscribeHandler)
    {
       
        $data = $subscribeHandler->generateData($request);
        return $this->render('Administration/subscription.html.twig', array('form' => $data['form']->createView(), 'errors' => $data['errors'] ));
    }
    
    /**
     * @Route("/user/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
    }
      
    /**
     * @Route("/user/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request, DashboardHandler $dashboardHandler)
    {
        $dashboardData = $dashboardHandler->generateData();
        $tempData = $dashboardData['data'];
        $user = $dashboardData['user'];
        $template = $tempData['templatedir']; 
        return $this->render($template, array('data' => $tempData, 'user' => $user));
    }
    
    /**
     * @Route("/user/validateuser", name="validateuser")
     */
    public function validateUserAction(ValidateUserHandler $validateUHandler)
    {      
      $userid = filter_input(INPUT_POST, '_userid');
      $validateUHandler->validateUser($userid);      
      return $this->redirectToRoute('dashboard');
    }
    
    /**
     * @Route("/user/downgradeuser", name="downgradeuser")
     */
    public function downgradeUserAction(DowngradeUserHandler $downgradeUHandler)
    {      
      $userid = filter_input(INPUT_POST, '_userid');
      $downgradeUHandler->downgradeUser($userid); 
      return $this->redirectToRoute('dashboard');
    }
    
    /**
     * @Route("/user/modify", name="modifyuser")
     */
    public function modifyUserAction(ModifyUserHandler $modifyHandler, Request $request)
    {
       $form = $modifyHandler->generateData($request);
       
       if($form->isSubmitted() && $form->isValid())
       {
           return $this->redirectToRoute('dashboard');
       }
       return $this->render('Administration/modifyUser.html.twig', array('form' => $form->createView()));
    }
}