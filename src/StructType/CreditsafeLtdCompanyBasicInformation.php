<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdCompanyBasicInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdCompanyBasicInformation extends AbstractStructBase
{
    /**
     * The business_name
     * @var string
     */
    public $business_name;
    /**
     * The registered_company_name
     * @var string
     */
    public $registered_company_name;
    /**
     * The company_registration_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_registration_number;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The vat_registration_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vat_registration_number;
    /**
     * The vat_registration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vat_registration_date;
    /**
     * The dateof_company_registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateof_company_registration;
    /**
     * The dateof_starting_operations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateof_starting_operations;
    /**
     * The commercial_court
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $commercial_court;
    /**
     * The legal_form
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form;
    /**
     * The typeof_ownership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $typeof_ownership;
    /**
     * The company_status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_status;
    /**
     * The report_currency
     * @var string
     */
    public $report_currency;
    /**
     * The principal_activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeCompanyActivity
     */
    public $principal_activity;
    /**
     * The contact_address
     * @var string
     */
    public $contact_address;
    /**
     * The contact_telephone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contact_telephone_number;
    /**
     * Constructor method for CreditsafeLtdCompanyBasicInformation
     * @uses CreditsafeLtdCompanyBasicInformation::setBusiness_name()
     * @uses CreditsafeLtdCompanyBasicInformation::setRegistered_company_name()
     * @uses CreditsafeLtdCompanyBasicInformation::setCompany_registration_number()
     * @uses CreditsafeLtdCompanyBasicInformation::setCountry()
     * @uses CreditsafeLtdCompanyBasicInformation::setVat_registration_number()
     * @uses CreditsafeLtdCompanyBasicInformation::setVat_registration_date()
     * @uses CreditsafeLtdCompanyBasicInformation::setDateof_company_registration()
     * @uses CreditsafeLtdCompanyBasicInformation::setDateof_starting_operations()
     * @uses CreditsafeLtdCompanyBasicInformation::setCommercial_court()
     * @uses CreditsafeLtdCompanyBasicInformation::setLegal_form()
     * @uses CreditsafeLtdCompanyBasicInformation::setTypeof_ownership()
     * @uses CreditsafeLtdCompanyBasicInformation::setCompany_status()
     * @uses CreditsafeLtdCompanyBasicInformation::setReport_currency()
     * @uses CreditsafeLtdCompanyBasicInformation::setPrincipal_activity()
     * @uses CreditsafeLtdCompanyBasicInformation::setContact_address()
     * @uses CreditsafeLtdCompanyBasicInformation::setContact_telephone_number()
     * @param string $business_name
     * @param string $registered_company_name
     * @param string $company_registration_number
     * @param string $country
     * @param string $vat_registration_number
     * @param string $vat_registration_date
     * @param string $dateof_company_registration
     * @param string $dateof_starting_operations
     * @param string $commercial_court
     * @param string $legal_form
     * @param string $typeof_ownership
     * @param string $company_status
     * @param string $report_currency
     * @param \Webservices\StructType\CreditsafeCompanyActivity $principal_activity
     * @param string $contact_address
     * @param string $contact_telephone_number
     */
    public function __construct($business_name = null, $registered_company_name = null, $company_registration_number = null, $country = null, $vat_registration_number = null, $vat_registration_date = null, $dateof_company_registration = null, $dateof_starting_operations = null, $commercial_court = null, $legal_form = null, $typeof_ownership = null, $company_status = null, $report_currency = null, \Webservices\StructType\CreditsafeCompanyActivity $principal_activity = null, $contact_address = null, $contact_telephone_number = null)
    {
        $this
            ->setBusiness_name($business_name)
            ->setRegistered_company_name($registered_company_name)
            ->setCompany_registration_number($company_registration_number)
            ->setCountry($country)
            ->setVat_registration_number($vat_registration_number)
            ->setVat_registration_date($vat_registration_date)
            ->setDateof_company_registration($dateof_company_registration)
            ->setDateof_starting_operations($dateof_starting_operations)
            ->setCommercial_court($commercial_court)
            ->setLegal_form($legal_form)
            ->setTypeof_ownership($typeof_ownership)
            ->setCompany_status($company_status)
            ->setReport_currency($report_currency)
            ->setPrincipal_activity($principal_activity)
            ->setContact_address($contact_address)
            ->setContact_telephone_number($contact_telephone_number);
    }
    /**
     * Get business_name value
     * @return string|null
     */
    public function getBusiness_name()
    {
        return $this->business_name;
    }
    /**
     * Set business_name value
     * @param string $business_name
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setBusiness_name($business_name = null)
    {
        // validation for constraint: string
        if (!is_null($business_name) && !is_string($business_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_name)), __LINE__);
        }
        $this->business_name = $business_name;
        return $this;
    }
    /**
     * Get registered_company_name value
     * @return string|null
     */
    public function getRegistered_company_name()
    {
        return $this->registered_company_name;
    }
    /**
     * Set registered_company_name value
     * @param string $registered_company_name
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setRegistered_company_name($registered_company_name = null)
    {
        // validation for constraint: string
        if (!is_null($registered_company_name) && !is_string($registered_company_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registered_company_name)), __LINE__);
        }
        $this->registered_company_name = $registered_company_name;
        return $this;
    }
    /**
     * Get company_registration_number value
     * @return string|null
     */
    public function getCompany_registration_number()
    {
        return $this->company_registration_number;
    }
    /**
     * Set company_registration_number value
     * @param string $company_registration_number
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setCompany_registration_number($company_registration_number = null)
    {
        // validation for constraint: string
        if (!is_null($company_registration_number) && !is_string($company_registration_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_registration_number)), __LINE__);
        }
        $this->company_registration_number = $company_registration_number;
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
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
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
     * Get vat_registration_number value
     * @return string|null
     */
    public function getVat_registration_number()
    {
        return $this->vat_registration_number;
    }
    /**
     * Set vat_registration_number value
     * @param string $vat_registration_number
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setVat_registration_number($vat_registration_number = null)
    {
        // validation for constraint: string
        if (!is_null($vat_registration_number) && !is_string($vat_registration_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vat_registration_number)), __LINE__);
        }
        $this->vat_registration_number = $vat_registration_number;
        return $this;
    }
    /**
     * Get vat_registration_date value
     * @return string|null
     */
    public function getVat_registration_date()
    {
        return $this->vat_registration_date;
    }
    /**
     * Set vat_registration_date value
     * @param string $vat_registration_date
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setVat_registration_date($vat_registration_date = null)
    {
        // validation for constraint: string
        if (!is_null($vat_registration_date) && !is_string($vat_registration_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vat_registration_date)), __LINE__);
        }
        $this->vat_registration_date = $vat_registration_date;
        return $this;
    }
    /**
     * Get dateof_company_registration value
     * @return string|null
     */
    public function getDateof_company_registration()
    {
        return $this->dateof_company_registration;
    }
    /**
     * Set dateof_company_registration value
     * @param string $dateof_company_registration
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setDateof_company_registration($dateof_company_registration = null)
    {
        // validation for constraint: string
        if (!is_null($dateof_company_registration) && !is_string($dateof_company_registration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateof_company_registration)), __LINE__);
        }
        $this->dateof_company_registration = $dateof_company_registration;
        return $this;
    }
    /**
     * Get dateof_starting_operations value
     * @return string|null
     */
    public function getDateof_starting_operations()
    {
        return $this->dateof_starting_operations;
    }
    /**
     * Set dateof_starting_operations value
     * @param string $dateof_starting_operations
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setDateof_starting_operations($dateof_starting_operations = null)
    {
        // validation for constraint: string
        if (!is_null($dateof_starting_operations) && !is_string($dateof_starting_operations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateof_starting_operations)), __LINE__);
        }
        $this->dateof_starting_operations = $dateof_starting_operations;
        return $this;
    }
    /**
     * Get commercial_court value
     * @return string|null
     */
    public function getCommercial_court()
    {
        return $this->commercial_court;
    }
    /**
     * Set commercial_court value
     * @param string $commercial_court
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setCommercial_court($commercial_court = null)
    {
        // validation for constraint: string
        if (!is_null($commercial_court) && !is_string($commercial_court)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commercial_court)), __LINE__);
        }
        $this->commercial_court = $commercial_court;
        return $this;
    }
    /**
     * Get legal_form value
     * @return string|null
     */
    public function getLegal_form()
    {
        return $this->legal_form;
    }
    /**
     * Set legal_form value
     * @param string $legal_form
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setLegal_form($legal_form = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form) && !is_string($legal_form)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form)), __LINE__);
        }
        $this->legal_form = $legal_form;
        return $this;
    }
    /**
     * Get typeof_ownership value
     * @return string|null
     */
    public function getTypeof_ownership()
    {
        return $this->typeof_ownership;
    }
    /**
     * Set typeof_ownership value
     * @param string $typeof_ownership
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setTypeof_ownership($typeof_ownership = null)
    {
        // validation for constraint: string
        if (!is_null($typeof_ownership) && !is_string($typeof_ownership)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeof_ownership)), __LINE__);
        }
        $this->typeof_ownership = $typeof_ownership;
        return $this;
    }
    /**
     * Get company_status value
     * @return string|null
     */
    public function getCompany_status()
    {
        return $this->company_status;
    }
    /**
     * Set company_status value
     * @param string $company_status
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setCompany_status($company_status = null)
    {
        // validation for constraint: string
        if (!is_null($company_status) && !is_string($company_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_status)), __LINE__);
        }
        $this->company_status = $company_status;
        return $this;
    }
    /**
     * Get report_currency value
     * @return string|null
     */
    public function getReport_currency()
    {
        return $this->report_currency;
    }
    /**
     * Set report_currency value
     * @param string $report_currency
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setReport_currency($report_currency = null)
    {
        // validation for constraint: string
        if (!is_null($report_currency) && !is_string($report_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($report_currency)), __LINE__);
        }
        $this->report_currency = $report_currency;
        return $this;
    }
    /**
     * Get principal_activity value
     * @return \Webservices\StructType\CreditsafeCompanyActivity|null
     */
    public function getPrincipal_activity()
    {
        return $this->principal_activity;
    }
    /**
     * Set principal_activity value
     * @param \Webservices\StructType\CreditsafeCompanyActivity $principal_activity
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setPrincipal_activity(\Webservices\StructType\CreditsafeCompanyActivity $principal_activity = null)
    {
        $this->principal_activity = $principal_activity;
        return $this;
    }
    /**
     * Get contact_address value
     * @return string|null
     */
    public function getContact_address()
    {
        return $this->contact_address;
    }
    /**
     * Set contact_address value
     * @param string $contact_address
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setContact_address($contact_address = null)
    {
        // validation for constraint: string
        if (!is_null($contact_address) && !is_string($contact_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_address)), __LINE__);
        }
        $this->contact_address = $contact_address;
        return $this;
    }
    /**
     * Get contact_telephone_number value
     * @return string|null
     */
    public function getContact_telephone_number()
    {
        return $this->contact_telephone_number;
    }
    /**
     * Set contact_telephone_number value
     * @param string $contact_telephone_number
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public function setContact_telephone_number($contact_telephone_number = null)
    {
        // validation for constraint: string
        if (!is_null($contact_telephone_number) && !is_string($contact_telephone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_telephone_number)), __LINE__);
        }
        $this->contact_telephone_number = $contact_telephone_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
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
