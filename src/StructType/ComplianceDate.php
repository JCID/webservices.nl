<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceDate StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceDate extends AbstractStructBase
{
    /**
     * The year
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $year;
    /**
     * The month
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $month;
    /**
     * The day
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $day;
    /**
     * Constructor method for ComplianceDate
     * @uses ComplianceDate::setYear()
     * @uses ComplianceDate::setMonth()
     * @uses ComplianceDate::setDay()
     * @param int $year
     * @param int $month
     * @param int $day
     */
    public function __construct($year = null, $month = null, $day = null)
    {
        $this
            ->setYear($year)
            ->setMonth($month)
            ->setDay($day);
    }
    /**
     * Get year value
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Webservices\StructType\ComplianceDate
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
     * Get month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \Webservices\StructType\ComplianceDate
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !is_numeric($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month)), __LINE__);
        }
        $this->month = $month;
        return $this;
    }
    /**
     * Get day value
     * @return int|null
     */
    public function getDay()
    {
        return $this->day;
    }
    /**
     * Set day value
     * @param int $day
     * @return \Webservices\StructType\ComplianceDate
     */
    public function setDay($day = null)
    {
        // validation for constraint: int
        if (!is_null($day) && !is_numeric($day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($day)), __LINE__);
        }
        $this->day = $day;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceDate
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
