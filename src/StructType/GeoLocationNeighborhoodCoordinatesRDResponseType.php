<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationNeighborhoodCoordinatesRDResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationNeighborhoodCoordinatesRDResponseType extends AbstractStructBase
{
    /**
     * The coordinates
     * @var \Webservices\StructType\RDCoordinates
     */
    public $coordinates;
    /**
     * Constructor method for geoLocationNeighborhoodCoordinatesRDResponseType
     * @uses GeoLocationNeighborhoodCoordinatesRDResponseType::setCoordinates()
     * @param \Webservices\StructType\RDCoordinates $coordinates
     */
    public function __construct(\Webservices\StructType\RDCoordinates $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
    }
    /**
     * Get coordinates value
     * @return \Webservices\StructType\RDCoordinates|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Webservices\StructType\RDCoordinates $coordinates
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesRDResponseType
     */
    public function setCoordinates(\Webservices\StructType\RDCoordinates $coordinates = null)
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
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesRDResponseType
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
