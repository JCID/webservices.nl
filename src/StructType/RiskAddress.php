<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskAddress extends AbstractStructBase
{
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $building;
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $street;
    /**
     * The house_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $house_number;
    /**
     * The house_number_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $house_number_addition;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The municipality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $municipality;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $state;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * Constructor method for RiskAddress
     * @uses RiskAddress::setPostcode()
     * @uses RiskAddress::setBuilding()
     * @uses RiskAddress::setStreet()
     * @uses RiskAddress::setHouse_number()
     * @uses RiskAddress::setHouse_number_addition()
     * @uses RiskAddress::setCity()
     * @uses RiskAddress::setMunicipality()
     * @uses RiskAddress::setState()
     * @uses RiskAddress::setCountry()
     * @param string $postcode
     * @param string $building
     * @param string $street
     * @param int $house_number
     * @param string $house_number_addition
     * @param string $city
     * @param string $municipality
     * @param string $state
     * @param string $country
     */
    public function __construct($postcode = null, $building = null, $street = null, $house_number = null, $house_number_addition = null, $city = null, $municipality = null, $state = null, $country = null)
    {
        $this
            ->setPostcode($postcode)
            ->setBuilding($building)
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setHouse_number_addition($house_number_addition)
            ->setCity($city)
            ->setMunicipality($municipality)
            ->setState($state)
            ->setCountry($country);
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
     * @return \Webservices\StructType\RiskAddress
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
     * Get building value
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param string $building
     * @return \Webservices\StructType\RiskAddress
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($building)), __LINE__);
        }
        $this->building = $building;
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
     * @return \Webservices\StructType\RiskAddress
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
     * Get house_number value
     * @return int|null
     */
    public function getHouse_number()
    {
        return $this->house_number;
    }
    /**
     * Set house_number value
     * @param int $house_number
     * @return \Webservices\StructType\RiskAddress
     */
    public function setHouse_number($house_number = null)
    {
        // validation for constraint: int
        if (!is_null($house_number) && !is_numeric($house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_number)), __LINE__);
        }
        $this->house_number = $house_number;
        return $this;
    }
    /**
     * Get house_number_addition value
     * @return string|null
     */
    public function getHouse_number_addition()
    {
        return $this->house_number_addition;
    }
    /**
     * Set house_number_addition value
     * @param string $house_number_addition
     * @return \Webservices\StructType\RiskAddress
     */
    public function setHouse_number_addition($house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($house_number_addition) && !is_string($house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_number_addition)), __LINE__);
        }
        $this->house_number_addition = $house_number_addition;
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
     * @return \Webservices\StructType\RiskAddress
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
     * Get municipality value
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
    /**
     * Set municipality value
     * @param string $municipality
     * @return \Webservices\StructType\RiskAddress
     */
    public function setMunicipality($municipality = null)
    {
        // validation for constraint: string
        if (!is_null($municipality) && !is_string($municipality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($municipality)), __LINE__);
        }
        $this->municipality = $municipality;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Webservices\StructType\RiskAddress
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
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
     * @return \Webservices\StructType\RiskAddress
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskAddress
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
