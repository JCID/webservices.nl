<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carRDWCarDataOptionsRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarRDWCarDataOptionsRequestType extends AbstractStructBase
{
    /**
     * The car_id
     * @var string
     */
    public $car_id;
    /**
     * Constructor method for carRDWCarDataOptionsRequestType
     * @uses CarRDWCarDataOptionsRequestType::setCar_id()
     * @param string $car_id
     */
    public function __construct($car_id = null)
    {
        $this
            ->setCar_id($car_id);
    }
    /**
     * Get car_id value
     * @return string|null
     */
    public function getCar_id()
    {
        return $this->car_id;
    }
    /**
     * Set car_id value
     * @param string $car_id
     * @return \Webservices\StructType\CarRDWCarDataOptionsRequestType
     */
    public function setCar_id($car_id = null)
    {
        // validation for constraint: string
        if (!is_null($car_id) && !is_string($car_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($car_id)), __LINE__);
        }
        $this->car_id = $car_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarRDWCarDataOptionsRequestType
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
