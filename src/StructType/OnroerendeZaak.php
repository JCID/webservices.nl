<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnroerendeZaak StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class OnroerendeZaak extends AbstractStructBase
{
    /**
     * The object_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $object_id;
    /**
     * The kadastrale_aanduiding
     * @var \Webservices\StructType\KadastraleAanduiding
     */
    public $kadastrale_aanduiding;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The locaties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\LocatieBinnenlandLijst
     */
    public $locaties;
    /**
     * The datum_ontstaan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_ontstaan;
    /**
     * The onroerende_zaak_historie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadastraleAanduidingLijst
     */
    public $onroerende_zaak_historie;
    /**
     * The perceel_details
     * @var \Webservices\StructType\PerceelDetails
     */
    public $perceel_details;
    /**
     * The koopsom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $koopsom;
    /**
     * The koopjaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $koopjaar;
    /**
     * The indicatie_meer_onroerende_zaken
     * @var bool
     */
    public $indicatie_meer_onroerende_zaken;
    /**
     * The landinrichtingsrente
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\Landinrichtingsrente
     */
    public $landinrichtingsrente;
    /**
     * The indicatie_voorgenomen_splitsing
     * @var bool
     */
    public $indicatie_voorgenomen_splitsing;
    /**
     * The indicatie_voorlopige_aantekening
     * @var bool
     */
    public $indicatie_voorlopige_aantekening;
    /**
     * The niet_volledig_verwerkt_stukken_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\StukReferentiesLijst
     */
    public $niet_volledig_verwerkt_stukken_lijst;
    /**
     * The mandeligheid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\Mandeligheid
     */
    public $mandeligheid;
    /**
     * The aantekeningen_kadastraal_object
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\AantekeningenKadastraalObject
     */
    public $aantekeningen_kadastraal_object;
    /**
     * The pr_beperkingen_kadastraal_object
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\PRBeperkingenKadastraalObject
     */
    public $pr_beperkingen_kadastraal_object;
    /**
     * Constructor method for OnroerendeZaak
     * @uses OnroerendeZaak::setObject_id()
     * @uses OnroerendeZaak::setKadastrale_aanduiding()
     * @uses OnroerendeZaak::setOmschrijving()
     * @uses OnroerendeZaak::setLocaties()
     * @uses OnroerendeZaak::setDatum_ontstaan()
     * @uses OnroerendeZaak::setOnroerende_zaak_historie()
     * @uses OnroerendeZaak::setPerceel_details()
     * @uses OnroerendeZaak::setKoopsom()
     * @uses OnroerendeZaak::setKoopjaar()
     * @uses OnroerendeZaak::setIndicatie_meer_onroerende_zaken()
     * @uses OnroerendeZaak::setLandinrichtingsrente()
     * @uses OnroerendeZaak::setIndicatie_voorgenomen_splitsing()
     * @uses OnroerendeZaak::setIndicatie_voorlopige_aantekening()
     * @uses OnroerendeZaak::setNiet_volledig_verwerkt_stukken_lijst()
     * @uses OnroerendeZaak::setMandeligheid()
     * @uses OnroerendeZaak::setAantekeningen_kadastraal_object()
     * @uses OnroerendeZaak::setPr_beperkingen_kadastraal_object()
     * @param string $object_id
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @param string $omschrijving
     * @param \Webservices\StructType\LocatieBinnenlandLijst $locaties
     * @param string $datum_ontstaan
     * @param \Webservices\StructType\KadastraleAanduidingLijst $onroerende_zaak_historie
     * @param \Webservices\StructType\PerceelDetails $perceel_details
     * @param string $koopsom
     * @param string $koopjaar
     * @param bool $indicatie_meer_onroerende_zaken
     * @param \Webservices\StructType\Landinrichtingsrente $landinrichtingsrente
     * @param bool $indicatie_voorgenomen_splitsing
     * @param bool $indicatie_voorlopige_aantekening
     * @param \Webservices\StructType\StukReferentiesLijst $niet_volledig_verwerkt_stukken_lijst
     * @param \Webservices\StructType\Mandeligheid $mandeligheid
     * @param \Webservices\StructType\AantekeningenKadastraalObject $aantekeningen_kadastraal_object
     * @param \Webservices\StructType\PRBeperkingenKadastraalObject $pr_beperkingen_kadastraal_object
     */
    public function __construct($object_id = null, \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null, $omschrijving = null, \Webservices\StructType\LocatieBinnenlandLijst $locaties = null, $datum_ontstaan = null, \Webservices\StructType\KadastraleAanduidingLijst $onroerende_zaak_historie = null, \Webservices\StructType\PerceelDetails $perceel_details = null, $koopsom = null, $koopjaar = null, $indicatie_meer_onroerende_zaken = null, \Webservices\StructType\Landinrichtingsrente $landinrichtingsrente = null, $indicatie_voorgenomen_splitsing = null, $indicatie_voorlopige_aantekening = null, \Webservices\StructType\StukReferentiesLijst $niet_volledig_verwerkt_stukken_lijst = null, \Webservices\StructType\Mandeligheid $mandeligheid = null, \Webservices\StructType\AantekeningenKadastraalObject $aantekeningen_kadastraal_object = null, \Webservices\StructType\PRBeperkingenKadastraalObject $pr_beperkingen_kadastraal_object = null)
    {
        $this
            ->setObject_id($object_id)
            ->setKadastrale_aanduiding($kadastrale_aanduiding)
            ->setOmschrijving($omschrijving)
            ->setLocaties($locaties)
            ->setDatum_ontstaan($datum_ontstaan)
            ->setOnroerende_zaak_historie($onroerende_zaak_historie)
            ->setPerceel_details($perceel_details)
            ->setKoopsom($koopsom)
            ->setKoopjaar($koopjaar)
            ->setIndicatie_meer_onroerende_zaken($indicatie_meer_onroerende_zaken)
            ->setLandinrichtingsrente($landinrichtingsrente)
            ->setIndicatie_voorgenomen_splitsing($indicatie_voorgenomen_splitsing)
            ->setIndicatie_voorlopige_aantekening($indicatie_voorlopige_aantekening)
            ->setNiet_volledig_verwerkt_stukken_lijst($niet_volledig_verwerkt_stukken_lijst)
            ->setMandeligheid($mandeligheid)
            ->setAantekeningen_kadastraal_object($aantekeningen_kadastraal_object)
            ->setPr_beperkingen_kadastraal_object($pr_beperkingen_kadastraal_object);
    }
    /**
     * Get object_id value
     * @return string|null
     */
    public function getObject_id()
    {
        return $this->object_id;
    }
    /**
     * Set object_id value
     * @param string $object_id
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setObject_id($object_id = null)
    {
        // validation for constraint: string
        if (!is_null($object_id) && !is_string($object_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($object_id)), __LINE__);
        }
        $this->object_id = $object_id;
        return $this;
    }
    /**
     * Get kadastrale_aanduiding value
     * @return \Webservices\StructType\KadastraleAanduiding|null
     */
    public function getKadastrale_aanduiding()
    {
        return $this->kadastrale_aanduiding;
    }
    /**
     * Set kadastrale_aanduiding value
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setKadastrale_aanduiding(\Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this->kadastrale_aanduiding = $kadastrale_aanduiding;
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
     * @return \Webservices\StructType\OnroerendeZaak
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
     * Get locaties value
     * @return \Webservices\StructType\LocatieBinnenlandLijst|null
     */
    public function getLocaties()
    {
        return $this->locaties;
    }
    /**
     * Set locaties value
     * @param \Webservices\StructType\LocatieBinnenlandLijst $locaties
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setLocaties(\Webservices\StructType\LocatieBinnenlandLijst $locaties = null)
    {
        $this->locaties = $locaties;
        return $this;
    }
    /**
     * Get datum_ontstaan value
     * @return string|null
     */
    public function getDatum_ontstaan()
    {
        return $this->datum_ontstaan;
    }
    /**
     * Set datum_ontstaan value
     * @param string $datum_ontstaan
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setDatum_ontstaan($datum_ontstaan = null)
    {
        // validation for constraint: string
        if (!is_null($datum_ontstaan) && !is_string($datum_ontstaan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_ontstaan)), __LINE__);
        }
        $this->datum_ontstaan = $datum_ontstaan;
        return $this;
    }
    /**
     * Get onroerende_zaak_historie value
     * @return \Webservices\StructType\KadastraleAanduidingLijst|null
     */
    public function getOnroerende_zaak_historie()
    {
        return $this->onroerende_zaak_historie;
    }
    /**
     * Set onroerende_zaak_historie value
     * @param \Webservices\StructType\KadastraleAanduidingLijst $onroerende_zaak_historie
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setOnroerende_zaak_historie(\Webservices\StructType\KadastraleAanduidingLijst $onroerende_zaak_historie = null)
    {
        $this->onroerende_zaak_historie = $onroerende_zaak_historie;
        return $this;
    }
    /**
     * Get perceel_details value
     * @return \Webservices\StructType\PerceelDetails|null
     */
    public function getPerceel_details()
    {
        return $this->perceel_details;
    }
    /**
     * Set perceel_details value
     * @param \Webservices\StructType\PerceelDetails $perceel_details
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setPerceel_details(\Webservices\StructType\PerceelDetails $perceel_details = null)
    {
        $this->perceel_details = $perceel_details;
        return $this;
    }
    /**
     * Get koopsom value
     * @return string|null
     */
    public function getKoopsom()
    {
        return $this->koopsom;
    }
    /**
     * Set koopsom value
     * @param string $koopsom
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setKoopsom($koopsom = null)
    {
        // validation for constraint: string
        if (!is_null($koopsom) && !is_string($koopsom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koopsom)), __LINE__);
        }
        $this->koopsom = $koopsom;
        return $this;
    }
    /**
     * Get koopjaar value
     * @return string|null
     */
    public function getKoopjaar()
    {
        return $this->koopjaar;
    }
    /**
     * Set koopjaar value
     * @param string $koopjaar
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setKoopjaar($koopjaar = null)
    {
        // validation for constraint: string
        if (!is_null($koopjaar) && !is_string($koopjaar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koopjaar)), __LINE__);
        }
        $this->koopjaar = $koopjaar;
        return $this;
    }
    /**
     * Get indicatie_meer_onroerende_zaken value
     * @return bool|null
     */
    public function getIndicatie_meer_onroerende_zaken()
    {
        return $this->indicatie_meer_onroerende_zaken;
    }
    /**
     * Set indicatie_meer_onroerende_zaken value
     * @param bool $indicatie_meer_onroerende_zaken
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setIndicatie_meer_onroerende_zaken($indicatie_meer_onroerende_zaken = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_meer_onroerende_zaken) && !is_bool($indicatie_meer_onroerende_zaken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_meer_onroerende_zaken)), __LINE__);
        }
        $this->indicatie_meer_onroerende_zaken = $indicatie_meer_onroerende_zaken;
        return $this;
    }
    /**
     * Get landinrichtingsrente value
     * @return \Webservices\StructType\Landinrichtingsrente|null
     */
    public function getLandinrichtingsrente()
    {
        return $this->landinrichtingsrente;
    }
    /**
     * Set landinrichtingsrente value
     * @param \Webservices\StructType\Landinrichtingsrente $landinrichtingsrente
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setLandinrichtingsrente(\Webservices\StructType\Landinrichtingsrente $landinrichtingsrente = null)
    {
        $this->landinrichtingsrente = $landinrichtingsrente;
        return $this;
    }
    /**
     * Get indicatie_voorgenomen_splitsing value
     * @return bool|null
     */
    public function getIndicatie_voorgenomen_splitsing()
    {
        return $this->indicatie_voorgenomen_splitsing;
    }
    /**
     * Set indicatie_voorgenomen_splitsing value
     * @param bool $indicatie_voorgenomen_splitsing
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setIndicatie_voorgenomen_splitsing($indicatie_voorgenomen_splitsing = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_voorgenomen_splitsing) && !is_bool($indicatie_voorgenomen_splitsing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_voorgenomen_splitsing)), __LINE__);
        }
        $this->indicatie_voorgenomen_splitsing = $indicatie_voorgenomen_splitsing;
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
     * @return \Webservices\StructType\OnroerendeZaak
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
     * Get niet_volledig_verwerkt_stukken_lijst value
     * @return \Webservices\StructType\StukReferentiesLijst|null
     */
    public function getNiet_volledig_verwerkt_stukken_lijst()
    {
        return $this->niet_volledig_verwerkt_stukken_lijst;
    }
    /**
     * Set niet_volledig_verwerkt_stukken_lijst value
     * @param \Webservices\StructType\StukReferentiesLijst $niet_volledig_verwerkt_stukken_lijst
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setNiet_volledig_verwerkt_stukken_lijst(\Webservices\StructType\StukReferentiesLijst $niet_volledig_verwerkt_stukken_lijst = null)
    {
        $this->niet_volledig_verwerkt_stukken_lijst = $niet_volledig_verwerkt_stukken_lijst;
        return $this;
    }
    /**
     * Get mandeligheid value
     * @return \Webservices\StructType\Mandeligheid|null
     */
    public function getMandeligheid()
    {
        return $this->mandeligheid;
    }
    /**
     * Set mandeligheid value
     * @param \Webservices\StructType\Mandeligheid $mandeligheid
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setMandeligheid(\Webservices\StructType\Mandeligheid $mandeligheid = null)
    {
        $this->mandeligheid = $mandeligheid;
        return $this;
    }
    /**
     * Get aantekeningen_kadastraal_object value
     * @return \Webservices\StructType\AantekeningenKadastraalObject|null
     */
    public function getAantekeningen_kadastraal_object()
    {
        return $this->aantekeningen_kadastraal_object;
    }
    /**
     * Set aantekeningen_kadastraal_object value
     * @param \Webservices\StructType\AantekeningenKadastraalObject $aantekeningen_kadastraal_object
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setAantekeningen_kadastraal_object(\Webservices\StructType\AantekeningenKadastraalObject $aantekeningen_kadastraal_object = null)
    {
        $this->aantekeningen_kadastraal_object = $aantekeningen_kadastraal_object;
        return $this;
    }
    /**
     * Get pr_beperkingen_kadastraal_object value
     * @return \Webservices\StructType\PRBeperkingenKadastraalObject|null
     */
    public function getPr_beperkingen_kadastraal_object()
    {
        return $this->pr_beperkingen_kadastraal_object;
    }
    /**
     * Set pr_beperkingen_kadastraal_object value
     * @param \Webservices\StructType\PRBeperkingenKadastraalObject $pr_beperkingen_kadastraal_object
     * @return \Webservices\StructType\OnroerendeZaak
     */
    public function setPr_beperkingen_kadastraal_object(\Webservices\StructType\PRBeperkingenKadastraalObject $pr_beperkingen_kadastraal_object = null)
    {
        $this->pr_beperkingen_kadastraal_object = $pr_beperkingen_kadastraal_object;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\OnroerendeZaak
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
