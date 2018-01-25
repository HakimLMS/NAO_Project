<?php
namespace App\Services;

use App\Services\SubscribeDataGenerator\FlusherService;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Form\ArticleType;
use App\Entity\Article;

class NewArticleHandler
{
    private $formFactory;
    
    private $flusher;
    
    private $container;
    
    private $checker;

    public function __construct(FlusherService $flusher, FormFactoryInterface $formFactory, ContainerInterface $container,AuthorizationCheckerInterface $checker)
    {
        $this->formFactory = $formFactory;
        $this->flusher = $flusher;
        $this->container = $container;
        $this->checker = $checker;
    }
    
    private function generateArticleAndForm()
    {
        $article = new Article();
        $form = $this->formFactory->create(ArticleType::class, $article);
        return array('form' => $form, 'article' => $article);
    }
    
    private function generateResponse($form, Request $request, Article $article)
    {
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {                   
            $file = $article->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->container->getParameter('images_directory'),
                $fileName);
            
            $article->setImage($fileName);
            
            $this->flusher->flushEntity($article);
        }
        
        return $form;
    }
    
    
    public function generateData(Request $request)
    {
        if($this->checker->isGranted('ROLE_ADMIN'))
        {
           $arrayData = $this->generateArticleandForm();        
           $form = $arrayData['form'];
           $article = $arrayData['article'];
           $form = $this->generateResponse($form, $request, $article);
           return $form; 
        }
        else{
            throw new AccessDeniedException("Accès refusé. Votre compte n'a pas les droits nécéssaires pour acceder à cette fonctionnalité" );
        }
        
    }
}