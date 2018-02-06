<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for complianceSearchPersonsRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceSearchPersonsRequestType extends AbstractStructBase
{
    /**
     * The first_name
     * @var string
     */
    public $first_name;
    /**
     * The last_name
     * @var string
     */
    public $last_name;
    /**
     * The date_of_birth
     * @var string
     */
    public $date_of_birth;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for complianceSearchPersonsRequestType
     * @uses ComplianceSearchPersonsRequestType::setFirst_name()
     * @uses ComplianceSearchPersonsRequestType::setLast_name()
     * @uses ComplianceSearchPersonsRequestType::setDate_of_birth()
     * @uses ComplianceSearchPersonsRequestType::setPage()
     * @param string $first_name
     * @param string $last_name
     * @param string $date_of_birth
     * @param int $page
     */
    public function __construct($first_name = null, $last_name = null, $date_of_birth = null, $page = null)
    {
        $this
            ->setFirst_name($first_name)
            ->setLast_name($last_name)
            ->setDate_of_birth($date_of_birth)
            ->setPage($page);
    }
    /**
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Webservices\StructType\ComplianceSearchPersonsRequestType
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\ComplianceSearchPersonsRequestType
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Get date_of_birth value
     * @return string|null
     */
    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }
    /**
     * Set date_of_birth value
     * @param string $date_of_birth
     * @return \Webservices\StructType\ComplianceSearchPersonsRequestType
     */
    public function setDate_of_birth($date_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_birth) && !is_string($date_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_birth)), __LINE__);
        }
        $this->date_of_birth = $date_of_birth;
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
     * @return \Webservices\StructType\ComplianceSearchPersonsRequestType
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
     * @return \Webservices\StructType\ComplianceSearchPersonsRequestType
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
