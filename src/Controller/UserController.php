<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\SubscriptionType;
use App\Services\FlusherService;
use App\Services\UserFixerService;
use App\Services\CheckUserRoleService;
use App\Services\DashboardHandler;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
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
    public function subscribeAction(Request $request, FlusherService $flusher, CheckUserRoleService $checktype, UserFixerService $namer)
    {
        $user = new User();
        $form = $this->createForm(SubscriptionType::class, $user);//passer par container ! Injecter interface seulement 
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $namer->FixUser($user);
            $checktype->checkRole($user);
            $flusher->flushEntity($user);
        }        
        // responder  à mep 
        return $this->render('Administration/subscription.html.twig', array('form' => $form->createView() ));
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
    


    


    //user/{id} dashboard.
    /**
     * @Route("/user/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request, DashboardHandler $dashboardHandler)
    {
        $tempData = $dashboardHandler->generateData();
        return $this->render($tempData['templatedir'], array('data'=> $tempData['userQueued']));
    }
}