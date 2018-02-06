<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Naam StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Naam extends AbstractStructBase
{
    /**
     * The voorletters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voorletters;
    /**
     * The geslachtsnaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geslachtsnaam;
    /**
     * The voornamen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voornamen;
    /**
     * The voorvoegselsgeslachtsnaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voorvoegselsgeslachtsnaam;
    /**
     * Constructor method for KadasterV2Naam
     * @uses KadasterV2Naam::setVoorletters()
     * @uses KadasterV2Naam::setGeslachtsnaam()
     * @uses KadasterV2Naam::setVoornamen()
     * @uses KadasterV2Naam::setVoorvoegselsgeslachtsnaam()
     * @param string $voorletters
     * @param string $geslachtsnaam
     * @param string $voornamen
     * @param string $voorvoegselsgeslachtsnaam
     */
    public function __construct($voorletters = null, $geslachtsnaam = null, $voornamen = null, $voorvoegselsgeslachtsnaam = null)
    {
        $this
            ->setVoorletters($voorletters)
            ->setGeslachtsnaam($geslachtsnaam)
            ->setVoornamen($voornamen)
            ->setVoorvoegselsgeslachtsnaam($voorvoegselsgeslachtsnaam);
    }
    /**
     * Get voorletters value
     * @return string|null
     */
    public function getVoorletters()
    {
        return $this->voorletters;
    }
    /**
     * Set voorletters value
     * @param string $voorletters
     * @return \Webservices\StructType\KadasterV2Naam
     */
    public function setVoorletters($voorletters = null)
    {
        // validation for constraint: string
        if (!is_null($voorletters) && !is_string($voorletters)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voorletters)), __LINE__);
        }
        $this->voorletters = $voorletters;
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
     * @return \Webservices\StructType\KadasterV2Naam
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
     * @return \Webservices\StructType\KadasterV2Naam
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
     * Get voorvoegselsgeslachtsnaam value
     * @return string|null
     */
    public function getVoorvoegselsgeslachtsnaam()
    {
        return $this->voorvoegselsgeslachtsnaam;
    }
    /**
     * Set voorvoegselsgeslachtsnaam value
     * @param string $voorvoegselsgeslachtsnaam
     * @return \Webservices\StructType\KadasterV2Naam
     */
    public function setVoorvoegselsgeslachtsnaam($voorvoegselsgeslachtsnaam = null)
    {
        // validation for constraint: string
        if (!is_null($voorvoegselsgeslachtsnaam) && !is_string($voorvoegselsgeslachtsnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voorvoegselsgeslachtsnaam)), __LINE__);
        }
        $this->voorvoegselsgeslachtsnaam = $voorvoegselsgeslachtsnaam;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Naam
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
