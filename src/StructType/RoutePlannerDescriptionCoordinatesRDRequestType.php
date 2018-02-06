<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerDescriptionCoordinatesRDRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerDescriptionCoordinatesRDRequestType extends AbstractStructBase
{
    /**
     * The postcodefrom
     * @var string
     */
    public $postcodefrom;
    /**
     * The postcodeto
     * @var string
     */
    public $postcodeto;
    /**
     * The routetype
     * @var string
     */
    public $routetype;
    /**
     * The english
     * @var bool
     */
    public $english;
    /**
     * Constructor method for routePlannerDescriptionCoordinatesRDRequestType
     * @uses RoutePlannerDescriptionCoordinatesRDRequestType::setPostcodefrom()
     * @uses RoutePlannerDescriptionCoordinatesRDRequestType::setPostcodeto()
     * @uses RoutePlannerDescriptionCoordinatesRDRequestType::setRoutetype()
     * @uses RoutePlannerDescriptionCoordinatesRDRequestType::setEnglish()
     * @param string $postcodefrom
     * @param string $postcodeto
     * @param string $routetype
     * @param bool $english
     */
    public function __construct($postcodefrom = null, $postcodeto = null, $routetype = null, $english = null)
    {
        $this
            ->setPostcodefrom($postcodefrom)
            ->setPostcodeto($postcodeto)
            ->setRoutetype($routetype)
            ->setEnglish($english);
    }
    /**
     * Get postcodefrom value
     * @return string|null
     */
    public function getPostcodefrom()
    {
        return $this->postcodefrom;
    }
    /**
     * Set postcodefrom value
     * @param string $postcodefrom
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType
     */
    public function setPostcodefrom($postcodefrom = null)
    {
        // validation for constraint: string
        if (!is_null($postcodefrom) && !is_string($postcodefrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcodefrom)), __LINE__);
        }
        $this->postcodefrom = $postcodefrom;
        return $this;
    }
    /**
     * Get postcodeto value
     * @return string|null
     */
    public function getPostcodeto()
    {
        return $this->postcodeto;
    }
    /**
     * Set postcodeto value
     * @param string $postcodeto
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType
     */
    public function setPostcodeto($postcodeto = null)
    {
        // validation for constraint: string
        if (!is_null($postcodeto) && !is_string($postcodeto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcodeto)), __LINE__);
        }
        $this->postcodeto = $postcodeto;
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
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType
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
     * Get english value
     * @return bool|null
     */
    public function getEnglish()
    {
        return $this->english;
    }
    /**
     * Set english value
     * @param bool $english
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType
     */
    public function setEnglish($english = null)
    {
        // validation for constraint: boolean
        if (!is_null($english) && !is_bool($english)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($english)), __LINE__);
        }
        $this->english = $english;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType
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
