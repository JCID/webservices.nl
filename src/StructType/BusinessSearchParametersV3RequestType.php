<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessSearchParametersV3RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSearchParametersV3RequestType extends AbstractStructBase
{
    /**
     * The tradename
     * @var string
     */
    public $tradename;
    /**
     * The cityname
     * @var string
     */
    public $cityname;
    /**
     * The streetname
     * @var string
     */
    public $streetname;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
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
     * The telephoneno
     * @var string
     */
    public $telephoneno;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for businessSearchParametersV3RequestType
     * @uses BusinessSearchParametersV3RequestType::setTradename()
     * @uses BusinessSearchParametersV3RequestType::setCityname()
     * @uses BusinessSearchParametersV3RequestType::setStreetname()
     * @uses BusinessSearchParametersV3RequestType::setPostcode()
     * @uses BusinessSearchParametersV3RequestType::setHouseno()
     * @uses BusinessSearchParametersV3RequestType::setHousenoaddition()
     * @uses BusinessSearchParametersV3RequestType::setTelephoneno()
     * @uses BusinessSearchParametersV3RequestType::setPage()
     * @param string $tradename
     * @param string $cityname
     * @param string $streetname
     * @param string $postcode
     * @param int $houseno
     * @param string $housenoaddition
     * @param string $telephoneno
     * @param int $page
     */
    public function __construct($tradename = null, $cityname = null, $streetname = null, $postcode = null, $houseno = null, $housenoaddition = null, $telephoneno = null, $page = null)
    {
        $this
            ->setTradename($tradename)
            ->setCityname($cityname)
            ->setStreetname($streetname)
            ->setPostcode($postcode)
            ->setHouseno($houseno)
            ->setHousenoaddition($housenoaddition)
            ->setTelephoneno($telephoneno)
            ->setPage($page);
    }
    /**
     * Get tradename value
     * @return string|null
     */
    public function getTradename()
    {
        return $this->tradename;
    }
    /**
     * Set tradename value
     * @param string $tradename
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
     */
    public function setTradename($tradename = null)
    {
        // validation for constraint: string
        if (!is_null($tradename) && !is_string($tradename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradename)), __LINE__);
        }
        $this->tradename = $tradename;
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
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
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
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
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
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
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
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
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
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
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
     * Get telephoneno value
     * @return string|null
     */
    public function getTelephoneno()
    {
        return $this->telephoneno;
    }
    /**
     * Set telephoneno value
     * @param string $telephoneno
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
     */
    public function setTelephoneno($telephoneno = null)
    {
        // validation for constraint: string
        if (!is_null($telephoneno) && !is_string($telephoneno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephoneno)), __LINE__);
        }
        $this->telephoneno = $telephoneno;
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
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
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
     * @return \Webservices\StructType\BusinessSearchParametersV3RequestType
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
