<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressDistrictSearchRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AddressDistrictSearchRequestType extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for addressDistrictSearchRequestType
     * @uses AddressDistrictSearchRequestType::setName()
     * @uses AddressDistrictSearchRequestType::setPage()
     * @param string $name
     * @param int $page
     */
    public function __construct($name = null, $page = null)
    {
        $this
            ->setName($name)
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
     * @return \Webservices\StructType\AddressDistrictSearchRequestType
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
     * @return \Webservices\StructType\AddressDistrictSearchRequestType
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
     * @return \Webservices\StructType\AddressDistrictSearchRequestType
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
