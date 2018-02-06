<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Rechtspersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Rechtspersoon extends AbstractStructBase
{
    /**
     * The rsin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rsin;
    /**
     * The kvknummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $kvknummer;
    /**
     * Constructor method for KadasterV2Rechtspersoon
     * @uses KadasterV2Rechtspersoon::setRsin()
     * @uses KadasterV2Rechtspersoon::setKvknummer()
     * @param string $rsin
     * @param string $kvknummer
     */
    public function __construct($rsin = null, $kvknummer = null)
    {
        $this
            ->setRsin($rsin)
            ->setKvknummer($kvknummer);
    }
    /**
     * Get rsin value
     * @return string|null
     */
    public function getRsin()
    {
        return $this->rsin;
    }
    /**
     * Set rsin value
     * @param string $rsin
     * @return \Webservices\StructType\KadasterV2Rechtspersoon
     */
    public function setRsin($rsin = null)
    {
        // validation for constraint: string
        if (!is_null($rsin) && !is_string($rsin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rsin)), __LINE__);
        }
        $this->rsin = $rsin;
        return $this;
    }
    /**
     * Get kvknummer value
     * @return string|null
     */
    public function getKvknummer()
    {
        return $this->kvknummer;
    }
    /**
     * Set kvknummer value
     * @param string $kvknummer
     * @return \Webservices\StructType\KadasterV2Rechtspersoon
     */
    public function setKvknummer($kvknummer = null)
    {
        // validation for constraint: string
        if (!is_null($kvknummer) && !is_string($kvknummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kvknummer)), __LINE__);
        }
        $this->kvknummer = $kvknummer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Rechtspersoon
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
