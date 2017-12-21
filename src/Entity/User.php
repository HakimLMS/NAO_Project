<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $firstname;


    /**
     * @ORM\Column(type="string")
     */
    private $lastname;



    /**
     * @ORM\Column(type="string")
     */
    private $mail;



    /**
     * @ORM\Column(type="string")
     */
    private $type;



    /**
     * @ORM\Column(type="boolean")
     */
    private $member;



    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UserImage", cascade={"persist"})
     */
    private $image;



    public function getId()
    {
        return $this->id;
    }


    public function getFirstname() 
    {
        return $this->firstname;
    }


    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }


    public function getLastname() 
    {
        return $this->lastname;
    }


    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }


    public function getMail() 
    {
        return $this->mail;
    }


    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }


    public function getType() 
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


    public function getMember() 
    {
        return $this->member;
    }


    public function setMember($member)
    {
        $this->member = $member;
        return $this;
    }


    public function getImage() 
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
}
