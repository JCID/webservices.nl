<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterPersoon extends AbstractStructBase
{
    /**
     * The akr_subject_nr
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $akr_subject_nr;
    /**
     * The kadastrale_identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $kadastrale_identificatie;
    /**
     * The natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public $natuurlijk_persoon;
    /**
     * The niet_natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterNietNatuurlijkPersoon
     */
    public $niet_natuurlijk_persoon;
    /**
     * The aantekening_beschikkingsbevoegdheid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $aantekening_beschikkingsbevoegdheid;
    /**
     * The woonlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterLocatie
     */
    public $woonlocatie;
    /**
     * The postlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterLocatie
     */
    public $postlocatie;
    /**
     * The domicilie_keuzes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterDomicilieKeuzeLijst
     */
    public $domicilie_keuzes;
    /**
     * Constructor method for kadasterPersoon
     * @uses KadasterPersoon::setAkr_subject_nr()
     * @uses KadasterPersoon::setKadastrale_identificatie()
     * @uses KadasterPersoon::setNatuurlijk_persoon()
     * @uses KadasterPersoon::setNiet_natuurlijk_persoon()
     * @uses KadasterPersoon::setAantekening_beschikkingsbevoegdheid()
     * @uses KadasterPersoon::setWoonlocatie()
     * @uses KadasterPersoon::setPostlocatie()
     * @uses KadasterPersoon::setDomicilie_keuzes()
     * @param string $akr_subject_nr
     * @param string $kadastrale_identificatie
     * @param \Webservices\StructType\KadasterNatuurlijkPersoon $natuurlijk_persoon
     * @param \Webservices\StructType\KadasterNietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @param bool $aantekening_beschikkingsbevoegdheid
     * @param \Webservices\StructType\KadasterLocatie $woonlocatie
     * @param \Webservices\StructType\KadasterLocatie $postlocatie
     * @param \Webservices\StructType\KadasterDomicilieKeuzeLijst $domicilie_keuzes
     */
    public function __construct($akr_subject_nr = null, $kadastrale_identificatie = null, \Webservices\StructType\KadasterNatuurlijkPersoon $natuurlijk_persoon = null, \Webservices\StructType\KadasterNietNatuurlijkPersoon $niet_natuurlijk_persoon = null, $aantekening_beschikkingsbevoegdheid = null, \Webservices\StructType\KadasterLocatie $woonlocatie = null, \Webservices\StructType\KadasterLocatie $postlocatie = null, \Webservices\StructType\KadasterDomicilieKeuzeLijst $domicilie_keuzes = null)
    {
        $this
            ->setAkr_subject_nr($akr_subject_nr)
            ->setKadastrale_identificatie($kadastrale_identificatie)
            ->setNatuurlijk_persoon($natuurlijk_persoon)
            ->setNiet_natuurlijk_persoon($niet_natuurlijk_persoon)
            ->setAantekening_beschikkingsbevoegdheid($aantekening_beschikkingsbevoegdheid)
            ->setWoonlocatie($woonlocatie)
            ->setPostlocatie($postlocatie)
            ->setDomicilie_keuzes($domicilie_keuzes);
    }
    /**
     * Get akr_subject_nr value
     * @return string|null
     */
    public function getAkr_subject_nr()
    {
        return $this->akr_subject_nr;
    }
    /**
     * Set akr_subject_nr value
     * @param string $akr_subject_nr
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setAkr_subject_nr($akr_subject_nr = null)
    {
        // validation for constraint: string
        if (!is_null($akr_subject_nr) && !is_string($akr_subject_nr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($akr_subject_nr)), __LINE__);
        }
        $this->akr_subject_nr = $akr_subject_nr;
        return $this;
    }
    /**
     * Get kadastrale_identificatie value
     * @return string|null
     */
    public function getKadastrale_identificatie()
    {
        return $this->kadastrale_identificatie;
    }
    /**
     * Set kadastrale_identificatie value
     * @param string $kadastrale_identificatie
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setKadastrale_identificatie($kadastrale_identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($kadastrale_identificatie) && !is_string($kadastrale_identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kadastrale_identificatie)), __LINE__);
        }
        $this->kadastrale_identificatie = $kadastrale_identificatie;
        return $this;
    }
    /**
     * Get natuurlijk_persoon value
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon|null
     */
    public function getNatuurlijk_persoon()
    {
        return $this->natuurlijk_persoon;
    }
    /**
     * Set natuurlijk_persoon value
     * @param \Webservices\StructType\KadasterNatuurlijkPersoon $natuurlijk_persoon
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setNatuurlijk_persoon(\Webservices\StructType\KadasterNatuurlijkPersoon $natuurlijk_persoon = null)
    {
        $this->natuurlijk_persoon = $natuurlijk_persoon;
        return $this;
    }
    /**
     * Get niet_natuurlijk_persoon value
     * @return \Webservices\StructType\KadasterNietNatuurlijkPersoon|null
     */
    public function getNiet_natuurlijk_persoon()
    {
        return $this->niet_natuurlijk_persoon;
    }
    /**
     * Set niet_natuurlijk_persoon value
     * @param \Webservices\StructType\KadasterNietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setNiet_natuurlijk_persoon(\Webservices\StructType\KadasterNietNatuurlijkPersoon $niet_natuurlijk_persoon = null)
    {
        $this->niet_natuurlijk_persoon = $niet_natuurlijk_persoon;
        return $this;
    }
    /**
     * Get aantekening_beschikkingsbevoegdheid value
     * @return bool|null
     */
    public function getAantekening_beschikkingsbevoegdheid()
    {
        return $this->aantekening_beschikkingsbevoegdheid;
    }
    /**
     * Set aantekening_beschikkingsbevoegdheid value
     * @param bool $aantekening_beschikkingsbevoegdheid
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setAantekening_beschikkingsbevoegdheid($aantekening_beschikkingsbevoegdheid = null)
    {
        // validation for constraint: boolean
        if (!is_null($aantekening_beschikkingsbevoegdheid) && !is_bool($aantekening_beschikkingsbevoegdheid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($aantekening_beschikkingsbevoegdheid)), __LINE__);
        }
        $this->aantekening_beschikkingsbevoegdheid = $aantekening_beschikkingsbevoegdheid;
        return $this;
    }
    /**
     * Get woonlocatie value
     * @return \Webservices\StructType\KadasterLocatie|null
     */
    public function getWoonlocatie()
    {
        return $this->woonlocatie;
    }
    /**
     * Set woonlocatie value
     * @param \Webservices\StructType\KadasterLocatie $woonlocatie
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setWoonlocatie(\Webservices\StructType\KadasterLocatie $woonlocatie = null)
    {
        $this->woonlocatie = $woonlocatie;
        return $this;
    }
    /**
     * Get postlocatie value
     * @return \Webservices\StructType\KadasterLocatie|null
     */
    public function getPostlocatie()
    {
        return $this->postlocatie;
    }
    /**
     * Set postlocatie value
     * @param \Webservices\StructType\KadasterLocatie $postlocatie
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setPostlocatie(\Webservices\StructType\KadasterLocatie $postlocatie = null)
    {
        $this->postlocatie = $postlocatie;
        return $this;
    }
    /**
     * Get domicilie_keuzes value
     * @return \Webservices\StructType\KadasterDomicilieKeuzeLijst|null
     */
    public function getDomicilie_keuzes()
    {
        return $this->domicilie_keuzes;
    }
    /**
     * Set domicilie_keuzes value
     * @param \Webservices\StructType\KadasterDomicilieKeuzeLijst $domicilie_keuzes
     * @return \Webservices\StructType\KadasterPersoon
     */
    public function setDomicilie_keuzes(\Webservices\StructType\KadasterDomicilieKeuzeLijst $domicilie_keuzes = null)
    {
        $this->domicilie_keuzes = $domicilie_keuzes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterPersoon
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
