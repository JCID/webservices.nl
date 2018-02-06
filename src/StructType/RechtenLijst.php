<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RechtenLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RechtenLijst extends AbstractStructBase
{
    /**
     * The rechten
     * @var \Webservices\ArrayType\RechtArray
     */
    public $rechten;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for RechtenLijst
     * @uses RechtenLijst::setRechten()
     * @uses RechtenLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\RechtArray $rechten
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\RechtArray $rechten = null, $indicatie_compleet = null)
    {
        $this
            ->setRechten($rechten)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get rechten value
     * @return \Webservices\ArrayType\RechtArray|null
     */
    public function getRechten()
    {
        return $this->rechten;
    }
    /**
     * Set rechten value
     * @param \Webservices\ArrayType\RechtArray $rechten
     * @return \Webservices\StructType\RechtenLijst
     */
    public function setRechten(\Webservices\ArrayType\RechtArray $rechten = null)
    {
        $this->rechten = $rechten;
        return $this;
    }
    /**
     * Get indicatie_compleet value
     * @return bool|null
     */
    public function getIndicatie_compleet()
    {
        return $this->indicatie_compleet;
    }
    /**
     * Set indicatie_compleet value
     * @param bool $indicatie_compleet
     * @return \Webservices\StructType\RechtenLijst
     */
    public function setIndicatie_compleet($indicatie_compleet = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_compleet) && !is_bool($indicatie_compleet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_compleet)), __LINE__);
        }
        $this->indicatie_compleet = $indicatie_compleet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RechtenLijst
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
