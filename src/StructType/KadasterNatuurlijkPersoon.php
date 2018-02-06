<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterNatuurlijkPersoon extends AbstractStructBase
{
    /**
     * The bsn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bsn;
    /**
     * The geslachtsnaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geslachtsnaam;
    /**
     * The voorvoegsel_geslachtsnaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voorvoegsel_geslachtsnaam;
    /**
     * The voornamen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voornamen;
    /**
     * The geslacht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geslacht;
    /**
     * The geboorteplaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geboorteplaats;
    /**
     * The geboortedatum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geboortedatum;
    /**
     * The datum_overlijden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_overlijden;
    /**
     * The indicatie_overleden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_overleden;
    /**
     * The burgerlijke_staat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $burgerlijke_staat;
    /**
     * Constructor method for kadasterNatuurlijkPersoon
     * @uses KadasterNatuurlijkPersoon::setBsn()
     * @uses KadasterNatuurlijkPersoon::setGeslachtsnaam()
     * @uses KadasterNatuurlijkPersoon::setVoorvoegsel_geslachtsnaam()
     * @uses KadasterNatuurlijkPersoon::setVoornamen()
     * @uses KadasterNatuurlijkPersoon::setGeslacht()
     * @uses KadasterNatuurlijkPersoon::setGeboorteplaats()
     * @uses KadasterNatuurlijkPersoon::setGeboortedatum()
     * @uses KadasterNatuurlijkPersoon::setDatum_overlijden()
     * @uses KadasterNatuurlijkPersoon::setIndicatie_overleden()
     * @uses KadasterNatuurlijkPersoon::setBurgerlijke_staat()
     * @param string $bsn
     * @param string $geslachtsnaam
     * @param string $voorvoegsel_geslachtsnaam
     * @param string $voornamen
     * @param string $geslacht
     * @param string $geboorteplaats
     * @param string $geboortedatum
     * @param string $datum_overlijden
     * @param bool $indicatie_overleden
     * @param string $burgerlijke_staat
     */
    public function __construct($bsn = null, $geslachtsnaam = null, $voorvoegsel_geslachtsnaam = null, $voornamen = null, $geslacht = null, $geboorteplaats = null, $geboortedatum = null, $datum_overlijden = null, $indicatie_overleden = null, $burgerlijke_staat = null)
    {
        $this
            ->setBsn($bsn)
            ->setGeslachtsnaam($geslachtsnaam)
            ->setVoorvoegsel_geslachtsnaam($voorvoegsel_geslachtsnaam)
            ->setVoornamen($voornamen)
            ->setGeslacht($geslacht)
            ->setGeboorteplaats($geboorteplaats)
            ->setGeboortedatum($geboortedatum)
            ->setDatum_overlijden($datum_overlijden)
            ->setIndicatie_overleden($indicatie_overleden)
            ->setBurgerlijke_staat($burgerlijke_staat);
    }
    /**
     * Get bsn value
     * @return string|null
     */
    public function getBsn()
    {
        return $this->bsn;
    }
    /**
     * Set bsn value
     * @param string $bsn
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setBsn($bsn = null)
    {
        // validation for constraint: string
        if (!is_null($bsn) && !is_string($bsn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bsn)), __LINE__);
        }
        $this->bsn = $bsn;
        return $this;
    }
    /**
     * Get geslachtsnaam value
     * @return string|null
     */
    public function getGeslachtsnaam()
    {
        return $this->geslachtsnaam;
    }
    /**
     * Set geslachtsnaam value
     * @param string $geslachtsnaam
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setGeslachtsnaam($geslachtsnaam = null)
    {
        // validation for constraint: string
        if (!is_null($geslachtsnaam) && !is_string($geslachtsnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geslachtsnaam)), __LINE__);
        }
        $this->geslachtsnaam = $geslachtsnaam;
        return $this;
    }
    /**
     * Get voorvoegsel_geslachtsnaam value
     * @return string|null
     */
    public function getVoorvoegsel_geslachtsnaam()
    {
        return $this->voorvoegsel_geslachtsnaam;
    }
    /**
     * Set voorvoegsel_geslachtsnaam value
     * @param string $voorvoegsel_geslachtsnaam
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setVoorvoegsel_geslachtsnaam($voorvoegsel_geslachtsnaam = null)
    {
        // validation for constraint: string
        if (!is_null($voorvoegsel_geslachtsnaam) && !is_string($voorvoegsel_geslachtsnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voorvoegsel_geslachtsnaam)), __LINE__);
        }
        $this->voorvoegsel_geslachtsnaam = $voorvoegsel_geslachtsnaam;
        return $this;
    }
    /**
     * Get voornamen value
     * @return string|null
     */
    public function getVoornamen()
    {
        return $this->voornamen;
    }
    /**
     * Set voornamen value
     * @param string $voornamen
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setVoornamen($voornamen = null)
    {
        // validation for constraint: string
        if (!is_null($voornamen) && !is_string($voornamen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voornamen)), __LINE__);
        }
        $this->voornamen = $voornamen;
        return $this;
    }
    /**
     * Get geslacht value
     * @return string|null
     */
    public function getGeslacht()
    {
        return $this->geslacht;
    }
    /**
     * Set geslacht value
     * @param string $geslacht
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setGeslacht($geslacht = null)
    {
        // validation for constraint: string
        if (!is_null($geslacht) && !is_string($geslacht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geslacht)), __LINE__);
        }
        $this->geslacht = $geslacht;
        return $this;
    }
    /**
     * Get geboorteplaats value
     * @return string|null
     */
    public function getGeboorteplaats()
    {
        return $this->geboorteplaats;
    }
    /**
     * Set geboorteplaats value
     * @param string $geboorteplaats
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setGeboorteplaats($geboorteplaats = null)
    {
        // validation for constraint: string
        if (!is_null($geboorteplaats) && !is_string($geboorteplaats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geboorteplaats)), __LINE__);
        }
        $this->geboorteplaats = $geboorteplaats;
        return $this;
    }
    /**
     * Get geboortedatum value
     * @return string|null
     */
    public function getGeboortedatum()
    {
        return $this->geboortedatum;
    }
    /**
     * Set geboortedatum value
     * @param string $geboortedatum
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setGeboortedatum($geboortedatum = null)
    {
        // validation for constraint: string
        if (!is_null($geboortedatum) && !is_string($geboortedatum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geboortedatum)), __LINE__);
        }
        $this->geboortedatum = $geboortedatum;
        return $this;
    }
    /**
     * Get datum_overlijden value
     * @return string|null
     */
    public function getDatum_overlijden()
    {
        return $this->datum_overlijden;
    }
    /**
     * Set datum_overlijden value
     * @param string $datum_overlijden
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setDatum_overlijden($datum_overlijden = null)
    {
        // validation for constraint: string
        if (!is_null($datum_overlijden) && !is_string($datum_overlijden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_overlijden)), __LINE__);
        }
        $this->datum_overlijden = $datum_overlijden;
        return $this;
    }
    /**
     * Get indicatie_overleden value
     * @return bool|null
     */
    public function getIndicatie_overleden()
    {
        return $this->indicatie_overleden;
    }
    /**
     * Set indicatie_overleden value
     * @param bool $indicatie_overleden
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setIndicatie_overleden($indicatie_overleden = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_overleden) && !is_bool($indicatie_overleden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_overleden)), __LINE__);
        }
        $this->indicatie_overleden = $indicatie_overleden;
        return $this;
    }
    /**
     * Get burgerlijke_staat value
     * @return string|null
     */
    public function getBurgerlijke_staat()
    {
        return $this->burgerlijke_staat;
    }
    /**
     * Set burgerlijke_staat value
     * @param string $burgerlijke_staat
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
     */
    public function setBurgerlijke_staat($burgerlijke_staat = null)
    {
        // validation for constraint: string
        if (!is_null($burgerlijke_staat) && !is_string($burgerlijke_staat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($burgerlijke_staat)), __LINE__);
        }
        $this->burgerlijke_staat = $burgerlijke_staat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterNatuurlijkPersoon
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
