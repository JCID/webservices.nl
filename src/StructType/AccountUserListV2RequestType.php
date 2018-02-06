<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountUserListV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountUserListV2RequestType extends AbstractStructBase
{
    /**
     * The accountid
     * @var int
     */
    public $accountid;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for accountUserListV2RequestType
     * @uses AccountUserListV2RequestType::setAccountid()
     * @uses AccountUserListV2RequestType::setPage()
     * @param int $accountid
     * @param int $page
     */
    public function __construct($accountid = null, $page = null)
    {
        $this
            ->setAccountid($accountid)
            ->setPage($page);
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
     * @return \Webservices\StructType\AccountUserListV2RequestType
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
     * @return \Webservices\StructType\AccountUserListV2RequestType
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
     * @return \Webservices\StructType\AccountUserListV2RequestType
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
