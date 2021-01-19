<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book_User
 *
 * @ORM\Table(name="Book_User")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Book_UserRepository")
 */
class Book_User
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
    * Many Book_Users have One Book.
    * @ORM\ManyToOne(targetEntity="Book", inversedBy="book_user")
    * @ORM\JoinColumn(name="bookId", referencedColumnName="id")
    */
    private $book;

    /**
    * Many Book_Users have One User.
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="book_user")
    * @ORM\JoinColumn(name="userId", referencedColumnName="id")
    */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRequested", type="date", nullable=true)
     */
     private $dateRequested;
     
      /**
     * One Book_User have Many dateBorrowed
     * @ORM\oneToMany(targetEntity="DateBorrowed", mappedBy="book_user")
     */
    private $datesBorrowed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReturned", type="date", nullable=true)
     */
     private $dateReturned;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="dueDate", type="date", nullable=true)
     */
     private $dueDate;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $status;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $delay;


    /**
     * Set dateRequested
     *
     * @param \DateTime $dateRequested
     *
     * @return Book_User
     */
    public function setDateRequested($dateRequested)
    {
        $this->dateRequested = $dateRequested;

        return $this;
    }

    /**
     * Get dateRequested
     *
     * @return \DateTime
     */
    public function getDateRequested()
    {
        return $this->dateRequested;
    }

    /**
     * Set dateReturned
     *
     * @param \DateTime $dateReturned
     *
     * @return Book_User
     */
    public function setDateReturned($dateReturned)
    {
        $this->dateReturned = $dateReturned;

        return $this;
    }

    /**
     * Get dateReturned
     *
     * @return \DateTime
     */
    public function getDateReturned()
    {
        return $this->dateReturned;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Book_User
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Book_User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set book
     *
     * @param \AppBundle\Entity\Book $book
     *
     * @return Book_User
     */
    public function setBook(\AppBundle\Entity\Book $book)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \AppBundle\Entity\Book
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Book_User
     */
    public function setUser(\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
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
     * Constructor
     */
    public function __construct()
    {
        $this->datesBorrowed = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add datesBorrowed
     *
     * @param \AppBundle\Entity\dateBorrowed $datesBorrowed
     *
     * @return Book_User
     */
    public function addDatesBorrowed(\AppBundle\Entity\dateBorrowed $datesBorrowed)
    {
        $this->datesBorrowed[] = $datesBorrowed;

        return $this;
    }

    /**
     * Remove datesBorrowed
     *
     * @param \AppBundle\Entity\dateBorrowed $datesBorrowed
     */
    public function removeDatesBorrowed(\AppBundle\Entity\dateBorrowed $datesBorrowed)
    {
        $this->datesBorrowed->removeElement($datesBorrowed);
    }

    /**
     * Get datesBorrowed
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDatesBorrowed()
    {
        return $this->datesBorrowed;
    }

    /**
     * Set delay
     *
     * @param string $delay
     *
     * @return Book_User
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Get delay
     *
     * @return string
     */
    public function getDelay()
    {
        return $this->delay;
    }
}
