<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoLocationAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationAddress extends AbstractStructBase
{
    /**
     * The houseno_from
     * @var int
     */
    public $houseno_from;
    /**
     * The houseno_to
     * @var int
     */
    public $houseno_to;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The streetname
     * @var string
     */
    public $streetname;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The district
     * @var string
     */
    public $district;
    /**
     * The province
     * @var string
     */
    public $province;
    /**
     * The distance
     * @var int
     */
    public $distance;
    /**
     * The x
     * @var int
     */
    public $x;
    /**
     * The y
     * @var int
     */
    public $y;
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
     * Constructor method for GeoLocationAddress
     * @uses GeoLocationAddress::setHouseno_from()
     * @uses GeoLocationAddress::setHouseno_to()
     * @uses GeoLocationAddress::setPostcode()
     * @uses GeoLocationAddress::setStreetname()
     * @uses GeoLocationAddress::setCity()
     * @uses GeoLocationAddress::setDistrict()
     * @uses GeoLocationAddress::setProvince()
     * @uses GeoLocationAddress::setDistance()
     * @uses GeoLocationAddress::setX()
     * @uses GeoLocationAddress::setY()
     * @uses GeoLocationAddress::setLatitude()
     * @uses GeoLocationAddress::setLongitude()
     * @param int $houseno_from
     * @param int $houseno_to
     * @param string $postcode
     * @param string $streetname
     * @param string $city
     * @param string $district
     * @param string $province
     * @param int $distance
     * @param int $x
     * @param int $y
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($houseno_from = null, $houseno_to = null, $postcode = null, $streetname = null, $city = null, $district = null, $province = null, $distance = null, $x = null, $y = null, $latitude = null, $longitude = null)
    {
        $this
            ->setHouseno_from($houseno_from)
            ->setHouseno_to($houseno_to)
            ->setPostcode($postcode)
            ->setStreetname($streetname)
            ->setCity($city)
            ->setDistrict($district)
            ->setProvince($province)
            ->setDistance($distance)
            ->setX($x)
            ->setY($y)
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
    /**
     * Get houseno_from value
     * @return int|null
     */
    public function getHouseno_from()
    {
        return $this->houseno_from;
    }
    /**
     * Set houseno_from value
     * @param int $houseno_from
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setHouseno_from($houseno_from = null)
    {
        // validation for constraint: int
        if (!is_null($houseno_from) && !is_numeric($houseno_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($houseno_from)), __LINE__);
        }
        $this->houseno_from = $houseno_from;
        return $this;
    }
    /**
     * Get houseno_to value
     * @return int|null
     */
    public function getHouseno_to()
    {
        return $this->houseno_to;
    }
    /**
     * Set houseno_to value
     * @param int $houseno_to
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setHouseno_to($houseno_to = null)
    {
        // validation for constraint: int
        if (!is_null($houseno_to) && !is_numeric($houseno_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($houseno_to)), __LINE__);
        }
        $this->houseno_to = $houseno_to;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get streetname value
     * @return string|null
     */
    public function getStreetname()
    {
        return $this->streetname;
    }
    /**
     * Set streetname value
     * @param string $streetname
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setStreetname($streetname = null)
    {
        // validation for constraint: string
        if (!is_null($streetname) && !is_string($streetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetname)), __LINE__);
        }
        $this->streetname = $streetname;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get district value
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->district;
    }
    /**
     * Set district value
     * @param string $district
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setDistrict($district = null)
    {
        // validation for constraint: string
        if (!is_null($district) && !is_string($district)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($district)), __LINE__);
        }
        $this->district = $district;
        return $this;
    }
    /**
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
    /**
     * Get distance value
     * @return int|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param int $distance
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setDistance($distance = null)
    {
        // validation for constraint: int
        if (!is_null($distance) && !is_numeric($distance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distance)), __LINE__);
        }
        $this->distance = $distance;
        return $this;
    }
    /**
     * Get x value
     * @return int|null
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param int $x
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setX($x = null)
    {
        // validation for constraint: int
        if (!is_null($x) && !is_numeric($x)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($x)), __LINE__);
        }
        $this->x = $x;
        return $this;
    }
    /**
     * Get y value
     * @return int|null
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param int $y
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setY($y = null)
    {
        // validation for constraint: int
        if (!is_null($y) && !is_numeric($y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($y)), __LINE__);
        }
        $this->y = $y;
        return $this;
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
     * @return \Webservices\StructType\GeoLocationAddress
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
     * @return \Webservices\StructType\GeoLocationAddress
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationAddress
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
