<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEBrand StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEBrand extends AbstractStructBase
{
    /**
     * The brand_id
     * @var int
     */
    public $brand_id;
    /**
     * The brand_name
     * @var string
     */
    public $brand_name;
    /**
     * Constructor method for CarVWEBrand
     * @uses CarVWEBrand::setBrand_id()
     * @uses CarVWEBrand::setBrand_name()
     * @param int $brand_id
     * @param string $brand_name
     */
    public function __construct($brand_id = null, $brand_name = null)
    {
        $this
            ->setBrand_id($brand_id)
            ->setBrand_name($brand_name);
    }
    /**
     * Get brand_id value
     * @return int|null
     */
    public function getBrand_id()
    {
        return $this->brand_id;
    }
    /**
     * Set brand_id value
     * @param int $brand_id
     * @return \Webservices\StructType\CarVWEBrand
     */
    public function setBrand_id($brand_id = null)
    {
        // validation for constraint: int
        if (!is_null($brand_id) && !is_numeric($brand_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brand_id)), __LINE__);
        }
        $this->brand_id = $brand_id;
        return $this;
    }
    /**
     * Get brand_name value
     * @return string|null
     */
    public function getBrand_name()
    {
        return $this->brand_name;
    }
    /**
     * Set brand_name value
     * @param string $brand_name
     * @return \Webservices\StructType\CarVWEBrand
     */
    public function setBrand_name($brand_name = null)
    {
        // validation for constraint: string
        if (!is_null($brand_name) && !is_string($brand_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand_name)), __LINE__);
        }
        $this->brand_name = $brand_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEBrand
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
