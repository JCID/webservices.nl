<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationNeighborhoodDistanceResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationNeighborhoodDistanceResponseType extends AbstractStructBase
{
    /**
     * The distance
     * @var int
     */
    public $distance;
    /**
     * Constructor method for geoLocationNeighborhoodDistanceResponseType
     * @uses GeoLocationNeighborhoodDistanceResponseType::setDistance()
     * @param int $distance
     */
    public function __construct($distance = null)
    {
        $this
            ->setDistance($distance);
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
     * @return \Webservices\StructType\GeoLocationNeighborhoodDistanceResponseType
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
     * @return \Webservices\StructType\GeoLocationNeighborhoodDistanceResponseType
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
