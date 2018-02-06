<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2TerInschrijvingAangebodenStuk StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2TerInschrijvingAangebodenStuk extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificatie;
    /**
     * The aard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard;
    /**
     * The deel_ennummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2DeelEnNummerType
     */
    public $deel_ennummer;
    /**
     * The bewaardersverklaring
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bewaardersverklaring;
    /**
     * The tijdstip_aanbieding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2TijdstipType
     */
    public $tijdstip_aanbieding;
    /**
     * The tijdstip_ondertekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2TijdstipType
     */
    public $tijdstip_ondertekening;
    /**
     * The status_stuk_or
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status_stuk_or;
    /**
     * The indicatie_verbetering_gewenst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_verbetering_gewenst;
    /**
     * The indicatie_eenzijdig_opzegbaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_eenzijdig_opzegbaar;
    /**
     * The indicatie_alle_objecten_betrokken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_alle_objecten_betrokken;
    /**
     * The heeft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2KadasterVerzoekArray
     */
    public $heeft;
    /**
     * The is_opmaker_van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2IsOpmakerVan
     */
    public $is_opmaker_van;
    /**
     * The is_equivalentieverklaarder_van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan
     */
    public $is_equivalentieverklaarder_van;
    /**
     * The bijlage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2BijlageArray
     */
    public $bijlage;
    /**
     * The omvat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Omvat
     */
    public $omvat;
    /**
     * Constructor method for KadasterV2TerInschrijvingAangebodenStuk
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setId()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setIdentificatie()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setAard()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setDeel_ennummer()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setBewaardersverklaring()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setTijdstip_aanbieding()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setTijdstip_ondertekening()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setStatus_stuk_or()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setIndicatie_verbetering_gewenst()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setIndicatie_eenzijdig_opzegbaar()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setIndicatie_alle_objecten_betrokken()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setHeeft()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setIs_opmaker_van()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setIs_equivalentieverklaarder_van()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setBijlage()
     * @uses KadasterV2TerInschrijvingAangebodenStuk::setOmvat()
     * @param string $id
     * @param string $identificatie
     * @param string $aard
     * @param \Webservices\StructType\KadasterV2DeelEnNummerType $deel_ennummer
     * @param string $bewaardersverklaring
     * @param \Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding
     * @param \Webservices\StructType\KadasterV2TijdstipType $tijdstip_ondertekening
     * @param string $status_stuk_or
     * @param bool $indicatie_verbetering_gewenst
     * @param bool $indicatie_eenzijdig_opzegbaar
     * @param bool $indicatie_alle_objecten_betrokken
     * @param \Webservices\ArrayType\KadasterV2KadasterVerzoekArray $heeft
     * @param \Webservices\StructType\KadasterV2IsOpmakerVan $is_opmaker_van
     * @param \Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan $is_equivalentieverklaarder_van
     * @param \Webservices\ArrayType\KadasterV2BijlageArray $bijlage
     * @param \Webservices\StructType\KadasterV2Omvat $omvat
     */
    public function __construct($id = null, $identificatie = null, $aard = null, \Webservices\StructType\KadasterV2DeelEnNummerType $deel_ennummer = null, $bewaardersverklaring = null, \Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding = null, \Webservices\StructType\KadasterV2TijdstipType $tijdstip_ondertekening = null, $status_stuk_or = null, $indicatie_verbetering_gewenst = null, $indicatie_eenzijdig_opzegbaar = null, $indicatie_alle_objecten_betrokken = null, \Webservices\ArrayType\KadasterV2KadasterVerzoekArray $heeft = null, \Webservices\StructType\KadasterV2IsOpmakerVan $is_opmaker_van = null, \Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan $is_equivalentieverklaarder_van = null, \Webservices\ArrayType\KadasterV2BijlageArray $bijlage = null, \Webservices\StructType\KadasterV2Omvat $omvat = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAard($aard)
            ->setDeel_ennummer($deel_ennummer)
            ->setBewaardersverklaring($bewaardersverklaring)
            ->setTijdstip_aanbieding($tijdstip_aanbieding)
            ->setTijdstip_ondertekening($tijdstip_ondertekening)
            ->setStatus_stuk_or($status_stuk_or)
            ->setIndicatie_verbetering_gewenst($indicatie_verbetering_gewenst)
            ->setIndicatie_eenzijdig_opzegbaar($indicatie_eenzijdig_opzegbaar)
            ->setIndicatie_alle_objecten_betrokken($indicatie_alle_objecten_betrokken)
            ->setHeeft($heeft)
            ->setIs_opmaker_van($is_opmaker_van)
            ->setIs_equivalentieverklaarder_van($is_equivalentieverklaarder_van)
            ->setBijlage($bijlage)
            ->setOmvat($omvat);
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
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
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
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
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
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
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
     * Get deel_ennummer value
     * @return \Webservices\StructType\KadasterV2DeelEnNummerType|null
     */
    public function getDeel_ennummer()
    {
        return $this->deel_ennummer;
    }
    /**
     * Set deel_ennummer value
     * @param \Webservices\StructType\KadasterV2DeelEnNummerType $deel_ennummer
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setDeel_ennummer(\Webservices\StructType\KadasterV2DeelEnNummerType $deel_ennummer = null)
    {
        $this->deel_ennummer = $deel_ennummer;
        return $this;
    }
    /**
     * Get bewaardersverklaring value
     * @return string|null
     */
    public function getBewaardersverklaring()
    {
        return $this->bewaardersverklaring;
    }
    /**
     * Set bewaardersverklaring value
     * @param string $bewaardersverklaring
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setBewaardersverklaring($bewaardersverklaring = null)
    {
        // validation for constraint: string
        if (!is_null($bewaardersverklaring) && !is_string($bewaardersverklaring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bewaardersverklaring)), __LINE__);
        }
        $this->bewaardersverklaring = $bewaardersverklaring;
        return $this;
    }
    /**
     * Get tijdstip_aanbieding value
     * @return \Webservices\StructType\KadasterV2TijdstipType|null
     */
    public function getTijdstip_aanbieding()
    {
        return $this->tijdstip_aanbieding;
    }
    /**
     * Set tijdstip_aanbieding value
     * @param \Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setTijdstip_aanbieding(\Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding = null)
    {
        $this->tijdstip_aanbieding = $tijdstip_aanbieding;
        return $this;
    }
    /**
     * Get tijdstip_ondertekening value
     * @return \Webservices\StructType\KadasterV2TijdstipType|null
     */
    public function getTijdstip_ondertekening()
    {
        return $this->tijdstip_ondertekening;
    }
    /**
     * Set tijdstip_ondertekening value
     * @param \Webservices\StructType\KadasterV2TijdstipType $tijdstip_ondertekening
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setTijdstip_ondertekening(\Webservices\StructType\KadasterV2TijdstipType $tijdstip_ondertekening = null)
    {
        $this->tijdstip_ondertekening = $tijdstip_ondertekening;
        return $this;
    }
    /**
     * Get status_stuk_or value
     * @return string|null
     */
    public function getStatus_stuk_or()
    {
        return $this->status_stuk_or;
    }
    /**
     * Set status_stuk_or value
     * @param string $status_stuk_or
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setStatus_stuk_or($status_stuk_or = null)
    {
        // validation for constraint: string
        if (!is_null($status_stuk_or) && !is_string($status_stuk_or)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status_stuk_or)), __LINE__);
        }
        $this->status_stuk_or = $status_stuk_or;
        return $this;
    }
    /**
     * Get indicatie_verbetering_gewenst value
     * @return bool|null
     */
    public function getIndicatie_verbetering_gewenst()
    {
        return $this->indicatie_verbetering_gewenst;
    }
    /**
     * Set indicatie_verbetering_gewenst value
     * @param bool $indicatie_verbetering_gewenst
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setIndicatie_verbetering_gewenst($indicatie_verbetering_gewenst = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_verbetering_gewenst) && !is_bool($indicatie_verbetering_gewenst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_verbetering_gewenst)), __LINE__);
        }
        $this->indicatie_verbetering_gewenst = $indicatie_verbetering_gewenst;
        return $this;
    }
    /**
     * Get indicatie_eenzijdig_opzegbaar value
     * @return bool|null
     */
    public function getIndicatie_eenzijdig_opzegbaar()
    {
        return $this->indicatie_eenzijdig_opzegbaar;
    }
    /**
     * Set indicatie_eenzijdig_opzegbaar value
     * @param bool $indicatie_eenzijdig_opzegbaar
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setIndicatie_eenzijdig_opzegbaar($indicatie_eenzijdig_opzegbaar = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_eenzijdig_opzegbaar) && !is_bool($indicatie_eenzijdig_opzegbaar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_eenzijdig_opzegbaar)), __LINE__);
        }
        $this->indicatie_eenzijdig_opzegbaar = $indicatie_eenzijdig_opzegbaar;
        return $this;
    }
    /**
     * Get indicatie_alle_objecten_betrokken value
     * @return bool|null
     */
    public function getIndicatie_alle_objecten_betrokken()
    {
        return $this->indicatie_alle_objecten_betrokken;
    }
    /**
     * Set indicatie_alle_objecten_betrokken value
     * @param bool $indicatie_alle_objecten_betrokken
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setIndicatie_alle_objecten_betrokken($indicatie_alle_objecten_betrokken = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_alle_objecten_betrokken) && !is_bool($indicatie_alle_objecten_betrokken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_alle_objecten_betrokken)), __LINE__);
        }
        $this->indicatie_alle_objecten_betrokken = $indicatie_alle_objecten_betrokken;
        return $this;
    }
    /**
     * Get heeft value
     * @return \Webservices\ArrayType\KadasterV2KadasterVerzoekArray|null
     */
    public function getHeeft()
    {
        return $this->heeft;
    }
    /**
     * Set heeft value
     * @param \Webservices\ArrayType\KadasterV2KadasterVerzoekArray $heeft
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setHeeft(\Webservices\ArrayType\KadasterV2KadasterVerzoekArray $heeft = null)
    {
        $this->heeft = $heeft;
        return $this;
    }
    /**
     * Get is_opmaker_van value
     * @return \Webservices\StructType\KadasterV2IsOpmakerVan|null
     */
    public function getIs_opmaker_van()
    {
        return $this->is_opmaker_van;
    }
    /**
     * Set is_opmaker_van value
     * @param \Webservices\StructType\KadasterV2IsOpmakerVan $is_opmaker_van
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setIs_opmaker_van(\Webservices\StructType\KadasterV2IsOpmakerVan $is_opmaker_van = null)
    {
        $this->is_opmaker_van = $is_opmaker_van;
        return $this;
    }
    /**
     * Get is_equivalentieverklaarder_van value
     * @return \Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan|null
     */
    public function getIs_equivalentieverklaarder_van()
    {
        return $this->is_equivalentieverklaarder_van;
    }
    /**
     * Set is_equivalentieverklaarder_van value
     * @param \Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan $is_equivalentieverklaarder_van
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setIs_equivalentieverklaarder_van(\Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan $is_equivalentieverklaarder_van = null)
    {
        $this->is_equivalentieverklaarder_van = $is_equivalentieverklaarder_van;
        return $this;
    }
    /**
     * Get bijlage value
     * @return \Webservices\ArrayType\KadasterV2BijlageArray|null
     */
    public function getBijlage()
    {
        return $this->bijlage;
    }
    /**
     * Set bijlage value
     * @param \Webservices\ArrayType\KadasterV2BijlageArray $bijlage
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setBijlage(\Webservices\ArrayType\KadasterV2BijlageArray $bijlage = null)
    {
        $this->bijlage = $bijlage;
        return $this;
    }
    /**
     * Get omvat value
     * @return \Webservices\StructType\KadasterV2Omvat|null
     */
    public function getOmvat()
    {
        return $this->omvat;
    }
    /**
     * Set omvat value
     * @param \Webservices\StructType\KadasterV2Omvat $omvat
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public function setOmvat(\Webservices\StructType\KadasterV2Omvat $omvat = null)
    {
        $this->omvat = $omvat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
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
