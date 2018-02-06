<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceAddressReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceAddressReference extends AbstractStructBase
{
    /**
     * The address_lines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $address_lines;
    /**
     * The postal_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postal_code;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The county
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $county;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * Constructor method for ComplianceAddressReference
     * @uses ComplianceAddressReference::setAddress_lines()
     * @uses ComplianceAddressReference::setPostal_code()
     * @uses ComplianceAddressReference::setCity()
     * @uses ComplianceAddressReference::setCounty()
     * @uses ComplianceAddressReference::setCountry()
     * @param \Webservices\ArrayType\StringArray $address_lines
     * @param string $postal_code
     * @param string $city
     * @param string $county
     * @param string $country
     */
    public function __construct(\Webservices\ArrayType\StringArray $address_lines = null, $postal_code = null, $city = null, $county = null, $country = null)
    {
        $this
            ->setAddress_lines($address_lines)
            ->setPostal_code($postal_code)
            ->setCity($city)
            ->setCounty($county)
            ->setCountry($country);
    }
    /**
     * Get address_lines value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getAddress_lines()
    {
        return $this->address_lines;
    }
    /**
     * Set address_lines value
     * @param \Webservices\ArrayType\StringArray $address_lines
     * @return \Webservices\StructType\ComplianceAddressReference
     */
    public function setAddress_lines(\Webservices\ArrayType\StringArray $address_lines = null)
    {
        $this->address_lines = $address_lines;
        return $this;
    }
    /**
     * Get postal_code value
     * @return string|null
     */
    public function getPostal_code()
    {
        return $this->postal_code;
    }
    /**
     * Set postal_code value
     * @param string $postal_code
     * @return \Webservices\StructType\ComplianceAddressReference
     */
    public function setPostal_code($postal_code = null)
    {
        // validation for constraint: string
        if (!is_null($postal_code) && !is_string($postal_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postal_code)), __LINE__);
        }
        $this->postal_code = $postal_code;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Webservices\StructType\ComplianceAddressReference
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get county value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->county;
    }
    /**
     * Set county value
     * @param string $county
     * @return \Webservices\StructType\ComplianceAddressReference
     */
    public function setCounty($county = null)
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($county)), __LINE__);
        }
        $this->county = $county;
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
     * @return \Webservices\StructType\ComplianceAddressReference
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
     * @return \Webservices\StructType\ComplianceAddressReference
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
