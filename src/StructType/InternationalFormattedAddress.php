<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalFormattedAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InternationalFormattedAddress extends AbstractStructBase
{
    /**
     * The matchrate
     * @var float
     */
    public $matchrate;
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
     * The countryspecific_locality
     * @var string
     */
    public $countryspecific_locality;
    /**
     * The delivery_address
     * @var string
     */
    public $delivery_address;
    /**
     * The formatted_address
     * @var string
     */
    public $formatted_address;
    /**
     * The organization
     * @var string
     */
    public $organization;
    /**
     * The department
     * @var string
     */
    public $department;
    /**
     * The contact
     * @var string
     */
    public $contact;
    /**
     * The building
     * @var string
     */
    public $building;
    /**
     * Constructor method for InternationalFormattedAddress
     * @uses InternationalFormattedAddress::setMatchrate()
     * @uses InternationalFormattedAddress::setStreet()
     * @uses InternationalFormattedAddress::setHousenr()
     * @uses InternationalFormattedAddress::setPobox()
     * @uses InternationalFormattedAddress::setLocality()
     * @uses InternationalFormattedAddress::setPostcode()
     * @uses InternationalFormattedAddress::setProvince()
     * @uses InternationalFormattedAddress::setCountry()
     * @uses InternationalFormattedAddress::setCountryspecific_locality()
     * @uses InternationalFormattedAddress::setDelivery_address()
     * @uses InternationalFormattedAddress::setFormatted_address()
     * @uses InternationalFormattedAddress::setOrganization()
     * @uses InternationalFormattedAddress::setDepartment()
     * @uses InternationalFormattedAddress::setContact()
     * @uses InternationalFormattedAddress::setBuilding()
     * @param float $matchrate
     * @param string $street
     * @param string $housenr
     * @param string $pobox
     * @param string $locality
     * @param string $postcode
     * @param string $province
     * @param string $country
     * @param string $countryspecific_locality
     * @param string $delivery_address
     * @param string $formatted_address
     * @param string $organization
     * @param string $department
     * @param string $contact
     * @param string $building
     */
    public function __construct($matchrate = null, $street = null, $housenr = null, $pobox = null, $locality = null, $postcode = null, $province = null, $country = null, $countryspecific_locality = null, $delivery_address = null, $formatted_address = null, $organization = null, $department = null, $contact = null, $building = null)
    {
        $this
            ->setMatchrate($matchrate)
            ->setStreet($street)
            ->setHousenr($housenr)
            ->setPobox($pobox)
            ->setLocality($locality)
            ->setPostcode($postcode)
            ->setProvince($province)
            ->setCountry($country)
            ->setCountryspecific_locality($countryspecific_locality)
            ->setDelivery_address($delivery_address)
            ->setFormatted_address($formatted_address)
            ->setOrganization($organization)
            ->setDepartment($department)
            ->setContact($contact)
            ->setBuilding($building);
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
     * @return \Webservices\StructType\InternationalFormattedAddress
     */
    public function setMatchrate($matchrate = null)
    {
        $this->matchrate = $matchrate;
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * Get countryspecific_locality value
     * @return string|null
     */
    public function getCountryspecific_locality()
    {
        return $this->countryspecific_locality;
    }
    /**
     * Set countryspecific_locality value
     * @param string $countryspecific_locality
     * @return \Webservices\StructType\InternationalFormattedAddress
     */
    public function setCountryspecific_locality($countryspecific_locality = null)
    {
        // validation for constraint: string
        if (!is_null($countryspecific_locality) && !is_string($countryspecific_locality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryspecific_locality)), __LINE__);
        }
        $this->countryspecific_locality = $countryspecific_locality;
        return $this;
    }
    /**
     * Get delivery_address value
     * @return string|null
     */
    public function getDelivery_address()
    {
        return $this->delivery_address;
    }
    /**
     * Set delivery_address value
     * @param string $delivery_address
     * @return \Webservices\StructType\InternationalFormattedAddress
     */
    public function setDelivery_address($delivery_address = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_address) && !is_string($delivery_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_address)), __LINE__);
        }
        $this->delivery_address = $delivery_address;
        return $this;
    }
    /**
     * Get formatted_address value
     * @return string|null
     */
    public function getFormatted_address()
    {
        return $this->formatted_address;
    }
    /**
     * Set formatted_address value
     * @param string $formatted_address
     * @return \Webservices\StructType\InternationalFormattedAddress
     */
    public function setFormatted_address($formatted_address = null)
    {
        // validation for constraint: string
        if (!is_null($formatted_address) && !is_string($formatted_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formatted_address)), __LINE__);
        }
        $this->formatted_address = $formatted_address;
        return $this;
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * Get department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Webservices\StructType\InternationalFormattedAddress
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($department)), __LINE__);
        }
        $this->department = $department;
        return $this;
    }
    /**
     * Get contact value
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param string $contact
     * @return \Webservices\StructType\InternationalFormattedAddress
     */
    public function setContact($contact = null)
    {
        // validation for constraint: string
        if (!is_null($contact) && !is_string($contact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact)), __LINE__);
        }
        $this->contact = $contact;
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
     * @return \Webservices\StructType\InternationalFormattedAddress
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InternationalFormattedAddress
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
