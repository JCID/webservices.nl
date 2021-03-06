<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEMeldcodeCheck StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEMeldcodeCheck extends AbstractStructBase
{
    /**
     * The license_plate
     * @var string
     */
    public $license_plate;
    /**
     * The correct
     * @var bool
     */
    public $correct;
    /**
     * Constructor method for CarVWEMeldcodeCheck
     * @uses CarVWEMeldcodeCheck::setLicense_plate()
     * @uses CarVWEMeldcodeCheck::setCorrect()
     * @param string $license_plate
     * @param bool $correct
     */
    public function __construct($license_plate = null, $correct = null)
    {
        $this
            ->setLicense_plate($license_plate)
            ->setCorrect($correct);
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
     * @return \Webservices\StructType\CarVWEMeldcodeCheck
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
     * Get correct value
     * @return bool|null
     */
    public function getCorrect()
    {
        return $this->correct;
    }
    /**
     * Set correct value
     * @param bool $correct
     * @return \Webservices\StructType\CarVWEMeldcodeCheck
     */
    public function setCorrect($correct = null)
    {
        // validation for constraint: boolean
        if (!is_null($correct) && !is_bool($correct)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($correct)), __LINE__);
        }
        $this->correct = $correct;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEMeldcodeCheck
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
