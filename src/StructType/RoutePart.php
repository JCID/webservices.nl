<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutePart StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePart extends AbstractStructBase
{
    /**
     * The description
     * @var string
     */
    public $description;
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
     * Constructor method for RoutePart
     * @uses RoutePart::setDescription()
     * @uses RoutePart::setTime()
     * @uses RoutePart::setDistance()
     * @param string $description
     * @param int $time
     * @param int $distance
     */
    public function __construct($description = null, $time = null, $distance = null)
    {
        $this
            ->setDescription($description)
            ->setTime($time)
            ->setDistance($distance);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\RoutePart
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
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
     * @return \Webservices\StructType\RoutePart
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
     * @return \Webservices\StructType\RoutePart
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePart
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
