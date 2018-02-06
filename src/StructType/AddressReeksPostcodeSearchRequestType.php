<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressReeksPostcodeSearchRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AddressReeksPostcodeSearchRequestType extends AbstractStructBase
{
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * Constructor method for addressReeksPostcodeSearchRequestType
     * @uses AddressReeksPostcodeSearchRequestType::setAddress()
     * @param string $address
     */
    public function __construct($address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Webservices\StructType\AddressReeksPostcodeSearchRequestType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AddressReeksPostcodeSearchRequestType
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
