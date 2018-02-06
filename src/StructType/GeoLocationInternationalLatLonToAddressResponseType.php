<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationInternationalLatLonToAddressResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationInternationalLatLonToAddressResponseType extends AbstractStructBase
{
    /**
     * The address
     * @var \Webservices\StructType\GeoLocationInternationalAddress
     */
    public $address;
    /**
     * Constructor method for geoLocationInternationalLatLonToAddressResponseType
     * @uses GeoLocationInternationalLatLonToAddressResponseType::setAddress()
     * @param \Webservices\StructType\GeoLocationInternationalAddress $address
     */
    public function __construct(\Webservices\StructType\GeoLocationInternationalAddress $address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get address value
     * @return \Webservices\StructType\GeoLocationInternationalAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\GeoLocationInternationalAddress $address
     * @return \Webservices\StructType\GeoLocationInternationalLatLonToAddressResponseType
     */
    public function setAddress(\Webservices\StructType\GeoLocationInternationalAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationInternationalLatLonToAddressResponseType
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
