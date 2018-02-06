<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userViewBalanceRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserViewBalanceRequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
    /**
     * Constructor method for userViewBalanceRequestType
     * @uses UserViewBalanceRequestType::setUserid()
     * @param int $userid
     */
    public function __construct($userid = null)
    {
        $this
            ->setUserid($userid);
    }
    /**
     * Get userid value
     * @return int|null
     */
    public function getUserid()
    {
        return $this->userid;
    }
    /**
     * Set userid value
     * @param int $userid
     * @return \Webservices\StructType\UserViewBalanceRequestType
     */
    public function setUserid($userid = null)
    {
        // validation for constraint: int
        if (!is_null($userid) && !is_numeric($userid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userid)), __LINE__);
        }
        $this->userid = $userid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserViewBalanceRequestType
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
