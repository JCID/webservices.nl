<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterOverzichtRecht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterOverzichtRecht extends AbstractStructBase
{
    /**
     * The object_id
     * @var string
     */
    public $object_id;
    /**
     * The gerechtigde_akr
     * @var string
     */
    public $gerechtigde_akr;
    /**
     * The gerechtigde_kadastrale_identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gerechtigde_kadastrale_identificatie;
    /**
     * Constructor method for kadasterOverzichtRecht
     * @uses KadasterOverzichtRecht::setObject_id()
     * @uses KadasterOverzichtRecht::setGerechtigde_akr()
     * @uses KadasterOverzichtRecht::setGerechtigde_kadastrale_identificatie()
     * @param string $object_id
     * @param string $gerechtigde_akr
     * @param string $gerechtigde_kadastrale_identificatie
     */
    public function __construct($object_id = null, $gerechtigde_akr = null, $gerechtigde_kadastrale_identificatie = null)
    {
        $this
            ->setObject_id($object_id)
            ->setGerechtigde_akr($gerechtigde_akr)
            ->setGerechtigde_kadastrale_identificatie($gerechtigde_kadastrale_identificatie);
    }
    /**
     * Get object_id value
     * @return string|null
     */
    public function getObject_id()
    {
        return $this->object_id;
    }
    /**
     * Set object_id value
     * @param string $object_id
     * @return \Webservices\StructType\KadasterOverzichtRecht
     */
    public function setObject_id($object_id = null)
    {
        // validation for constraint: string
        if (!is_null($object_id) && !is_string($object_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($object_id)), __LINE__);
        }
        $this->object_id = $object_id;
        return $this;
    }
    /**
     * Get gerechtigde_akr value
     * @return string|null
     */
    public function getGerechtigde_akr()
    {
        return $this->gerechtigde_akr;
    }
    /**
     * Set gerechtigde_akr value
     * @param string $gerechtigde_akr
     * @return \Webservices\StructType\KadasterOverzichtRecht
     */
    public function setGerechtigde_akr($gerechtigde_akr = null)
    {
        // validation for constraint: string
        if (!is_null($gerechtigde_akr) && !is_string($gerechtigde_akr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gerechtigde_akr)), __LINE__);
        }
        $this->gerechtigde_akr = $gerechtigde_akr;
        return $this;
    }
    /**
     * Get gerechtigde_kadastrale_identificatie value
     * @return string|null
     */
    public function getGerechtigde_kadastrale_identificatie()
    {
        return $this->gerechtigde_kadastrale_identificatie;
    }
    /**
     * Set gerechtigde_kadastrale_identificatie value
     * @param string $gerechtigde_kadastrale_identificatie
     * @return \Webservices\StructType\KadasterOverzichtRecht
     */
    public function setGerechtigde_kadastrale_identificatie($gerechtigde_kadastrale_identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($gerechtigde_kadastrale_identificatie) && !is_string($gerechtigde_kadastrale_identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gerechtigde_kadastrale_identificatie)), __LINE__);
        }
        $this->gerechtigde_kadastrale_identificatie = $gerechtigde_kadastrale_identificatie;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterOverzichtRecht
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
