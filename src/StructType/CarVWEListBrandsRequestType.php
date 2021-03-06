<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carVWEListBrandsRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEListBrandsRequestType extends AbstractStructBase
{
    /**
     * The production_year
     * @var int
     */
    public $production_year;
    /**
     * The kind_id
     * @var int
     */
    public $kind_id;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for carVWEListBrandsRequestType
     * @uses CarVWEListBrandsRequestType::setProduction_year()
     * @uses CarVWEListBrandsRequestType::setKind_id()
     * @uses CarVWEListBrandsRequestType::setPage()
     * @param int $production_year
     * @param int $kind_id
     * @param int $page
     */
    public function __construct($production_year = null, $kind_id = null, $page = null)
    {
        $this
            ->setProduction_year($production_year)
            ->setKind_id($kind_id)
            ->setPage($page);
    }
    /**
     * Get production_year value
     * @return int|null
     */
    public function getProduction_year()
    {
        return $this->production_year;
    }
    /**
     * Set production_year value
     * @param int $production_year
     * @return \Webservices\StructType\CarVWEListBrandsRequestType
     */
    public function setProduction_year($production_year = null)
    {
        // validation for constraint: int
        if (!is_null($production_year) && !is_numeric($production_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($production_year)), __LINE__);
        }
        $this->production_year = $production_year;
        return $this;
    }
    /**
     * Get kind_id value
     * @return int|null
     */
    public function getKind_id()
    {
        return $this->kind_id;
    }
    /**
     * Set kind_id value
     * @param int $kind_id
     * @return \Webservices\StructType\CarVWEListBrandsRequestType
     */
    public function setKind_id($kind_id = null)
    {
        // validation for constraint: int
        if (!is_null($kind_id) && !is_numeric($kind_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($kind_id)), __LINE__);
        }
        $this->kind_id = $kind_id;
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
     * @return \Webservices\StructType\CarVWEListBrandsRequestType
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
     * @return \Webservices\StructType\CarVWEListBrandsRequestType
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
