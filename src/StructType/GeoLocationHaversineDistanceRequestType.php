<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationHaversineDistanceRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationHaversineDistanceRequestType extends AbstractStructBase
{
    /**
     * The latitude_coord_1
     * @var float
     */
    public $latitude_coord_1;
    /**
     * The longitude_coord_1
     * @var float
     */
    public $longitude_coord_1;
    /**
     * The latitude_coord_2
     * @var float
     */
    public $latitude_coord_2;
    /**
     * The longitude_coord_2
     * @var float
     */
    public $longitude_coord_2;
    /**
     * The in_radians
     * @var bool
     */
    public $in_radians;
    /**
     * Constructor method for geoLocationHaversineDistanceRequestType
     * @uses GeoLocationHaversineDistanceRequestType::setLatitude_coord_1()
     * @uses GeoLocationHaversineDistanceRequestType::setLongitude_coord_1()
     * @uses GeoLocationHaversineDistanceRequestType::setLatitude_coord_2()
     * @uses GeoLocationHaversineDistanceRequestType::setLongitude_coord_2()
     * @uses GeoLocationHaversineDistanceRequestType::setIn_radians()
     * @param float $latitude_coord_1
     * @param float $longitude_coord_1
     * @param float $latitude_coord_2
     * @param float $longitude_coord_2
     * @param bool $in_radians
     */
    public function __construct($latitude_coord_1 = null, $longitude_coord_1 = null, $latitude_coord_2 = null, $longitude_coord_2 = null, $in_radians = null)
    {
        $this
            ->setLatitude_coord_1($latitude_coord_1)
            ->setLongitude_coord_1($longitude_coord_1)
            ->setLatitude_coord_2($latitude_coord_2)
            ->setLongitude_coord_2($longitude_coord_2)
            ->setIn_radians($in_radians);
    }
    /**
     * Get latitude_coord value
     * @return latitude_coord
     */
    public function getLatitude_coord_1()
    {
        return $this->latitude_coord_1;
    }
    /**
     * Set latitude_coord value
     * @param latitude_coord $latitude_coord
     * @return \Webservices\StructType\GeoLocationHaversineDistanceRequestType
     */
    public function setLatitude_coord_1($latitude_coord_1 = null)
    {
        $this->latitude_coord_1 = $latitude_coord_1;
        return $this;
    }
    /**
     * Get longitude_coord value
     * @return longitude_coord
     */
    public function getLongitude_coord_1()
    {
        return $this->longitude_coord_1;
    }
    /**
     * Set longitude_coord value
     * @param longitude_coord $longitude_coord
     * @return \Webservices\StructType\GeoLocationHaversineDistanceRequestType
     */
    public function setLongitude_coord_1($longitude_coord_1 = null)
    {
        $this->longitude_coord_1 = $longitude_coord_1;
        return $this;
    }
    /**
     * Get latitude_coord value
     * @return latitude_coord
     */
    public function getLatitude_coord_2()
    {
        return $this->latitude_coord_2;
    }
    /**
     * Set latitude_coord value
     * @param latitude_coord $latitude_coord
     * @return \Webservices\StructType\GeoLocationHaversineDistanceRequestType
     */
    public function setLatitude_coord_2($latitude_coord_2 = null)
    {
        $this->latitude_coord_2 = $latitude_coord_2;
        return $this;
    }
    /**
     * Get longitude_coord value
     * @return longitude_coord
     */
    public function getLongitude_coord_2()
    {
        return $this->longitude_coord_2;
    }
    /**
     * Set longitude_coord value
     * @param longitude_coord $longitude_coord
     * @return \Webservices\StructType\GeoLocationHaversineDistanceRequestType
     */
    public function setLongitude_coord_2($longitude_coord_2 = null)
    {
        $this->longitude_coord_2 = $longitude_coord_2;
        return $this;
    }
    /**
     * Get in_radians value
     * @return bool|null
     */
    public function getIn_radians()
    {
        return $this->in_radians;
    }
    /**
     * Set in_radians value
     * @param bool $in_radians
     * @return \Webservices\StructType\GeoLocationHaversineDistanceRequestType
     */
    public function setIn_radians($in_radians = null)
    {
        // validation for constraint: boolean
        if (!is_null($in_radians) && !is_bool($in_radians)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($in_radians)), __LINE__);
        }
        $this->in_radians = $in_radians;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationHaversineDistanceRequestType
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
