<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnbSearchReferenceV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DnbSearchReferenceV2RequestType extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The streetname
     * @var string
     */
    public $streetname;
    /**
     * The houseno
     * @var string
     */
    public $houseno;
    /**
     * The housenoaddition
     * @var string
     */
    public $housenoaddition;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The cityname
     * @var string
     */
    public $cityname;
    /**
     * The region
     * @var string
     */
    public $region;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for dnbSearchReferenceV2RequestType
     * @uses DnbSearchReferenceV2RequestType::setName()
     * @uses DnbSearchReferenceV2RequestType::setStreetname()
     * @uses DnbSearchReferenceV2RequestType::setHouseno()
     * @uses DnbSearchReferenceV2RequestType::setHousenoaddition()
     * @uses DnbSearchReferenceV2RequestType::setPostcode()
     * @uses DnbSearchReferenceV2RequestType::setCityname()
     * @uses DnbSearchReferenceV2RequestType::setRegion()
     * @uses DnbSearchReferenceV2RequestType::setCountry()
     * @uses DnbSearchReferenceV2RequestType::setPage()
     * @param string $name
     * @param string $streetname
     * @param string $houseno
     * @param string $housenoaddition
     * @param string $postcode
     * @param string $cityname
     * @param string $region
     * @param string $country
     * @param int $page
     */
    public function __construct($name = null, $streetname = null, $houseno = null, $housenoaddition = null, $postcode = null, $cityname = null, $region = null, $country = null, $page = null)
    {
        $this
            ->setName($name)
            ->setStreetname($streetname)
            ->setHouseno($houseno)
            ->setHousenoaddition($housenoaddition)
            ->setPostcode($postcode)
            ->setCityname($cityname)
            ->setRegion($region)
            ->setCountry($country)
            ->setPage($page);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
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
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
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
     * @return string|null
     */
    public function getHouseno()
    {
        return $this->houseno;
    }
    /**
     * Set houseno value
     * @param string $houseno
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
     */
    public function setHouseno($houseno = null)
    {
        // validation for constraint: string
        if (!is_null($houseno) && !is_string($houseno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($houseno)), __LINE__);
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
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
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
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
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
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
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
     * Get region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Set region value
     * @param string $region
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        $this->region = $region;
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
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
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
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
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
     * @return \Webservices\StructType\DnbSearchReferenceV2RequestType
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
