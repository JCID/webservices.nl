<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRAddress extends AbstractStructBase
{
    /**
     * The is_current
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_current;
    /**
     * The address_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $address_code;
    /**
     * The address_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address_text;
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * The date_until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_until;
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $street;
    /**
     * The house_no
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $house_no;
    /**
     * The house_no_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $house_no_addition;
    /**
     * The pobox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pobox;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The residence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $residence;
    /**
     * The country_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $country_code;
    /**
     * The country_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country_text;
    /**
     * Constructor method for GCRAddress
     * @uses GCRAddress::setIs_current()
     * @uses GCRAddress::setAddress_code()
     * @uses GCRAddress::setAddress_text()
     * @uses GCRAddress::setDate_from()
     * @uses GCRAddress::setDate_until()
     * @uses GCRAddress::setStreet()
     * @uses GCRAddress::setHouse_no()
     * @uses GCRAddress::setHouse_no_addition()
     * @uses GCRAddress::setPobox()
     * @uses GCRAddress::setPostcode()
     * @uses GCRAddress::setResidence()
     * @uses GCRAddress::setCountry_code()
     * @uses GCRAddress::setCountry_text()
     * @param bool $is_current
     * @param int $address_code
     * @param string $address_text
     * @param string $date_from
     * @param string $date_until
     * @param string $street
     * @param string $house_no
     * @param string $house_no_addition
     * @param string $pobox
     * @param string $postcode
     * @param string $residence
     * @param int $country_code
     * @param string $country_text
     */
    public function __construct($is_current = null, $address_code = null, $address_text = null, $date_from = null, $date_until = null, $street = null, $house_no = null, $house_no_addition = null, $pobox = null, $postcode = null, $residence = null, $country_code = null, $country_text = null)
    {
        $this
            ->setIs_current($is_current)
            ->setAddress_code($address_code)
            ->setAddress_text($address_text)
            ->setDate_from($date_from)
            ->setDate_until($date_until)
            ->setStreet($street)
            ->setHouse_no($house_no)
            ->setHouse_no_addition($house_no_addition)
            ->setPobox($pobox)
            ->setPostcode($postcode)
            ->setResidence($residence)
            ->setCountry_code($country_code)
            ->setCountry_text($country_text);
    }
    /**
     * Get is_current value
     * @return bool|null
     */
    public function getIs_current()
    {
        return $this->is_current;
    }
    /**
     * Set is_current value
     * @param bool $is_current
     * @return \Webservices\StructType\GCRAddress
     */
    public function setIs_current($is_current = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_current) && !is_bool($is_current)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_current)), __LINE__);
        }
        $this->is_current = $is_current;
        return $this;
    }
    /**
     * Get address_code value
     * @return int|null
     */
    public function getAddress_code()
    {
        return $this->address_code;
    }
    /**
     * Set address_code value
     * @param int $address_code
     * @return \Webservices\StructType\GCRAddress
     */
    public function setAddress_code($address_code = null)
    {
        // validation for constraint: int
        if (!is_null($address_code) && !is_numeric($address_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($address_code)), __LINE__);
        }
        $this->address_code = $address_code;
        return $this;
    }
    /**
     * Get address_text value
     * @return string|null
     */
    public function getAddress_text()
    {
        return $this->address_text;
    }
    /**
     * Set address_text value
     * @param string $address_text
     * @return \Webservices\StructType\GCRAddress
     */
    public function setAddress_text($address_text = null)
    {
        // validation for constraint: string
        if (!is_null($address_text) && !is_string($address_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address_text)), __LINE__);
        }
        $this->address_text = $address_text;
        return $this;
    }
    /**
     * Get date_from value
     * @return string|null
     */
    public function getDate_from()
    {
        return $this->date_from;
    }
    /**
     * Set date_from value
     * @param string $date_from
     * @return \Webservices\StructType\GCRAddress
     */
    public function setDate_from($date_from = null)
    {
        // validation for constraint: string
        if (!is_null($date_from) && !is_string($date_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_from)), __LINE__);
        }
        $this->date_from = $date_from;
        return $this;
    }
    /**
     * Get date_until value
     * @return string|null
     */
    public function getDate_until()
    {
        return $this->date_until;
    }
    /**
     * Set date_until value
     * @param string $date_until
     * @return \Webservices\StructType\GCRAddress
     */
    public function setDate_until($date_until = null)
    {
        // validation for constraint: string
        if (!is_null($date_until) && !is_string($date_until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_until)), __LINE__);
        }
        $this->date_until = $date_until;
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Webservices\StructType\GCRAddress
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->street = $street;
        return $this;
    }
    /**
     * Get house_no value
     * @return string|null
     */
    public function getHouse_no()
    {
        return $this->house_no;
    }
    /**
     * Set house_no value
     * @param string $house_no
     * @return \Webservices\StructType\GCRAddress
     */
    public function setHouse_no($house_no = null)
    {
        // validation for constraint: string
        if (!is_null($house_no) && !is_string($house_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_no)), __LINE__);
        }
        $this->house_no = $house_no;
        return $this;
    }
    /**
     * Get house_no_addition value
     * @return string|null
     */
    public function getHouse_no_addition()
    {
        return $this->house_no_addition;
    }
    /**
     * Set house_no_addition value
     * @param string $house_no_addition
     * @return \Webservices\StructType\GCRAddress
     */
    public function setHouse_no_addition($house_no_addition = null)
    {
        // validation for constraint: string
        if (!is_null($house_no_addition) && !is_string($house_no_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_no_addition)), __LINE__);
        }
        $this->house_no_addition = $house_no_addition;
        return $this;
    }
    /**
     * Get pobox value
     * @return string|null
     */
    public function getPobox()
    {
        return $this->pobox;
    }
    /**
     * Set pobox value
     * @param string $pobox
     * @return \Webservices\StructType\GCRAddress
     */
    public function setPobox($pobox = null)
    {
        // validation for constraint: string
        if (!is_null($pobox) && !is_string($pobox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pobox)), __LINE__);
        }
        $this->pobox = $pobox;
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
     * @return \Webservices\StructType\GCRAddress
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
     * Get residence value
     * @return string|null
     */
    public function getResidence()
    {
        return $this->residence;
    }
    /**
     * Set residence value
     * @param string $residence
     * @return \Webservices\StructType\GCRAddress
     */
    public function setResidence($residence = null)
    {
        // validation for constraint: string
        if (!is_null($residence) && !is_string($residence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residence)), __LINE__);
        }
        $this->residence = $residence;
        return $this;
    }
    /**
     * Get country_code value
     * @return int|null
     */
    public function getCountry_code()
    {
        return $this->country_code;
    }
    /**
     * Set country_code value
     * @param int $country_code
     * @return \Webservices\StructType\GCRAddress
     */
    public function setCountry_code($country_code = null)
    {
        // validation for constraint: int
        if (!is_null($country_code) && !is_numeric($country_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($country_code)), __LINE__);
        }
        $this->country_code = $country_code;
        return $this;
    }
    /**
     * Get country_text value
     * @return string|null
     */
    public function getCountry_text()
    {
        return $this->country_text;
    }
    /**
     * Set country_text value
     * @param string $country_text
     * @return \Webservices\StructType\GCRAddress
     */
    public function setCountry_text($country_text = null)
    {
        // validation for constraint: string
        if (!is_null($country_text) && !is_string($country_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_text)), __LINE__);
        }
        $this->country_text = $country_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRAddress
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
