<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRManagement StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRManagement extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $graydon_company_id;
    /**
     * The graydon_person_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $graydon_person_id;
    /**
     * The is_current
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_current;
    /**
     * The job_titles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRJobTitleArray
     */
    public $job_titles;
    /**
     * Constructor method for GCRManagement
     * @uses GCRManagement::setGraydon_company_id()
     * @uses GCRManagement::setGraydon_person_id()
     * @uses GCRManagement::setIs_current()
     * @uses GCRManagement::setJob_titles()
     * @param int $graydon_company_id
     * @param int $graydon_person_id
     * @param bool $is_current
     * @param \Webservices\ArrayType\GCRJobTitleArray $job_titles
     */
    public function __construct($graydon_company_id = null, $graydon_person_id = null, $is_current = null, \Webservices\ArrayType\GCRJobTitleArray $job_titles = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setGraydon_person_id($graydon_person_id)
            ->setIs_current($is_current)
            ->setJob_titles($job_titles);
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
     * @return \Webservices\StructType\GCRManagement
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
     * Get graydon_person_id value
     * @return int|null
     */
    public function getGraydon_person_id()
    {
        return $this->graydon_person_id;
    }
    /**
     * Set graydon_person_id value
     * @param int $graydon_person_id
     * @return \Webservices\StructType\GCRManagement
     */
    public function setGraydon_person_id($graydon_person_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_person_id) && !is_numeric($graydon_person_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_person_id)), __LINE__);
        }
        $this->graydon_person_id = $graydon_person_id;
        return $this;
    }
    /**
     * Get is_current value
     * @return bool|null
     */
    public function getIs_current()
    {
        return $this->is_current;
    }
    /**
     * Set is_current value
     * @param bool $is_current
     * @return \Webservices\StructType\GCRManagement
     */
    public function setIs_current($is_current = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_current) && !is_bool($is_current)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_current)), __LINE__);
        }
        $this->is_current = $is_current;
        return $this;
    }
    /**
     * Get job_titles value
     * @return \Webservices\ArrayType\GCRJobTitleArray|null
     */
    public function getJob_titles()
    {
        return $this->job_titles;
    }
    /**
     * Set job_titles value
     * @param \Webservices\ArrayType\GCRJobTitleArray $job_titles
     * @return \Webservices\StructType\GCRManagement
     */
    public function setJob_titles(\Webservices\ArrayType\GCRJobTitleArray $job_titles = null)
    {
        $this->job_titles = $job_titles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRManagement
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
