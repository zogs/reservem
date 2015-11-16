<?php

namespace Proxies\__CG__\Zogs\WorldBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class City extends \Zogs\WorldBundle\Entity\City implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'id', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'char_code', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'ufi', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'uni', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'cc1', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'dsg', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm1', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm2', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm3', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm4', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'nt', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'lc', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'shortform', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'fullname', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'fullnamed', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'characters', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'latitude', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'longitude', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'dmslat', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'dmslong', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'soundex', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'metaphone', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'cp', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'pop', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'pop_order', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'sfc', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'sfc_order', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'level');
        }

        return array('__isInitialized__', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'id', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'char_code', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'ufi', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'uni', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'cc1', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'dsg', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm1', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm2', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm3', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'adm4', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'nt', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'lc', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'shortform', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'fullname', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'fullnamed', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'characters', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'latitude', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'longitude', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'dmslat', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'dmslong', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'soundex', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'metaphone', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'cp', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'pop', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'pop_order', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'sfc', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'sfc_order', '' . "\0" . 'Zogs\\WorldBundle\\Entity\\City' . "\0" . 'level');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (City $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getLevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', array());

        return parent::getLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastAdm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastAdm', array());

        return parent::getLastAdm();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastAdmLevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastAdmLevel', array());

        return parent::getLastAdmLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function exist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'exist', array());

        return parent::exist();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharCode($charCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCharCode', array($charCode));

        return parent::setCharCode($charCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharCode', array());

        return parent::getCharCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setUfi($ufi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUfi', array($ufi));

        return parent::setUfi($ufi);
    }

    /**
     * {@inheritDoc}
     */
    public function getUfi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUfi', array());

        return parent::getUfi();
    }

    /**
     * {@inheritDoc}
     */
    public function setUni($uni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUni', array($uni));

        return parent::setUni($uni);
    }

    /**
     * {@inheritDoc}
     */
    public function getUni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUni', array());

        return parent::getUni();
    }

    /**
     * {@inheritDoc}
     */
    public function setCc1($cc1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCc1', array($cc1));

        return parent::setCc1($cc1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCc1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCc1', array());

        return parent::getCc1();
    }

    /**
     * {@inheritDoc}
     */
    public function setDsg($dsg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDsg', array($dsg));

        return parent::setDsg($dsg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDsg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDsg', array());

        return parent::getDsg();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdm1($adm1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdm1', array($adm1));

        return parent::setAdm1($adm1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdm1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdm1', array());

        return parent::getAdm1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdm2($adm2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdm2', array($adm2));

        return parent::setAdm2($adm2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdm2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdm2', array());

        return parent::getAdm2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdm3($adm3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdm3', array($adm3));

        return parent::setAdm3($adm3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdm3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdm3', array());

        return parent::getAdm3();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdm4($adm4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdm4', array($adm4));

        return parent::setAdm4($adm4);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdm4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdm4', array());

        return parent::getAdm4();
    }

    /**
     * {@inheritDoc}
     */
    public function setNt($nt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNt', array($nt));

        return parent::setNt($nt);
    }

    /**
     * {@inheritDoc}
     */
    public function getNt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNt', array());

        return parent::getNt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLc($lc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLc', array($lc));

        return parent::setLc($lc);
    }

    /**
     * {@inheritDoc}
     */
    public function getLc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLc', array());

        return parent::getLc();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortform($shortform)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortform', array($shortform));

        return parent::setShortform($shortform);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortform()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortform', array());

        return parent::getShortform();
    }

    /**
     * {@inheritDoc}
     */
    public function setFullname($fullname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFullname', array($fullname));

        return parent::setFullname($fullname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullname', array());

        return parent::getFullname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFullnamed($fullnamed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFullnamed', array($fullnamed));

        return parent::setFullnamed($fullnamed);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullnamed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullnamed', array());

        return parent::getFullnamed();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharacters($characters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCharacters', array($characters));

        return parent::setCharacters($characters);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharacters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharacters', array());

        return parent::getCharacters();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', array($latitude));

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', array());

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', array($longitude));

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', array());

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setDmslat($dmslat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDmslat', array($dmslat));

        return parent::setDmslat($dmslat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDmslat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDmslat', array());

        return parent::getDmslat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDmslong($dmslong)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDmslong', array($dmslong));

        return parent::setDmslong($dmslong);
    }

    /**
     * {@inheritDoc}
     */
    public function getDmslong()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDmslong', array());

        return parent::getDmslong();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoundex($soundex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoundex', array($soundex));

        return parent::setSoundex($soundex);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoundex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoundex', array());

        return parent::getSoundex();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaphone($metaphone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaphone', array($metaphone));

        return parent::setMetaphone($metaphone);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaphone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaphone', array());

        return parent::getMetaphone();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', array($cp));

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', array());

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPop($pop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPop', array($pop));

        return parent::setPop($pop);
    }

    /**
     * {@inheritDoc}
     */
    public function getPop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPop', array());

        return parent::getPop();
    }

    /**
     * {@inheritDoc}
     */
    public function setPopOrder($popOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPopOrder', array($popOrder));

        return parent::setPopOrder($popOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getPopOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPopOrder', array());

        return parent::getPopOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setSfc($sfc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSfc', array($sfc));

        return parent::setSfc($sfc);
    }

    /**
     * {@inheritDoc}
     */
    public function getSfc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSfc', array());

        return parent::getSfc();
    }

    /**
     * {@inheritDoc}
     */
    public function setSfcOrder($sfcOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSfcOrder', array($sfcOrder));

        return parent::setSfcOrder($sfcOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getSfcOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSfcOrder', array());

        return parent::getSfcOrder();
    }

}