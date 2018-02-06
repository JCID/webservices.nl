<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StukReferentiesLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class StukReferentiesLijst extends AbstractStructBase
{
    /**
     * The stukken
     * @var \Webservices\ArrayType\StringArray
     */
    public $stukken;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for StukReferentiesLijst
     * @uses StukReferentiesLijst::setStukken()
     * @uses StukReferentiesLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\StringArray $stukken
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\StringArray $stukken = null, $indicatie_compleet = null)
    {
        $this
            ->setStukken($stukken)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get stukken value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getStukken()
    {
        return $this->stukken;
    }
    /**
     * Set stukken value
     * @param \Webservices\ArrayType\StringArray $stukken
     * @return \Webservices\StructType\StukReferentiesLijst
     */
    public function setStukken(\Webservices\ArrayType\StringArray $stukken = null)
    {
        $this->stukken = $stukken;
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
     * @return \Webservices\StructType\StukReferentiesLijst
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
     * @return \Webservices\StructType\StukReferentiesLijst
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
