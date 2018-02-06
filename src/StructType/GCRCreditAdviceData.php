<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCreditAdviceData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCreditAdviceData extends AbstractStructBase
{
    /**
     * The including_personal_judgement
     * @var bool
     */
    public $including_personal_judgement;
    /**
     * The credit_advice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRCreditAdvice
     */
    public $credit_advice;
    /**
     * The credit_advice_mother
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRCreditAdviceMother
     */
    public $credit_advice_mother;
    /**
     * The credit_rating
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRCreditRating
     */
    public $credit_rating;
    /**
     * Constructor method for GCRCreditAdviceData
     * @uses GCRCreditAdviceData::setIncluding_personal_judgement()
     * @uses GCRCreditAdviceData::setCredit_advice()
     * @uses GCRCreditAdviceData::setCredit_advice_mother()
     * @uses GCRCreditAdviceData::setCredit_rating()
     * @param bool $including_personal_judgement
     * @param \Webservices\StructType\GCRCreditAdvice $credit_advice
     * @param \Webservices\StructType\GCRCreditAdviceMother $credit_advice_mother
     * @param \Webservices\StructType\GCRCreditRating $credit_rating
     */
    public function __construct($including_personal_judgement = null, \Webservices\StructType\GCRCreditAdvice $credit_advice = null, \Webservices\StructType\GCRCreditAdviceMother $credit_advice_mother = null, \Webservices\StructType\GCRCreditRating $credit_rating = null)
    {
        $this
            ->setIncluding_personal_judgement($including_personal_judgement)
            ->setCredit_advice($credit_advice)
            ->setCredit_advice_mother($credit_advice_mother)
            ->setCredit_rating($credit_rating);
    }
    /**
     * Get including_personal_judgement value
     * @return bool|null
     */
    public function getIncluding_personal_judgement()
    {
        return $this->including_personal_judgement;
    }
    /**
     * Set including_personal_judgement value
     * @param bool $including_personal_judgement
     * @return \Webservices\StructType\GCRCreditAdviceData
     */
    public function setIncluding_personal_judgement($including_personal_judgement = null)
    {
        // validation for constraint: boolean
        if (!is_null($including_personal_judgement) && !is_bool($including_personal_judgement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($including_personal_judgement)), __LINE__);
        }
        $this->including_personal_judgement = $including_personal_judgement;
        return $this;
    }
    /**
     * Get credit_advice value
     * @return \Webservices\StructType\GCRCreditAdvice|null
     */
    public function getCredit_advice()
    {
        return $this->credit_advice;
    }
    /**
     * Set credit_advice value
     * @param \Webservices\StructType\GCRCreditAdvice $credit_advice
     * @return \Webservices\StructType\GCRCreditAdviceData
     */
    public function setCredit_advice(\Webservices\StructType\GCRCreditAdvice $credit_advice = null)
    {
        $this->credit_advice = $credit_advice;
        return $this;
    }
    /**
     * Get credit_advice_mother value
     * @return \Webservices\StructType\GCRCreditAdviceMother|null
     */
    public function getCredit_advice_mother()
    {
        return $this->credit_advice_mother;
    }
    /**
     * Set credit_advice_mother value
     * @param \Webservices\StructType\GCRCreditAdviceMother $credit_advice_mother
     * @return \Webservices\StructType\GCRCreditAdviceData
     */
    public function setCredit_advice_mother(\Webservices\StructType\GCRCreditAdviceMother $credit_advice_mother = null)
    {
        $this->credit_advice_mother = $credit_advice_mother;
        return $this;
    }
    /**
     * Get credit_rating value
     * @return \Webservices\StructType\GCRCreditRating|null
     */
    public function getCredit_rating()
    {
        return $this->credit_rating;
    }
    /**
     * Set credit_rating value
     * @param \Webservices\StructType\GCRCreditRating $credit_rating
     * @return \Webservices\StructType\GCRCreditAdviceData
     */
    public function setCredit_rating(\Webservices\StructType\GCRCreditRating $credit_rating = null)
    {
        $this->credit_rating = $credit_rating;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCreditAdviceData
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
