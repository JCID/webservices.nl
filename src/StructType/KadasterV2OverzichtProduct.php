<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2OverzichtProduct StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2OverzichtProduct extends AbstractStructBase
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
     * @var \Webservices\StructType\KadasterV2OverzichtBetreft
     */
    public $betreft;
    /**
     * Constructor method for KadasterV2OverzichtProduct
     * @uses KadasterV2OverzichtProduct::setKlantreferentie()
     * @uses KadasterV2OverzichtProduct::setProductienummer()
     * @uses KadasterV2OverzichtProduct::setTijdstip_samenstelling_bericht()
     * @uses KadasterV2OverzichtProduct::setBetreft()
     * @param string $klantreferentie
     * @param string $productienummer
     * @param string $tijdstip_samenstelling_bericht
     * @param \Webservices\StructType\KadasterV2OverzichtBetreft $betreft
     */
    public function __construct($klantreferentie = null, $productienummer = null, $tijdstip_samenstelling_bericht = null, \Webservices\StructType\KadasterV2OverzichtBetreft $betreft = null)
    {
        $this
            ->setKlantreferentie($klantreferentie)
            ->setProductienummer($productienummer)
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
     * @return \Webservices\StructType\KadasterV2OverzichtProduct
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
     * @return \Webservices\StructType\KadasterV2OverzichtProduct
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
     * @return \Webservices\StructType\KadasterV2OverzichtProduct
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
     * @return \Webservices\StructType\KadasterV2OverzichtBetreft|null
     */
    public function getBetreft()
    {
        return $this->betreft;
    }
    /**
     * Set betreft value
     * @param \Webservices\StructType\KadasterV2OverzichtBetreft $betreft
     * @return \Webservices\StructType\KadasterV2OverzichtProduct
     */
    public function setBetreft(\Webservices\StructType\KadasterV2OverzichtBetreft $betreft = null)
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
     * @return \Webservices\StructType\KadasterV2OverzichtProduct
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
