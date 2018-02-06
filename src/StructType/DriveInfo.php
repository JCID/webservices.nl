<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DriveInfo StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DriveInfo extends AbstractStructBase
{
    /**
     * The fastest
     * @var int
     */
    public $fastest;
    /**
     * The shortest
     * @var int
     */
    public $shortest;
    /**
     * Constructor method for DriveInfo
     * @uses DriveInfo::setFastest()
     * @uses DriveInfo::setShortest()
     * @param int $fastest
     * @param int $shortest
     */
    public function __construct($fastest = null, $shortest = null)
    {
        $this
            ->setFastest($fastest)
            ->setShortest($shortest);
    }
    /**
     * Get fastest value
     * @return int|null
     */
    public function getFastest()
    {
        return $this->fastest;
    }
    /**
     * Set fastest value
     * @param int $fastest
     * @return \Webservices\StructType\DriveInfo
     */
    public function setFastest($fastest = null)
    {
        // validation for constraint: int
        if (!is_null($fastest) && !is_numeric($fastest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fastest)), __LINE__);
        }
        $this->fastest = $fastest;
        return $this;
    }
    /**
     * Get shortest value
     * @return int|null
     */
    public function getShortest()
    {
        return $this->shortest;
    }
    /**
     * Set shortest value
     * @param int $shortest
     * @return \Webservices\StructType\DriveInfo
     */
    public function setShortest($shortest = null)
    {
        // validation for constraint: int
        if (!is_null($shortest) && !is_numeric($shortest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shortest)), __LINE__);
        }
        $this->shortest = $shortest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DriveInfo
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
