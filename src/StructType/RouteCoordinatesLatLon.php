<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteCoordinatesLatLon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RouteCoordinatesLatLon extends AbstractStructBase
{
    /**
     * The number
     * @var int
     */
    public $number;
    /**
     * The coordinates
     * @var string
     */
    public $coordinates;
    /**
     * Constructor method for RouteCoordinatesLatLon
     * @uses RouteCoordinatesLatLon::setNumber()
     * @uses RouteCoordinatesLatLon::setCoordinates()
     * @param int $number
     * @param string $coordinates
     */
    public function __construct($number = null, $coordinates = null)
    {
        $this
            ->setNumber($number)
            ->setCoordinates($coordinates);
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Webservices\StructType\RouteCoordinatesLatLon
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get coordinates value
     * @return string|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param string $coordinates
     * @return \Webservices\StructType\RouteCoordinatesLatLon
     */
    public function setCoordinates($coordinates = null)
    {
        // validation for constraint: string
        if (!is_null($coordinates) && !is_string($coordinates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coordinates)), __LINE__);
        }
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RouteCoordinatesLatLon
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
