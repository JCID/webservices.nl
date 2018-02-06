<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for riskCheckPersonRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskCheckPersonRequestType extends AbstractStructBase
{
    /**
     * The gender
     * @var string
     */
    public $gender;
    /**
     * The initials
     * @var string
     */
    public $initials;
    /**
     * The prefix
     * @var string
     */
    public $prefix;
    /**
     * The last_name
     * @var string
     */
    public $last_name;
    /**
     * The birth_date
     * @var string
     */
    public $birth_date;
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
     * The house_number_addition
     * @var string
     */
    public $house_number_addition;
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
     * The account_number
     * @var string
     */
    public $account_number;
    /**
     * The phone_number
     * @var string
     */
    public $phone_number;
    /**
     * The mobile_number
     * @var string
     */
    public $mobile_number;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The testing_date
     * @var string
     */
    public $testing_date;
    /**
     * Constructor method for riskCheckPersonRequestType
     * @uses RiskCheckPersonRequestType::setGender()
     * @uses RiskCheckPersonRequestType::setInitials()
     * @uses RiskCheckPersonRequestType::setPrefix()
     * @uses RiskCheckPersonRequestType::setLast_name()
     * @uses RiskCheckPersonRequestType::setBirth_date()
     * @uses RiskCheckPersonRequestType::setStreet()
     * @uses RiskCheckPersonRequestType::setHouse_number()
     * @uses RiskCheckPersonRequestType::setHouse_number_addition()
     * @uses RiskCheckPersonRequestType::setPostcode()
     * @uses RiskCheckPersonRequestType::setCity()
     * @uses RiskCheckPersonRequestType::setAccount_number()
     * @uses RiskCheckPersonRequestType::setPhone_number()
     * @uses RiskCheckPersonRequestType::setMobile_number()
     * @uses RiskCheckPersonRequestType::setEmail()
     * @uses RiskCheckPersonRequestType::setTesting_date()
     * @param string $gender
     * @param string $initials
     * @param string $prefix
     * @param string $last_name
     * @param string $birth_date
     * @param string $street
     * @param int $house_number
     * @param string $house_number_addition
     * @param string $postcode
     * @param string $city
     * @param string $account_number
     * @param string $phone_number
     * @param string $mobile_number
     * @param string $email
     * @param string $testing_date
     */
    public function __construct($gender = null, $initials = null, $prefix = null, $last_name = null, $birth_date = null, $street = null, $house_number = null, $house_number_addition = null, $postcode = null, $city = null, $account_number = null, $phone_number = null, $mobile_number = null, $email = null, $testing_date = null)
    {
        $this
            ->setGender($gender)
            ->setInitials($initials)
            ->setPrefix($prefix)
            ->setLast_name($last_name)
            ->setBirth_date($birth_date)
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setHouse_number_addition($house_number_addition)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setAccount_number($account_number)
            ->setPhone_number($phone_number)
            ->setMobile_number($mobile_number)
            ->setEmail($email)
            ->setTesting_date($testing_date);
    }
    /**
     * Get gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param string $gender
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        return $this;
    }
    /**
     * Get initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->initials;
    }
    /**
     * Set initials value
     * @param string $initials
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setInitials($initials = null)
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($initials)), __LINE__);
        }
        $this->initials = $initials;
        return $this;
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Get birth_date value
     * @return string|null
     */
    public function getBirth_date()
    {
        return $this->birth_date;
    }
    /**
     * Set birth_date value
     * @param string $birth_date
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setBirth_date($birth_date = null)
    {
        // validation for constraint: string
        if (!is_null($birth_date) && !is_string($birth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_date)), __LINE__);
        }
        $this->birth_date = $birth_date;
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
     * @return \Webservices\StructType\RiskCheckPersonRequestType
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
     * @return \Webservices\StructType\RiskCheckPersonRequestType
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
     * Get house_number_addition value
     * @return string|null
     */
    public function getHouse_number_addition()
    {
        return $this->house_number_addition;
    }
    /**
     * Set house_number_addition value
     * @param string $house_number_addition
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setHouse_number_addition($house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($house_number_addition) && !is_string($house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_number_addition)), __LINE__);
        }
        $this->house_number_addition = $house_number_addition;
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
     * @return \Webservices\StructType\RiskCheckPersonRequestType
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
     * @return \Webservices\StructType\RiskCheckPersonRequestType
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
     * Get account_number value
     * @return string|null
     */
    public function getAccount_number()
    {
        return $this->account_number;
    }
    /**
     * Set account_number value
     * @param string $account_number
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setAccount_number($account_number = null)
    {
        // validation for constraint: string
        if (!is_null($account_number) && !is_string($account_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_number)), __LINE__);
        }
        $this->account_number = $account_number;
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
     * @return \Webservices\StructType\RiskCheckPersonRequestType
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
     * Get mobile_number value
     * @return string|null
     */
    public function getMobile_number()
    {
        return $this->mobile_number;
    }
    /**
     * Set mobile_number value
     * @param string $mobile_number
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setMobile_number($mobile_number = null)
    {
        // validation for constraint: string
        if (!is_null($mobile_number) && !is_string($mobile_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile_number)), __LINE__);
        }
        $this->mobile_number = $mobile_number;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get testing_date value
     * @return string|null
     */
    public function getTesting_date()
    {
        return $this->testing_date;
    }
    /**
     * Set testing_date value
     * @param string $testing_date
     * @return \Webservices\StructType\RiskCheckPersonRequestType
     */
    public function setTesting_date($testing_date = null)
    {
        // validation for constraint: string
        if (!is_null($testing_date) && !is_string($testing_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($testing_date)), __LINE__);
        }
        $this->testing_date = $testing_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskCheckPersonRequestType
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
