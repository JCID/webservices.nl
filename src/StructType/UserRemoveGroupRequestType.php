<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userRemoveGroupRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserRemoveGroupRequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
    /**
     * The usergroupid
     * @var int
     */
    public $usergroupid;
    /**
     * Constructor method for userRemoveGroupRequestType
     * @uses UserRemoveGroupRequestType::setUserid()
     * @uses UserRemoveGroupRequestType::setUsergroupid()
     * @param int $userid
     * @param int $usergroupid
     */
    public function __construct($userid = null, $usergroupid = null)
    {
        $this
            ->setUserid($userid)
            ->setUsergroupid($usergroupid);
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
     * @return \Webservices\StructType\UserRemoveGroupRequestType
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
     * Get usergroupid value
     * @return int|null
     */
    public function getUsergroupid()
    {
        return $this->usergroupid;
    }
    /**
     * Set usergroupid value
     * @param int $usergroupid
     * @return \Webservices\StructType\UserRemoveGroupRequestType
     */
    public function setUsergroupid($usergroupid = null)
    {
        // validation for constraint: int
        if (!is_null($usergroupid) && !is_numeric($usergroupid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($usergroupid)), __LINE__);
        }
        $this->usergroupid = $usergroupid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserRemoveGroupRequestType
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
