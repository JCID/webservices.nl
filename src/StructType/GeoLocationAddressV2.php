<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoLocationAddressV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationAddressV2 extends AbstractStructBase
{
    /**
     * The house_no
     * @var int
     */
    public $house_no;
    /**
     * The house_no_addition
     * @var string
     */
    public $house_no_addition;
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
     * Constructor method for GeoLocationAddressV2
     * @uses GeoLocationAddressV2::setHouse_no()
     * @uses GeoLocationAddressV2::setHouse_no_addition()
     * @uses GeoLocationAddressV2::setPostcode()
     * @uses GeoLocationAddressV2::setStreetname()
     * @uses GeoLocationAddressV2::setCity()
     * @uses GeoLocationAddressV2::setDistrict()
     * @uses GeoLocationAddressV2::setProvince()
     * @uses GeoLocationAddressV2::setDistance()
     * @uses GeoLocationAddressV2::setX()
     * @uses GeoLocationAddressV2::setY()
     * @uses GeoLocationAddressV2::setLatitude()
     * @uses GeoLocationAddressV2::setLongitude()
     * @param int $house_no
     * @param string $house_no_addition
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
    public function __construct($house_no = null, $house_no_addition = null, $postcode = null, $streetname = null, $city = null, $district = null, $province = null, $distance = null, $x = null, $y = null, $latitude = null, $longitude = null)
    {
        $this
            ->setHouse_no($house_no)
            ->setHouse_no_addition($house_no_addition)
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
     * Get house_no value
     * @return int|null
     */
    public function getHouse_no()
    {
        return $this->house_no;
    }
    /**
     * Set house_no value
     * @param int $house_no
     * @return \Webservices\StructType\GeoLocationAddressV2
     */
    public function setHouse_no($house_no = null)
    {
        // validation for constraint: int
        if (!is_null($house_no) && !is_numeric($house_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_no)), __LINE__);
        }
        $this->house_no = $house_no;
        return $this;
    }
    /**
     * Get house_no_addition value
     * @return string|null
     */
    public function getHouse_no_addition()
    {
        return $this->house_no_addition;
    }
    /**
     * Set house_no_addition value
     * @param string $house_no_addition
     * @return \Webservices\StructType\GeoLocationAddressV2
     */
    public function setHouse_no_addition($house_no_addition = null)
    {
        // validation for constraint: string
        if (!is_null($house_no_addition) && !is_string($house_no_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_no_addition)), __LINE__);
        }
        $this->house_no_addition = $house_no_addition;
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
     * @return \Webservices\StructType\GeoLocationAddressV2
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
