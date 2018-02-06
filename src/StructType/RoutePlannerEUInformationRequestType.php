<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerEUInformationRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerEUInformationRequestType extends AbstractStructBase
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
     * Constructor method for routePlannerEUInformationRequestType
     * @uses RoutePlannerEUInformationRequestType::setLatitudefrom()
     * @uses RoutePlannerEUInformationRequestType::setLongitudefrom()
     * @uses RoutePlannerEUInformationRequestType::setLatitudeto()
     * @uses RoutePlannerEUInformationRequestType::setLongitudeto()
     * @uses RoutePlannerEUInformationRequestType::setRoutetype()
     * @param float $latitudefrom
     * @param float $longitudefrom
     * @param float $latitudeto
     * @param float $longitudeto
     * @param string $routetype
     */
    public function __construct($latitudefrom = null, $longitudefrom = null, $latitudeto = null, $longitudeto = null, $routetype = null)
    {
        $this
            ->setLatitudefrom($latitudefrom)
            ->setLongitudefrom($longitudefrom)
            ->setLatitudeto($latitudeto)
            ->setLongitudeto($longitudeto)
            ->setRoutetype($routetype);
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
     * @return \Webservices\StructType\RoutePlannerEUInformationRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUInformationRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUInformationRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUInformationRequestType
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
     * @return \Webservices\StructType\RoutePlannerEUInformationRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerEUInformationRequestType
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
