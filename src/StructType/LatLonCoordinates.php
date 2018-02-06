<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatLonCoordinates StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class LatLonCoordinates extends AbstractStructBase
{
    /**
     * The latitude
     * @var float
     */
    public $latitude;
    /**
     * The longitude
     * @var float
     */
    public $longitude;
    /**
     * Constructor method for LatLonCoordinates
     * @uses LatLonCoordinates::setLatitude()
     * @uses LatLonCoordinates::setLongitude()
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude = null, $longitude = null)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
    /**
     * Get latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \Webservices\StructType\LatLonCoordinates
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \Webservices\StructType\LatLonCoordinates
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\LatLonCoordinates
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
