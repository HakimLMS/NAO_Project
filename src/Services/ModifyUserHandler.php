<?php

namespace App\Services;

use App\Services\SubscribeDataGenerator\FlusherService;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\UserModifyType;

class ModifyUserHandler
{
    private $em;
    
    private $flusher;
    
    private $checker;
    
    private $userRepo;
    
    private $encoder;
    
    private $formFactory;
    
    private $tokenStorage;

    public function __construct(EntityManagerInterface $em, AuthorizationCheckerInterface $checker, FlusherService $flusher, FormFactoryInterface $formFactory, TokenStorageInterface $tokenstorage, ContainerInterface $container, UserPasswordEncoderInterface $encoder){
        $this->em = $em;
        $this->userRepo =  $this->em->getRepository(User::class);
       
        $this->checker = $checker;
        $this->formFactory = $formFactory;
        $this->flusher = $flusher;
        $this->tokenStorage = $tokenstorage;
        $this->container = $container;
        $this->encoder = $encoder;
    }
    
    private function findUser()
    {
        $userNametoken = $this->tokenStorage->getToken()->getUser()->getUsername();         
        $user = $this->userRepo->LoadUserByUsername($userNametoken);
        return $user;
    }
    
    private function generateForm(User $user)
    {
        $form  = $this->formFactory->create(UserModifyType::class, $user);
        return $form;
         
    }
    
    private function encodePassword(User $user)
    {
        $password = $user->getPassword();
        $encoded = $this->encoder->encodePassword($user, $password);
        $user->setPassword($encoded);
        
    }
    
    private function generateResponse($form, Request $request, User $user)
    {
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form['image']->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->container->getParameter('images_directory'),
                $fileName);
            $user->setImage($fileName);
            $this->encodePassword($user);
            $this->flusher->flushEntity($user);
        }
    }
    
    public function generateData(Request $request)
    {
        $user = $this->findUser();
        $form = $this->generateForm($user);
        $this->generateResponse($form, $request, $user);
        return $form;        
    }
            
}
