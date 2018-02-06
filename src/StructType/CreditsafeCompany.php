<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeCompany StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeCompany extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The registration_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $registration_number;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The office_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $office_type;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * The available_report_types
     * @var \Webservices\ArrayType\StringArray
     */
    public $available_report_types;
    /**
     * The available_languages
     * @var \Webservices\ArrayType\StringArray
     */
    public $available_languages;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The online_reports
     * @var bool
     */
    public $online_reports;
    /**
     * Constructor method for CreditsafeCompany
     * @uses CreditsafeCompany::setName()
     * @uses CreditsafeCompany::setRegistration_number()
     * @uses CreditsafeCompany::setType()
     * @uses CreditsafeCompany::setStatus()
     * @uses CreditsafeCompany::setOffice_type()
     * @uses CreditsafeCompany::setAddress()
     * @uses CreditsafeCompany::setAvailable_report_types()
     * @uses CreditsafeCompany::setAvailable_languages()
     * @uses CreditsafeCompany::setId()
     * @uses CreditsafeCompany::setCountry()
     * @uses CreditsafeCompany::setOnline_reports()
     * @param string $name
     * @param string $registration_number
     * @param string $type
     * @param string $status
     * @param string $office_type
     * @param string $address
     * @param \Webservices\ArrayType\StringArray $available_report_types
     * @param \Webservices\ArrayType\StringArray $available_languages
     * @param string $id
     * @param string $country
     * @param bool $online_reports
     */
    public function __construct($name = null, $registration_number = null, $type = null, $status = null, $office_type = null, $address = null, \Webservices\ArrayType\StringArray $available_report_types = null, \Webservices\ArrayType\StringArray $available_languages = null, $id = null, $country = null, $online_reports = null)
    {
        $this
            ->setName($name)
            ->setRegistration_number($registration_number)
            ->setType($type)
            ->setStatus($status)
            ->setOffice_type($office_type)
            ->setAddress($address)
            ->setAvailable_report_types($available_report_types)
            ->setAvailable_languages($available_languages)
            ->setId($id)
            ->setCountry($country)
            ->setOnline_reports($online_reports);
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
     * @return \Webservices\StructType\CreditsafeCompany
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
     * @return \Webservices\StructType\CreditsafeCompany
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\CreditsafeCompany
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Webservices\StructType\CreditsafeCompany
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
     * @return \Webservices\StructType\CreditsafeCompany
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
     * @return \Webservices\StructType\CreditsafeCompany
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
     * Get available_report_types value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getAvailable_report_types()
    {
        return $this->available_report_types;
    }
    /**
     * Set available_report_types value
     * @param \Webservices\ArrayType\StringArray $available_report_types
     * @return \Webservices\StructType\CreditsafeCompany
     */
    public function setAvailable_report_types(\Webservices\ArrayType\StringArray $available_report_types = null)
    {
        $this->available_report_types = $available_report_types;
        return $this;
    }
    /**
     * Get available_languages value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getAvailable_languages()
    {
        return $this->available_languages;
    }
    /**
     * Set available_languages value
     * @param \Webservices\ArrayType\StringArray $available_languages
     * @return \Webservices\StructType\CreditsafeCompany
     */
    public function setAvailable_languages(\Webservices\ArrayType\StringArray $available_languages = null)
    {
        $this->available_languages = $available_languages;
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
     * @return \Webservices\StructType\CreditsafeCompany
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
     * @return \Webservices\StructType\CreditsafeCompany
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
     * Get online_reports value
     * @return bool|null
     */
    public function getOnline_reports()
    {
        return $this->online_reports;
    }
    /**
     * Set online_reports value
     * @param bool $online_reports
     * @return \Webservices\StructType\CreditsafeCompany
     */
    public function setOnline_reports($online_reports = null)
    {
        // validation for constraint: boolean
        if (!is_null($online_reports) && !is_bool($online_reports)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($online_reports)), __LINE__);
        }
        $this->online_reports = $online_reports;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeCompany
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
