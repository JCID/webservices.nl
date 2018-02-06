<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarType extends AbstractStructBase
{
    /**
     * The car_id
     * @var string
     */
    public $car_id;
    /**
     * The brand
     * @var string
     */
    public $brand;
    /**
     * The model
     * @var string
     */
    public $model;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The gearbox
     * @var string
     */
    public $gearbox;
    /**
     * The first_year
     * @var int
     */
    public $first_year;
    /**
     * The last_year
     * @var int
     */
    public $last_year;
    /**
     * Constructor method for CarType
     * @uses CarType::setCar_id()
     * @uses CarType::setBrand()
     * @uses CarType::setModel()
     * @uses CarType::setType()
     * @uses CarType::setGearbox()
     * @uses CarType::setFirst_year()
     * @uses CarType::setLast_year()
     * @param string $car_id
     * @param string $brand
     * @param string $model
     * @param string $type
     * @param string $gearbox
     * @param int $first_year
     * @param int $last_year
     */
    public function __construct($car_id = null, $brand = null, $model = null, $type = null, $gearbox = null, $first_year = null, $last_year = null)
    {
        $this
            ->setCar_id($car_id)
            ->setBrand($brand)
            ->setModel($model)
            ->setType($type)
            ->setGearbox($gearbox)
            ->setFirst_year($first_year)
            ->setLast_year($last_year);
    }
    /**
     * Get car_id value
     * @return string|null
     */
    public function getCar_id()
    {
        return $this->car_id;
    }
    /**
     * Set car_id value
     * @param string $car_id
     * @return \Webservices\StructType\CarType
     */
    public function setCar_id($car_id = null)
    {
        // validation for constraint: string
        if (!is_null($car_id) && !is_string($car_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($car_id)), __LINE__);
        }
        $this->car_id = $car_id;
        return $this;
    }
    /**
     * Get brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * Set brand value
     * @param string $brand
     * @return \Webservices\StructType\CarType
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        $this->brand = $brand;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \Webservices\StructType\CarType
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\CarType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get gearbox value
     * @return string|null
     */
    public function getGearbox()
    {
        return $this->gearbox;
    }
    /**
     * Set gearbox value
     * @param string $gearbox
     * @return \Webservices\StructType\CarType
     */
    public function setGearbox($gearbox = null)
    {
        // validation for constraint: string
        if (!is_null($gearbox) && !is_string($gearbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gearbox)), __LINE__);
        }
        $this->gearbox = $gearbox;
        return $this;
    }
    /**
     * Get first_year value
     * @return int|null
     */
    public function getFirst_year()
    {
        return $this->first_year;
    }
    /**
     * Set first_year value
     * @param int $first_year
     * @return \Webservices\StructType\CarType
     */
    public function setFirst_year($first_year = null)
    {
        // validation for constraint: int
        if (!is_null($first_year) && !is_numeric($first_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($first_year)), __LINE__);
        }
        $this->first_year = $first_year;
        return $this;
    }
    /**
     * Get last_year value
     * @return int|null
     */
    public function getLast_year()
    {
        return $this->last_year;
    }
    /**
     * Set last_year value
     * @param int $last_year
     * @return \Webservices\StructType\CarType
     */
    public function setLast_year($last_year = null)
    {
        // validation for constraint: int
        if (!is_null($last_year) && !is_numeric($last_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($last_year)), __LINE__);
        }
        $this->last_year = $last_year;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarType
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
