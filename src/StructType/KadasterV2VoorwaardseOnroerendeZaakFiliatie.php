<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2VoorwaardseOnroerendeZaakFiliatie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2VoorwaardseOnroerendeZaakFiliatie extends AbstractStructBase
{
    /**
     * The aard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard;
    /**
     * The overgangsgrootte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $overgangsgrootte;
    /**
     * The betreft_oz
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BetreftOnroerendeZaak
     */
    public $betreft_oz;
    /**
     * Constructor method for KadasterV2VoorwaardseOnroerendeZaakFiliatie
     * @uses KadasterV2VoorwaardseOnroerendeZaakFiliatie::setAard()
     * @uses KadasterV2VoorwaardseOnroerendeZaakFiliatie::setOvergangsgrootte()
     * @uses KadasterV2VoorwaardseOnroerendeZaakFiliatie::setBetreft_oz()
     * @param string $aard
     * @param float $overgangsgrootte
     * @param \Webservices\StructType\KadasterV2BetreftOnroerendeZaak $betreft_oz
     */
    public function __construct($aard = null, $overgangsgrootte = null, \Webservices\StructType\KadasterV2BetreftOnroerendeZaak $betreft_oz = null)
    {
        $this
            ->setAard($aard)
            ->setOvergangsgrootte($overgangsgrootte)
            ->setBetreft_oz($betreft_oz);
    }
    /**
     * Get aard value
     * @return string|null
     */
    public function getAard()
    {
        return $this->aard;
    }
    /**
     * Set aard value
     * @param string $aard
     * @return \Webservices\StructType\KadasterV2VoorwaardseOnroerendeZaakFiliatie
     */
    public function setAard($aard = null)
    {
        // validation for constraint: string
        if (!is_null($aard) && !is_string($aard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard)), __LINE__);
        }
        $this->aard = $aard;
        return $this;
    }
    /**
     * Get overgangsgrootte value
     * @return float|null
     */
    public function getOvergangsgrootte()
    {
        return $this->overgangsgrootte;
    }
    /**
     * Set overgangsgrootte value
     * @param float $overgangsgrootte
     * @return \Webservices\StructType\KadasterV2VoorwaardseOnroerendeZaakFiliatie
     */
    public function setOvergangsgrootte($overgangsgrootte = null)
    {
        $this->overgangsgrootte = $overgangsgrootte;
        return $this;
    }
    /**
     * Get betreft_oz value
     * @return \Webservices\StructType\KadasterV2BetreftOnroerendeZaak|null
     */
    public function getBetreft_oz()
    {
        return $this->betreft_oz;
    }
    /**
     * Set betreft_oz value
     * @param \Webservices\StructType\KadasterV2BetreftOnroerendeZaak $betreft_oz
     * @return \Webservices\StructType\KadasterV2VoorwaardseOnroerendeZaakFiliatie
     */
    public function setBetreft_oz(\Webservices\StructType\KadasterV2BetreftOnroerendeZaak $betreft_oz = null)
    {
        $this->betreft_oz = $betreft_oz;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2VoorwaardseOnroerendeZaakFiliatie
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
