<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCreditAdvice StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCreditAdvice extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $graydon_company_id;
    /**
     * The credit_amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_amount;
    /**
     * The credit_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_currency;
    /**
     * The history_advised_limits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRHistoryAdvisedLimitArray
     */
    public $history_advised_limits;
    /**
     * The credit_factors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCreditFactorArray
     */
    public $credit_factors;
    /**
     * Constructor method for GCRCreditAdvice
     * @uses GCRCreditAdvice::setGraydon_company_id()
     * @uses GCRCreditAdvice::setCredit_amount()
     * @uses GCRCreditAdvice::setCredit_currency()
     * @uses GCRCreditAdvice::setHistory_advised_limits()
     * @uses GCRCreditAdvice::setCredit_factors()
     * @param int $graydon_company_id
     * @param string $credit_amount
     * @param string $credit_currency
     * @param \Webservices\ArrayType\GCRHistoryAdvisedLimitArray $history_advised_limits
     * @param \Webservices\ArrayType\GCRCreditFactorArray $credit_factors
     */
    public function __construct($graydon_company_id = null, $credit_amount = null, $credit_currency = null, \Webservices\ArrayType\GCRHistoryAdvisedLimitArray $history_advised_limits = null, \Webservices\ArrayType\GCRCreditFactorArray $credit_factors = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setCredit_amount($credit_amount)
            ->setCredit_currency($credit_currency)
            ->setHistory_advised_limits($history_advised_limits)
            ->setCredit_factors($credit_factors);
    }
    /**
     * Get graydon_company_id value
     * @return int|null
     */
    public function getGraydon_company_id()
    {
        return $this->graydon_company_id;
    }
    /**
     * Set graydon_company_id value
     * @param int $graydon_company_id
     * @return \Webservices\StructType\GCRCreditAdvice
     */
    public function setGraydon_company_id($graydon_company_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_company_id) && !is_numeric($graydon_company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_company_id)), __LINE__);
        }
        $this->graydon_company_id = $graydon_company_id;
        return $this;
    }
    /**
     * Get credit_amount value
     * @return string|null
     */
    public function getCredit_amount()
    {
        return $this->credit_amount;
    }
    /**
     * Set credit_amount value
     * @param string $credit_amount
     * @return \Webservices\StructType\GCRCreditAdvice
     */
    public function setCredit_amount($credit_amount = null)
    {
        // validation for constraint: string
        if (!is_null($credit_amount) && !is_string($credit_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_amount)), __LINE__);
        }
        $this->credit_amount = $credit_amount;
        return $this;
    }
    /**
     * Get credit_currency value
     * @return string|null
     */
    public function getCredit_currency()
    {
        return $this->credit_currency;
    }
    /**
     * Set credit_currency value
     * @param string $credit_currency
     * @return \Webservices\StructType\GCRCreditAdvice
     */
    public function setCredit_currency($credit_currency = null)
    {
        // validation for constraint: string
        if (!is_null($credit_currency) && !is_string($credit_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_currency)), __LINE__);
        }
        $this->credit_currency = $credit_currency;
        return $this;
    }
    /**
     * Get history_advised_limits value
     * @return \Webservices\ArrayType\GCRHistoryAdvisedLimitArray|null
     */
    public function getHistory_advised_limits()
    {
        return $this->history_advised_limits;
    }
    /**
     * Set history_advised_limits value
     * @param \Webservices\ArrayType\GCRHistoryAdvisedLimitArray $history_advised_limits
     * @return \Webservices\StructType\GCRCreditAdvice
     */
    public function setHistory_advised_limits(\Webservices\ArrayType\GCRHistoryAdvisedLimitArray $history_advised_limits = null)
    {
        $this->history_advised_limits = $history_advised_limits;
        return $this;
    }
    /**
     * Get credit_factors value
     * @return \Webservices\ArrayType\GCRCreditFactorArray|null
     */
    public function getCredit_factors()
    {
        return $this->credit_factors;
    }
    /**
     * Set credit_factors value
     * @param \Webservices\ArrayType\GCRCreditFactorArray $credit_factors
     * @return \Webservices\StructType\GCRCreditAdvice
     */
    public function setCredit_factors(\Webservices\ArrayType\GCRCreditFactorArray $credit_factors = null)
    {
        $this->credit_factors = $credit_factors;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCreditAdvice
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
