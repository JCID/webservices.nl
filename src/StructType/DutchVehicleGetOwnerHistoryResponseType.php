<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchVehicleGetOwnerHistoryResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleGetOwnerHistoryResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DutchVehicleOwnerHistory
     */
    public $out;
    /**
     * Constructor method for dutchVehicleGetOwnerHistoryResponseType
     * @uses DutchVehicleGetOwnerHistoryResponseType::setOut()
     * @param \Webservices\StructType\DutchVehicleOwnerHistory $out
     */
    public function __construct(\Webservices\StructType\DutchVehicleOwnerHistory $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DutchVehicleOwnerHistory|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DutchVehicleOwnerHistory $out
     * @return \Webservices\StructType\DutchVehicleGetOwnerHistoryResponseType
     */
    public function setOut(\Webservices\StructType\DutchVehicleOwnerHistory $out = null)
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
     * @return \Webservices\StructType\DutchVehicleGetOwnerHistoryResponseType
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
