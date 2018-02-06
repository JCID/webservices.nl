<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersoonV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class PersoonV2 extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\NatuurlijkPersoonV2
     */
    public $natuurlijk_persoon;
    /**
     * The niet_natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\NietNatuurlijkPersoon
     */
    public $niet_natuurlijk_persoon;
    /**
     * The aantekening_beschikkingsbevoegdheid
     * @var bool
     */
    public $aantekening_beschikkingsbevoegdheid;
    /**
     * The indicatie_meer_onroerende_zaken
     * @var bool
     */
    public $indicatie_meer_onroerende_zaken;
    /**
     * The woonlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\Locatie
     */
    public $woonlocatie;
    /**
     * The postlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\Locatie
     */
    public $postlocatie;
    /**
     * The niet_volledig_verwerkt_stukken_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\StukReferentiesLijst
     */
    public $niet_volledig_verwerkt_stukken_lijst;
    /**
     * The mogelijk_van_belang_stukken_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\StukReferentiesLijst
     */
    public $mogelijk_van_belang_stukken_lijst;
    /**
     * Constructor method for PersoonV2
     * @uses PersoonV2::setId()
     * @uses PersoonV2::setNatuurlijk_persoon()
     * @uses PersoonV2::setNiet_natuurlijk_persoon()
     * @uses PersoonV2::setAantekening_beschikkingsbevoegdheid()
     * @uses PersoonV2::setIndicatie_meer_onroerende_zaken()
     * @uses PersoonV2::setWoonlocatie()
     * @uses PersoonV2::setPostlocatie()
     * @uses PersoonV2::setNiet_volledig_verwerkt_stukken_lijst()
     * @uses PersoonV2::setMogelijk_van_belang_stukken_lijst()
     * @param string $id
     * @param \Webservices\StructType\NatuurlijkPersoonV2 $natuurlijk_persoon
     * @param \Webservices\StructType\NietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @param bool $aantekening_beschikkingsbevoegdheid
     * @param bool $indicatie_meer_onroerende_zaken
     * @param \Webservices\StructType\Locatie $woonlocatie
     * @param \Webservices\StructType\Locatie $postlocatie
     * @param \Webservices\StructType\StukReferentiesLijst $niet_volledig_verwerkt_stukken_lijst
     * @param \Webservices\StructType\StukReferentiesLijst $mogelijk_van_belang_stukken_lijst
     */
    public function __construct($id = null, \Webservices\StructType\NatuurlijkPersoonV2 $natuurlijk_persoon = null, \Webservices\StructType\NietNatuurlijkPersoon $niet_natuurlijk_persoon = null, $aantekening_beschikkingsbevoegdheid = null, $indicatie_meer_onroerende_zaken = null, \Webservices\StructType\Locatie $woonlocatie = null, \Webservices\StructType\Locatie $postlocatie = null, \Webservices\StructType\StukReferentiesLijst $niet_volledig_verwerkt_stukken_lijst = null, \Webservices\StructType\StukReferentiesLijst $mogelijk_van_belang_stukken_lijst = null)
    {
        $this
            ->setId($id)
            ->setNatuurlijk_persoon($natuurlijk_persoon)
            ->setNiet_natuurlijk_persoon($niet_natuurlijk_persoon)
            ->setAantekening_beschikkingsbevoegdheid($aantekening_beschikkingsbevoegdheid)
            ->setIndicatie_meer_onroerende_zaken($indicatie_meer_onroerende_zaken)
            ->setWoonlocatie($woonlocatie)
            ->setPostlocatie($postlocatie)
            ->setNiet_volledig_verwerkt_stukken_lijst($niet_volledig_verwerkt_stukken_lijst)
            ->setMogelijk_van_belang_stukken_lijst($mogelijk_van_belang_stukken_lijst);
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
     * @return \Webservices\StructType\PersoonV2
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
     * Get natuurlijk_persoon value
     * @return \Webservices\StructType\NatuurlijkPersoonV2|null
     */
    public function getNatuurlijk_persoon()
    {
        return $this->natuurlijk_persoon;
    }
    /**
     * Set natuurlijk_persoon value
     * @param \Webservices\StructType\NatuurlijkPersoonV2 $natuurlijk_persoon
     * @return \Webservices\StructType\PersoonV2
     */
    public function setNatuurlijk_persoon(\Webservices\StructType\NatuurlijkPersoonV2 $natuurlijk_persoon = null)
    {
        $this->natuurlijk_persoon = $natuurlijk_persoon;
        return $this;
    }
    /**
     * Get niet_natuurlijk_persoon value
     * @return \Webservices\StructType\NietNatuurlijkPersoon|null
     */
    public function getNiet_natuurlijk_persoon()
    {
        return $this->niet_natuurlijk_persoon;
    }
    /**
     * Set niet_natuurlijk_persoon value
     * @param \Webservices\StructType\NietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @return \Webservices\StructType\PersoonV2
     */
    public function setNiet_natuurlijk_persoon(\Webservices\StructType\NietNatuurlijkPersoon $niet_natuurlijk_persoon = null)
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
     * @return \Webservices\StructType\PersoonV2
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
     * @return \Webservices\StructType\PersoonV2
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
     * Get woonlocatie value
     * @return \Webservices\StructType\Locatie|null
     */
    public function getWoonlocatie()
    {
        return $this->woonlocatie;
    }
    /**
     * Set woonlocatie value
     * @param \Webservices\StructType\Locatie $woonlocatie
     * @return \Webservices\StructType\PersoonV2
     */
    public function setWoonlocatie(\Webservices\StructType\Locatie $woonlocatie = null)
    {
        $this->woonlocatie = $woonlocatie;
        return $this;
    }
    /**
     * Get postlocatie value
     * @return \Webservices\StructType\Locatie|null
     */
    public function getPostlocatie()
    {
        return $this->postlocatie;
    }
    /**
     * Set postlocatie value
     * @param \Webservices\StructType\Locatie $postlocatie
     * @return \Webservices\StructType\PersoonV2
     */
    public function setPostlocatie(\Webservices\StructType\Locatie $postlocatie = null)
    {
        $this->postlocatie = $postlocatie;
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
     * @return \Webservices\StructType\PersoonV2
     */
    public function setNiet_volledig_verwerkt_stukken_lijst(\Webservices\StructType\StukReferentiesLijst $niet_volledig_verwerkt_stukken_lijst = null)
    {
        $this->niet_volledig_verwerkt_stukken_lijst = $niet_volledig_verwerkt_stukken_lijst;
        return $this;
    }
    /**
     * Get mogelijk_van_belang_stukken_lijst value
     * @return \Webservices\StructType\StukReferentiesLijst|null
     */
    public function getMogelijk_van_belang_stukken_lijst()
    {
        return $this->mogelijk_van_belang_stukken_lijst;
    }
    /**
     * Set mogelijk_van_belang_stukken_lijst value
     * @param \Webservices\StructType\StukReferentiesLijst $mogelijk_van_belang_stukken_lijst
     * @return \Webservices\StructType\PersoonV2
     */
    public function setMogelijk_van_belang_stukken_lijst(\Webservices\StructType\StukReferentiesLijst $mogelijk_van_belang_stukken_lijst = null)
    {
        $this->mogelijk_van_belang_stukken_lijst = $mogelijk_van_belang_stukken_lijst;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\PersoonV2
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
