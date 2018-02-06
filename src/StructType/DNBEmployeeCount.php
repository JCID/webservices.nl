<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBEmployeeCount StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBEmployeeCount extends AbstractStructBase
{
    /**
     * The employees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $employees;
    /**
     * The employees_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $employees_text;
    /**
     * The estimated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $estimated;
    /**
     * The subsidiaries_included
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $subsidiaries_included;
    /**
     * The qualification_indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $qualification_indicator;
    /**
     * Constructor method for DNBEmployeeCount
     * @uses DNBEmployeeCount::setEmployees()
     * @uses DNBEmployeeCount::setEmployees_text()
     * @uses DNBEmployeeCount::setEstimated()
     * @uses DNBEmployeeCount::setSubsidiaries_included()
     * @uses DNBEmployeeCount::setQualification_indicator()
     * @param int $employees
     * @param string $employees_text
     * @param bool $estimated
     * @param bool $subsidiaries_included
     * @param string $qualification_indicator
     */
    public function __construct($employees = null, $employees_text = null, $estimated = null, $subsidiaries_included = null, $qualification_indicator = null)
    {
        $this
            ->setEmployees($employees)
            ->setEmployees_text($employees_text)
            ->setEstimated($estimated)
            ->setSubsidiaries_included($subsidiaries_included)
            ->setQualification_indicator($qualification_indicator);
    }
    /**
     * Get employees value
     * @return int|null
     */
    public function getEmployees()
    {
        return $this->employees;
    }
    /**
     * Set employees value
     * @param int $employees
     * @return \Webservices\StructType\DNBEmployeeCount
     */
    public function setEmployees($employees = null)
    {
        // validation for constraint: int
        if (!is_null($employees) && !is_numeric($employees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees)), __LINE__);
        }
        $this->employees = $employees;
        return $this;
    }
    /**
     * Get employees_text value
     * @return string|null
     */
    public function getEmployees_text()
    {
        return $this->employees_text;
    }
    /**
     * Set employees_text value
     * @param string $employees_text
     * @return \Webservices\StructType\DNBEmployeeCount
     */
    public function setEmployees_text($employees_text = null)
    {
        // validation for constraint: string
        if (!is_null($employees_text) && !is_string($employees_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employees_text)), __LINE__);
        }
        $this->employees_text = $employees_text;
        return $this;
    }
    /**
     * Get estimated value
     * @return bool|null
     */
    public function getEstimated()
    {
        return $this->estimated;
    }
    /**
     * Set estimated value
     * @param bool $estimated
     * @return \Webservices\StructType\DNBEmployeeCount
     */
    public function setEstimated($estimated = null)
    {
        // validation for constraint: boolean
        if (!is_null($estimated) && !is_bool($estimated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($estimated)), __LINE__);
        }
        $this->estimated = $estimated;
        return $this;
    }
    /**
     * Get subsidiaries_included value
     * @return bool|null
     */
    public function getSubsidiaries_included()
    {
        return $this->subsidiaries_included;
    }
    /**
     * Set subsidiaries_included value
     * @param bool $subsidiaries_included
     * @return \Webservices\StructType\DNBEmployeeCount
     */
    public function setSubsidiaries_included($subsidiaries_included = null)
    {
        // validation for constraint: boolean
        if (!is_null($subsidiaries_included) && !is_bool($subsidiaries_included)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($subsidiaries_included)), __LINE__);
        }
        $this->subsidiaries_included = $subsidiaries_included;
        return $this;
    }
    /**
     * Get qualification_indicator value
     * @return string|null
     */
    public function getQualification_indicator()
    {
        return $this->qualification_indicator;
    }
    /**
     * Set qualification_indicator value
     * @param string $qualification_indicator
     * @return \Webservices\StructType\DNBEmployeeCount
     */
    public function setQualification_indicator($qualification_indicator = null)
    {
        // validation for constraint: string
        if (!is_null($qualification_indicator) && !is_string($qualification_indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qualification_indicator)), __LINE__);
        }
        $this->qualification_indicator = $qualification_indicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBEmployeeCount
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
