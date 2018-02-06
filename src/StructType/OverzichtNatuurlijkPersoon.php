<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverzichtNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class OverzichtNatuurlijkPersoon extends AbstractStructBase
{
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
     * Constructor method for OverzichtNatuurlijkPersoon
     * @uses OverzichtNatuurlijkPersoon::setGeslachtsnaam()
     * @uses OverzichtNatuurlijkPersoon::setVoorvoegsel_geslachtsnaam()
     * @uses OverzichtNatuurlijkPersoon::setVoornamen()
     * @param string $geslachtsnaam
     * @param string $voorvoegsel_geslachtsnaam
     * @param string $voornamen
     */
    public function __construct($geslachtsnaam = null, $voorvoegsel_geslachtsnaam = null, $voornamen = null)
    {
        $this
            ->setGeslachtsnaam($geslachtsnaam)
            ->setVoorvoegsel_geslachtsnaam($voorvoegsel_geslachtsnaam)
            ->setVoornamen($voornamen);
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
     * @return \Webservices\StructType\OverzichtNatuurlijkPersoon
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
     * @return \Webservices\StructType\OverzichtNatuurlijkPersoon
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
     * @return \Webservices\StructType\OverzichtNatuurlijkPersoon
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\OverzichtNatuurlijkPersoon
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
