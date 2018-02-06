<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userSessionRemoveRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserSessionRemoveRequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
    /**
     * The reactid
     * @var string
     */
    public $reactid;
    /**
     * Constructor method for userSessionRemoveRequestType
     * @uses UserSessionRemoveRequestType::setUserid()
     * @uses UserSessionRemoveRequestType::setReactid()
     * @param int $userid
     * @param string $reactid
     */
    public function __construct($userid = null, $reactid = null)
    {
        $this
            ->setUserid($userid)
            ->setReactid($reactid);
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
     * @return \Webservices\StructType\UserSessionRemoveRequestType
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
     * Get reactid value
     * @return string|null
     */
    public function getReactid()
    {
        return $this->reactid;
    }
    /**
     * Set reactid value
     * @param string $reactid
     * @return \Webservices\StructType\UserSessionRemoveRequestType
     */
    public function setReactid($reactid = null)
    {
        // validation for constraint: string
        if (!is_null($reactid) && !is_string($reactid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reactid)), __LINE__);
        }
        $this->reactid = $reactid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserSessionRemoveRequestType
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
