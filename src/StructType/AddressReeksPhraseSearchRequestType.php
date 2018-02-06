<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressReeksPhraseSearchRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AddressReeksPhraseSearchRequestType extends AbstractStructBase
{
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for addressReeksPhraseSearchRequestType
     * @uses AddressReeksPhraseSearchRequestType::setAddress()
     * @uses AddressReeksPhraseSearchRequestType::setPage()
     * @param string $address
     * @param int $page
     */
    public function __construct($address = null, $page = null)
    {
        $this
            ->setAddress($address)
            ->setPage($page);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Webservices\StructType\AddressReeksPhraseSearchRequestType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
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
     * @return \Webservices\StructType\AddressReeksPhraseSearchRequestType
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
     * @return \Webservices\StructType\AddressReeksPhraseSearchRequestType
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
