<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRHistoryAdvisedLimit StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRHistoryAdvisedLimit extends AbstractStructBase
{
    /**
     * The value
     * @var string
     */
    public $value;
    /**
     * The year_month
     * @var int
     */
    public $year_month;
    /**
     * Constructor method for GCRHistoryAdvisedLimit
     * @uses GCRHistoryAdvisedLimit::setValue()
     * @uses GCRHistoryAdvisedLimit::setYear_month()
     * @param string $value
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
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Webservices\StructType\GCRHistoryAdvisedLimit
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
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
     * @return \Webservices\StructType\GCRHistoryAdvisedLimit
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
     * @return \Webservices\StructType\GCRHistoryAdvisedLimit
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
