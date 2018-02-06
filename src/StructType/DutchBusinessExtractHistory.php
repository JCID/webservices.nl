<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractHistory StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractHistory extends AbstractStructBase
{
    /**
     * The forecast
     * @var \Webservices\StructType\DutchBusinessExtractChangeForecast
     */
    public $forecast;
    /**
     * The references
     * @var \Webservices\ArrayType\DutchBusinessExtractReferenceArray
     */
    public $references;
    /**
     * Constructor method for DutchBusinessExtractHistory
     * @uses DutchBusinessExtractHistory::setForecast()
     * @uses DutchBusinessExtractHistory::setReferences()
     * @param \Webservices\StructType\DutchBusinessExtractChangeForecast $forecast
     * @param \Webservices\ArrayType\DutchBusinessExtractReferenceArray $references
     */
    public function __construct(\Webservices\StructType\DutchBusinessExtractChangeForecast $forecast = null, \Webservices\ArrayType\DutchBusinessExtractReferenceArray $references = null)
    {
        $this
            ->setForecast($forecast)
            ->setReferences($references);
    }
    /**
     * Get forecast value
     * @return \Webservices\StructType\DutchBusinessExtractChangeForecast|null
     */
    public function getForecast()
    {
        return $this->forecast;
    }
    /**
     * Set forecast value
     * @param \Webservices\StructType\DutchBusinessExtractChangeForecast $forecast
     * @return \Webservices\StructType\DutchBusinessExtractHistory
     */
    public function setForecast(\Webservices\StructType\DutchBusinessExtractChangeForecast $forecast = null)
    {
        $this->forecast = $forecast;
        return $this;
    }
    /**
     * Get references value
     * @return \Webservices\ArrayType\DutchBusinessExtractReferenceArray|null
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * Set references value
     * @param \Webservices\ArrayType\DutchBusinessExtractReferenceArray $references
     * @return \Webservices\StructType\DutchBusinessExtractHistory
     */
    public function setReferences(\Webservices\ArrayType\DutchBusinessExtractReferenceArray $references = null)
    {
        $this->references = $references;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessExtractHistory
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
