<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image Entity
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="PFKLibrary\AppBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Image {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\JoinColumn(nullable=true)
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     * @ORM\JoinColumn(nullable=true)
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    private $file;
    private $tempFilename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_maj", type="datetime")
     */
    private $date_maj;

    /**
     * @var integer 
     * @ORM\Column(name="activated", type="integer")
     */
    private $activated;

    /**
     * @var integer 
     * @ORM\Column(name="deleted", type="integer")
     */
    private $deleted;

    /**
     * @var integer 
     * @ORM\Column(name="validated", type="integer")
     */
    private $validated;

    public function __construct() {
        $this->date_maj = new \Datetime(); // Par défaut, la date del'motreferent est la date d'aujourd'hui
        $this->deleted = 0;
        $this->activated = 1;
        $this->validated = 1;
    }

    public function setFile(UploadedFile $file) {
        $this->file = $file;
        // On vérifie si on avait déjà un fichier pour cette entité
        if (null !== $this->url) {
            // On sauvegarde l'extension du fichier pour le supprimer plus tard
            $this->tempFilename = $this->url;
            // On réinitialise les valeurs des attributs url et alt
            $this->url = "patate";
            $this->alt = null;
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
            return;
        }
        // Le nom du fichier est son id, on doit juste stocker également son extension
        // Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »
        $this->url = $this->file->guessExtension();
        //$this->url = "kjfkkfnkj";
        // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
        $this->alt = $this->file->getClientOriginalName();
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
            return;
        }
        // Si on avait un ancien fichier, on le supprime
        if (null !== $this->tempFilename) {
            $oldFile = $this->getUploadRootDir() . '/' . $this->id . '.' . $this->tempFilename;
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }
        $this->file->move($this->getUploadRootDir(), $this->id . '.' . $this->url);
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload() {
        // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir() . '/' . $this->id . '.' . $this->url;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
            // On supprime le fichier
            unlink($this->tempFilename);
        }
    }

    public function getUploadDir() {
        // On retourne le chemin relatif vers l'Image pour un navigateur
        return 'uploads/img';
    }

    protected function getUploadRootDir() {
        // On retourne le chemin relatif vers l'Image pour notre code PHP
        return __DIR__ . '/../../../../PKFLibrary/web/' . $this->getUploadDir();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function getFile() {
        return $this->file;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt) {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt() {
        return $this->alt;
    }

    /**
     * Set date_maj
     *
     * @param \DateTime $dateMaj
     * @return Image
     */
    public function setDateMaj($dateMaj) {
        $this->date_maj = $dateMaj;

        return $this;
    }

    /**
     * Get date_maj
     *
     * @return \DateTime 
     */
    public function getDateMaj() {
        return $this->date_maj;
    }

    /**
     * Set activated
     *
     * @param integer $activated
     * @return Image
     */
    public function setActivated($activated) {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return integer 
     */
    public function getActivated() {
        return $this->activated;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return Image
     */
    public function setDeleted($deleted) {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer 
     */
    public function getDeleted() {
        return $this->deleted;
    }

    /**
     * Set validated
     *
     * @param integer $validated
     * @return Image
     */
    public function setValidated($validated) {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return integer 
     */
    public function getValidated() {
        return $this->validated;
    }

    public function getWebPath() {
        return $this->getUploadDir() . '/' . $this->getId() . '.' . $this->getUrl();
    }

}
