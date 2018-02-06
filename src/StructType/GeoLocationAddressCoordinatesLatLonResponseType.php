<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationAddressCoordinatesLatLonResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationAddressCoordinatesLatLonResponseType extends AbstractStructBase
{
    /**
     * The coordinates
     * @var \Webservices\StructType\LatLonCoordinatesMatch
     */
    public $coordinates;
    /**
     * Constructor method for geoLocationAddressCoordinatesLatLonResponseType
     * @uses GeoLocationAddressCoordinatesLatLonResponseType::setCoordinates()
     * @param \Webservices\StructType\LatLonCoordinatesMatch $coordinates
     */
    public function __construct(\Webservices\StructType\LatLonCoordinatesMatch $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
    }
    /**
     * Get coordinates value
     * @return \Webservices\StructType\LatLonCoordinatesMatch|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Webservices\StructType\LatLonCoordinatesMatch $coordinates
     * @return \Webservices\StructType\GeoLocationAddressCoordinatesLatLonResponseType
     */
    public function setCoordinates(\Webservices\StructType\LatLonCoordinatesMatch $coordinates = null)
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
     * @return \Webservices\StructType\GeoLocationAddressCoordinatesLatLonResponseType
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
