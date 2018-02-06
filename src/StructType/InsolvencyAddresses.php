<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyAddresses StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyAddresses extends AbstractStructBase
{
    /**
     * The hidden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $hidden;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\InsolvencyAddressArray
     */
    public $address;
    /**
     * Constructor method for InsolvencyAddresses
     * @uses InsolvencyAddresses::setHidden()
     * @uses InsolvencyAddresses::setAddress()
     * @param bool $hidden
     * @param \Webservices\ArrayType\InsolvencyAddressArray $address
     */
    public function __construct($hidden = null, \Webservices\ArrayType\InsolvencyAddressArray $address = null)
    {
        $this
            ->setHidden($hidden)
            ->setAddress($address);
    }
    /**
     * Get hidden value
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->hidden;
    }
    /**
     * Set hidden value
     * @param bool $hidden
     * @return \Webservices\StructType\InsolvencyAddresses
     */
    public function setHidden($hidden = null)
    {
        // validation for constraint: boolean
        if (!is_null($hidden) && !is_bool($hidden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hidden)), __LINE__);
        }
        $this->hidden = $hidden;
        return $this;
    }
    /**
     * Get address value
     * @return \Webservices\ArrayType\InsolvencyAddressArray|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\ArrayType\InsolvencyAddressArray $address
     * @return \Webservices\StructType\InsolvencyAddresses
     */
    public function setAddress(\Webservices\ArrayType\InsolvencyAddressArray $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyAddresses
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
