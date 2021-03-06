<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carRDWCarDataBPRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarRDWCarDataBPRequestType extends AbstractStructBase
{
    /**
     * The license_plate
     * @var string
     */
    public $license_plate;
    /**
     * Constructor method for carRDWCarDataBPRequestType
     * @uses CarRDWCarDataBPRequestType::setLicense_plate()
     * @param string $license_plate
     */
    public function __construct($license_plate = null)
    {
        $this
            ->setLicense_plate($license_plate);
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
     * @return \Webservices\StructType\CarRDWCarDataBPRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarRDWCarDataBPRequestType
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
