<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteDescriptionCoordinatesLatLon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RouteDescriptionCoordinatesLatLon extends AbstractStructBase
{
    /**
     * The routecoordinates
     * @var \Webservices\StructType\RouteCoordinatesLatLon
     */
    public $routecoordinates;
    /**
     * The parts
     * @var \Webservices\ArrayType\RoutePartArray
     */
    public $parts;
    /**
     * Constructor method for RouteDescriptionCoordinatesLatLon
     * @uses RouteDescriptionCoordinatesLatLon::setRoutecoordinates()
     * @uses RouteDescriptionCoordinatesLatLon::setParts()
     * @param \Webservices\StructType\RouteCoordinatesLatLon $routecoordinates
     * @param \Webservices\ArrayType\RoutePartArray $parts
     */
    public function __construct(\Webservices\StructType\RouteCoordinatesLatLon $routecoordinates = null, \Webservices\ArrayType\RoutePartArray $parts = null)
    {
        $this
            ->setRoutecoordinates($routecoordinates)
            ->setParts($parts);
    }
    /**
     * Get routecoordinates value
     * @return \Webservices\StructType\RouteCoordinatesLatLon|null
     */
    public function getRoutecoordinates()
    {
        return $this->routecoordinates;
    }
    /**
     * Set routecoordinates value
     * @param \Webservices\StructType\RouteCoordinatesLatLon $routecoordinates
     * @return \Webservices\StructType\RouteDescriptionCoordinatesLatLon
     */
    public function setRoutecoordinates(\Webservices\StructType\RouteCoordinatesLatLon $routecoordinates = null)
    {
        $this->routecoordinates = $routecoordinates;
        return $this;
    }
    /**
     * Get parts value
     * @return \Webservices\ArrayType\RoutePartArray|null
     */
    public function getParts()
    {
        return $this->parts;
    }
    /**
     * Set parts value
     * @param \Webservices\ArrayType\RoutePartArray $parts
     * @return \Webservices\StructType\RouteDescriptionCoordinatesLatLon
     */
    public function setParts(\Webservices\ArrayType\RoutePartArray $parts = null)
    {
        $this->parts = $parts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RouteDescriptionCoordinatesLatLon
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
