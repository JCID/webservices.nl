<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEOptionsPackage StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEOptionsPackage extends AbstractStructBase
{
    /**
     * The license_plate
     * @var string
     */
    public $license_plate;
    /**
     * The atl_code
     * @var int
     */
    public $atl_code;
    /**
     * The packages
     * @var \Webservices\ArrayType\CarVWEOptionPackageArray
     */
    public $packages;
    /**
     * Constructor method for CarVWEOptionsPackage
     * @uses CarVWEOptionsPackage::setLicense_plate()
     * @uses CarVWEOptionsPackage::setAtl_code()
     * @uses CarVWEOptionsPackage::setPackages()
     * @param string $license_plate
     * @param int $atl_code
     * @param \Webservices\ArrayType\CarVWEOptionPackageArray $packages
     */
    public function __construct($license_plate = null, $atl_code = null, \Webservices\ArrayType\CarVWEOptionPackageArray $packages = null)
    {
        $this
            ->setLicense_plate($license_plate)
            ->setAtl_code($atl_code)
            ->setPackages($packages);
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
     * @return \Webservices\StructType\CarVWEOptionsPackage
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
     * Get atl_code value
     * @return int|null
     */
    public function getAtl_code()
    {
        return $this->atl_code;
    }
    /**
     * Set atl_code value
     * @param int $atl_code
     * @return \Webservices\StructType\CarVWEOptionsPackage
     */
    public function setAtl_code($atl_code = null)
    {
        // validation for constraint: int
        if (!is_null($atl_code) && !is_numeric($atl_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($atl_code)), __LINE__);
        }
        $this->atl_code = $atl_code;
        return $this;
    }
    /**
     * Get packages value
     * @return \Webservices\ArrayType\CarVWEOptionPackageArray|null
     */
    public function getPackages()
    {
        return $this->packages;
    }
    /**
     * Set packages value
     * @param \Webservices\ArrayType\CarVWEOptionPackageArray $packages
     * @return \Webservices\StructType\CarVWEOptionsPackage
     */
    public function setPackages(\Webservices\ArrayType\CarVWEOptionPackageArray $packages = null)
    {
        $this->packages = $packages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEOptionsPackage
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
