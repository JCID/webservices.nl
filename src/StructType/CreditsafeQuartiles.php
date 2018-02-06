<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeQuartiles StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeQuartiles extends AbstractStructBase
{
    /**
     * The lower
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $lower;
    /**
     * The median
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $median;
    /**
     * The upper
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $upper;
    /**
     * Constructor method for CreditsafeQuartiles
     * @uses CreditsafeQuartiles::setLower()
     * @uses CreditsafeQuartiles::setMedian()
     * @uses CreditsafeQuartiles::setUpper()
     * @param float $lower
     * @param float $median
     * @param float $upper
     */
    public function __construct($lower = null, $median = null, $upper = null)
    {
        $this
            ->setLower($lower)
            ->setMedian($median)
            ->setUpper($upper);
    }
    /**
     * Get lower value
     * @return float|null
     */
    public function getLower()
    {
        return $this->lower;
    }
    /**
     * Set lower value
     * @param float $lower
     * @return \Webservices\StructType\CreditsafeQuartiles
     */
    public function setLower($lower = null)
    {
        $this->lower = $lower;
        return $this;
    }
    /**
     * Get median value
     * @return float|null
     */
    public function getMedian()
    {
        return $this->median;
    }
    /**
     * Set median value
     * @param float $median
     * @return \Webservices\StructType\CreditsafeQuartiles
     */
    public function setMedian($median = null)
    {
        $this->median = $median;
        return $this;
    }
    /**
     * Get upper value
     * @return float|null
     */
    public function getUpper()
    {
        return $this->upper;
    }
    /**
     * Set upper value
     * @param float $upper
     * @return \Webservices\StructType\CreditsafeQuartiles
     */
    public function setUpper($upper = null)
    {
        $this->upper = $upper;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeQuartiles
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
