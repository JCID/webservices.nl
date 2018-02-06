<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userEditHostRestrictionsRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserEditHostRestrictionsRequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
    /**
     * The restrictions
     * @var string
     */
    public $restrictions;
    /**
     * Constructor method for userEditHostRestrictionsRequestType
     * @uses UserEditHostRestrictionsRequestType::setUserid()
     * @uses UserEditHostRestrictionsRequestType::setRestrictions()
     * @param int $userid
     * @param string $restrictions
     */
    public function __construct($userid = null, $restrictions = null)
    {
        $this
            ->setUserid($userid)
            ->setRestrictions($restrictions);
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
     * @return \Webservices\StructType\UserEditHostRestrictionsRequestType
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
     * Get restrictions value
     * @return string|null
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }
    /**
     * Set restrictions value
     * @param string $restrictions
     * @return \Webservices\StructType\UserEditHostRestrictionsRequestType
     */
    public function setRestrictions($restrictions = null)
    {
        // validation for constraint: string
        if (!is_null($restrictions) && !is_string($restrictions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restrictions)), __LINE__);
        }
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserEditHostRestrictionsRequestType
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
