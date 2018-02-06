<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerDescriptionAddressResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerDescriptionAddressResponseType extends AbstractStructBase
{
    /**
     * The route
     * @var \Webservices\ArrayType\RoutePartArray
     */
    public $route;
    /**
     * Constructor method for routePlannerDescriptionAddressResponseType
     * @uses RoutePlannerDescriptionAddressResponseType::setRoute()
     * @param \Webservices\ArrayType\RoutePartArray $route
     */
    public function __construct(\Webservices\ArrayType\RoutePartArray $route = null)
    {
        $this
            ->setRoute($route);
    }
    /**
     * Get route value
     * @return \Webservices\ArrayType\RoutePartArray|null
     */
    public function getRoute()
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param \Webservices\ArrayType\RoutePartArray $route
     * @return \Webservices\StructType\RoutePlannerDescriptionAddressResponseType
     */
    public function setRoute(\Webservices\ArrayType\RoutePartArray $route = null)
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
     * @return \Webservices\StructType\RoutePlannerDescriptionAddressResponseType
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
