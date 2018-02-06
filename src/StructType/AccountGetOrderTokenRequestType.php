<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountGetOrderTokenRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountGetOrderTokenRequestType extends AbstractStructBase
{
    /**
     * The accountid
     * @var int
     */
    public $accountid;
    /**
     * The return_url
     * @var string
     */
    public $return_url;
    /**
     * Constructor method for accountGetOrderTokenRequestType
     * @uses AccountGetOrderTokenRequestType::setAccountid()
     * @uses AccountGetOrderTokenRequestType::setReturn_url()
     * @param int $accountid
     * @param string $return_url
     */
    public function __construct($accountid = null, $return_url = null)
    {
        $this
            ->setAccountid($accountid)
            ->setReturn_url($return_url);
    }
    /**
     * Get accountid value
     * @return int|null
     */
    public function getAccountid()
    {
        return $this->accountid;
    }
    /**
     * Set accountid value
     * @param int $accountid
     * @return \Webservices\StructType\AccountGetOrderTokenRequestType
     */
    public function setAccountid($accountid = null)
    {
        // validation for constraint: int
        if (!is_null($accountid) && !is_numeric($accountid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accountid)), __LINE__);
        }
        $this->accountid = $accountid;
        return $this;
    }
    /**
     * Get return_url value
     * @return string|null
     */
    public function getReturn_url()
    {
        return $this->return_url;
    }
    /**
     * Set return_url value
     * @param string $return_url
     * @return \Webservices\StructType\AccountGetOrderTokenRequestType
     */
    public function setReturn_url($return_url = null)
    {
        // validation for constraint: string
        if (!is_null($return_url) && !is_string($return_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($return_url)), __LINE__);
        }
        $this->return_url = $return_url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AccountGetOrderTokenRequestType
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
