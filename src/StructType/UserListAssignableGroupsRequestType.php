<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userListAssignableGroupsRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserListAssignableGroupsRequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for userListAssignableGroupsRequestType
     * @uses UserListAssignableGroupsRequestType::setUserid()
     * @uses UserListAssignableGroupsRequestType::setPage()
     * @param int $userid
     * @param int $page
     */
    public function __construct($userid = null, $page = null)
    {
        $this
            ->setUserid($userid)
            ->setPage($page);
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
     * @return \Webservices\StructType\UserListAssignableGroupsRequestType
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
     * @return \Webservices\StructType\UserListAssignableGroupsRequestType
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
     * @return \Webservices\StructType\UserListAssignableGroupsRequestType
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
