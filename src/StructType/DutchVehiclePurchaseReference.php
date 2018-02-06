<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehiclePurchaseReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehiclePurchaseReference extends AbstractStructBase
{
    /**
     * The basic_data
     * @var \Webservices\StructType\DutchVehicleData
     */
    public $basic_data;
    /**
     * The reference
     * @var \Webservices\StructType\DutchVehicleReference
     */
    public $reference;
    /**
     * The purchase_data
     * @var \Webservices\StructType\DutchVehiclePurchase
     */
    public $purchase_data;
    /**
     * Constructor method for DutchVehiclePurchaseReference
     * @uses DutchVehiclePurchaseReference::setBasic_data()
     * @uses DutchVehiclePurchaseReference::setReference()
     * @uses DutchVehiclePurchaseReference::setPurchase_data()
     * @param \Webservices\StructType\DutchVehicleData $basic_data
     * @param \Webservices\StructType\DutchVehicleReference $reference
     * @param \Webservices\StructType\DutchVehiclePurchase $purchase_data
     */
    public function __construct(\Webservices\StructType\DutchVehicleData $basic_data = null, \Webservices\StructType\DutchVehicleReference $reference = null, \Webservices\StructType\DutchVehiclePurchase $purchase_data = null)
    {
        $this
            ->setBasic_data($basic_data)
            ->setReference($reference)
            ->setPurchase_data($purchase_data);
    }
    /**
     * Get basic_data value
     * @return \Webservices\StructType\DutchVehicleData|null
     */
    public function getBasic_data()
    {
        return $this->basic_data;
    }
    /**
     * Set basic_data value
     * @param \Webservices\StructType\DutchVehicleData $basic_data
     * @return \Webservices\StructType\DutchVehiclePurchaseReference
     */
    public function setBasic_data(\Webservices\StructType\DutchVehicleData $basic_data = null)
    {
        $this->basic_data = $basic_data;
        return $this;
    }
    /**
     * Get reference value
     * @return \Webservices\StructType\DutchVehicleReference|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param \Webservices\StructType\DutchVehicleReference $reference
     * @return \Webservices\StructType\DutchVehiclePurchaseReference
     */
    public function setReference(\Webservices\StructType\DutchVehicleReference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get purchase_data value
     * @return \Webservices\StructType\DutchVehiclePurchase|null
     */
    public function getPurchase_data()
    {
        return $this->purchase_data;
    }
    /**
     * Set purchase_data value
     * @param \Webservices\StructType\DutchVehiclePurchase $purchase_data
     * @return \Webservices\StructType\DutchVehiclePurchaseReference
     */
    public function setPurchase_data(\Webservices\StructType\DutchVehiclePurchase $purchase_data = null)
    {
        $this->purchase_data = $purchase_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehiclePurchaseReference
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
