<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerInformationDutchAddressResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerInformationDutchAddressResponseType extends AbstractStructBase
{
    /**
     * The route
     * @var \Webservices\StructType\RouteInfo
     */
    public $route;
    /**
     * Constructor method for routePlannerInformationDutchAddressResponseType
     * @uses RoutePlannerInformationDutchAddressResponseType::setRoute()
     * @param \Webservices\StructType\RouteInfo $route
     */
    public function __construct(\Webservices\StructType\RouteInfo $route = null)
    {
        $this
            ->setRoute($route);
    }
    /**
     * Get route value
     * @return \Webservices\StructType\RouteInfo|null
     */
    public function getRoute()
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param \Webservices\StructType\RouteInfo $route
     * @return \Webservices\StructType\RoutePlannerInformationDutchAddressResponseType
     */
    public function setRoute(\Webservices\StructType\RouteInfo $route = null)
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
     * @return \Webservices\StructType\RoutePlannerInformationDutchAddressResponseType
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
