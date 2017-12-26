<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, EquatableInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $roles;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastname;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salt;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstname;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mail;
    
     /**
     * @ORM\Column(type="date")
     */
    private $birth;
    
    /**
     * @ORM\Column(type="boolean", length=100)
     */
    private $member;
    
    /**
     * @ORM\Column(type="boolean", length=100)
     */
    private $newsletter;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $image;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $procard;
    
    /**
     *  @ORM\Column(type="string", length=100)
     */
    private $state;
    
    //getters
    
    function getId() {
        return $this->id;
    }

    function getBirth() {
        return $this->birth;
    }
    
    function getRoles() {
        return $this->roles;
    }

    function getUsername() {
        return $this->username;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getPassword() {
        return $this->password;
    }

    function getSalt() {
        return $this->salt;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getMail() {
        return $this->mail;
    }

    function getMember() {
        return $this->member;
    }

    function getImage() {
        return $this->image;
    }
    
    function getNewsletter() {
        return $this->newsletter;
    }
    
    function getProcard() {
        return $this->procard;
    }
    
    function getState() {
        return $this->state;
    }

    
    //setters
    
    function setRoles($roles) {
        $this->roles = $roles;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setSalt() {
        $this->salt = sha1($this->password);
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }
    
    function setBirth($birth) {
        $this->birth = $birth;
    }

    function setMember($member) {
        $this->member = $member;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setNewsletter($newsletter) {
        $this->newsletter = $newsletter;
    }

    function setProcard($procard) {
        $this->procard = $procard;
    }
    
    function setState($state) {
        $this->state = $state;
    }

    
    //functions
    
        public function eraseCredentials()
    {
    }
    
        public function isEqualTo(UserInterface $user)
    {
        if (!$user instanceof User) {
            return false;
        }

        if ($this->password !== $user->getPassword()) {
            return false;
        }

        if ($this->salt !== $user->getSalt()) {
            return false;
        }

        if ($this->username !== $user->getUsername()) {
            return false;
        }

        return true;
    }


}
