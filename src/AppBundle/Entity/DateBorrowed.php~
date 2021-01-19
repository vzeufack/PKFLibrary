<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * DateBorrowed
 *
 * @ORM\Table(name="DateBorrowed")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DateBorrowedRepository")
 */
class DateBorrowed
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
     * @var \DateTime
     * @ORM\Column(name="dateBorrowed", type="date", nullable=true)
     */
     private $dateBorrowed;

     /**
     * Many dateBorrowed have One Book_User.
     * @ORM\ManyToOne(targetEntity="Book_User", inversedBy="datesBorrowed")
     * @ORM\JoinColumn(name="borrowId", referencedColumnName="id")
     */
    private $book_user;

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
     * Set dateBorrowed
     *
     * @param \DateTime $dateBorrowed
     *
     * @return DateBorrowed
     */
    public function setDateBorrowed($dateBorrowed)
    {
        $this->dateBorrowed = $dateBorrowed;

        return $this;
    }

    /**
     * Get dateBorrowed
     *
     * @return \DateTime
     */
    public function getDateBorrowed()
    {
        return $this->dateBorrowed;
    }

    /**
     * Set bookUser
     *
     * @param \AppBundle\Entity\Book_User $bookUser
     *
     * @return DateBorrowed
     */
    public function setBookUser(\AppBundle\Entity\Book_User $bookUser = null)
    {
        $this->book_user = $bookUser;

        return $this;
    }

    /**
     * Get bookUser
     *
     * @return \AppBundle\Entity\Book_User
     */
    public function getBookUser()
    {
        return $this->book_user;
    }
}
