<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CNGOTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="cngot17")
 */
class Cngot17 {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $titre;

    /**
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $code;
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="certifcn17")
     */
    protected $users;
    
  

    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getCode() {
        return $this->code;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setCode($code) {
        $this->code = $code;
    }

    public function __construct() {
        $this->users= new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * @param User $user
     */
    public function addUser(User $user)
    {
        if ($this->users->contains($user)) {
            return;
        }
        $this->users->add($user);
        $user->addCertifcn17($this);
    }
    /**
     * @param User $user
     */
    public function removeUser(User $user)
    {
        if (!$this->users->contains($user)) {
            return;
        }
        $this->users->removeElement($user);
        $user->removeCertifcn17($this);
    }
    
}
