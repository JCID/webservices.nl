<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for areaCodeToNeighborhoodcodeRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AreaCodeToNeighborhoodcodeRequestType extends AbstractStructBase
{
    /**
     * The areacode
     * @var string
     */
    public $areacode;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for areaCodeToNeighborhoodcodeRequestType
     * @uses AreaCodeToNeighborhoodcodeRequestType::setAreacode()
     * @uses AreaCodeToNeighborhoodcodeRequestType::setPage()
     * @param string $areacode
     * @param int $page
     */
    public function __construct($areacode = null, $page = null)
    {
        $this
            ->setAreacode($areacode)
            ->setPage($page);
    }
    /**
     * Get areacode value
     * @return string|null
     */
    public function getAreacode()
    {
        return $this->areacode;
    }
    /**
     * Set areacode value
     * @param string $areacode
     * @return \Webservices\StructType\AreaCodeToNeighborhoodcodeRequestType
     */
    public function setAreacode($areacode = null)
    {
        // validation for constraint: string
        if (!is_null($areacode) && !is_string($areacode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areacode)), __LINE__);
        }
        $this->areacode = $areacode;
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
     * @return \Webservices\StructType\AreaCodeToNeighborhoodcodeRequestType
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
     * @return \Webservices\StructType\AreaCodeToNeighborhoodcodeRequestType
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
