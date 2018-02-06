<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRFirstDirector StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRFirstDirector extends AbstractStructBase
{
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
     * The job_title_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $job_title_code;
    /**
     * The job_title_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $job_title_text;
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * The date_until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_until;
    /**
     * Constructor method for GCRFirstDirector
     * @uses GCRFirstDirector::setGraydon_person_id()
     * @uses GCRFirstDirector::setIs_current()
     * @uses GCRFirstDirector::setJob_title_code()
     * @uses GCRFirstDirector::setJob_title_text()
     * @uses GCRFirstDirector::setDate_from()
     * @uses GCRFirstDirector::setDate_until()
     * @param int $graydon_person_id
     * @param bool $is_current
     * @param int $job_title_code
     * @param string $job_title_text
     * @param string $date_from
     * @param string $date_until
     */
    public function __construct($graydon_person_id = null, $is_current = null, $job_title_code = null, $job_title_text = null, $date_from = null, $date_until = null)
    {
        $this
            ->setGraydon_person_id($graydon_person_id)
            ->setIs_current($is_current)
            ->setJob_title_code($job_title_code)
            ->setJob_title_text($job_title_text)
            ->setDate_from($date_from)
            ->setDate_until($date_until);
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
     * @return \Webservices\StructType\GCRFirstDirector
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
     * @return \Webservices\StructType\GCRFirstDirector
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
     * Get job_title_code value
     * @return int|null
     */
    public function getJob_title_code()
    {
        return $this->job_title_code;
    }
    /**
     * Set job_title_code value
     * @param int $job_title_code
     * @return \Webservices\StructType\GCRFirstDirector
     */
    public function setJob_title_code($job_title_code = null)
    {
        // validation for constraint: int
        if (!is_null($job_title_code) && !is_numeric($job_title_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($job_title_code)), __LINE__);
        }
        $this->job_title_code = $job_title_code;
        return $this;
    }
    /**
     * Get job_title_text value
     * @return string|null
     */
    public function getJob_title_text()
    {
        return $this->job_title_text;
    }
    /**
     * Set job_title_text value
     * @param string $job_title_text
     * @return \Webservices\StructType\GCRFirstDirector
     */
    public function setJob_title_text($job_title_text = null)
    {
        // validation for constraint: string
        if (!is_null($job_title_text) && !is_string($job_title_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($job_title_text)), __LINE__);
        }
        $this->job_title_text = $job_title_text;
        return $this;
    }
    /**
     * Get date_from value
     * @return string|null
     */
    public function getDate_from()
    {
        return $this->date_from;
    }
    /**
     * Set date_from value
     * @param string $date_from
     * @return \Webservices\StructType\GCRFirstDirector
     */
    public function setDate_from($date_from = null)
    {
        // validation for constraint: string
        if (!is_null($date_from) && !is_string($date_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_from)), __LINE__);
        }
        $this->date_from = $date_from;
        return $this;
    }
    /**
     * Get date_until value
     * @return string|null
     */
    public function getDate_until()
    {
        return $this->date_until;
    }
    /**
     * Set date_until value
     * @param string $date_until
     * @return \Webservices\StructType\GCRFirstDirector
     */
    public function setDate_until($date_until = null)
    {
        // validation for constraint: string
        if (!is_null($date_until) && !is_string($date_until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_until)), __LINE__);
        }
        $this->date_until = $date_until;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRFirstDirector
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
