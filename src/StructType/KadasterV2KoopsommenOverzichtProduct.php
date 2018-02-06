<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KoopsommenOverzichtProduct StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KoopsommenOverzichtProduct extends AbstractStructBase
{
    /**
     * The klantreferentie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $klantreferentie;
    /**
     * The productienummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productienummer;
    /**
     * The adres_range
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adres_range;
    /**
     * The woonplaats_naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $woonplaats_naam;
    /**
     * The actualiteittijdstip_koopsommen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $actualiteittijdstip_koopsommen;
    /**
     * The tijdstip_samenstelling_bericht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $tijdstip_samenstelling_bericht;
    /**
     * The betreft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KoopsommenBetreft
     */
    public $betreft;
    /**
     * Constructor method for KadasterV2KoopsommenOverzichtProduct
     * @uses KadasterV2KoopsommenOverzichtProduct::setKlantreferentie()
     * @uses KadasterV2KoopsommenOverzichtProduct::setProductienummer()
     * @uses KadasterV2KoopsommenOverzichtProduct::setAdres_range()
     * @uses KadasterV2KoopsommenOverzichtProduct::setWoonplaats_naam()
     * @uses KadasterV2KoopsommenOverzichtProduct::setActualiteittijdstip_koopsommen()
     * @uses KadasterV2KoopsommenOverzichtProduct::setTijdstip_samenstelling_bericht()
     * @uses KadasterV2KoopsommenOverzichtProduct::setBetreft()
     * @param string $klantreferentie
     * @param string $productienummer
     * @param string $adres_range
     * @param string $woonplaats_naam
     * @param string $actualiteittijdstip_koopsommen
     * @param string $tijdstip_samenstelling_bericht
     * @param \Webservices\StructType\KadasterV2KoopsommenBetreft $betreft
     */
    public function __construct($klantreferentie = null, $productienummer = null, $adres_range = null, $woonplaats_naam = null, $actualiteittijdstip_koopsommen = null, $tijdstip_samenstelling_bericht = null, \Webservices\StructType\KadasterV2KoopsommenBetreft $betreft = null)
    {
        $this
            ->setKlantreferentie($klantreferentie)
            ->setProductienummer($productienummer)
            ->setAdres_range($adres_range)
            ->setWoonplaats_naam($woonplaats_naam)
            ->setActualiteittijdstip_koopsommen($actualiteittijdstip_koopsommen)
            ->setTijdstip_samenstelling_bericht($tijdstip_samenstelling_bericht)
            ->setBetreft($betreft);
    }
    /**
     * Get klantreferentie value
     * @return string|null
     */
    public function getKlantreferentie()
    {
        return $this->klantreferentie;
    }
    /**
     * Set klantreferentie value
     * @param string $klantreferentie
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public function setKlantreferentie($klantreferentie = null)
    {
        // validation for constraint: string
        if (!is_null($klantreferentie) && !is_string($klantreferentie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($klantreferentie)), __LINE__);
        }
        $this->klantreferentie = $klantreferentie;
        return $this;
    }
    /**
     * Get productienummer value
     * @return string|null
     */
    public function getProductienummer()
    {
        return $this->productienummer;
    }
    /**
     * Set productienummer value
     * @param string $productienummer
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public function setProductienummer($productienummer = null)
    {
        // validation for constraint: string
        if (!is_null($productienummer) && !is_string($productienummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productienummer)), __LINE__);
        }
        $this->productienummer = $productienummer;
        return $this;
    }
    /**
     * Get adres_range value
     * @return string|null
     */
    public function getAdres_range()
    {
        return $this->adres_range;
    }
    /**
     * Set adres_range value
     * @param string $adres_range
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public function setAdres_range($adres_range = null)
    {
        // validation for constraint: string
        if (!is_null($adres_range) && !is_string($adres_range)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adres_range)), __LINE__);
        }
        $this->adres_range = $adres_range;
        return $this;
    }
    /**
     * Get woonplaats_naam value
     * @return string|null
     */
    public function getWoonplaats_naam()
    {
        return $this->woonplaats_naam;
    }
    /**
     * Set woonplaats_naam value
     * @param string $woonplaats_naam
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public function setWoonplaats_naam($woonplaats_naam = null)
    {
        // validation for constraint: string
        if (!is_null($woonplaats_naam) && !is_string($woonplaats_naam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($woonplaats_naam)), __LINE__);
        }
        $this->woonplaats_naam = $woonplaats_naam;
        return $this;
    }
    /**
     * Get actualiteittijdstip_koopsommen value
     * @return string|null
     */
    public function getActualiteittijdstip_koopsommen()
    {
        return $this->actualiteittijdstip_koopsommen;
    }
    /**
     * Set actualiteittijdstip_koopsommen value
     * @param string $actualiteittijdstip_koopsommen
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public function setActualiteittijdstip_koopsommen($actualiteittijdstip_koopsommen = null)
    {
        // validation for constraint: string
        if (!is_null($actualiteittijdstip_koopsommen) && !is_string($actualiteittijdstip_koopsommen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actualiteittijdstip_koopsommen)), __LINE__);
        }
        $this->actualiteittijdstip_koopsommen = $actualiteittijdstip_koopsommen;
        return $this;
    }
    /**
     * Get tijdstip_samenstelling_bericht value
     * @return string|null
     */
    public function getTijdstip_samenstelling_bericht()
    {
        return $this->tijdstip_samenstelling_bericht;
    }
    /**
     * Set tijdstip_samenstelling_bericht value
     * @param string $tijdstip_samenstelling_bericht
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public function setTijdstip_samenstelling_bericht($tijdstip_samenstelling_bericht = null)
    {
        // validation for constraint: string
        if (!is_null($tijdstip_samenstelling_bericht) && !is_string($tijdstip_samenstelling_bericht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tijdstip_samenstelling_bericht)), __LINE__);
        }
        $this->tijdstip_samenstelling_bericht = $tijdstip_samenstelling_bericht;
        return $this;
    }
    /**
     * Get betreft value
     * @return \Webservices\StructType\KadasterV2KoopsommenBetreft|null
     */
    public function getBetreft()
    {
        return $this->betreft;
    }
    /**
     * Set betreft value
     * @param \Webservices\StructType\KadasterV2KoopsommenBetreft $betreft
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public function setBetreft(\Webservices\StructType\KadasterV2KoopsommenBetreft $betreft = null)
    {
        $this->betreft = $betreft;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
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
