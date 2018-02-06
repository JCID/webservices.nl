<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carVWEListVersionsRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEListVersionsRequestType extends AbstractStructBase
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
     * The brand_id
     * @var int
     */
    public $brand_id;
    /**
     * The model_id
     * @var int
     */
    public $model_id;
    /**
     * The fuel_type_id
     * @var int
     */
    public $fuel_type_id;
    /**
     * The body_style_id
     * @var int
     */
    public $body_style_id;
    /**
     * The doors
     * @var int
     */
    public $doors;
    /**
     * The gear_id
     * @var int
     */
    public $gear_id;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for carVWEListVersionsRequestType
     * @uses CarVWEListVersionsRequestType::setProduction_year()
     * @uses CarVWEListVersionsRequestType::setKind_id()
     * @uses CarVWEListVersionsRequestType::setBrand_id()
     * @uses CarVWEListVersionsRequestType::setModel_id()
     * @uses CarVWEListVersionsRequestType::setFuel_type_id()
     * @uses CarVWEListVersionsRequestType::setBody_style_id()
     * @uses CarVWEListVersionsRequestType::setDoors()
     * @uses CarVWEListVersionsRequestType::setGear_id()
     * @uses CarVWEListVersionsRequestType::setPage()
     * @param int $production_year
     * @param int $kind_id
     * @param int $brand_id
     * @param int $model_id
     * @param int $fuel_type_id
     * @param int $body_style_id
     * @param int $doors
     * @param int $gear_id
     * @param int $page
     */
    public function __construct($production_year = null, $kind_id = null, $brand_id = null, $model_id = null, $fuel_type_id = null, $body_style_id = null, $doors = null, $gear_id = null, $page = null)
    {
        $this
            ->setProduction_year($production_year)
            ->setKind_id($kind_id)
            ->setBrand_id($brand_id)
            ->setModel_id($model_id)
            ->setFuel_type_id($fuel_type_id)
            ->setBody_style_id($body_style_id)
            ->setDoors($doors)
            ->setGear_id($gear_id)
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
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
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
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
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
     * Get brand_id value
     * @return int|null
     */
    public function getBrand_id()
    {
        return $this->brand_id;
    }
    /**
     * Set brand_id value
     * @param int $brand_id
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
     */
    public function setBrand_id($brand_id = null)
    {
        // validation for constraint: int
        if (!is_null($brand_id) && !is_numeric($brand_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brand_id)), __LINE__);
        }
        $this->brand_id = $brand_id;
        return $this;
    }
    /**
     * Get model_id value
     * @return int|null
     */
    public function getModel_id()
    {
        return $this->model_id;
    }
    /**
     * Set model_id value
     * @param int $model_id
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
     */
    public function setModel_id($model_id = null)
    {
        // validation for constraint: int
        if (!is_null($model_id) && !is_numeric($model_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($model_id)), __LINE__);
        }
        $this->model_id = $model_id;
        return $this;
    }
    /**
     * Get fuel_type_id value
     * @return int|null
     */
    public function getFuel_type_id()
    {
        return $this->fuel_type_id;
    }
    /**
     * Set fuel_type_id value
     * @param int $fuel_type_id
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
     */
    public function setFuel_type_id($fuel_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($fuel_type_id) && !is_numeric($fuel_type_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fuel_type_id)), __LINE__);
        }
        $this->fuel_type_id = $fuel_type_id;
        return $this;
    }
    /**
     * Get body_style_id value
     * @return int|null
     */
    public function getBody_style_id()
    {
        return $this->body_style_id;
    }
    /**
     * Set body_style_id value
     * @param int $body_style_id
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
     */
    public function setBody_style_id($body_style_id = null)
    {
        // validation for constraint: int
        if (!is_null($body_style_id) && !is_numeric($body_style_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($body_style_id)), __LINE__);
        }
        $this->body_style_id = $body_style_id;
        return $this;
    }
    /**
     * Get doors value
     * @return int|null
     */
    public function getDoors()
    {
        return $this->doors;
    }
    /**
     * Set doors value
     * @param int $doors
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
     */
    public function setDoors($doors = null)
    {
        // validation for constraint: int
        if (!is_null($doors) && !is_numeric($doors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($doors)), __LINE__);
        }
        $this->doors = $doors;
        return $this;
    }
    /**
     * Get gear_id value
     * @return int|null
     */
    public function getGear_id()
    {
        return $this->gear_id;
    }
    /**
     * Set gear_id value
     * @param int $gear_id
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
     */
    public function setGear_id($gear_id = null)
    {
        // validation for constraint: int
        if (!is_null($gear_id) && !is_numeric($gear_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gear_id)), __LINE__);
        }
        $this->gear_id = $gear_id;
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
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
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
     * @return \Webservices\StructType\CarVWEListVersionsRequestType
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
