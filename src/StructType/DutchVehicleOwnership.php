<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleOwnership StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleOwnership extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The date_start
     * @var string
     */
    public $date_start;
    /**
     * The date_end
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_end;
    /**
     * The duration
     * @var int
     */
    public $duration;
    /**
     * Constructor method for DutchVehicleOwnership
     * @uses DutchVehicleOwnership::setType()
     * @uses DutchVehicleOwnership::setDate_start()
     * @uses DutchVehicleOwnership::setDate_end()
     * @uses DutchVehicleOwnership::setDuration()
     * @param string $type
     * @param string $date_start
     * @param string $date_end
     * @param int $duration
     */
    public function __construct($type = null, $date_start = null, $date_end = null, $duration = null)
    {
        $this
            ->setType($type)
            ->setDate_start($date_start)
            ->setDate_end($date_end)
            ->setDuration($duration);
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
     * @return \Webservices\StructType\DutchVehicleOwnership
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
     * Get date_start value
     * @return string|null
     */
    public function getDate_start()
    {
        return $this->date_start;
    }
    /**
     * Set date_start value
     * @param string $date_start
     * @return \Webservices\StructType\DutchVehicleOwnership
     */
    public function setDate_start($date_start = null)
    {
        // validation for constraint: string
        if (!is_null($date_start) && !is_string($date_start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_start)), __LINE__);
        }
        $this->date_start = $date_start;
        return $this;
    }
    /**
     * Get date_end value
     * @return string|null
     */
    public function getDate_end()
    {
        return $this->date_end;
    }
    /**
     * Set date_end value
     * @param string $date_end
     * @return \Webservices\StructType\DutchVehicleOwnership
     */
    public function setDate_end($date_end = null)
    {
        // validation for constraint: string
        if (!is_null($date_end) && !is_string($date_end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_end)), __LINE__);
        }
        $this->date_end = $date_end;
        return $this;
    }
    /**
     * Get duration value
     * @return int|null
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param int $duration
     * @return \Webservices\StructType\DutchVehicleOwnership
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: int
        if (!is_null($duration) && !is_numeric($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleOwnership
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
