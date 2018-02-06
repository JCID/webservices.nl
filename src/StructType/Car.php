<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Car StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Car extends AbstractStructBase
{
    /**
     * The license_plate
     * @var string
     */
    public $license_plate;
    /**
     * The category
     * @var string
     */
    public $category;
    /**
     * The brand
     * @var string
     */
    public $brand;
    /**
     * The model
     * @var string
     */
    public $model;
    /**
     * The colors
     * @var string
     */
    public $colors;
    /**
     * The fuel_type
     * @var string
     */
    public $fuel_type;
    /**
     * The cylinders
     * @var int
     */
    public $cylinders;
    /**
     * The cylinder_capacity
     * @var int
     */
    public $cylinder_capacity;
    /**
     * The seats
     * @var int
     */
    public $seats;
    /**
     * The standing_room
     * @var int
     */
    public $standing_room;
    /**
     * The unladen_mass
     * @var int
     */
    public $unladen_mass;
    /**
     * The gross_vehicle_mass
     * @var int
     */
    public $gross_vehicle_mass;
    /**
     * The mass_ready
     * @var int
     */
    public $mass_ready;
    /**
     * The maximum_mass_payload
     * @var int
     */
    public $maximum_mass_payload;
    /**
     * The maximum_mass_unbraked
     * @var int
     */
    public $maximum_mass_unbraked;
    /**
     * The maximum_mass_braked
     * @var int
     */
    public $maximum_mass_braked;
    /**
     * The maximum_mass_trailer_braked
     * @var int
     */
    public $maximum_mass_trailer_braked;
    /**
     * The maximum_mass_self_braked
     * @var int
     */
    public $maximum_mass_self_braked;
    /**
     * The maximum_mass_axle_braked
     * @var int
     */
    public $maximum_mass_axle_braked;
    /**
     * The date_first_issuing
     * @var string
     */
    public $date_first_issuing;
    /**
     * The date_first_admission
     * @var string
     */
    public $date_first_admission;
    /**
     * The date_latest_name_registration
     * @var string
     */
    public $date_latest_name_registration;
    /**
     * The apk_due_date
     * @var string
     */
    public $apk_due_date;
    /**
     * Constructor method for Car
     * @uses Car::setLicense_plate()
     * @uses Car::setCategory()
     * @uses Car::setBrand()
     * @uses Car::setModel()
     * @uses Car::setColors()
     * @uses Car::setFuel_type()
     * @uses Car::setCylinders()
     * @uses Car::setCylinder_capacity()
     * @uses Car::setSeats()
     * @uses Car::setStanding_room()
     * @uses Car::setUnladen_mass()
     * @uses Car::setGross_vehicle_mass()
     * @uses Car::setMass_ready()
     * @uses Car::setMaximum_mass_payload()
     * @uses Car::setMaximum_mass_unbraked()
     * @uses Car::setMaximum_mass_braked()
     * @uses Car::setMaximum_mass_trailer_braked()
     * @uses Car::setMaximum_mass_self_braked()
     * @uses Car::setMaximum_mass_axle_braked()
     * @uses Car::setDate_first_issuing()
     * @uses Car::setDate_first_admission()
     * @uses Car::setDate_latest_name_registration()
     * @uses Car::setApk_due_date()
     * @param string $license_plate
     * @param string $category
     * @param string $brand
     * @param string $model
     * @param string $colors
     * @param string $fuel_type
     * @param int $cylinders
     * @param int $cylinder_capacity
     * @param int $seats
     * @param int $standing_room
     * @param int $unladen_mass
     * @param int $gross_vehicle_mass
     * @param int $mass_ready
     * @param int $maximum_mass_payload
     * @param int $maximum_mass_unbraked
     * @param int $maximum_mass_braked
     * @param int $maximum_mass_trailer_braked
     * @param int $maximum_mass_self_braked
     * @param int $maximum_mass_axle_braked
     * @param string $date_first_issuing
     * @param string $date_first_admission
     * @param string $date_latest_name_registration
     * @param string $apk_due_date
     */
    public function __construct($license_plate = null, $category = null, $brand = null, $model = null, $colors = null, $fuel_type = null, $cylinders = null, $cylinder_capacity = null, $seats = null, $standing_room = null, $unladen_mass = null, $gross_vehicle_mass = null, $mass_ready = null, $maximum_mass_payload = null, $maximum_mass_unbraked = null, $maximum_mass_braked = null, $maximum_mass_trailer_braked = null, $maximum_mass_self_braked = null, $maximum_mass_axle_braked = null, $date_first_issuing = null, $date_first_admission = null, $date_latest_name_registration = null, $apk_due_date = null)
    {
        $this
            ->setLicense_plate($license_plate)
            ->setCategory($category)
            ->setBrand($brand)
            ->setModel($model)
            ->setColors($colors)
            ->setFuel_type($fuel_type)
            ->setCylinders($cylinders)
            ->setCylinder_capacity($cylinder_capacity)
            ->setSeats($seats)
            ->setStanding_room($standing_room)
            ->setUnladen_mass($unladen_mass)
            ->setGross_vehicle_mass($gross_vehicle_mass)
            ->setMass_ready($mass_ready)
            ->setMaximum_mass_payload($maximum_mass_payload)
            ->setMaximum_mass_unbraked($maximum_mass_unbraked)
            ->setMaximum_mass_braked($maximum_mass_braked)
            ->setMaximum_mass_trailer_braked($maximum_mass_trailer_braked)
            ->setMaximum_mass_self_braked($maximum_mass_self_braked)
            ->setMaximum_mass_axle_braked($maximum_mass_axle_braked)
            ->setDate_first_issuing($date_first_issuing)
            ->setDate_first_admission($date_first_admission)
            ->setDate_latest_name_registration($date_latest_name_registration)
            ->setApk_due_date($apk_due_date);
    }
    /**
     * Get license_plate value
     * @return string|null
     */
    public function getLicense_plate()
    {
        return $this->license_plate;
    }
    /**
     * Set license_plate value
     * @param string $license_plate
     * @return \Webservices\StructType\Car
     */
    public function setLicense_plate($license_plate = null)
    {
        // validation for constraint: string
        if (!is_null($license_plate) && !is_string($license_plate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($license_plate)), __LINE__);
        }
        $this->license_plate = $license_plate;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Webservices\StructType\Car
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * Set brand value
     * @param string $brand
     * @return \Webservices\StructType\Car
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        $this->brand = $brand;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \Webservices\StructType\Car
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Get colors value
     * @return string|null
     */
    public function getColors()
    {
        return $this->colors;
    }
    /**
     * Set colors value
     * @param string $colors
     * @return \Webservices\StructType\Car
     */
    public function setColors($colors = null)
    {
        // validation for constraint: string
        if (!is_null($colors) && !is_string($colors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($colors)), __LINE__);
        }
        $this->colors = $colors;
        return $this;
    }
    /**
     * Get fuel_type value
     * @return string|null
     */
    public function getFuel_type()
    {
        return $this->fuel_type;
    }
    /**
     * Set fuel_type value
     * @param string $fuel_type
     * @return \Webservices\StructType\Car
     */
    public function setFuel_type($fuel_type = null)
    {
        // validation for constraint: string
        if (!is_null($fuel_type) && !is_string($fuel_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuel_type)), __LINE__);
        }
        $this->fuel_type = $fuel_type;
        return $this;
    }
    /**
     * Get cylinders value
     * @return int|null
     */
    public function getCylinders()
    {
        return $this->cylinders;
    }
    /**
     * Set cylinders value
     * @param int $cylinders
     * @return \Webservices\StructType\Car
     */
    public function setCylinders($cylinders = null)
    {
        // validation for constraint: int
        if (!is_null($cylinders) && !is_numeric($cylinders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cylinders)), __LINE__);
        }
        $this->cylinders = $cylinders;
        return $this;
    }
    /**
     * Get cylinder_capacity value
     * @return int|null
     */
    public function getCylinder_capacity()
    {
        return $this->cylinder_capacity;
    }
    /**
     * Set cylinder_capacity value
     * @param int $cylinder_capacity
     * @return \Webservices\StructType\Car
     */
    public function setCylinder_capacity($cylinder_capacity = null)
    {
        // validation for constraint: int
        if (!is_null($cylinder_capacity) && !is_numeric($cylinder_capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cylinder_capacity)), __LINE__);
        }
        $this->cylinder_capacity = $cylinder_capacity;
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
     * @return \Webservices\StructType\Car
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
     * @return \Webservices\StructType\Car
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
     * Get unladen_mass value
     * @return int|null
     */
    public function getUnladen_mass()
    {
        return $this->unladen_mass;
    }
    /**
     * Set unladen_mass value
     * @param int $unladen_mass
     * @return \Webservices\StructType\Car
     */
    public function setUnladen_mass($unladen_mass = null)
    {
        // validation for constraint: int
        if (!is_null($unladen_mass) && !is_numeric($unladen_mass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unladen_mass)), __LINE__);
        }
        $this->unladen_mass = $unladen_mass;
        return $this;
    }
    /**
     * Get gross_vehicle_mass value
     * @return int|null
     */
    public function getGross_vehicle_mass()
    {
        return $this->gross_vehicle_mass;
    }
    /**
     * Set gross_vehicle_mass value
     * @param int $gross_vehicle_mass
     * @return \Webservices\StructType\Car
     */
    public function setGross_vehicle_mass($gross_vehicle_mass = null)
    {
        // validation for constraint: int
        if (!is_null($gross_vehicle_mass) && !is_numeric($gross_vehicle_mass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gross_vehicle_mass)), __LINE__);
        }
        $this->gross_vehicle_mass = $gross_vehicle_mass;
        return $this;
    }
    /**
     * Get mass_ready value
     * @return int|null
     */
    public function getMass_ready()
    {
        return $this->mass_ready;
    }
    /**
     * Set mass_ready value
     * @param int $mass_ready
     * @return \Webservices\StructType\Car
     */
    public function setMass_ready($mass_ready = null)
    {
        // validation for constraint: int
        if (!is_null($mass_ready) && !is_numeric($mass_ready)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mass_ready)), __LINE__);
        }
        $this->mass_ready = $mass_ready;
        return $this;
    }
    /**
     * Get maximum_mass_payload value
     * @return int|null
     */
    public function getMaximum_mass_payload()
    {
        return $this->maximum_mass_payload;
    }
    /**
     * Set maximum_mass_payload value
     * @param int $maximum_mass_payload
     * @return \Webservices\StructType\Car
     */
    public function setMaximum_mass_payload($maximum_mass_payload = null)
    {
        // validation for constraint: int
        if (!is_null($maximum_mass_payload) && !is_numeric($maximum_mass_payload)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximum_mass_payload)), __LINE__);
        }
        $this->maximum_mass_payload = $maximum_mass_payload;
        return $this;
    }
    /**
     * Get maximum_mass_unbraked value
     * @return int|null
     */
    public function getMaximum_mass_unbraked()
    {
        return $this->maximum_mass_unbraked;
    }
    /**
     * Set maximum_mass_unbraked value
     * @param int $maximum_mass_unbraked
     * @return \Webservices\StructType\Car
     */
    public function setMaximum_mass_unbraked($maximum_mass_unbraked = null)
    {
        // validation for constraint: int
        if (!is_null($maximum_mass_unbraked) && !is_numeric($maximum_mass_unbraked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximum_mass_unbraked)), __LINE__);
        }
        $this->maximum_mass_unbraked = $maximum_mass_unbraked;
        return $this;
    }
    /**
     * Get maximum_mass_braked value
     * @return int|null
     */
    public function getMaximum_mass_braked()
    {
        return $this->maximum_mass_braked;
    }
    /**
     * Set maximum_mass_braked value
     * @param int $maximum_mass_braked
     * @return \Webservices\StructType\Car
     */
    public function setMaximum_mass_braked($maximum_mass_braked = null)
    {
        // validation for constraint: int
        if (!is_null($maximum_mass_braked) && !is_numeric($maximum_mass_braked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximum_mass_braked)), __LINE__);
        }
        $this->maximum_mass_braked = $maximum_mass_braked;
        return $this;
    }
    /**
     * Get maximum_mass_trailer_braked value
     * @return int|null
     */
    public function getMaximum_mass_trailer_braked()
    {
        return $this->maximum_mass_trailer_braked;
    }
    /**
     * Set maximum_mass_trailer_braked value
     * @param int $maximum_mass_trailer_braked
     * @return \Webservices\StructType\Car
     */
    public function setMaximum_mass_trailer_braked($maximum_mass_trailer_braked = null)
    {
        // validation for constraint: int
        if (!is_null($maximum_mass_trailer_braked) && !is_numeric($maximum_mass_trailer_braked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximum_mass_trailer_braked)), __LINE__);
        }
        $this->maximum_mass_trailer_braked = $maximum_mass_trailer_braked;
        return $this;
    }
    /**
     * Get maximum_mass_self_braked value
     * @return int|null
     */
    public function getMaximum_mass_self_braked()
    {
        return $this->maximum_mass_self_braked;
    }
    /**
     * Set maximum_mass_self_braked value
     * @param int $maximum_mass_self_braked
     * @return \Webservices\StructType\Car
     */
    public function setMaximum_mass_self_braked($maximum_mass_self_braked = null)
    {
        // validation for constraint: int
        if (!is_null($maximum_mass_self_braked) && !is_numeric($maximum_mass_self_braked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximum_mass_self_braked)), __LINE__);
        }
        $this->maximum_mass_self_braked = $maximum_mass_self_braked;
        return $this;
    }
    /**
     * Get maximum_mass_axle_braked value
     * @return int|null
     */
    public function getMaximum_mass_axle_braked()
    {
        return $this->maximum_mass_axle_braked;
    }
    /**
     * Set maximum_mass_axle_braked value
     * @param int $maximum_mass_axle_braked
     * @return \Webservices\StructType\Car
     */
    public function setMaximum_mass_axle_braked($maximum_mass_axle_braked = null)
    {
        // validation for constraint: int
        if (!is_null($maximum_mass_axle_braked) && !is_numeric($maximum_mass_axle_braked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximum_mass_axle_braked)), __LINE__);
        }
        $this->maximum_mass_axle_braked = $maximum_mass_axle_braked;
        return $this;
    }
    /**
     * Get date_first_issuing value
     * @return string|null
     */
    public function getDate_first_issuing()
    {
        return $this->date_first_issuing;
    }
    /**
     * Set date_first_issuing value
     * @param string $date_first_issuing
     * @return \Webservices\StructType\Car
     */
    public function setDate_first_issuing($date_first_issuing = null)
    {
        // validation for constraint: string
        if (!is_null($date_first_issuing) && !is_string($date_first_issuing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_first_issuing)), __LINE__);
        }
        $this->date_first_issuing = $date_first_issuing;
        return $this;
    }
    /**
     * Get date_first_admission value
     * @return string|null
     */
    public function getDate_first_admission()
    {
        return $this->date_first_admission;
    }
    /**
     * Set date_first_admission value
     * @param string $date_first_admission
     * @return \Webservices\StructType\Car
     */
    public function setDate_first_admission($date_first_admission = null)
    {
        // validation for constraint: string
        if (!is_null($date_first_admission) && !is_string($date_first_admission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_first_admission)), __LINE__);
        }
        $this->date_first_admission = $date_first_admission;
        return $this;
    }
    /**
     * Get date_latest_name_registration value
     * @return string|null
     */
    public function getDate_latest_name_registration()
    {
        return $this->date_latest_name_registration;
    }
    /**
     * Set date_latest_name_registration value
     * @param string $date_latest_name_registration
     * @return \Webservices\StructType\Car
     */
    public function setDate_latest_name_registration($date_latest_name_registration = null)
    {
        // validation for constraint: string
        if (!is_null($date_latest_name_registration) && !is_string($date_latest_name_registration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_latest_name_registration)), __LINE__);
        }
        $this->date_latest_name_registration = $date_latest_name_registration;
        return $this;
    }
    /**
     * Get apk_due_date value
     * @return string|null
     */
    public function getApk_due_date()
    {
        return $this->apk_due_date;
    }
    /**
     * Set apk_due_date value
     * @param string $apk_due_date
     * @return \Webservices\StructType\Car
     */
    public function setApk_due_date($apk_due_date = null)
    {
        // validation for constraint: string
        if (!is_null($apk_due_date) && !is_string($apk_due_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($apk_due_date)), __LINE__);
        }
        $this->apk_due_date = $apk_due_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Car
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
