<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdCompanySummary StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdCompanySummary extends AbstractStructBase
{
    /**
     * The business_name
     * @var string
     */
    public $business_name;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number;
    /**
     * The company_registration_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_registration_number;
    /**
     * The main_activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeCompanyActivity
     */
    public $main_activity;
    /**
     * The company_status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_status;
    /**
     * The latest_turnover_figure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $latest_turnover_figure;
    /**
     * The latest_shareholders_equity_figure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $latest_shareholders_equity_figure;
    /**
     * The credit_rating
     * @var string
     */
    public $credit_rating;
    /**
     * The credit_limit
     * @var string
     */
    public $credit_limit;
    /**
     * The rating_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rating_description;
    /**
     * Constructor method for CreditsafeLtdCompanySummary
     * @uses CreditsafeLtdCompanySummary::setBusiness_name()
     * @uses CreditsafeLtdCompanySummary::setCountry()
     * @uses CreditsafeLtdCompanySummary::setNumber()
     * @uses CreditsafeLtdCompanySummary::setCompany_registration_number()
     * @uses CreditsafeLtdCompanySummary::setMain_activity()
     * @uses CreditsafeLtdCompanySummary::setCompany_status()
     * @uses CreditsafeLtdCompanySummary::setLatest_turnover_figure()
     * @uses CreditsafeLtdCompanySummary::setLatest_shareholders_equity_figure()
     * @uses CreditsafeLtdCompanySummary::setCredit_rating()
     * @uses CreditsafeLtdCompanySummary::setCredit_limit()
     * @uses CreditsafeLtdCompanySummary::setRating_description()
     * @param string $business_name
     * @param string $country
     * @param string $number
     * @param string $company_registration_number
     * @param \Webservices\StructType\CreditsafeCompanyActivity $main_activity
     * @param string $company_status
     * @param float $latest_turnover_figure
     * @param float $latest_shareholders_equity_figure
     * @param string $credit_rating
     * @param string $credit_limit
     * @param string $rating_description
     */
    public function __construct($business_name = null, $country = null, $number = null, $company_registration_number = null, \Webservices\StructType\CreditsafeCompanyActivity $main_activity = null, $company_status = null, $latest_turnover_figure = null, $latest_shareholders_equity_figure = null, $credit_rating = null, $credit_limit = null, $rating_description = null)
    {
        $this
            ->setBusiness_name($business_name)
            ->setCountry($country)
            ->setNumber($number)
            ->setCompany_registration_number($company_registration_number)
            ->setMain_activity($main_activity)
            ->setCompany_status($company_status)
            ->setLatest_turnover_figure($latest_turnover_figure)
            ->setLatest_shareholders_equity_figure($latest_shareholders_equity_figure)
            ->setCredit_rating($credit_rating)
            ->setCredit_limit($credit_limit)
            ->setRating_description($rating_description);
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
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
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
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
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
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
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
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
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
     * Get main_activity value
     * @return \Webservices\StructType\CreditsafeCompanyActivity|null
     */
    public function getMain_activity()
    {
        return $this->main_activity;
    }
    /**
     * Set main_activity value
     * @param \Webservices\StructType\CreditsafeCompanyActivity $main_activity
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
     */
    public function setMain_activity(\Webservices\StructType\CreditsafeCompanyActivity $main_activity = null)
    {
        $this->main_activity = $main_activity;
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
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
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
     * Get latest_turnover_figure value
     * @return float|null
     */
    public function getLatest_turnover_figure()
    {
        return $this->latest_turnover_figure;
    }
    /**
     * Set latest_turnover_figure value
     * @param float $latest_turnover_figure
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
     */
    public function setLatest_turnover_figure($latest_turnover_figure = null)
    {
        $this->latest_turnover_figure = $latest_turnover_figure;
        return $this;
    }
    /**
     * Get latest_shareholders_equity_figure value
     * @return float|null
     */
    public function getLatest_shareholders_equity_figure()
    {
        return $this->latest_shareholders_equity_figure;
    }
    /**
     * Set latest_shareholders_equity_figure value
     * @param float $latest_shareholders_equity_figure
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
     */
    public function setLatest_shareholders_equity_figure($latest_shareholders_equity_figure = null)
    {
        $this->latest_shareholders_equity_figure = $latest_shareholders_equity_figure;
        return $this;
    }
    /**
     * Get credit_rating value
     * @return string|null
     */
    public function getCredit_rating()
    {
        return $this->credit_rating;
    }
    /**
     * Set credit_rating value
     * @param string $credit_rating
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
     */
    public function setCredit_rating($credit_rating = null)
    {
        // validation for constraint: string
        if (!is_null($credit_rating) && !is_string($credit_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_rating)), __LINE__);
        }
        $this->credit_rating = $credit_rating;
        return $this;
    }
    /**
     * Get credit_limit value
     * @return string|null
     */
    public function getCredit_limit()
    {
        return $this->credit_limit;
    }
    /**
     * Set credit_limit value
     * @param string $credit_limit
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
     */
    public function setCredit_limit($credit_limit = null)
    {
        // validation for constraint: string
        if (!is_null($credit_limit) && !is_string($credit_limit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_limit)), __LINE__);
        }
        $this->credit_limit = $credit_limit;
        return $this;
    }
    /**
     * Get rating_description value
     * @return string|null
     */
    public function getRating_description()
    {
        return $this->rating_description;
    }
    /**
     * Set rating_description value
     * @param string $rating_description
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
     */
    public function setRating_description($rating_description = null)
    {
        // validation for constraint: string
        if (!is_null($rating_description) && !is_string($rating_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rating_description)), __LINE__);
        }
        $this->rating_description = $rating_description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary
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
