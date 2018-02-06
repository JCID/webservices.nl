<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessMoneyV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessMoneyV2 extends AbstractStructBase
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The formatted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $formatted;
    /**
     * Constructor method for DutchBusinessMoneyV2
     * @uses DutchBusinessMoneyV2::setAmount()
     * @uses DutchBusinessMoneyV2::setCurrency()
     * @uses DutchBusinessMoneyV2::setFormatted()
     * @param int $amount
     * @param string $currency
     * @param string $formatted
     */
    public function __construct($amount = null, $currency = null, $formatted = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setFormatted($formatted);
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Webservices\StructType\DutchBusinessMoneyV2
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Webservices\StructType\DutchBusinessMoneyV2
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get formatted value
     * @return string|null
     */
    public function getFormatted()
    {
        return $this->formatted;
    }
    /**
     * Set formatted value
     * @param string $formatted
     * @return \Webservices\StructType\DutchBusinessMoneyV2
     */
    public function setFormatted($formatted = null)
    {
        // validation for constraint: string
        if (!is_null($formatted) && !is_string($formatted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formatted)), __LINE__);
        }
        $this->formatted = $formatted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessMoneyV2
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
