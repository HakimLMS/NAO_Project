<?php

namespace App\Repository;

use App\Entity\Comment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CommentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Comment::class);
    }

    
    public function findById($id)
    {
        return $this->createQueryBuilder('a')
            ->where('a.id = :id')->setParameter('id', $id)
            ->orderBy('a.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findByArticle($articleid)
    {
         return $this->createQueryBuilder('c')
            ->where('c.article   = :articleid')->setParameter('articleid', $articleid)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
            
    
}
