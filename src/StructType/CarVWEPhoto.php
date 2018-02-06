<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEPhoto StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEPhoto extends AbstractStructBase
{
    /**
     * The image
     * @var string
     */
    public $image;
    /**
     * The side
     * @var string
     */
    public $side;
    /**
     * The size
     * @var string
     */
    public $size;
    /**
     * Constructor method for CarVWEPhoto
     * @uses CarVWEPhoto::setImage()
     * @uses CarVWEPhoto::setSide()
     * @uses CarVWEPhoto::setSize()
     * @param string $image
     * @param string $side
     * @param string $size
     */
    public function __construct($image = null, $side = null, $size = null)
    {
        $this
            ->setImage($image)
            ->setSide($side)
            ->setSize($size);
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
     * @return \Webservices\StructType\CarVWEPhoto
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
     * Get side value
     * @return string|null
     */
    public function getSide()
    {
        return $this->side;
    }
    /**
     * Set side value
     * @param string $side
     * @return \Webservices\StructType\CarVWEPhoto
     */
    public function setSide($side = null)
    {
        // validation for constraint: string
        if (!is_null($side) && !is_string($side)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($side)), __LINE__);
        }
        $this->side = $side;
        return $this;
    }
    /**
     * Get size value
     * @return string|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param string $size
     * @return \Webservices\StructType\CarVWEPhoto
     */
    public function setSize($size = null)
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEPhoto
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
