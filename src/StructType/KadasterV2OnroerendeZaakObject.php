<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2OnroerendeZaakObject StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2OnroerendeZaakObject extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificatie;
    /**
     * The adres
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AddressLocatie
     */
    public $adres;
    /**
     * The heeft_tekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $heeft_tekening;
    /**
     * The uin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $uin;
    /**
     * The aard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The kadastrale_grootte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2OppervlakType
     */
    public $kadastrale_grootte;
    /**
     * The plaatscoordinaten
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2RDCoordinate
     */
    public $plaatscoordinaten;
    /**
     * The kadastrale_aanduiding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadastraleAanduiding
     */
    public $kadastrale_aanduiding;
    /**
     * The belast_met
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2LandinrichtingsrenteTypeArray
     */
    public $belast_met;
    /**
     * The aard_cultuur_onbebouwd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard_cultuur_onbebouwd;
    /**
     * The aard_cultuur_bebouwd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard_cultuur_bebouwd;
    /**
     * The omschrijving_onderzoek_erfdienstbaarheden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving_onderzoek_erfdienstbaarheden;
    /**
     * The toestandsdatum_onderzoek_erfdienstbaarheden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $toestandsdatum_onderzoek_erfdienstbaarheden;
    /**
     * The koopsom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType
     */
    public $koopsom;
    /**
     * The indicatie_voorlopige_aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_voorlopige_aantekening;
    /**
     * The indicatie_tweede_splitsing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $indicatie_tweede_splitsing;
    /**
     * The indicatie_gedeeltelijk_bezwaard_oud_object
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $indicatie_gedeeltelijk_bezwaard_oud_object;
    /**
     * The indicatie_gesplitst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $indicatie_gesplitst;
    /**
     * The toelichting_bewaarder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $toelichting_bewaarder;
    /**
     * The indicatie_voorgenomen_aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_voorgenomen_aantekening;
    /**
     * The historie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Historie
     */
    public $historie;
    /**
     * The overgegaan_inoz
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2VoorwaardseOnroerendeZaakFiliatieArray
     */
    public $overgegaan_inoz;
    /**
     * The is_vermeld_in
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2IsVermeldIn
     */
    public $is_vermeld_in;
    /**
     * The ontstaan_uit_oz
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2OnroerendeZaakFiliatieArray
     */
    public $ontstaan_uit_oz;
    /**
     * The aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2AantekeningWKPBArray
     */
    public $aantekening;
    /**
     * Constructor method for KadasterV2OnroerendeZaakObject
     * @uses KadasterV2OnroerendeZaakObject::setId()
     * @uses KadasterV2OnroerendeZaakObject::setType()
     * @uses KadasterV2OnroerendeZaakObject::setIdentificatie()
     * @uses KadasterV2OnroerendeZaakObject::setAdres()
     * @uses KadasterV2OnroerendeZaakObject::setHeeft_tekening()
     * @uses KadasterV2OnroerendeZaakObject::setUin()
     * @uses KadasterV2OnroerendeZaakObject::setAard()
     * @uses KadasterV2OnroerendeZaakObject::setOmschrijving()
     * @uses KadasterV2OnroerendeZaakObject::setKadastrale_grootte()
     * @uses KadasterV2OnroerendeZaakObject::setPlaatscoordinaten()
     * @uses KadasterV2OnroerendeZaakObject::setKadastrale_aanduiding()
     * @uses KadasterV2OnroerendeZaakObject::setBelast_met()
     * @uses KadasterV2OnroerendeZaakObject::setAard_cultuur_onbebouwd()
     * @uses KadasterV2OnroerendeZaakObject::setAard_cultuur_bebouwd()
     * @uses KadasterV2OnroerendeZaakObject::setOmschrijving_onderzoek_erfdienstbaarheden()
     * @uses KadasterV2OnroerendeZaakObject::setToestandsdatum_onderzoek_erfdienstbaarheden()
     * @uses KadasterV2OnroerendeZaakObject::setKoopsom()
     * @uses KadasterV2OnroerendeZaakObject::setIndicatie_voorlopige_aantekening()
     * @uses KadasterV2OnroerendeZaakObject::setIndicatie_tweede_splitsing()
     * @uses KadasterV2OnroerendeZaakObject::setIndicatie_gedeeltelijk_bezwaard_oud_object()
     * @uses KadasterV2OnroerendeZaakObject::setIndicatie_gesplitst()
     * @uses KadasterV2OnroerendeZaakObject::setToelichting_bewaarder()
     * @uses KadasterV2OnroerendeZaakObject::setIndicatie_voorgenomen_aantekening()
     * @uses KadasterV2OnroerendeZaakObject::setHistorie()
     * @uses KadasterV2OnroerendeZaakObject::setOvergegaan_inoz()
     * @uses KadasterV2OnroerendeZaakObject::setIs_vermeld_in()
     * @uses KadasterV2OnroerendeZaakObject::setOntstaan_uit_oz()
     * @uses KadasterV2OnroerendeZaakObject::setAantekening()
     * @param string $id
     * @param string $type
     * @param string $identificatie
     * @param \Webservices\StructType\KadasterV2AddressLocatie $adres
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $heeft_tekening
     * @param string $uin
     * @param string $aard
     * @param string $omschrijving
     * @param \Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte
     * @param \Webservices\StructType\KadasterV2RDCoordinate $plaatscoordinaten
     * @param \Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding
     * @param \Webservices\ArrayType\KadasterV2LandinrichtingsrenteTypeArray $belast_met
     * @param string $aard_cultuur_onbebouwd
     * @param string $aard_cultuur_bebouwd
     * @param string $omschrijving_onderzoek_erfdienstbaarheden
     * @param string $toestandsdatum_onderzoek_erfdienstbaarheden
     * @param \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType $koopsom
     * @param bool $indicatie_voorlopige_aantekening
     * @param string $indicatie_tweede_splitsing
     * @param string $indicatie_gedeeltelijk_bezwaard_oud_object
     * @param string $indicatie_gesplitst
     * @param string $toelichting_bewaarder
     * @param bool $indicatie_voorgenomen_aantekening
     * @param \Webservices\StructType\KadasterV2Historie $historie
     * @param \Webservices\ArrayType\KadasterV2VoorwaardseOnroerendeZaakFiliatieArray $overgegaan_inoz
     * @param \Webservices\StructType\KadasterV2IsVermeldIn $is_vermeld_in
     * @param \Webservices\ArrayType\KadasterV2OnroerendeZaakFiliatieArray $ontstaan_uit_oz
     * @param \Webservices\ArrayType\KadasterV2AantekeningWKPBArray $aantekening
     */
    public function __construct($id = null, $type = null, $identificatie = null, \Webservices\StructType\KadasterV2AddressLocatie $adres = null, \Webservices\ArrayType\KadasterV2StukdeelArray $heeft_tekening = null, $uin = null, $aard = null, $omschrijving = null, \Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte = null, \Webservices\StructType\KadasterV2RDCoordinate $plaatscoordinaten = null, \Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding = null, \Webservices\ArrayType\KadasterV2LandinrichtingsrenteTypeArray $belast_met = null, $aard_cultuur_onbebouwd = null, $aard_cultuur_bebouwd = null, $omschrijving_onderzoek_erfdienstbaarheden = null, $toestandsdatum_onderzoek_erfdienstbaarheden = null, \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType $koopsom = null, $indicatie_voorlopige_aantekening = null, $indicatie_tweede_splitsing = null, $indicatie_gedeeltelijk_bezwaard_oud_object = null, $indicatie_gesplitst = null, $toelichting_bewaarder = null, $indicatie_voorgenomen_aantekening = null, \Webservices\StructType\KadasterV2Historie $historie = null, \Webservices\ArrayType\KadasterV2VoorwaardseOnroerendeZaakFiliatieArray $overgegaan_inoz = null, \Webservices\StructType\KadasterV2IsVermeldIn $is_vermeld_in = null, \Webservices\ArrayType\KadasterV2OnroerendeZaakFiliatieArray $ontstaan_uit_oz = null, \Webservices\ArrayType\KadasterV2AantekeningWKPBArray $aantekening = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setIdentificatie($identificatie)
            ->setAdres($adres)
            ->setHeeft_tekening($heeft_tekening)
            ->setUin($uin)
            ->setAard($aard)
            ->setOmschrijving($omschrijving)
            ->setKadastrale_grootte($kadastrale_grootte)
            ->setPlaatscoordinaten($plaatscoordinaten)
            ->setKadastrale_aanduiding($kadastrale_aanduiding)
            ->setBelast_met($belast_met)
            ->setAard_cultuur_onbebouwd($aard_cultuur_onbebouwd)
            ->setAard_cultuur_bebouwd($aard_cultuur_bebouwd)
            ->setOmschrijving_onderzoek_erfdienstbaarheden($omschrijving_onderzoek_erfdienstbaarheden)
            ->setToestandsdatum_onderzoek_erfdienstbaarheden($toestandsdatum_onderzoek_erfdienstbaarheden)
            ->setKoopsom($koopsom)
            ->setIndicatie_voorlopige_aantekening($indicatie_voorlopige_aantekening)
            ->setIndicatie_tweede_splitsing($indicatie_tweede_splitsing)
            ->setIndicatie_gedeeltelijk_bezwaard_oud_object($indicatie_gedeeltelijk_bezwaard_oud_object)
            ->setIndicatie_gesplitst($indicatie_gesplitst)
            ->setToelichting_bewaarder($toelichting_bewaarder)
            ->setIndicatie_voorgenomen_aantekening($indicatie_voorgenomen_aantekening)
            ->setHistorie($historie)
            ->setOvergegaan_inoz($overgegaan_inoz)
            ->setIs_vermeld_in($is_vermeld_in)
            ->setOntstaan_uit_oz($ontstaan_uit_oz)
            ->setAantekening($aantekening);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get identificatie value
     * @return string|null
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }
    /**
     * Set identificatie value
     * @param string $identificatie
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setIdentificatie($identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($identificatie) && !is_string($identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificatie)), __LINE__);
        }
        $this->identificatie = $identificatie;
        return $this;
    }
    /**
     * Get adres value
     * @return \Webservices\StructType\KadasterV2AddressLocatie|null
     */
    public function getAdres()
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \Webservices\StructType\KadasterV2AddressLocatie $adres
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setAdres(\Webservices\StructType\KadasterV2AddressLocatie $adres = null)
    {
        $this->adres = $adres;
        return $this;
    }
    /**
     * Get heeft_tekening value
     * @return \Webservices\ArrayType\KadasterV2StukdeelArray|null
     */
    public function getHeeft_tekening()
    {
        return $this->heeft_tekening;
    }
    /**
     * Set heeft_tekening value
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $heeft_tekening
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setHeeft_tekening(\Webservices\ArrayType\KadasterV2StukdeelArray $heeft_tekening = null)
    {
        $this->heeft_tekening = $heeft_tekening;
        return $this;
    }
    /**
     * Get uin value
     * @return string|null
     */
    public function getUin()
    {
        return $this->uin;
    }
    /**
     * Set uin value
     * @param string $uin
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setUin($uin = null)
    {
        // validation for constraint: string
        if (!is_null($uin) && !is_string($uin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uin)), __LINE__);
        }
        $this->uin = $uin;
        return $this;
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
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
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
     * Get omschrijving value
     * @return string|null
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }
    /**
     * Set omschrijving value
     * @param string $omschrijving
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setOmschrijving($omschrijving = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving) && !is_string($omschrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving)), __LINE__);
        }
        $this->omschrijving = $omschrijving;
        return $this;
    }
    /**
     * Get kadastrale_grootte value
     * @return \Webservices\StructType\KadasterV2OppervlakType|null
     */
    public function getKadastrale_grootte()
    {
        return $this->kadastrale_grootte;
    }
    /**
     * Set kadastrale_grootte value
     * @param \Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setKadastrale_grootte(\Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte = null)
    {
        $this->kadastrale_grootte = $kadastrale_grootte;
        return $this;
    }
    /**
     * Get plaatscoordinaten value
     * @return \Webservices\StructType\KadasterV2RDCoordinate|null
     */
    public function getPlaatscoordinaten()
    {
        return $this->plaatscoordinaten;
    }
    /**
     * Set plaatscoordinaten value
     * @param \Webservices\StructType\KadasterV2RDCoordinate $plaatscoordinaten
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setPlaatscoordinaten(\Webservices\StructType\KadasterV2RDCoordinate $plaatscoordinaten = null)
    {
        $this->plaatscoordinaten = $plaatscoordinaten;
        return $this;
    }
    /**
     * Get kadastrale_aanduiding value
     * @return \Webservices\StructType\KadasterV2KadastraleAanduiding|null
     */
    public function getKadastrale_aanduiding()
    {
        return $this->kadastrale_aanduiding;
    }
    /**
     * Set kadastrale_aanduiding value
     * @param \Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setKadastrale_aanduiding(\Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this->kadastrale_aanduiding = $kadastrale_aanduiding;
        return $this;
    }
    /**
     * Get belast_met value
     * @return \Webservices\ArrayType\KadasterV2LandinrichtingsrenteTypeArray|null
     */
    public function getBelast_met()
    {
        return $this->belast_met;
    }
    /**
     * Set belast_met value
     * @param \Webservices\ArrayType\KadasterV2LandinrichtingsrenteTypeArray $belast_met
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setBelast_met(\Webservices\ArrayType\KadasterV2LandinrichtingsrenteTypeArray $belast_met = null)
    {
        $this->belast_met = $belast_met;
        return $this;
    }
    /**
     * Get aard_cultuur_onbebouwd value
     * @return string|null
     */
    public function getAard_cultuur_onbebouwd()
    {
        return $this->aard_cultuur_onbebouwd;
    }
    /**
     * Set aard_cultuur_onbebouwd value
     * @param string $aard_cultuur_onbebouwd
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setAard_cultuur_onbebouwd($aard_cultuur_onbebouwd = null)
    {
        // validation for constraint: string
        if (!is_null($aard_cultuur_onbebouwd) && !is_string($aard_cultuur_onbebouwd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard_cultuur_onbebouwd)), __LINE__);
        }
        $this->aard_cultuur_onbebouwd = $aard_cultuur_onbebouwd;
        return $this;
    }
    /**
     * Get aard_cultuur_bebouwd value
     * @return string|null
     */
    public function getAard_cultuur_bebouwd()
    {
        return $this->aard_cultuur_bebouwd;
    }
    /**
     * Set aard_cultuur_bebouwd value
     * @param string $aard_cultuur_bebouwd
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setAard_cultuur_bebouwd($aard_cultuur_bebouwd = null)
    {
        // validation for constraint: string
        if (!is_null($aard_cultuur_bebouwd) && !is_string($aard_cultuur_bebouwd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard_cultuur_bebouwd)), __LINE__);
        }
        $this->aard_cultuur_bebouwd = $aard_cultuur_bebouwd;
        return $this;
    }
    /**
     * Get omschrijving_onderzoek_erfdienstbaarheden value
     * @return string|null
     */
    public function getOmschrijving_onderzoek_erfdienstbaarheden()
    {
        return $this->omschrijving_onderzoek_erfdienstbaarheden;
    }
    /**
     * Set omschrijving_onderzoek_erfdienstbaarheden value
     * @param string $omschrijving_onderzoek_erfdienstbaarheden
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setOmschrijving_onderzoek_erfdienstbaarheden($omschrijving_onderzoek_erfdienstbaarheden = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_onderzoek_erfdienstbaarheden) && !is_string($omschrijving_onderzoek_erfdienstbaarheden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_onderzoek_erfdienstbaarheden)), __LINE__);
        }
        $this->omschrijving_onderzoek_erfdienstbaarheden = $omschrijving_onderzoek_erfdienstbaarheden;
        return $this;
    }
    /**
     * Get toestandsdatum_onderzoek_erfdienstbaarheden value
     * @return string|null
     */
    public function getToestandsdatum_onderzoek_erfdienstbaarheden()
    {
        return $this->toestandsdatum_onderzoek_erfdienstbaarheden;
    }
    /**
     * Set toestandsdatum_onderzoek_erfdienstbaarheden value
     * @param string $toestandsdatum_onderzoek_erfdienstbaarheden
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setToestandsdatum_onderzoek_erfdienstbaarheden($toestandsdatum_onderzoek_erfdienstbaarheden = null)
    {
        // validation for constraint: string
        if (!is_null($toestandsdatum_onderzoek_erfdienstbaarheden) && !is_string($toestandsdatum_onderzoek_erfdienstbaarheden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toestandsdatum_onderzoek_erfdienstbaarheden)), __LINE__);
        }
        $this->toestandsdatum_onderzoek_erfdienstbaarheden = $toestandsdatum_onderzoek_erfdienstbaarheden;
        return $this;
    }
    /**
     * Get koopsom value
     * @return \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType|null
     */
    public function getKoopsom()
    {
        return $this->koopsom;
    }
    /**
     * Set koopsom value
     * @param \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType $koopsom
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setKoopsom(\Webservices\StructType\KadasterV2KadastraalTypeKoopsomType $koopsom = null)
    {
        $this->koopsom = $koopsom;
        return $this;
    }
    /**
     * Get indicatie_voorlopige_aantekening value
     * @return bool|null
     */
    public function getIndicatie_voorlopige_aantekening()
    {
        return $this->indicatie_voorlopige_aantekening;
    }
    /**
     * Set indicatie_voorlopige_aantekening value
     * @param bool $indicatie_voorlopige_aantekening
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setIndicatie_voorlopige_aantekening($indicatie_voorlopige_aantekening = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_voorlopige_aantekening) && !is_bool($indicatie_voorlopige_aantekening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_voorlopige_aantekening)), __LINE__);
        }
        $this->indicatie_voorlopige_aantekening = $indicatie_voorlopige_aantekening;
        return $this;
    }
    /**
     * Get indicatie_tweede_splitsing value
     * @return string|null
     */
    public function getIndicatie_tweede_splitsing()
    {
        return $this->indicatie_tweede_splitsing;
    }
    /**
     * Set indicatie_tweede_splitsing value
     * @param string $indicatie_tweede_splitsing
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setIndicatie_tweede_splitsing($indicatie_tweede_splitsing = null)
    {
        // validation for constraint: string
        if (!is_null($indicatie_tweede_splitsing) && !is_string($indicatie_tweede_splitsing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicatie_tweede_splitsing)), __LINE__);
        }
        $this->indicatie_tweede_splitsing = $indicatie_tweede_splitsing;
        return $this;
    }
    /**
     * Get indicatie_gedeeltelijk_bezwaard_oud_object value
     * @return string|null
     */
    public function getIndicatie_gedeeltelijk_bezwaard_oud_object()
    {
        return $this->indicatie_gedeeltelijk_bezwaard_oud_object;
    }
    /**
     * Set indicatie_gedeeltelijk_bezwaard_oud_object value
     * @param string $indicatie_gedeeltelijk_bezwaard_oud_object
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setIndicatie_gedeeltelijk_bezwaard_oud_object($indicatie_gedeeltelijk_bezwaard_oud_object = null)
    {
        // validation for constraint: string
        if (!is_null($indicatie_gedeeltelijk_bezwaard_oud_object) && !is_string($indicatie_gedeeltelijk_bezwaard_oud_object)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicatie_gedeeltelijk_bezwaard_oud_object)), __LINE__);
        }
        $this->indicatie_gedeeltelijk_bezwaard_oud_object = $indicatie_gedeeltelijk_bezwaard_oud_object;
        return $this;
    }
    /**
     * Get indicatie_gesplitst value
     * @return string|null
     */
    public function getIndicatie_gesplitst()
    {
        return $this->indicatie_gesplitst;
    }
    /**
     * Set indicatie_gesplitst value
     * @param string $indicatie_gesplitst
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setIndicatie_gesplitst($indicatie_gesplitst = null)
    {
        // validation for constraint: string
        if (!is_null($indicatie_gesplitst) && !is_string($indicatie_gesplitst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicatie_gesplitst)), __LINE__);
        }
        $this->indicatie_gesplitst = $indicatie_gesplitst;
        return $this;
    }
    /**
     * Get toelichting_bewaarder value
     * @return string|null
     */
    public function getToelichting_bewaarder()
    {
        return $this->toelichting_bewaarder;
    }
    /**
     * Set toelichting_bewaarder value
     * @param string $toelichting_bewaarder
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setToelichting_bewaarder($toelichting_bewaarder = null)
    {
        // validation for constraint: string
        if (!is_null($toelichting_bewaarder) && !is_string($toelichting_bewaarder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toelichting_bewaarder)), __LINE__);
        }
        $this->toelichting_bewaarder = $toelichting_bewaarder;
        return $this;
    }
    /**
     * Get indicatie_voorgenomen_aantekening value
     * @return bool|null
     */
    public function getIndicatie_voorgenomen_aantekening()
    {
        return $this->indicatie_voorgenomen_aantekening;
    }
    /**
     * Set indicatie_voorgenomen_aantekening value
     * @param bool $indicatie_voorgenomen_aantekening
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setIndicatie_voorgenomen_aantekening($indicatie_voorgenomen_aantekening = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_voorgenomen_aantekening) && !is_bool($indicatie_voorgenomen_aantekening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_voorgenomen_aantekening)), __LINE__);
        }
        $this->indicatie_voorgenomen_aantekening = $indicatie_voorgenomen_aantekening;
        return $this;
    }
    /**
     * Get historie value
     * @return \Webservices\StructType\KadasterV2Historie|null
     */
    public function getHistorie()
    {
        return $this->historie;
    }
    /**
     * Set historie value
     * @param \Webservices\StructType\KadasterV2Historie $historie
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setHistorie(\Webservices\StructType\KadasterV2Historie $historie = null)
    {
        $this->historie = $historie;
        return $this;
    }
    /**
     * Get overgegaan_inoz value
     * @return \Webservices\ArrayType\KadasterV2VoorwaardseOnroerendeZaakFiliatieArray|null
     */
    public function getOvergegaan_inoz()
    {
        return $this->overgegaan_inoz;
    }
    /**
     * Set overgegaan_inoz value
     * @param \Webservices\ArrayType\KadasterV2VoorwaardseOnroerendeZaakFiliatieArray $overgegaan_inoz
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setOvergegaan_inoz(\Webservices\ArrayType\KadasterV2VoorwaardseOnroerendeZaakFiliatieArray $overgegaan_inoz = null)
    {
        $this->overgegaan_inoz = $overgegaan_inoz;
        return $this;
    }
    /**
     * Get is_vermeld_in value
     * @return \Webservices\StructType\KadasterV2IsVermeldIn|null
     */
    public function getIs_vermeld_in()
    {
        return $this->is_vermeld_in;
    }
    /**
     * Set is_vermeld_in value
     * @param \Webservices\StructType\KadasterV2IsVermeldIn $is_vermeld_in
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setIs_vermeld_in(\Webservices\StructType\KadasterV2IsVermeldIn $is_vermeld_in = null)
    {
        $this->is_vermeld_in = $is_vermeld_in;
        return $this;
    }
    /**
     * Get ontstaan_uit_oz value
     * @return \Webservices\ArrayType\KadasterV2OnroerendeZaakFiliatieArray|null
     */
    public function getOntstaan_uit_oz()
    {
        return $this->ontstaan_uit_oz;
    }
    /**
     * Set ontstaan_uit_oz value
     * @param \Webservices\ArrayType\KadasterV2OnroerendeZaakFiliatieArray $ontstaan_uit_oz
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setOntstaan_uit_oz(\Webservices\ArrayType\KadasterV2OnroerendeZaakFiliatieArray $ontstaan_uit_oz = null)
    {
        $this->ontstaan_uit_oz = $ontstaan_uit_oz;
        return $this;
    }
    /**
     * Get aantekening value
     * @return \Webservices\ArrayType\KadasterV2AantekeningWKPBArray|null
     */
    public function getAantekening()
    {
        return $this->aantekening;
    }
    /**
     * Set aantekening value
     * @param \Webservices\ArrayType\KadasterV2AantekeningWKPBArray $aantekening
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public function setAantekening(\Webservices\ArrayType\KadasterV2AantekeningWKPBArray $aantekening = null)
    {
        $this->aantekening = $aantekening;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject
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
