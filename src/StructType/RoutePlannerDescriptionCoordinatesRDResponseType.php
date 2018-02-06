<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerDescriptionCoordinatesRDResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerDescriptionCoordinatesRDResponseType extends AbstractStructBase
{
    /**
     * The route
     * @var \Webservices\StructType\RouteDescriptionCoordinatesRD
     */
    public $route;
    /**
     * Constructor method for routePlannerDescriptionCoordinatesRDResponseType
     * @uses RoutePlannerDescriptionCoordinatesRDResponseType::setRoute()
     * @param \Webservices\StructType\RouteDescriptionCoordinatesRD $route
     */
    public function __construct(\Webservices\StructType\RouteDescriptionCoordinatesRD $route = null)
    {
        $this
            ->setRoute($route);
    }
    /**
     * Get route value
     * @return \Webservices\StructType\RouteDescriptionCoordinatesRD|null
     */
    public function getRoute()
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param \Webservices\StructType\RouteDescriptionCoordinatesRD $route
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDResponseType
     */
    public function setRoute(\Webservices\StructType\RouteDescriptionCoordinatesRD $route = null)
    {
        $this->route = $route;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDResponseType
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
