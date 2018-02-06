<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * geoLocationInternationalAddressCoordinatesLatLonRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationInternationalAddressCoordinatesLatLonRequestType extends AbstractStructBase
{
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The houseno
     * @var int
     */
    public $houseno;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The province
     * @var string
     */
    public $province;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for
     * geoLocationInternationalAddressCoordinatesLatLonRequestType
     * @uses GeoLocationInternationalAddressCoordinatesLatLonRequestType::setStreet()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonRequestType::setHouseno()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonRequestType::setCity()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonRequestType::setProvince()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonRequestType::setCountry()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonRequestType::setLanguage()
     * @param string $street
     * @param int $houseno
     * @param string $city
     * @param string $province
     * @param string $country
     * @param string $language
     */
    public function __construct($street = null, $houseno = null, $city = null, $province = null, $country = null, $language = null)
    {
        $this
            ->setStreet($street)
            ->setHouseno($houseno)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry($country)
            ->setLanguage($language);
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType
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
     * Get houseno value
     * @return int|null
     */
    public function getHouseno()
    {
        return $this->houseno;
    }
    /**
     * Set houseno value
     * @param int $houseno
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType
     */
    public function setHouseno($houseno = null)
    {
        // validation for constraint: int
        if (!is_null($houseno) && !is_numeric($houseno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($houseno)), __LINE__);
        }
        $this->houseno = $houseno;
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType
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
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province)), __LINE__);
        }
        $this->province = $province;
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType
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
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType
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
