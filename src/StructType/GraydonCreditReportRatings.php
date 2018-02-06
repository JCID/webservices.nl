<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportRatings StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportRatings extends AbstractStructBase
{
    /**
     * The credit_advice_amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_advice_amount;
    /**
     * The credit_advice_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_advice_currency;
    /**
     * The credit_advice_factors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCreditFactorArray
     */
    public $credit_advice_factors;
    /**
     * The pd_rating
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pd_rating;
    /**
     * The ratings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRRatingArray
     */
    public $ratings;
    /**
     * The payment_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRPaymentInformationArray
     */
    public $payment_information;
    /**
     * The alarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAlarm
     */
    public $alarm;
    /**
     * Constructor method for GraydonCreditReportRatings
     * @uses GraydonCreditReportRatings::setCredit_advice_amount()
     * @uses GraydonCreditReportRatings::setCredit_advice_currency()
     * @uses GraydonCreditReportRatings::setCredit_advice_factors()
     * @uses GraydonCreditReportRatings::setPd_rating()
     * @uses GraydonCreditReportRatings::setRatings()
     * @uses GraydonCreditReportRatings::setPayment_information()
     * @uses GraydonCreditReportRatings::setAlarm()
     * @param string $credit_advice_amount
     * @param string $credit_advice_currency
     * @param \Webservices\ArrayType\GCRCreditFactorArray $credit_advice_factors
     * @param string $pd_rating
     * @param \Webservices\ArrayType\GCRRatingArray $ratings
     * @param \Webservices\ArrayType\GCRPaymentInformationArray $payment_information
     * @param \Webservices\StructType\GCRAlarm $alarm
     */
    public function __construct($credit_advice_amount = null, $credit_advice_currency = null, \Webservices\ArrayType\GCRCreditFactorArray $credit_advice_factors = null, $pd_rating = null, \Webservices\ArrayType\GCRRatingArray $ratings = null, \Webservices\ArrayType\GCRPaymentInformationArray $payment_information = null, \Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this
            ->setCredit_advice_amount($credit_advice_amount)
            ->setCredit_advice_currency($credit_advice_currency)
            ->setCredit_advice_factors($credit_advice_factors)
            ->setPd_rating($pd_rating)
            ->setRatings($ratings)
            ->setPayment_information($payment_information)
            ->setAlarm($alarm);
    }
    /**
     * Get credit_advice_amount value
     * @return string|null
     */
    public function getCredit_advice_amount()
    {
        return $this->credit_advice_amount;
    }
    /**
     * Set credit_advice_amount value
     * @param string $credit_advice_amount
     * @return \Webservices\StructType\GraydonCreditReportRatings
     */
    public function setCredit_advice_amount($credit_advice_amount = null)
    {
        // validation for constraint: string
        if (!is_null($credit_advice_amount) && !is_string($credit_advice_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_advice_amount)), __LINE__);
        }
        $this->credit_advice_amount = $credit_advice_amount;
        return $this;
    }
    /**
     * Get credit_advice_currency value
     * @return string|null
     */
    public function getCredit_advice_currency()
    {
        return $this->credit_advice_currency;
    }
    /**
     * Set credit_advice_currency value
     * @param string $credit_advice_currency
     * @return \Webservices\StructType\GraydonCreditReportRatings
     */
    public function setCredit_advice_currency($credit_advice_currency = null)
    {
        // validation for constraint: string
        if (!is_null($credit_advice_currency) && !is_string($credit_advice_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_advice_currency)), __LINE__);
        }
        $this->credit_advice_currency = $credit_advice_currency;
        return $this;
    }
    /**
     * Get credit_advice_factors value
     * @return \Webservices\ArrayType\GCRCreditFactorArray|null
     */
    public function getCredit_advice_factors()
    {
        return $this->credit_advice_factors;
    }
    /**
     * Set credit_advice_factors value
     * @param \Webservices\ArrayType\GCRCreditFactorArray $credit_advice_factors
     * @return \Webservices\StructType\GraydonCreditReportRatings
     */
    public function setCredit_advice_factors(\Webservices\ArrayType\GCRCreditFactorArray $credit_advice_factors = null)
    {
        $this->credit_advice_factors = $credit_advice_factors;
        return $this;
    }
    /**
     * Get pd_rating value
     * @return string|null
     */
    public function getPd_rating()
    {
        return $this->pd_rating;
    }
    /**
     * Set pd_rating value
     * @param string $pd_rating
     * @return \Webservices\StructType\GraydonCreditReportRatings
     */
    public function setPd_rating($pd_rating = null)
    {
        // validation for constraint: string
        if (!is_null($pd_rating) && !is_string($pd_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pd_rating)), __LINE__);
        }
        $this->pd_rating = $pd_rating;
        return $this;
    }
    /**
     * Get ratings value
     * @return \Webservices\ArrayType\GCRRatingArray|null
     */
    public function getRatings()
    {
        return $this->ratings;
    }
    /**
     * Set ratings value
     * @param \Webservices\ArrayType\GCRRatingArray $ratings
     * @return \Webservices\StructType\GraydonCreditReportRatings
     */
    public function setRatings(\Webservices\ArrayType\GCRRatingArray $ratings = null)
    {
        $this->ratings = $ratings;
        return $this;
    }
    /**
     * Get payment_information value
     * @return \Webservices\ArrayType\GCRPaymentInformationArray|null
     */
    public function getPayment_information()
    {
        return $this->payment_information;
    }
    /**
     * Set payment_information value
     * @param \Webservices\ArrayType\GCRPaymentInformationArray $payment_information
     * @return \Webservices\StructType\GraydonCreditReportRatings
     */
    public function setPayment_information(\Webservices\ArrayType\GCRPaymentInformationArray $payment_information = null)
    {
        $this->payment_information = $payment_information;
        return $this;
    }
    /**
     * Get alarm value
     * @return \Webservices\StructType\GCRAlarm|null
     */
    public function getAlarm()
    {
        return $this->alarm;
    }
    /**
     * Set alarm value
     * @param \Webservices\StructType\GCRAlarm $alarm
     * @return \Webservices\StructType\GraydonCreditReportRatings
     */
    public function setAlarm(\Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this->alarm = $alarm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditReportRatings
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
