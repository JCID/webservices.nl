<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlPaymentExpectationsSummary StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlPaymentExpectationsSummary extends AbstractStructBase
{
    /**
     * The suspension_of_payments_mora
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $suspension_of_payments_mora;
    /**
     * The payment_expectation_days
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $payment_expectation_days;
    /**
     * The day_sales_outstanding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $day_sales_outstanding;
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
     * Constructor method for CreditsafeNlPaymentExpectationsSummary
     * @uses CreditsafeNlPaymentExpectationsSummary::setSuspension_of_payments_mora()
     * @uses CreditsafeNlPaymentExpectationsSummary::setPayment_expectation_days()
     * @uses CreditsafeNlPaymentExpectationsSummary::setDay_sales_outstanding()
     * @uses CreditsafeNlPaymentExpectationsSummary::setIndustry_average_payment_expectation_days()
     * @uses CreditsafeNlPaymentExpectationsSummary::setIndustry_average_day_sales_outstanding()
     * @param bool $suspension_of_payments_mora
     * @param float $payment_expectation_days
     * @param float $day_sales_outstanding
     * @param float $industry_average_payment_expectation_days
     * @param float $industry_average_day_sales_outstanding
     */
    public function __construct($suspension_of_payments_mora = null, $payment_expectation_days = null, $day_sales_outstanding = null, $industry_average_payment_expectation_days = null, $industry_average_day_sales_outstanding = null)
    {
        $this
            ->setSuspension_of_payments_mora($suspension_of_payments_mora)
            ->setPayment_expectation_days($payment_expectation_days)
            ->setDay_sales_outstanding($day_sales_outstanding)
            ->setIndustry_average_payment_expectation_days($industry_average_payment_expectation_days)
            ->setIndustry_average_day_sales_outstanding($industry_average_day_sales_outstanding);
    }
    /**
     * Get suspension_of_payments_mora value
     * @return bool|null
     */
    public function getSuspension_of_payments_mora()
    {
        return $this->suspension_of_payments_mora;
    }
    /**
     * Set suspension_of_payments_mora value
     * @param bool $suspension_of_payments_mora
     * @return \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary
     */
    public function setSuspension_of_payments_mora($suspension_of_payments_mora = null)
    {
        // validation for constraint: boolean
        if (!is_null($suspension_of_payments_mora) && !is_bool($suspension_of_payments_mora)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suspension_of_payments_mora)), __LINE__);
        }
        $this->suspension_of_payments_mora = $suspension_of_payments_mora;
        return $this;
    }
    /**
     * Get payment_expectation_days value
     * @return float|null
     */
    public function getPayment_expectation_days()
    {
        return $this->payment_expectation_days;
    }
    /**
     * Set payment_expectation_days value
     * @param float $payment_expectation_days
     * @return \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary
     */
    public function setPayment_expectation_days($payment_expectation_days = null)
    {
        $this->payment_expectation_days = $payment_expectation_days;
        return $this;
    }
    /**
     * Get day_sales_outstanding value
     * @return float|null
     */
    public function getDay_sales_outstanding()
    {
        return $this->day_sales_outstanding;
    }
    /**
     * Set day_sales_outstanding value
     * @param float $day_sales_outstanding
     * @return \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary
     */
    public function setDay_sales_outstanding($day_sales_outstanding = null)
    {
        $this->day_sales_outstanding = $day_sales_outstanding;
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
     * @return \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary
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
     * @return \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary
     */
    public function setIndustry_average_day_sales_outstanding($industry_average_day_sales_outstanding = null)
    {
        $this->industry_average_day_sales_outstanding = $industry_average_day_sales_outstanding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary
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
