<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRFinancialDetailValue StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRFinancialDetailValue extends AbstractStructBase
{
    /**
     * The financial_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $financial_code;
    /**
     * The financial_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $financial_text;
    /**
     * The year
     * @var int
     */
    public $year;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The amount_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $amount_currency;
    /**
     * The forecast
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $forecast;
    /**
     * Constructor method for GCRFinancialDetailValue
     * @uses GCRFinancialDetailValue::setFinancial_code()
     * @uses GCRFinancialDetailValue::setFinancial_text()
     * @uses GCRFinancialDetailValue::setYear()
     * @uses GCRFinancialDetailValue::setAmount()
     * @uses GCRFinancialDetailValue::setAmount_currency()
     * @uses GCRFinancialDetailValue::setForecast()
     * @param string $financial_code
     * @param string $financial_text
     * @param int $year
     * @param float $amount
     * @param string $amount_currency
     * @param float $forecast
     */
    public function __construct($financial_code = null, $financial_text = null, $year = null, $amount = null, $amount_currency = null, $forecast = null)
    {
        $this
            ->setFinancial_code($financial_code)
            ->setFinancial_text($financial_text)
            ->setYear($year)
            ->setAmount($amount)
            ->setAmount_currency($amount_currency)
            ->setForecast($forecast);
    }
    /**
     * Get financial_code value
     * @return string|null
     */
    public function getFinancial_code()
    {
        return $this->financial_code;
    }
    /**
     * Set financial_code value
     * @param string $financial_code
     * @return \Webservices\StructType\GCRFinancialDetailValue
     */
    public function setFinancial_code($financial_code = null)
    {
        // validation for constraint: string
        if (!is_null($financial_code) && !is_string($financial_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($financial_code)), __LINE__);
        }
        $this->financial_code = $financial_code;
        return $this;
    }
    /**
     * Get financial_text value
     * @return string|null
     */
    public function getFinancial_text()
    {
        return $this->financial_text;
    }
    /**
     * Set financial_text value
     * @param string $financial_text
     * @return \Webservices\StructType\GCRFinancialDetailValue
     */
    public function setFinancial_text($financial_text = null)
    {
        // validation for constraint: string
        if (!is_null($financial_text) && !is_string($financial_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($financial_text)), __LINE__);
        }
        $this->financial_text = $financial_text;
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Webservices\StructType\GCRFinancialDetailValue
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !is_numeric($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year)), __LINE__);
        }
        $this->year = $year;
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Webservices\StructType\GCRFinancialDetailValue
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get amount_currency value
     * @return string|null
     */
    public function getAmount_currency()
    {
        return $this->amount_currency;
    }
    /**
     * Set amount_currency value
     * @param string $amount_currency
     * @return \Webservices\StructType\GCRFinancialDetailValue
     */
    public function setAmount_currency($amount_currency = null)
    {
        // validation for constraint: string
        if (!is_null($amount_currency) && !is_string($amount_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount_currency)), __LINE__);
        }
        $this->amount_currency = $amount_currency;
        return $this;
    }
    /**
     * Get forecast value
     * @return float|null
     */
    public function getForecast()
    {
        return $this->forecast;
    }
    /**
     * Set forecast value
     * @param float $forecast
     * @return \Webservices\StructType\GCRFinancialDetailValue
     */
    public function setForecast($forecast = null)
    {
        $this->forecast = $forecast;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRFinancialDetailValue
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
