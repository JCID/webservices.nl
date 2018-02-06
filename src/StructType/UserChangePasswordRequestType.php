<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userChangePasswordRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserChangePasswordRequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
    /**
     * The old_password
     * @var string
     */
    public $old_password;
    /**
     * The new_password
     * @var string
     */
    public $new_password;
    /**
     * Constructor method for userChangePasswordRequestType
     * @uses UserChangePasswordRequestType::setUserid()
     * @uses UserChangePasswordRequestType::setOld_password()
     * @uses UserChangePasswordRequestType::setNew_password()
     * @param int $userid
     * @param string $old_password
     * @param string $new_password
     */
    public function __construct($userid = null, $old_password = null, $new_password = null)
    {
        $this
            ->setUserid($userid)
            ->setOld_password($old_password)
            ->setNew_password($new_password);
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
     * @return \Webservices\StructType\UserChangePasswordRequestType
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
     * Get old_password value
     * @return string|null
     */
    public function getOld_password()
    {
        return $this->old_password;
    }
    /**
     * Set old_password value
     * @param string $old_password
     * @return \Webservices\StructType\UserChangePasswordRequestType
     */
    public function setOld_password($old_password = null)
    {
        // validation for constraint: string
        if (!is_null($old_password) && !is_string($old_password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($old_password)), __LINE__);
        }
        $this->old_password = $old_password;
        return $this;
    }
    /**
     * Get new_password value
     * @return string|null
     */
    public function getNew_password()
    {
        return $this->new_password;
    }
    /**
     * Set new_password value
     * @param string $new_password
     * @return \Webservices\StructType\UserChangePasswordRequestType
     */
    public function setNew_password($new_password = null)
    {
        // validation for constraint: string
        if (!is_null($new_password) && !is_string($new_password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($new_password)), __LINE__);
        }
        $this->new_password = $new_password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserChangePasswordRequestType
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
