<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessSearchPostcodeRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSearchPostcodeRequestType extends AbstractStructBase
{
    /**
     * The nbcode
     * @var string
     */
    public $nbcode;
    /**
     * The lettercomb
     * @var string
     */
    public $lettercomb;
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
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for businessSearchPostcodeRequestType
     * @uses BusinessSearchPostcodeRequestType::setNbcode()
     * @uses BusinessSearchPostcodeRequestType::setLettercomb()
     * @uses BusinessSearchPostcodeRequestType::setHouseno()
     * @uses BusinessSearchPostcodeRequestType::setHousenoaddition()
     * @uses BusinessSearchPostcodeRequestType::setPage()
     * @param string $nbcode
     * @param string $lettercomb
     * @param int $houseno
     * @param string $housenoaddition
     * @param int $page
     */
    public function __construct($nbcode = null, $lettercomb = null, $houseno = null, $housenoaddition = null, $page = null)
    {
        $this
            ->setNbcode($nbcode)
            ->setLettercomb($lettercomb)
            ->setHouseno($houseno)
            ->setHousenoaddition($housenoaddition)
            ->setPage($page);
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
     * @return \Webservices\StructType\BusinessSearchPostcodeRequestType
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
     * Get lettercomb value
     * @return string|null
     */
    public function getLettercomb()
    {
        return $this->lettercomb;
    }
    /**
     * Set lettercomb value
     * @param string $lettercomb
     * @return \Webservices\StructType\BusinessSearchPostcodeRequestType
     */
    public function setLettercomb($lettercomb = null)
    {
        // validation for constraint: string
        if (!is_null($lettercomb) && !is_string($lettercomb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lettercomb)), __LINE__);
        }
        $this->lettercomb = $lettercomb;
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
     * @return \Webservices\StructType\BusinessSearchPostcodeRequestType
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
     * @return \Webservices\StructType\BusinessSearchPostcodeRequestType
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
     * @return \Webservices\StructType\BusinessSearchPostcodeRequestType
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
     * @return \Webservices\StructType\BusinessSearchPostcodeRequestType
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
