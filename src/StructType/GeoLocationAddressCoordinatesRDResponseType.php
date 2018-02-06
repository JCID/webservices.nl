<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationAddressCoordinatesRDResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationAddressCoordinatesRDResponseType extends AbstractStructBase
{
    /**
     * The coordinates
     * @var \Webservices\StructType\RDCoordinatesMatch
     */
    public $coordinates;
    /**
     * Constructor method for geoLocationAddressCoordinatesRDResponseType
     * @uses GeoLocationAddressCoordinatesRDResponseType::setCoordinates()
     * @param \Webservices\StructType\RDCoordinatesMatch $coordinates
     */
    public function __construct(\Webservices\StructType\RDCoordinatesMatch $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
    }
    /**
     * Get coordinates value
     * @return \Webservices\StructType\RDCoordinatesMatch|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Webservices\StructType\RDCoordinatesMatch $coordinates
     * @return \Webservices\StructType\GeoLocationAddressCoordinatesRDResponseType
     */
    public function setCoordinates(\Webservices\StructType\RDCoordinatesMatch $coordinates = null)
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
     * @return \Webservices\StructType\GeoLocationAddressCoordinatesRDResponseType
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
