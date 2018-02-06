<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2HypothecairBerichtObjectProduct StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2HypothecairBerichtObjectProduct extends AbstractStructBase
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
     * @var \Webservices\StructType\KadasterV2Betreft
     */
    public $betreft;
    /**
     * The hypotheek_stukken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2HypotheekArray
     */
    public $hypotheek_stukken;
    /**
     * The rechten
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Rechten
     */
    public $rechten;
    /**
     * The stukken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Stukken
     */
    public $stukken;
    /**
     * The toevoeging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Toevoeging
     */
    public $toevoeging;
    /**
     * Constructor method for KadasterV2HypothecairBerichtObjectProduct
     * @uses KadasterV2HypothecairBerichtObjectProduct::setKlantreferentie()
     * @uses KadasterV2HypothecairBerichtObjectProduct::setProductienummer()
     * @uses KadasterV2HypothecairBerichtObjectProduct::setTijdstip_samenstelling_bericht()
     * @uses KadasterV2HypothecairBerichtObjectProduct::setBetreft()
     * @uses KadasterV2HypothecairBerichtObjectProduct::setHypotheek_stukken()
     * @uses KadasterV2HypothecairBerichtObjectProduct::setRechten()
     * @uses KadasterV2HypothecairBerichtObjectProduct::setStukken()
     * @uses KadasterV2HypothecairBerichtObjectProduct::setToevoeging()
     * @param string $klantreferentie
     * @param string $productienummer
     * @param string $tijdstip_samenstelling_bericht
     * @param \Webservices\StructType\KadasterV2Betreft $betreft
     * @param \Webservices\ArrayType\KadasterV2HypotheekArray $hypotheek_stukken
     * @param \Webservices\StructType\KadasterV2Rechten $rechten
     * @param \Webservices\StructType\KadasterV2Stukken $stukken
     * @param \Webservices\StructType\KadasterV2Toevoeging $toevoeging
     */
    public function __construct($klantreferentie = null, $productienummer = null, $tijdstip_samenstelling_bericht = null, \Webservices\StructType\KadasterV2Betreft $betreft = null, \Webservices\ArrayType\KadasterV2HypotheekArray $hypotheek_stukken = null, \Webservices\StructType\KadasterV2Rechten $rechten = null, \Webservices\StructType\KadasterV2Stukken $stukken = null, \Webservices\StructType\KadasterV2Toevoeging $toevoeging = null)
    {
        $this
            ->setKlantreferentie($klantreferentie)
            ->setProductienummer($productienummer)
            ->setTijdstip_samenstelling_bericht($tijdstip_samenstelling_bericht)
            ->setBetreft($betreft)
            ->setHypotheek_stukken($hypotheek_stukken)
            ->setRechten($rechten)
            ->setStukken($stukken)
            ->setToevoeging($toevoeging);
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
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
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
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
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
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
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
     * @return \Webservices\StructType\KadasterV2Betreft|null
     */
    public function getBetreft()
    {
        return $this->betreft;
    }
    /**
     * Set betreft value
     * @param \Webservices\StructType\KadasterV2Betreft $betreft
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
     */
    public function setBetreft(\Webservices\StructType\KadasterV2Betreft $betreft = null)
    {
        $this->betreft = $betreft;
        return $this;
    }
    /**
     * Get hypotheek_stukken value
     * @return \Webservices\ArrayType\KadasterV2HypotheekArray|null
     */
    public function getHypotheek_stukken()
    {
        return $this->hypotheek_stukken;
    }
    /**
     * Set hypotheek_stukken value
     * @param \Webservices\ArrayType\KadasterV2HypotheekArray $hypotheek_stukken
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
     */
    public function setHypotheek_stukken(\Webservices\ArrayType\KadasterV2HypotheekArray $hypotheek_stukken = null)
    {
        $this->hypotheek_stukken = $hypotheek_stukken;
        return $this;
    }
    /**
     * Get rechten value
     * @return \Webservices\StructType\KadasterV2Rechten|null
     */
    public function getRechten()
    {
        return $this->rechten;
    }
    /**
     * Set rechten value
     * @param \Webservices\StructType\KadasterV2Rechten $rechten
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
     */
    public function setRechten(\Webservices\StructType\KadasterV2Rechten $rechten = null)
    {
        $this->rechten = $rechten;
        return $this;
    }
    /**
     * Get stukken value
     * @return \Webservices\StructType\KadasterV2Stukken|null
     */
    public function getStukken()
    {
        return $this->stukken;
    }
    /**
     * Set stukken value
     * @param \Webservices\StructType\KadasterV2Stukken $stukken
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
     */
    public function setStukken(\Webservices\StructType\KadasterV2Stukken $stukken = null)
    {
        $this->stukken = $stukken;
        return $this;
    }
    /**
     * Get toevoeging value
     * @return \Webservices\StructType\KadasterV2Toevoeging|null
     */
    public function getToevoeging()
    {
        return $this->toevoeging;
    }
    /**
     * Set toevoeging value
     * @param \Webservices\StructType\KadasterV2Toevoeging $toevoeging
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
     */
    public function setToevoeging(\Webservices\StructType\KadasterV2Toevoeging $toevoeging = null)
    {
        $this->toevoeging = $toevoeging;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2HypothecairBerichtObjectProduct
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
