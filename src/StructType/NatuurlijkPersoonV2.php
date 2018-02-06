<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NatuurlijkPersoonV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NatuurlijkPersoonV2 extends AbstractStructBase
{
    /**
     * The adellijke_titel_geslachtsnaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adellijke_titel_geslachtsnaam;
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
     * The adellijke_titel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adellijke_titel;
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
     * @var bool
     */
    public $indicatie_overleden;
    /**
     * The indicatie_conform_gba
     * @var bool
     */
    public $indicatie_conform_gba;
    /**
     * The relatie_partnerid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $relatie_partnerid;
    /**
     * The omschrijving_relatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving_relatie;
    /**
     * Constructor method for NatuurlijkPersoonV2
     * @uses NatuurlijkPersoonV2::setAdellijke_titel_geslachtsnaam()
     * @uses NatuurlijkPersoonV2::setGeslachtsnaam()
     * @uses NatuurlijkPersoonV2::setVoorvoegsel_geslachtsnaam()
     * @uses NatuurlijkPersoonV2::setAdellijke_titel()
     * @uses NatuurlijkPersoonV2::setVoornamen()
     * @uses NatuurlijkPersoonV2::setGeslacht()
     * @uses NatuurlijkPersoonV2::setGeboorteplaats()
     * @uses NatuurlijkPersoonV2::setGeboortedatum()
     * @uses NatuurlijkPersoonV2::setDatum_overlijden()
     * @uses NatuurlijkPersoonV2::setIndicatie_overleden()
     * @uses NatuurlijkPersoonV2::setIndicatie_conform_gba()
     * @uses NatuurlijkPersoonV2::setRelatie_partnerid()
     * @uses NatuurlijkPersoonV2::setOmschrijving_relatie()
     * @param string $adellijke_titel_geslachtsnaam
     * @param string $geslachtsnaam
     * @param string $voorvoegsel_geslachtsnaam
     * @param string $adellijke_titel
     * @param string $voornamen
     * @param string $geslacht
     * @param string $geboorteplaats
     * @param string $geboortedatum
     * @param string $datum_overlijden
     * @param bool $indicatie_overleden
     * @param bool $indicatie_conform_gba
     * @param string $relatie_partnerid
     * @param string $omschrijving_relatie
     */
    public function __construct($adellijke_titel_geslachtsnaam = null, $geslachtsnaam = null, $voorvoegsel_geslachtsnaam = null, $adellijke_titel = null, $voornamen = null, $geslacht = null, $geboorteplaats = null, $geboortedatum = null, $datum_overlijden = null, $indicatie_overleden = null, $indicatie_conform_gba = null, $relatie_partnerid = null, $omschrijving_relatie = null)
    {
        $this
            ->setAdellijke_titel_geslachtsnaam($adellijke_titel_geslachtsnaam)
            ->setGeslachtsnaam($geslachtsnaam)
            ->setVoorvoegsel_geslachtsnaam($voorvoegsel_geslachtsnaam)
            ->setAdellijke_titel($adellijke_titel)
            ->setVoornamen($voornamen)
            ->setGeslacht($geslacht)
            ->setGeboorteplaats($geboorteplaats)
            ->setGeboortedatum($geboortedatum)
            ->setDatum_overlijden($datum_overlijden)
            ->setIndicatie_overleden($indicatie_overleden)
            ->setIndicatie_conform_gba($indicatie_conform_gba)
            ->setRelatie_partnerid($relatie_partnerid)
            ->setOmschrijving_relatie($omschrijving_relatie);
    }
    /**
     * Get adellijke_titel_geslachtsnaam value
     * @return string|null
     */
    public function getAdellijke_titel_geslachtsnaam()
    {
        return $this->adellijke_titel_geslachtsnaam;
    }
    /**
     * Set adellijke_titel_geslachtsnaam value
     * @param string $adellijke_titel_geslachtsnaam
     * @return \Webservices\StructType\NatuurlijkPersoonV2
     */
    public function setAdellijke_titel_geslachtsnaam($adellijke_titel_geslachtsnaam = null)
    {
        // validation for constraint: string
        if (!is_null($adellijke_titel_geslachtsnaam) && !is_string($adellijke_titel_geslachtsnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adellijke_titel_geslachtsnaam)), __LINE__);
        }
        $this->adellijke_titel_geslachtsnaam = $adellijke_titel_geslachtsnaam;
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * Get adellijke_titel value
     * @return string|null
     */
    public function getAdellijke_titel()
    {
        return $this->adellijke_titel;
    }
    /**
     * Set adellijke_titel value
     * @param string $adellijke_titel
     * @return \Webservices\StructType\NatuurlijkPersoonV2
     */
    public function setAdellijke_titel($adellijke_titel = null)
    {
        // validation for constraint: string
        if (!is_null($adellijke_titel) && !is_string($adellijke_titel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adellijke_titel)), __LINE__);
        }
        $this->adellijke_titel = $adellijke_titel;
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
     * Get indicatie_conform_gba value
     * @return bool|null
     */
    public function getIndicatie_conform_gba()
    {
        return $this->indicatie_conform_gba;
    }
    /**
     * Set indicatie_conform_gba value
     * @param bool $indicatie_conform_gba
     * @return \Webservices\StructType\NatuurlijkPersoonV2
     */
    public function setIndicatie_conform_gba($indicatie_conform_gba = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_conform_gba) && !is_bool($indicatie_conform_gba)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_conform_gba)), __LINE__);
        }
        $this->indicatie_conform_gba = $indicatie_conform_gba;
        return $this;
    }
    /**
     * Get relatie_partnerid value
     * @return string|null
     */
    public function getRelatie_partnerid()
    {
        return $this->relatie_partnerid;
    }
    /**
     * Set relatie_partnerid value
     * @param string $relatie_partnerid
     * @return \Webservices\StructType\NatuurlijkPersoonV2
     */
    public function setRelatie_partnerid($relatie_partnerid = null)
    {
        // validation for constraint: string
        if (!is_null($relatie_partnerid) && !is_string($relatie_partnerid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatie_partnerid)), __LINE__);
        }
        $this->relatie_partnerid = $relatie_partnerid;
        return $this;
    }
    /**
     * Get omschrijving_relatie value
     * @return string|null
     */
    public function getOmschrijving_relatie()
    {
        return $this->omschrijving_relatie;
    }
    /**
     * Set omschrijving_relatie value
     * @param string $omschrijving_relatie
     * @return \Webservices\StructType\NatuurlijkPersoonV2
     */
    public function setOmschrijving_relatie($omschrijving_relatie = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_relatie) && !is_string($omschrijving_relatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_relatie)), __LINE__);
        }
        $this->omschrijving_relatie = $omschrijving_relatie;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NatuurlijkPersoonV2
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
