<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for complianceSearchBusinessesRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceSearchBusinessesRequestType extends AbstractStructBase
{
    /**
     * The business_name
     * @var string
     */
    public $business_name;
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The house_number
     * @var int
     */
    public $house_number;
    /**
     * The postal_code
     * @var string
     */
    public $postal_code;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The county
     * @var string
     */
    public $county;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for complianceSearchBusinessesRequestType
     * @uses ComplianceSearchBusinessesRequestType::setBusiness_name()
     * @uses ComplianceSearchBusinessesRequestType::setStreet()
     * @uses ComplianceSearchBusinessesRequestType::setHouse_number()
     * @uses ComplianceSearchBusinessesRequestType::setPostal_code()
     * @uses ComplianceSearchBusinessesRequestType::setCity()
     * @uses ComplianceSearchBusinessesRequestType::setCounty()
     * @uses ComplianceSearchBusinessesRequestType::setCountry()
     * @uses ComplianceSearchBusinessesRequestType::setPage()
     * @param string $business_name
     * @param string $street
     * @param int $house_number
     * @param string $postal_code
     * @param string $city
     * @param string $county
     * @param string $country
     * @param int $page
     */
    public function __construct($business_name = null, $street = null, $house_number = null, $postal_code = null, $city = null, $county = null, $country = null, $page = null)
    {
        $this
            ->setBusiness_name($business_name)
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setPostal_code($postal_code)
            ->setCity($city)
            ->setCounty($county)
            ->setCountry($country)
            ->setPage($page);
    }
    /**
     * Get business_name value
     * @return string|null
     */
    public function getBusiness_name()
    {
        return $this->business_name;
    }
    /**
     * Set business_name value
     * @param string $business_name
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
     */
    public function setBusiness_name($business_name = null)
    {
        // validation for constraint: string
        if (!is_null($business_name) && !is_string($business_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_name)), __LINE__);
        }
        $this->business_name = $business_name;
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->street = $street;
        return $this;
    }
    /**
     * Get house_number value
     * @return int|null
     */
    public function getHouse_number()
    {
        return $this->house_number;
    }
    /**
     * Set house_number value
     * @param int $house_number
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
     */
    public function setHouse_number($house_number = null)
    {
        // validation for constraint: int
        if (!is_null($house_number) && !is_numeric($house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_number)), __LINE__);
        }
        $this->house_number = $house_number;
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
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
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
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
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
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
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
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
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
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceSearchBusinessesRequestType
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
