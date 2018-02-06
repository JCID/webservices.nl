<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountViewBalanceRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountViewBalanceRequestType extends AbstractStructBase
{
    /**
     * The accountid
     * @var int
     */
    public $accountid;
    /**
     * Constructor method for accountViewBalanceRequestType
     * @uses AccountViewBalanceRequestType::setAccountid()
     * @param int $accountid
     */
    public function __construct($accountid = null)
    {
        $this
            ->setAccountid($accountid);
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
     * @return \Webservices\StructType\AccountViewBalanceRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AccountViewBalanceRequestType
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
