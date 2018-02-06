<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * geoLocationInternationalAddressCoordinatesLatLonResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationInternationalAddressCoordinatesLatLonResponseType extends AbstractStructBase
{
    /**
     * The coordinates
     * @var \Webservices\ArrayType\LatLonCoordinatesInternationalAddressArray
     */
    public $coordinates;
    /**
     * Constructor method for
     * geoLocationInternationalAddressCoordinatesLatLonResponseType
     * @uses GeoLocationInternationalAddressCoordinatesLatLonResponseType::setCoordinates()
     * @param \Webservices\ArrayType\LatLonCoordinatesInternationalAddressArray $coordinates
     */
    public function __construct(\Webservices\ArrayType\LatLonCoordinatesInternationalAddressArray $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
    }
    /**
     * Get coordinates value
     * @return \Webservices\ArrayType\LatLonCoordinatesInternationalAddressArray|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Webservices\ArrayType\LatLonCoordinatesInternationalAddressArray $coordinates
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonResponseType
     */
    public function setCoordinates(\Webservices\ArrayType\LatLonCoordinatesInternationalAddressArray $coordinates = null)
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
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonResponseType
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
