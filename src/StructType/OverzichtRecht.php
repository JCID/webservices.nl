<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverzichtRecht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class OverzichtRecht extends AbstractStructBase
{
    /**
     * The object_id
     * @var string
     */
    public $object_id;
    /**
     * The gerechtigde_id
     * @var string
     */
    public $gerechtigde_id;
    /**
     * Constructor method for OverzichtRecht
     * @uses OverzichtRecht::setObject_id()
     * @uses OverzichtRecht::setGerechtigde_id()
     * @param string $object_id
     * @param string $gerechtigde_id
     */
    public function __construct($object_id = null, $gerechtigde_id = null)
    {
        $this
            ->setObject_id($object_id)
            ->setGerechtigde_id($gerechtigde_id);
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
     * @return \Webservices\StructType\OverzichtRecht
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
     * Get gerechtigde_id value
     * @return string|null
     */
    public function getGerechtigde_id()
    {
        return $this->gerechtigde_id;
    }
    /**
     * Set gerechtigde_id value
     * @param string $gerechtigde_id
     * @return \Webservices\StructType\OverzichtRecht
     */
    public function setGerechtigde_id($gerechtigde_id = null)
    {
        // validation for constraint: string
        if (!is_null($gerechtigde_id) && !is_string($gerechtigde_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gerechtigde_id)), __LINE__);
        }
        $this->gerechtigde_id = $gerechtigde_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\OverzichtRecht
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
