<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBBusinessReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBBusinessReference extends AbstractStructBase
{
    /**
     * The dnb_key
     * @var string
     */
    public $dnb_key;
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The phone_number
     * @var string
     */
    public $phone_number;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The main_branch_indication
     * @var bool
     */
    public $main_branch_indication;
    /**
     * The confidence_code
     * @var int
     */
    public $confidence_code;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * Constructor method for DNBBusinessReference
     * @uses DNBBusinessReference::setDnb_key()
     * @uses DNBBusinessReference::setTrade_name()
     * @uses DNBBusinessReference::setAddress()
     * @uses DNBBusinessReference::setPostcode()
     * @uses DNBBusinessReference::setCity()
     * @uses DNBBusinessReference::setPhone_number()
     * @uses DNBBusinessReference::setCountry()
     * @uses DNBBusinessReference::setMain_branch_indication()
     * @uses DNBBusinessReference::setConfidence_code()
     * @uses DNBBusinessReference::setTrade_names()
     * @param string $dnb_key
     * @param string $trade_name
     * @param string $address
     * @param string $postcode
     * @param string $city
     * @param string $phone_number
     * @param string $country
     * @param bool $main_branch_indication
     * @param int $confidence_code
     * @param \Webservices\ArrayType\StringArray $trade_names
     */
    public function __construct($dnb_key = null, $trade_name = null, $address = null, $postcode = null, $city = null, $phone_number = null, $country = null, $main_branch_indication = null, $confidence_code = null, \Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this
            ->setDnb_key($dnb_key)
            ->setTrade_name($trade_name)
            ->setAddress($address)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setPhone_number($phone_number)
            ->setCountry($country)
            ->setMain_branch_indication($main_branch_indication)
            ->setConfidence_code($confidence_code)
            ->setTrade_names($trade_names);
    }
    /**
     * Get dnb_key value
     * @return string|null
     */
    public function getDnb_key()
    {
        return $this->dnb_key;
    }
    /**
     * Set dnb_key value
     * @param string $dnb_key
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setDnb_key($dnb_key = null)
    {
        // validation for constraint: string
        if (!is_null($dnb_key) && !is_string($dnb_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dnb_key)), __LINE__);
        }
        $this->dnb_key = $dnb_key;
        return $this;
    }
    /**
     * Get trade_name value
     * @return string|null
     */
    public function getTrade_name()
    {
        return $this->trade_name;
    }
    /**
     * Set trade_name value
     * @param string $trade_name
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setTrade_name($trade_name = null)
    {
        // validation for constraint: string
        if (!is_null($trade_name) && !is_string($trade_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_name)), __LINE__);
        }
        $this->trade_name = $trade_name;
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
     * @return \Webservices\StructType\DNBBusinessReference
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
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get phone_number value
     * @return string|null
     */
    public function getPhone_number()
    {
        return $this->phone_number;
    }
    /**
     * Set phone_number value
     * @param string $phone_number
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setPhone_number($phone_number = null)
    {
        // validation for constraint: string
        if (!is_null($phone_number) && !is_string($phone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone_number)), __LINE__);
        }
        $this->phone_number = $phone_number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get main_branch_indication value
     * @return bool|null
     */
    public function getMain_branch_indication()
    {
        return $this->main_branch_indication;
    }
    /**
     * Set main_branch_indication value
     * @param bool $main_branch_indication
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setMain_branch_indication($main_branch_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($main_branch_indication) && !is_bool($main_branch_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($main_branch_indication)), __LINE__);
        }
        $this->main_branch_indication = $main_branch_indication;
        return $this;
    }
    /**
     * Get confidence_code value
     * @return int|null
     */
    public function getConfidence_code()
    {
        return $this->confidence_code;
    }
    /**
     * Set confidence_code value
     * @param int $confidence_code
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setConfidence_code($confidence_code = null)
    {
        // validation for constraint: int
        if (!is_null($confidence_code) && !is_numeric($confidence_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($confidence_code)), __LINE__);
        }
        $this->confidence_code = $confidence_code;
        return $this;
    }
    /**
     * Get trade_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTrade_names()
    {
        return $this->trade_names;
    }
    /**
     * Set trade_names value
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @return \Webservices\StructType\DNBBusinessReference
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBBusinessReference
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
