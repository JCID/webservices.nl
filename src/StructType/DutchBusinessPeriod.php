<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPeriod StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPeriod extends AbstractStructBase
{
    /**
     * The start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $start_date;
    /**
     * The end_date
     * @var string
     */
    public $end_date;
    /**
     * Constructor method for DutchBusinessPeriod
     * @uses DutchBusinessPeriod::setStart_date()
     * @uses DutchBusinessPeriod::setEnd_date()
     * @param string $start_date
     * @param string $end_date
     */
    public function __construct($start_date = null, $end_date = null)
    {
        $this
            ->setStart_date($start_date)
            ->setEnd_date($end_date);
    }
    /**
     * Get start_date value
     * @return string|null
     */
    public function getStart_date()
    {
        return $this->start_date;
    }
    /**
     * Set start_date value
     * @param string $start_date
     * @return \Webservices\StructType\DutchBusinessPeriod
     */
    public function setStart_date($start_date = null)
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_date)), __LINE__);
        }
        $this->start_date = $start_date;
        return $this;
    }
    /**
     * Get end_date value
     * @return string|null
     */
    public function getEnd_date()
    {
        return $this->end_date;
    }
    /**
     * Set end_date value
     * @param string $end_date
     * @return \Webservices\StructType\DutchBusinessPeriod
     */
    public function setEnd_date($end_date = null)
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end_date)), __LINE__);
        }
        $this->end_date = $end_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPeriod
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
