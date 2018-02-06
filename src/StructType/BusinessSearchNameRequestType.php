<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessSearchNameRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSearchNameRequestType extends AbstractStructBase
{
    /**
     * The tradename
     * @var string
     */
    public $tradename;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for businessSearchNameRequestType
     * @uses BusinessSearchNameRequestType::setTradename()
     * @uses BusinessSearchNameRequestType::setPage()
     * @param string $tradename
     * @param int $page
     */
    public function __construct($tradename = null, $page = null)
    {
        $this
            ->setTradename($tradename)
            ->setPage($page);
    }
    /**
     * Get tradename value
     * @return string|null
     */
    public function getTradename()
    {
        return $this->tradename;
    }
    /**
     * Set tradename value
     * @param string $tradename
     * @return \Webservices\StructType\BusinessSearchNameRequestType
     */
    public function setTradename($tradename = null)
    {
        // validation for constraint: string
        if (!is_null($tradename) && !is_string($tradename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradename)), __LINE__);
        }
        $this->tradename = $tradename;
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
     * @return \Webservices\StructType\BusinessSearchNameRequestType
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
     * @return \Webservices\StructType\BusinessSearchNameRequestType
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
