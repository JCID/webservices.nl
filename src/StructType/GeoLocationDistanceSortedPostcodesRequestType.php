<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoLocationDistanceSortedPostcodesRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GeoLocationDistanceSortedPostcodesRequestType extends AbstractStructBase
{
    /**
     * The postcodefrom
     * @var string
     */
    public $postcodefrom;
    /**
     * The postcodes
     * @var \Webservices\ArrayType\StringArray
     */
    public $postcodes;
    /**
     * Constructor method for geoLocationDistanceSortedPostcodesRequestType
     * @uses GeoLocationDistanceSortedPostcodesRequestType::setPostcodefrom()
     * @uses GeoLocationDistanceSortedPostcodesRequestType::setPostcodes()
     * @param string $postcodefrom
     * @param \Webservices\ArrayType\StringArray $postcodes
     */
    public function __construct($postcodefrom = null, \Webservices\ArrayType\StringArray $postcodes = null)
    {
        $this
            ->setPostcodefrom($postcodefrom)
            ->setPostcodes($postcodes);
    }
    /**
     * Get postcodefrom value
     * @return string|null
     */
    public function getPostcodefrom()
    {
        return $this->postcodefrom;
    }
    /**
     * Set postcodefrom value
     * @param string $postcodefrom
     * @return \Webservices\StructType\GeoLocationDistanceSortedPostcodesRequestType
     */
    public function setPostcodefrom($postcodefrom = null)
    {
        // validation for constraint: string
        if (!is_null($postcodefrom) && !is_string($postcodefrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcodefrom)), __LINE__);
        }
        $this->postcodefrom = $postcodefrom;
        return $this;
    }
    /**
     * Get postcodes value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getPostcodes()
    {
        return $this->postcodes;
    }
    /**
     * Set postcodes value
     * @param \Webservices\ArrayType\StringArray $postcodes
     * @return \Webservices\StructType\GeoLocationDistanceSortedPostcodesRequestType
     */
    public function setPostcodes(\Webservices\ArrayType\StringArray $postcodes = null)
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
     * @return \Webservices\StructType\GeoLocationDistanceSortedPostcodesRequestType
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
