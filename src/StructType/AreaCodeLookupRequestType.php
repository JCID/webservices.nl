<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for areaCodeLookupRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AreaCodeLookupRequestType extends AbstractStructBase
{
    /**
     * The neighborhoodcode
     * @var string
     */
    public $neighborhoodcode;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for areaCodeLookupRequestType
     * @uses AreaCodeLookupRequestType::setNeighborhoodcode()
     * @uses AreaCodeLookupRequestType::setPage()
     * @param string $neighborhoodcode
     * @param int $page
     */
    public function __construct($neighborhoodcode = null, $page = null)
    {
        $this
            ->setNeighborhoodcode($neighborhoodcode)
            ->setPage($page);
    }
    /**
     * Get neighborhoodcode value
     * @return string|null
     */
    public function getNeighborhoodcode()
    {
        return $this->neighborhoodcode;
    }
    /**
     * Set neighborhoodcode value
     * @param string $neighborhoodcode
     * @return \Webservices\StructType\AreaCodeLookupRequestType
     */
    public function setNeighborhoodcode($neighborhoodcode = null)
    {
        // validation for constraint: string
        if (!is_null($neighborhoodcode) && !is_string($neighborhoodcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($neighborhoodcode)), __LINE__);
        }
        $this->neighborhoodcode = $neighborhoodcode;
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
     * @return \Webservices\StructType\AreaCodeLookupRequestType
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
     * @return \Webservices\StructType\AreaCodeLookupRequestType
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
