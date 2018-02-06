<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountUserSearchV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountUserSearchV2RequestType extends AbstractStructBase
{
    /**
     * The accountid
     * @var int
     */
    public $accountid;
    /**
     * The phrase
     * @var string
     */
    public $phrase;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for accountUserSearchV2RequestType
     * @uses AccountUserSearchV2RequestType::setAccountid()
     * @uses AccountUserSearchV2RequestType::setPhrase()
     * @uses AccountUserSearchV2RequestType::setPage()
     * @param int $accountid
     * @param string $phrase
     * @param int $page
     */
    public function __construct($accountid = null, $phrase = null, $page = null)
    {
        $this
            ->setAccountid($accountid)
            ->setPhrase($phrase)
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
     * @return \Webservices\StructType\AccountUserSearchV2RequestType
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
     * Get phrase value
     * @return string|null
     */
    public function getPhrase()
    {
        return $this->phrase;
    }
    /**
     * Set phrase value
     * @param string $phrase
     * @return \Webservices\StructType\AccountUserSearchV2RequestType
     */
    public function setPhrase($phrase = null)
    {
        // validation for constraint: string
        if (!is_null($phrase) && !is_string($phrase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phrase)), __LINE__);
        }
        $this->phrase = $phrase;
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
     * @return \Webservices\StructType\AccountUserSearchV2RequestType
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
     * @return \Webservices\StructType\AccountUserSearchV2RequestType
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
