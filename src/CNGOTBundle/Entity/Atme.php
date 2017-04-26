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
 * @ORM\Table(name="atme")
 */
class Atme {

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

}
