<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehiclePrice StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehiclePrice extends AbstractStructBase
{
    /**
     * The purchase_price
     * @var float
     */
    public $purchase_price;
    /**
     * The vehicle_purchase_tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $vehicle_purchase_tax;
    /**
     * The value_added_tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $value_added_tax;
    /**
     * The net_purchase_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $net_purchase_price;
    /**
     * The calculation_method
     * @var string
     */
    public $calculation_method;
    /**
     * Constructor method for DutchVehiclePrice
     * @uses DutchVehiclePrice::setPurchase_price()
     * @uses DutchVehiclePrice::setVehicle_purchase_tax()
     * @uses DutchVehiclePrice::setValue_added_tax()
     * @uses DutchVehiclePrice::setNet_purchase_price()
     * @uses DutchVehiclePrice::setCalculation_method()
     * @param float $purchase_price
     * @param float $vehicle_purchase_tax
     * @param float $value_added_tax
     * @param float $net_purchase_price
     * @param string $calculation_method
     */
    public function __construct($purchase_price = null, $vehicle_purchase_tax = null, $value_added_tax = null, $net_purchase_price = null, $calculation_method = null)
    {
        $this
            ->setPurchase_price($purchase_price)
            ->setVehicle_purchase_tax($vehicle_purchase_tax)
            ->setValue_added_tax($value_added_tax)
            ->setNet_purchase_price($net_purchase_price)
            ->setCalculation_method($calculation_method);
    }
    /**
     * Get purchase_price value
     * @return float|null
     */
    public function getPurchase_price()
    {
        return $this->purchase_price;
    }
    /**
     * Set purchase_price value
     * @param float $purchase_price
     * @return \Webservices\StructType\DutchVehiclePrice
     */
    public function setPurchase_price($purchase_price = null)
    {
        $this->purchase_price = $purchase_price;
        return $this;
    }
    /**
     * Get vehicle_purchase_tax value
     * @return float|null
     */
    public function getVehicle_purchase_tax()
    {
        return $this->vehicle_purchase_tax;
    }
    /**
     * Set vehicle_purchase_tax value
     * @param float $vehicle_purchase_tax
     * @return \Webservices\StructType\DutchVehiclePrice
     */
    public function setVehicle_purchase_tax($vehicle_purchase_tax = null)
    {
        $this->vehicle_purchase_tax = $vehicle_purchase_tax;
        return $this;
    }
    /**
     * Get value_added_tax value
     * @return float|null
     */
    public function getValue_added_tax()
    {
        return $this->value_added_tax;
    }
    /**
     * Set value_added_tax value
     * @param float $value_added_tax
     * @return \Webservices\StructType\DutchVehiclePrice
     */
    public function setValue_added_tax($value_added_tax = null)
    {
        $this->value_added_tax = $value_added_tax;
        return $this;
    }
    /**
     * Get net_purchase_price value
     * @return float|null
     */
    public function getNet_purchase_price()
    {
        return $this->net_purchase_price;
    }
    /**
     * Set net_purchase_price value
     * @param float $net_purchase_price
     * @return \Webservices\StructType\DutchVehiclePrice
     */
    public function setNet_purchase_price($net_purchase_price = null)
    {
        $this->net_purchase_price = $net_purchase_price;
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
     * @return \Webservices\StructType\DutchVehiclePrice
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
     * @return \Webservices\StructType\DutchVehiclePrice
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
