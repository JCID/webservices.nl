<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationRDToAddressV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationRDToAddressV2ResponseType extends AbstractStructBase
{
    /**
     * The address
     * @var \Webservices\StructType\GeoLocationAddressV2
     */
    public $address;
    /**
     * Constructor method for geoLocationRDToAddressV2ResponseType
     * @uses GeoLocationRDToAddressV2ResponseType::setAddress()
     * @param \Webservices\StructType\GeoLocationAddressV2 $address
     */
    public function __construct(\Webservices\StructType\GeoLocationAddressV2 $address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get address value
     * @return \Webservices\StructType\GeoLocationAddressV2|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\GeoLocationAddressV2 $address
     * @return \Webservices\StructType\GeoLocationRDToAddressV2ResponseType
     */
    public function setAddress(\Webservices\StructType\GeoLocationAddressV2 $address = null)
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
     * @return \Webservices\StructType\GeoLocationRDToAddressV2ResponseType
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
