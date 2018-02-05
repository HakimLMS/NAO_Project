<?php
namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Entity\Article;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


class DeleteArticleHandler
{
    private $em;
    
    private $articleRepo;
    
    private $checker;
    
    public function __construct(EntityManagerInterface $em, AuthorizationCheckerInterface $checker)
    {
        $this->em = $em;
        $this->articleRepo =  $this->em->getRepository(Article::class);
        $this->checker = $checker;
    }
    
    private function deleteArticle($id) {
        $article = $this->articleRepo->find($id);
        $this->em->remove($article);
        $this->em->flush();
    }
    
    public function response($id)
    {
        if($this->checker->isGranted('ROLE_ADMIN'))
        {
            $this->deleteArticle($id);
        }
        else
        {
           throw new AccessDeniedException("Accès refusé. Votre compte n'a pas les droits nécéssaires pour acceder à cette fonctionnalité" );
        }
        
    }
}
