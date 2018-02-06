<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessSearchSelectionRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSearchSelectionRequestType extends AbstractStructBase
{
    /**
     * The city
     * @var \Webservices\ArrayType\StringArray
     */
    public $city;
    /**
     * The postcode
     * @var \Webservices\ArrayType\StringArray
     */
    public $postcode;
    /**
     * The sbi
     * @var \Webservices\ArrayType\StringArray
     */
    public $sbi;
    /**
     * The primary_sbi_only
     * @var bool
     */
    public $primary_sbi_only;
    /**
     * The legal_forms
     * @var \Webservices\ArrayType\IntArray
     */
    public $legal_forms;
    /**
     * The employees_min
     * @var int
     */
    public $employees_min;
    /**
     * The employees_max
     * @var int
     */
    public $employees_max;
    /**
     * The economically_active
     * @var string
     */
    public $economically_active;
    /**
     * The financial_status
     * @var string
     */
    public $financial_status;
    /**
     * The changed_since
     * @var string
     */
    public $changed_since;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for businessSearchSelectionRequestType
     * @uses BusinessSearchSelectionRequestType::setCity()
     * @uses BusinessSearchSelectionRequestType::setPostcode()
     * @uses BusinessSearchSelectionRequestType::setSbi()
     * @uses BusinessSearchSelectionRequestType::setPrimary_sbi_only()
     * @uses BusinessSearchSelectionRequestType::setLegal_forms()
     * @uses BusinessSearchSelectionRequestType::setEmployees_min()
     * @uses BusinessSearchSelectionRequestType::setEmployees_max()
     * @uses BusinessSearchSelectionRequestType::setEconomically_active()
     * @uses BusinessSearchSelectionRequestType::setFinancial_status()
     * @uses BusinessSearchSelectionRequestType::setChanged_since()
     * @uses BusinessSearchSelectionRequestType::setPage()
     * @param \Webservices\ArrayType\StringArray $city
     * @param \Webservices\ArrayType\StringArray $postcode
     * @param \Webservices\ArrayType\StringArray $sbi
     * @param bool $primary_sbi_only
     * @param \Webservices\ArrayType\IntArray $legal_forms
     * @param int $employees_min
     * @param int $employees_max
     * @param string $economically_active
     * @param string $financial_status
     * @param string $changed_since
     * @param int $page
     */
    public function __construct(\Webservices\ArrayType\StringArray $city = null, \Webservices\ArrayType\StringArray $postcode = null, \Webservices\ArrayType\StringArray $sbi = null, $primary_sbi_only = null, \Webservices\ArrayType\IntArray $legal_forms = null, $employees_min = null, $employees_max = null, $economically_active = null, $financial_status = null, $changed_since = null, $page = null)
    {
        $this
            ->setCity($city)
            ->setPostcode($postcode)
            ->setSbi($sbi)
            ->setPrimary_sbi_only($primary_sbi_only)
            ->setLegal_forms($legal_forms)
            ->setEmployees_min($employees_min)
            ->setEmployees_max($employees_max)
            ->setEconomically_active($economically_active)
            ->setFinancial_status($financial_status)
            ->setChanged_since($changed_since)
            ->setPage($page);
    }
    /**
     * Get city value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param \Webservices\ArrayType\StringArray $city
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setCity(\Webservices\ArrayType\StringArray $city = null)
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Get postcode value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param \Webservices\ArrayType\StringArray $postcode
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setPostcode(\Webservices\ArrayType\StringArray $postcode = null)
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get sbi value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getSbi()
    {
        return $this->sbi;
    }
    /**
     * Set sbi value
     * @param \Webservices\ArrayType\StringArray $sbi
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setSbi(\Webservices\ArrayType\StringArray $sbi = null)
    {
        $this->sbi = $sbi;
        return $this;
    }
    /**
     * Get primary_sbi_only value
     * @return bool|null
     */
    public function getPrimary_sbi_only()
    {
        return $this->primary_sbi_only;
    }
    /**
     * Set primary_sbi_only value
     * @param bool $primary_sbi_only
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setPrimary_sbi_only($primary_sbi_only = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary_sbi_only) && !is_bool($primary_sbi_only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primary_sbi_only)), __LINE__);
        }
        $this->primary_sbi_only = $primary_sbi_only;
        return $this;
    }
    /**
     * Get legal_forms value
     * @return \Webservices\ArrayType\IntArray|null
     */
    public function getLegal_forms()
    {
        return $this->legal_forms;
    }
    /**
     * Set legal_forms value
     * @param \Webservices\ArrayType\IntArray $legal_forms
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setLegal_forms(\Webservices\ArrayType\IntArray $legal_forms = null)
    {
        $this->legal_forms = $legal_forms;
        return $this;
    }
    /**
     * Get employees_min value
     * @return int|null
     */
    public function getEmployees_min()
    {
        return $this->employees_min;
    }
    /**
     * Set employees_min value
     * @param int $employees_min
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setEmployees_min($employees_min = null)
    {
        // validation for constraint: int
        if (!is_null($employees_min) && !is_numeric($employees_min)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees_min)), __LINE__);
        }
        $this->employees_min = $employees_min;
        return $this;
    }
    /**
     * Get employees_max value
     * @return int|null
     */
    public function getEmployees_max()
    {
        return $this->employees_max;
    }
    /**
     * Set employees_max value
     * @param int $employees_max
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setEmployees_max($employees_max = null)
    {
        // validation for constraint: int
        if (!is_null($employees_max) && !is_numeric($employees_max)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees_max)), __LINE__);
        }
        $this->employees_max = $employees_max;
        return $this;
    }
    /**
     * Get economically_active value
     * @return string|null
     */
    public function getEconomically_active()
    {
        return $this->economically_active;
    }
    /**
     * Set economically_active value
     * @param string $economically_active
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setEconomically_active($economically_active = null)
    {
        // validation for constraint: string
        if (!is_null($economically_active) && !is_string($economically_active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($economically_active)), __LINE__);
        }
        $this->economically_active = $economically_active;
        return $this;
    }
    /**
     * Get financial_status value
     * @return string|null
     */
    public function getFinancial_status()
    {
        return $this->financial_status;
    }
    /**
     * Set financial_status value
     * @param string $financial_status
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setFinancial_status($financial_status = null)
    {
        // validation for constraint: string
        if (!is_null($financial_status) && !is_string($financial_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($financial_status)), __LINE__);
        }
        $this->financial_status = $financial_status;
        return $this;
    }
    /**
     * Get changed_since value
     * @return string|null
     */
    public function getChanged_since()
    {
        return $this->changed_since;
    }
    /**
     * Set changed_since value
     * @param string $changed_since
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setChanged_since($changed_since = null)
    {
        // validation for constraint: string
        if (!is_null($changed_since) && !is_string($changed_since)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($changed_since)), __LINE__);
        }
        $this->changed_since = $changed_since;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessSearchSelectionRequestType
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
