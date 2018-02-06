<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for internationalAddressSearchInteractiveRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InternationalAddressSearchInteractiveRequestType extends AbstractStructBase
{
    /**
     * The organization
     * @var string
     */
    public $organization;
    /**
     * The building
     * @var string
     */
    public $building;
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The housenr
     * @var string
     */
    public $housenr;
    /**
     * The pobox
     * @var string
     */
    public $pobox;
    /**
     * The locality
     * @var string
     */
    public $locality;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
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
     * The country_format
     * @var string
     */
    public $country_format;
    /**
     * Constructor method for internationalAddressSearchInteractiveRequestType
     * @uses InternationalAddressSearchInteractiveRequestType::setOrganization()
     * @uses InternationalAddressSearchInteractiveRequestType::setBuilding()
     * @uses InternationalAddressSearchInteractiveRequestType::setStreet()
     * @uses InternationalAddressSearchInteractiveRequestType::setHousenr()
     * @uses InternationalAddressSearchInteractiveRequestType::setPobox()
     * @uses InternationalAddressSearchInteractiveRequestType::setLocality()
     * @uses InternationalAddressSearchInteractiveRequestType::setPostcode()
     * @uses InternationalAddressSearchInteractiveRequestType::setProvince()
     * @uses InternationalAddressSearchInteractiveRequestType::setCountry()
     * @uses InternationalAddressSearchInteractiveRequestType::setLanguage()
     * @uses InternationalAddressSearchInteractiveRequestType::setCountry_format()
     * @param string $organization
     * @param string $building
     * @param string $street
     * @param string $housenr
     * @param string $pobox
     * @param string $locality
     * @param string $postcode
     * @param string $province
     * @param string $country
     * @param string $language
     * @param string $country_format
     */
    public function __construct($organization = null, $building = null, $street = null, $housenr = null, $pobox = null, $locality = null, $postcode = null, $province = null, $country = null, $language = null, $country_format = null)
    {
        $this
            ->setOrganization($organization)
            ->setBuilding($building)
            ->setStreet($street)
            ->setHousenr($housenr)
            ->setPobox($pobox)
            ->setLocality($locality)
            ->setPostcode($postcode)
            ->setProvince($province)
            ->setCountry($country)
            ->setLanguage($language)
            ->setCountry_format($country_format);
    }
    /**
     * Get organization value
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * Set organization value
     * @param string $organization
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
     */
    public function setOrganization($organization = null)
    {
        // validation for constraint: string
        if (!is_null($organization) && !is_string($organization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($organization)), __LINE__);
        }
        $this->organization = $organization;
        return $this;
    }
    /**
     * Get building value
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param string $building
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($building)), __LINE__);
        }
        $this->building = $building;
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
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
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
     * Get housenr value
     * @return string|null
     */
    public function getHousenr()
    {
        return $this->housenr;
    }
    /**
     * Set housenr value
     * @param string $housenr
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
     */
    public function setHousenr($housenr = null)
    {
        // validation for constraint: string
        if (!is_null($housenr) && !is_string($housenr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($housenr)), __LINE__);
        }
        $this->housenr = $housenr;
        return $this;
    }
    /**
     * Get pobox value
     * @return string|null
     */
    public function getPobox()
    {
        return $this->pobox;
    }
    /**
     * Set pobox value
     * @param string $pobox
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
     */
    public function setPobox($pobox = null)
    {
        // validation for constraint: string
        if (!is_null($pobox) && !is_string($pobox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pobox)), __LINE__);
        }
        $this->pobox = $pobox;
        return $this;
    }
    /**
     * Get locality value
     * @return string|null
     */
    public function getLocality()
    {
        return $this->locality;
    }
    /**
     * Set locality value
     * @param string $locality
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
     */
    public function setLocality($locality = null)
    {
        // validation for constraint: string
        if (!is_null($locality) && !is_string($locality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locality)), __LINE__);
        }
        $this->locality = $locality;
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
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
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
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
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
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
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
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
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
     * Get country_format value
     * @return string|null
     */
    public function getCountry_format()
    {
        return $this->country_format;
    }
    /**
     * Set country_format value
     * @param string $country_format
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
     */
    public function setCountry_format($country_format = null)
    {
        // validation for constraint: string
        if (!is_null($country_format) && !is_string($country_format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_format)), __LINE__);
        }
        $this->country_format = $country_format;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InternationalAddressSearchInteractiveRequestType
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
