<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEOptionPackage StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEOptionPackage extends AbstractStructBase
{
    /**
     * The package_id
     * @var int
     */
    public $package_id;
    /**
     * The price
     * @var int
     */
    public $price;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The options
     * @var \Webservices\ArrayType\CarVWEOptionArray
     */
    public $options;
    /**
     * Constructor method for CarVWEOptionPackage
     * @uses CarVWEOptionPackage::setPackage_id()
     * @uses CarVWEOptionPackage::setPrice()
     * @uses CarVWEOptionPackage::setDescription()
     * @uses CarVWEOptionPackage::setOptions()
     * @param int $package_id
     * @param int $price
     * @param string $description
     * @param \Webservices\ArrayType\CarVWEOptionArray $options
     */
    public function __construct($package_id = null, $price = null, $description = null, \Webservices\ArrayType\CarVWEOptionArray $options = null)
    {
        $this
            ->setPackage_id($package_id)
            ->setPrice($price)
            ->setDescription($description)
            ->setOptions($options);
    }
    /**
     * Get package_id value
     * @return int|null
     */
    public function getPackage_id()
    {
        return $this->package_id;
    }
    /**
     * Set package_id value
     * @param int $package_id
     * @return \Webservices\StructType\CarVWEOptionPackage
     */
    public function setPackage_id($package_id = null)
    {
        // validation for constraint: int
        if (!is_null($package_id) && !is_numeric($package_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($package_id)), __LINE__);
        }
        $this->package_id = $package_id;
        return $this;
    }
    /**
     * Get price value
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param int $price
     * @return \Webservices\StructType\CarVWEOptionPackage
     */
    public function setPrice($price = null)
    {
        // validation for constraint: int
        if (!is_null($price) && !is_numeric($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($price)), __LINE__);
        }
        $this->price = $price;
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
     * @return \Webservices\StructType\CarVWEOptionPackage
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
     * Get options value
     * @return \Webservices\ArrayType\CarVWEOptionArray|null
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param \Webservices\ArrayType\CarVWEOptionArray $options
     * @return \Webservices\StructType\CarVWEOptionPackage
     */
    public function setOptions(\Webservices\ArrayType\CarVWEOptionArray $options = null)
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEOptionPackage
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
