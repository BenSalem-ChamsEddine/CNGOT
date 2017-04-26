<?php

namespace CNGOTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * AbstractVideo
 *
 * @ORM\Table(name="abstractvideo")
 * @ORM\Entity
 */
class AbstractVideo {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $titre;

    /**
     *
     * @ORM\Column(type="text", length=65535, nullable=true)
     *
     */
    private $introduction;

    /**
     *
     * @ORM\Column(type="text", length=65535, nullable=true)
     *
     */
    private $materiel;

    /**
     *
     * @ORM\Column(type="text", length=65535, nullable=true)
     *
     */
    private $resultats;

    /**
     *
     * @ORM\Column(type="text", length=65535, nullable=true)
     *
     */
    private $conclusions;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $categorie;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $auteur1;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $auteur2;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $auteur3;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $institution;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     *
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="CNGOTBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;



    /**
     * @Assert\File(
     *     maxSize = "500M",
     *     mimeTypes = {"video/mpeg","video/3gp", "video/mp4", "video/quicktime", "video/x-ms-wmv", "video/x-msvideo", "video/x-flv"},
     *     mimeTypesMessage = "ce format de video est inconnu",
     *     uploadIniSizeErrorMessage = "uploaded file is larger than the upload_max_filesize PHP.ini setting",
     *     uploadFormSizeErrorMessage = "uploaded file is larger than allowed by the HTML file input field",
     *     uploadErrorMessage = "uploaded file could not be uploaded for some unknown reason",
     *     maxSizeMessage = "fichier trop volumineux"
     * )
     */
    public $file;

    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getIntroduction() {
        return $this->introduction;
    }

    function getMateriel() {
        return $this->materiel;
    }

    function getResultats() {
        return $this->resultats;
    }

    function getConclusions() {
        return $this->conclusions;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getAuteur1() {
        return $this->auteur1;
    }

    function getAuteur2() {
        return $this->auteur2;
    }

    function getAuteur3() {
        return $this->auteur3;
    }

    function getInstitution() {
        return $this->institution;
    }

    function getStatus() {
        return $this->status;
    }

    function getUser() {
        return $this->user;
    }

    function getPath() {
        return $this->path;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setIntroduction($introduction) {
        $this->introduction = $introduction;
    }

    function setMateriel($materiel) {
        $this->materiel = $materiel;
    }

    function setResultats($resultats) {
        $this->resultats = $resultats;
    }

    function setConclusions($conclusions) {
        $this->conclusions = $conclusions;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setAuteur1($auteur1) {
        $this->auteur1 = $auteur1;
    }

    function setAuteur2($auteur2) {
        $this->auteur2 = $auteur2;
    }

    function setAuteur3($auteur3) {
        $this->auteur3 = $auteur3;
    }

    function setInstitution($institution) {
        $this->institution = $institution;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPath($path) {
        $this->path = $path;
    }

    
    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../upload/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'abstractVideo/documents';
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to


        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // On sauvegarde le nom de fichier
        $this->path = $this->file->getClientOriginalName();

        // La propriété file ne servira plus
        $this->file = null;
    }

}
