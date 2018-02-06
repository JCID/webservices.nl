<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskInsolvencyPublication StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskInsolvencyPublication extends AbstractStructBase
{
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * The verdict_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $verdict_date;
    /**
     * Constructor method for RiskInsolvencyPublication
     * @uses RiskInsolvencyPublication::setNumber()
     * @uses RiskInsolvencyPublication::setType()
     * @uses RiskInsolvencyPublication::setDate()
     * @uses RiskInsolvencyPublication::setVerdict_date()
     * @param string $number
     * @param string $type
     * @param string $date
     * @param string $verdict_date
     */
    public function __construct($number = null, $type = null, $date = null, $verdict_date = null)
    {
        $this
            ->setNumber($number)
            ->setType($type)
            ->setDate($date)
            ->setVerdict_date($verdict_date);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Webservices\StructType\RiskInsolvencyPublication
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
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
     * @return \Webservices\StructType\RiskInsolvencyPublication
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
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Webservices\StructType\RiskInsolvencyPublication
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get verdict_date value
     * @return string|null
     */
    public function getVerdict_date()
    {
        return $this->verdict_date;
    }
    /**
     * Set verdict_date value
     * @param string $verdict_date
     * @return \Webservices\StructType\RiskInsolvencyPublication
     */
    public function setVerdict_date($verdict_date = null)
    {
        // validation for constraint: string
        if (!is_null($verdict_date) && !is_string($verdict_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verdict_date)), __LINE__);
        }
        $this->verdict_date = $verdict_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskInsolvencyPublication
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
