<?php
// src/UserBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Course;
use AppBundle\Entity\Image;
/**
 * @ORM\Entity
 * @ORM\Table (name = "user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */

class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    // password, username, email, enabled, lastlogin, locked, expired


    /**
     * @var string
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     * @Assert\NotBlank(message="Please enter your family name!")
     * @ORM\Column(name="family_name", type="string", length=100)
     */
    private $familyName;


    /**
     * @var string
     * @Assert\NotBlank(message="Please enter your number!")
     * @Assert\Length(
     *      min = 9,
     *      max = 9,
     *      exactMessage = "Must be 9 digits! ",
     * )
     * @Assert\Type(
     *     type="numeric",
     *     message="Not a phone number!"
     * )
     * @ORM\Column(name="phone_number", type="string", length=50)
     */
    private $phoneNumber;

    /**
     * @var stringy
     * @Assert\NotBlank(message="Please fill your address!")
     * @ORM\Column(name="address", type="text")
     */ 
    private $address;

   

    /* Fin des ajouts */
    /**
     * @Assert\NotBlank(message="Please, upload as an image file.")
     * @Assert\Valid
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image",cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="batch", type="string", length=30, nullable=true)
     */
    private $batch;

    //private $entranceYear;

    //private $fieldOfStudy;

    
    //private $department;

    /**
     * @var string
     * 
     * @ORM\Column(name = "userCategory", type="string", length=30, nullable=true)
     */
    private $userCategory;


    /**
     * @var string
     * @ORM\Column(name="studentID", type="string", length=30, nullable=true, unique=true)
     */
    private $studentID;

    /**
     * @var string
     *
     * @ORM\Column(name="specialty", type="string", length=50, nullable=true)
     */
    private $specialty;

    /**
     *  One User has Many Book_User
     *  @ORM\OneToMany(targetEntity="AppBundle\Entity\Book_User", mappedBy="user")
     */
     private $book_user;


    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set familyName
     *
     * @param string $familyName
     *
     * @return User
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Get familyName
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set batch
     *
     * @param string $batch
     *
     * @return User
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Get batch
     *
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
   

    /**
     * Set userCategory
     *
     * @param string $userCategory
     *
     * @return User
     */
    public function setUserCategory($userCategory)
    {
        $this->userCategory = $userCategory;

        return $this;
    }

    /**
     * Get userCategory
     *
     * @return string
     */
    public function getUserCategory()
    {
        return $this->userCategory;
    }

    /**
     * Set studentID
     *
     * @param string $studentID
     *
     * @return User
     */
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;

        return $this;
    }

    /**
     * Get studentID
     *
     * @return string
     */
    public function getStudentID()
    {
        return $this->studentID;
    }

    /**
     * Set specialty
     *
     * @param string $specialty
     *
     * @return User
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return string
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Add bookUser
     *
     * @param \AppBundle\Entity\Book_User $bookUser
     *
     * @return User
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
