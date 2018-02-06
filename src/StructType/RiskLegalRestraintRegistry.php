<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskLegalRestraintRegistry StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskLegalRestraintRegistry extends AbstractStructBase
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskAddress
     */
    public $address;
    /**
     * The telephone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $telephone_number;
    /**
     * The email_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email_address;
    /**
     * Constructor method for RiskLegalRestraintRegistry
     * @uses RiskLegalRestraintRegistry::setAddress()
     * @uses RiskLegalRestraintRegistry::setTelephone_number()
     * @uses RiskLegalRestraintRegistry::setEmail_address()
     * @param \Webservices\StructType\RiskAddress $address
     * @param string $telephone_number
     * @param string $email_address
     */
    public function __construct(\Webservices\StructType\RiskAddress $address = null, $telephone_number = null, $email_address = null)
    {
        $this
            ->setAddress($address)
            ->setTelephone_number($telephone_number)
            ->setEmail_address($email_address);
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
     * @return \Webservices\StructType\RiskLegalRestraintRegistry
     */
    public function setAddress(\Webservices\StructType\RiskAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get telephone_number value
     * @return string|null
     */
    public function getTelephone_number()
    {
        return $this->telephone_number;
    }
    /**
     * Set telephone_number value
     * @param string $telephone_number
     * @return \Webservices\StructType\RiskLegalRestraintRegistry
     */
    public function setTelephone_number($telephone_number = null)
    {
        // validation for constraint: string
        if (!is_null($telephone_number) && !is_string($telephone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone_number)), __LINE__);
        }
        $this->telephone_number = $telephone_number;
        return $this;
    }
    /**
     * Get email_address value
     * @return string|null
     */
    public function getEmail_address()
    {
        return $this->email_address;
    }
    /**
     * Set email_address value
     * @param string $email_address
     * @return \Webservices\StructType\RiskLegalRestraintRegistry
     */
    public function setEmail_address($email_address = null)
    {
        // validation for constraint: string
        if (!is_null($email_address) && !is_string($email_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email_address)), __LINE__);
        }
        $this->email_address = $email_address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskLegalRestraintRegistry
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
