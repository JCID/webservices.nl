<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteSummary StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RouteSummary extends AbstractStructBase
{
    /**
     * The time
     * @var int
     */
    public $time;
    /**
     * The distance
     * @var int
     */
    public $distance;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for RouteSummary
     * @uses RouteSummary::setTime()
     * @uses RouteSummary::setDistance()
     * @uses RouteSummary::setType()
     * @param int $time
     * @param int $distance
     * @param string $type
     */
    public function __construct($time = null, $distance = null, $type = null)
    {
        $this
            ->setTime($time)
            ->setDistance($distance)
            ->setType($type);
    }
    /**
     * Get time value
     * @return int|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param int $time
     * @return \Webservices\StructType\RouteSummary
     */
    public function setTime($time = null)
    {
        // validation for constraint: int
        if (!is_null($time) && !is_numeric($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($time)), __LINE__);
        }
        $this->time = $time;
        return $this;
    }
    /**
     * Get distance value
     * @return int|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param int $distance
     * @return \Webservices\StructType\RouteSummary
     */
    public function setDistance($distance = null)
    {
        // validation for constraint: int
        if (!is_null($distance) && !is_numeric($distance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distance)), __LINE__);
        }
        $this->distance = $distance;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\RouteSummary
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RouteSummary
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
