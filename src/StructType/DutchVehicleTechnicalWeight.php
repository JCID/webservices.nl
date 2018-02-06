<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleTechnicalWeight StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleTechnicalWeight extends AbstractStructBase
{
    /**
     * The mass_ready
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $mass_ready;
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
     * The maximum_mass_unbraked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_mass_unbraked;
    /**
     * The maximum_mass_braked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_mass_braked;
    /**
     * The maximum_mass_trailer_braked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_mass_trailer_braked;
    /**
     * The maximum_mass_self_braked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_mass_self_braked;
    /**
     * The maximum_mass_axle_braked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_mass_axle_braked;
    /**
     * Constructor method for DutchVehicleTechnicalWeight
     * @uses DutchVehicleTechnicalWeight::setMass_ready()
     * @uses DutchVehicleTechnicalWeight::setGross_vehicle_mass()
     * @uses DutchVehicleTechnicalWeight::setMaximum_mass_payload()
     * @uses DutchVehicleTechnicalWeight::setMaximum_mass_unbraked()
     * @uses DutchVehicleTechnicalWeight::setMaximum_mass_braked()
     * @uses DutchVehicleTechnicalWeight::setMaximum_mass_trailer_braked()
     * @uses DutchVehicleTechnicalWeight::setMaximum_mass_self_braked()
     * @uses DutchVehicleTechnicalWeight::setMaximum_mass_axle_braked()
     * @param int $mass_ready
     * @param int $gross_vehicle_mass
     * @param int $maximum_mass_payload
     * @param int $maximum_mass_unbraked
     * @param int $maximum_mass_braked
     * @param int $maximum_mass_trailer_braked
     * @param int $maximum_mass_self_braked
     * @param int $maximum_mass_axle_braked
     */
    public function __construct($mass_ready = null, $gross_vehicle_mass = null, $maximum_mass_payload = null, $maximum_mass_unbraked = null, $maximum_mass_braked = null, $maximum_mass_trailer_braked = null, $maximum_mass_self_braked = null, $maximum_mass_axle_braked = null)
    {
        $this
            ->setMass_ready($mass_ready)
            ->setGross_vehicle_mass($gross_vehicle_mass)
            ->setMaximum_mass_payload($maximum_mass_payload)
            ->setMaximum_mass_unbraked($maximum_mass_unbraked)
            ->setMaximum_mass_braked($maximum_mass_braked)
            ->setMaximum_mass_trailer_braked($maximum_mass_trailer_braked)
            ->setMaximum_mass_self_braked($maximum_mass_self_braked)
            ->setMaximum_mass_axle_braked($maximum_mass_axle_braked);
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight
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
