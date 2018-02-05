<?php

namespace App\Repository;

use App\Entity\Observations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\User;

class ObservationsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Observations::class);
    }

    public function findAllValidated()
    {
        return $this->createQueryBuilder('o')
            ->where('o.validated = :value')->setParameter('value', true)
            ->orderBy('o.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllQueued()
    {
        return $this->createQueryBuilder('o')
            ->where('o.validated = :value')->setParameter('value', false)
            ->orderBy('o.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllQueuedByUser($id)
    {
        
        return $this->createQueryBuilder('o')
            ->where( 'o.validated = :value')
            ->andwhere('o.user = :user' )
            ->setParameter('value', true)
            ->setParameter('user',$id)
            ->orderBy('o.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllValidatedByUser($id)
    {
        
        return $this->createQueryBuilder('o')
            ->where( 'o.validated = :value')
            ->andwhere('o.user = :user' )
            ->setParameter('value', true)
            ->setParameter('user',$id)
            ->orderBy('o.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findById($id)
    {
        
        return $this->createQueryBuilder('o')
            ->where('o.id = :id')
            ->setParameter('id', $id)
            ->orderBy('o.id', 'ASC')
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('o')
            ->where('o.something = :value')->setParameter('value', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
