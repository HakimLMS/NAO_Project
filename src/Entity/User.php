<?php

namespace App\Entity;



use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity("email", message ="Cette adresse Email est déja utilisée, veuillez changer d'adresse.")
 */
class User implements  AdvancedUserInterface, \Serializable, EquatableInterface
{
    
    //Comments to add
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     *
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $type;
    
    /**
     * @ORM\Column(type="array")
     */
    private $roles;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Regex("/^[a-zA-Z]{3,}$/", message = "Le nom doit contenir au moins 3 lettres")
     * 
     */
    private $lastname;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Regex("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", message = "Choisissez un mot de passe d'au minimum 8 caractères, contenant une majuscule, minuscule et un chiffre")
     */
    private $password;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstname;
    
    /**
     * @ORM\Column(name="email", type="string", length=100, unique=true)
     * @Assert\Email()      
     */
    private $email;
    
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
     * @ORM\Column(type="boolean", length=100)
     */
    private $conditions;
    
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
        /**
     *  @ORM\Column(type="string", nullable=true)
     */
    private $salt;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    public function __construct()
    {
        $this->isActive = true;
        $this->image = 'userdefault.jpg';
        
    }
   
    //getters
    
    function getId() {
        return $this->id;
    }
    
    function getType() {
        return $this->type;
    }

    function getBirth() {
        return $this->birth;
    }
    
    public function getRoles()
    {
        return $this->roles;
    }

    function getUsername() {
        return $this->email;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getPassword() {
        return $this->password;
    }

    function getSalt() {
        return null;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getEmail() {
        return $this->email;
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

    function getConditions() {
        return $this->conditions;
    }
    
    function getProcard() {
        return $this->procard;
    }
    
    function getState() {
        return $this->state;
    }

    function getPlainpassword() {
        return $this->plainpassword;
    }

    function getIsActive() {
        return $this->isActive;
    }

        
    //setters
    


    function setUsername() {
        $this->username = $this->email;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setType($type) {
        $this->type = $type;
    }
        
    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setEmail($mail) {
        $this->email = $mail;
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

    function setConditions($conditions) {
        $this->conditions = $conditions;
    }

    function setProcard($procard) {
        $this->procard = $procard;
    }
    
    function setState($state) {
        $this->state = $state;
    }
    
    function setRoles(array $roles) {
        $this->roles = $roles;
    }

    function setPlainpassword($plainpassword) {
        $this->plainpassword = $plainpassword;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

    //functions
    
    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }
    
    
    
    public function eraseCredentials()
    {
      
    }

    public function serialize(){
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->salt,
            $this->isActive

        ));
    }

    public function unserialize($serialized){ 
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->salt,
            $this->isActive

        ) = unserialize($serialized);
        
    }
    
     public function isEqualTo(UserInterface $user)
    {
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
