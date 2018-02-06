<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * geoLocationInternationalAddressCoordinatesLatLonV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationInternationalAddressCoordinatesLatLonV2RequestType extends AbstractStructBase
{
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The postalcode
     * @var string
     */
    public $postalcode;
    /**
     * The houseno
     * @var int
     */
    public $houseno;
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
     * The matchrate
     * @var float
     */
    public $matchrate;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for
     * geoLocationInternationalAddressCoordinatesLatLonV2RequestType
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setCountry()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setPostalcode()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setHouseno()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setStreet()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setCity()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setProvince()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setMatchrate()
     * @uses GeoLocationInternationalAddressCoordinatesLatLonV2RequestType::setLanguage()
     * @param string $country
     * @param string $postalcode
     * @param int $houseno
     * @param string $street
     * @param string $city
     * @param string $province
     * @param float $matchrate
     * @param string $language
     */
    public function __construct($country = null, $postalcode = null, $houseno = null, $street = null, $city = null, $province = null, $matchrate = null, $language = null)
    {
        $this
            ->setCountry($country)
            ->setPostalcode($postalcode)
            ->setHouseno($houseno)
            ->setStreet($street)
            ->setCity($city)
            ->setProvince($province)
            ->setMatchrate($matchrate)
            ->setLanguage($language);
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
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
     * Get postalcode value
     * @return string|null
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }
    /**
     * Set postalcode value
     * @param string $postalcode
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
     */
    public function setPostalcode($postalcode = null)
    {
        // validation for constraint: string
        if (!is_null($postalcode) && !is_string($postalcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalcode)), __LINE__);
        }
        $this->postalcode = $postalcode;
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
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
     * Get matchrate value
     * @return float|null
     */
    public function getMatchrate()
    {
        return $this->matchrate;
    }
    /**
     * Set matchrate value
     * @param float $matchrate
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
     */
    public function setMatchrate($matchrate = null)
    {
        $this->matchrate = $matchrate;
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType
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
