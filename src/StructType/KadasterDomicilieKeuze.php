<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterDomicilieKeuze StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterDomicilieKeuze extends AbstractStructBase
{
    /**
     * The voorletters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voorletters;
    /**
     * The voorvoegsels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voorvoegsels;
    /**
     * The achternaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $achternaam;
    /**
     * The adres
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adres;
    /**
     * Constructor method for kadasterDomicilieKeuze
     * @uses KadasterDomicilieKeuze::setVoorletters()
     * @uses KadasterDomicilieKeuze::setVoorvoegsels()
     * @uses KadasterDomicilieKeuze::setAchternaam()
     * @uses KadasterDomicilieKeuze::setAdres()
     * @param string $voorletters
     * @param string $voorvoegsels
     * @param string $achternaam
     * @param string $adres
     */
    public function __construct($voorletters = null, $voorvoegsels = null, $achternaam = null, $adres = null)
    {
        $this
            ->setVoorletters($voorletters)
            ->setVoorvoegsels($voorvoegsels)
            ->setAchternaam($achternaam)
            ->setAdres($adres);
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
     * @return \Webservices\StructType\KadasterDomicilieKeuze
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
     * @return \Webservices\StructType\KadasterDomicilieKeuze
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
     * Get achternaam value
     * @return string|null
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }
    /**
     * Set achternaam value
     * @param string $achternaam
     * @return \Webservices\StructType\KadasterDomicilieKeuze
     */
    public function setAchternaam($achternaam = null)
    {
        // validation for constraint: string
        if (!is_null($achternaam) && !is_string($achternaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($achternaam)), __LINE__);
        }
        $this->achternaam = $achternaam;
        return $this;
    }
    /**
     * Get adres value
     * @return string|null
     */
    public function getAdres()
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param string $adres
     * @return \Webservices\StructType\KadasterDomicilieKeuze
     */
    public function setAdres($adres = null)
    {
        // validation for constraint: string
        if (!is_null($adres) && !is_string($adres)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adres)), __LINE__);
        }
        $this->adres = $adres;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterDomicilieKeuze
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
