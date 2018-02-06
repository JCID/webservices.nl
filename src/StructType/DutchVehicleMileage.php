<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleMileage StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleMileage extends AbstractStructBase
{
    /**
     * The registration_year
     * @var int
     */
    public $registration_year;
    /**
     * The indication
     * @var string
     */
    public $indication;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for DutchVehicleMileage
     * @uses DutchVehicleMileage::setRegistration_year()
     * @uses DutchVehicleMileage::setIndication()
     * @uses DutchVehicleMileage::setDescription()
     * @param int $registration_year
     * @param string $indication
     * @param string $description
     */
    public function __construct($registration_year = null, $indication = null, $description = null)
    {
        $this
            ->setRegistration_year($registration_year)
            ->setIndication($indication)
            ->setDescription($description);
    }
    /**
     * Get registration_year value
     * @return int|null
     */
    public function getRegistration_year()
    {
        return $this->registration_year;
    }
    /**
     * Set registration_year value
     * @param int $registration_year
     * @return \Webservices\StructType\DutchVehicleMileage
     */
    public function setRegistration_year($registration_year = null)
    {
        // validation for constraint: int
        if (!is_null($registration_year) && !is_numeric($registration_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($registration_year)), __LINE__);
        }
        $this->registration_year = $registration_year;
        return $this;
    }
    /**
     * Get indication value
     * @return string|null
     */
    public function getIndication()
    {
        return $this->indication;
    }
    /**
     * Set indication value
     * @param string $indication
     * @return \Webservices\StructType\DutchVehicleMileage
     */
    public function setIndication($indication = null)
    {
        // validation for constraint: string
        if (!is_null($indication) && !is_string($indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indication)), __LINE__);
        }
        $this->indication = $indication;
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
     * @return \Webservices\StructType\DutchVehicleMileage
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
     * @return \Webservices\StructType\DutchVehicleMileage
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
