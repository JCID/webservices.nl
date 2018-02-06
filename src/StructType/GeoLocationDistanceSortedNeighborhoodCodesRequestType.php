<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationDistanceSortedNeighborhoodCodesRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationDistanceSortedNeighborhoodCodesRequestType extends AbstractStructBase
{
    /**
     * The nbcodefrom
     * @var string
     */
    public $nbcodefrom;
    /**
     * The nbcodes
     * @var \Webservices\ArrayType\StringArray
     */
    public $nbcodes;
    /**
     * Constructor method for geoLocationDistanceSortedNeighborhoodCodesRequestType
     * @uses GeoLocationDistanceSortedNeighborhoodCodesRequestType::setNbcodefrom()
     * @uses GeoLocationDistanceSortedNeighborhoodCodesRequestType::setNbcodes()
     * @param string $nbcodefrom
     * @param \Webservices\ArrayType\StringArray $nbcodes
     */
    public function __construct($nbcodefrom = null, \Webservices\ArrayType\StringArray $nbcodes = null)
    {
        $this
            ->setNbcodefrom($nbcodefrom)
            ->setNbcodes($nbcodes);
    }
    /**
     * Get nbcodefrom value
     * @return string|null
     */
    public function getNbcodefrom()
    {
        return $this->nbcodefrom;
    }
    /**
     * Set nbcodefrom value
     * @param string $nbcodefrom
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRequestType
     */
    public function setNbcodefrom($nbcodefrom = null)
    {
        // validation for constraint: string
        if (!is_null($nbcodefrom) && !is_string($nbcodefrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbcodefrom)), __LINE__);
        }
        $this->nbcodefrom = $nbcodefrom;
        return $this;
    }
    /**
     * Get nbcodes value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getNbcodes()
    {
        return $this->nbcodes;
    }
    /**
     * Set nbcodes value
     * @param \Webservices\ArrayType\StringArray $nbcodes
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRequestType
     */
    public function setNbcodes(\Webservices\ArrayType\StringArray $nbcodes = null)
    {
        $this->nbcodes = $nbcodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRequestType
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
