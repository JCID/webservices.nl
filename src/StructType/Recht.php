<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Recht extends AbstractStructBase
{
    /**
     * The object_id
     * @var string
     */
    public $object_id;
    /**
     * The gerechtigde_id
     * @var string
     */
    public $gerechtigde_id;
    /**
     * The omschrijving_recht
     * @var string
     */
    public $omschrijving_recht;
    /**
     * The aandeel_in_recht
     * @var string
     */
    public $aandeel_in_recht;
    /**
     * The totaal_aandeel_in_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $totaal_aandeel_in_recht;
    /**
     * The einddatum_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $einddatum_recht;
    /**
     * The indicatie_recht_betrokken_in_splitsing
     * @var bool
     */
    public $indicatie_recht_betrokken_in_splitsing;
    /**
     * The ontleend_aan_stukken_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\StukMetKadastraleAanduidingLijst
     */
    public $ontleend_aan_stukken_lijst;
    /**
     * The mogelijk_van_belang_stukken_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\StukReferentiesLijst
     */
    public $mogelijk_van_belang_stukken_lijst;
    /**
     * The aantekeningen_recht_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\AantekeningRechtLijst
     */
    public $aantekeningen_recht_lijst;
    /**
     * Constructor method for Recht
     * @uses Recht::setObject_id()
     * @uses Recht::setGerechtigde_id()
     * @uses Recht::setOmschrijving_recht()
     * @uses Recht::setAandeel_in_recht()
     * @uses Recht::setTotaal_aandeel_in_recht()
     * @uses Recht::setEinddatum_recht()
     * @uses Recht::setIndicatie_recht_betrokken_in_splitsing()
     * @uses Recht::setOntleend_aan_stukken_lijst()
     * @uses Recht::setMogelijk_van_belang_stukken_lijst()
     * @uses Recht::setAantekeningen_recht_lijst()
     * @param string $object_id
     * @param string $gerechtigde_id
     * @param string $omschrijving_recht
     * @param string $aandeel_in_recht
     * @param string $totaal_aandeel_in_recht
     * @param string $einddatum_recht
     * @param bool $indicatie_recht_betrokken_in_splitsing
     * @param \Webservices\StructType\StukMetKadastraleAanduidingLijst $ontleend_aan_stukken_lijst
     * @param \Webservices\StructType\StukReferentiesLijst $mogelijk_van_belang_stukken_lijst
     * @param \Webservices\StructType\AantekeningRechtLijst $aantekeningen_recht_lijst
     */
    public function __construct($object_id = null, $gerechtigde_id = null, $omschrijving_recht = null, $aandeel_in_recht = null, $totaal_aandeel_in_recht = null, $einddatum_recht = null, $indicatie_recht_betrokken_in_splitsing = null, \Webservices\StructType\StukMetKadastraleAanduidingLijst $ontleend_aan_stukken_lijst = null, \Webservices\StructType\StukReferentiesLijst $mogelijk_van_belang_stukken_lijst = null, \Webservices\StructType\AantekeningRechtLijst $aantekeningen_recht_lijst = null)
    {
        $this
            ->setObject_id($object_id)
            ->setGerechtigde_id($gerechtigde_id)
            ->setOmschrijving_recht($omschrijving_recht)
            ->setAandeel_in_recht($aandeel_in_recht)
            ->setTotaal_aandeel_in_recht($totaal_aandeel_in_recht)
            ->setEinddatum_recht($einddatum_recht)
            ->setIndicatie_recht_betrokken_in_splitsing($indicatie_recht_betrokken_in_splitsing)
            ->setOntleend_aan_stukken_lijst($ontleend_aan_stukken_lijst)
            ->setMogelijk_van_belang_stukken_lijst($mogelijk_van_belang_stukken_lijst)
            ->setAantekeningen_recht_lijst($aantekeningen_recht_lijst);
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
     * @return \Webservices\StructType\Recht
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
     * Get gerechtigde_id value
     * @return string|null
     */
    public function getGerechtigde_id()
    {
        return $this->gerechtigde_id;
    }
    /**
     * Set gerechtigde_id value
     * @param string $gerechtigde_id
     * @return \Webservices\StructType\Recht
     */
    public function setGerechtigde_id($gerechtigde_id = null)
    {
        // validation for constraint: string
        if (!is_null($gerechtigde_id) && !is_string($gerechtigde_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gerechtigde_id)), __LINE__);
        }
        $this->gerechtigde_id = $gerechtigde_id;
        return $this;
    }
    /**
     * Get omschrijving_recht value
     * @return string|null
     */
    public function getOmschrijving_recht()
    {
        return $this->omschrijving_recht;
    }
    /**
     * Set omschrijving_recht value
     * @param string $omschrijving_recht
     * @return \Webservices\StructType\Recht
     */
    public function setOmschrijving_recht($omschrijving_recht = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_recht) && !is_string($omschrijving_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_recht)), __LINE__);
        }
        $this->omschrijving_recht = $omschrijving_recht;
        return $this;
    }
    /**
     * Get aandeel_in_recht value
     * @return string|null
     */
    public function getAandeel_in_recht()
    {
        return $this->aandeel_in_recht;
    }
    /**
     * Set aandeel_in_recht value
     * @param string $aandeel_in_recht
     * @return \Webservices\StructType\Recht
     */
    public function setAandeel_in_recht($aandeel_in_recht = null)
    {
        // validation for constraint: string
        if (!is_null($aandeel_in_recht) && !is_string($aandeel_in_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aandeel_in_recht)), __LINE__);
        }
        $this->aandeel_in_recht = $aandeel_in_recht;
        return $this;
    }
    /**
     * Get totaal_aandeel_in_recht value
     * @return string|null
     */
    public function getTotaal_aandeel_in_recht()
    {
        return $this->totaal_aandeel_in_recht;
    }
    /**
     * Set totaal_aandeel_in_recht value
     * @param string $totaal_aandeel_in_recht
     * @return \Webservices\StructType\Recht
     */
    public function setTotaal_aandeel_in_recht($totaal_aandeel_in_recht = null)
    {
        // validation for constraint: string
        if (!is_null($totaal_aandeel_in_recht) && !is_string($totaal_aandeel_in_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totaal_aandeel_in_recht)), __LINE__);
        }
        $this->totaal_aandeel_in_recht = $totaal_aandeel_in_recht;
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
     * @return \Webservices\StructType\Recht
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
     * Get indicatie_recht_betrokken_in_splitsing value
     * @return bool|null
     */
    public function getIndicatie_recht_betrokken_in_splitsing()
    {
        return $this->indicatie_recht_betrokken_in_splitsing;
    }
    /**
     * Set indicatie_recht_betrokken_in_splitsing value
     * @param bool $indicatie_recht_betrokken_in_splitsing
     * @return \Webservices\StructType\Recht
     */
    public function setIndicatie_recht_betrokken_in_splitsing($indicatie_recht_betrokken_in_splitsing = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_recht_betrokken_in_splitsing) && !is_bool($indicatie_recht_betrokken_in_splitsing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_recht_betrokken_in_splitsing)), __LINE__);
        }
        $this->indicatie_recht_betrokken_in_splitsing = $indicatie_recht_betrokken_in_splitsing;
        return $this;
    }
    /**
     * Get ontleend_aan_stukken_lijst value
     * @return \Webservices\StructType\StukMetKadastraleAanduidingLijst|null
     */
    public function getOntleend_aan_stukken_lijst()
    {
        return $this->ontleend_aan_stukken_lijst;
    }
    /**
     * Set ontleend_aan_stukken_lijst value
     * @param \Webservices\StructType\StukMetKadastraleAanduidingLijst $ontleend_aan_stukken_lijst
     * @return \Webservices\StructType\Recht
     */
    public function setOntleend_aan_stukken_lijst(\Webservices\StructType\StukMetKadastraleAanduidingLijst $ontleend_aan_stukken_lijst = null)
    {
        $this->ontleend_aan_stukken_lijst = $ontleend_aan_stukken_lijst;
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
     * @return \Webservices\StructType\Recht
     */
    public function setMogelijk_van_belang_stukken_lijst(\Webservices\StructType\StukReferentiesLijst $mogelijk_van_belang_stukken_lijst = null)
    {
        $this->mogelijk_van_belang_stukken_lijst = $mogelijk_van_belang_stukken_lijst;
        return $this;
    }
    /**
     * Get aantekeningen_recht_lijst value
     * @return \Webservices\StructType\AantekeningRechtLijst|null
     */
    public function getAantekeningen_recht_lijst()
    {
        return $this->aantekeningen_recht_lijst;
    }
    /**
     * Set aantekeningen_recht_lijst value
     * @param \Webservices\StructType\AantekeningRechtLijst $aantekeningen_recht_lijst
     * @return \Webservices\StructType\Recht
     */
    public function setAantekeningen_recht_lijst(\Webservices\StructType\AantekeningRechtLijst $aantekeningen_recht_lijst = null)
    {
        $this->aantekeningen_recht_lijst = $aantekeningen_recht_lijst;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Recht
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
