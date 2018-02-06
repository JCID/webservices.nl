<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2OpenbareRuimte StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2OpenbareRuimte extends AbstractStructBase
{
    /**
     * The openbare_ruimte_naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $openbare_ruimte_naam;
    /**
     * The in_onderzoek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $in_onderzoek;
    /**
     * The gerelateerde_woonplaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GerelateerdeWoonplaats
     */
    public $gerelateerde_woonplaats;
    /**
     * Constructor method for KadasterV2OpenbareRuimte
     * @uses KadasterV2OpenbareRuimte::setOpenbare_ruimte_naam()
     * @uses KadasterV2OpenbareRuimte::setIn_onderzoek()
     * @uses KadasterV2OpenbareRuimte::setGerelateerde_woonplaats()
     * @param string $openbare_ruimte_naam
     * @param bool $in_onderzoek
     * @param \Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats
     */
    public function __construct($openbare_ruimte_naam = null, $in_onderzoek = null, \Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats = null)
    {
        $this
            ->setOpenbare_ruimte_naam($openbare_ruimte_naam)
            ->setIn_onderzoek($in_onderzoek)
            ->setGerelateerde_woonplaats($gerelateerde_woonplaats);
    }
    /**
     * Get openbare_ruimte_naam value
     * @return string|null
     */
    public function getOpenbare_ruimte_naam()
    {
        return $this->openbare_ruimte_naam;
    }
    /**
     * Set openbare_ruimte_naam value
     * @param string $openbare_ruimte_naam
     * @return \Webservices\StructType\KadasterV2OpenbareRuimte
     */
    public function setOpenbare_ruimte_naam($openbare_ruimte_naam = null)
    {
        // validation for constraint: string
        if (!is_null($openbare_ruimte_naam) && !is_string($openbare_ruimte_naam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openbare_ruimte_naam)), __LINE__);
        }
        $this->openbare_ruimte_naam = $openbare_ruimte_naam;
        return $this;
    }
    /**
     * Get in_onderzoek value
     * @return bool|null
     */
    public function getIn_onderzoek()
    {
        return $this->in_onderzoek;
    }
    /**
     * Set in_onderzoek value
     * @param bool $in_onderzoek
     * @return \Webservices\StructType\KadasterV2OpenbareRuimte
     */
    public function setIn_onderzoek($in_onderzoek = null)
    {
        // validation for constraint: boolean
        if (!is_null($in_onderzoek) && !is_bool($in_onderzoek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($in_onderzoek)), __LINE__);
        }
        $this->in_onderzoek = $in_onderzoek;
        return $this;
    }
    /**
     * Get gerelateerde_woonplaats value
     * @return \Webservices\StructType\KadasterV2GerelateerdeWoonplaats|null
     */
    public function getGerelateerde_woonplaats()
    {
        return $this->gerelateerde_woonplaats;
    }
    /**
     * Set gerelateerde_woonplaats value
     * @param \Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats
     * @return \Webservices\StructType\KadasterV2OpenbareRuimte
     */
    public function setGerelateerde_woonplaats(\Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats = null)
    {
        $this->gerelateerde_woonplaats = $gerelateerde_woonplaats;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2OpenbareRuimte
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
