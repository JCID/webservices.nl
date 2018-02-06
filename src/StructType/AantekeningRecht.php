<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AantekeningRecht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AantekeningRecht extends AbstractStructBase
{
    /**
     * The stuk_id
     * @var string
     */
    public $stuk_id;
    /**
     * The betrokkene_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $betrokkene_id;
    /**
     * The omschrijving_aantekening
     * @var string
     */
    public $omschrijving_aantekening;
    /**
     * The beschrijving_aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $beschrijving_aantekening;
    /**
     * The einddatum_aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $einddatum_aantekening;
    /**
     * Constructor method for AantekeningRecht
     * @uses AantekeningRecht::setStuk_id()
     * @uses AantekeningRecht::setBetrokkene_id()
     * @uses AantekeningRecht::setOmschrijving_aantekening()
     * @uses AantekeningRecht::setBeschrijving_aantekening()
     * @uses AantekeningRecht::setEinddatum_aantekening()
     * @param string $stuk_id
     * @param string $betrokkene_id
     * @param string $omschrijving_aantekening
     * @param string $beschrijving_aantekening
     * @param string $einddatum_aantekening
     */
    public function __construct($stuk_id = null, $betrokkene_id = null, $omschrijving_aantekening = null, $beschrijving_aantekening = null, $einddatum_aantekening = null)
    {
        $this
            ->setStuk_id($stuk_id)
            ->setBetrokkene_id($betrokkene_id)
            ->setOmschrijving_aantekening($omschrijving_aantekening)
            ->setBeschrijving_aantekening($beschrijving_aantekening)
            ->setEinddatum_aantekening($einddatum_aantekening);
    }
    /**
     * Get stuk_id value
     * @return string|null
     */
    public function getStuk_id()
    {
        return $this->stuk_id;
    }
    /**
     * Set stuk_id value
     * @param string $stuk_id
     * @return \Webservices\StructType\AantekeningRecht
     */
    public function setStuk_id($stuk_id = null)
    {
        // validation for constraint: string
        if (!is_null($stuk_id) && !is_string($stuk_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stuk_id)), __LINE__);
        }
        $this->stuk_id = $stuk_id;
        return $this;
    }
    /**
     * Get betrokkene_id value
     * @return string|null
     */
    public function getBetrokkene_id()
    {
        return $this->betrokkene_id;
    }
    /**
     * Set betrokkene_id value
     * @param string $betrokkene_id
     * @return \Webservices\StructType\AantekeningRecht
     */
    public function setBetrokkene_id($betrokkene_id = null)
    {
        // validation for constraint: string
        if (!is_null($betrokkene_id) && !is_string($betrokkene_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($betrokkene_id)), __LINE__);
        }
        $this->betrokkene_id = $betrokkene_id;
        return $this;
    }
    /**
     * Get omschrijving_aantekening value
     * @return string|null
     */
    public function getOmschrijving_aantekening()
    {
        return $this->omschrijving_aantekening;
    }
    /**
     * Set omschrijving_aantekening value
     * @param string $omschrijving_aantekening
     * @return \Webservices\StructType\AantekeningRecht
     */
    public function setOmschrijving_aantekening($omschrijving_aantekening = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_aantekening) && !is_string($omschrijving_aantekening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_aantekening)), __LINE__);
        }
        $this->omschrijving_aantekening = $omschrijving_aantekening;
        return $this;
    }
    /**
     * Get beschrijving_aantekening value
     * @return string|null
     */
    public function getBeschrijving_aantekening()
    {
        return $this->beschrijving_aantekening;
    }
    /**
     * Set beschrijving_aantekening value
     * @param string $beschrijving_aantekening
     * @return \Webservices\StructType\AantekeningRecht
     */
    public function setBeschrijving_aantekening($beschrijving_aantekening = null)
    {
        // validation for constraint: string
        if (!is_null($beschrijving_aantekening) && !is_string($beschrijving_aantekening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($beschrijving_aantekening)), __LINE__);
        }
        $this->beschrijving_aantekening = $beschrijving_aantekening;
        return $this;
    }
    /**
     * Get einddatum_aantekening value
     * @return string|null
     */
    public function getEinddatum_aantekening()
    {
        return $this->einddatum_aantekening;
    }
    /**
     * Set einddatum_aantekening value
     * @param string $einddatum_aantekening
     * @return \Webservices\StructType\AantekeningRecht
     */
    public function setEinddatum_aantekening($einddatum_aantekening = null)
    {
        // validation for constraint: string
        if (!is_null($einddatum_aantekening) && !is_string($einddatum_aantekening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($einddatum_aantekening)), __LINE__);
        }
        $this->einddatum_aantekening = $einddatum_aantekening;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AantekeningRecht
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
