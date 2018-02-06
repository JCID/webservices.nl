<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleMarketValue StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleMarketValue extends AbstractStructBase
{
    /**
     * The valuations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchVehiclePriceValuationArray
     */
    public $valuations;
    /**
     * Constructor method for DutchVehicleMarketValue
     * @uses DutchVehicleMarketValue::setValuations()
     * @param \Webservices\ArrayType\DutchVehiclePriceValuationArray $valuations
     */
    public function __construct(\Webservices\ArrayType\DutchVehiclePriceValuationArray $valuations = null)
    {
        $this
            ->setValuations($valuations);
    }
    /**
     * Get valuations value
     * @return \Webservices\ArrayType\DutchVehiclePriceValuationArray|null
     */
    public function getValuations()
    {
        return $this->valuations;
    }
    /**
     * Set valuations value
     * @param \Webservices\ArrayType\DutchVehiclePriceValuationArray $valuations
     * @return \Webservices\StructType\DutchVehicleMarketValue
     */
    public function setValuations(\Webservices\ArrayType\DutchVehiclePriceValuationArray $valuations = null)
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
     * @return \Webservices\StructType\DutchVehicleMarketValue
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
