<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mapViewPostcodeV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MapViewPostcodeV2ResponseType extends AbstractStructBase
{
    /**
     * The image
     * @var string
     */
    public $image;
    /**
     * Constructor method for mapViewPostcodeV2ResponseType
     * @uses MapViewPostcodeV2ResponseType::setImage()
     * @param string $image
     */
    public function __construct($image = null)
    {
        $this
            ->setImage($image);
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \Webservices\StructType\MapViewPostcodeV2ResponseType
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MapViewPostcodeV2ResponseType
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
