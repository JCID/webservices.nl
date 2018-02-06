<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Stukdeel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Stukdeel extends AbstractStructBase
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
     * The aard_beslag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard_beslag;
    /**
     * The bedrag_vorderingsbeslag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BedragType
     */
    public $bedrag_vorderingsbeslag;
    /**
     * The bedrag_zekerheidsstelling_hypotheek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BedragType
     */
    public $bedrag_zekerheidsstelling_hypotheek;
    /**
     * The bedrag_erfpachtscanon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BedragType
     */
    public $bedrag_erfpachtscanon;
    /**
     * The bedrag_transactiesom_levering
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BedragType
     */
    public $bedrag_transactiesom_levering;
    /**
     * The indicatie_bijwerking_opgeschort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_bijwerking_opgeschort;
    /**
     * The omschrijving_gekozen_woonplaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving_gekozen_woonplaats;
    /**
     * The omschrijving_kadastrale_objecten
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving_kadastrale_objecten;
    /**
     * The is_aanvulling_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $is_aanvulling_op;
    /**
     * Constructor method for KadasterV2Stukdeel
     * @uses KadasterV2Stukdeel::setId()
     * @uses KadasterV2Stukdeel::setIdentificatie()
     * @uses KadasterV2Stukdeel::setAard()
     * @uses KadasterV2Stukdeel::setAard_beslag()
     * @uses KadasterV2Stukdeel::setBedrag_vorderingsbeslag()
     * @uses KadasterV2Stukdeel::setBedrag_zekerheidsstelling_hypotheek()
     * @uses KadasterV2Stukdeel::setBedrag_erfpachtscanon()
     * @uses KadasterV2Stukdeel::setBedrag_transactiesom_levering()
     * @uses KadasterV2Stukdeel::setIndicatie_bijwerking_opgeschort()
     * @uses KadasterV2Stukdeel::setOmschrijving_gekozen_woonplaats()
     * @uses KadasterV2Stukdeel::setOmschrijving_kadastrale_objecten()
     * @uses KadasterV2Stukdeel::setIs_aanvulling_op()
     * @param string $id
     * @param string $identificatie
     * @param string $aard
     * @param string $aard_beslag
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_vorderingsbeslag
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_zekerheidsstelling_hypotheek
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_erfpachtscanon
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_transactiesom_levering
     * @param bool $indicatie_bijwerking_opgeschort
     * @param string $omschrijving_gekozen_woonplaats
     * @param string $omschrijving_kadastrale_objecten
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_aanvulling_op
     */
    public function __construct($id = null, $identificatie = null, $aard = null, $aard_beslag = null, \Webservices\StructType\KadasterV2BedragType $bedrag_vorderingsbeslag = null, \Webservices\StructType\KadasterV2BedragType $bedrag_zekerheidsstelling_hypotheek = null, \Webservices\StructType\KadasterV2BedragType $bedrag_erfpachtscanon = null, \Webservices\StructType\KadasterV2BedragType $bedrag_transactiesom_levering = null, $indicatie_bijwerking_opgeschort = null, $omschrijving_gekozen_woonplaats = null, $omschrijving_kadastrale_objecten = null, \Webservices\ArrayType\KadasterV2StukdeelArray $is_aanvulling_op = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAard($aard)
            ->setAard_beslag($aard_beslag)
            ->setBedrag_vorderingsbeslag($bedrag_vorderingsbeslag)
            ->setBedrag_zekerheidsstelling_hypotheek($bedrag_zekerheidsstelling_hypotheek)
            ->setBedrag_erfpachtscanon($bedrag_erfpachtscanon)
            ->setBedrag_transactiesom_levering($bedrag_transactiesom_levering)
            ->setIndicatie_bijwerking_opgeschort($indicatie_bijwerking_opgeschort)
            ->setOmschrijving_gekozen_woonplaats($omschrijving_gekozen_woonplaats)
            ->setOmschrijving_kadastrale_objecten($omschrijving_kadastrale_objecten)
            ->setIs_aanvulling_op($is_aanvulling_op);
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
     * @return \Webservices\StructType\KadasterV2Stukdeel
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
     * @return \Webservices\StructType\KadasterV2Stukdeel
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
     * @return \Webservices\StructType\KadasterV2Stukdeel
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
     * Get aard_beslag value
     * @return string|null
     */
    public function getAard_beslag()
    {
        return $this->aard_beslag;
    }
    /**
     * Set aard_beslag value
     * @param string $aard_beslag
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setAard_beslag($aard_beslag = null)
    {
        // validation for constraint: string
        if (!is_null($aard_beslag) && !is_string($aard_beslag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard_beslag)), __LINE__);
        }
        $this->aard_beslag = $aard_beslag;
        return $this;
    }
    /**
     * Get bedrag_vorderingsbeslag value
     * @return \Webservices\StructType\KadasterV2BedragType|null
     */
    public function getBedrag_vorderingsbeslag()
    {
        return $this->bedrag_vorderingsbeslag;
    }
    /**
     * Set bedrag_vorderingsbeslag value
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_vorderingsbeslag
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setBedrag_vorderingsbeslag(\Webservices\StructType\KadasterV2BedragType $bedrag_vorderingsbeslag = null)
    {
        $this->bedrag_vorderingsbeslag = $bedrag_vorderingsbeslag;
        return $this;
    }
    /**
     * Get bedrag_zekerheidsstelling_hypotheek value
     * @return \Webservices\StructType\KadasterV2BedragType|null
     */
    public function getBedrag_zekerheidsstelling_hypotheek()
    {
        return $this->bedrag_zekerheidsstelling_hypotheek;
    }
    /**
     * Set bedrag_zekerheidsstelling_hypotheek value
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_zekerheidsstelling_hypotheek
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setBedrag_zekerheidsstelling_hypotheek(\Webservices\StructType\KadasterV2BedragType $bedrag_zekerheidsstelling_hypotheek = null)
    {
        $this->bedrag_zekerheidsstelling_hypotheek = $bedrag_zekerheidsstelling_hypotheek;
        return $this;
    }
    /**
     * Get bedrag_erfpachtscanon value
     * @return \Webservices\StructType\KadasterV2BedragType|null
     */
    public function getBedrag_erfpachtscanon()
    {
        return $this->bedrag_erfpachtscanon;
    }
    /**
     * Set bedrag_erfpachtscanon value
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_erfpachtscanon
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setBedrag_erfpachtscanon(\Webservices\StructType\KadasterV2BedragType $bedrag_erfpachtscanon = null)
    {
        $this->bedrag_erfpachtscanon = $bedrag_erfpachtscanon;
        return $this;
    }
    /**
     * Get bedrag_transactiesom_levering value
     * @return \Webservices\StructType\KadasterV2BedragType|null
     */
    public function getBedrag_transactiesom_levering()
    {
        return $this->bedrag_transactiesom_levering;
    }
    /**
     * Set bedrag_transactiesom_levering value
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag_transactiesom_levering
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setBedrag_transactiesom_levering(\Webservices\StructType\KadasterV2BedragType $bedrag_transactiesom_levering = null)
    {
        $this->bedrag_transactiesom_levering = $bedrag_transactiesom_levering;
        return $this;
    }
    /**
     * Get indicatie_bijwerking_opgeschort value
     * @return bool|null
     */
    public function getIndicatie_bijwerking_opgeschort()
    {
        return $this->indicatie_bijwerking_opgeschort;
    }
    /**
     * Set indicatie_bijwerking_opgeschort value
     * @param bool $indicatie_bijwerking_opgeschort
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setIndicatie_bijwerking_opgeschort($indicatie_bijwerking_opgeschort = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_bijwerking_opgeschort) && !is_bool($indicatie_bijwerking_opgeschort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_bijwerking_opgeschort)), __LINE__);
        }
        $this->indicatie_bijwerking_opgeschort = $indicatie_bijwerking_opgeschort;
        return $this;
    }
    /**
     * Get omschrijving_gekozen_woonplaats value
     * @return string|null
     */
    public function getOmschrijving_gekozen_woonplaats()
    {
        return $this->omschrijving_gekozen_woonplaats;
    }
    /**
     * Set omschrijving_gekozen_woonplaats value
     * @param string $omschrijving_gekozen_woonplaats
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setOmschrijving_gekozen_woonplaats($omschrijving_gekozen_woonplaats = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_gekozen_woonplaats) && !is_string($omschrijving_gekozen_woonplaats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_gekozen_woonplaats)), __LINE__);
        }
        $this->omschrijving_gekozen_woonplaats = $omschrijving_gekozen_woonplaats;
        return $this;
    }
    /**
     * Get omschrijving_kadastrale_objecten value
     * @return string|null
     */
    public function getOmschrijving_kadastrale_objecten()
    {
        return $this->omschrijving_kadastrale_objecten;
    }
    /**
     * Set omschrijving_kadastrale_objecten value
     * @param string $omschrijving_kadastrale_objecten
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setOmschrijving_kadastrale_objecten($omschrijving_kadastrale_objecten = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_kadastrale_objecten) && !is_string($omschrijving_kadastrale_objecten)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_kadastrale_objecten)), __LINE__);
        }
        $this->omschrijving_kadastrale_objecten = $omschrijving_kadastrale_objecten;
        return $this;
    }
    /**
     * Get is_aanvulling_op value
     * @return \Webservices\ArrayType\KadasterV2StukdeelArray|null
     */
    public function getIs_aanvulling_op()
    {
        return $this->is_aanvulling_op;
    }
    /**
     * Set is_aanvulling_op value
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_aanvulling_op
     * @return \Webservices\StructType\KadasterV2Stukdeel
     */
    public function setIs_aanvulling_op(\Webservices\ArrayType\KadasterV2StukdeelArray $is_aanvulling_op = null)
    {
        $this->is_aanvulling_op = $is_aanvulling_op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Stukdeel
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
