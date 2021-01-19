<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
/**
 * SubCategory
 *
 * @ORM\Table(name="sub_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubCategoryRepository")
 */
class SubCategory
{
    /**
     * @var string
     *
     * @ORM\Column(name="sub_category_code", type="string", length=100)
     * @ORM\Id
     */
    private $subCategoryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_category_name", type="string", length=100)
     */
    private $subCategoryName;

    /**
     * Many Categories have Many Books
     * @ORM\ManyToMany (targetEntity="Book", mappedBy="subCategories")
     */
     private $books;

    /**
     * Many subcategories have One Category.
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="subcategories")
     * @ORM\JoinColumn(name="categoryCode", referencedColumnName="category_code")
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->books = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set subCategoryCode
     *
     * @param string $subCategoryCode
     *
     * @return SubCategory
     */
    public function setSubCategoryCode($subCategoryCode)
    {
        $this->subCategoryCode = $subCategoryCode;

        return $this;
    }

    /**
     * Get subCategoryCode
     *
     * @return string
     */
    public function getSubCategoryCode()
    {
        return $this->subCategoryCode;
    }

    /**
     * Set subCategoryName
     *
     * @param string $subCategoryName
     *
     * @return SubCategory
     */
    public function setSubCategoryName($subCategoryName)
    {
        $this->subCategoryName = $subCategoryName;

        return $this;
    }

    /**
     * Get subCategoryName
     *
     * @return string
     */
    public function getSubCategoryName()
    {
        return $this->subCategoryName;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return SubCategory
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add book
     *
     * @param \AppBundle\Entity\Book $book
     *
     * @return SubCategory
     */
    public function addBook(\AppBundle\Entity\Book $book)
    {
        $this->books[] = $book;

        return $this;
    }

    /**
     * Remove book
     *
     * @param \AppBundle\Entity\Book $book
     */
    public function removeBook(\AppBundle\Entity\Book $book)
    {
        $this->books->removeElement($book);
    }

    /**
     * Get books
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBooks()
    {
        return $this->books;
    }
}
