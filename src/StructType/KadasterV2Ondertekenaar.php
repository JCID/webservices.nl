<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Ondertekenaar StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Ondertekenaar extends AbstractStructBase
{
    /**
     * The voornamen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voornamen;
    /**
     * The voorvoegsels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voorvoegsels;
    /**
     * The geslachtsnaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geslachtsnaam;
    /**
     * The standplaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $standplaats;
    /**
     * Constructor method for KadasterV2Ondertekenaar
     * @uses KadasterV2Ondertekenaar::setVoornamen()
     * @uses KadasterV2Ondertekenaar::setVoorvoegsels()
     * @uses KadasterV2Ondertekenaar::setGeslachtsnaam()
     * @uses KadasterV2Ondertekenaar::setStandplaats()
     * @param string $voornamen
     * @param string $voorvoegsels
     * @param string $geslachtsnaam
     * @param string $standplaats
     */
    public function __construct($voornamen = null, $voorvoegsels = null, $geslachtsnaam = null, $standplaats = null)
    {
        $this
            ->setVoornamen($voornamen)
            ->setVoorvoegsels($voorvoegsels)
            ->setGeslachtsnaam($geslachtsnaam)
            ->setStandplaats($standplaats);
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
     * @return \Webservices\StructType\KadasterV2Ondertekenaar
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
     * Get voorvoegsels value
     * @return string|null
     */
    public function getVoorvoegsels()
    {
        return $this->voorvoegsels;
    }
    /**
     * Set voorvoegsels value
     * @param string $voorvoegsels
     * @return \Webservices\StructType\KadasterV2Ondertekenaar
     */
    public function setVoorvoegsels($voorvoegsels = null)
    {
        // validation for constraint: string
        if (!is_null($voorvoegsels) && !is_string($voorvoegsels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voorvoegsels)), __LINE__);
        }
        $this->voorvoegsels = $voorvoegsels;
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
     * @return \Webservices\StructType\KadasterV2Ondertekenaar
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
     * Get standplaats value
     * @return string|null
     */
    public function getStandplaats()
    {
        return $this->standplaats;
    }
    /**
     * Set standplaats value
     * @param string $standplaats
     * @return \Webservices\StructType\KadasterV2Ondertekenaar
     */
    public function setStandplaats($standplaats = null)
    {
        // validation for constraint: string
        if (!is_null($standplaats) && !is_string($standplaats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($standplaats)), __LINE__);
        }
        $this->standplaats = $standplaats;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Ondertekenaar
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
