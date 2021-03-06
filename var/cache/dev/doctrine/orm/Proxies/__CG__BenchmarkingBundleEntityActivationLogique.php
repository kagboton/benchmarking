<?php

namespace Proxies\__CG__\BenchmarkingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ActivationLogique extends \BenchmarkingBundle\Entity\ActivationLogique implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'id', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'nomAfficheur', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'image', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'fonctions'];
        }

        return ['__isInitialized__', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'id', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'nomAfficheur', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'image', '' . "\0" . 'BenchmarkingBundle\\Entity\\ActivationLogique' . "\0" . 'fonctions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ActivationLogique $proxy) {
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
    public function setNomAfficheur(\BenchmarkingBundle\Entity\AfficheurExistant $nomAfficheur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomAfficheur', [$nomAfficheur]);

        return parent::setNomAfficheur($nomAfficheur);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomAfficheur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomAfficheur', []);

        return parent::getNomAfficheur();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\BenchmarkingBundle\Entity\Image $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function addFonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFonction', [$fonction]);

        return parent::addFonction($fonction);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFonction(\BenchmarkingBundle\Entity\Fonction $fonction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFonction', [$fonction]);

        return parent::removeFonction($fonction);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonctions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonctions', []);

        return parent::getFonctions();
    }

}
