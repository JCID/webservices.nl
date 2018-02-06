<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEBasicTypeData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEBasicTypeData extends AbstractStructBase
{
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $category;
    /**
     * The brand_rdw
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand_rdw;
    /**
     * The brand_atl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand_atl;
    /**
     * The model_rdw
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $model_rdw;
    /**
     * The model_atl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $model_atl;
    /**
     * The short_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $short_type;
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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $cylinders;
    /**
     * The cylinder_capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $cylinder_capacity;
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
     * The unladen_mass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $unladen_mass;
    /**
     * The gross_vehicle_mass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $gross_vehicle_mass;
    /**
     * The maximum_mass_payload
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_mass_payload;
    /**
     * The date_first_issuing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_first_issuing;
    /**
     * The date_first_admission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_first_admission;
    /**
     * The date_latest_name_registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_latest_name_registration;
    /**
     * The apk_due_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $apk_due_date;
    /**
     * The bpm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $bpm;
    /**
     * The bpm_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bpm_currency;
    /**
     * The power
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $power;
    /**
     * The g3_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $g3_indication;
    /**
     * The co2_emission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $co2_emission;
    /**
     * The emission_particles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $emission_particles;
    /**
     * The energy_label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $energy_label;
    /**
     * The emission_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $emission_code;
    /**
     * The interior_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $interior_code;
    /**
     * The interior_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $interior_description;
    /**
     * The doors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $doors;
    /**
     * The tax_write_off
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $tax_write_off;
    /**
     * The parallel_import
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $parallel_import;
    /**
     * The license_plate_signal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $license_plate_signal;
    /**
     * The gear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gear;
    /**
     * The brand_approval
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand_approval;
    /**
     * The top_speed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $top_speed;
    /**
     * The types
     * @var \Webservices\ArrayType\CarVWEVersionPriceReferenceArray
     */
    public $types;
    /**
     * Constructor method for CarVWEBasicTypeData
     * @uses CarVWEBasicTypeData::setCategory()
     * @uses CarVWEBasicTypeData::setBrand_rdw()
     * @uses CarVWEBasicTypeData::setBrand_atl()
     * @uses CarVWEBasicTypeData::setModel_rdw()
     * @uses CarVWEBasicTypeData::setModel_atl()
     * @uses CarVWEBasicTypeData::setShort_type()
     * @uses CarVWEBasicTypeData::setColors()
     * @uses CarVWEBasicTypeData::setFuel_types()
     * @uses CarVWEBasicTypeData::setCylinders()
     * @uses CarVWEBasicTypeData::setCylinder_capacity()
     * @uses CarVWEBasicTypeData::setSeats()
     * @uses CarVWEBasicTypeData::setStanding_room()
     * @uses CarVWEBasicTypeData::setUnladen_mass()
     * @uses CarVWEBasicTypeData::setGross_vehicle_mass()
     * @uses CarVWEBasicTypeData::setMaximum_mass_payload()
     * @uses CarVWEBasicTypeData::setDate_first_issuing()
     * @uses CarVWEBasicTypeData::setDate_first_admission()
     * @uses CarVWEBasicTypeData::setDate_latest_name_registration()
     * @uses CarVWEBasicTypeData::setApk_due_date()
     * @uses CarVWEBasicTypeData::setBpm()
     * @uses CarVWEBasicTypeData::setBpm_currency()
     * @uses CarVWEBasicTypeData::setPower()
     * @uses CarVWEBasicTypeData::setG3_indication()
     * @uses CarVWEBasicTypeData::setCo2_emission()
     * @uses CarVWEBasicTypeData::setEmission_particles()
     * @uses CarVWEBasicTypeData::setEnergy_label()
     * @uses CarVWEBasicTypeData::setEmission_code()
     * @uses CarVWEBasicTypeData::setInterior_code()
     * @uses CarVWEBasicTypeData::setInterior_description()
     * @uses CarVWEBasicTypeData::setDoors()
     * @uses CarVWEBasicTypeData::setTax_write_off()
     * @uses CarVWEBasicTypeData::setParallel_import()
     * @uses CarVWEBasicTypeData::setLicense_plate_signal()
     * @uses CarVWEBasicTypeData::setGear()
     * @uses CarVWEBasicTypeData::setBrand_approval()
     * @uses CarVWEBasicTypeData::setTop_speed()
     * @uses CarVWEBasicTypeData::setTypes()
     * @param string $category
     * @param string $brand_rdw
     * @param string $brand_atl
     * @param string $model_rdw
     * @param string $model_atl
     * @param string $short_type
     * @param \Webservices\ArrayType\StringArray $colors
     * @param \Webservices\ArrayType\StringArray $fuel_types
     * @param int $cylinders
     * @param int $cylinder_capacity
     * @param int $seats
     * @param int $standing_room
     * @param int $unladen_mass
     * @param int $gross_vehicle_mass
     * @param int $maximum_mass_payload
     * @param string $date_first_issuing
     * @param string $date_first_admission
     * @param string $date_latest_name_registration
     * @param string $apk_due_date
     * @param int $bpm
     * @param string $bpm_currency
     * @param int $power
     * @param bool $g3_indication
     * @param int $co2_emission
     * @param string $emission_particles
     * @param string $energy_label
     * @param string $emission_code
     * @param string $interior_code
     * @param string $interior_description
     * @param int $doors
     * @param string $tax_write_off
     * @param bool $parallel_import
     * @param string $license_plate_signal
     * @param string $gear
     * @param string $brand_approval
     * @param int $top_speed
     * @param \Webservices\ArrayType\CarVWEVersionPriceReferenceArray $types
     */
    public function __construct($category = null, $brand_rdw = null, $brand_atl = null, $model_rdw = null, $model_atl = null, $short_type = null, \Webservices\ArrayType\StringArray $colors = null, \Webservices\ArrayType\StringArray $fuel_types = null, $cylinders = null, $cylinder_capacity = null, $seats = null, $standing_room = null, $unladen_mass = null, $gross_vehicle_mass = null, $maximum_mass_payload = null, $date_first_issuing = null, $date_first_admission = null, $date_latest_name_registration = null, $apk_due_date = null, $bpm = null, $bpm_currency = null, $power = null, $g3_indication = null, $co2_emission = null, $emission_particles = null, $energy_label = null, $emission_code = null, $interior_code = null, $interior_description = null, $doors = null, $tax_write_off = null, $parallel_import = null, $license_plate_signal = null, $gear = null, $brand_approval = null, $top_speed = null, \Webservices\ArrayType\CarVWEVersionPriceReferenceArray $types = null)
    {
        $this
            ->setCategory($category)
            ->setBrand_rdw($brand_rdw)
            ->setBrand_atl($brand_atl)
            ->setModel_rdw($model_rdw)
            ->setModel_atl($model_atl)
            ->setShort_type($short_type)
            ->setColors($colors)
            ->setFuel_types($fuel_types)
            ->setCylinders($cylinders)
            ->setCylinder_capacity($cylinder_capacity)
            ->setSeats($seats)
            ->setStanding_room($standing_room)
            ->setUnladen_mass($unladen_mass)
            ->setGross_vehicle_mass($gross_vehicle_mass)
            ->setMaximum_mass_payload($maximum_mass_payload)
            ->setDate_first_issuing($date_first_issuing)
            ->setDate_first_admission($date_first_admission)
            ->setDate_latest_name_registration($date_latest_name_registration)
            ->setApk_due_date($apk_due_date)
            ->setBpm($bpm)
            ->setBpm_currency($bpm_currency)
            ->setPower($power)
            ->setG3_indication($g3_indication)
            ->setCo2_emission($co2_emission)
            ->setEmission_particles($emission_particles)
            ->setEnergy_label($energy_label)
            ->setEmission_code($emission_code)
            ->setInterior_code($interior_code)
            ->setInterior_description($interior_description)
            ->setDoors($doors)
            ->setTax_write_off($tax_write_off)
            ->setParallel_import($parallel_import)
            ->setLicense_plate_signal($license_plate_signal)
            ->setGear($gear)
            ->setBrand_approval($brand_approval)
            ->setTop_speed($top_speed)
            ->setTypes($types);
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * Get brand_rdw value
     * @return string|null
     */
    public function getBrand_rdw()
    {
        return $this->brand_rdw;
    }
    /**
     * Set brand_rdw value
     * @param string $brand_rdw
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setBrand_rdw($brand_rdw = null)
    {
        // validation for constraint: string
        if (!is_null($brand_rdw) && !is_string($brand_rdw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand_rdw)), __LINE__);
        }
        $this->brand_rdw = $brand_rdw;
        return $this;
    }
    /**
     * Get brand_atl value
     * @return string|null
     */
    public function getBrand_atl()
    {
        return $this->brand_atl;
    }
    /**
     * Set brand_atl value
     * @param string $brand_atl
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setBrand_atl($brand_atl = null)
    {
        // validation for constraint: string
        if (!is_null($brand_atl) && !is_string($brand_atl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand_atl)), __LINE__);
        }
        $this->brand_atl = $brand_atl;
        return $this;
    }
    /**
     * Get model_rdw value
     * @return string|null
     */
    public function getModel_rdw()
    {
        return $this->model_rdw;
    }
    /**
     * Set model_rdw value
     * @param string $model_rdw
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setModel_rdw($model_rdw = null)
    {
        // validation for constraint: string
        if (!is_null($model_rdw) && !is_string($model_rdw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model_rdw)), __LINE__);
        }
        $this->model_rdw = $model_rdw;
        return $this;
    }
    /**
     * Get model_atl value
     * @return string|null
     */
    public function getModel_atl()
    {
        return $this->model_atl;
    }
    /**
     * Set model_atl value
     * @param string $model_atl
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setModel_atl($model_atl = null)
    {
        // validation for constraint: string
        if (!is_null($model_atl) && !is_string($model_atl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model_atl)), __LINE__);
        }
        $this->model_atl = $model_atl;
        return $this;
    }
    /**
     * Get short_type value
     * @return string|null
     */
    public function getShort_type()
    {
        return $this->short_type;
    }
    /**
     * Set short_type value
     * @param string $short_type
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setShort_type($short_type = null)
    {
        // validation for constraint: string
        if (!is_null($short_type) && !is_string($short_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($short_type)), __LINE__);
        }
        $this->short_type = $short_type;
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * Get bpm_currency value
     * @return string|null
     */
    public function getBpm_currency()
    {
        return $this->bpm_currency;
    }
    /**
     * Set bpm_currency value
     * @param string $bpm_currency
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setBpm_currency($bpm_currency = null)
    {
        // validation for constraint: string
        if (!is_null($bpm_currency) && !is_string($bpm_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bpm_currency)), __LINE__);
        }
        $this->bpm_currency = $bpm_currency;
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * Get g3_indication value
     * @return bool|null
     */
    public function getG3_indication()
    {
        return $this->g3_indication;
    }
    /**
     * Set g3_indication value
     * @param bool $g3_indication
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setG3_indication($g3_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($g3_indication) && !is_bool($g3_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($g3_indication)), __LINE__);
        }
        $this->g3_indication = $g3_indication;
        return $this;
    }
    /**
     * Get co2_emission value
     * @return int|null
     */
    public function getCo2_emission()
    {
        return $this->co2_emission;
    }
    /**
     * Set co2_emission value
     * @param int $co2_emission
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setCo2_emission($co2_emission = null)
    {
        // validation for constraint: int
        if (!is_null($co2_emission) && !is_numeric($co2_emission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($co2_emission)), __LINE__);
        }
        $this->co2_emission = $co2_emission;
        return $this;
    }
    /**
     * Get emission_particles value
     * @return string|null
     */
    public function getEmission_particles()
    {
        return $this->emission_particles;
    }
    /**
     * Set emission_particles value
     * @param string $emission_particles
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setEmission_particles($emission_particles = null)
    {
        // validation for constraint: string
        if (!is_null($emission_particles) && !is_string($emission_particles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emission_particles)), __LINE__);
        }
        $this->emission_particles = $emission_particles;
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * Get interior_code value
     * @return string|null
     */
    public function getInterior_code()
    {
        return $this->interior_code;
    }
    /**
     * Set interior_code value
     * @param string $interior_code
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setInterior_code($interior_code = null)
    {
        // validation for constraint: string
        if (!is_null($interior_code) && !is_string($interior_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interior_code)), __LINE__);
        }
        $this->interior_code = $interior_code;
        return $this;
    }
    /**
     * Get interior_description value
     * @return string|null
     */
    public function getInterior_description()
    {
        return $this->interior_description;
    }
    /**
     * Set interior_description value
     * @param string $interior_description
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setInterior_description($interior_description = null)
    {
        // validation for constraint: string
        if (!is_null($interior_description) && !is_string($interior_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interior_description)), __LINE__);
        }
        $this->interior_description = $interior_description;
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * Get tax_write_off value
     * @return string|null
     */
    public function getTax_write_off()
    {
        return $this->tax_write_off;
    }
    /**
     * Set tax_write_off value
     * @param string $tax_write_off
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setTax_write_off($tax_write_off = null)
    {
        // validation for constraint: string
        if (!is_null($tax_write_off) && !is_string($tax_write_off)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tax_write_off)), __LINE__);
        }
        $this->tax_write_off = $tax_write_off;
        return $this;
    }
    /**
     * Get parallel_import value
     * @return bool|null
     */
    public function getParallel_import()
    {
        return $this->parallel_import;
    }
    /**
     * Set parallel_import value
     * @param bool $parallel_import
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setParallel_import($parallel_import = null)
    {
        // validation for constraint: boolean
        if (!is_null($parallel_import) && !is_bool($parallel_import)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($parallel_import)), __LINE__);
        }
        $this->parallel_import = $parallel_import;
        return $this;
    }
    /**
     * Get license_plate_signal value
     * @return string|null
     */
    public function getLicense_plate_signal()
    {
        return $this->license_plate_signal;
    }
    /**
     * Set license_plate_signal value
     * @param string $license_plate_signal
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setLicense_plate_signal($license_plate_signal = null)
    {
        // validation for constraint: string
        if (!is_null($license_plate_signal) && !is_string($license_plate_signal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($license_plate_signal)), __LINE__);
        }
        $this->license_plate_signal = $license_plate_signal;
        return $this;
    }
    /**
     * Get gear value
     * @return string|null
     */
    public function getGear()
    {
        return $this->gear;
    }
    /**
     * Set gear value
     * @param string $gear
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setGear($gear = null)
    {
        // validation for constraint: string
        if (!is_null($gear) && !is_string($gear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gear)), __LINE__);
        }
        $this->gear = $gear;
        return $this;
    }
    /**
     * Get brand_approval value
     * @return string|null
     */
    public function getBrand_approval()
    {
        return $this->brand_approval;
    }
    /**
     * Set brand_approval value
     * @param string $brand_approval
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setBrand_approval($brand_approval = null)
    {
        // validation for constraint: string
        if (!is_null($brand_approval) && !is_string($brand_approval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand_approval)), __LINE__);
        }
        $this->brand_approval = $brand_approval;
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
     * Get types value
     * @return \Webservices\ArrayType\CarVWEVersionPriceReferenceArray|null
     */
    public function getTypes()
    {
        return $this->types;
    }
    /**
     * Set types value
     * @param \Webservices\ArrayType\CarVWEVersionPriceReferenceArray $types
     * @return \Webservices\StructType\CarVWEBasicTypeData
     */
    public function setTypes(\Webservices\ArrayType\CarVWEVersionPriceReferenceArray $types = null)
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
     * @return \Webservices\StructType\CarVWEBasicTypeData
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
