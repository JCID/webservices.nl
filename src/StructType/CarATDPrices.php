<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarATDPrices StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarATDPrices extends AbstractStructBase
{
    /**
     * The brand
     * @var string
     */
    public $brand;
    /**
     * The model
     * @var string
     */
    public $model;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The valuations
     * @var \Webservices\ArrayType\CarATDValuationArray
     */
    public $valuations;
    /**
     * Constructor method for CarATDPrices
     * @uses CarATDPrices::setBrand()
     * @uses CarATDPrices::setModel()
     * @uses CarATDPrices::setType()
     * @uses CarATDPrices::setValuations()
     * @param string $brand
     * @param string $model
     * @param string $type
     * @param \Webservices\ArrayType\CarATDValuationArray $valuations
     */
    public function __construct($brand = null, $model = null, $type = null, \Webservices\ArrayType\CarATDValuationArray $valuations = null)
    {
        $this
            ->setBrand($brand)
            ->setModel($model)
            ->setType($type)
            ->setValuations($valuations);
    }
    /**
     * Get brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * Set brand value
     * @param string $brand
     * @return \Webservices\StructType\CarATDPrices
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        $this->brand = $brand;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \Webservices\StructType\CarATDPrices
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\CarATDPrices
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get valuations value
     * @return \Webservices\ArrayType\CarATDValuationArray|null
     */
    public function getValuations()
    {
        return $this->valuations;
    }
    /**
     * Set valuations value
     * @param \Webservices\ArrayType\CarATDValuationArray $valuations
     * @return \Webservices\StructType\CarATDPrices
     */
    public function setValuations(\Webservices\ArrayType\CarATDValuationArray $valuations = null)
    {
        $this->valuations = $valuations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarATDPrices
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
