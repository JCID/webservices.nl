<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehiclePriceValuation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehiclePriceValuation extends AbstractStructBase
{
    /**
     * The brand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand;
    /**
     * The model
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $model;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The retail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $retail;
    /**
     * The exchange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $exchange;
    /**
     * The trade
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $trade;
    /**
     * The calculation_method
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $calculation_method;
    /**
     * Constructor method for DutchVehiclePriceValuation
     * @uses DutchVehiclePriceValuation::setBrand()
     * @uses DutchVehiclePriceValuation::setModel()
     * @uses DutchVehiclePriceValuation::setType()
     * @uses DutchVehiclePriceValuation::setRetail()
     * @uses DutchVehiclePriceValuation::setExchange()
     * @uses DutchVehiclePriceValuation::setTrade()
     * @uses DutchVehiclePriceValuation::setCalculation_method()
     * @param string $brand
     * @param string $model
     * @param string $type
     * @param int $retail
     * @param int $exchange
     * @param int $trade
     * @param string $calculation_method
     */
    public function __construct($brand = null, $model = null, $type = null, $retail = null, $exchange = null, $trade = null, $calculation_method = null)
    {
        $this
            ->setBrand($brand)
            ->setModel($model)
            ->setType($type)
            ->setRetail($retail)
            ->setExchange($exchange)
            ->setTrade($trade)
            ->setCalculation_method($calculation_method);
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
     * @return \Webservices\StructType\DutchVehiclePriceValuation
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
     * @return \Webservices\StructType\DutchVehiclePriceValuation
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
     * @return \Webservices\StructType\DutchVehiclePriceValuation
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
     * Get retail value
     * @return int|null
     */
    public function getRetail()
    {
        return $this->retail;
    }
    /**
     * Set retail value
     * @param int $retail
     * @return \Webservices\StructType\DutchVehiclePriceValuation
     */
    public function setRetail($retail = null)
    {
        // validation for constraint: int
        if (!is_null($retail) && !is_numeric($retail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($retail)), __LINE__);
        }
        $this->retail = $retail;
        return $this;
    }
    /**
     * Get exchange value
     * @return int|null
     */
    public function getExchange()
    {
        return $this->exchange;
    }
    /**
     * Set exchange value
     * @param int $exchange
     * @return \Webservices\StructType\DutchVehiclePriceValuation
     */
    public function setExchange($exchange = null)
    {
        // validation for constraint: int
        if (!is_null($exchange) && !is_numeric($exchange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($exchange)), __LINE__);
        }
        $this->exchange = $exchange;
        return $this;
    }
    /**
     * Get trade value
     * @return int|null
     */
    public function getTrade()
    {
        return $this->trade;
    }
    /**
     * Set trade value
     * @param int $trade
     * @return \Webservices\StructType\DutchVehiclePriceValuation
     */
    public function setTrade($trade = null)
    {
        // validation for constraint: int
        if (!is_null($trade) && !is_numeric($trade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($trade)), __LINE__);
        }
        $this->trade = $trade;
        return $this;
    }
    /**
     * Get calculation_method value
     * @return string|null
     */
    public function getCalculation_method()
    {
        return $this->calculation_method;
    }
    /**
     * Set calculation_method value
     * @param string $calculation_method
     * @return \Webservices\StructType\DutchVehiclePriceValuation
     */
    public function setCalculation_method($calculation_method = null)
    {
        // validation for constraint: string
        if (!is_null($calculation_method) && !is_string($calculation_method)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calculation_method)), __LINE__);
        }
        $this->calculation_method = $calculation_method;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehiclePriceValuation
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
