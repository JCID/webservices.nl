<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterBedrag StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterBedrag extends AbstractStructBase
{
    /**
     * The valuta
     * @var string
     */
    public $valuta;
    /**
     * The bedrag
     * @var int
     */
    public $bedrag;
    /**
     * Constructor method for kadasterBedrag
     * @uses KadasterBedrag::setValuta()
     * @uses KadasterBedrag::setBedrag()
     * @param string $valuta
     * @param int $bedrag
     */
    public function __construct($valuta = null, $bedrag = null)
    {
        $this
            ->setValuta($valuta)
            ->setBedrag($bedrag);
    }
    /**
     * Get valuta value
     * @return string|null
     */
    public function getValuta()
    {
        return $this->valuta;
    }
    /**
     * Set valuta value
     * @param string $valuta
     * @return \Webservices\StructType\KadasterBedrag
     */
    public function setValuta($valuta = null)
    {
        // validation for constraint: string
        if (!is_null($valuta) && !is_string($valuta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valuta)), __LINE__);
        }
        $this->valuta = $valuta;
        return $this;
    }
    /**
     * Get bedrag value
     * @return int|null
     */
    public function getBedrag()
    {
        return $this->bedrag;
    }
    /**
     * Set bedrag value
     * @param int $bedrag
     * @return \Webservices\StructType\KadasterBedrag
     */
    public function setBedrag($bedrag = null)
    {
        // validation for constraint: int
        if (!is_null($bedrag) && !is_numeric($bedrag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bedrag)), __LINE__);
        }
        $this->bedrag = $bedrag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterBedrag
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
