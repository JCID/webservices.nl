<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyCourtSession StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyCourtSession extends AbstractStructBase
{
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The house_number
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
     * The city
     * @var string
     */
    public $city;
    /**
     * Constructor method for InsolvencyCourtSession
     * @uses InsolvencyCourtSession::setStreet()
     * @uses InsolvencyCourtSession::setHouse_number()
     * @uses InsolvencyCourtSession::setAddition()
     * @uses InsolvencyCourtSession::setCity()
     * @param string $street
     * @param int $house_number
     * @param string $addition
     * @param string $city
     */
    public function __construct($street = null, $house_number = null, $addition = null, $city = null)
    {
        $this
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setAddition($addition)
            ->setCity($city);
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
     * @return \Webservices\StructType\InsolvencyCourtSession
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
     * @return \Webservices\StructType\InsolvencyCourtSession
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
     * @return \Webservices\StructType\InsolvencyCourtSession
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
     * @return \Webservices\StructType\InsolvencyCourtSession
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyCourtSession
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
