<?php

// src/Services/SubscribeHandler.php

namespace App\Services;

use App\Entity\User;
use App\Services\SubscribeDataGenerator\FlusherService;
use App\Services\SubscribeDataGenerator\UserFixerService;
use App\Services\SubscribeDataGenerator\CheckUserRoleService;
use App\Form\SubscriptionType;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class SubscribeHandler
{
    private $formFactory;
    
    private $flusher;
    
    private $checktype;
    
    private $validator;
    
    private $namer;
    
    public function __construct(FormFactoryInterface $formFactory, FlusherService $flusher, CheckUserRoleService $checktype, UserFixerService $namer, ValidatorInterface $validator)
    {
        $this->formFactory = $formFactory;
        $this->flusher = $flusher;
        $this->checktype = $checktype;
        $this->namer = $namer;
        $this->validator = $validator;
    }
        
    //generate the formtypedata return FormTypeInterface
    private function generateForm(User $user)
    {
        $form = $this->formFactory->create(SubscriptionType::class, $user);
        return $form;
    }
        
    //handle form's response and call services to fix user before flush in DB
    private function generateResponse($form, Request $request, User $user)
    {
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {      
            $this->namer->FixUser($user);
            $this->checktype->checkRole($user);
            $this->flusher->flushEntity($user);
        }        
    }
    
    private function validateResponse($user)
    {
        $errors = $this->validator->validate($user);
        return $errors;
    }
    
    public function generateData(Request $request)
    {
        $user = new User();           
        $form = $this->generateForm($user);
        $errors = $this->validateResponse($user);
        $this->generateResponse($form, $request,$user);
        return array('form' => $form, 'errors' => $errors);
    }
}