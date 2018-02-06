<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlAdditionalInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlAdditionalInformation extends AbstractStructBase
{
    /**
     * The negative_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeNlNegativeInformation
     */
    public $negative_information;
    /**
     * The misc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeNlMisc
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
     * @var \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary
     */
    public $payment_expectations_summary;
    /**
     * The letters_of_liability_information_403
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
     */
    public $letters_of_liability_information_403;
    /**
     * Constructor method for CreditsafeNlAdditionalInformation
     * @uses CreditsafeNlAdditionalInformation::setNegative_information()
     * @uses CreditsafeNlAdditionalInformation::setMisc()
     * @uses CreditsafeNlAdditionalInformation::setIndustry_quartile_analysis()
     * @uses CreditsafeNlAdditionalInformation::setPayment_expectations_summary()
     * @uses CreditsafeNlAdditionalInformation::setLetters_of_liability_information_403()
     * @param \Webservices\StructType\CreditsafeNlNegativeInformation $negative_information
     * @param \Webservices\StructType\CreditsafeNlMisc $misc
     * @param \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis $industry_quartile_analysis
     * @param \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary $payment_expectations_summary
     * @param \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403 $letters_of_liability_information_403
     */
    public function __construct(\Webservices\StructType\CreditsafeNlNegativeInformation $negative_information = null, \Webservices\StructType\CreditsafeNlMisc $misc = null, \Webservices\StructType\CreditsafeIndustryQuartilyAnalysis $industry_quartile_analysis = null, \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary $payment_expectations_summary = null, \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403 $letters_of_liability_information_403 = null)
    {
        $this
            ->setNegative_information($negative_information)
            ->setMisc($misc)
            ->setIndustry_quartile_analysis($industry_quartile_analysis)
            ->setPayment_expectations_summary($payment_expectations_summary)
            ->setLetters_of_liability_information_403($letters_of_liability_information_403);
    }
    /**
     * Get negative_information value
     * @return \Webservices\StructType\CreditsafeNlNegativeInformation|null
     */
    public function getNegative_information()
    {
        return $this->negative_information;
    }
    /**
     * Set negative_information value
     * @param \Webservices\StructType\CreditsafeNlNegativeInformation $negative_information
     * @return \Webservices\StructType\CreditsafeNlAdditionalInformation
     */
    public function setNegative_information(\Webservices\StructType\CreditsafeNlNegativeInformation $negative_information = null)
    {
        $this->negative_information = $negative_information;
        return $this;
    }
    /**
     * Get misc value
     * @return \Webservices\StructType\CreditsafeNlMisc|null
     */
    public function getMisc()
    {
        return $this->misc;
    }
    /**
     * Set misc value
     * @param \Webservices\StructType\CreditsafeNlMisc $misc
     * @return \Webservices\StructType\CreditsafeNlAdditionalInformation
     */
    public function setMisc(\Webservices\StructType\CreditsafeNlMisc $misc = null)
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
     * @return \Webservices\StructType\CreditsafeNlAdditionalInformation
     */
    public function setIndustry_quartile_analysis(\Webservices\StructType\CreditsafeIndustryQuartilyAnalysis $industry_quartile_analysis = null)
    {
        $this->industry_quartile_analysis = $industry_quartile_analysis;
        return $this;
    }
    /**
     * Get payment_expectations_summary value
     * @return \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary|null
     */
    public function getPayment_expectations_summary()
    {
        return $this->payment_expectations_summary;
    }
    /**
     * Set payment_expectations_summary value
     * @param \Webservices\StructType\CreditsafeNlPaymentExpectationsSummary $payment_expectations_summary
     * @return \Webservices\StructType\CreditsafeNlAdditionalInformation
     */
    public function setPayment_expectations_summary(\Webservices\StructType\CreditsafeNlPaymentExpectationsSummary $payment_expectations_summary = null)
    {
        $this->payment_expectations_summary = $payment_expectations_summary;
        return $this;
    }
    /**
     * Get letters_of_liability_information value
     * @return letters_of_liability_information
     */
    public function getLetters_of_liability_information_403()
    {
        return $this->letters_of_liability_information_403;
    }
    /**
     * Set letters_of_liability_information value
     * @param letters_of_liability_information $letters_of_liability_information
     * @return \Webservices\StructType\CreditsafeNlAdditionalInformation
     */
    public function setLetters_of_liability_information_403(\Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403 $letters_of_liability_information_403 = null)
    {
        $this->letters_of_liability_information_403 = $letters_of_liability_information_403;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlAdditionalInformation
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
