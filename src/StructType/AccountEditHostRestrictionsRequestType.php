<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountEditHostRestrictionsRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountEditHostRestrictionsRequestType extends AbstractStructBase
{
    /**
     * The accountid
     * @var int
     */
    public $accountid;
    /**
     * The restrictions
     * @var string
     */
    public $restrictions;
    /**
     * Constructor method for accountEditHostRestrictionsRequestType
     * @uses AccountEditHostRestrictionsRequestType::setAccountid()
     * @uses AccountEditHostRestrictionsRequestType::setRestrictions()
     * @param int $accountid
     * @param string $restrictions
     */
    public function __construct($accountid = null, $restrictions = null)
    {
        $this
            ->setAccountid($accountid)
            ->setRestrictions($restrictions);
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
     * @return \Webservices\StructType\AccountEditHostRestrictionsRequestType
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
     * @return \Webservices\StructType\AccountEditHostRestrictionsRequestType
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
     * @return \Webservices\StructType\AccountEditHostRestrictionsRequestType
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
