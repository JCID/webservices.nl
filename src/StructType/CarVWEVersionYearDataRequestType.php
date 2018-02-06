<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carVWEVersionYearDataRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEVersionYearDataRequestType extends AbstractStructBase
{
    /**
     * The production_year
     * @var int
     */
    public $production_year;
    /**
     * The atl_code
     * @var int
     */
    public $atl_code;
    /**
     * Constructor method for carVWEVersionYearDataRequestType
     * @uses CarVWEVersionYearDataRequestType::setProduction_year()
     * @uses CarVWEVersionYearDataRequestType::setAtl_code()
     * @param int $production_year
     * @param int $atl_code
     */
    public function __construct($production_year = null, $atl_code = null)
    {
        $this
            ->setProduction_year($production_year)
            ->setAtl_code($atl_code);
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
     * @return \Webservices\StructType\CarVWEVersionYearDataRequestType
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
     * @return \Webservices\StructType\CarVWEVersionYearDataRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEVersionYearDataRequestType
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
