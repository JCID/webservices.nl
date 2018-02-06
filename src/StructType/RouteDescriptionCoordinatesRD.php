<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteDescriptionCoordinatesRD StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RouteDescriptionCoordinatesRD extends AbstractStructBase
{
    /**
     * The routecoordinates
     * @var \Webservices\StructType\RouteCoordinatesRD
     */
    public $routecoordinates;
    /**
     * The parts
     * @var \Webservices\ArrayType\RoutePartArray
     */
    public $parts;
    /**
     * Constructor method for RouteDescriptionCoordinatesRD
     * @uses RouteDescriptionCoordinatesRD::setRoutecoordinates()
     * @uses RouteDescriptionCoordinatesRD::setParts()
     * @param \Webservices\StructType\RouteCoordinatesRD $routecoordinates
     * @param \Webservices\ArrayType\RoutePartArray $parts
     */
    public function __construct(\Webservices\StructType\RouteCoordinatesRD $routecoordinates = null, \Webservices\ArrayType\RoutePartArray $parts = null)
    {
        $this
            ->setRoutecoordinates($routecoordinates)
            ->setParts($parts);
    }
    /**
     * Get routecoordinates value
     * @return \Webservices\StructType\RouteCoordinatesRD|null
     */
    public function getRoutecoordinates()
    {
        return $this->routecoordinates;
    }
    /**
     * Set routecoordinates value
     * @param \Webservices\StructType\RouteCoordinatesRD $routecoordinates
     * @return \Webservices\StructType\RouteDescriptionCoordinatesRD
     */
    public function setRoutecoordinates(\Webservices\StructType\RouteCoordinatesRD $routecoordinates = null)
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
     * @return \Webservices\StructType\RouteDescriptionCoordinatesRD
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
     * @return \Webservices\StructType\RouteDescriptionCoordinatesRD
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
