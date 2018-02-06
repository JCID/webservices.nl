<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCreditAdviceMother StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCreditAdviceMother extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $graydon_company_id;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $amount;
    /**
     * Constructor method for GCRCreditAdviceMother
     * @uses GCRCreditAdviceMother::setGraydon_company_id()
     * @uses GCRCreditAdviceMother::setAmount()
     * @param int $graydon_company_id
     * @param string $amount
     */
    public function __construct($graydon_company_id = null, $amount = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setAmount($amount);
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
     * @return \Webservices\StructType\GCRCreditAdviceMother
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
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Webservices\StructType\GCRCreditAdviceMother
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCreditAdviceMother
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
