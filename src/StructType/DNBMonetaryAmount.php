<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBMonetaryAmount StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBMonetaryAmount extends AbstractStructBase
{
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $value;
    /**
     * The value_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $value_text;
    /**
     * The estimated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $estimated;
    /**
     * The consolidated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $consolidated;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * Constructor method for DNBMonetaryAmount
     * @uses DNBMonetaryAmount::setValue()
     * @uses DNBMonetaryAmount::setValue_text()
     * @uses DNBMonetaryAmount::setEstimated()
     * @uses DNBMonetaryAmount::setConsolidated()
     * @uses DNBMonetaryAmount::setCurrency()
     * @param int $value
     * @param string $value_text
     * @param int $estimated
     * @param bool $consolidated
     * @param string $currency
     */
    public function __construct($value = null, $value_text = null, $estimated = null, $consolidated = null, $currency = null)
    {
        $this
            ->setValue($value)
            ->setValue_text($value_text)
            ->setEstimated($estimated)
            ->setConsolidated($consolidated)
            ->setCurrency($currency);
    }
    /**
     * Get value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \Webservices\StructType\DNBMonetaryAmount
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !is_numeric($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get value_text value
     * @return string|null
     */
    public function getValue_text()
    {
        return $this->value_text;
    }
    /**
     * Set value_text value
     * @param string $value_text
     * @return \Webservices\StructType\DNBMonetaryAmount
     */
    public function setValue_text($value_text = null)
    {
        // validation for constraint: string
        if (!is_null($value_text) && !is_string($value_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value_text)), __LINE__);
        }
        $this->value_text = $value_text;
        return $this;
    }
    /**
     * Get estimated value
     * @return int|null
     */
    public function getEstimated()
    {
        return $this->estimated;
    }
    /**
     * Set estimated value
     * @param int $estimated
     * @return \Webservices\StructType\DNBMonetaryAmount
     */
    public function setEstimated($estimated = null)
    {
        // validation for constraint: int
        if (!is_null($estimated) && !is_numeric($estimated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($estimated)), __LINE__);
        }
        $this->estimated = $estimated;
        return $this;
    }
    /**
     * Get consolidated value
     * @return bool|null
     */
    public function getConsolidated()
    {
        return $this->consolidated;
    }
    /**
     * Set consolidated value
     * @param bool $consolidated
     * @return \Webservices\StructType\DNBMonetaryAmount
     */
    public function setConsolidated($consolidated = null)
    {
        // validation for constraint: boolean
        if (!is_null($consolidated) && !is_bool($consolidated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($consolidated)), __LINE__);
        }
        $this->consolidated = $consolidated;
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
     * @return \Webservices\StructType\DNBMonetaryAmount
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBMonetaryAmount
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
