<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessSearchAddressRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSearchAddressRequestType extends AbstractStructBase
{
    /**
     * The streetname
     * @var string
     */
    public $streetname;
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
     * The cityname
     * @var string
     */
    public $cityname;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for businessSearchAddressRequestType
     * @uses BusinessSearchAddressRequestType::setStreetname()
     * @uses BusinessSearchAddressRequestType::setHouseno()
     * @uses BusinessSearchAddressRequestType::setHousenoaddition()
     * @uses BusinessSearchAddressRequestType::setCityname()
     * @uses BusinessSearchAddressRequestType::setPage()
     * @param string $streetname
     * @param int $houseno
     * @param string $housenoaddition
     * @param string $cityname
     * @param int $page
     */
    public function __construct($streetname = null, $houseno = null, $housenoaddition = null, $cityname = null, $page = null)
    {
        $this
            ->setStreetname($streetname)
            ->setHouseno($houseno)
            ->setHousenoaddition($housenoaddition)
            ->setCityname($cityname)
            ->setPage($page);
    }
    /**
     * Get streetname value
     * @return string|null
     */
    public function getStreetname()
    {
        return $this->streetname;
    }
    /**
     * Set streetname value
     * @param string $streetname
     * @return \Webservices\StructType\BusinessSearchAddressRequestType
     */
    public function setStreetname($streetname = null)
    {
        // validation for constraint: string
        if (!is_null($streetname) && !is_string($streetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetname)), __LINE__);
        }
        $this->streetname = $streetname;
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
     * @return \Webservices\StructType\BusinessSearchAddressRequestType
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
     * @return \Webservices\StructType\BusinessSearchAddressRequestType
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
     * Get cityname value
     * @return string|null
     */
    public function getCityname()
    {
        return $this->cityname;
    }
    /**
     * Set cityname value
     * @param string $cityname
     * @return \Webservices\StructType\BusinessSearchAddressRequestType
     */
    public function setCityname($cityname = null)
    {
        // validation for constraint: string
        if (!is_null($cityname) && !is_string($cityname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityname)), __LINE__);
        }
        $this->cityname = $cityname;
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
     * @return \Webservices\StructType\BusinessSearchAddressRequestType
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
     * @return \Webservices\StructType\BusinessSearchAddressRequestType
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
