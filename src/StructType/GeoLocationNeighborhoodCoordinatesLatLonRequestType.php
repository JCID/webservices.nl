<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationNeighborhoodCoordinatesLatLonRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationNeighborhoodCoordinatesLatLonRequestType extends AbstractStructBase
{
    /**
     * The nbcode
     * @var string
     */
    public $nbcode;
    /**
     * Constructor method for geoLocationNeighborhoodCoordinatesLatLonRequestType
     * @uses GeoLocationNeighborhoodCoordinatesLatLonRequestType::setNbcode()
     * @param string $nbcode
     */
    public function __construct($nbcode = null)
    {
        $this
            ->setNbcode($nbcode);
    }
    /**
     * Get nbcode value
     * @return string|null
     */
    public function getNbcode()
    {
        return $this->nbcode;
    }
    /**
     * Set nbcode value
     * @param string $nbcode
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonRequestType
     */
    public function setNbcode($nbcode = null)
    {
        // validation for constraint: string
        if (!is_null($nbcode) && !is_string($nbcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbcode)), __LINE__);
        }
        $this->nbcode = $nbcode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonRequestType
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
