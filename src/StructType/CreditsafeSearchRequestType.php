<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creditsafeSearchRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeSearchRequestType extends AbstractStructBase
{
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The registration_number
     * @var string
     */
    public $registration_number;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The office_type
     * @var string
     */
    public $office_type;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The name_match_type
     * @var string
     */
    public $name_match_type;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The address_match_type
     * @var string
     */
    public $address_match_type;
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The house_number
     * @var string
     */
    public $house_number;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The postal_code
     * @var string
     */
    public $postal_code;
    /**
     * The province
     * @var string
     */
    public $province;
    /**
     * The phone_number
     * @var string
     */
    public $phone_number;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for creditsafeSearchRequestType
     * @uses CreditsafeSearchRequestType::setCountry()
     * @uses CreditsafeSearchRequestType::setId()
     * @uses CreditsafeSearchRequestType::setRegistration_number()
     * @uses CreditsafeSearchRequestType::setStatus()
     * @uses CreditsafeSearchRequestType::setOffice_type()
     * @uses CreditsafeSearchRequestType::setName()
     * @uses CreditsafeSearchRequestType::setName_match_type()
     * @uses CreditsafeSearchRequestType::setAddress()
     * @uses CreditsafeSearchRequestType::setAddress_match_type()
     * @uses CreditsafeSearchRequestType::setStreet()
     * @uses CreditsafeSearchRequestType::setHouse_number()
     * @uses CreditsafeSearchRequestType::setCity()
     * @uses CreditsafeSearchRequestType::setPostal_code()
     * @uses CreditsafeSearchRequestType::setProvince()
     * @uses CreditsafeSearchRequestType::setPhone_number()
     * @uses CreditsafeSearchRequestType::setPage()
     * @param string $country
     * @param string $id
     * @param string $registration_number
     * @param string $status
     * @param string $office_type
     * @param string $name
     * @param string $name_match_type
     * @param string $address
     * @param string $address_match_type
     * @param string $street
     * @param string $house_number
     * @param string $city
     * @param string $postal_code
     * @param string $province
     * @param string $phone_number
     * @param int $page
     */
    public function __construct($country = null, $id = null, $registration_number = null, $status = null, $office_type = null, $name = null, $name_match_type = null, $address = null, $address_match_type = null, $street = null, $house_number = null, $city = null, $postal_code = null, $province = null, $phone_number = null, $page = null)
    {
        $this
            ->setCountry($country)
            ->setId($id)
            ->setRegistration_number($registration_number)
            ->setStatus($status)
            ->setOffice_type($office_type)
            ->setName($name)
            ->setName_match_type($name_match_type)
            ->setAddress($address)
            ->setAddress_match_type($address_match_type)
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setCity($city)
            ->setPostal_code($postal_code)
            ->setProvince($province)
            ->setPhone_number($phone_number)
            ->setPage($page);
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get registration_number value
     * @return string|null
     */
    public function getRegistration_number()
    {
        return $this->registration_number;
    }
    /**
     * Set registration_number value
     * @param string $registration_number
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setRegistration_number($registration_number = null)
    {
        // validation for constraint: string
        if (!is_null($registration_number) && !is_string($registration_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration_number)), __LINE__);
        }
        $this->registration_number = $registration_number;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get office_type value
     * @return string|null
     */
    public function getOffice_type()
    {
        return $this->office_type;
    }
    /**
     * Set office_type value
     * @param string $office_type
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setOffice_type($office_type = null)
    {
        // validation for constraint: string
        if (!is_null($office_type) && !is_string($office_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($office_type)), __LINE__);
        }
        $this->office_type = $office_type;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get name_match_type value
     * @return string|null
     */
    public function getName_match_type()
    {
        return $this->name_match_type;
    }
    /**
     * Set name_match_type value
     * @param string $name_match_type
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setName_match_type($name_match_type = null)
    {
        // validation for constraint: string
        if (!is_null($name_match_type) && !is_string($name_match_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name_match_type)), __LINE__);
        }
        $this->name_match_type = $name_match_type;
        return $this;
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
     * Get address_match_type value
     * @return string|null
     */
    public function getAddress_match_type()
    {
        return $this->address_match_type;
    }
    /**
     * Set address_match_type value
     * @param string $address_match_type
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setAddress_match_type($address_match_type = null)
    {
        // validation for constraint: string
        if (!is_null($address_match_type) && !is_string($address_match_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address_match_type)), __LINE__);
        }
        $this->address_match_type = $address_match_type;
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
     * @return string|null
     */
    public function getHouse_number()
    {
        return $this->house_number;
    }
    /**
     * Set house_number value
     * @param string $house_number
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setHouse_number($house_number = null)
    {
        // validation for constraint: string
        if (!is_null($house_number) && !is_string($house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_number)), __LINE__);
        }
        $this->house_number = $house_number;
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
     * Get phone_number value
     * @return string|null
     */
    public function getPhone_number()
    {
        return $this->phone_number;
    }
    /**
     * Set phone_number value
     * @param string $phone_number
     * @return \Webservices\StructType\CreditsafeSearchRequestType
     */
    public function setPhone_number($phone_number = null)
    {
        // validation for constraint: string
        if (!is_null($phone_number) && !is_string($phone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone_number)), __LINE__);
        }
        $this->phone_number = $phone_number;
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
     * @return \Webservices\StructType\CreditsafeSearchRequestType
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
