<?php

namespace App\Services;

use App\Entity\Don;
use App\Form\DonType;
use Symfony\Component\HttpFoundation\Request;
use App\Services\SubscribeDataGenerator\FlusherService;
use Symfony\Component\Form\FormFactoryInterface;

class DonHandler
{
    private $flusher;
    
    private $formFactory;
    
    private $em;
    
    private $donRepo;
    
    
    public function __construct(FlusherService $flusher,  FormFactoryInterface $formfactory)
    {
        $this->flusher = $flusher;
        $this->formFactory = $formfactory;
    }
    
    private function generateDonandForm()
    {
        $don = new Don();
        $form = $this->formFactory->create(DonType::class, $don);
        return array('form' => $form, 'don' => $don);        
    }
    
    public function generateData( Request $request)
    {
        $donAndForm = $this->generateDonandForm();
        $form = $donAndForm['form'];
        $don = $donAndForm['don'];
        $form->handleRequest($request);
        $template = 'Don/don.html.twig';
        
        
        if ($form->isSubmitted() && $form->isValid())
        {
            if ($form->get('CB')->isClicked()) {
                $don->setMeansOfPayment('CB');
                $session = $request->getSession();
                $session->set('don', $don); 
             }
            elseif ($form->get('CHQ')->isClicked()) {
                $don->setMeansOfPayment('CHQ');                
                $this->flusher->flushEntity($don);
                $template = 'Don/CHQ.html.twig';
            }
            elseif ($form->get('VIR')->isClicked()) {
                $don->setMeansOfPayment('VIR');
                $this->flusher->flushEntity($don);
                $template = ('Don/VIR.html.twig');
            }
        }
        return array('form' => $form, 'template' => $template);
    }
}

