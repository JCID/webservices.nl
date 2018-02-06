<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mapViewLatLonRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MapViewLatLonRequestType extends AbstractStructBase
{
    /**
     * The center_lat
     * @var float
     */
    public $center_lat;
    /**
     * The center_lon
     * @var float
     */
    public $center_lon;
    /**
     * The extra_latlon
     * @var \Webservices\ArrayType\LatLonCoordinatesArray
     */
    public $extra_latlon;
    /**
     * The format
     * @var string
     */
    public $format;
    /**
     * The width
     * @var int
     */
    public $width;
    /**
     * The height
     * @var int
     */
    public $height;
    /**
     * The zoom
     * @var float
     */
    public $zoom;
    /**
     * Constructor method for mapViewLatLonRequestType
     * @uses MapViewLatLonRequestType::setCenter_lat()
     * @uses MapViewLatLonRequestType::setCenter_lon()
     * @uses MapViewLatLonRequestType::setExtra_latlon()
     * @uses MapViewLatLonRequestType::setFormat()
     * @uses MapViewLatLonRequestType::setWidth()
     * @uses MapViewLatLonRequestType::setHeight()
     * @uses MapViewLatLonRequestType::setZoom()
     * @param float $center_lat
     * @param float $center_lon
     * @param \Webservices\ArrayType\LatLonCoordinatesArray $extra_latlon
     * @param string $format
     * @param int $width
     * @param int $height
     * @param float $zoom
     */
    public function __construct($center_lat = null, $center_lon = null, \Webservices\ArrayType\LatLonCoordinatesArray $extra_latlon = null, $format = null, $width = null, $height = null, $zoom = null)
    {
        $this
            ->setCenter_lat($center_lat)
            ->setCenter_lon($center_lon)
            ->setExtra_latlon($extra_latlon)
            ->setFormat($format)
            ->setWidth($width)
            ->setHeight($height)
            ->setZoom($zoom);
    }
    /**
     * Get center_lat value
     * @return float|null
     */
    public function getCenter_lat()
    {
        return $this->center_lat;
    }
    /**
     * Set center_lat value
     * @param float $center_lat
     * @return \Webservices\StructType\MapViewLatLonRequestType
     */
    public function setCenter_lat($center_lat = null)
    {
        $this->center_lat = $center_lat;
        return $this;
    }
    /**
     * Get center_lon value
     * @return float|null
     */
    public function getCenter_lon()
    {
        return $this->center_lon;
    }
    /**
     * Set center_lon value
     * @param float $center_lon
     * @return \Webservices\StructType\MapViewLatLonRequestType
     */
    public function setCenter_lon($center_lon = null)
    {
        $this->center_lon = $center_lon;
        return $this;
    }
    /**
     * Get extra_latlon value
     * @return \Webservices\ArrayType\LatLonCoordinatesArray|null
     */
    public function getExtra_latlon()
    {
        return $this->extra_latlon;
    }
    /**
     * Set extra_latlon value
     * @param \Webservices\ArrayType\LatLonCoordinatesArray $extra_latlon
     * @return \Webservices\StructType\MapViewLatLonRequestType
     */
    public function setExtra_latlon(\Webservices\ArrayType\LatLonCoordinatesArray $extra_latlon = null)
    {
        $this->extra_latlon = $extra_latlon;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Webservices\StructType\MapViewLatLonRequestType
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \Webservices\StructType\MapViewLatLonRequestType
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \Webservices\StructType\MapViewLatLonRequestType
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get zoom value
     * @return float|null
     */
    public function getZoom()
    {
        return $this->zoom;
    }
    /**
     * Set zoom value
     * @param float $zoom
     * @return \Webservices\StructType\MapViewLatLonRequestType
     */
    public function setZoom($zoom = null)
    {
        $this->zoom = $zoom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MapViewLatLonRequestType
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
