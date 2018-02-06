<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarATDValuation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarATDValuation extends AbstractStructBase
{
    /**
     * The type_id
     * @var int
     */
    public $type_id;
    /**
     * The price_retail
     * @var int
     */
    public $price_retail;
    /**
     * The price_exchange
     * @var int
     */
    public $price_exchange;
    /**
     * The price_trade
     * @var int
     */
    public $price_trade;
    /**
     * The type_names
     * @var \Webservices\ArrayType\StringArray
     */
    public $type_names;
    /**
     * Constructor method for CarATDValuation
     * @uses CarATDValuation::setType_id()
     * @uses CarATDValuation::setPrice_retail()
     * @uses CarATDValuation::setPrice_exchange()
     * @uses CarATDValuation::setPrice_trade()
     * @uses CarATDValuation::setType_names()
     * @param int $type_id
     * @param int $price_retail
     * @param int $price_exchange
     * @param int $price_trade
     * @param \Webservices\ArrayType\StringArray $type_names
     */
    public function __construct($type_id = null, $price_retail = null, $price_exchange = null, $price_trade = null, \Webservices\ArrayType\StringArray $type_names = null)
    {
        $this
            ->setType_id($type_id)
            ->setPrice_retail($price_retail)
            ->setPrice_exchange($price_exchange)
            ->setPrice_trade($price_trade)
            ->setType_names($type_names);
    }
    /**
     * Get type_id value
     * @return int|null
     */
    public function getType_id()
    {
        return $this->type_id;
    }
    /**
     * Set type_id value
     * @param int $type_id
     * @return \Webservices\StructType\CarATDValuation
     */
    public function setType_id($type_id = null)
    {
        // validation for constraint: int
        if (!is_null($type_id) && !is_numeric($type_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($type_id)), __LINE__);
        }
        $this->type_id = $type_id;
        return $this;
    }
    /**
     * Get price_retail value
     * @return int|null
     */
    public function getPrice_retail()
    {
        return $this->price_retail;
    }
    /**
     * Set price_retail value
     * @param int $price_retail
     * @return \Webservices\StructType\CarATDValuation
     */
    public function setPrice_retail($price_retail = null)
    {
        // validation for constraint: int
        if (!is_null($price_retail) && !is_numeric($price_retail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($price_retail)), __LINE__);
        }
        $this->price_retail = $price_retail;
        return $this;
    }
    /**
     * Get price_exchange value
     * @return int|null
     */
    public function getPrice_exchange()
    {
        return $this->price_exchange;
    }
    /**
     * Set price_exchange value
     * @param int $price_exchange
     * @return \Webservices\StructType\CarATDValuation
     */
    public function setPrice_exchange($price_exchange = null)
    {
        // validation for constraint: int
        if (!is_null($price_exchange) && !is_numeric($price_exchange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($price_exchange)), __LINE__);
        }
        $this->price_exchange = $price_exchange;
        return $this;
    }
    /**
     * Get price_trade value
     * @return int|null
     */
    public function getPrice_trade()
    {
        return $this->price_trade;
    }
    /**
     * Set price_trade value
     * @param int $price_trade
     * @return \Webservices\StructType\CarATDValuation
     */
    public function setPrice_trade($price_trade = null)
    {
        // validation for constraint: int
        if (!is_null($price_trade) && !is_numeric($price_trade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($price_trade)), __LINE__);
        }
        $this->price_trade = $price_trade;
        return $this;
    }
    /**
     * Get type_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getType_names()
    {
        return $this->type_names;
    }
    /**
     * Set type_names value
     * @param \Webservices\ArrayType\StringArray $type_names
     * @return \Webservices\StructType\CarATDValuation
     */
    public function setType_names(\Webservices\ArrayType\StringArray $type_names = null)
    {
        $this->type_names = $type_names;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarATDValuation
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
