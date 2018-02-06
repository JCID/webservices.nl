<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEVersionPriceReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEVersionPriceReference extends AbstractStructBase
{
    /**
     * The order_number
     * @var int
     */
    public $order_number;
    /**
     * The atl_code
     * @var int
     */
    public $atl_code;
    /**
     * The model_name
     * @var string
     */
    public $model_name;
    /**
     * Constructor method for CarVWEVersionPriceReference
     * @uses CarVWEVersionPriceReference::setOrder_number()
     * @uses CarVWEVersionPriceReference::setAtl_code()
     * @uses CarVWEVersionPriceReference::setModel_name()
     * @param int $order_number
     * @param int $atl_code
     * @param string $model_name
     */
    public function __construct($order_number = null, $atl_code = null, $model_name = null)
    {
        $this
            ->setOrder_number($order_number)
            ->setAtl_code($atl_code)
            ->setModel_name($model_name);
    }
    /**
     * Get order_number value
     * @return int|null
     */
    public function getOrder_number()
    {
        return $this->order_number;
    }
    /**
     * Set order_number value
     * @param int $order_number
     * @return \Webservices\StructType\CarVWEVersionPriceReference
     */
    public function setOrder_number($order_number = null)
    {
        // validation for constraint: int
        if (!is_null($order_number) && !is_numeric($order_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order_number)), __LINE__);
        }
        $this->order_number = $order_number;
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
     * @return \Webservices\StructType\CarVWEVersionPriceReference
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
     * Get model_name value
     * @return string|null
     */
    public function getModel_name()
    {
        return $this->model_name;
    }
    /**
     * Set model_name value
     * @param string $model_name
     * @return \Webservices\StructType\CarVWEVersionPriceReference
     */
    public function setModel_name($model_name = null)
    {
        // validation for constraint: string
        if (!is_null($model_name) && !is_string($model_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model_name)), __LINE__);
        }
        $this->model_name = $model_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEVersionPriceReference
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
