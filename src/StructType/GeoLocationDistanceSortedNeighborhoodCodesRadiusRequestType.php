<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * geoLocationDistanceSortedNeighborhoodCodesRadiusRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType extends AbstractStructBase
{
    /**
     * The nbcodefrom
     * @var string
     */
    public $nbcodefrom;
    /**
     * The radius
     * @var int
     */
    public $radius;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for
     * geoLocationDistanceSortedNeighborhoodCodesRadiusRequestType
     * @uses GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType::setNbcodefrom()
     * @uses GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType::setRadius()
     * @uses GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType::setPage()
     * @param string $nbcodefrom
     * @param int $radius
     * @param int $page
     */
    public function __construct($nbcodefrom = null, $radius = null, $page = null)
    {
        $this
            ->setNbcodefrom($nbcodefrom)
            ->setRadius($radius)
            ->setPage($page);
    }
    /**
     * Get nbcodefrom value
     * @return string|null
     */
    public function getNbcodefrom()
    {
        return $this->nbcodefrom;
    }
    /**
     * Set nbcodefrom value
     * @param string $nbcodefrom
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType
     */
    public function setNbcodefrom($nbcodefrom = null)
    {
        // validation for constraint: string
        if (!is_null($nbcodefrom) && !is_string($nbcodefrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbcodefrom)), __LINE__);
        }
        $this->nbcodefrom = $nbcodefrom;
        return $this;
    }
    /**
     * Get radius value
     * @return int|null
     */
    public function getRadius()
    {
        return $this->radius;
    }
    /**
     * Set radius value
     * @param int $radius
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType
     */
    public function setRadius($radius = null)
    {
        // validation for constraint: int
        if (!is_null($radius) && !is_numeric($radius)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($radius)), __LINE__);
        }
        $this->radius = $radius;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType
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
