<?php
// src/Services/FlusherService.php

/*
 * Service maid to avoid calling doctrine's em to parsist and flush in controller
 */

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;

class FlusherService
{
   private $em; 
   
   
   public function __construct(EntityManagerInterface $em){
       $this->em = $em;
   } 
   
   public function flushEntity($entity){
       
       if (is_array($entity))
       {
           foreach($entity as $ent)
           {
               $this->em->persist($ent);
           }
       }
       else
       {
           $this->em->persist($entity);
           
       }
       
       $this->em->flush();
       
   }
}
