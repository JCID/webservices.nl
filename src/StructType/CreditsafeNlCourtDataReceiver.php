<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlCourtDataReceiver StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlCourtDataReceiver extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * Constructor method for CreditsafeNlCourtDataReceiver
     * @uses CreditsafeNlCourtDataReceiver::setName()
     * @uses CreditsafeNlCourtDataReceiver::setAddress()
     * @param string $name
     * @param string $address
     */
    public function __construct($name = null, $address = null)
    {
        $this
            ->setName($name)
            ->setAddress($address);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\CreditsafeNlCourtDataReceiver
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
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
     * @return \Webservices\StructType\CreditsafeNlCourtDataReceiver
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
     * @return \Webservices\StructType\CreditsafeNlCourtDataReceiver
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
