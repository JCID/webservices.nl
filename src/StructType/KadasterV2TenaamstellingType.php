<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2TenaamstellingType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2TenaamstellingType extends AbstractStructBase
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
     * The aandeel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BreukType
     */
    public $aandeel;
    /**
     * The burgerlijke_staat_ten_tijde_van_verkrijging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $burgerlijke_staat_ten_tijde_van_verkrijging;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The verklaring_inzake_derden_bescherming
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $verklaring_inzake_derden_bescherming;
    /**
     * The verkregen_namens_samenwerkingsverband
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $verkregen_namens_samenwerkingsverband;
    /**
     * The betrokken_partner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2PersoonTypeKeuzeType
     */
    public $betrokken_partner;
    /**
     * The betrokken_samenwerkingsverband
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2PersoonTypeKeuzeType
     */
    public $betrokken_samenwerkingsverband;
    /**
     * The van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2StukVan
     */
    public $van;
    /**
     * The geldt_voor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GeldtVoor
     */
    public $geldt_voor;
    /**
     * The is_gebaseerd_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2IsGebaseerdOp
     */
    public $is_gebaseerd_op;
    /**
     * The is_vermeld_in
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $is_vermeld_in;
    /**
     * The ten_name_van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2PersoonTypeKeuzeType
     */
    public $ten_name_van;
    /**
     * Constructor method for KadasterV2TenaamstellingType
     * @uses KadasterV2TenaamstellingType::setId()
     * @uses KadasterV2TenaamstellingType::setIdentificatie()
     * @uses KadasterV2TenaamstellingType::setAandeel()
     * @uses KadasterV2TenaamstellingType::setBurgerlijke_staat_ten_tijde_van_verkrijging()
     * @uses KadasterV2TenaamstellingType::setOmschrijving()
     * @uses KadasterV2TenaamstellingType::setVerklaring_inzake_derden_bescherming()
     * @uses KadasterV2TenaamstellingType::setVerkregen_namens_samenwerkingsverband()
     * @uses KadasterV2TenaamstellingType::setBetrokken_partner()
     * @uses KadasterV2TenaamstellingType::setBetrokken_samenwerkingsverband()
     * @uses KadasterV2TenaamstellingType::setVan()
     * @uses KadasterV2TenaamstellingType::setGeldt_voor()
     * @uses KadasterV2TenaamstellingType::setIs_gebaseerd_op()
     * @uses KadasterV2TenaamstellingType::setIs_vermeld_in()
     * @uses KadasterV2TenaamstellingType::setTen_name_van()
     * @param string $id
     * @param string $identificatie
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel
     * @param string $burgerlijke_staat_ten_tijde_van_verkrijging
     * @param string $omschrijving
     * @param string $verklaring_inzake_derden_bescherming
     * @param string $verkregen_namens_samenwerkingsverband
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_partner
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_samenwerkingsverband
     * @param \Webservices\StructType\KadasterV2StukVan $van
     * @param \Webservices\StructType\KadasterV2GeldtVoor $geldt_voor
     * @param \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van
     */
    public function __construct($id = null, $identificatie = null, \Webservices\StructType\KadasterV2BreukType $aandeel = null, $burgerlijke_staat_ten_tijde_van_verkrijging = null, $omschrijving = null, $verklaring_inzake_derden_bescherming = null, $verkregen_namens_samenwerkingsverband = null, \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_partner = null, \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_samenwerkingsverband = null, \Webservices\StructType\KadasterV2StukVan $van = null, \Webservices\StructType\KadasterV2GeldtVoor $geldt_voor = null, \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op = null, \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null, \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAandeel($aandeel)
            ->setBurgerlijke_staat_ten_tijde_van_verkrijging($burgerlijke_staat_ten_tijde_van_verkrijging)
            ->setOmschrijving($omschrijving)
            ->setVerklaring_inzake_derden_bescherming($verklaring_inzake_derden_bescherming)
            ->setVerkregen_namens_samenwerkingsverband($verkregen_namens_samenwerkingsverband)
            ->setBetrokken_partner($betrokken_partner)
            ->setBetrokken_samenwerkingsverband($betrokken_samenwerkingsverband)
            ->setVan($van)
            ->setGeldt_voor($geldt_voor)
            ->setIs_gebaseerd_op($is_gebaseerd_op)
            ->setIs_vermeld_in($is_vermeld_in)
            ->setTen_name_van($ten_name_van);
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
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
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
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
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
     * Get aandeel value
     * @return \Webservices\StructType\KadasterV2BreukType|null
     */
    public function getAandeel()
    {
        return $this->aandeel;
    }
    /**
     * Set aandeel value
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setAandeel(\Webservices\StructType\KadasterV2BreukType $aandeel = null)
    {
        $this->aandeel = $aandeel;
        return $this;
    }
    /**
     * Get burgerlijke_staat_ten_tijde_van_verkrijging value
     * @return string|null
     */
    public function getBurgerlijke_staat_ten_tijde_van_verkrijging()
    {
        return $this->burgerlijke_staat_ten_tijde_van_verkrijging;
    }
    /**
     * Set burgerlijke_staat_ten_tijde_van_verkrijging value
     * @param string $burgerlijke_staat_ten_tijde_van_verkrijging
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setBurgerlijke_staat_ten_tijde_van_verkrijging($burgerlijke_staat_ten_tijde_van_verkrijging = null)
    {
        // validation for constraint: string
        if (!is_null($burgerlijke_staat_ten_tijde_van_verkrijging) && !is_string($burgerlijke_staat_ten_tijde_van_verkrijging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($burgerlijke_staat_ten_tijde_van_verkrijging)), __LINE__);
        }
        $this->burgerlijke_staat_ten_tijde_van_verkrijging = $burgerlijke_staat_ten_tijde_van_verkrijging;
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
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
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
     * Get verklaring_inzake_derden_bescherming value
     * @return string|null
     */
    public function getVerklaring_inzake_derden_bescherming()
    {
        return $this->verklaring_inzake_derden_bescherming;
    }
    /**
     * Set verklaring_inzake_derden_bescherming value
     * @param string $verklaring_inzake_derden_bescherming
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setVerklaring_inzake_derden_bescherming($verklaring_inzake_derden_bescherming = null)
    {
        // validation for constraint: string
        if (!is_null($verklaring_inzake_derden_bescherming) && !is_string($verklaring_inzake_derden_bescherming)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verklaring_inzake_derden_bescherming)), __LINE__);
        }
        $this->verklaring_inzake_derden_bescherming = $verklaring_inzake_derden_bescherming;
        return $this;
    }
    /**
     * Get verkregen_namens_samenwerkingsverband value
     * @return string|null
     */
    public function getVerkregen_namens_samenwerkingsverband()
    {
        return $this->verkregen_namens_samenwerkingsverband;
    }
    /**
     * Set verkregen_namens_samenwerkingsverband value
     * @param string $verkregen_namens_samenwerkingsverband
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setVerkregen_namens_samenwerkingsverband($verkregen_namens_samenwerkingsverband = null)
    {
        // validation for constraint: string
        if (!is_null($verkregen_namens_samenwerkingsverband) && !is_string($verkregen_namens_samenwerkingsverband)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verkregen_namens_samenwerkingsverband)), __LINE__);
        }
        $this->verkregen_namens_samenwerkingsverband = $verkregen_namens_samenwerkingsverband;
        return $this;
    }
    /**
     * Get betrokken_partner value
     * @return \Webservices\StructType\KadasterV2PersoonTypeKeuzeType|null
     */
    public function getBetrokken_partner()
    {
        return $this->betrokken_partner;
    }
    /**
     * Set betrokken_partner value
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_partner
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setBetrokken_partner(\Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_partner = null)
    {
        $this->betrokken_partner = $betrokken_partner;
        return $this;
    }
    /**
     * Get betrokken_samenwerkingsverband value
     * @return \Webservices\StructType\KadasterV2PersoonTypeKeuzeType|null
     */
    public function getBetrokken_samenwerkingsverband()
    {
        return $this->betrokken_samenwerkingsverband;
    }
    /**
     * Set betrokken_samenwerkingsverband value
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_samenwerkingsverband
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setBetrokken_samenwerkingsverband(\Webservices\StructType\KadasterV2PersoonTypeKeuzeType $betrokken_samenwerkingsverband = null)
    {
        $this->betrokken_samenwerkingsverband = $betrokken_samenwerkingsverband;
        return $this;
    }
    /**
     * Get van value
     * @return \Webservices\StructType\KadasterV2StukVan|null
     */
    public function getVan()
    {
        return $this->van;
    }
    /**
     * Set van value
     * @param \Webservices\StructType\KadasterV2StukVan $van
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setVan(\Webservices\StructType\KadasterV2StukVan $van = null)
    {
        $this->van = $van;
        return $this;
    }
    /**
     * Get geldt_voor value
     * @return \Webservices\StructType\KadasterV2GeldtVoor|null
     */
    public function getGeldt_voor()
    {
        return $this->geldt_voor;
    }
    /**
     * Set geldt_voor value
     * @param \Webservices\StructType\KadasterV2GeldtVoor $geldt_voor
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setGeldt_voor(\Webservices\StructType\KadasterV2GeldtVoor $geldt_voor = null)
    {
        $this->geldt_voor = $geldt_voor;
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
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setIs_gebaseerd_op(\Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op = null)
    {
        $this->is_gebaseerd_op = $is_gebaseerd_op;
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
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setIs_vermeld_in(\Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null)
    {
        $this->is_vermeld_in = $is_vermeld_in;
        return $this;
    }
    /**
     * Get ten_name_van value
     * @return \Webservices\StructType\KadasterV2PersoonTypeKeuzeType|null
     */
    public function getTen_name_van()
    {
        return $this->ten_name_van;
    }
    /**
     * Set ten_name_van value
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
     */
    public function setTen_name_van(\Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van = null)
    {
        $this->ten_name_van = $ten_name_van;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2TenaamstellingType
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
