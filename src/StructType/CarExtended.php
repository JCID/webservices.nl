<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarExtended StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarExtended extends AbstractStructBase
{
    /**
     * The license_plate
     * @var string
     */
    public $license_plate;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The check_code_status
     * @var bool
     */
    public $check_code_status;
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
     * The brand_code
     * @var string
     */
    public $brand_code;
    /**
     * The model
     * @var \Webservices\ArrayType\StringArray
     */
    public $model;
    /**
     * The body_style
     * @var string
     */
    public $body_style;
    /**
     * The colors
     * @var \Webservices\ArrayType\StringArray
     */
    public $colors;
    /**
     * The fuel_types
     * @var \Webservices\ArrayType\StringArray
     */
    public $fuel_types;
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
     * The bpm
     * @var int
     */
    public $bpm;
    /**
     * The power
     * @var int
     */
    public $power;
    /**
     * The g3_indicator
     * @var string
     */
    public $g3_indicator;
    /**
     * The particulate_filter
     * @var string
     */
    public $particulate_filter;
    /**
     * The co2_emission_combined
     * @var string
     */
    public $co2_emission_combined;
    /**
     * The emission_code
     * @var string
     */
    public $emission_code;
    /**
     * The top_speed
     * @var int
     */
    public $top_speed;
    /**
     * The fuel_consumption_city
     * @var string
     */
    public $fuel_consumption_city;
    /**
     * The fuel_consumption_freeway
     * @var string
     */
    public $fuel_consumption_freeway;
    /**
     * The fuel_consumption_combined
     * @var string
     */
    public $fuel_consumption_combined;
    /**
     * The energy_label
     * @var string
     */
    public $energy_label;
    /**
     * The stolen
     * @var bool
     */
    public $stolen;
    /**
     * The insured
     * @var bool
     */
    public $insured;
    /**
     * The license_plate_signal
     * @var bool
     */
    public $license_plate_signal;
    /**
     * The awaiting_inspection
     * @var bool
     */
    public $awaiting_inspection;
    /**
     * The catalog_price
     * @var string
     */
    public $catalog_price;
    /**
     * The european_type_approval_mark
     * @var string
     */
    public $european_type_approval_mark;
    /**
     * The types
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CarTypeArray
     */
    public $types;
    /**
     * Constructor method for CarExtended
     * @uses CarExtended::setLicense_plate()
     * @uses CarExtended::setCode()
     * @uses CarExtended::setCheck_code_status()
     * @uses CarExtended::setCategory()
     * @uses CarExtended::setBrand()
     * @uses CarExtended::setBrand_code()
     * @uses CarExtended::setModel()
     * @uses CarExtended::setBody_style()
     * @uses CarExtended::setColors()
     * @uses CarExtended::setFuel_types()
     * @uses CarExtended::setCylinders()
     * @uses CarExtended::setCylinder_capacity()
     * @uses CarExtended::setSeats()
     * @uses CarExtended::setStanding_room()
     * @uses CarExtended::setUnladen_mass()
     * @uses CarExtended::setGross_vehicle_mass()
     * @uses CarExtended::setMass_ready()
     * @uses CarExtended::setMaximum_mass_payload()
     * @uses CarExtended::setMaximum_mass_unbraked()
     * @uses CarExtended::setMaximum_mass_braked()
     * @uses CarExtended::setMaximum_mass_trailer_braked()
     * @uses CarExtended::setMaximum_mass_self_braked()
     * @uses CarExtended::setMaximum_mass_axle_braked()
     * @uses CarExtended::setDate_first_issuing()
     * @uses CarExtended::setDate_first_admission()
     * @uses CarExtended::setDate_latest_name_registration()
     * @uses CarExtended::setApk_due_date()
     * @uses CarExtended::setBpm()
     * @uses CarExtended::setPower()
     * @uses CarExtended::setG3_indicator()
     * @uses CarExtended::setParticulate_filter()
     * @uses CarExtended::setCo2_emission_combined()
     * @uses CarExtended::setEmission_code()
     * @uses CarExtended::setTop_speed()
     * @uses CarExtended::setFuel_consumption_city()
     * @uses CarExtended::setFuel_consumption_freeway()
     * @uses CarExtended::setFuel_consumption_combined()
     * @uses CarExtended::setEnergy_label()
     * @uses CarExtended::setStolen()
     * @uses CarExtended::setInsured()
     * @uses CarExtended::setLicense_plate_signal()
     * @uses CarExtended::setAwaiting_inspection()
     * @uses CarExtended::setCatalog_price()
     * @uses CarExtended::setEuropean_type_approval_mark()
     * @uses CarExtended::setTypes()
     * @param string $license_plate
     * @param string $code
     * @param bool $check_code_status
     * @param string $category
     * @param string $brand
     * @param string $brand_code
     * @param \Webservices\ArrayType\StringArray $model
     * @param string $body_style
     * @param \Webservices\ArrayType\StringArray $colors
     * @param \Webservices\ArrayType\StringArray $fuel_types
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
     * @param int $bpm
     * @param int $power
     * @param string $g3_indicator
     * @param string $particulate_filter
     * @param string $co2_emission_combined
     * @param string $emission_code
     * @param int $top_speed
     * @param string $fuel_consumption_city
     * @param string $fuel_consumption_freeway
     * @param string $fuel_consumption_combined
     * @param string $energy_label
     * @param bool $stolen
     * @param bool $insured
     * @param bool $license_plate_signal
     * @param bool $awaiting_inspection
     * @param string $catalog_price
     * @param string $european_type_approval_mark
     * @param \Webservices\ArrayType\CarTypeArray $types
     */
    public function __construct($license_plate = null, $code = null, $check_code_status = null, $category = null, $brand = null, $brand_code = null, \Webservices\ArrayType\StringArray $model = null, $body_style = null, \Webservices\ArrayType\StringArray $colors = null, \Webservices\ArrayType\StringArray $fuel_types = null, $cylinders = null, $cylinder_capacity = null, $seats = null, $standing_room = null, $unladen_mass = null, $gross_vehicle_mass = null, $mass_ready = null, $maximum_mass_payload = null, $maximum_mass_unbraked = null, $maximum_mass_braked = null, $maximum_mass_trailer_braked = null, $maximum_mass_self_braked = null, $maximum_mass_axle_braked = null, $date_first_issuing = null, $date_first_admission = null, $date_latest_name_registration = null, $apk_due_date = null, $bpm = null, $power = null, $g3_indicator = null, $particulate_filter = null, $co2_emission_combined = null, $emission_code = null, $top_speed = null, $fuel_consumption_city = null, $fuel_consumption_freeway = null, $fuel_consumption_combined = null, $energy_label = null, $stolen = null, $insured = null, $license_plate_signal = null, $awaiting_inspection = null, $catalog_price = null, $european_type_approval_mark = null, \Webservices\ArrayType\CarTypeArray $types = null)
    {
        $this
            ->setLicense_plate($license_plate)
            ->setCode($code)
            ->setCheck_code_status($check_code_status)
            ->setCategory($category)
            ->setBrand($brand)
            ->setBrand_code($brand_code)
            ->setModel($model)
            ->setBody_style($body_style)
            ->setColors($colors)
            ->setFuel_types($fuel_types)
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
            ->setApk_due_date($apk_due_date)
            ->setBpm($bpm)
            ->setPower($power)
            ->setG3_indicator($g3_indicator)
            ->setParticulate_filter($particulate_filter)
            ->setCo2_emission_combined($co2_emission_combined)
            ->setEmission_code($emission_code)
            ->setTop_speed($top_speed)
            ->setFuel_consumption_city($fuel_consumption_city)
            ->setFuel_consumption_freeway($fuel_consumption_freeway)
            ->setFuel_consumption_combined($fuel_consumption_combined)
            ->setEnergy_label($energy_label)
            ->setStolen($stolen)
            ->setInsured($insured)
            ->setLicense_plate_signal($license_plate_signal)
            ->setAwaiting_inspection($awaiting_inspection)
            ->setCatalog_price($catalog_price)
            ->setEuropean_type_approval_mark($european_type_approval_mark)
            ->setTypes($types);
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
     * @return \Webservices\StructType\CarExtended
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
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Webservices\StructType\CarExtended
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get check_code_status value
     * @return bool|null
     */
    public function getCheck_code_status()
    {
        return $this->check_code_status;
    }
    /**
     * Set check_code_status value
     * @param bool $check_code_status
     * @return \Webservices\StructType\CarExtended
     */
    public function setCheck_code_status($check_code_status = null)
    {
        // validation for constraint: boolean
        if (!is_null($check_code_status) && !is_bool($check_code_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($check_code_status)), __LINE__);
        }
        $this->check_code_status = $check_code_status;
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * Get brand_code value
     * @return string|null
     */
    public function getBrand_code()
    {
        return $this->brand_code;
    }
    /**
     * Set brand_code value
     * @param string $brand_code
     * @return \Webservices\StructType\CarExtended
     */
    public function setBrand_code($brand_code = null)
    {
        // validation for constraint: string
        if (!is_null($brand_code) && !is_string($brand_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand_code)), __LINE__);
        }
        $this->brand_code = $brand_code;
        return $this;
    }
    /**
     * Get model value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param \Webservices\ArrayType\StringArray $model
     * @return \Webservices\StructType\CarExtended
     */
    public function setModel(\Webservices\ArrayType\StringArray $model = null)
    {
        $this->model = $model;
        return $this;
    }
    /**
     * Get body_style value
     * @return string|null
     */
    public function getBody_style()
    {
        return $this->body_style;
    }
    /**
     * Set body_style value
     * @param string $body_style
     * @return \Webservices\StructType\CarExtended
     */
    public function setBody_style($body_style = null)
    {
        // validation for constraint: string
        if (!is_null($body_style) && !is_string($body_style)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($body_style)), __LINE__);
        }
        $this->body_style = $body_style;
        return $this;
    }
    /**
     * Get colors value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getColors()
    {
        return $this->colors;
    }
    /**
     * Set colors value
     * @param \Webservices\ArrayType\StringArray $colors
     * @return \Webservices\StructType\CarExtended
     */
    public function setColors(\Webservices\ArrayType\StringArray $colors = null)
    {
        $this->colors = $colors;
        return $this;
    }
    /**
     * Get fuel_types value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getFuel_types()
    {
        return $this->fuel_types;
    }
    /**
     * Set fuel_types value
     * @param \Webservices\ArrayType\StringArray $fuel_types
     * @return \Webservices\StructType\CarExtended
     */
    public function setFuel_types(\Webservices\ArrayType\StringArray $fuel_types = null)
    {
        $this->fuel_types = $fuel_types;
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * @return \Webservices\StructType\CarExtended
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
     * Get bpm value
     * @return int|null
     */
    public function getBpm()
    {
        return $this->bpm;
    }
    /**
     * Set bpm value
     * @param int $bpm
     * @return \Webservices\StructType\CarExtended
     */
    public function setBpm($bpm = null)
    {
        // validation for constraint: int
        if (!is_null($bpm) && !is_numeric($bpm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bpm)), __LINE__);
        }
        $this->bpm = $bpm;
        return $this;
    }
    /**
     * Get power value
     * @return int|null
     */
    public function getPower()
    {
        return $this->power;
    }
    /**
     * Set power value
     * @param int $power
     * @return \Webservices\StructType\CarExtended
     */
    public function setPower($power = null)
    {
        // validation for constraint: int
        if (!is_null($power) && !is_numeric($power)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($power)), __LINE__);
        }
        $this->power = $power;
        return $this;
    }
    /**
     * Get g3_indicator value
     * @return string|null
     */
    public function getG3_indicator()
    {
        return $this->g3_indicator;
    }
    /**
     * Set g3_indicator value
     * @param string $g3_indicator
     * @return \Webservices\StructType\CarExtended
     */
    public function setG3_indicator($g3_indicator = null)
    {
        // validation for constraint: string
        if (!is_null($g3_indicator) && !is_string($g3_indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($g3_indicator)), __LINE__);
        }
        $this->g3_indicator = $g3_indicator;
        return $this;
    }
    /**
     * Get particulate_filter value
     * @return string|null
     */
    public function getParticulate_filter()
    {
        return $this->particulate_filter;
    }
    /**
     * Set particulate_filter value
     * @param string $particulate_filter
     * @return \Webservices\StructType\CarExtended
     */
    public function setParticulate_filter($particulate_filter = null)
    {
        // validation for constraint: string
        if (!is_null($particulate_filter) && !is_string($particulate_filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($particulate_filter)), __LINE__);
        }
        $this->particulate_filter = $particulate_filter;
        return $this;
    }
    /**
     * Get co2_emission_combined value
     * @return string|null
     */
    public function getCo2_emission_combined()
    {
        return $this->co2_emission_combined;
    }
    /**
     * Set co2_emission_combined value
     * @param string $co2_emission_combined
     * @return \Webservices\StructType\CarExtended
     */
    public function setCo2_emission_combined($co2_emission_combined = null)
    {
        // validation for constraint: string
        if (!is_null($co2_emission_combined) && !is_string($co2_emission_combined)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($co2_emission_combined)), __LINE__);
        }
        $this->co2_emission_combined = $co2_emission_combined;
        return $this;
    }
    /**
     * Get emission_code value
     * @return string|null
     */
    public function getEmission_code()
    {
        return $this->emission_code;
    }
    /**
     * Set emission_code value
     * @param string $emission_code
     * @return \Webservices\StructType\CarExtended
     */
    public function setEmission_code($emission_code = null)
    {
        // validation for constraint: string
        if (!is_null($emission_code) && !is_string($emission_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emission_code)), __LINE__);
        }
        $this->emission_code = $emission_code;
        return $this;
    }
    /**
     * Get top_speed value
     * @return int|null
     */
    public function getTop_speed()
    {
        return $this->top_speed;
    }
    /**
     * Set top_speed value
     * @param int $top_speed
     * @return \Webservices\StructType\CarExtended
     */
    public function setTop_speed($top_speed = null)
    {
        // validation for constraint: int
        if (!is_null($top_speed) && !is_numeric($top_speed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($top_speed)), __LINE__);
        }
        $this->top_speed = $top_speed;
        return $this;
    }
    /**
     * Get fuel_consumption_city value
     * @return string|null
     */
    public function getFuel_consumption_city()
    {
        return $this->fuel_consumption_city;
    }
    /**
     * Set fuel_consumption_city value
     * @param string $fuel_consumption_city
     * @return \Webservices\StructType\CarExtended
     */
    public function setFuel_consumption_city($fuel_consumption_city = null)
    {
        // validation for constraint: string
        if (!is_null($fuel_consumption_city) && !is_string($fuel_consumption_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuel_consumption_city)), __LINE__);
        }
        $this->fuel_consumption_city = $fuel_consumption_city;
        return $this;
    }
    /**
     * Get fuel_consumption_freeway value
     * @return string|null
     */
    public function getFuel_consumption_freeway()
    {
        return $this->fuel_consumption_freeway;
    }
    /**
     * Set fuel_consumption_freeway value
     * @param string $fuel_consumption_freeway
     * @return \Webservices\StructType\CarExtended
     */
    public function setFuel_consumption_freeway($fuel_consumption_freeway = null)
    {
        // validation for constraint: string
        if (!is_null($fuel_consumption_freeway) && !is_string($fuel_consumption_freeway)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuel_consumption_freeway)), __LINE__);
        }
        $this->fuel_consumption_freeway = $fuel_consumption_freeway;
        return $this;
    }
    /**
     * Get fuel_consumption_combined value
     * @return string|null
     */
    public function getFuel_consumption_combined()
    {
        return $this->fuel_consumption_combined;
    }
    /**
     * Set fuel_consumption_combined value
     * @param string $fuel_consumption_combined
     * @return \Webservices\StructType\CarExtended
     */
    public function setFuel_consumption_combined($fuel_consumption_combined = null)
    {
        // validation for constraint: string
        if (!is_null($fuel_consumption_combined) && !is_string($fuel_consumption_combined)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuel_consumption_combined)), __LINE__);
        }
        $this->fuel_consumption_combined = $fuel_consumption_combined;
        return $this;
    }
    /**
     * Get energy_label value
     * @return string|null
     */
    public function getEnergy_label()
    {
        return $this->energy_label;
    }
    /**
     * Set energy_label value
     * @param string $energy_label
     * @return \Webservices\StructType\CarExtended
     */
    public function setEnergy_label($energy_label = null)
    {
        // validation for constraint: string
        if (!is_null($energy_label) && !is_string($energy_label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($energy_label)), __LINE__);
        }
        $this->energy_label = $energy_label;
        return $this;
    }
    /**
     * Get stolen value
     * @return bool|null
     */
    public function getStolen()
    {
        return $this->stolen;
    }
    /**
     * Set stolen value
     * @param bool $stolen
     * @return \Webservices\StructType\CarExtended
     */
    public function setStolen($stolen = null)
    {
        // validation for constraint: boolean
        if (!is_null($stolen) && !is_bool($stolen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stolen)), __LINE__);
        }
        $this->stolen = $stolen;
        return $this;
    }
    /**
     * Get insured value
     * @return bool|null
     */
    public function getInsured()
    {
        return $this->insured;
    }
    /**
     * Set insured value
     * @param bool $insured
     * @return \Webservices\StructType\CarExtended
     */
    public function setInsured($insured = null)
    {
        // validation for constraint: boolean
        if (!is_null($insured) && !is_bool($insured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insured)), __LINE__);
        }
        $this->insured = $insured;
        return $this;
    }
    /**
     * Get license_plate_signal value
     * @return bool|null
     */
    public function getLicense_plate_signal()
    {
        return $this->license_plate_signal;
    }
    /**
     * Set license_plate_signal value
     * @param bool $license_plate_signal
     * @return \Webservices\StructType\CarExtended
     */
    public function setLicense_plate_signal($license_plate_signal = null)
    {
        // validation for constraint: boolean
        if (!is_null($license_plate_signal) && !is_bool($license_plate_signal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($license_plate_signal)), __LINE__);
        }
        $this->license_plate_signal = $license_plate_signal;
        return $this;
    }
    /**
     * Get awaiting_inspection value
     * @return bool|null
     */
    public function getAwaiting_inspection()
    {
        return $this->awaiting_inspection;
    }
    /**
     * Set awaiting_inspection value
     * @param bool $awaiting_inspection
     * @return \Webservices\StructType\CarExtended
     */
    public function setAwaiting_inspection($awaiting_inspection = null)
    {
        // validation for constraint: boolean
        if (!is_null($awaiting_inspection) && !is_bool($awaiting_inspection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($awaiting_inspection)), __LINE__);
        }
        $this->awaiting_inspection = $awaiting_inspection;
        return $this;
    }
    /**
     * Get catalog_price value
     * @return string|null
     */
    public function getCatalog_price()
    {
        return $this->catalog_price;
    }
    /**
     * Set catalog_price value
     * @param string $catalog_price
     * @return \Webservices\StructType\CarExtended
     */
    public function setCatalog_price($catalog_price = null)
    {
        // validation for constraint: string
        if (!is_null($catalog_price) && !is_string($catalog_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($catalog_price)), __LINE__);
        }
        $this->catalog_price = $catalog_price;
        return $this;
    }
    /**
     * Get european_type_approval_mark value
     * @return string|null
     */
    public function getEuropean_type_approval_mark()
    {
        return $this->european_type_approval_mark;
    }
    /**
     * Set european_type_approval_mark value
     * @param string $european_type_approval_mark
     * @return \Webservices\StructType\CarExtended
     */
    public function setEuropean_type_approval_mark($european_type_approval_mark = null)
    {
        // validation for constraint: string
        if (!is_null($european_type_approval_mark) && !is_string($european_type_approval_mark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($european_type_approval_mark)), __LINE__);
        }
        $this->european_type_approval_mark = $european_type_approval_mark;
        return $this;
    }
    /**
     * Get types value
     * @return \Webservices\ArrayType\CarTypeArray|null
     */
    public function getTypes()
    {
        return $this->types;
    }
    /**
     * Set types value
     * @param \Webservices\ArrayType\CarTypeArray $types
     * @return \Webservices\StructType\CarExtended
     */
    public function setTypes(\Webservices\ArrayType\CarTypeArray $types = null)
    {
        $this->types = $types;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarExtended
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
