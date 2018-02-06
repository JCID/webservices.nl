<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskCompanyAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskCompanyAddress extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The address
     * @var \Webservices\StructType\RiskAddress
     */
    public $address;
    /**
     * Constructor method for RiskCompanyAddress
     * @uses RiskCompanyAddress::setType()
     * @uses RiskCompanyAddress::setAddress()
     * @param string $type
     * @param \Webservices\StructType\RiskAddress $address
     */
    public function __construct($type = null, \Webservices\StructType\RiskAddress $address = null)
    {
        $this
            ->setType($type)
            ->setAddress($address);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\RiskCompanyAddress
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get address value
     * @return \Webservices\StructType\RiskAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\RiskAddress $address
     * @return \Webservices\StructType\RiskCompanyAddress
     */
    public function setAddress(\Webservices\StructType\RiskAddress $address = null)
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
     * @return \Webservices\StructType\RiskCompanyAddress
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
