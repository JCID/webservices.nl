<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userListAssignableGroupsResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserListAssignableGroupsResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\UserGroupPagedResult
     */
    public $out;
    /**
     * Constructor method for userListAssignableGroupsResponseType
     * @uses UserListAssignableGroupsResponseType::setOut()
     * @param \Webservices\StructType\UserGroupPagedResult $out
     */
    public function __construct(\Webservices\StructType\UserGroupPagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\UserGroupPagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\UserGroupPagedResult $out
     * @return \Webservices\StructType\UserListAssignableGroupsResponseType
     */
    public function setOut(\Webservices\StructType\UserGroupPagedResult $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserListAssignableGroupsResponseType
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
