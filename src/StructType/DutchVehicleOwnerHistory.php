<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleOwnerHistory StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleOwnerHistory extends AbstractStructBase
{
    /**
     * The ownerships
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchVehicleOwnershipArray
     */
    public $ownerships;
    /**
     * Constructor method for DutchVehicleOwnerHistory
     * @uses DutchVehicleOwnerHistory::setOwnerships()
     * @param \Webservices\ArrayType\DutchVehicleOwnershipArray $ownerships
     */
    public function __construct(\Webservices\ArrayType\DutchVehicleOwnershipArray $ownerships = null)
    {
        $this
            ->setOwnerships($ownerships);
    }
    /**
     * Get ownerships value
     * @return \Webservices\ArrayType\DutchVehicleOwnershipArray|null
     */
    public function getOwnerships()
    {
        return $this->ownerships;
    }
    /**
     * Set ownerships value
     * @param \Webservices\ArrayType\DutchVehicleOwnershipArray $ownerships
     * @return \Webservices\StructType\DutchVehicleOwnerHistory
     */
    public function setOwnerships(\Webservices\ArrayType\DutchVehicleOwnershipArray $ownerships = null)
    {
        $this->ownerships = $ownerships;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleOwnerHistory
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
