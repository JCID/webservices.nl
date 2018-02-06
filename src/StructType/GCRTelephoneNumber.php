<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRTelephoneNumber StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRTelephoneNumber extends AbstractStructBase
{
    /**
     * The telephone_code
     * @var int
     */
    public $telephone_code;
    /**
     * The telephone_text
     * @var string
     */
    public $telephone_text;
    /**
     * The country_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country_number;
    /**
     * The net_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $net_number;
    /**
     * The subscriber_number
     * @var string
     */
    public $subscriber_number;
    /**
     * Constructor method for GCRTelephoneNumber
     * @uses GCRTelephoneNumber::setTelephone_code()
     * @uses GCRTelephoneNumber::setTelephone_text()
     * @uses GCRTelephoneNumber::setCountry_number()
     * @uses GCRTelephoneNumber::setNet_number()
     * @uses GCRTelephoneNumber::setSubscriber_number()
     * @param int $telephone_code
     * @param string $telephone_text
     * @param string $country_number
     * @param string $net_number
     * @param string $subscriber_number
     */
    public function __construct($telephone_code = null, $telephone_text = null, $country_number = null, $net_number = null, $subscriber_number = null)
    {
        $this
            ->setTelephone_code($telephone_code)
            ->setTelephone_text($telephone_text)
            ->setCountry_number($country_number)
            ->setNet_number($net_number)
            ->setSubscriber_number($subscriber_number);
    }
    /**
     * Get telephone_code value
     * @return int|null
     */
    public function getTelephone_code()
    {
        return $this->telephone_code;
    }
    /**
     * Set telephone_code value
     * @param int $telephone_code
     * @return \Webservices\StructType\GCRTelephoneNumber
     */
    public function setTelephone_code($telephone_code = null)
    {
        // validation for constraint: int
        if (!is_null($telephone_code) && !is_numeric($telephone_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($telephone_code)), __LINE__);
        }
        $this->telephone_code = $telephone_code;
        return $this;
    }
    /**
     * Get telephone_text value
     * @return string|null
     */
    public function getTelephone_text()
    {
        return $this->telephone_text;
    }
    /**
     * Set telephone_text value
     * @param string $telephone_text
     * @return \Webservices\StructType\GCRTelephoneNumber
     */
    public function setTelephone_text($telephone_text = null)
    {
        // validation for constraint: string
        if (!is_null($telephone_text) && !is_string($telephone_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone_text)), __LINE__);
        }
        $this->telephone_text = $telephone_text;
        return $this;
    }
    /**
     * Get country_number value
     * @return string|null
     */
    public function getCountry_number()
    {
        return $this->country_number;
    }
    /**
     * Set country_number value
     * @param string $country_number
     * @return \Webservices\StructType\GCRTelephoneNumber
     */
    public function setCountry_number($country_number = null)
    {
        // validation for constraint: string
        if (!is_null($country_number) && !is_string($country_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_number)), __LINE__);
        }
        $this->country_number = $country_number;
        return $this;
    }
    /**
     * Get net_number value
     * @return string|null
     */
    public function getNet_number()
    {
        return $this->net_number;
    }
    /**
     * Set net_number value
     * @param string $net_number
     * @return \Webservices\StructType\GCRTelephoneNumber
     */
    public function setNet_number($net_number = null)
    {
        // validation for constraint: string
        if (!is_null($net_number) && !is_string($net_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($net_number)), __LINE__);
        }
        $this->net_number = $net_number;
        return $this;
    }
    /**
     * Get subscriber_number value
     * @return string|null
     */
    public function getSubscriber_number()
    {
        return $this->subscriber_number;
    }
    /**
     * Set subscriber_number value
     * @param string $subscriber_number
     * @return \Webservices\StructType\GCRTelephoneNumber
     */
    public function setSubscriber_number($subscriber_number = null)
    {
        // validation for constraint: string
        if (!is_null($subscriber_number) && !is_string($subscriber_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subscriber_number)), __LINE__);
        }
        $this->subscriber_number = $subscriber_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRTelephoneNumber
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
