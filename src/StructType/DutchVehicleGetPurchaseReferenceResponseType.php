<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchVehicleGetPurchaseReferenceResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleGetPurchaseReferenceResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DutchVehiclePurchaseReference
     */
    public $out;
    /**
     * Constructor method for dutchVehicleGetPurchaseReferenceResponseType
     * @uses DutchVehicleGetPurchaseReferenceResponseType::setOut()
     * @param \Webservices\StructType\DutchVehiclePurchaseReference $out
     */
    public function __construct(\Webservices\StructType\DutchVehiclePurchaseReference $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DutchVehiclePurchaseReference|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DutchVehiclePurchaseReference $out
     * @return \Webservices\StructType\DutchVehicleGetPurchaseReferenceResponseType
     */
    public function setOut(\Webservices\StructType\DutchVehiclePurchaseReference $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleGetPurchaseReferenceResponseType
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
