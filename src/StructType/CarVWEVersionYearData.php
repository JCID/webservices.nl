<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEVersionYearData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEVersionYearData extends AbstractStructBase
{
    /**
     * The atl_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $atl_code;
    /**
     * The brand_atl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand_atl;
    /**
     * The model_atl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $model_atl;
    /**
     * The version_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version_name;
    /**
     * The short_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $short_type;
    /**
     * The fuel_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fuel_type;
    /**
     * The cylinder_capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $cylinder_capacity;
    /**
     * The seats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $seats;
    /**
     * The power
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $power;
    /**
     * The energy_label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $energy_label;
    /**
     * The emission_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $emission_code;
    /**
     * The doors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $doors;
    /**
     * The gear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gear;
    /**
     * The top_speed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $top_speed;
    /**
     * The folder_weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $folder_weight;
    /**
     * The train_weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $train_weight;
    /**
     * The layout
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $layout;
    /**
     * The body_style
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $body_style;
    /**
     * The acceleration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $acceleration;
    /**
     * The sportivity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $sportivity;
    /**
     * The prices
     * @var \Webservices\StructType\CarVWEPrices
     */
    public $prices;
    /**
     * Constructor method for CarVWEVersionYearData
     * @uses CarVWEVersionYearData::setAtl_code()
     * @uses CarVWEVersionYearData::setBrand_atl()
     * @uses CarVWEVersionYearData::setModel_atl()
     * @uses CarVWEVersionYearData::setVersion_name()
     * @uses CarVWEVersionYearData::setShort_type()
     * @uses CarVWEVersionYearData::setFuel_type()
     * @uses CarVWEVersionYearData::setCylinder_capacity()
     * @uses CarVWEVersionYearData::setSeats()
     * @uses CarVWEVersionYearData::setPower()
     * @uses CarVWEVersionYearData::setEnergy_label()
     * @uses CarVWEVersionYearData::setEmission_code()
     * @uses CarVWEVersionYearData::setDoors()
     * @uses CarVWEVersionYearData::setGear()
     * @uses CarVWEVersionYearData::setTop_speed()
     * @uses CarVWEVersionYearData::setFolder_weight()
     * @uses CarVWEVersionYearData::setTrain_weight()
     * @uses CarVWEVersionYearData::setLayout()
     * @uses CarVWEVersionYearData::setBody_style()
     * @uses CarVWEVersionYearData::setAcceleration()
     * @uses CarVWEVersionYearData::setSportivity()
     * @uses CarVWEVersionYearData::setPrices()
     * @param int $atl_code
     * @param string $brand_atl
     * @param string $model_atl
     * @param string $version_name
     * @param string $short_type
     * @param string $fuel_type
     * @param int $cylinder_capacity
     * @param int $seats
     * @param int $power
     * @param string $energy_label
     * @param string $emission_code
     * @param int $doors
     * @param string $gear
     * @param int $top_speed
     * @param int $folder_weight
     * @param int $train_weight
     * @param string $layout
     * @param string $body_style
     * @param float $acceleration
     * @param float $sportivity
     * @param \Webservices\StructType\CarVWEPrices $prices
     */
    public function __construct($atl_code = null, $brand_atl = null, $model_atl = null, $version_name = null, $short_type = null, $fuel_type = null, $cylinder_capacity = null, $seats = null, $power = null, $energy_label = null, $emission_code = null, $doors = null, $gear = null, $top_speed = null, $folder_weight = null, $train_weight = null, $layout = null, $body_style = null, $acceleration = null, $sportivity = null, \Webservices\StructType\CarVWEPrices $prices = null)
    {
        $this
            ->setAtl_code($atl_code)
            ->setBrand_atl($brand_atl)
            ->setModel_atl($model_atl)
            ->setVersion_name($version_name)
            ->setShort_type($short_type)
            ->setFuel_type($fuel_type)
            ->setCylinder_capacity($cylinder_capacity)
            ->setSeats($seats)
            ->setPower($power)
            ->setEnergy_label($energy_label)
            ->setEmission_code($emission_code)
            ->setDoors($doors)
            ->setGear($gear)
            ->setTop_speed($top_speed)
            ->setFolder_weight($folder_weight)
            ->setTrain_weight($train_weight)
            ->setLayout($layout)
            ->setBody_style($body_style)
            ->setAcceleration($acceleration)
            ->setSportivity($sportivity)
            ->setPrices($prices);
    }
    /**
     * Get atl_code value
     * @return int|null
     */
    public function getAtl_code()
    {
        return $this->atl_code;
    }
    /**
     * Set atl_code value
     * @param int $atl_code
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setAtl_code($atl_code = null)
    {
        // validation for constraint: int
        if (!is_null($atl_code) && !is_numeric($atl_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($atl_code)), __LINE__);
        }
        $this->atl_code = $atl_code;
        return $this;
    }
    /**
     * Get brand_atl value
     * @return string|null
     */
    public function getBrand_atl()
    {
        return $this->brand_atl;
    }
    /**
     * Set brand_atl value
     * @param string $brand_atl
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setBrand_atl($brand_atl = null)
    {
        // validation for constraint: string
        if (!is_null($brand_atl) && !is_string($brand_atl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand_atl)), __LINE__);
        }
        $this->brand_atl = $brand_atl;
        return $this;
    }
    /**
     * Get model_atl value
     * @return string|null
     */
    public function getModel_atl()
    {
        return $this->model_atl;
    }
    /**
     * Set model_atl value
     * @param string $model_atl
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setModel_atl($model_atl = null)
    {
        // validation for constraint: string
        if (!is_null($model_atl) && !is_string($model_atl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model_atl)), __LINE__);
        }
        $this->model_atl = $model_atl;
        return $this;
    }
    /**
     * Get version_name value
     * @return string|null
     */
    public function getVersion_name()
    {
        return $this->version_name;
    }
    /**
     * Set version_name value
     * @param string $version_name
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setVersion_name($version_name = null)
    {
        // validation for constraint: string
        if (!is_null($version_name) && !is_string($version_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version_name)), __LINE__);
        }
        $this->version_name = $version_name;
        return $this;
    }
    /**
     * Get short_type value
     * @return string|null
     */
    public function getShort_type()
    {
        return $this->short_type;
    }
    /**
     * Set short_type value
     * @param string $short_type
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setShort_type($short_type = null)
    {
        // validation for constraint: string
        if (!is_null($short_type) && !is_string($short_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($short_type)), __LINE__);
        }
        $this->short_type = $short_type;
        return $this;
    }
    /**
     * Get fuel_type value
     * @return string|null
     */
    public function getFuel_type()
    {
        return $this->fuel_type;
    }
    /**
     * Set fuel_type value
     * @param string $fuel_type
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setFuel_type($fuel_type = null)
    {
        // validation for constraint: string
        if (!is_null($fuel_type) && !is_string($fuel_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuel_type)), __LINE__);
        }
        $this->fuel_type = $fuel_type;
        return $this;
    }
    /**
     * Get cylinder_capacity value
     * @return int|null
     */
    public function getCylinder_capacity()
    {
        return $this->cylinder_capacity;
    }
    /**
     * Set cylinder_capacity value
     * @param int $cylinder_capacity
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setCylinder_capacity($cylinder_capacity = null)
    {
        // validation for constraint: int
        if (!is_null($cylinder_capacity) && !is_numeric($cylinder_capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cylinder_capacity)), __LINE__);
        }
        $this->cylinder_capacity = $cylinder_capacity;
        return $this;
    }
    /**
     * Get seats value
     * @return int|null
     */
    public function getSeats()
    {
        return $this->seats;
    }
    /**
     * Set seats value
     * @param int $seats
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setSeats($seats = null)
    {
        // validation for constraint: int
        if (!is_null($seats) && !is_numeric($seats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seats)), __LINE__);
        }
        $this->seats = $seats;
        return $this;
    }
    /**
     * Get power value
     * @return int|null
     */
    public function getPower()
    {
        return $this->power;
    }
    /**
     * Set power value
     * @param int $power
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setPower($power = null)
    {
        // validation for constraint: int
        if (!is_null($power) && !is_numeric($power)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($power)), __LINE__);
        }
        $this->power = $power;
        return $this;
    }
    /**
     * Get energy_label value
     * @return string|null
     */
    public function getEnergy_label()
    {
        return $this->energy_label;
    }
    /**
     * Set energy_label value
     * @param string $energy_label
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setEnergy_label($energy_label = null)
    {
        // validation for constraint: string
        if (!is_null($energy_label) && !is_string($energy_label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($energy_label)), __LINE__);
        }
        $this->energy_label = $energy_label;
        return $this;
    }
    /**
     * Get emission_code value
     * @return string|null
     */
    public function getEmission_code()
    {
        return $this->emission_code;
    }
    /**
     * Set emission_code value
     * @param string $emission_code
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setEmission_code($emission_code = null)
    {
        // validation for constraint: string
        if (!is_null($emission_code) && !is_string($emission_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emission_code)), __LINE__);
        }
        $this->emission_code = $emission_code;
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
     * @return \Webservices\StructType\CarVWEVersionYearData
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
     * Get gear value
     * @return string|null
     */
    public function getGear()
    {
        return $this->gear;
    }
    /**
     * Set gear value
     * @param string $gear
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setGear($gear = null)
    {
        // validation for constraint: string
        if (!is_null($gear) && !is_string($gear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gear)), __LINE__);
        }
        $this->gear = $gear;
        return $this;
    }
    /**
     * Get top_speed value
     * @return int|null
     */
    public function getTop_speed()
    {
        return $this->top_speed;
    }
    /**
     * Set top_speed value
     * @param int $top_speed
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setTop_speed($top_speed = null)
    {
        // validation for constraint: int
        if (!is_null($top_speed) && !is_numeric($top_speed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($top_speed)), __LINE__);
        }
        $this->top_speed = $top_speed;
        return $this;
    }
    /**
     * Get folder_weight value
     * @return int|null
     */
    public function getFolder_weight()
    {
        return $this->folder_weight;
    }
    /**
     * Set folder_weight value
     * @param int $folder_weight
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setFolder_weight($folder_weight = null)
    {
        // validation for constraint: int
        if (!is_null($folder_weight) && !is_numeric($folder_weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($folder_weight)), __LINE__);
        }
        $this->folder_weight = $folder_weight;
        return $this;
    }
    /**
     * Get train_weight value
     * @return int|null
     */
    public function getTrain_weight()
    {
        return $this->train_weight;
    }
    /**
     * Set train_weight value
     * @param int $train_weight
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setTrain_weight($train_weight = null)
    {
        // validation for constraint: int
        if (!is_null($train_weight) && !is_numeric($train_weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($train_weight)), __LINE__);
        }
        $this->train_weight = $train_weight;
        return $this;
    }
    /**
     * Get layout value
     * @return string|null
     */
    public function getLayout()
    {
        return $this->layout;
    }
    /**
     * Set layout value
     * @param string $layout
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setLayout($layout = null)
    {
        // validation for constraint: string
        if (!is_null($layout) && !is_string($layout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($layout)), __LINE__);
        }
        $this->layout = $layout;
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
     * @return \Webservices\StructType\CarVWEVersionYearData
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
     * Get acceleration value
     * @return float|null
     */
    public function getAcceleration()
    {
        return $this->acceleration;
    }
    /**
     * Set acceleration value
     * @param float $acceleration
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setAcceleration($acceleration = null)
    {
        $this->acceleration = $acceleration;
        return $this;
    }
    /**
     * Get sportivity value
     * @return float|null
     */
    public function getSportivity()
    {
        return $this->sportivity;
    }
    /**
     * Set sportivity value
     * @param float $sportivity
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setSportivity($sportivity = null)
    {
        $this->sportivity = $sportivity;
        return $this;
    }
    /**
     * Get prices value
     * @return \Webservices\StructType\CarVWEPrices|null
     */
    public function getPrices()
    {
        return $this->prices;
    }
    /**
     * Set prices value
     * @param \Webservices\StructType\CarVWEPrices $prices
     * @return \Webservices\StructType\CarVWEVersionYearData
     */
    public function setPrices(\Webservices\StructType\CarVWEPrices $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEVersionYearData
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
