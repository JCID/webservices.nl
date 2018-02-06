<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleRemark StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleRemark extends AbstractStructBase
{
    /**
     * The vehicle_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vehicle_code;
    /**
     * The variable_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $variable_code;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * Constructor method for DutchVehicleRemark
     * @uses DutchVehicleRemark::setVehicle_code()
     * @uses DutchVehicleRemark::setVariable_code()
     * @uses DutchVehicleRemark::setDescription()
     * @param string $vehicle_code
     * @param string $variable_code
     * @param string $description
     */
    public function __construct($vehicle_code = null, $variable_code = null, $description = null)
    {
        $this
            ->setVehicle_code($vehicle_code)
            ->setVariable_code($variable_code)
            ->setDescription($description);
    }
    /**
     * Get vehicle_code value
     * @return string|null
     */
    public function getVehicle_code()
    {
        return $this->vehicle_code;
    }
    /**
     * Set vehicle_code value
     * @param string $vehicle_code
     * @return \Webservices\StructType\DutchVehicleRemark
     */
    public function setVehicle_code($vehicle_code = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_code) && !is_string($vehicle_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehicle_code)), __LINE__);
        }
        $this->vehicle_code = $vehicle_code;
        return $this;
    }
    /**
     * Get variable_code value
     * @return string|null
     */
    public function getVariable_code()
    {
        return $this->variable_code;
    }
    /**
     * Set variable_code value
     * @param string $variable_code
     * @return \Webservices\StructType\DutchVehicleRemark
     */
    public function setVariable_code($variable_code = null)
    {
        // validation for constraint: string
        if (!is_null($variable_code) && !is_string($variable_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($variable_code)), __LINE__);
        }
        $this->variable_code = $variable_code;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\DutchVehicleRemark
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleRemark
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
