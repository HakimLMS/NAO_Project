<?php 

namespace App\Services; 

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Observations;
use App\Form\ObservationType;
use App\Services\SubscribeDataGenerator\FlusherService;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\User;

class MapHandler
{
    private $em;
    
    private $observationRepo;

    private $userRepo;
    
    private $formFactory;
    
    private $flusher;
    
    private $tokenStorage;
    
     private $container;
    
    public function __construct(EntityManagerInterface $em, FlusherService $flusher, FormFactoryInterface $formFactory, TokenStorageInterface $tokenStorage, ContainerInterface $container)
    {
        $this->em = $em;
        $this->observationRepo = $this->em->getRepository(Observations::class);
        $this->formFactory = $formFactory;
        $this->flusher = $flusher;
        $this->tokenStorage = $tokenStorage;
        $this->userRepo = $this->em->getRepository(User::class);
         $this->container = $container;
        
        
    }
    
    private function generateXML()
    {
        $dom = new \DOMDocument("1.0");
        $node = $dom->createElement("markers");
        $parnode = $dom->appendChild($node);       
        return array('dom' => $dom,'parnode' => $parnode);
    }
    
    public function generateMarkersInDb()
    {
        return $this->observationRepo->findAllValidated();
    }
    
    private function generateFormAndObs()
    {
        $obs = new Observations();
        $form = $this->formFactory->create(ObservationType::class, $obs);
        if($this->tokenStorage->getToken()->getUser() != 'anon.')
        {
         $template = 'Map/map.html.twig';   
        }
        else
        {
            $template = 'Map/mapAnonymous.html.twig';
        }
        
        return array('form' => $form, 'obs' => $obs, 'template' => $template);
    }
    
    private function generateResponse(Request $request,Form $form, Observations $obs, User $user)
    {
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form['image']->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->container->getParameter('images_directory'),
                $fileName);
            $obs->setImage($fileName);
            $obs->setUser($user);
            $this->flusher->flushEntity($obs);
           
        }
    }
    
    private function generateResponseNoUser()
    {
        
    }
    
    private function generateUser()
    {
        $userNametoken = $this->tokenStorage->getToken()->getUser()->getUsername();       
        
        if($userNametoken == 'admin')
        {
           $user = $this->userRepo->LoadUserByUsername('Admin@loiseau-rare.fr');
        }
        else
        {
           $user = $this->userRepo->LoadUserByUsername($userNametoken);
        }
        return $user;
    }
    
    public function generateData(Request $request)
    { 
        header("Content-type: text/xml");
        
        
        $domAndParnode = $this->generateXML();
        $result = $this->generateMarkersInDb();
        foreach( $result as $row)
                {
                    $node = $domAndParnode['dom']->createElement("marker");
                    $newnode = $domAndParnode['parnode']->appendChild($node);
                    $newnode->setAttribute("name",$row->getName());
                    $newnode->setAttribute("lat", $row->getLat());
                    $newnode->setAttribute("lng", $row->getLng());
                    $newnode->setAttribute("type", $row->getType());
                }       
        echo $domAndParnode['dom']->saveXML();
        $formAndObs = $this->generateFormAndObs();
        
        if($this->tokenStorage->getToken()->getUser() != 'anon.')
        {
            $user = $this->generateUser();
            $this->generateResponse($request, $formAndObs['form'], $formAndObs['obs'], $user);
            
        }
        return $formAndObs;        
    }
}
