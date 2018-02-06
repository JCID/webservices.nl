<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyAddress extends AbstractStructBase
{
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
     * The addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $addition;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The phone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phone_number;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $start_date;
    /**
     * Constructor method for InsolvencyAddress
     * @uses InsolvencyAddress::setStreet()
     * @uses InsolvencyAddress::setHouse_number()
     * @uses InsolvencyAddress::setAddition()
     * @uses InsolvencyAddress::setPostcode()
     * @uses InsolvencyAddress::setCity()
     * @uses InsolvencyAddress::setPhone_number()
     * @uses InsolvencyAddress::setType()
     * @uses InsolvencyAddress::setStart_date()
     * @param string $street
     * @param int $house_number
     * @param string $addition
     * @param string $postcode
     * @param string $city
     * @param string $phone_number
     * @param string $type
     * @param string $start_date
     */
    public function __construct($street = null, $house_number = null, $addition = null, $postcode = null, $city = null, $phone_number = null, $type = null, $start_date = null)
    {
        $this
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setAddition($addition)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setPhone_number($phone_number)
            ->setType($type)
            ->setStart_date($start_date);
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
     * @return \Webservices\StructType\InsolvencyAddress
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
     * @return \Webservices\StructType\InsolvencyAddress
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
     * Get addition value
     * @return string|null
     */
    public function getAddition()
    {
        return $this->addition;
    }
    /**
     * Set addition value
     * @param string $addition
     * @return \Webservices\StructType\InsolvencyAddress
     */
    public function setAddition($addition = null)
    {
        // validation for constraint: string
        if (!is_null($addition) && !is_string($addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addition)), __LINE__);
        }
        $this->addition = $addition;
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
     * @return \Webservices\StructType\InsolvencyAddress
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
     * @return \Webservices\StructType\InsolvencyAddress
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
     * @return \Webservices\StructType\InsolvencyAddress
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
     * @return \Webservices\StructType\InsolvencyAddress
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
     * Get start_date value
     * @return string|null
     */
    public function getStart_date()
    {
        return $this->start_date;
    }
    /**
     * Set start_date value
     * @param string $start_date
     * @return \Webservices\StructType\InsolvencyAddress
     */
    public function setStart_date($start_date = null)
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_date)), __LINE__);
        }
        $this->start_date = $start_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyAddress
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
