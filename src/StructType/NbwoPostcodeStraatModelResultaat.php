<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NbwoPostcodeStraatModelResultaat StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NbwoPostcodeStraatModelResultaat extends AbstractStructBase
{
    /**
     * The waarde
     * @var int
     */
    public $waarde;
    /**
     * The aantal
     * @var int
     */
    public $aantal;
    /**
     * The standaard_deviatie
     * @var float
     */
    public $standaard_deviatie;
    /**
     * The straat
     * @var string
     */
    public $straat;
    /**
     * The plaats
     * @var string
     */
    public $plaats;
    /**
     * The datum_van
     * @var string
     */
    public $datum_van;
    /**
     * The waardeverdelingen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\NbwoWaardeVerdelingArray
     */
    public $waardeverdelingen;
    /**
     * Constructor method for NbwoPostcodeStraatModelResultaat
     * @uses NbwoPostcodeStraatModelResultaat::setWaarde()
     * @uses NbwoPostcodeStraatModelResultaat::setAantal()
     * @uses NbwoPostcodeStraatModelResultaat::setStandaard_deviatie()
     * @uses NbwoPostcodeStraatModelResultaat::setStraat()
     * @uses NbwoPostcodeStraatModelResultaat::setPlaats()
     * @uses NbwoPostcodeStraatModelResultaat::setDatum_van()
     * @uses NbwoPostcodeStraatModelResultaat::setWaardeverdelingen()
     * @param int $waarde
     * @param int $aantal
     * @param float $standaard_deviatie
     * @param string $straat
     * @param string $plaats
     * @param string $datum_van
     * @param \Webservices\ArrayType\NbwoWaardeVerdelingArray $waardeverdelingen
     */
    public function __construct($waarde = null, $aantal = null, $standaard_deviatie = null, $straat = null, $plaats = null, $datum_van = null, \Webservices\ArrayType\NbwoWaardeVerdelingArray $waardeverdelingen = null)
    {
        $this
            ->setWaarde($waarde)
            ->setAantal($aantal)
            ->setStandaard_deviatie($standaard_deviatie)
            ->setStraat($straat)
            ->setPlaats($plaats)
            ->setDatum_van($datum_van)
            ->setWaardeverdelingen($waardeverdelingen);
    }
    /**
     * Get waarde value
     * @return int|null
     */
    public function getWaarde()
    {
        return $this->waarde;
    }
    /**
     * Set waarde value
     * @param int $waarde
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public function setWaarde($waarde = null)
    {
        // validation for constraint: int
        if (!is_null($waarde) && !is_numeric($waarde)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($waarde)), __LINE__);
        }
        $this->waarde = $waarde;
        return $this;
    }
    /**
     * Get aantal value
     * @return int|null
     */
    public function getAantal()
    {
        return $this->aantal;
    }
    /**
     * Set aantal value
     * @param int $aantal
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public function setAantal($aantal = null)
    {
        // validation for constraint: int
        if (!is_null($aantal) && !is_numeric($aantal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aantal)), __LINE__);
        }
        $this->aantal = $aantal;
        return $this;
    }
    /**
     * Get standaard_deviatie value
     * @return float|null
     */
    public function getStandaard_deviatie()
    {
        return $this->standaard_deviatie;
    }
    /**
     * Set standaard_deviatie value
     * @param float $standaard_deviatie
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public function setStandaard_deviatie($standaard_deviatie = null)
    {
        $this->standaard_deviatie = $standaard_deviatie;
        return $this;
    }
    /**
     * Get straat value
     * @return string|null
     */
    public function getStraat()
    {
        return $this->straat;
    }
    /**
     * Set straat value
     * @param string $straat
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public function setStraat($straat = null)
    {
        // validation for constraint: string
        if (!is_null($straat) && !is_string($straat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($straat)), __LINE__);
        }
        $this->straat = $straat;
        return $this;
    }
    /**
     * Get plaats value
     * @return string|null
     */
    public function getPlaats()
    {
        return $this->plaats;
    }
    /**
     * Set plaats value
     * @param string $plaats
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public function setPlaats($plaats = null)
    {
        // validation for constraint: string
        if (!is_null($plaats) && !is_string($plaats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaats)), __LINE__);
        }
        $this->plaats = $plaats;
        return $this;
    }
    /**
     * Get datum_van value
     * @return string|null
     */
    public function getDatum_van()
    {
        return $this->datum_van;
    }
    /**
     * Set datum_van value
     * @param string $datum_van
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public function setDatum_van($datum_van = null)
    {
        // validation for constraint: string
        if (!is_null($datum_van) && !is_string($datum_van)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_van)), __LINE__);
        }
        $this->datum_van = $datum_van;
        return $this;
    }
    /**
     * Get waardeverdelingen value
     * @return \Webservices\ArrayType\NbwoWaardeVerdelingArray|null
     */
    public function getWaardeverdelingen()
    {
        return $this->waardeverdelingen;
    }
    /**
     * Set waardeverdelingen value
     * @param \Webservices\ArrayType\NbwoWaardeVerdelingArray $waardeverdelingen
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public function setWaardeverdelingen(\Webservices\ArrayType\NbwoWaardeVerdelingArray $waardeverdelingen = null)
    {
        $this->waardeverdelingen = $waardeverdelingen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat
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
