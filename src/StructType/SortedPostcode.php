<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SortedPostcode StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SortedPostcode extends AbstractStructBase
{
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The distance
     * @var int
     */
    public $distance;
    /**
     * The precision
     * @var string
     */
    public $precision;
    /**
     * Constructor method for SortedPostcode
     * @uses SortedPostcode::setPostcode()
     * @uses SortedPostcode::setDistance()
     * @uses SortedPostcode::setPrecision()
     * @param string $postcode
     * @param int $distance
     * @param string $precision
     */
    public function __construct($postcode = null, $distance = null, $precision = null)
    {
        $this
            ->setPostcode($postcode)
            ->setDistance($distance)
            ->setPrecision($precision);
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\SortedPostcode
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get distance value
     * @return int|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param int $distance
     * @return \Webservices\StructType\SortedPostcode
     */
    public function setDistance($distance = null)
    {
        // validation for constraint: int
        if (!is_null($distance) && !is_numeric($distance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distance)), __LINE__);
        }
        $this->distance = $distance;
        return $this;
    }
    /**
     * Get precision value
     * @return string|null
     */
    public function getPrecision()
    {
        return $this->precision;
    }
    /**
     * Set precision value
     * @param string $precision
     * @return \Webservices\StructType\SortedPostcode
     */
    public function setPrecision($precision = null)
    {
        // validation for constraint: string
        if (!is_null($precision) && !is_string($precision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($precision)), __LINE__);
        }
        $this->precision = $precision;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SortedPostcode
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
