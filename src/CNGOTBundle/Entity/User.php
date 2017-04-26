<?php

namespace CNGOTBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ExclusionPolicy("all") 
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string", length=255)
     * @Expose
     */
    protected $nom;

    /**
     *
     * @ORM\Column(type="string", length=255)
     * @Expose
     */
    protected $prenom;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $niveau;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $specialite;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $secteur;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $service;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $address;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $ville;

    /**
     *
     * @ORM\Column(type="integer", nullable=false)
     * @Expose
     */
    private $etat;
    
    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     * @Expose
     */
    protected $codepostal;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $pays;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $telephone;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    protected $options;

    /**
     * @ORM\ManyToOne(targetEntity="MasterClass")
     * @Expose
     */
    protected $masterclass;

    /**
     * @ORM\ManyToOne(targetEntity="Atme")
     */
    protected $atme;

    /**
     * @ORM\ManyToOne(targetEntity="Cngot16")
     */
    protected $ateliercngot16;

    /**
     * @ORM\ManyToOne(targetEntity="Cngot17")
     * @Expose
     */
    protected $ateliercngot17;
    
    /**
     * @ORM\ManyToMany(targetEntity="Cngot17", inversedBy="users")
     * @ORM\JoinTable(name="certificationcn17")
     * @Expose
     */
    protected $certifcn17;
    /**
     * @ORM\ManyToMany(targetEntity="MasterClass", inversedBy="users")
     * @ORM\JoinTable(name="certificationmaster")
     * @Expose
     */
    protected $certifmaster;

    public function __construct() {

        parent::__construct();
        $this->roles = array('ROLE_USER');
        $this->enabled = true;
        $this->etat = 0;
        $this->certifcn17= new \Doctrine\Common\Collections\ArrayCollection();
        $this->certifmaster= new \Doctrine\Common\Collections\ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function getNiveau() {
        return $this->niveau;
    }

    function getSpecialite() {
        return $this->specialite;
    }

    function getSecteur() {
        return $this->secteur;
    }

    function getService() {
        return $this->service;
    }

    function getAddress() {
        return $this->address;
    }

    function getVille() {
        return $this->ville;
    }

    function getCodePostal() {
        return $this->codepostal;
    }

    function getPays() {
        return $this->pays;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    function setSecteur($secteur) {
        $this->secteur = $secteur;
    }

    function setService($service) {
        $this->service = $service;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setCodePostal($codePostal) {
        $this->codepostal = $codePostal;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function getOptions() {
        return $this->options;
    }

    function getMasterclass() {
        return $this->masterclass;
    }

    function getAtme() {
        return $this->atme;
    }

    function setOptions($options) {
        $this->options = $options;
    }

    function setMasterclass($masterclass) {
        $this->masterclass = $masterclass;
    }

    function setAtme($atme) {
        $this->atme = $atme;
    }

    function getAteliercngot16() {
        return $this->ateliercngot16;
    }

    function getAteliercngot17() {
        return $this->ateliercngot17;
    }

    function setAteliercngot16($ateliercngot16) {
        $this->ateliercngot16 = $ateliercngot16;
    }

    function setAteliercngot17($ateliercngot17) {
        $this->ateliercngot17 = $ateliercngot17;
    }

    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

 
            
    public function getParent() {
        return 'FOSUserBundle';
    }
    
    
    
    
    /**
     * Get the formatted name to display (NAME Firstname or username)
     * 
     * @param $separator: the separator between name and firstname (default: ' ')
     * @return String
     * @VirtualProperty 
     */
    public function getUsedName($separator = ' '){
        if($this->getNom()!=null && $this->getPrenom()!=null){
            return ucfirst(strtolower($this->getPrenom())).$separator.strtoupper($this->getNom());
        }
        else{
            return $this->getUsername();
        }
    } 

    
    /**
     * @param Cngot17 $cn17
     */
    public function addCertifcn17(Cngot17 $cn17)
    {
        if ($this->certifcn17->contains($cn17)) {
            return;
        }
        $this->certifcn17->add($cn17);
        $cn17->addUser($this);
    }
    
    
    /**
     * @param Cngot17 $cn17
     */
    public function removeCertifcn17(Cngot17 $cn17)
    {
        if (!$this->certifcn17->contains($cn17)) {
            return;
        }
        $this->certifcn17->removeElement($cn17);
        $cn17->removeUser($this);
    }
    
    
    
    /**
     * @param MasterClass $master
     */
    public function addcertifmaster(MasterClass $master)
    {
        if ($this->certifmaster->contains($master)) {
            return;
        }
        $this->certifmaster->add($master);
        $master->addUser($this);
    }
    /**
     * @param MasterClass $master
     */
    public function removeCertifmaster(MasterClass $master)
    {
        if (!$this->certifmaster->contains($master)) {
            return;
        }
        $this->certifmaster->removeElement($master);
        $master->removeUser($this);
    }
    
    function getCertifcn17() {
        return $this->certifcn17;
    }

    function getCertifmaster() {
        return $this->certifmaster;
    }
    
    
}

?>