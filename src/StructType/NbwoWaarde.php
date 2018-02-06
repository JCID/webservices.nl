<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NbwoWaarde StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NbwoWaarde extends AbstractStructBase
{
    /**
     * The waarde
     * @var int
     */
    public $waarde;
    /**
     * The betrouwbaarheid
     * @var string
     */
    public $betrouwbaarheid;
    /**
     * The datum_waardebepaling
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_waardebepaling;
    /**
     * The cultuurcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cultuurcode;
    /**
     * The woningtype
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $woningtype;
    /**
     * The prijspeil_datum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $prijspeil_datum;
    /**
     * The straat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $straat;
    /**
     * The huisnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $huisnummer;
    /**
     * The huisnummer_toevoeging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisnummer_toevoeging;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The plaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $plaats;
    /**
     * The oppervlak
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $oppervlak;
    /**
     * The inhoud
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $inhoud;
    /**
     * The bouwjaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $bouwjaar;
    /**
     * The grootte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $grootte;
    /**
     * The garage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $garage;
    /**
     * The tuin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $tuin;
    /**
     * The monument
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $monument;
    /**
     * The schuur
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $schuur;
    /**
     * The postcode_model_resultaat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public $postcode_model_resultaat;
    /**
     * The straat_model_resultaat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\NbwoPostcodeStraatModelResultaat
     */
    public $straat_model_resultaat;
    /**
     * The vorige_verkoop_model_resultaat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
     */
    public $vorige_verkoop_model_resultaat;
    /**
     * The kenmerken_model_resultaat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\NbwoKenmerkenModelResultaat
     */
    public $kenmerken_model_resultaat;
    /**
     * Constructor method for NbwoWaarde
     * @uses NbwoWaarde::setWaarde()
     * @uses NbwoWaarde::setBetrouwbaarheid()
     * @uses NbwoWaarde::setDatum_waardebepaling()
     * @uses NbwoWaarde::setCultuurcode()
     * @uses NbwoWaarde::setWoningtype()
     * @uses NbwoWaarde::setPrijspeil_datum()
     * @uses NbwoWaarde::setStraat()
     * @uses NbwoWaarde::setHuisnummer()
     * @uses NbwoWaarde::setHuisnummer_toevoeging()
     * @uses NbwoWaarde::setPostcode()
     * @uses NbwoWaarde::setPlaats()
     * @uses NbwoWaarde::setOppervlak()
     * @uses NbwoWaarde::setInhoud()
     * @uses NbwoWaarde::setBouwjaar()
     * @uses NbwoWaarde::setGrootte()
     * @uses NbwoWaarde::setGarage()
     * @uses NbwoWaarde::setTuin()
     * @uses NbwoWaarde::setMonument()
     * @uses NbwoWaarde::setSchuur()
     * @uses NbwoWaarde::setPostcode_model_resultaat()
     * @uses NbwoWaarde::setStraat_model_resultaat()
     * @uses NbwoWaarde::setVorige_verkoop_model_resultaat()
     * @uses NbwoWaarde::setKenmerken_model_resultaat()
     * @param int $waarde
     * @param string $betrouwbaarheid
     * @param string $datum_waardebepaling
     * @param string $cultuurcode
     * @param string $woningtype
     * @param string $prijspeil_datum
     * @param string $straat
     * @param int $huisnummer
     * @param string $huisnummer_toevoeging
     * @param string $postcode
     * @param string $plaats
     * @param int $oppervlak
     * @param int $inhoud
     * @param int $bouwjaar
     * @param int $grootte
     * @param bool $garage
     * @param bool $tuin
     * @param bool $monument
     * @param bool $schuur
     * @param \Webservices\StructType\NbwoPostcodeStraatModelResultaat $postcode_model_resultaat
     * @param \Webservices\StructType\NbwoPostcodeStraatModelResultaat $straat_model_resultaat
     * @param \Webservices\StructType\NbwoVorigeVerkoopModelResultaat $vorige_verkoop_model_resultaat
     * @param \Webservices\StructType\NbwoKenmerkenModelResultaat $kenmerken_model_resultaat
     */
    public function __construct($waarde = null, $betrouwbaarheid = null, $datum_waardebepaling = null, $cultuurcode = null, $woningtype = null, $prijspeil_datum = null, $straat = null, $huisnummer = null, $huisnummer_toevoeging = null, $postcode = null, $plaats = null, $oppervlak = null, $inhoud = null, $bouwjaar = null, $grootte = null, $garage = null, $tuin = null, $monument = null, $schuur = null, \Webservices\StructType\NbwoPostcodeStraatModelResultaat $postcode_model_resultaat = null, \Webservices\StructType\NbwoPostcodeStraatModelResultaat $straat_model_resultaat = null, \Webservices\StructType\NbwoVorigeVerkoopModelResultaat $vorige_verkoop_model_resultaat = null, \Webservices\StructType\NbwoKenmerkenModelResultaat $kenmerken_model_resultaat = null)
    {
        $this
            ->setWaarde($waarde)
            ->setBetrouwbaarheid($betrouwbaarheid)
            ->setDatum_waardebepaling($datum_waardebepaling)
            ->setCultuurcode($cultuurcode)
            ->setWoningtype($woningtype)
            ->setPrijspeil_datum($prijspeil_datum)
            ->setStraat($straat)
            ->setHuisnummer($huisnummer)
            ->setHuisnummer_toevoeging($huisnummer_toevoeging)
            ->setPostcode($postcode)
            ->setPlaats($plaats)
            ->setOppervlak($oppervlak)
            ->setInhoud($inhoud)
            ->setBouwjaar($bouwjaar)
            ->setGrootte($grootte)
            ->setGarage($garage)
            ->setTuin($tuin)
            ->setMonument($monument)
            ->setSchuur($schuur)
            ->setPostcode_model_resultaat($postcode_model_resultaat)
            ->setStraat_model_resultaat($straat_model_resultaat)
            ->setVorige_verkoop_model_resultaat($vorige_verkoop_model_resultaat)
            ->setKenmerken_model_resultaat($kenmerken_model_resultaat);
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
     * @return \Webservices\StructType\NbwoWaarde
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
     * Get betrouwbaarheid value
     * @return string|null
     */
    public function getBetrouwbaarheid()
    {
        return $this->betrouwbaarheid;
    }
    /**
     * Set betrouwbaarheid value
     * @param string $betrouwbaarheid
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setBetrouwbaarheid($betrouwbaarheid = null)
    {
        // validation for constraint: string
        if (!is_null($betrouwbaarheid) && !is_string($betrouwbaarheid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($betrouwbaarheid)), __LINE__);
        }
        $this->betrouwbaarheid = $betrouwbaarheid;
        return $this;
    }
    /**
     * Get datum_waardebepaling value
     * @return string|null
     */
    public function getDatum_waardebepaling()
    {
        return $this->datum_waardebepaling;
    }
    /**
     * Set datum_waardebepaling value
     * @param string $datum_waardebepaling
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setDatum_waardebepaling($datum_waardebepaling = null)
    {
        // validation for constraint: string
        if (!is_null($datum_waardebepaling) && !is_string($datum_waardebepaling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_waardebepaling)), __LINE__);
        }
        $this->datum_waardebepaling = $datum_waardebepaling;
        return $this;
    }
    /**
     * Get cultuurcode value
     * @return string|null
     */
    public function getCultuurcode()
    {
        return $this->cultuurcode;
    }
    /**
     * Set cultuurcode value
     * @param string $cultuurcode
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setCultuurcode($cultuurcode = null)
    {
        // validation for constraint: string
        if (!is_null($cultuurcode) && !is_string($cultuurcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cultuurcode)), __LINE__);
        }
        $this->cultuurcode = $cultuurcode;
        return $this;
    }
    /**
     * Get woningtype value
     * @return string|null
     */
    public function getWoningtype()
    {
        return $this->woningtype;
    }
    /**
     * Set woningtype value
     * @param string $woningtype
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setWoningtype($woningtype = null)
    {
        // validation for constraint: string
        if (!is_null($woningtype) && !is_string($woningtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($woningtype)), __LINE__);
        }
        $this->woningtype = $woningtype;
        return $this;
    }
    /**
     * Get prijspeil_datum value
     * @return string|null
     */
    public function getPrijspeil_datum()
    {
        return $this->prijspeil_datum;
    }
    /**
     * Set prijspeil_datum value
     * @param string $prijspeil_datum
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setPrijspeil_datum($prijspeil_datum = null)
    {
        // validation for constraint: string
        if (!is_null($prijspeil_datum) && !is_string($prijspeil_datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prijspeil_datum)), __LINE__);
        }
        $this->prijspeil_datum = $prijspeil_datum;
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
     * @return \Webservices\StructType\NbwoWaarde
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
     * @return \Webservices\StructType\NbwoWaarde
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
     * @return \Webservices\StructType\NbwoWaarde
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
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
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
     * @return \Webservices\StructType\NbwoWaarde
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
     * Get oppervlak value
     * @return int|null
     */
    public function getOppervlak()
    {
        return $this->oppervlak;
    }
    /**
     * Set oppervlak value
     * @param int $oppervlak
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setOppervlak($oppervlak = null)
    {
        // validation for constraint: int
        if (!is_null($oppervlak) && !is_numeric($oppervlak)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($oppervlak)), __LINE__);
        }
        $this->oppervlak = $oppervlak;
        return $this;
    }
    /**
     * Get inhoud value
     * @return int|null
     */
    public function getInhoud()
    {
        return $this->inhoud;
    }
    /**
     * Set inhoud value
     * @param int $inhoud
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setInhoud($inhoud = null)
    {
        // validation for constraint: int
        if (!is_null($inhoud) && !is_numeric($inhoud)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inhoud)), __LINE__);
        }
        $this->inhoud = $inhoud;
        return $this;
    }
    /**
     * Get bouwjaar value
     * @return int|null
     */
    public function getBouwjaar()
    {
        return $this->bouwjaar;
    }
    /**
     * Set bouwjaar value
     * @param int $bouwjaar
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setBouwjaar($bouwjaar = null)
    {
        // validation for constraint: int
        if (!is_null($bouwjaar) && !is_numeric($bouwjaar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bouwjaar)), __LINE__);
        }
        $this->bouwjaar = $bouwjaar;
        return $this;
    }
    /**
     * Get grootte value
     * @return int|null
     */
    public function getGrootte()
    {
        return $this->grootte;
    }
    /**
     * Set grootte value
     * @param int $grootte
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setGrootte($grootte = null)
    {
        // validation for constraint: int
        if (!is_null($grootte) && !is_numeric($grootte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($grootte)), __LINE__);
        }
        $this->grootte = $grootte;
        return $this;
    }
    /**
     * Get garage value
     * @return bool|null
     */
    public function getGarage()
    {
        return $this->garage;
    }
    /**
     * Set garage value
     * @param bool $garage
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setGarage($garage = null)
    {
        // validation for constraint: boolean
        if (!is_null($garage) && !is_bool($garage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($garage)), __LINE__);
        }
        $this->garage = $garage;
        return $this;
    }
    /**
     * Get tuin value
     * @return bool|null
     */
    public function getTuin()
    {
        return $this->tuin;
    }
    /**
     * Set tuin value
     * @param bool $tuin
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setTuin($tuin = null)
    {
        // validation for constraint: boolean
        if (!is_null($tuin) && !is_bool($tuin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tuin)), __LINE__);
        }
        $this->tuin = $tuin;
        return $this;
    }
    /**
     * Get monument value
     * @return bool|null
     */
    public function getMonument()
    {
        return $this->monument;
    }
    /**
     * Set monument value
     * @param bool $monument
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setMonument($monument = null)
    {
        // validation for constraint: boolean
        if (!is_null($monument) && !is_bool($monument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($monument)), __LINE__);
        }
        $this->monument = $monument;
        return $this;
    }
    /**
     * Get schuur value
     * @return bool|null
     */
    public function getSchuur()
    {
        return $this->schuur;
    }
    /**
     * Set schuur value
     * @param bool $schuur
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setSchuur($schuur = null)
    {
        // validation for constraint: boolean
        if (!is_null($schuur) && !is_bool($schuur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($schuur)), __LINE__);
        }
        $this->schuur = $schuur;
        return $this;
    }
    /**
     * Get postcode_model_resultaat value
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat|null
     */
    public function getPostcode_model_resultaat()
    {
        return $this->postcode_model_resultaat;
    }
    /**
     * Set postcode_model_resultaat value
     * @param \Webservices\StructType\NbwoPostcodeStraatModelResultaat $postcode_model_resultaat
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setPostcode_model_resultaat(\Webservices\StructType\NbwoPostcodeStraatModelResultaat $postcode_model_resultaat = null)
    {
        $this->postcode_model_resultaat = $postcode_model_resultaat;
        return $this;
    }
    /**
     * Get straat_model_resultaat value
     * @return \Webservices\StructType\NbwoPostcodeStraatModelResultaat|null
     */
    public function getStraat_model_resultaat()
    {
        return $this->straat_model_resultaat;
    }
    /**
     * Set straat_model_resultaat value
     * @param \Webservices\StructType\NbwoPostcodeStraatModelResultaat $straat_model_resultaat
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setStraat_model_resultaat(\Webservices\StructType\NbwoPostcodeStraatModelResultaat $straat_model_resultaat = null)
    {
        $this->straat_model_resultaat = $straat_model_resultaat;
        return $this;
    }
    /**
     * Get vorige_verkoop_model_resultaat value
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat|null
     */
    public function getVorige_verkoop_model_resultaat()
    {
        return $this->vorige_verkoop_model_resultaat;
    }
    /**
     * Set vorige_verkoop_model_resultaat value
     * @param \Webservices\StructType\NbwoVorigeVerkoopModelResultaat $vorige_verkoop_model_resultaat
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setVorige_verkoop_model_resultaat(\Webservices\StructType\NbwoVorigeVerkoopModelResultaat $vorige_verkoop_model_resultaat = null)
    {
        $this->vorige_verkoop_model_resultaat = $vorige_verkoop_model_resultaat;
        return $this;
    }
    /**
     * Get kenmerken_model_resultaat value
     * @return \Webservices\StructType\NbwoKenmerkenModelResultaat|null
     */
    public function getKenmerken_model_resultaat()
    {
        return $this->kenmerken_model_resultaat;
    }
    /**
     * Set kenmerken_model_resultaat value
     * @param \Webservices\StructType\NbwoKenmerkenModelResultaat $kenmerken_model_resultaat
     * @return \Webservices\StructType\NbwoWaarde
     */
    public function setKenmerken_model_resultaat(\Webservices\StructType\NbwoKenmerkenModelResultaat $kenmerken_model_resultaat = null)
    {
        $this->kenmerken_model_resultaat = $kenmerken_model_resultaat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NbwoWaarde
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
