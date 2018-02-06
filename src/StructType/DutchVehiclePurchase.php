<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehiclePurchase StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehiclePurchase extends AbstractStructBase
{
    /**
     * The reference_date
     * @var string
     */
    public $reference_date;
    /**
     * The price_data
     * @var \Webservices\StructType\DutchVehiclePrice
     */
    public $price_data;
    /**
     * Constructor method for DutchVehiclePurchase
     * @uses DutchVehiclePurchase::setReference_date()
     * @uses DutchVehiclePurchase::setPrice_data()
     * @param string $reference_date
     * @param \Webservices\StructType\DutchVehiclePrice $price_data
     */
    public function __construct($reference_date = null, \Webservices\StructType\DutchVehiclePrice $price_data = null)
    {
        $this
            ->setReference_date($reference_date)
            ->setPrice_data($price_data);
    }
    /**
     * Get reference_date value
     * @return string|null
     */
    public function getReference_date()
    {
        return $this->reference_date;
    }
    /**
     * Set reference_date value
     * @param string $reference_date
     * @return \Webservices\StructType\DutchVehiclePurchase
     */
    public function setReference_date($reference_date = null)
    {
        // validation for constraint: string
        if (!is_null($reference_date) && !is_string($reference_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference_date)), __LINE__);
        }
        $this->reference_date = $reference_date;
        return $this;
    }
    /**
     * Get price_data value
     * @return \Webservices\StructType\DutchVehiclePrice|null
     */
    public function getPrice_data()
    {
        return $this->price_data;
    }
    /**
     * Set price_data value
     * @param \Webservices\StructType\DutchVehiclePrice $price_data
     * @return \Webservices\StructType\DutchVehiclePurchase
     */
    public function setPrice_data(\Webservices\StructType\DutchVehiclePrice $price_data = null)
    {
        $this->price_data = $price_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehiclePurchase
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
