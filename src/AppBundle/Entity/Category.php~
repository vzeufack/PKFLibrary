<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Category;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var string
     *
     * @ORM\Column(name="category_code", type="string", length=100)
     * @ORM\Id
     */
    private $categoryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=100)
     */
    private $categoryName;

     /**
     * One Category have Many subcategories
     * @ORM\oneToMany(targetEntity="SubCategory", mappedBy="category")
     */
    private $subcategories;

    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryCode
     *
     * @param string $categoryCode
     *
     * @return Category
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;

        return $this;
    }

    /**
     * Get categoryCode
     *
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }
   
    /**
     * Add subcategory
     *
     * @param \AppBundle\Entity\SubCategory $subcategory
     *
     * @return Category
     */
    public function addSubcategory(\AppBundle\Entity\SubCategory $subcategory)
    {
        $this->subcategories[] = $subcategory;

        return $this;
    }

    /**
     * Remove subcategory
     *
     * @param \AppBundle\Entity\SubCategory $subcategory
     */
    public function removeSubcategory(\AppBundle\Entity\SubCategory $subcategory)
    {
        $this->subcategories->removeElement($subcategory);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subcategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
