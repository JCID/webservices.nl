<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRReceiver StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRReceiver extends AbstractStructBase
{
    /**
     * The graydon_person_id
     * @var int
     */
    public $graydon_person_id;
    /**
     * The date_when_active_in_job_title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_when_active_in_job_title;
    /**
     * Constructor method for GCRReceiver
     * @uses GCRReceiver::setGraydon_person_id()
     * @uses GCRReceiver::setDate_when_active_in_job_title()
     * @param int $graydon_person_id
     * @param string $date_when_active_in_job_title
     */
    public function __construct($graydon_person_id = null, $date_when_active_in_job_title = null)
    {
        $this
            ->setGraydon_person_id($graydon_person_id)
            ->setDate_when_active_in_job_title($date_when_active_in_job_title);
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
     * @return \Webservices\StructType\GCRReceiver
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
     * Get date_when_active_in_job_title value
     * @return string|null
     */
    public function getDate_when_active_in_job_title()
    {
        return $this->date_when_active_in_job_title;
    }
    /**
     * Set date_when_active_in_job_title value
     * @param string $date_when_active_in_job_title
     * @return \Webservices\StructType\GCRReceiver
     */
    public function setDate_when_active_in_job_title($date_when_active_in_job_title = null)
    {
        // validation for constraint: string
        if (!is_null($date_when_active_in_job_title) && !is_string($date_when_active_in_job_title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_when_active_in_job_title)), __LINE__);
        }
        $this->date_when_active_in_job_title = $date_when_active_in_job_title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRReceiver
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
