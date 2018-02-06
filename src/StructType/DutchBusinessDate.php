<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessDate StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessDate extends AbstractStructBase
{
    /**
     * The Year
     * @var int
     */
    public $Year;
    /**
     * The Month
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Month;
    /**
     * The Day
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Day;
    /**
     * Constructor method for DutchBusinessDate
     * @uses DutchBusinessDate::setYear()
     * @uses DutchBusinessDate::setMonth()
     * @uses DutchBusinessDate::setDay()
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
     * Get Year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param int $year
     * @return \Webservices\StructType\DutchBusinessDate
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !is_numeric($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year)), __LINE__);
        }
        $this->Year = $year;
        return $this;
    }
    /**
     * Get Month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \Webservices\StructType\DutchBusinessDate
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !is_numeric($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month)), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
    /**
     * Get Day value
     * @return int|null
     */
    public function getDay()
    {
        return $this->Day;
    }
    /**
     * Set Day value
     * @param int $day
     * @return \Webservices\StructType\DutchBusinessDate
     */
    public function setDay($day = null)
    {
        // validation for constraint: int
        if (!is_null($day) && !is_numeric($day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($day)), __LINE__);
        }
        $this->Day = $day;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessDate
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
