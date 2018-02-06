<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatLonCoordinatesMatch StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class LatLonCoordinatesMatch extends AbstractStructBase
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
     * The citymatch
     * @var string
     */
    public $citymatch;
    /**
     * The streetmatch
     * @var string
     */
    public $streetmatch;
    /**
     * Constructor method for LatLonCoordinatesMatch
     * @uses LatLonCoordinatesMatch::setLatitude()
     * @uses LatLonCoordinatesMatch::setLongitude()
     * @uses LatLonCoordinatesMatch::setCitymatch()
     * @uses LatLonCoordinatesMatch::setStreetmatch()
     * @param float $latitude
     * @param float $longitude
     * @param string $citymatch
     * @param string $streetmatch
     */
    public function __construct($latitude = null, $longitude = null, $citymatch = null, $streetmatch = null)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setCitymatch($citymatch)
            ->setStreetmatch($streetmatch);
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
     * @return \Webservices\StructType\LatLonCoordinatesMatch
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
     * @return \Webservices\StructType\LatLonCoordinatesMatch
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Get citymatch value
     * @return string|null
     */
    public function getCitymatch()
    {
        return $this->citymatch;
    }
    /**
     * Set citymatch value
     * @param string $citymatch
     * @return \Webservices\StructType\LatLonCoordinatesMatch
     */
    public function setCitymatch($citymatch = null)
    {
        // validation for constraint: string
        if (!is_null($citymatch) && !is_string($citymatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($citymatch)), __LINE__);
        }
        $this->citymatch = $citymatch;
        return $this;
    }
    /**
     * Get streetmatch value
     * @return string|null
     */
    public function getStreetmatch()
    {
        return $this->streetmatch;
    }
    /**
     * Set streetmatch value
     * @param string $streetmatch
     * @return \Webservices\StructType\LatLonCoordinatesMatch
     */
    public function setStreetmatch($streetmatch = null)
    {
        // validation for constraint: string
        if (!is_null($streetmatch) && !is_string($streetmatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetmatch)), __LINE__);
        }
        $this->streetmatch = $streetmatch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\LatLonCoordinatesMatch
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
