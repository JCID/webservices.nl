<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleAxle StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleAxle extends AbstractStructBase
{
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $number;
    /**
     * The indication_driven_axle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indication_driven_axle;
    /**
     * The indication_bogie_lift
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indication_bogie_lift;
    /**
     * The max_axle_load
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $max_axle_load;
    /**
     * The max_axle_load_technical
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $max_axle_load_technical;
    /**
     * The location_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $location_code;
    /**
     * The track_width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $track_width;
    /**
     * The road_behavior_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $road_behavior_code;
    /**
     * The road_behavior_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $road_behavior_description;
    /**
     * Constructor method for DutchVehicleAxle
     * @uses DutchVehicleAxle::setNumber()
     * @uses DutchVehicleAxle::setIndication_driven_axle()
     * @uses DutchVehicleAxle::setIndication_bogie_lift()
     * @uses DutchVehicleAxle::setMax_axle_load()
     * @uses DutchVehicleAxle::setMax_axle_load_technical()
     * @uses DutchVehicleAxle::setLocation_code()
     * @uses DutchVehicleAxle::setTrack_width()
     * @uses DutchVehicleAxle::setRoad_behavior_code()
     * @uses DutchVehicleAxle::setRoad_behavior_description()
     * @param int $number
     * @param bool $indication_driven_axle
     * @param bool $indication_bogie_lift
     * @param int $max_axle_load
     * @param int $max_axle_load_technical
     * @param string $location_code
     * @param int $track_width
     * @param string $road_behavior_code
     * @param string $road_behavior_description
     */
    public function __construct($number = null, $indication_driven_axle = null, $indication_bogie_lift = null, $max_axle_load = null, $max_axle_load_technical = null, $location_code = null, $track_width = null, $road_behavior_code = null, $road_behavior_description = null)
    {
        $this
            ->setNumber($number)
            ->setIndication_driven_axle($indication_driven_axle)
            ->setIndication_bogie_lift($indication_bogie_lift)
            ->setMax_axle_load($max_axle_load)
            ->setMax_axle_load_technical($max_axle_load_technical)
            ->setLocation_code($location_code)
            ->setTrack_width($track_width)
            ->setRoad_behavior_code($road_behavior_code)
            ->setRoad_behavior_description($road_behavior_description);
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get indication_driven_axle value
     * @return bool|null
     */
    public function getIndication_driven_axle()
    {
        return $this->indication_driven_axle;
    }
    /**
     * Set indication_driven_axle value
     * @param bool $indication_driven_axle
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setIndication_driven_axle($indication_driven_axle = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_driven_axle) && !is_bool($indication_driven_axle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_driven_axle)), __LINE__);
        }
        $this->indication_driven_axle = $indication_driven_axle;
        return $this;
    }
    /**
     * Get indication_bogie_lift value
     * @return bool|null
     */
    public function getIndication_bogie_lift()
    {
        return $this->indication_bogie_lift;
    }
    /**
     * Set indication_bogie_lift value
     * @param bool $indication_bogie_lift
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setIndication_bogie_lift($indication_bogie_lift = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_bogie_lift) && !is_bool($indication_bogie_lift)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_bogie_lift)), __LINE__);
        }
        $this->indication_bogie_lift = $indication_bogie_lift;
        return $this;
    }
    /**
     * Get max_axle_load value
     * @return int|null
     */
    public function getMax_axle_load()
    {
        return $this->max_axle_load;
    }
    /**
     * Set max_axle_load value
     * @param int $max_axle_load
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setMax_axle_load($max_axle_load = null)
    {
        // validation for constraint: int
        if (!is_null($max_axle_load) && !is_numeric($max_axle_load)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($max_axle_load)), __LINE__);
        }
        $this->max_axle_load = $max_axle_load;
        return $this;
    }
    /**
     * Get max_axle_load_technical value
     * @return int|null
     */
    public function getMax_axle_load_technical()
    {
        return $this->max_axle_load_technical;
    }
    /**
     * Set max_axle_load_technical value
     * @param int $max_axle_load_technical
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setMax_axle_load_technical($max_axle_load_technical = null)
    {
        // validation for constraint: int
        if (!is_null($max_axle_load_technical) && !is_numeric($max_axle_load_technical)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($max_axle_load_technical)), __LINE__);
        }
        $this->max_axle_load_technical = $max_axle_load_technical;
        return $this;
    }
    /**
     * Get location_code value
     * @return string|null
     */
    public function getLocation_code()
    {
        return $this->location_code;
    }
    /**
     * Set location_code value
     * @param string $location_code
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setLocation_code($location_code = null)
    {
        // validation for constraint: string
        if (!is_null($location_code) && !is_string($location_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location_code)), __LINE__);
        }
        $this->location_code = $location_code;
        return $this;
    }
    /**
     * Get track_width value
     * @return int|null
     */
    public function getTrack_width()
    {
        return $this->track_width;
    }
    /**
     * Set track_width value
     * @param int $track_width
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setTrack_width($track_width = null)
    {
        // validation for constraint: int
        if (!is_null($track_width) && !is_numeric($track_width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($track_width)), __LINE__);
        }
        $this->track_width = $track_width;
        return $this;
    }
    /**
     * Get road_behavior_code value
     * @return string|null
     */
    public function getRoad_behavior_code()
    {
        return $this->road_behavior_code;
    }
    /**
     * Set road_behavior_code value
     * @param string $road_behavior_code
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setRoad_behavior_code($road_behavior_code = null)
    {
        // validation for constraint: string
        if (!is_null($road_behavior_code) && !is_string($road_behavior_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($road_behavior_code)), __LINE__);
        }
        $this->road_behavior_code = $road_behavior_code;
        return $this;
    }
    /**
     * Get road_behavior_description value
     * @return string|null
     */
    public function getRoad_behavior_description()
    {
        return $this->road_behavior_description;
    }
    /**
     * Set road_behavior_description value
     * @param string $road_behavior_description
     * @return \Webservices\StructType\DutchVehicleAxle
     */
    public function setRoad_behavior_description($road_behavior_description = null)
    {
        // validation for constraint: string
        if (!is_null($road_behavior_description) && !is_string($road_behavior_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($road_behavior_description)), __LINE__);
        }
        $this->road_behavior_description = $road_behavior_description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleAxle
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
