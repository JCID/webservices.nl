<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarBPV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarBPV2 extends AbstractStructBase
{
    /**
     * The car_data
     * @var \Webservices\StructType\CarBP
     */
    public $car_data;
    /**
     * The types
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CarTypeArray
     */
    public $types;
    /**
     * Constructor method for CarBPV2
     * @uses CarBPV2::setCar_data()
     * @uses CarBPV2::setTypes()
     * @param \Webservices\StructType\CarBP $car_data
     * @param \Webservices\ArrayType\CarTypeArray $types
     */
    public function __construct(\Webservices\StructType\CarBP $car_data = null, \Webservices\ArrayType\CarTypeArray $types = null)
    {
        $this
            ->setCar_data($car_data)
            ->setTypes($types);
    }
    /**
     * Get car_data value
     * @return \Webservices\StructType\CarBP|null
     */
    public function getCar_data()
    {
        return $this->car_data;
    }
    /**
     * Set car_data value
     * @param \Webservices\StructType\CarBP $car_data
     * @return \Webservices\StructType\CarBPV2
     */
    public function setCar_data(\Webservices\StructType\CarBP $car_data = null)
    {
        $this->car_data = $car_data;
        return $this;
    }
    /**
     * Get types value
     * @return \Webservices\ArrayType\CarTypeArray|null
     */
    public function getTypes()
    {
        return $this->types;
    }
    /**
     * Set types value
     * @param \Webservices\ArrayType\CarTypeArray $types
     * @return \Webservices\StructType\CarBPV2
     */
    public function setTypes(\Webservices\ArrayType\CarTypeArray $types = null)
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
     * @return \Webservices\StructType\CarBPV2
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
