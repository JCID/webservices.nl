<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for edrGetScoreRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class EdrGetScoreRequestType extends AbstractStructBase
{
    /**
     * The last_name
     * @var string
     */
    public $last_name;
    /**
     * The initials
     * @var string
     */
    public $initials;
    /**
     * The surname_prefix
     * @var string
     */
    public $surname_prefix;
    /**
     * The gender
     * @var string
     */
    public $gender;
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
     * @var string
     */
    public $house_number;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The phone_number
     * @var string
     */
    public $phone_number;
    /**
     * Constructor method for edrGetScoreRequestType
     * @uses EdrGetScoreRequestType::setLast_name()
     * @uses EdrGetScoreRequestType::setInitials()
     * @uses EdrGetScoreRequestType::setSurname_prefix()
     * @uses EdrGetScoreRequestType::setGender()
     * @uses EdrGetScoreRequestType::setBirth_date()
     * @uses EdrGetScoreRequestType::setStreet()
     * @uses EdrGetScoreRequestType::setHouse_number()
     * @uses EdrGetScoreRequestType::setPostcode()
     * @uses EdrGetScoreRequestType::setPhone_number()
     * @param string $last_name
     * @param string $initials
     * @param string $surname_prefix
     * @param string $gender
     * @param string $birth_date
     * @param string $street
     * @param string $house_number
     * @param string $postcode
     * @param string $phone_number
     */
    public function __construct($last_name = null, $initials = null, $surname_prefix = null, $gender = null, $birth_date = null, $street = null, $house_number = null, $postcode = null, $phone_number = null)
    {
        $this
            ->setLast_name($last_name)
            ->setInitials($initials)
            ->setSurname_prefix($surname_prefix)
            ->setGender($gender)
            ->setBirth_date($birth_date)
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setPostcode($postcode)
            ->setPhone_number($phone_number);
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * Get surname_prefix value
     * @return string|null
     */
    public function getSurname_prefix()
    {
        return $this->surname_prefix;
    }
    /**
     * Set surname_prefix value
     * @param string $surname_prefix
     * @return \Webservices\StructType\EdrGetScoreRequestType
     */
    public function setSurname_prefix($surname_prefix = null)
    {
        // validation for constraint: string
        if (!is_null($surname_prefix) && !is_string($surname_prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname_prefix)), __LINE__);
        }
        $this->surname_prefix = $surname_prefix;
        return $this;
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\EdrGetScoreRequestType
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
