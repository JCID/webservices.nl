<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeStreetAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeStreetAddress extends AbstractStructBase
{
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * Constructor method for CreditsafeStreetAddress
     * @uses CreditsafeStreetAddress::setAddress()
     * @uses CreditsafeStreetAddress::setCountry()
     * @param string $address
     * @param string $country
     */
    public function __construct($address = null, $country = null)
    {
        $this
            ->setAddress($address)
            ->setCountry($country);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Webservices\StructType\CreditsafeStreetAddress
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Webservices\StructType\CreditsafeStreetAddress
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeStreetAddress
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
