<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Koopsom StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Koopsom extends AbstractStructBase
{
    /**
     * The koopdatum
     * @var string
     */
    public $koopdatum;
    /**
     * The huisnummer
     * @var int
     */
    public $huisnummer;
    /**
     * The huisnummer_toevoeging
     * @var string
     */
    public $huisnummer_toevoeging;
    /**
     * The bedrag
     * @var int
     */
    public $bedrag;
    /**
     * The oppervlakte
     * @var int
     */
    public $oppervlakte;
    /**
     * The omschrijving
     * @var string
     */
    public $omschrijving;
    /**
     * The meer_onroerende_goederen
     * @var bool
     */
    public $meer_onroerende_goederen;
    /**
     * Constructor method for Koopsom
     * @uses Koopsom::setKoopdatum()
     * @uses Koopsom::setHuisnummer()
     * @uses Koopsom::setHuisnummer_toevoeging()
     * @uses Koopsom::setBedrag()
     * @uses Koopsom::setOppervlakte()
     * @uses Koopsom::setOmschrijving()
     * @uses Koopsom::setMeer_onroerende_goederen()
     * @param string $koopdatum
     * @param int $huisnummer
     * @param string $huisnummer_toevoeging
     * @param int $bedrag
     * @param int $oppervlakte
     * @param string $omschrijving
     * @param bool $meer_onroerende_goederen
     */
    public function __construct($koopdatum = null, $huisnummer = null, $huisnummer_toevoeging = null, $bedrag = null, $oppervlakte = null, $omschrijving = null, $meer_onroerende_goederen = null)
    {
        $this
            ->setKoopdatum($koopdatum)
            ->setHuisnummer($huisnummer)
            ->setHuisnummer_toevoeging($huisnummer_toevoeging)
            ->setBedrag($bedrag)
            ->setOppervlakte($oppervlakte)
            ->setOmschrijving($omschrijving)
            ->setMeer_onroerende_goederen($meer_onroerende_goederen);
    }
    /**
     * Get koopdatum value
     * @return string|null
     */
    public function getKoopdatum()
    {
        return $this->koopdatum;
    }
    /**
     * Set koopdatum value
     * @param string $koopdatum
     * @return \Webservices\StructType\Koopsom
     */
    public function setKoopdatum($koopdatum = null)
    {
        // validation for constraint: string
        if (!is_null($koopdatum) && !is_string($koopdatum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koopdatum)), __LINE__);
        }
        $this->koopdatum = $koopdatum;
        return $this;
    }
    /**
     * Get huisnummer value
     * @return int|null
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }
    /**
     * Set huisnummer value
     * @param int $huisnummer
     * @return \Webservices\StructType\Koopsom
     */
    public function setHuisnummer($huisnummer = null)
    {
        // validation for constraint: int
        if (!is_null($huisnummer) && !is_numeric($huisnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnummer)), __LINE__);
        }
        $this->huisnummer = $huisnummer;
        return $this;
    }
    /**
     * Get huisnummer_toevoeging value
     * @return string|null
     */
    public function getHuisnummer_toevoeging()
    {
        return $this->huisnummer_toevoeging;
    }
    /**
     * Set huisnummer_toevoeging value
     * @param string $huisnummer_toevoeging
     * @return \Webservices\StructType\Koopsom
     */
    public function setHuisnummer_toevoeging($huisnummer_toevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnummer_toevoeging) && !is_string($huisnummer_toevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnummer_toevoeging)), __LINE__);
        }
        $this->huisnummer_toevoeging = $huisnummer_toevoeging;
        return $this;
    }
    /**
     * Get bedrag value
     * @return int|null
     */
    public function getBedrag()
    {
        return $this->bedrag;
    }
    /**
     * Set bedrag value
     * @param int $bedrag
     * @return \Webservices\StructType\Koopsom
     */
    public function setBedrag($bedrag = null)
    {
        // validation for constraint: int
        if (!is_null($bedrag) && !is_numeric($bedrag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bedrag)), __LINE__);
        }
        $this->bedrag = $bedrag;
        return $this;
    }
    /**
     * Get oppervlakte value
     * @return int|null
     */
    public function getOppervlakte()
    {
        return $this->oppervlakte;
    }
    /**
     * Set oppervlakte value
     * @param int $oppervlakte
     * @return \Webservices\StructType\Koopsom
     */
    public function setOppervlakte($oppervlakte = null)
    {
        // validation for constraint: int
        if (!is_null($oppervlakte) && !is_numeric($oppervlakte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($oppervlakte)), __LINE__);
        }
        $this->oppervlakte = $oppervlakte;
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
     * @return \Webservices\StructType\Koopsom
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
     * Get meer_onroerende_goederen value
     * @return bool|null
     */
    public function getMeer_onroerende_goederen()
    {
        return $this->meer_onroerende_goederen;
    }
    /**
     * Set meer_onroerende_goederen value
     * @param bool $meer_onroerende_goederen
     * @return \Webservices\StructType\Koopsom
     */
    public function setMeer_onroerende_goederen($meer_onroerende_goederen = null)
    {
        // validation for constraint: boolean
        if (!is_null($meer_onroerende_goederen) && !is_bool($meer_onroerende_goederen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($meer_onroerende_goederen)), __LINE__);
        }
        $this->meer_onroerende_goederen = $meer_onroerende_goederen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Koopsom
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
