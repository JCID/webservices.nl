<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mapViewRDRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MapViewRDRequestType extends AbstractStructBase
{
    /**
     * The center_x
     * @var int
     */
    public $center_x;
    /**
     * The center_y
     * @var int
     */
    public $center_y;
    /**
     * The extra_xy
     * @var \Webservices\ArrayType\RDCoordinatesArray
     */
    public $extra_xy;
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
     * Constructor method for mapViewRDRequestType
     * @uses MapViewRDRequestType::setCenter_x()
     * @uses MapViewRDRequestType::setCenter_y()
     * @uses MapViewRDRequestType::setExtra_xy()
     * @uses MapViewRDRequestType::setFormat()
     * @uses MapViewRDRequestType::setWidth()
     * @uses MapViewRDRequestType::setHeight()
     * @uses MapViewRDRequestType::setZoom()
     * @param int $center_x
     * @param int $center_y
     * @param \Webservices\ArrayType\RDCoordinatesArray $extra_xy
     * @param string $format
     * @param int $width
     * @param int $height
     * @param float $zoom
     */
    public function __construct($center_x = null, $center_y = null, \Webservices\ArrayType\RDCoordinatesArray $extra_xy = null, $format = null, $width = null, $height = null, $zoom = null)
    {
        $this
            ->setCenter_x($center_x)
            ->setCenter_y($center_y)
            ->setExtra_xy($extra_xy)
            ->setFormat($format)
            ->setWidth($width)
            ->setHeight($height)
            ->setZoom($zoom);
    }
    /**
     * Get center_x value
     * @return int|null
     */
    public function getCenter_x()
    {
        return $this->center_x;
    }
    /**
     * Set center_x value
     * @param int $center_x
     * @return \Webservices\StructType\MapViewRDRequestType
     */
    public function setCenter_x($center_x = null)
    {
        // validation for constraint: int
        if (!is_null($center_x) && !is_numeric($center_x)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($center_x)), __LINE__);
        }
        $this->center_x = $center_x;
        return $this;
    }
    /**
     * Get center_y value
     * @return int|null
     */
    public function getCenter_y()
    {
        return $this->center_y;
    }
    /**
     * Set center_y value
     * @param int $center_y
     * @return \Webservices\StructType\MapViewRDRequestType
     */
    public function setCenter_y($center_y = null)
    {
        // validation for constraint: int
        if (!is_null($center_y) && !is_numeric($center_y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($center_y)), __LINE__);
        }
        $this->center_y = $center_y;
        return $this;
    }
    /**
     * Get extra_xy value
     * @return \Webservices\ArrayType\RDCoordinatesArray|null
     */
    public function getExtra_xy()
    {
        return $this->extra_xy;
    }
    /**
     * Set extra_xy value
     * @param \Webservices\ArrayType\RDCoordinatesArray $extra_xy
     * @return \Webservices\StructType\MapViewRDRequestType
     */
    public function setExtra_xy(\Webservices\ArrayType\RDCoordinatesArray $extra_xy = null)
    {
        $this->extra_xy = $extra_xy;
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
     * @return \Webservices\StructType\MapViewRDRequestType
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
     * @return \Webservices\StructType\MapViewRDRequestType
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
     * @return \Webservices\StructType\MapViewRDRequestType
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
     * @return \Webservices\StructType\MapViewRDRequestType
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
     * @return \Webservices\StructType\MapViewRDRequestType
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
