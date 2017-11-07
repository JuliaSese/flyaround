<?php

namespace Proxies\__CG__\WCS\CoavBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Review extends \WCS\CoavBundle\Entity\Review implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'id', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'text', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'userRated', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'reviewAuthor', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'reviewss', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'publicationDate', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'note'];
        }

        return ['__isInitialized__', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'id', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'text', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'userRated', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'reviewAuthor', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'reviewss', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'publicationDate', '' . "\0" . 'WCS\\CoavBundle\\Entity\\Review' . "\0" . 'note'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Review $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setText($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setText', [$text]);

        return parent::setText($text);
    }

    /**
     * {@inheritDoc}
     */
    public function getText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getText', []);

        return parent::getText();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserRated($userRated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserRated', [$userRated]);

        return parent::setUserRated($userRated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRated', []);

        return parent::getUserRated();
    }

    /**
     * {@inheritDoc}
     */
    public function setReviewAuthor($reviewAuthor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReviewAuthor', [$reviewAuthor]);

        return parent::setReviewAuthor($reviewAuthor);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviewAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewAuthor', []);

        return parent::getReviewAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicationDate($publicationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicationDate', [$publicationDate]);

        return parent::setPublicationDate($publicationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicationDate', []);

        return parent::getPublicationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function addReviewss(\WCS\CoavBundle\Entity\User $reviewss)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReviewss', [$reviewss]);

        return parent::addReviewss($reviewss);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReviewss(\WCS\CoavBundle\Entity\User $reviewss)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReviewss', [$reviewss]);

        return parent::removeReviewss($reviewss);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviewss()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewss', []);

        return parent::getReviewss();
    }

}
