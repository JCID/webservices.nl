<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Aantekening StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Aantekening extends AbstractStructBase
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
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The einddatum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $einddatum;
    /**
     * The herverkaveling_bloknummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $herverkaveling_bloknummer;
    /**
     * The einddatum_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $einddatum_recht;
    /**
     * The aantekening_kadastraal_object
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2OverzichtBetreft
     */
    public $aantekening_kadastraal_object;
    /**
     * The aantekening_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2TenaamstellingArray
     */
    public $aantekening_recht;
    /**
     * The is_vermeld_in
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $is_vermeld_in;
    /**
     * The is_gebaseerd_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2IsGebaseerdOp
     */
    public $is_gebaseerd_op;
    /**
     * The betrokken_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2PersoonTypeKeuzeTypeArray
     */
    public $betrokken_persoon;
    /**
     * Constructor method for KadasterV2Aantekening
     * @uses KadasterV2Aantekening::setId()
     * @uses KadasterV2Aantekening::setIdentificatie()
     * @uses KadasterV2Aantekening::setAard()
     * @uses KadasterV2Aantekening::setOmschrijving()
     * @uses KadasterV2Aantekening::setEinddatum()
     * @uses KadasterV2Aantekening::setHerverkaveling_bloknummer()
     * @uses KadasterV2Aantekening::setEinddatum_recht()
     * @uses KadasterV2Aantekening::setAantekening_kadastraal_object()
     * @uses KadasterV2Aantekening::setAantekening_recht()
     * @uses KadasterV2Aantekening::setIs_vermeld_in()
     * @uses KadasterV2Aantekening::setIs_gebaseerd_op()
     * @uses KadasterV2Aantekening::setBetrokken_persoon()
     * @param string $id
     * @param string $identificatie
     * @param string $aard
     * @param string $omschrijving
     * @param string $einddatum
     * @param int $herverkaveling_bloknummer
     * @param string $einddatum_recht
     * @param \Webservices\StructType\KadasterV2OverzichtBetreft $aantekening_kadastraal_object
     * @param \Webservices\ArrayType\KadasterV2TenaamstellingArray $aantekening_recht
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in
     * @param \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op
     * @param \Webservices\ArrayType\KadasterV2PersoonTypeKeuzeTypeArray $betrokken_persoon
     */
    public function __construct($id = null, $identificatie = null, $aard = null, $omschrijving = null, $einddatum = null, $herverkaveling_bloknummer = null, $einddatum_recht = null, \Webservices\StructType\KadasterV2OverzichtBetreft $aantekening_kadastraal_object = null, \Webservices\ArrayType\KadasterV2TenaamstellingArray $aantekening_recht = null, \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null, \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op = null, \Webservices\ArrayType\KadasterV2PersoonTypeKeuzeTypeArray $betrokken_persoon = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAard($aard)
            ->setOmschrijving($omschrijving)
            ->setEinddatum($einddatum)
            ->setHerverkaveling_bloknummer($herverkaveling_bloknummer)
            ->setEinddatum_recht($einddatum_recht)
            ->setAantekening_kadastraal_object($aantekening_kadastraal_object)
            ->setAantekening_recht($aantekening_recht)
            ->setIs_vermeld_in($is_vermeld_in)
            ->setIs_gebaseerd_op($is_gebaseerd_op)
            ->setBetrokken_persoon($betrokken_persoon);
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
     * @return \Webservices\StructType\KadasterV2Aantekening
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
     * @return \Webservices\StructType\KadasterV2Aantekening
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
     * @return \Webservices\StructType\KadasterV2Aantekening
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
     * @return \Webservices\StructType\KadasterV2Aantekening
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
     * Get einddatum value
     * @return string|null
     */
    public function getEinddatum()
    {
        return $this->einddatum;
    }
    /**
     * Set einddatum value
     * @param string $einddatum
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setEinddatum($einddatum = null)
    {
        // validation for constraint: string
        if (!is_null($einddatum) && !is_string($einddatum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($einddatum)), __LINE__);
        }
        $this->einddatum = $einddatum;
        return $this;
    }
    /**
     * Get herverkaveling_bloknummer value
     * @return int|null
     */
    public function getHerverkaveling_bloknummer()
    {
        return $this->herverkaveling_bloknummer;
    }
    /**
     * Set herverkaveling_bloknummer value
     * @param int $herverkaveling_bloknummer
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setHerverkaveling_bloknummer($herverkaveling_bloknummer = null)
    {
        // validation for constraint: int
        if (!is_null($herverkaveling_bloknummer) && !is_numeric($herverkaveling_bloknummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($herverkaveling_bloknummer)), __LINE__);
        }
        $this->herverkaveling_bloknummer = $herverkaveling_bloknummer;
        return $this;
    }
    /**
     * Get einddatum_recht value
     * @return string|null
     */
    public function getEinddatum_recht()
    {
        return $this->einddatum_recht;
    }
    /**
     * Set einddatum_recht value
     * @param string $einddatum_recht
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setEinddatum_recht($einddatum_recht = null)
    {
        // validation for constraint: string
        if (!is_null($einddatum_recht) && !is_string($einddatum_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($einddatum_recht)), __LINE__);
        }
        $this->einddatum_recht = $einddatum_recht;
        return $this;
    }
    /**
     * Get aantekening_kadastraal_object value
     * @return \Webservices\StructType\KadasterV2OverzichtBetreft|null
     */
    public function getAantekening_kadastraal_object()
    {
        return $this->aantekening_kadastraal_object;
    }
    /**
     * Set aantekening_kadastraal_object value
     * @param \Webservices\StructType\KadasterV2OverzichtBetreft $aantekening_kadastraal_object
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setAantekening_kadastraal_object(\Webservices\StructType\KadasterV2OverzichtBetreft $aantekening_kadastraal_object = null)
    {
        $this->aantekening_kadastraal_object = $aantekening_kadastraal_object;
        return $this;
    }
    /**
     * Get aantekening_recht value
     * @return \Webservices\ArrayType\KadasterV2TenaamstellingArray|null
     */
    public function getAantekening_recht()
    {
        return $this->aantekening_recht;
    }
    /**
     * Set aantekening_recht value
     * @param \Webservices\ArrayType\KadasterV2TenaamstellingArray $aantekening_recht
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setAantekening_recht(\Webservices\ArrayType\KadasterV2TenaamstellingArray $aantekening_recht = null)
    {
        $this->aantekening_recht = $aantekening_recht;
        return $this;
    }
    /**
     * Get is_vermeld_in value
     * @return \Webservices\ArrayType\KadasterV2StukdeelArray|null
     */
    public function getIs_vermeld_in()
    {
        return $this->is_vermeld_in;
    }
    /**
     * Set is_vermeld_in value
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setIs_vermeld_in(\Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null)
    {
        $this->is_vermeld_in = $is_vermeld_in;
        return $this;
    }
    /**
     * Get is_gebaseerd_op value
     * @return \Webservices\StructType\KadasterV2IsGebaseerdOp|null
     */
    public function getIs_gebaseerd_op()
    {
        return $this->is_gebaseerd_op;
    }
    /**
     * Set is_gebaseerd_op value
     * @param \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setIs_gebaseerd_op(\Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op = null)
    {
        $this->is_gebaseerd_op = $is_gebaseerd_op;
        return $this;
    }
    /**
     * Get betrokken_persoon value
     * @return \Webservices\ArrayType\KadasterV2PersoonTypeKeuzeTypeArray|null
     */
    public function getBetrokken_persoon()
    {
        return $this->betrokken_persoon;
    }
    /**
     * Set betrokken_persoon value
     * @param \Webservices\ArrayType\KadasterV2PersoonTypeKeuzeTypeArray $betrokken_persoon
     * @return \Webservices\StructType\KadasterV2Aantekening
     */
    public function setBetrokken_persoon(\Webservices\ArrayType\KadasterV2PersoonTypeKeuzeTypeArray $betrokken_persoon = null)
    {
        $this->betrokken_persoon = $betrokken_persoon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Aantekening
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
