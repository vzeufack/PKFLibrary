<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SubCategory extends \AppBundle\Entity\SubCategory implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'subCategoryCode', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'subCategoryName', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'books', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'category'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'subCategoryCode', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'subCategoryName', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'books', '' . "\0" . 'AppBundle\\Entity\\SubCategory' . "\0" . 'category'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SubCategory $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setSubCategoryCode($subCategoryCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubCategoryCode', [$subCategoryCode]);

        return parent::setSubCategoryCode($subCategoryCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubCategoryCode()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getSubCategoryCode();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubCategoryCode', []);

        return parent::getSubCategoryCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubCategoryName($subCategoryName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubCategoryName', [$subCategoryName]);

        return parent::setSubCategoryName($subCategoryName);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubCategoryName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubCategoryName', []);

        return parent::getSubCategoryName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\AppBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function addBook(\AppBundle\Entity\Book $book)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBook', [$book]);

        return parent::addBook($book);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBook(\AppBundle\Entity\Book $book)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBook', [$book]);

        return parent::removeBook($book);
    }

    /**
     * {@inheritDoc}
     */
    public function getBooks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBooks', []);

        return parent::getBooks();
    }

}
