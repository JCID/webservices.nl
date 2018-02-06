<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerEUMapRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerEUMapRequestType extends AbstractStructBase
{
    /**
     * The latitudefrom
     * @var float
     */
    public $latitudefrom;
    /**
     * The longitudefrom
     * @var float
     */
    public $longitudefrom;
    /**
     * The latitudeto
     * @var float
     */
    public $latitudeto;
    /**
     * The longitudeto
     * @var float
     */
    public $longitudeto;
    /**
     * The routetype
     * @var string
     */
    public $routetype;
    /**
     * The language
     * @var string
     */
    public $language;
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
     * The view
     * @var string
     */
    public $view;
    /**
     * Constructor method for routePlannerEUMapRequestType
     * @uses RoutePlannerEUMapRequestType::setLatitudefrom()
     * @uses RoutePlannerEUMapRequestType::setLongitudefrom()
     * @uses RoutePlannerEUMapRequestType::setLatitudeto()
     * @uses RoutePlannerEUMapRequestType::setLongitudeto()
     * @uses RoutePlannerEUMapRequestType::setRoutetype()
     * @uses RoutePlannerEUMapRequestType::setLanguage()
     * @uses RoutePlannerEUMapRequestType::setFormat()
     * @uses RoutePlannerEUMapRequestType::setWidth()
     * @uses RoutePlannerEUMapRequestType::setHeight()
     * @uses RoutePlannerEUMapRequestType::setView()
     * @param float $latitudefrom
     * @param float $longitudefrom
     * @param float $latitudeto
     * @param float $longitudeto
     * @param string $routetype
     * @param string $language
     * @param string $format
     * @param int $width
     * @param int $height
     * @param string $view
     */
    public function __construct($latitudefrom = null, $longitudefrom = null, $latitudeto = null, $longitudeto = null, $routetype = null, $language = null, $format = null, $width = null, $height = null, $view = null)
    {
        $this
            ->setLatitudefrom($latitudefrom)
            ->setLongitudefrom($longitudefrom)
            ->setLatitudeto($latitudeto)
            ->setLongitudeto($longitudeto)
            ->setRoutetype($routetype)
            ->setLanguage($language)
            ->setFormat($format)
            ->setWidth($width)
            ->setHeight($height)
            ->setView($view);
    }
    /**
     * Get latitudefrom value
     * @return float|null
     */
    public function getLatitudefrom()
    {
        return $this->latitudefrom;
    }
    /**
     * Set latitudefrom value
     * @param float $latitudefrom
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
     */
    public function setLatitudefrom($latitudefrom = null)
    {
        $this->latitudefrom = $latitudefrom;
        return $this;
    }
    /**
     * Get longitudefrom value
     * @return float|null
     */
    public function getLongitudefrom()
    {
        return $this->longitudefrom;
    }
    /**
     * Set longitudefrom value
     * @param float $longitudefrom
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
     */
    public function setLongitudefrom($longitudefrom = null)
    {
        $this->longitudefrom = $longitudefrom;
        return $this;
    }
    /**
     * Get latitudeto value
     * @return float|null
     */
    public function getLatitudeto()
    {
        return $this->latitudeto;
    }
    /**
     * Set latitudeto value
     * @param float $latitudeto
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
     */
    public function setLatitudeto($latitudeto = null)
    {
        $this->latitudeto = $latitudeto;
        return $this;
    }
    /**
     * Get longitudeto value
     * @return float|null
     */
    public function getLongitudeto()
    {
        return $this->longitudeto;
    }
    /**
     * Set longitudeto value
     * @param float $longitudeto
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
     */
    public function setLongitudeto($longitudeto = null)
    {
        $this->longitudeto = $longitudeto;
        return $this;
    }
    /**
     * Get routetype value
     * @return string|null
     */
    public function getRoutetype()
    {
        return $this->routetype;
    }
    /**
     * Set routetype value
     * @param string $routetype
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
     */
    public function setRoutetype($routetype = null)
    {
        // validation for constraint: string
        if (!is_null($routetype) && !is_string($routetype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routetype)), __LINE__);
        }
        $this->routetype = $routetype;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
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
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
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
     * Get view value
     * @return string|null
     */
    public function getView()
    {
        return $this->view;
    }
    /**
     * Set view value
     * @param string $view
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
     */
    public function setView($view = null)
    {
        // validation for constraint: string
        if (!is_null($view) && !is_string($view)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($view)), __LINE__);
        }
        $this->view = $view;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerEUMapRequestType
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
