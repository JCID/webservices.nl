<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleEnvironment StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleEnvironment extends AbstractStructBase
{
    /**
     * The fuel_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fuel_type;
    /**
     * The fuel_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fuel_code;
    /**
     * The usage_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $usage_city;
    /**
     * The usage_highway
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $usage_highway;
    /**
     * The usage_combined
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $usage_combined;
    /**
     * The max_power
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $max_power;
    /**
     * The max_power_continuous
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $max_power_continuous;
    /**
     * The noise_level_stationary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $noise_level_stationary;
    /**
     * The noise_level_stationary_rpm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $noise_level_stationary_rpm;
    /**
     * The noise_level_driving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $noise_level_driving;
    /**
     * The emission_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $emission_code;
    /**
     * The co2_emission_combined
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $co2_emission_combined;
    /**
     * The co2_emission_weighted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $co2_emission_weighted;
    /**
     * The particulate_emission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $particulate_emission;
    /**
     * The particulate_filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $particulate_filter;
    /**
     * The emission_particles_light
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $emission_particles_light;
    /**
     * The emission_particles_heavy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $emission_particles_heavy;
    /**
     * Constructor method for DutchVehicleEnvironment
     * @uses DutchVehicleEnvironment::setFuel_type()
     * @uses DutchVehicleEnvironment::setFuel_code()
     * @uses DutchVehicleEnvironment::setUsage_city()
     * @uses DutchVehicleEnvironment::setUsage_highway()
     * @uses DutchVehicleEnvironment::setUsage_combined()
     * @uses DutchVehicleEnvironment::setMax_power()
     * @uses DutchVehicleEnvironment::setMax_power_continuous()
     * @uses DutchVehicleEnvironment::setNoise_level_stationary()
     * @uses DutchVehicleEnvironment::setNoise_level_stationary_rpm()
     * @uses DutchVehicleEnvironment::setNoise_level_driving()
     * @uses DutchVehicleEnvironment::setEmission_code()
     * @uses DutchVehicleEnvironment::setCo2_emission_combined()
     * @uses DutchVehicleEnvironment::setCo2_emission_weighted()
     * @uses DutchVehicleEnvironment::setParticulate_emission()
     * @uses DutchVehicleEnvironment::setParticulate_filter()
     * @uses DutchVehicleEnvironment::setEmission_particles_light()
     * @uses DutchVehicleEnvironment::setEmission_particles_heavy()
     * @param string $fuel_type
     * @param string $fuel_code
     * @param float $usage_city
     * @param float $usage_highway
     * @param float $usage_combined
     * @param float $max_power
     * @param float $max_power_continuous
     * @param int $noise_level_stationary
     * @param int $noise_level_stationary_rpm
     * @param int $noise_level_driving
     * @param string $emission_code
     * @param int $co2_emission_combined
     * @param int $co2_emission_weighted
     * @param float $particulate_emission
     * @param string $particulate_filter
     * @param float $emission_particles_light
     * @param float $emission_particles_heavy
     */
    public function __construct($fuel_type = null, $fuel_code = null, $usage_city = null, $usage_highway = null, $usage_combined = null, $max_power = null, $max_power_continuous = null, $noise_level_stationary = null, $noise_level_stationary_rpm = null, $noise_level_driving = null, $emission_code = null, $co2_emission_combined = null, $co2_emission_weighted = null, $particulate_emission = null, $particulate_filter = null, $emission_particles_light = null, $emission_particles_heavy = null)
    {
        $this
            ->setFuel_type($fuel_type)
            ->setFuel_code($fuel_code)
            ->setUsage_city($usage_city)
            ->setUsage_highway($usage_highway)
            ->setUsage_combined($usage_combined)
            ->setMax_power($max_power)
            ->setMax_power_continuous($max_power_continuous)
            ->setNoise_level_stationary($noise_level_stationary)
            ->setNoise_level_stationary_rpm($noise_level_stationary_rpm)
            ->setNoise_level_driving($noise_level_driving)
            ->setEmission_code($emission_code)
            ->setCo2_emission_combined($co2_emission_combined)
            ->setCo2_emission_weighted($co2_emission_weighted)
            ->setParticulate_emission($particulate_emission)
            ->setParticulate_filter($particulate_filter)
            ->setEmission_particles_light($emission_particles_light)
            ->setEmission_particles_heavy($emission_particles_heavy);
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
     * @return \Webservices\StructType\DutchVehicleEnvironment
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
     * Get fuel_code value
     * @return string|null
     */
    public function getFuel_code()
    {
        return $this->fuel_code;
    }
    /**
     * Set fuel_code value
     * @param string $fuel_code
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setFuel_code($fuel_code = null)
    {
        // validation for constraint: string
        if (!is_null($fuel_code) && !is_string($fuel_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuel_code)), __LINE__);
        }
        $this->fuel_code = $fuel_code;
        return $this;
    }
    /**
     * Get usage_city value
     * @return float|null
     */
    public function getUsage_city()
    {
        return $this->usage_city;
    }
    /**
     * Set usage_city value
     * @param float $usage_city
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setUsage_city($usage_city = null)
    {
        $this->usage_city = $usage_city;
        return $this;
    }
    /**
     * Get usage_highway value
     * @return float|null
     */
    public function getUsage_highway()
    {
        return $this->usage_highway;
    }
    /**
     * Set usage_highway value
     * @param float $usage_highway
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setUsage_highway($usage_highway = null)
    {
        $this->usage_highway = $usage_highway;
        return $this;
    }
    /**
     * Get usage_combined value
     * @return float|null
     */
    public function getUsage_combined()
    {
        return $this->usage_combined;
    }
    /**
     * Set usage_combined value
     * @param float $usage_combined
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setUsage_combined($usage_combined = null)
    {
        $this->usage_combined = $usage_combined;
        return $this;
    }
    /**
     * Get max_power value
     * @return float|null
     */
    public function getMax_power()
    {
        return $this->max_power;
    }
    /**
     * Set max_power value
     * @param float $max_power
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setMax_power($max_power = null)
    {
        $this->max_power = $max_power;
        return $this;
    }
    /**
     * Get max_power_continuous value
     * @return float|null
     */
    public function getMax_power_continuous()
    {
        return $this->max_power_continuous;
    }
    /**
     * Set max_power_continuous value
     * @param float $max_power_continuous
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setMax_power_continuous($max_power_continuous = null)
    {
        $this->max_power_continuous = $max_power_continuous;
        return $this;
    }
    /**
     * Get noise_level_stationary value
     * @return int|null
     */
    public function getNoise_level_stationary()
    {
        return $this->noise_level_stationary;
    }
    /**
     * Set noise_level_stationary value
     * @param int $noise_level_stationary
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setNoise_level_stationary($noise_level_stationary = null)
    {
        // validation for constraint: int
        if (!is_null($noise_level_stationary) && !is_numeric($noise_level_stationary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noise_level_stationary)), __LINE__);
        }
        $this->noise_level_stationary = $noise_level_stationary;
        return $this;
    }
    /**
     * Get noise_level_stationary_rpm value
     * @return int|null
     */
    public function getNoise_level_stationary_rpm()
    {
        return $this->noise_level_stationary_rpm;
    }
    /**
     * Set noise_level_stationary_rpm value
     * @param int $noise_level_stationary_rpm
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setNoise_level_stationary_rpm($noise_level_stationary_rpm = null)
    {
        // validation for constraint: int
        if (!is_null($noise_level_stationary_rpm) && !is_numeric($noise_level_stationary_rpm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noise_level_stationary_rpm)), __LINE__);
        }
        $this->noise_level_stationary_rpm = $noise_level_stationary_rpm;
        return $this;
    }
    /**
     * Get noise_level_driving value
     * @return int|null
     */
    public function getNoise_level_driving()
    {
        return $this->noise_level_driving;
    }
    /**
     * Set noise_level_driving value
     * @param int $noise_level_driving
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setNoise_level_driving($noise_level_driving = null)
    {
        // validation for constraint: int
        if (!is_null($noise_level_driving) && !is_numeric($noise_level_driving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noise_level_driving)), __LINE__);
        }
        $this->noise_level_driving = $noise_level_driving;
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
     * @return \Webservices\StructType\DutchVehicleEnvironment
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
     * Get co2_emission_combined value
     * @return int|null
     */
    public function getCo2_emission_combined()
    {
        return $this->co2_emission_combined;
    }
    /**
     * Set co2_emission_combined value
     * @param int $co2_emission_combined
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setCo2_emission_combined($co2_emission_combined = null)
    {
        // validation for constraint: int
        if (!is_null($co2_emission_combined) && !is_numeric($co2_emission_combined)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($co2_emission_combined)), __LINE__);
        }
        $this->co2_emission_combined = $co2_emission_combined;
        return $this;
    }
    /**
     * Get co2_emission_weighted value
     * @return int|null
     */
    public function getCo2_emission_weighted()
    {
        return $this->co2_emission_weighted;
    }
    /**
     * Set co2_emission_weighted value
     * @param int $co2_emission_weighted
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setCo2_emission_weighted($co2_emission_weighted = null)
    {
        // validation for constraint: int
        if (!is_null($co2_emission_weighted) && !is_numeric($co2_emission_weighted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($co2_emission_weighted)), __LINE__);
        }
        $this->co2_emission_weighted = $co2_emission_weighted;
        return $this;
    }
    /**
     * Get particulate_emission value
     * @return float|null
     */
    public function getParticulate_emission()
    {
        return $this->particulate_emission;
    }
    /**
     * Set particulate_emission value
     * @param float $particulate_emission
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setParticulate_emission($particulate_emission = null)
    {
        $this->particulate_emission = $particulate_emission;
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
     * @return \Webservices\StructType\DutchVehicleEnvironment
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
     * Get emission_particles_light value
     * @return float|null
     */
    public function getEmission_particles_light()
    {
        return $this->emission_particles_light;
    }
    /**
     * Set emission_particles_light value
     * @param float $emission_particles_light
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setEmission_particles_light($emission_particles_light = null)
    {
        $this->emission_particles_light = $emission_particles_light;
        return $this;
    }
    /**
     * Get emission_particles_heavy value
     * @return float|null
     */
    public function getEmission_particles_heavy()
    {
        return $this->emission_particles_heavy;
    }
    /**
     * Set emission_particles_heavy value
     * @param float $emission_particles_heavy
     * @return \Webservices\StructType\DutchVehicleEnvironment
     */
    public function setEmission_particles_heavy($emission_particles_heavy = null)
    {
        $this->emission_particles_heavy = $emission_particles_heavy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleEnvironment
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
