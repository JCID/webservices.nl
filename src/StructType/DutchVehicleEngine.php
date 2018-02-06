<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleEngine StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleEngine extends AbstractStructBase
{
    /**
     * The cylinder_capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $cylinder_capacity;
    /**
     * The cylinders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $cylinders;
    /**
     * The g3_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $g3_indication;
    /**
     * The energy_label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $energy_label;
    /**
     * Constructor method for DutchVehicleEngine
     * @uses DutchVehicleEngine::setCylinder_capacity()
     * @uses DutchVehicleEngine::setCylinders()
     * @uses DutchVehicleEngine::setG3_indication()
     * @uses DutchVehicleEngine::setEnergy_label()
     * @param int $cylinder_capacity
     * @param int $cylinders
     * @param bool $g3_indication
     * @param string $energy_label
     */
    public function __construct($cylinder_capacity = null, $cylinders = null, $g3_indication = null, $energy_label = null)
    {
        $this
            ->setCylinder_capacity($cylinder_capacity)
            ->setCylinders($cylinders)
            ->setG3_indication($g3_indication)
            ->setEnergy_label($energy_label);
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
     * @return \Webservices\StructType\DutchVehicleEngine
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
     * @return \Webservices\StructType\DutchVehicleEngine
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
     * @return \Webservices\StructType\DutchVehicleEngine
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
     * @return \Webservices\StructType\DutchVehicleEngine
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleEngine
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
