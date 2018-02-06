<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRPersonnel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRPersonnel extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $graydon_company_id;
    /**
     * The employees_class_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $employees_class_code;
    /**
     * The employees_class_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $employees_class_text;
    /**
     * The number_of_employees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRNumberOfEmployeesArray
     */
    public $number_of_employees;
    /**
     * Constructor method for GCRPersonnel
     * @uses GCRPersonnel::setGraydon_company_id()
     * @uses GCRPersonnel::setEmployees_class_code()
     * @uses GCRPersonnel::setEmployees_class_text()
     * @uses GCRPersonnel::setNumber_of_employees()
     * @param int $graydon_company_id
     * @param int $employees_class_code
     * @param string $employees_class_text
     * @param \Webservices\ArrayType\GCRNumberOfEmployeesArray $number_of_employees
     */
    public function __construct($graydon_company_id = null, $employees_class_code = null, $employees_class_text = null, \Webservices\ArrayType\GCRNumberOfEmployeesArray $number_of_employees = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setEmployees_class_code($employees_class_code)
            ->setEmployees_class_text($employees_class_text)
            ->setNumber_of_employees($number_of_employees);
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
     * @return \Webservices\StructType\GCRPersonnel
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
     * Get employees_class_code value
     * @return int|null
     */
    public function getEmployees_class_code()
    {
        return $this->employees_class_code;
    }
    /**
     * Set employees_class_code value
     * @param int $employees_class_code
     * @return \Webservices\StructType\GCRPersonnel
     */
    public function setEmployees_class_code($employees_class_code = null)
    {
        // validation for constraint: int
        if (!is_null($employees_class_code) && !is_numeric($employees_class_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees_class_code)), __LINE__);
        }
        $this->employees_class_code = $employees_class_code;
        return $this;
    }
    /**
     * Get employees_class_text value
     * @return string|null
     */
    public function getEmployees_class_text()
    {
        return $this->employees_class_text;
    }
    /**
     * Set employees_class_text value
     * @param string $employees_class_text
     * @return \Webservices\StructType\GCRPersonnel
     */
    public function setEmployees_class_text($employees_class_text = null)
    {
        // validation for constraint: string
        if (!is_null($employees_class_text) && !is_string($employees_class_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employees_class_text)), __LINE__);
        }
        $this->employees_class_text = $employees_class_text;
        return $this;
    }
    /**
     * Get number_of_employees value
     * @return \Webservices\ArrayType\GCRNumberOfEmployeesArray|null
     */
    public function getNumber_of_employees()
    {
        return $this->number_of_employees;
    }
    /**
     * Set number_of_employees value
     * @param \Webservices\ArrayType\GCRNumberOfEmployeesArray $number_of_employees
     * @return \Webservices\StructType\GCRPersonnel
     */
    public function setNumber_of_employees(\Webservices\ArrayType\GCRNumberOfEmployeesArray $number_of_employees = null)
    {
        $this->number_of_employees = $number_of_employees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRPersonnel
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
