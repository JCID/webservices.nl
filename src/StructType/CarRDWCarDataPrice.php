<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRDWCarDataPrice StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarRDWCarDataPrice extends AbstractStructBase
{
    /**
     * The basic_car_data
     * @var \Webservices\StructType\CarV3
     */
    public $basic_car_data;
    /**
     * The environment_data
     * @var \Webservices\StructType\CarEnvironment
     */
    public $environment_data;
    /**
     * The status_data
     * @var \Webservices\StructType\CarStatus
     */
    public $status_data;
    /**
     * The power
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $power;
    /**
     * The fuel_types
     * @var \Webservices\ArrayType\StringArray
     */
    public $fuel_types;
    /**
     * The top_speed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $top_speed;
    /**
     * The catalog_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $catalog_price;
    /**
     * The bpm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $bpm;
    /**
     * The bodies
     * @var \Webservices\ArrayType\CarBodyArray
     */
    public $bodies;
    /**
     * Constructor method for CarRDWCarDataPrice
     * @uses CarRDWCarDataPrice::setBasic_car_data()
     * @uses CarRDWCarDataPrice::setEnvironment_data()
     * @uses CarRDWCarDataPrice::setStatus_data()
     * @uses CarRDWCarDataPrice::setPower()
     * @uses CarRDWCarDataPrice::setFuel_types()
     * @uses CarRDWCarDataPrice::setTop_speed()
     * @uses CarRDWCarDataPrice::setCatalog_price()
     * @uses CarRDWCarDataPrice::setBpm()
     * @uses CarRDWCarDataPrice::setBodies()
     * @param \Webservices\StructType\CarV3 $basic_car_data
     * @param \Webservices\StructType\CarEnvironment $environment_data
     * @param \Webservices\StructType\CarStatus $status_data
     * @param float $power
     * @param \Webservices\ArrayType\StringArray $fuel_types
     * @param int $top_speed
     * @param int $catalog_price
     * @param int $bpm
     * @param \Webservices\ArrayType\CarBodyArray $bodies
     */
    public function __construct(\Webservices\StructType\CarV3 $basic_car_data = null, \Webservices\StructType\CarEnvironment $environment_data = null, \Webservices\StructType\CarStatus $status_data = null, $power = null, \Webservices\ArrayType\StringArray $fuel_types = null, $top_speed = null, $catalog_price = null, $bpm = null, \Webservices\ArrayType\CarBodyArray $bodies = null)
    {
        $this
            ->setBasic_car_data($basic_car_data)
            ->setEnvironment_data($environment_data)
            ->setStatus_data($status_data)
            ->setPower($power)
            ->setFuel_types($fuel_types)
            ->setTop_speed($top_speed)
            ->setCatalog_price($catalog_price)
            ->setBpm($bpm)
            ->setBodies($bodies);
    }
    /**
     * Get basic_car_data value
     * @return \Webservices\StructType\CarV3|null
     */
    public function getBasic_car_data()
    {
        return $this->basic_car_data;
    }
    /**
     * Set basic_car_data value
     * @param \Webservices\StructType\CarV3 $basic_car_data
     * @return \Webservices\StructType\CarRDWCarDataPrice
     */
    public function setBasic_car_data(\Webservices\StructType\CarV3 $basic_car_data = null)
    {
        $this->basic_car_data = $basic_car_data;
        return $this;
    }
    /**
     * Get environment_data value
     * @return \Webservices\StructType\CarEnvironment|null
     */
    public function getEnvironment_data()
    {
        return $this->environment_data;
    }
    /**
     * Set environment_data value
     * @param \Webservices\StructType\CarEnvironment $environment_data
     * @return \Webservices\StructType\CarRDWCarDataPrice
     */
    public function setEnvironment_data(\Webservices\StructType\CarEnvironment $environment_data = null)
    {
        $this->environment_data = $environment_data;
        return $this;
    }
    /**
     * Get status_data value
     * @return \Webservices\StructType\CarStatus|null
     */
    public function getStatus_data()
    {
        return $this->status_data;
    }
    /**
     * Set status_data value
     * @param \Webservices\StructType\CarStatus $status_data
     * @return \Webservices\StructType\CarRDWCarDataPrice
     */
    public function setStatus_data(\Webservices\StructType\CarStatus $status_data = null)
    {
        $this->status_data = $status_data;
        return $this;
    }
    /**
     * Get power value
     * @return float|null
     */
    public function getPower()
    {
        return $this->power;
    }
    /**
     * Set power value
     * @param float $power
     * @return \Webservices\StructType\CarRDWCarDataPrice
     */
    public function setPower($power = null)
    {
        $this->power = $power;
        return $this;
    }
    /**
     * Get fuel_types value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getFuel_types()
    {
        return $this->fuel_types;
    }
    /**
     * Set fuel_types value
     * @param \Webservices\ArrayType\StringArray $fuel_types
     * @return \Webservices\StructType\CarRDWCarDataPrice
     */
    public function setFuel_types(\Webservices\ArrayType\StringArray $fuel_types = null)
    {
        $this->fuel_types = $fuel_types;
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
     * @return \Webservices\StructType\CarRDWCarDataPrice
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
     * @return \Webservices\StructType\CarRDWCarDataPrice
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
     * Get bpm value
     * @return int|null
     */
    public function getBpm()
    {
        return $this->bpm;
    }
    /**
     * Set bpm value
     * @param int $bpm
     * @return \Webservices\StructType\CarRDWCarDataPrice
     */
    public function setBpm($bpm = null)
    {
        // validation for constraint: int
        if (!is_null($bpm) && !is_numeric($bpm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bpm)), __LINE__);
        }
        $this->bpm = $bpm;
        return $this;
    }
    /**
     * Get bodies value
     * @return \Webservices\ArrayType\CarBodyArray|null
     */
    public function getBodies()
    {
        return $this->bodies;
    }
    /**
     * Set bodies value
     * @param \Webservices\ArrayType\CarBodyArray $bodies
     * @return \Webservices\StructType\CarRDWCarDataPrice
     */
    public function setBodies(\Webservices\ArrayType\CarBodyArray $bodies = null)
    {
        $this->bodies = $bodies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarRDWCarDataPrice
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
