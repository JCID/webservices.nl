<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeIndustryComparison StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeIndustryComparison extends AbstractStructBase
{
    /**
     * The activity_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $activity_code;
    /**
     * The activity_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $activity_description;
    /**
     * The industry_average_payment_expectation_days
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $industry_average_payment_expectation_days;
    /**
     * The industry_average_day_sales_outstanding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $industry_average_day_sales_outstanding;
    /**
     * The industry_average_credit_rating
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $industry_average_credit_rating;
    /**
     * Constructor method for CreditsafeBeIndustryComparison
     * @uses CreditsafeBeIndustryComparison::setActivity_code()
     * @uses CreditsafeBeIndustryComparison::setActivity_description()
     * @uses CreditsafeBeIndustryComparison::setIndustry_average_payment_expectation_days()
     * @uses CreditsafeBeIndustryComparison::setIndustry_average_day_sales_outstanding()
     * @uses CreditsafeBeIndustryComparison::setIndustry_average_credit_rating()
     * @param int $activity_code
     * @param string $activity_description
     * @param float $industry_average_payment_expectation_days
     * @param float $industry_average_day_sales_outstanding
     * @param float $industry_average_credit_rating
     */
    public function __construct($activity_code = null, $activity_description = null, $industry_average_payment_expectation_days = null, $industry_average_day_sales_outstanding = null, $industry_average_credit_rating = null)
    {
        $this
            ->setActivity_code($activity_code)
            ->setActivity_description($activity_description)
            ->setIndustry_average_payment_expectation_days($industry_average_payment_expectation_days)
            ->setIndustry_average_day_sales_outstanding($industry_average_day_sales_outstanding)
            ->setIndustry_average_credit_rating($industry_average_credit_rating);
    }
    /**
     * Get activity_code value
     * @return int|null
     */
    public function getActivity_code()
    {
        return $this->activity_code;
    }
    /**
     * Set activity_code value
     * @param int $activity_code
     * @return \Webservices\StructType\CreditsafeBeIndustryComparison
     */
    public function setActivity_code($activity_code = null)
    {
        // validation for constraint: int
        if (!is_null($activity_code) && !is_numeric($activity_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($activity_code)), __LINE__);
        }
        $this->activity_code = $activity_code;
        return $this;
    }
    /**
     * Get activity_description value
     * @return string|null
     */
    public function getActivity_description()
    {
        return $this->activity_description;
    }
    /**
     * Set activity_description value
     * @param string $activity_description
     * @return \Webservices\StructType\CreditsafeBeIndustryComparison
     */
    public function setActivity_description($activity_description = null)
    {
        // validation for constraint: string
        if (!is_null($activity_description) && !is_string($activity_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($activity_description)), __LINE__);
        }
        $this->activity_description = $activity_description;
        return $this;
    }
    /**
     * Get industry_average_payment_expectation_days value
     * @return float|null
     */
    public function getIndustry_average_payment_expectation_days()
    {
        return $this->industry_average_payment_expectation_days;
    }
    /**
     * Set industry_average_payment_expectation_days value
     * @param float $industry_average_payment_expectation_days
     * @return \Webservices\StructType\CreditsafeBeIndustryComparison
     */
    public function setIndustry_average_payment_expectation_days($industry_average_payment_expectation_days = null)
    {
        $this->industry_average_payment_expectation_days = $industry_average_payment_expectation_days;
        return $this;
    }
    /**
     * Get industry_average_day_sales_outstanding value
     * @return float|null
     */
    public function getIndustry_average_day_sales_outstanding()
    {
        return $this->industry_average_day_sales_outstanding;
    }
    /**
     * Set industry_average_day_sales_outstanding value
     * @param float $industry_average_day_sales_outstanding
     * @return \Webservices\StructType\CreditsafeBeIndustryComparison
     */
    public function setIndustry_average_day_sales_outstanding($industry_average_day_sales_outstanding = null)
    {
        $this->industry_average_day_sales_outstanding = $industry_average_day_sales_outstanding;
        return $this;
    }
    /**
     * Get industry_average_credit_rating value
     * @return float|null
     */
    public function getIndustry_average_credit_rating()
    {
        return $this->industry_average_credit_rating;
    }
    /**
     * Set industry_average_credit_rating value
     * @param float $industry_average_credit_rating
     * @return \Webservices\StructType\CreditsafeBeIndustryComparison
     */
    public function setIndustry_average_credit_rating($industry_average_credit_rating = null)
    {
        $this->industry_average_credit_rating = $industry_average_credit_rating;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeIndustryComparison
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
