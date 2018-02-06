<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatLonCoordinatesInternationalAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class LatLonCoordinatesInternationalAddress extends AbstractStructBase
{
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The street
     * @var string
     */
    public $street;
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
     * The country_iso2
     * @var string
     */
    public $country_iso2;
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
     * Constructor method for LatLonCoordinatesInternationalAddress
     * @uses LatLonCoordinatesInternationalAddress::setPostcode()
     * @uses LatLonCoordinatesInternationalAddress::setStreet()
     * @uses LatLonCoordinatesInternationalAddress::setCity()
     * @uses LatLonCoordinatesInternationalAddress::setProvince()
     * @uses LatLonCoordinatesInternationalAddress::setCountry_iso2()
     * @uses LatLonCoordinatesInternationalAddress::setLatitude()
     * @uses LatLonCoordinatesInternationalAddress::setLongitude()
     * @param string $postcode
     * @param string $street
     * @param string $city
     * @param string $province
     * @param string $country_iso2
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($postcode = null, $street = null, $city = null, $province = null, $country_iso2 = null, $latitude = null, $longitude = null)
    {
        $this
            ->setPostcode($postcode)
            ->setStreet($street)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry_iso2($country_iso2)
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
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
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
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
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
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
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
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
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
     * Get country_iso2 value
     * @return string|null
     */
    public function getCountry_iso2()
    {
        return $this->country_iso2;
    }
    /**
     * Set country_iso2 value
     * @param string $country_iso2
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
     */
    public function setCountry_iso2($country_iso2 = null)
    {
        // validation for constraint: string
        if (!is_null($country_iso2) && !is_string($country_iso2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_iso2)), __LINE__);
        }
        $this->country_iso2 = $country_iso2;
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
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
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
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
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
     * @return \Webservices\StructType\LatLonCoordinatesInternationalAddress
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
