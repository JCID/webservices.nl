<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoLocationInternationalAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationInternationalAddress extends AbstractStructBase
{
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The streetname
     * @var string
     */
    public $streetname;
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
     * The country_iso3
     * @var string
     */
    public $country_iso3;
    /**
     * The distance
     * @var int
     */
    public $distance;
    /**
     * The latitude
     * @var float
     */
    public $latitude;
    /**
     * The longitude
     * @var float
     */
    public $longitude;
    /**
     * Constructor method for GeoLocationInternationalAddress
     * @uses GeoLocationInternationalAddress::setPostcode()
     * @uses GeoLocationInternationalAddress::setStreetname()
     * @uses GeoLocationInternationalAddress::setCity()
     * @uses GeoLocationInternationalAddress::setProvince()
     * @uses GeoLocationInternationalAddress::setCountry()
     * @uses GeoLocationInternationalAddress::setCountry_iso3()
     * @uses GeoLocationInternationalAddress::setDistance()
     * @uses GeoLocationInternationalAddress::setLatitude()
     * @uses GeoLocationInternationalAddress::setLongitude()
     * @param string $postcode
     * @param string $streetname
     * @param string $city
     * @param string $province
     * @param string $country
     * @param string $country_iso3
     * @param int $distance
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($postcode = null, $streetname = null, $city = null, $province = null, $country = null, $country_iso3 = null, $distance = null, $latitude = null, $longitude = null)
    {
        $this
            ->setPostcode($postcode)
            ->setStreetname($streetname)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry($country)
            ->setCountry_iso3($country_iso3)
            ->setDistance($distance)
            ->setLatitude($latitude)
            ->setLongitude($longitude);
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
     * @return \Webservices\StructType\GeoLocationInternationalAddress
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
     * Get streetname value
     * @return string|null
     */
    public function getStreetname()
    {
        return $this->streetname;
    }
    /**
     * Set streetname value
     * @param string $streetname
     * @return \Webservices\StructType\GeoLocationInternationalAddress
     */
    public function setStreetname($streetname = null)
    {
        // validation for constraint: string
        if (!is_null($streetname) && !is_string($streetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetname)), __LINE__);
        }
        $this->streetname = $streetname;
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
     * @return \Webservices\StructType\GeoLocationInternationalAddress
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
     * @return \Webservices\StructType\GeoLocationInternationalAddress
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
     * @return \Webservices\StructType\GeoLocationInternationalAddress
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
     * Get country_iso3 value
     * @return string|null
     */
    public function getCountry_iso3()
    {
        return $this->country_iso3;
    }
    /**
     * Set country_iso3 value
     * @param string $country_iso3
     * @return \Webservices\StructType\GeoLocationInternationalAddress
     */
    public function setCountry_iso3($country_iso3 = null)
    {
        // validation for constraint: string
        if (!is_null($country_iso3) && !is_string($country_iso3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_iso3)), __LINE__);
        }
        $this->country_iso3 = $country_iso3;
        return $this;
    }
    /**
     * Get distance value
     * @return int|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param int $distance
     * @return \Webservices\StructType\GeoLocationInternationalAddress
     */
    public function setDistance($distance = null)
    {
        // validation for constraint: int
        if (!is_null($distance) && !is_numeric($distance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distance)), __LINE__);
        }
        $this->distance = $distance;
        return $this;
    }
    /**
     * Get latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \Webservices\StructType\GeoLocationInternationalAddress
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \Webservices\StructType\GeoLocationInternationalAddress
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationInternationalAddress
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
