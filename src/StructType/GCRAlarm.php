<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRAlarm StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRAlarm extends AbstractStructBase
{
    /**
     * The alarm_code
     * @var int
     */
    public $alarm_code;
    /**
     * The alarm_text
     * @var string
     */
    public $alarm_text;
    /**
     * Constructor method for GCRAlarm
     * @uses GCRAlarm::setAlarm_code()
     * @uses GCRAlarm::setAlarm_text()
     * @param int $alarm_code
     * @param string $alarm_text
     */
    public function __construct($alarm_code = null, $alarm_text = null)
    {
        $this
            ->setAlarm_code($alarm_code)
            ->setAlarm_text($alarm_text);
    }
    /**
     * Get alarm_code value
     * @return int|null
     */
    public function getAlarm_code()
    {
        return $this->alarm_code;
    }
    /**
     * Set alarm_code value
     * @param int $alarm_code
     * @return \Webservices\StructType\GCRAlarm
     */
    public function setAlarm_code($alarm_code = null)
    {
        // validation for constraint: int
        if (!is_null($alarm_code) && !is_numeric($alarm_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($alarm_code)), __LINE__);
        }
        $this->alarm_code = $alarm_code;
        return $this;
    }
    /**
     * Get alarm_text value
     * @return string|null
     */
    public function getAlarm_text()
    {
        return $this->alarm_text;
    }
    /**
     * Set alarm_text value
     * @param string $alarm_text
     * @return \Webservices\StructType\GCRAlarm
     */
    public function setAlarm_text($alarm_text = null)
    {
        // validation for constraint: string
        if (!is_null($alarm_text) && !is_string($alarm_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alarm_text)), __LINE__);
        }
        $this->alarm_text = $alarm_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRAlarm
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
