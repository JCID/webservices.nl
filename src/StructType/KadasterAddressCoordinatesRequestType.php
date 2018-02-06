<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterAddressCoordinatesRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterAddressCoordinatesRequestType extends AbstractStructBase
{
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
     * The street
     * @var string
     */
    public $street;
    /**
     * The houseno
     * @var int
     */
    public $houseno;
    /**
     * The housenoaddition
     * @var string
     */
    public $housenoaddition;
    /**
     * Constructor method for kadasterAddressCoordinatesRequestType
     * @uses KadasterAddressCoordinatesRequestType::setPostcode()
     * @uses KadasterAddressCoordinatesRequestType::setCity()
     * @uses KadasterAddressCoordinatesRequestType::setStreet()
     * @uses KadasterAddressCoordinatesRequestType::setHouseno()
     * @uses KadasterAddressCoordinatesRequestType::setHousenoaddition()
     * @param string $postcode
     * @param string $city
     * @param string $street
     * @param int $houseno
     * @param string $housenoaddition
     */
    public function __construct($postcode = null, $city = null, $street = null, $houseno = null, $housenoaddition = null)
    {
        $this
            ->setPostcode($postcode)
            ->setCity($city)
            ->setStreet($street)
            ->setHouseno($houseno)
            ->setHousenoaddition($housenoaddition);
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
     * @return \Webservices\StructType\KadasterAddressCoordinatesRequestType
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
     * @return \Webservices\StructType\KadasterAddressCoordinatesRequestType
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
     * @return \Webservices\StructType\KadasterAddressCoordinatesRequestType
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
     * Get houseno value
     * @return int|null
     */
    public function getHouseno()
    {
        return $this->houseno;
    }
    /**
     * Set houseno value
     * @param int $houseno
     * @return \Webservices\StructType\KadasterAddressCoordinatesRequestType
     */
    public function setHouseno($houseno = null)
    {
        // validation for constraint: int
        if (!is_null($houseno) && !is_numeric($houseno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($houseno)), __LINE__);
        }
        $this->houseno = $houseno;
        return $this;
    }
    /**
     * Get housenoaddition value
     * @return string|null
     */
    public function getHousenoaddition()
    {
        return $this->housenoaddition;
    }
    /**
     * Set housenoaddition value
     * @param string $housenoaddition
     * @return \Webservices\StructType\KadasterAddressCoordinatesRequestType
     */
    public function setHousenoaddition($housenoaddition = null)
    {
        // validation for constraint: string
        if (!is_null($housenoaddition) && !is_string($housenoaddition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($housenoaddition)), __LINE__);
        }
        $this->housenoaddition = $housenoaddition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterAddressCoordinatesRequestType
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
