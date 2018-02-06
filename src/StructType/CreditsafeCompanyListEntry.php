<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeCompanyListEntry StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeCompanyListEntry extends AbstractStructBase
{
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The company_name
     * @var string
     */
    public $company_name;
    /**
     * The company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_id;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number;
    /**
     * Constructor method for CreditsafeCompanyListEntry
     * @uses CreditsafeCompanyListEntry::setCountry()
     * @uses CreditsafeCompanyListEntry::setCompany_name()
     * @uses CreditsafeCompanyListEntry::setCompany_id()
     * @uses CreditsafeCompanyListEntry::setNumber()
     * @param string $country
     * @param string $company_name
     * @param string $company_id
     * @param string $number
     */
    public function __construct($country = null, $company_name = null, $company_id = null, $number = null)
    {
        $this
            ->setCountry($country)
            ->setCompany_name($company_name)
            ->setCompany_id($company_id)
            ->setNumber($number);
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
     * @return \Webservices\StructType\CreditsafeCompanyListEntry
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
     * Get company_name value
     * @return string|null
     */
    public function getCompany_name()
    {
        return $this->company_name;
    }
    /**
     * Set company_name value
     * @param string $company_name
     * @return \Webservices\StructType\CreditsafeCompanyListEntry
     */
    public function setCompany_name($company_name = null)
    {
        // validation for constraint: string
        if (!is_null($company_name) && !is_string($company_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_name)), __LINE__);
        }
        $this->company_name = $company_name;
        return $this;
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->company_id;
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \Webservices\StructType\CreditsafeCompanyListEntry
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $company_id;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Webservices\StructType\CreditsafeCompanyListEntry
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeCompanyListEntry
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
