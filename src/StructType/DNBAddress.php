<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBAddress extends AbstractStructBase
{
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $region;
    /**
     * The region_short
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $region_short;
    /**
     * The region_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $region_code;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The country_dnb
     * @var int
     */
    public $country_dnb;
    /**
     * The country_iso
     * @var string
     */
    public $country_iso;
    /**
     * Constructor method for DNBAddress
     * @uses DNBAddress::setAddress()
     * @uses DNBAddress::setPostcode()
     * @uses DNBAddress::setCity()
     * @uses DNBAddress::setRegion()
     * @uses DNBAddress::setRegion_short()
     * @uses DNBAddress::setRegion_code()
     * @uses DNBAddress::setCountry()
     * @uses DNBAddress::setCountry_dnb()
     * @uses DNBAddress::setCountry_iso()
     * @param string $address
     * @param string $postcode
     * @param string $city
     * @param string $region
     * @param string $region_short
     * @param int $region_code
     * @param string $country
     * @param int $country_dnb
     * @param string $country_iso
     */
    public function __construct($address = null, $postcode = null, $city = null, $region = null, $region_short = null, $region_code = null, $country = null, $country_dnb = null, $country_iso = null)
    {
        $this
            ->setAddress($address)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setRegion($region)
            ->setRegion_short($region_short)
            ->setRegion_code($region_code)
            ->setCountry($country)
            ->setCountry_dnb($country_dnb)
            ->setCountry_iso($country_iso);
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
     * @return \Webservices\StructType\DNBAddress
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
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\DNBAddress
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
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
     * @return \Webservices\StructType\DNBAddress
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
     * Get region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Set region value
     * @param string $region
     * @return \Webservices\StructType\DNBAddress
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        $this->region = $region;
        return $this;
    }
    /**
     * Get region_short value
     * @return string|null
     */
    public function getRegion_short()
    {
        return $this->region_short;
    }
    /**
     * Set region_short value
     * @param string $region_short
     * @return \Webservices\StructType\DNBAddress
     */
    public function setRegion_short($region_short = null)
    {
        // validation for constraint: string
        if (!is_null($region_short) && !is_string($region_short)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region_short)), __LINE__);
        }
        $this->region_short = $region_short;
        return $this;
    }
    /**
     * Get region_code value
     * @return int|null
     */
    public function getRegion_code()
    {
        return $this->region_code;
    }
    /**
     * Set region_code value
     * @param int $region_code
     * @return \Webservices\StructType\DNBAddress
     */
    public function setRegion_code($region_code = null)
    {
        // validation for constraint: int
        if (!is_null($region_code) && !is_numeric($region_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($region_code)), __LINE__);
        }
        $this->region_code = $region_code;
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
     * @return \Webservices\StructType\DNBAddress
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
     * Get country_dnb value
     * @return int|null
     */
    public function getCountry_dnb()
    {
        return $this->country_dnb;
    }
    /**
     * Set country_dnb value
     * @param int $country_dnb
     * @return \Webservices\StructType\DNBAddress
     */
    public function setCountry_dnb($country_dnb = null)
    {
        // validation for constraint: int
        if (!is_null($country_dnb) && !is_numeric($country_dnb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($country_dnb)), __LINE__);
        }
        $this->country_dnb = $country_dnb;
        return $this;
    }
    /**
     * Get country_iso value
     * @return string|null
     */
    public function getCountry_iso()
    {
        return $this->country_iso;
    }
    /**
     * Set country_iso value
     * @param string $country_iso
     * @return \Webservices\StructType\DNBAddress
     */
    public function setCountry_iso($country_iso = null)
    {
        // validation for constraint: string
        if (!is_null($country_iso) && !is_string($country_iso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_iso)), __LINE__);
        }
        $this->country_iso = $country_iso;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBAddress
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
