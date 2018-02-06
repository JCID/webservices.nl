<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskPerson StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskPerson extends AbstractStructBase
{
    /**
     * The gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gender;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $initials;
    /**
     * The prefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $prefix;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $last_name;
    /**
     * The birth_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_date;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskAddress
     */
    public $address;
    /**
     * Constructor method for RiskPerson
     * @uses RiskPerson::setGender()
     * @uses RiskPerson::setFirst_name()
     * @uses RiskPerson::setInitials()
     * @uses RiskPerson::setPrefix()
     * @uses RiskPerson::setLast_name()
     * @uses RiskPerson::setBirth_date()
     * @uses RiskPerson::setAddress()
     * @param string $gender
     * @param string $first_name
     * @param string $initials
     * @param string $prefix
     * @param string $last_name
     * @param string $birth_date
     * @param \Webservices\StructType\RiskAddress $address
     */
    public function __construct($gender = null, $first_name = null, $initials = null, $prefix = null, $last_name = null, $birth_date = null, \Webservices\StructType\RiskAddress $address = null)
    {
        $this
            ->setGender($gender)
            ->setFirst_name($first_name)
            ->setInitials($initials)
            ->setPrefix($prefix)
            ->setLast_name($last_name)
            ->setBirth_date($birth_date)
            ->setAddress($address);
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
     * @return \Webservices\StructType\RiskPerson
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
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Webservices\StructType\RiskPerson
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
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
     * @return \Webservices\StructType\RiskPerson
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
     * @return \Webservices\StructType\RiskPerson
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
     * @return \Webservices\StructType\RiskPerson
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
     * @return \Webservices\StructType\RiskPerson
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
     * Get address value
     * @return \Webservices\StructType\RiskAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\RiskAddress $address
     * @return \Webservices\StructType\RiskPerson
     */
    public function setAddress(\Webservices\StructType\RiskAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskPerson
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
