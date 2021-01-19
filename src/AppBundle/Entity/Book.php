<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use AppBundle\Entity\Course;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 */
class Book
{
    /**
     * @var int 
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @Assert\Length(
     *      min = 10,
     *      max = 13,
     *      minMessage = "must be at least 10 digits! ",
     *      maxMessage = "must be at most 13 digits!",
     * )
     * @Assert\Type(
     *     type="numeric",
     *     message="Not a valid ISBN!"
     * )
     * @ORM\Column(name="isbn", type="string", length=100, nullable=true, unique=true)
     */
    private $isbn;

    /**
     * @var strin
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_title", type="string", length=255, nullable=true)
     */
    private $subTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="editor", type="string", length=255, nullable=true)
     */
    private $editor;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=30, nullable=true)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="pklib_code", type="string", length=100, nullable=true, unique=true)
     */
    private $pklibCode;

    /**
     * @var string
     * @Assert\Length(
     *      min = 13,
     *      max = 13,
     *      exactMessage = "must be 13 digits! ",
     * )
     * @Assert\Type(
     *     type="numeric",
     *     message="Not a valid EAN!"
     * )
     * @ORM\Column(name="ean", type="string", length=100, nullable=true, unique=true)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=30, nullable=true)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="volume", type="string", length=30, nullable=true)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=30, nullable=true)
     */
    private $color;

    /**
     * @var int
     *
     * @ORM\Column(name="cd_number", type="integer", nullable=true)
     */
    private $cdNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_pages", type="integer", nullable=true)
     */
    private $numberOfPages;

    /**
     * @var int
     *
     * @ORM\Column(name="year_published", type="integer", nullable=true)
     */
    private $yearPublished;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_acquired", type="date")
     */
    private $dateAcquired;

    /**
     * @var string
     *
     * @ORM\Column(name="acquisition", type="string", length=100, nullable=true)
     */
    private $acquisition;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=100, nullable=true)
     */
    private $language;

    /**
     * @Assert\NotBlank(message="Please, upload as an image file.")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image",cascade={"persist", "remove"})
     */
    public $coverPicture;

    /**
     * @Assert\NotBlank(message="Please, upload as a pdf file.")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image",cascade={"persist", "remove"})
     */
    public $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=30, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="booksAvailable", type="integer")
     */
    private $booksAvailable;
    
    /**
     * Many Books have Many subcategories
     * @ORM\ManyToMany (targetEntity="SubCategory", inversedBy="books")
     * @ORM\JoinTable (name="subCategories_books",
                         inverseJoinColumns={@ORM\JoinColumn(name="subCategoryCode", referencedColumnName="sub_category_code")},
                         joinColumns={@ORM\JoinColumn( name="id", referencedColumnName="id")}
                      )
     */
     private $subCategories;

     /**
      *  One Book has Many Book_User
      *  @ORM\OneToMany(targetEntity="Book_User", mappedBy="book")
      */
     private $book_user;
     

     /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return Book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }
    
    
    /**
     * Set title
     *
     * @param string $title
     *
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subTitle
     *
     * @param string $subTitle
     *
     * @return Book
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * Get subTitle
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set editor
     *
     * @param string $editor
     *
     * @return Book
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string
     */
    public function getEditor()
    {
        return $this->editor;
    }


    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Book
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set edition
     *
     * @param string $edition
     *
     * @return Book
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set pklibCode
     *
     * @param string $pklibCode
     *
     * @return Book
     */
    public function setPklibCode($pklibCode)
    {
        $this->pklibCode = $pklibCode;

        return $this;
    }

    /**
     * Get pklibCode
     *
     * @return string
     */
    public function getPklibCode()
    {
        return $this->pklibCode;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return Book
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return Book
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set volume
     *
     * @param string $volume
     *
     * @return Book
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Book
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set cdNumber
     *
     * @param integer $cdNumber
     *
     * @return Book
     */
    public function setCdNumber($cdNumber)
    {
        $this->cdNumber = $cdNumber;

        return $this;
    }

    /**
     * Get cdNumber
     *
     * @return int
     */
    public function getCdNumber()
    {
        return $this->cdNumber;
    }

    /**
     * Set numberOfPages
     *
     * @param integer $numberOfPages
     *
     * @return Book
     */
    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;

        return $this;
    }

    /**
     * Get numberOfPages
     *
     * @return int
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * Set yearPublished
     *
     * @param integer $yearPublished
     *
     * @return Book
     */
    public function setYearPublished($yearPublished)
    {
        $this->yearPublished = $yearPublished;

        return $this;
    }

    /**
     * Get yearPublished
     *
     * @return int
     */
    public function getYearPublished()
    {
        return $this->yearPublished;
    }

    /**
     * Set dateAcquired
     *
     * @param \DateTime $dateAcquired
     *
     * @return Book
     */
    public function setDateAcquired($dateAcquired)
    {
        $this->dateAcquired = $dateAcquired;

        return $this;
    }

    /**
     * Get dateAcquired
     *
     * @return \DateTime
     */
    public function getDateAcquired()
    {
        return $this->dateAcquired;
    }

    /**
     * Set acquisition
     *
     * @param string $acquisition
     *
     * @return Book
     */
    public function setAcquisition($acquisition)
    {
        $this->acquisition = $acquisition;

        return $this;
    }

    /**
     * Get acquisition
     *
     * @return string
     */
    public function getAcquisition()
    {
        return $this->acquisition;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Book
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Book
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Book
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateAcquired = new \DateTime();
        $this->booksAvailable = $this->quantity;
        $this->book_user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set coverPicture
     *
     * @param string $coverPicture
     *
     * @return Book
     */
    public function setCoverPicture($coverPicture)
    {
        $this->coverPicture = $coverPicture;

        return $this;
    }

    /**
     * Get coverPicture
     *
     * @return string
     */
    public function getCoverPicture()
    {
        return $this->coverPicture;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Book
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }
   

    /**
     * Add subCategory
     *
     * @param \AppBundle\Entity\SubCategory $subCategory
     *
     * @return Book
     */
    public function addSubCategory(\AppBundle\Entity\SubCategory $subCategory)
    {
        $this->subCategories[] = $subCategory;

        return $this;
    }

    /**
     * Remove subCategory
     *
     * @param \AppBundle\Entity\SubCategory $subCategory
     */
    public function removeSubCategory(\AppBundle\Entity\SubCategory $subCategory)
    {
        $this->subCategories->removeElement($subCategory);
    }

    /**
     * Get subCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * Set booksAvailable
     *
     * @param integer $booksAvailable
     *
     * @return Book
     */
    public function setBooksAvailable($booksAvailable)
    {
        $this->booksAvailable = $booksAvailable;

        return $this;
    }

    /**
     * Get booksAvailable
     *
     * @return integer
     */
    public function getBooksAvailable()
    {
        return $this->booksAvailable;
    }

    /**
     * Add bookUser
     *
     * @param \AppBundle\Entity\Book_User $bookUser
     *
     * @return Book
     */
    public function addBookUser(\AppBundle\Entity\Book_User $bookUser)
    {
        $this->book_user[] = $bookUser;

        return $this;
    }

    /**
     * Remove bookUser
     *
     * @param \AppBundle\Entity\Book_User $bookUser
     */
    public function removeBookUser(\AppBundle\Entity\Book_User $bookUser)
    {
        $this->book_user->removeElement($bookUser);
    }

    /**
     * Get bookUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBookUser()
    {
        return $this->book_user;
    }
}
