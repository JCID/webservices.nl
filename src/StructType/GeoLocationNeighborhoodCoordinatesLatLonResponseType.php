<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationNeighborhoodCoordinatesLatLonResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationNeighborhoodCoordinatesLatLonResponseType extends AbstractStructBase
{
    /**
     * The coordinates
     * @var \Webservices\StructType\LatLonCoordinates
     */
    public $coordinates;
    /**
     * Constructor method for geoLocationNeighborhoodCoordinatesLatLonResponseType
     * @uses GeoLocationNeighborhoodCoordinatesLatLonResponseType::setCoordinates()
     * @param \Webservices\StructType\LatLonCoordinates $coordinates
     */
    public function __construct(\Webservices\StructType\LatLonCoordinates $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
    }
    /**
     * Get coordinates value
     * @return \Webservices\StructType\LatLonCoordinates|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Webservices\StructType\LatLonCoordinates $coordinates
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonResponseType
     */
    public function setCoordinates(\Webservices\StructType\LatLonCoordinates $coordinates = null)
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonResponseType
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
