<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for riskCheckGetRiskPersonCompanyReportRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskCheckGetRiskPersonCompanyReportRequestType extends AbstractStructBase
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
     * Constructor method for riskCheckGetRiskPersonCompanyReportRequestType
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setGender()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setInitials()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setPrefix()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setLast_name()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setBirth_date()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setStreet()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setHouse_number()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setHouse_number_addition()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setPostcode()
     * @uses RiskCheckGetRiskPersonCompanyReportRequestType::setCity()
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
     */
    public function __construct($gender = null, $initials = null, $prefix = null, $last_name = null, $birth_date = null, $street = null, $house_number = null, $house_number_addition = null, $postcode = null, $city = null)
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
            ->setCity($city);
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType
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
