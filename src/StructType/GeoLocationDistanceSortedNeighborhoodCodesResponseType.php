<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationDistanceSortedNeighborhoodCodesResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationDistanceSortedNeighborhoodCodesResponseType extends AbstractStructBase
{
    /**
     * The nbcodes
     * @var \Webservices\ArrayType\SortedPostcodeArray
     */
    public $nbcodes;
    /**
     * Constructor method for geoLocationDistanceSortedNeighborhoodCodesResponseType
     * @uses GeoLocationDistanceSortedNeighborhoodCodesResponseType::setNbcodes()
     * @param \Webservices\ArrayType\SortedPostcodeArray $nbcodes
     */
    public function __construct(\Webservices\ArrayType\SortedPostcodeArray $nbcodes = null)
    {
        $this
            ->setNbcodes($nbcodes);
    }
    /**
     * Get nbcodes value
     * @return \Webservices\ArrayType\SortedPostcodeArray|null
     */
    public function getNbcodes()
    {
        return $this->nbcodes;
    }
    /**
     * Set nbcodes value
     * @param \Webservices\ArrayType\SortedPostcodeArray $nbcodes
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesResponseType
     */
    public function setNbcodes(\Webservices\ArrayType\SortedPostcodeArray $nbcodes = null)
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
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesResponseType
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
