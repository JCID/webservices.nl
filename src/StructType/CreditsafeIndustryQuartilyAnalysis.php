<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeIndustryQuartilyAnalysis StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeIndustryQuartilyAnalysis extends AbstractStructBase
{
    /**
     * The payment_expectation_days
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeQuartiles
     */
    public $payment_expectation_days;
    /**
     * The day_sales_outstanding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeQuartiles
     */
    public $day_sales_outstanding;
    /**
     * Constructor method for CreditsafeIndustryQuartilyAnalysis
     * @uses CreditsafeIndustryQuartilyAnalysis::setPayment_expectation_days()
     * @uses CreditsafeIndustryQuartilyAnalysis::setDay_sales_outstanding()
     * @param \Webservices\StructType\CreditsafeQuartiles $payment_expectation_days
     * @param \Webservices\StructType\CreditsafeQuartiles $day_sales_outstanding
     */
    public function __construct(\Webservices\StructType\CreditsafeQuartiles $payment_expectation_days = null, \Webservices\StructType\CreditsafeQuartiles $day_sales_outstanding = null)
    {
        $this
            ->setPayment_expectation_days($payment_expectation_days)
            ->setDay_sales_outstanding($day_sales_outstanding);
    }
    /**
     * Get payment_expectation_days value
     * @return \Webservices\StructType\CreditsafeQuartiles|null
     */
    public function getPayment_expectation_days()
    {
        return $this->payment_expectation_days;
    }
    /**
     * Set payment_expectation_days value
     * @param \Webservices\StructType\CreditsafeQuartiles $payment_expectation_days
     * @return \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis
     */
    public function setPayment_expectation_days(\Webservices\StructType\CreditsafeQuartiles $payment_expectation_days = null)
    {
        $this->payment_expectation_days = $payment_expectation_days;
        return $this;
    }
    /**
     * Get day_sales_outstanding value
     * @return \Webservices\StructType\CreditsafeQuartiles|null
     */
    public function getDay_sales_outstanding()
    {
        return $this->day_sales_outstanding;
    }
    /**
     * Set day_sales_outstanding value
     * @param \Webservices\StructType\CreditsafeQuartiles $day_sales_outstanding
     * @return \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis
     */
    public function setDay_sales_outstanding(\Webservices\StructType\CreditsafeQuartiles $day_sales_outstanding = null)
    {
        $this->day_sales_outstanding = $day_sales_outstanding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis
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
