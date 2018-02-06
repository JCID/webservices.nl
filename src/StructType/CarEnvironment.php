<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarEnvironment StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarEnvironment extends AbstractStructBase
{
    /**
     * The emission_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $emission_code;
    /**
     * The energy_label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $energy_label;
    /**
     * The g3_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $g3_indication;
    /**
     * The particulate_filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $particulate_filter;
    /**
     * The fuel_usage_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $fuel_usage_city;
    /**
     * The fuel_usage_highway
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $fuel_usage_highway;
    /**
     * The fuel_usage_combined
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $fuel_usage_combined;
    /**
     * Constructor method for CarEnvironment
     * @uses CarEnvironment::setEmission_code()
     * @uses CarEnvironment::setEnergy_label()
     * @uses CarEnvironment::setG3_indication()
     * @uses CarEnvironment::setParticulate_filter()
     * @uses CarEnvironment::setFuel_usage_city()
     * @uses CarEnvironment::setFuel_usage_highway()
     * @uses CarEnvironment::setFuel_usage_combined()
     * @param string $emission_code
     * @param string $energy_label
     * @param bool $g3_indication
     * @param string $particulate_filter
     * @param float $fuel_usage_city
     * @param float $fuel_usage_highway
     * @param float $fuel_usage_combined
     */
    public function __construct($emission_code = null, $energy_label = null, $g3_indication = null, $particulate_filter = null, $fuel_usage_city = null, $fuel_usage_highway = null, $fuel_usage_combined = null)
    {
        $this
            ->setEmission_code($emission_code)
            ->setEnergy_label($energy_label)
            ->setG3_indication($g3_indication)
            ->setParticulate_filter($particulate_filter)
            ->setFuel_usage_city($fuel_usage_city)
            ->setFuel_usage_highway($fuel_usage_highway)
            ->setFuel_usage_combined($fuel_usage_combined);
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
     * @return \Webservices\StructType\CarEnvironment
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
     * @return \Webservices\StructType\CarEnvironment
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
     * @return \Webservices\StructType\CarEnvironment
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
     * @return \Webservices\StructType\CarEnvironment
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
     * Get fuel_usage_city value
     * @return float|null
     */
    public function getFuel_usage_city()
    {
        return $this->fuel_usage_city;
    }
    /**
     * Set fuel_usage_city value
     * @param float $fuel_usage_city
     * @return \Webservices\StructType\CarEnvironment
     */
    public function setFuel_usage_city($fuel_usage_city = null)
    {
        $this->fuel_usage_city = $fuel_usage_city;
        return $this;
    }
    /**
     * Get fuel_usage_highway value
     * @return float|null
     */
    public function getFuel_usage_highway()
    {
        return $this->fuel_usage_highway;
    }
    /**
     * Set fuel_usage_highway value
     * @param float $fuel_usage_highway
     * @return \Webservices\StructType\CarEnvironment
     */
    public function setFuel_usage_highway($fuel_usage_highway = null)
    {
        $this->fuel_usage_highway = $fuel_usage_highway;
        return $this;
    }
    /**
     * Get fuel_usage_combined value
     * @return float|null
     */
    public function getFuel_usage_combined()
    {
        return $this->fuel_usage_combined;
    }
    /**
     * Set fuel_usage_combined value
     * @param float $fuel_usage_combined
     * @return \Webservices\StructType\CarEnvironment
     */
    public function setFuel_usage_combined($fuel_usage_combined = null)
    {
        $this->fuel_usage_combined = $fuel_usage_combined;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarEnvironment
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
