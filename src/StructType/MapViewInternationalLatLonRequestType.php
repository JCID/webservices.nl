<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mapViewInternationalLatLonRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MapViewInternationalLatLonRequestType extends AbstractStructBase
{
    /**
     * The latitude
     * @var float
     */
    public $latitude;
    /**
     * The longitude
     * @var float
     */
    public $longitude;
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
     * Constructor method for mapViewInternationalLatLonRequestType
     * @uses MapViewInternationalLatLonRequestType::setLatitude()
     * @uses MapViewInternationalLatLonRequestType::setLongitude()
     * @uses MapViewInternationalLatLonRequestType::setFormat()
     * @uses MapViewInternationalLatLonRequestType::setWidth()
     * @uses MapViewInternationalLatLonRequestType::setHeight()
     * @uses MapViewInternationalLatLonRequestType::setZoom()
     * @param float $latitude
     * @param float $longitude
     * @param string $format
     * @param int $width
     * @param int $height
     * @param float $zoom
     */
    public function __construct($latitude = null, $longitude = null, $format = null, $width = null, $height = null, $zoom = null)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setFormat($format)
            ->setWidth($width)
            ->setHeight($height)
            ->setZoom($zoom);
    }
    /**
     * Get latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \Webservices\StructType\MapViewInternationalLatLonRequestType
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \Webservices\StructType\MapViewInternationalLatLonRequestType
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;
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
     * @return \Webservices\StructType\MapViewInternationalLatLonRequestType
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
     * @return \Webservices\StructType\MapViewInternationalLatLonRequestType
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
     * @return \Webservices\StructType\MapViewInternationalLatLonRequestType
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
     * @return \Webservices\StructType\MapViewInternationalLatLonRequestType
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
     * @return \Webservices\StructType\MapViewInternationalLatLonRequestType
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
