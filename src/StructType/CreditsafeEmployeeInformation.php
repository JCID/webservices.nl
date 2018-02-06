<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeEmployeeInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeEmployeeInformation extends AbstractStructBase
{
    /**
     * The year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $year;
    /**
     * The number_of_employees
     * @var string
     */
    public $number_of_employees;
    /**
     * Constructor method for CreditsafeEmployeeInformation
     * @uses CreditsafeEmployeeInformation::setYear()
     * @uses CreditsafeEmployeeInformation::setNumber_of_employees()
     * @param int $year
     * @param string $number_of_employees
     */
    public function __construct($year = null, $number_of_employees = null)
    {
        $this
            ->setYear($year)
            ->setNumber_of_employees($number_of_employees);
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
     * @return \Webservices\StructType\CreditsafeEmployeeInformation
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
     * Get number_of_employees value
     * @return string|null
     */
    public function getNumber_of_employees()
    {
        return $this->number_of_employees;
    }
    /**
     * Set number_of_employees value
     * @param string $number_of_employees
     * @return \Webservices\StructType\CreditsafeEmployeeInformation
     */
    public function setNumber_of_employees($number_of_employees = null)
    {
        // validation for constraint: string
        if (!is_null($number_of_employees) && !is_string($number_of_employees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number_of_employees)), __LINE__);
        }
        $this->number_of_employees = $number_of_employees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeEmployeeInformation
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
