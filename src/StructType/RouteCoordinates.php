<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteCoordinates StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RouteCoordinates extends AbstractStructBase
{
    /**
     * The latlong
     * @var \Webservices\StructType\RouteCoordinateLatLong
     */
    public $latlong;
    /**
     * The rd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RouteCoordinateRD
     */
    public $rd;
    /**
     * Constructor method for RouteCoordinates
     * @uses RouteCoordinates::setLatlong()
     * @uses RouteCoordinates::setRd()
     * @param \Webservices\StructType\RouteCoordinateLatLong $latlong
     * @param \Webservices\StructType\RouteCoordinateRD $rd
     */
    public function __construct(\Webservices\StructType\RouteCoordinateLatLong $latlong = null, \Webservices\StructType\RouteCoordinateRD $rd = null)
    {
        $this
            ->setLatlong($latlong)
            ->setRd($rd);
    }
    /**
     * Get latlong value
     * @return \Webservices\StructType\RouteCoordinateLatLong|null
     */
    public function getLatlong()
    {
        return $this->latlong;
    }
    /**
     * Set latlong value
     * @param \Webservices\StructType\RouteCoordinateLatLong $latlong
     * @return \Webservices\StructType\RouteCoordinates
     */
    public function setLatlong(\Webservices\StructType\RouteCoordinateLatLong $latlong = null)
    {
        $this->latlong = $latlong;
        return $this;
    }
    /**
     * Get rd value
     * @return \Webservices\StructType\RouteCoordinateRD|null
     */
    public function getRd()
    {
        return $this->rd;
    }
    /**
     * Set rd value
     * @param \Webservices\StructType\RouteCoordinateRD $rd
     * @return \Webservices\StructType\RouteCoordinates
     */
    public function setRd(\Webservices\StructType\RouteCoordinateRD $rd = null)
    {
        $this->rd = $rd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RouteCoordinates
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
