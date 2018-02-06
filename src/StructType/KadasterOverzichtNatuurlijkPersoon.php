<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterOverzichtNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterOverzichtNatuurlijkPersoon extends AbstractStructBase
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
     * Constructor method for kadasterOverzichtNatuurlijkPersoon
     * @uses KadasterOverzichtNatuurlijkPersoon::setBsn()
     * @uses KadasterOverzichtNatuurlijkPersoon::setGeslachtsnaam()
     * @uses KadasterOverzichtNatuurlijkPersoon::setVoorvoegsel_geslachtsnaam()
     * @uses KadasterOverzichtNatuurlijkPersoon::setVoornamen()
     * @uses KadasterOverzichtNatuurlijkPersoon::setGeslacht()
     * @param string $bsn
     * @param string $geslachtsnaam
     * @param string $voorvoegsel_geslachtsnaam
     * @param string $voornamen
     * @param string $geslacht
     */
    public function __construct($bsn = null, $geslachtsnaam = null, $voorvoegsel_geslachtsnaam = null, $voornamen = null, $geslacht = null)
    {
        $this
            ->setBsn($bsn)
            ->setGeslachtsnaam($geslachtsnaam)
            ->setVoorvoegsel_geslachtsnaam($voorvoegsel_geslachtsnaam)
            ->setVoornamen($voornamen)
            ->setGeslacht($geslacht);
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
     * @return \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon
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
     * @return \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon
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
     * @return \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon
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
     * @return \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon
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
     * @return \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon
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
