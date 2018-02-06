<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeAdditionalInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeAdditionalInformation extends AbstractStructBase
{
    /**
     * The negative_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeBeNegativeInformation
     */
    public $negative_information;
    /**
     * The misc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeBeMisc
     */
    public $misc;
    /**
     * The industry_quartile_analysis
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis
     */
    public $industry_quartile_analysis;
    /**
     * The payment_expectations_summary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeBePaymentExpectationsSummary
     */
    public $payment_expectations_summary;
    /**
     * The industry_comparison
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeBeIndustryComparison
     */
    public $industry_comparison;
    /**
     * The registered_contractors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeBeRegisteredContractorArray
     */
    public $registered_contractors;
    /**
     * The events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeBeEventArray
     */
    public $events;
    /**
     * Constructor method for CreditsafeBeAdditionalInformation
     * @uses CreditsafeBeAdditionalInformation::setNegative_information()
     * @uses CreditsafeBeAdditionalInformation::setMisc()
     * @uses CreditsafeBeAdditionalInformation::setIndustry_quartile_analysis()
     * @uses CreditsafeBeAdditionalInformation::setPayment_expectations_summary()
     * @uses CreditsafeBeAdditionalInformation::setIndustry_comparison()
     * @uses CreditsafeBeAdditionalInformation::setRegistered_contractors()
     * @uses CreditsafeBeAdditionalInformation::setEvents()
     * @param \Webservices\StructType\CreditsafeBeNegativeInformation $negative_information
     * @param \Webservices\StructType\CreditsafeBeMisc $misc
     * @param \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis $industry_quartile_analysis
     * @param \Webservices\StructType\CreditsafeBePaymentExpectationsSummary $payment_expectations_summary
     * @param \Webservices\StructType\CreditsafeBeIndustryComparison $industry_comparison
     * @param \Webservices\ArrayType\CreditsafeBeRegisteredContractorArray $registered_contractors
     * @param \Webservices\ArrayType\CreditsafeBeEventArray $events
     */
    public function __construct(\Webservices\StructType\CreditsafeBeNegativeInformation $negative_information = null, \Webservices\StructType\CreditsafeBeMisc $misc = null, \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis $industry_quartile_analysis = null, \Webservices\StructType\CreditsafeBePaymentExpectationsSummary $payment_expectations_summary = null, \Webservices\StructType\CreditsafeBeIndustryComparison $industry_comparison = null, \Webservices\ArrayType\CreditsafeBeRegisteredContractorArray $registered_contractors = null, \Webservices\ArrayType\CreditsafeBeEventArray $events = null)
    {
        $this
            ->setNegative_information($negative_information)
            ->setMisc($misc)
            ->setIndustry_quartile_analysis($industry_quartile_analysis)
            ->setPayment_expectations_summary($payment_expectations_summary)
            ->setIndustry_comparison($industry_comparison)
            ->setRegistered_contractors($registered_contractors)
            ->setEvents($events);
    }
    /**
     * Get negative_information value
     * @return \Webservices\StructType\CreditsafeBeNegativeInformation|null
     */
    public function getNegative_information()
    {
        return $this->negative_information;
    }
    /**
     * Set negative_information value
     * @param \Webservices\StructType\CreditsafeBeNegativeInformation $negative_information
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public function setNegative_information(\Webservices\StructType\CreditsafeBeNegativeInformation $negative_information = null)
    {
        $this->negative_information = $negative_information;
        return $this;
    }
    /**
     * Get misc value
     * @return \Webservices\StructType\CreditsafeBeMisc|null
     */
    public function getMisc()
    {
        return $this->misc;
    }
    /**
     * Set misc value
     * @param \Webservices\StructType\CreditsafeBeMisc $misc
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public function setMisc(\Webservices\StructType\CreditsafeBeMisc $misc = null)
    {
        $this->misc = $misc;
        return $this;
    }
    /**
     * Get industry_quartile_analysis value
     * @return \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis|null
     */
    public function getIndustry_quartile_analysis()
    {
        return $this->industry_quartile_analysis;
    }
    /**
     * Set industry_quartile_analysis value
     * @param \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis $industry_quartile_analysis
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public function setIndustry_quartile_analysis(\Webservices\StructType\CreditsafeIndustryQuartilyAnalysis $industry_quartile_analysis = null)
    {
        $this->industry_quartile_analysis = $industry_quartile_analysis;
        return $this;
    }
    /**
     * Get payment_expectations_summary value
     * @return \Webservices\StructType\CreditsafeBePaymentExpectationsSummary|null
     */
    public function getPayment_expectations_summary()
    {
        return $this->payment_expectations_summary;
    }
    /**
     * Set payment_expectations_summary value
     * @param \Webservices\StructType\CreditsafeBePaymentExpectationsSummary $payment_expectations_summary
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public function setPayment_expectations_summary(\Webservices\StructType\CreditsafeBePaymentExpectationsSummary $payment_expectations_summary = null)
    {
        $this->payment_expectations_summary = $payment_expectations_summary;
        return $this;
    }
    /**
     * Get industry_comparison value
     * @return \Webservices\StructType\CreditsafeBeIndustryComparison|null
     */
    public function getIndustry_comparison()
    {
        return $this->industry_comparison;
    }
    /**
     * Set industry_comparison value
     * @param \Webservices\StructType\CreditsafeBeIndustryComparison $industry_comparison
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public function setIndustry_comparison(\Webservices\StructType\CreditsafeBeIndustryComparison $industry_comparison = null)
    {
        $this->industry_comparison = $industry_comparison;
        return $this;
    }
    /**
     * Get registered_contractors value
     * @return \Webservices\ArrayType\CreditsafeBeRegisteredContractorArray|null
     */
    public function getRegistered_contractors()
    {
        return $this->registered_contractors;
    }
    /**
     * Set registered_contractors value
     * @param \Webservices\ArrayType\CreditsafeBeRegisteredContractorArray $registered_contractors
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public function setRegistered_contractors(\Webservices\ArrayType\CreditsafeBeRegisteredContractorArray $registered_contractors = null)
    {
        $this->registered_contractors = $registered_contractors;
        return $this;
    }
    /**
     * Get events value
     * @return \Webservices\ArrayType\CreditsafeBeEventArray|null
     */
    public function getEvents()
    {
        return $this->events;
    }
    /**
     * Set events value
     * @param \Webservices\ArrayType\CreditsafeBeEventArray $events
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public function setEvents(\Webservices\ArrayType\CreditsafeBeEventArray $events = null)
    {
        $this->events = $events;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation
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
