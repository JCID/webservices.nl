<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRPaymentInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRPaymentInformation extends AbstractStructBase
{
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $value;
    /**
     * The year_month
     * @var int
     */
    public $year_month;
    /**
     * Constructor method for GCRPaymentInformation
     * @uses GCRPaymentInformation::setValue()
     * @uses GCRPaymentInformation::setYear_month()
     * @param float $value
     * @param int $year_month
     */
    public function __construct($value = null, $year_month = null)
    {
        $this
            ->setValue($value)
            ->setYear_month($year_month);
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Webservices\StructType\GCRPaymentInformation
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Get year_month value
     * @return int|null
     */
    public function getYear_month()
    {
        return $this->year_month;
    }
    /**
     * Set year_month value
     * @param int $year_month
     * @return \Webservices\StructType\GCRPaymentInformation
     */
    public function setYear_month($year_month = null)
    {
        // validation for constraint: int
        if (!is_null($year_month) && !is_numeric($year_month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year_month)), __LINE__);
        }
        $this->year_month = $year_month;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRPaymentInformation
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
