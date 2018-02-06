<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleReference extends AbstractStructBase
{
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * The date_first_admission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_first_admission;
    /**
     * The year_manufactored
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $year_manufactored;
    /**
     * The fuel_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fuel_type;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $weight;
    /**
     * The maximum_mass_payload
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_mass_payload;
    /**
     * Constructor method for DutchVehicleReference
     * @uses DutchVehicleReference::setVersion()
     * @uses DutchVehicleReference::setDate_first_admission()
     * @uses DutchVehicleReference::setYear_manufactored()
     * @uses DutchVehicleReference::setFuel_type()
     * @uses DutchVehicleReference::setWeight()
     * @uses DutchVehicleReference::setMaximum_mass_payload()
     * @param string $version
     * @param string $date_first_admission
     * @param int $year_manufactored
     * @param string $fuel_type
     * @param int $weight
     * @param int $maximum_mass_payload
     */
    public function __construct($version = null, $date_first_admission = null, $year_manufactored = null, $fuel_type = null, $weight = null, $maximum_mass_payload = null)
    {
        $this
            ->setVersion($version)
            ->setDate_first_admission($date_first_admission)
            ->setYear_manufactored($year_manufactored)
            ->setFuel_type($fuel_type)
            ->setWeight($weight)
            ->setMaximum_mass_payload($maximum_mass_payload);
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Webservices\StructType\DutchVehicleReference
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
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
     * @return \Webservices\StructType\DutchVehicleReference
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
     * Get year_manufactored value
     * @return int|null
     */
    public function getYear_manufactored()
    {
        return $this->year_manufactored;
    }
    /**
     * Set year_manufactored value
     * @param int $year_manufactored
     * @return \Webservices\StructType\DutchVehicleReference
     */
    public function setYear_manufactored($year_manufactored = null)
    {
        // validation for constraint: int
        if (!is_null($year_manufactored) && !is_numeric($year_manufactored)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year_manufactored)), __LINE__);
        }
        $this->year_manufactored = $year_manufactored;
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
     * @return \Webservices\StructType\DutchVehicleReference
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
     * @return \Webservices\StructType\DutchVehicleReference
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
     * @return \Webservices\StructType\DutchVehicleReference
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleReference
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
