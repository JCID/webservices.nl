<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleFeature StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleFeature extends AbstractStructBase
{
    /**
     * The length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $length;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $width;
    /**
     * The doors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $doors;
    /**
     * The seats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $seats;
    /**
     * The standing_room
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $standing_room;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $weight;
    /**
     * The axles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $axles;
    /**
     * The wheels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $wheels;
    /**
     * The wheel_base
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $wheel_base;
    /**
     * The distance_front_to_clutch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $distance_front_to_clutch;
    /**
     * The distance_clutch_to_rear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $distance_clutch_to_rear;
    /**
     * The speed_limit_difference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $speed_limit_difference;
    /**
     * Constructor method for DutchVehicleFeature
     * @uses DutchVehicleFeature::setLength()
     * @uses DutchVehicleFeature::setWidth()
     * @uses DutchVehicleFeature::setDoors()
     * @uses DutchVehicleFeature::setSeats()
     * @uses DutchVehicleFeature::setStanding_room()
     * @uses DutchVehicleFeature::setWeight()
     * @uses DutchVehicleFeature::setAxles()
     * @uses DutchVehicleFeature::setWheels()
     * @uses DutchVehicleFeature::setWheel_base()
     * @uses DutchVehicleFeature::setDistance_front_to_clutch()
     * @uses DutchVehicleFeature::setDistance_clutch_to_rear()
     * @uses DutchVehicleFeature::setSpeed_limit_difference()
     * @param int $length
     * @param int $width
     * @param int $doors
     * @param int $seats
     * @param int $standing_room
     * @param int $weight
     * @param int $axles
     * @param int $wheels
     * @param int $wheel_base
     * @param int $distance_front_to_clutch
     * @param int $distance_clutch_to_rear
     * @param int $speed_limit_difference
     */
    public function __construct($length = null, $width = null, $doors = null, $seats = null, $standing_room = null, $weight = null, $axles = null, $wheels = null, $wheel_base = null, $distance_front_to_clutch = null, $distance_clutch_to_rear = null, $speed_limit_difference = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setDoors($doors)
            ->setSeats($seats)
            ->setStanding_room($standing_room)
            ->setWeight($weight)
            ->setAxles($axles)
            ->setWheels($wheels)
            ->setWheel_base($wheel_base)
            ->setDistance_front_to_clutch($distance_front_to_clutch)
            ->setDistance_clutch_to_rear($distance_clutch_to_rear)
            ->setSpeed_limit_difference($speed_limit_difference);
    }
    /**
     * Get length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param int $length
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->length = $length;
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
     * @return \Webservices\StructType\DutchVehicleFeature
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
     * Get doors value
     * @return int|null
     */
    public function getDoors()
    {
        return $this->doors;
    }
    /**
     * Set doors value
     * @param int $doors
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setDoors($doors = null)
    {
        // validation for constraint: int
        if (!is_null($doors) && !is_numeric($doors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($doors)), __LINE__);
        }
        $this->doors = $doors;
        return $this;
    }
    /**
     * Get seats value
     * @return int|null
     */
    public function getSeats()
    {
        return $this->seats;
    }
    /**
     * Set seats value
     * @param int $seats
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setSeats($seats = null)
    {
        // validation for constraint: int
        if (!is_null($seats) && !is_numeric($seats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seats)), __LINE__);
        }
        $this->seats = $seats;
        return $this;
    }
    /**
     * Get standing_room value
     * @return int|null
     */
    public function getStanding_room()
    {
        return $this->standing_room;
    }
    /**
     * Set standing_room value
     * @param int $standing_room
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setStanding_room($standing_room = null)
    {
        // validation for constraint: int
        if (!is_null($standing_room) && !is_numeric($standing_room)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standing_room)), __LINE__);
        }
        $this->standing_room = $standing_room;
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: int
        if (!is_null($weight) && !is_numeric($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get axles value
     * @return int|null
     */
    public function getAxles()
    {
        return $this->axles;
    }
    /**
     * Set axles value
     * @param int $axles
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setAxles($axles = null)
    {
        // validation for constraint: int
        if (!is_null($axles) && !is_numeric($axles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($axles)), __LINE__);
        }
        $this->axles = $axles;
        return $this;
    }
    /**
     * Get wheels value
     * @return int|null
     */
    public function getWheels()
    {
        return $this->wheels;
    }
    /**
     * Set wheels value
     * @param int $wheels
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setWheels($wheels = null)
    {
        // validation for constraint: int
        if (!is_null($wheels) && !is_numeric($wheels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($wheels)), __LINE__);
        }
        $this->wheels = $wheels;
        return $this;
    }
    /**
     * Get wheel_base value
     * @return int|null
     */
    public function getWheel_base()
    {
        return $this->wheel_base;
    }
    /**
     * Set wheel_base value
     * @param int $wheel_base
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setWheel_base($wheel_base = null)
    {
        // validation for constraint: int
        if (!is_null($wheel_base) && !is_numeric($wheel_base)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($wheel_base)), __LINE__);
        }
        $this->wheel_base = $wheel_base;
        return $this;
    }
    /**
     * Get distance_front_to_clutch value
     * @return int|null
     */
    public function getDistance_front_to_clutch()
    {
        return $this->distance_front_to_clutch;
    }
    /**
     * Set distance_front_to_clutch value
     * @param int $distance_front_to_clutch
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setDistance_front_to_clutch($distance_front_to_clutch = null)
    {
        // validation for constraint: int
        if (!is_null($distance_front_to_clutch) && !is_numeric($distance_front_to_clutch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distance_front_to_clutch)), __LINE__);
        }
        $this->distance_front_to_clutch = $distance_front_to_clutch;
        return $this;
    }
    /**
     * Get distance_clutch_to_rear value
     * @return int|null
     */
    public function getDistance_clutch_to_rear()
    {
        return $this->distance_clutch_to_rear;
    }
    /**
     * Set distance_clutch_to_rear value
     * @param int $distance_clutch_to_rear
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setDistance_clutch_to_rear($distance_clutch_to_rear = null)
    {
        // validation for constraint: int
        if (!is_null($distance_clutch_to_rear) && !is_numeric($distance_clutch_to_rear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distance_clutch_to_rear)), __LINE__);
        }
        $this->distance_clutch_to_rear = $distance_clutch_to_rear;
        return $this;
    }
    /**
     * Get speed_limit_difference value
     * @return int|null
     */
    public function getSpeed_limit_difference()
    {
        return $this->speed_limit_difference;
    }
    /**
     * Set speed_limit_difference value
     * @param int $speed_limit_difference
     * @return \Webservices\StructType\DutchVehicleFeature
     */
    public function setSpeed_limit_difference($speed_limit_difference = null)
    {
        // validation for constraint: int
        if (!is_null($speed_limit_difference) && !is_numeric($speed_limit_difference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($speed_limit_difference)), __LINE__);
        }
        $this->speed_limit_difference = $speed_limit_difference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleFeature
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
