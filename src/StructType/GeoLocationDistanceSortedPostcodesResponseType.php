<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationDistanceSortedPostcodesResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationDistanceSortedPostcodesResponseType extends AbstractStructBase
{
    /**
     * The postcodes
     * @var \Webservices\ArrayType\SortedPostcodeArray
     */
    public $postcodes;
    /**
     * Constructor method for geoLocationDistanceSortedPostcodesResponseType
     * @uses GeoLocationDistanceSortedPostcodesResponseType::setPostcodes()
     * @param \Webservices\ArrayType\SortedPostcodeArray $postcodes
     */
    public function __construct(\Webservices\ArrayType\SortedPostcodeArray $postcodes = null)
    {
        $this
            ->setPostcodes($postcodes);
    }
    /**
     * Get postcodes value
     * @return \Webservices\ArrayType\SortedPostcodeArray|null
     */
    public function getPostcodes()
    {
        return $this->postcodes;
    }
    /**
     * Set postcodes value
     * @param \Webservices\ArrayType\SortedPostcodeArray $postcodes
     * @return \Webservices\StructType\GeoLocationDistanceSortedPostcodesResponseType
     */
    public function setPostcodes(\Webservices\ArrayType\SortedPostcodeArray $postcodes = null)
    {
        $this->postcodes = $postcodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GeoLocationDistanceSortedPostcodesResponseType
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
