<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteLocation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RouteLocation extends AbstractStructBase
{
    /**
     * The address
     * @var \Webservices\StructType\RouteAddress
     */
    public $address;
    /**
     * The coordinates
     * @var \Webservices\StructType\RouteCoordinates
     */
    public $coordinates;
    /**
     * Constructor method for RouteLocation
     * @uses RouteLocation::setAddress()
     * @uses RouteLocation::setCoordinates()
     * @param \Webservices\StructType\RouteAddress $address
     * @param \Webservices\StructType\RouteCoordinates $coordinates
     */
    public function __construct(\Webservices\StructType\RouteAddress $address = null, \Webservices\StructType\RouteCoordinates $coordinates = null)
    {
        $this
            ->setAddress($address)
            ->setCoordinates($coordinates);
    }
    /**
     * Get address value
     * @return \Webservices\StructType\RouteAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\RouteAddress $address
     * @return \Webservices\StructType\RouteLocation
     */
    public function setAddress(\Webservices\StructType\RouteAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get coordinates value
     * @return \Webservices\StructType\RouteCoordinates|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Webservices\StructType\RouteCoordinates $coordinates
     * @return \Webservices\StructType\RouteLocation
     */
    public function setCoordinates(\Webservices\StructType\RouteCoordinates $coordinates = null)
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RouteLocation
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
