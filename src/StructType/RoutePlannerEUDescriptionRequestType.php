<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerEUDescriptionRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerEUDescriptionRequestType extends AbstractStructBase
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
     * Constructor method for routePlannerEUDescriptionRequestType
     * @uses RoutePlannerEUDescriptionRequestType::setLatitudefrom()
     * @uses RoutePlannerEUDescriptionRequestType::setLongitudefrom()
     * @uses RoutePlannerEUDescriptionRequestType::setLatitudeto()
     * @uses RoutePlannerEUDescriptionRequestType::setLongitudeto()
     * @uses RoutePlannerEUDescriptionRequestType::setRoutetype()
     * @uses RoutePlannerEUDescriptionRequestType::setLanguage()
     * @param float $latitudefrom
     * @param float $longitudefrom
     * @param float $latitudeto
     * @param float $longitudeto
     * @param string $routetype
     * @param string $language
     */
    public function __construct($latitudefrom = null, $longitudefrom = null, $latitudeto = null, $longitudeto = null, $routetype = null, $language = null)
    {
        $this
            ->setLatitudefrom($latitudefrom)
            ->setLongitudefrom($longitudefrom)
            ->setLatitudeto($latitudeto)
            ->setLongitudeto($longitudeto)
            ->setRoutetype($routetype)
            ->setLanguage($language);
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
     * @return \Webservices\StructType\RoutePlannerEUDescriptionRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUDescriptionRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUDescriptionRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUDescriptionRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUDescriptionRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUDescriptionRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerEUDescriptionRequestType
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
