<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressPerceelFullParameterSearchRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AddressPerceelFullParameterSearchRequestType extends AbstractStructBase
{
    /**
     * The province
     * @var string
     */
    public $province;
    /**
     * The district
     * @var string
     */
    public $district;
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
     * The houseNo
     * @var int
     */
    public $houseNo;
    /**
     * The houseNoAddition
     * @var string
     */
    public $houseNoAddition;
    /**
     * The nbcode
     * @var string
     */
    public $nbcode;
    /**
     * The lettercombination
     * @var string
     */
    public $lettercombination;
    /**
     * The addresstype
     * @var string
     */
    public $addresstype;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for addressPerceelFullParameterSearchRequestType
     * @uses AddressPerceelFullParameterSearchRequestType::setProvince()
     * @uses AddressPerceelFullParameterSearchRequestType::setDistrict()
     * @uses AddressPerceelFullParameterSearchRequestType::setCity()
     * @uses AddressPerceelFullParameterSearchRequestType::setStreet()
     * @uses AddressPerceelFullParameterSearchRequestType::setHouseNo()
     * @uses AddressPerceelFullParameterSearchRequestType::setHouseNoAddition()
     * @uses AddressPerceelFullParameterSearchRequestType::setNbcode()
     * @uses AddressPerceelFullParameterSearchRequestType::setLettercombination()
     * @uses AddressPerceelFullParameterSearchRequestType::setAddresstype()
     * @uses AddressPerceelFullParameterSearchRequestType::setPage()
     * @param string $province
     * @param string $district
     * @param string $city
     * @param string $street
     * @param int $houseNo
     * @param string $houseNoAddition
     * @param string $nbcode
     * @param string $lettercombination
     * @param string $addresstype
     * @param int $page
     */
    public function __construct($province = null, $district = null, $city = null, $street = null, $houseNo = null, $houseNoAddition = null, $nbcode = null, $lettercombination = null, $addresstype = null, $page = null)
    {
        $this
            ->setProvince($province)
            ->setDistrict($district)
            ->setCity($city)
            ->setStreet($street)
            ->setHouseNo($houseNo)
            ->setHouseNoAddition($houseNoAddition)
            ->setNbcode($nbcode)
            ->setLettercombination($lettercombination)
            ->setAddresstype($addresstype)
            ->setPage($page);
    }
    /**
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
    /**
     * Get district value
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->district;
    }
    /**
     * Set district value
     * @param string $district
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setDistrict($district = null)
    {
        // validation for constraint: string
        if (!is_null($district) && !is_string($district)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($district)), __LINE__);
        }
        $this->district = $district;
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
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
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
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
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
     * Get houseNo value
     * @return int|null
     */
    public function getHouseNo()
    {
        return $this->houseNo;
    }
    /**
     * Set houseNo value
     * @param int $houseNo
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setHouseNo($houseNo = null)
    {
        // validation for constraint: int
        if (!is_null($houseNo) && !is_numeric($houseNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($houseNo)), __LINE__);
        }
        $this->houseNo = $houseNo;
        return $this;
    }
    /**
     * Get houseNoAddition value
     * @return string|null
     */
    public function getHouseNoAddition()
    {
        return $this->houseNoAddition;
    }
    /**
     * Set houseNoAddition value
     * @param string $houseNoAddition
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setHouseNoAddition($houseNoAddition = null)
    {
        // validation for constraint: string
        if (!is_null($houseNoAddition) && !is_string($houseNoAddition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($houseNoAddition)), __LINE__);
        }
        $this->houseNoAddition = $houseNoAddition;
        return $this;
    }
    /**
     * Get nbcode value
     * @return string|null
     */
    public function getNbcode()
    {
        return $this->nbcode;
    }
    /**
     * Set nbcode value
     * @param string $nbcode
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setNbcode($nbcode = null)
    {
        // validation for constraint: string
        if (!is_null($nbcode) && !is_string($nbcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbcode)), __LINE__);
        }
        $this->nbcode = $nbcode;
        return $this;
    }
    /**
     * Get lettercombination value
     * @return string|null
     */
    public function getLettercombination()
    {
        return $this->lettercombination;
    }
    /**
     * Set lettercombination value
     * @param string $lettercombination
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setLettercombination($lettercombination = null)
    {
        // validation for constraint: string
        if (!is_null($lettercombination) && !is_string($lettercombination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lettercombination)), __LINE__);
        }
        $this->lettercombination = $lettercombination;
        return $this;
    }
    /**
     * Get addresstype value
     * @return string|null
     */
    public function getAddresstype()
    {
        return $this->addresstype;
    }
    /**
     * Set addresstype value
     * @param string $addresstype
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setAddresstype($addresstype = null)
    {
        // validation for constraint: string
        if (!is_null($addresstype) && !is_string($addresstype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addresstype)), __LINE__);
        }
        $this->addresstype = $addresstype;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchRequestType
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
