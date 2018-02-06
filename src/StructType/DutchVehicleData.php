<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleData extends AbstractStructBase
{
    /**
     * The license_plate
     * @var string
     */
    public $license_plate;
    /**
     * The location_vin_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $location_vin_number;
    /**
     * The catalog_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $catalog_price;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $category;
    /**
     * The brand_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand_code;
    /**
     * The brand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand;
    /**
     * The model
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $model;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The body_style
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $body_style;
    /**
     * The color
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $color;
    /**
     * The secondary_color
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $secondary_color;
    /**
     * Constructor method for DutchVehicleData
     * @uses DutchVehicleData::setLicense_plate()
     * @uses DutchVehicleData::setLocation_vin_number()
     * @uses DutchVehicleData::setCatalog_price()
     * @uses DutchVehicleData::setCategory()
     * @uses DutchVehicleData::setBrand_code()
     * @uses DutchVehicleData::setBrand()
     * @uses DutchVehicleData::setModel()
     * @uses DutchVehicleData::setType()
     * @uses DutchVehicleData::setBody_style()
     * @uses DutchVehicleData::setColor()
     * @uses DutchVehicleData::setSecondary_color()
     * @param string $license_plate
     * @param string $location_vin_number
     * @param int $catalog_price
     * @param string $category
     * @param string $brand_code
     * @param string $brand
     * @param string $model
     * @param string $type
     * @param string $body_style
     * @param string $color
     * @param string $secondary_color
     */
    public function __construct($license_plate = null, $location_vin_number = null, $catalog_price = null, $category = null, $brand_code = null, $brand = null, $model = null, $type = null, $body_style = null, $color = null, $secondary_color = null)
    {
        $this
            ->setLicense_plate($license_plate)
            ->setLocation_vin_number($location_vin_number)
            ->setCatalog_price($catalog_price)
            ->setCategory($category)
            ->setBrand_code($brand_code)
            ->setBrand($brand)
            ->setModel($model)
            ->setType($type)
            ->setBody_style($body_style)
            ->setColor($color)
            ->setSecondary_color($secondary_color);
    }
    /**
     * Get license_plate value
     * @return string|null
     */
    public function getLicense_plate()
    {
        return $this->license_plate;
    }
    /**
     * Set license_plate value
     * @param string $license_plate
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setLicense_plate($license_plate = null)
    {
        // validation for constraint: string
        if (!is_null($license_plate) && !is_string($license_plate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($license_plate)), __LINE__);
        }
        $this->license_plate = $license_plate;
        return $this;
    }
    /**
     * Get location_vin_number value
     * @return string|null
     */
    public function getLocation_vin_number()
    {
        return $this->location_vin_number;
    }
    /**
     * Set location_vin_number value
     * @param string $location_vin_number
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setLocation_vin_number($location_vin_number = null)
    {
        // validation for constraint: string
        if (!is_null($location_vin_number) && !is_string($location_vin_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location_vin_number)), __LINE__);
        }
        $this->location_vin_number = $location_vin_number;
        return $this;
    }
    /**
     * Get catalog_price value
     * @return int|null
     */
    public function getCatalog_price()
    {
        return $this->catalog_price;
    }
    /**
     * Set catalog_price value
     * @param int $catalog_price
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setCatalog_price($catalog_price = null)
    {
        // validation for constraint: int
        if (!is_null($catalog_price) && !is_numeric($catalog_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($catalog_price)), __LINE__);
        }
        $this->catalog_price = $catalog_price;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get brand_code value
     * @return string|null
     */
    public function getBrand_code()
    {
        return $this->brand_code;
    }
    /**
     * Set brand_code value
     * @param string $brand_code
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setBrand_code($brand_code = null)
    {
        // validation for constraint: string
        if (!is_null($brand_code) && !is_string($brand_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand_code)), __LINE__);
        }
        $this->brand_code = $brand_code;
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
     * @return \Webservices\StructType\DutchVehicleData
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
     * @return \Webservices\StructType\DutchVehicleData
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
     * @return \Webservices\StructType\DutchVehicleData
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
     * Get body_style value
     * @return string|null
     */
    public function getBody_style()
    {
        return $this->body_style;
    }
    /**
     * Set body_style value
     * @param string $body_style
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setBody_style($body_style = null)
    {
        // validation for constraint: string
        if (!is_null($body_style) && !is_string($body_style)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($body_style)), __LINE__);
        }
        $this->body_style = $body_style;
        return $this;
    }
    /**
     * Get color value
     * @return string|null
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * Set color value
     * @param string $color
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setColor($color = null)
    {
        // validation for constraint: string
        if (!is_null($color) && !is_string($color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($color)), __LINE__);
        }
        $this->color = $color;
        return $this;
    }
    /**
     * Get secondary_color value
     * @return string|null
     */
    public function getSecondary_color()
    {
        return $this->secondary_color;
    }
    /**
     * Set secondary_color value
     * @param string $secondary_color
     * @return \Webservices\StructType\DutchVehicleData
     */
    public function setSecondary_color($secondary_color = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_color) && !is_string($secondary_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondary_color)), __LINE__);
        }
        $this->secondary_color = $secondary_color;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleData
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
