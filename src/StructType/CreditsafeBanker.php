<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBanker StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBanker extends AbstractStructBase
{
    /**
     * The name
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
     * The bank_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bank_code;
    /**
     * Constructor method for CreditsafeBanker
     * @uses CreditsafeBanker::setName()
     * @uses CreditsafeBanker::setAddress()
     * @uses CreditsafeBanker::setBank_code()
     * @param string $name
     * @param string $address
     * @param string $bank_code
     */
    public function __construct($name = null, $address = null, $bank_code = null)
    {
        $this
            ->setName($name)
            ->setAddress($address)
            ->setBank_code($bank_code);
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
     * @return \Webservices\StructType\CreditsafeBanker
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
     * @return \Webservices\StructType\CreditsafeBanker
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
     * Get bank_code value
     * @return string|null
     */
    public function getBank_code()
    {
        return $this->bank_code;
    }
    /**
     * Set bank_code value
     * @param string $bank_code
     * @return \Webservices\StructType\CreditsafeBanker
     */
    public function setBank_code($bank_code = null)
    {
        // validation for constraint: string
        if (!is_null($bank_code) && !is_string($bank_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bank_code)), __LINE__);
        }
        $this->bank_code = $bank_code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBanker
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
