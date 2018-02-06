<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PRBeperking StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class PRBeperking extends AbstractStructBase
{
    /**
     * The stuk_id
     * @var string
     */
    public $stuk_id;
    /**
     * The betrokkene_id
     * @var string
     */
    public $betrokkene_id;
    /**
     * The gemeente_id
     * @var string
     */
    public $gemeente_id;
    /**
     * The gemeentelijke_registratie_id
     * @var string
     */
    public $gemeentelijke_registratie_id;
    /**
     * The omschrijving_pr_beperking
     * @var string
     */
    public $omschrijving_pr_beperking;
    /**
     * The beschrijving_pr_beperking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $beschrijving_pr_beperking;
    /**
     * The splitsing_pr_beperking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $splitsing_pr_beperking;
    /**
     * Constructor method for PRBeperking
     * @uses PRBeperking::setStuk_id()
     * @uses PRBeperking::setBetrokkene_id()
     * @uses PRBeperking::setGemeente_id()
     * @uses PRBeperking::setGemeentelijke_registratie_id()
     * @uses PRBeperking::setOmschrijving_pr_beperking()
     * @uses PRBeperking::setBeschrijving_pr_beperking()
     * @uses PRBeperking::setSplitsing_pr_beperking()
     * @param string $stuk_id
     * @param string $betrokkene_id
     * @param string $gemeente_id
     * @param string $gemeentelijke_registratie_id
     * @param string $omschrijving_pr_beperking
     * @param string $beschrijving_pr_beperking
     * @param string $splitsing_pr_beperking
     */
    public function __construct($stuk_id = null, $betrokkene_id = null, $gemeente_id = null, $gemeentelijke_registratie_id = null, $omschrijving_pr_beperking = null, $beschrijving_pr_beperking = null, $splitsing_pr_beperking = null)
    {
        $this
            ->setStuk_id($stuk_id)
            ->setBetrokkene_id($betrokkene_id)
            ->setGemeente_id($gemeente_id)
            ->setGemeentelijke_registratie_id($gemeentelijke_registratie_id)
            ->setOmschrijving_pr_beperking($omschrijving_pr_beperking)
            ->setBeschrijving_pr_beperking($beschrijving_pr_beperking)
            ->setSplitsing_pr_beperking($splitsing_pr_beperking);
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
     * @return \Webservices\StructType\PRBeperking
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
     * @return \Webservices\StructType\PRBeperking
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
     * Get gemeente_id value
     * @return string|null
     */
    public function getGemeente_id()
    {
        return $this->gemeente_id;
    }
    /**
     * Set gemeente_id value
     * @param string $gemeente_id
     * @return \Webservices\StructType\PRBeperking
     */
    public function setGemeente_id($gemeente_id = null)
    {
        // validation for constraint: string
        if (!is_null($gemeente_id) && !is_string($gemeente_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gemeente_id)), __LINE__);
        }
        $this->gemeente_id = $gemeente_id;
        return $this;
    }
    /**
     * Get gemeentelijke_registratie_id value
     * @return string|null
     */
    public function getGemeentelijke_registratie_id()
    {
        return $this->gemeentelijke_registratie_id;
    }
    /**
     * Set gemeentelijke_registratie_id value
     * @param string $gemeentelijke_registratie_id
     * @return \Webservices\StructType\PRBeperking
     */
    public function setGemeentelijke_registratie_id($gemeentelijke_registratie_id = null)
    {
        // validation for constraint: string
        if (!is_null($gemeentelijke_registratie_id) && !is_string($gemeentelijke_registratie_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gemeentelijke_registratie_id)), __LINE__);
        }
        $this->gemeentelijke_registratie_id = $gemeentelijke_registratie_id;
        return $this;
    }
    /**
     * Get omschrijving_pr_beperking value
     * @return string|null
     */
    public function getOmschrijving_pr_beperking()
    {
        return $this->omschrijving_pr_beperking;
    }
    /**
     * Set omschrijving_pr_beperking value
     * @param string $omschrijving_pr_beperking
     * @return \Webservices\StructType\PRBeperking
     */
    public function setOmschrijving_pr_beperking($omschrijving_pr_beperking = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_pr_beperking) && !is_string($omschrijving_pr_beperking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_pr_beperking)), __LINE__);
        }
        $this->omschrijving_pr_beperking = $omschrijving_pr_beperking;
        return $this;
    }
    /**
     * Get beschrijving_pr_beperking value
     * @return string|null
     */
    public function getBeschrijving_pr_beperking()
    {
        return $this->beschrijving_pr_beperking;
    }
    /**
     * Set beschrijving_pr_beperking value
     * @param string $beschrijving_pr_beperking
     * @return \Webservices\StructType\PRBeperking
     */
    public function setBeschrijving_pr_beperking($beschrijving_pr_beperking = null)
    {
        // validation for constraint: string
        if (!is_null($beschrijving_pr_beperking) && !is_string($beschrijving_pr_beperking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($beschrijving_pr_beperking)), __LINE__);
        }
        $this->beschrijving_pr_beperking = $beschrijving_pr_beperking;
        return $this;
    }
    /**
     * Get splitsing_pr_beperking value
     * @return string|null
     */
    public function getSplitsing_pr_beperking()
    {
        return $this->splitsing_pr_beperking;
    }
    /**
     * Set splitsing_pr_beperking value
     * @param string $splitsing_pr_beperking
     * @return \Webservices\StructType\PRBeperking
     */
    public function setSplitsing_pr_beperking($splitsing_pr_beperking = null)
    {
        // validation for constraint: string
        if (!is_null($splitsing_pr_beperking) && !is_string($splitsing_pr_beperking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($splitsing_pr_beperking)), __LINE__);
        }
        $this->splitsing_pr_beperking = $splitsing_pr_beperking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\PRBeperking
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
