<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BerichtObjectV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BerichtObjectV2 extends AbstractStructBase
{
    /**
     * The datum_bijgewerkt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_bijgewerkt;
    /**
     * The onroerende_zaak
     * @var \Webservices\StructType\OnroerendeZaak
     */
    public $onroerende_zaak;
    /**
     * The rechten_lijst
     * @var \Webservices\StructType\RechtenLijst
     */
    public $rechten_lijst;
    /**
     * The personen
     * @var \Webservices\ArrayType\PersoonV2Array
     */
    public $personen;
    /**
     * The stukken
     * @var \Webservices\ArrayType\StukArray
     */
    public $stukken;
    /**
     * The gemeentestukken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GemeenteStukArray
     */
    public $gemeentestukken;
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * Constructor method for BerichtObjectV2
     * @uses BerichtObjectV2::setDatum_bijgewerkt()
     * @uses BerichtObjectV2::setOnroerende_zaak()
     * @uses BerichtObjectV2::setRechten_lijst()
     * @uses BerichtObjectV2::setPersonen()
     * @uses BerichtObjectV2::setStukken()
     * @uses BerichtObjectV2::setGemeentestukken()
     * @uses BerichtObjectV2::setDocument()
     * @param string $datum_bijgewerkt
     * @param \Webservices\StructType\OnroerendeZaak $onroerende_zaak
     * @param \Webservices\StructType\RechtenLijst $rechten_lijst
     * @param \Webservices\ArrayType\PersoonV2Array $personen
     * @param \Webservices\ArrayType\StukArray $stukken
     * @param \Webservices\ArrayType\GemeenteStukArray $gemeentestukken
     * @param string $document
     */
    public function __construct($datum_bijgewerkt = null, \Webservices\StructType\OnroerendeZaak $onroerende_zaak = null, \Webservices\StructType\RechtenLijst $rechten_lijst = null, \Webservices\ArrayType\PersoonV2Array $personen = null, \Webservices\ArrayType\StukArray $stukken = null, \Webservices\ArrayType\GemeenteStukArray $gemeentestukken = null, $document = null)
    {
        $this
            ->setDatum_bijgewerkt($datum_bijgewerkt)
            ->setOnroerende_zaak($onroerende_zaak)
            ->setRechten_lijst($rechten_lijst)
            ->setPersonen($personen)
            ->setStukken($stukken)
            ->setGemeentestukken($gemeentestukken)
            ->setDocument($document);
    }
    /**
     * Get datum_bijgewerkt value
     * @return string|null
     */
    public function getDatum_bijgewerkt()
    {
        return $this->datum_bijgewerkt;
    }
    /**
     * Set datum_bijgewerkt value
     * @param string $datum_bijgewerkt
     * @return \Webservices\StructType\BerichtObjectV2
     */
    public function setDatum_bijgewerkt($datum_bijgewerkt = null)
    {
        // validation for constraint: string
        if (!is_null($datum_bijgewerkt) && !is_string($datum_bijgewerkt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_bijgewerkt)), __LINE__);
        }
        $this->datum_bijgewerkt = $datum_bijgewerkt;
        return $this;
    }
    /**
     * Get onroerende_zaak value
     * @return \Webservices\StructType\OnroerendeZaak|null
     */
    public function getOnroerende_zaak()
    {
        return $this->onroerende_zaak;
    }
    /**
     * Set onroerende_zaak value
     * @param \Webservices\StructType\OnroerendeZaak $onroerende_zaak
     * @return \Webservices\StructType\BerichtObjectV2
     */
    public function setOnroerende_zaak(\Webservices\StructType\OnroerendeZaak $onroerende_zaak = null)
    {
        $this->onroerende_zaak = $onroerende_zaak;
        return $this;
    }
    /**
     * Get rechten_lijst value
     * @return \Webservices\StructType\RechtenLijst|null
     */
    public function getRechten_lijst()
    {
        return $this->rechten_lijst;
    }
    /**
     * Set rechten_lijst value
     * @param \Webservices\StructType\RechtenLijst $rechten_lijst
     * @return \Webservices\StructType\BerichtObjectV2
     */
    public function setRechten_lijst(\Webservices\StructType\RechtenLijst $rechten_lijst = null)
    {
        $this->rechten_lijst = $rechten_lijst;
        return $this;
    }
    /**
     * Get personen value
     * @return \Webservices\ArrayType\PersoonV2Array|null
     */
    public function getPersonen()
    {
        return $this->personen;
    }
    /**
     * Set personen value
     * @param \Webservices\ArrayType\PersoonV2Array $personen
     * @return \Webservices\StructType\BerichtObjectV2
     */
    public function setPersonen(\Webservices\ArrayType\PersoonV2Array $personen = null)
    {
        $this->personen = $personen;
        return $this;
    }
    /**
     * Get stukken value
     * @return \Webservices\ArrayType\StukArray|null
     */
    public function getStukken()
    {
        return $this->stukken;
    }
    /**
     * Set stukken value
     * @param \Webservices\ArrayType\StukArray $stukken
     * @return \Webservices\StructType\BerichtObjectV2
     */
    public function setStukken(\Webservices\ArrayType\StukArray $stukken = null)
    {
        $this->stukken = $stukken;
        return $this;
    }
    /**
     * Get gemeentestukken value
     * @return \Webservices\ArrayType\GemeenteStukArray|null
     */
    public function getGemeentestukken()
    {
        return $this->gemeentestukken;
    }
    /**
     * Set gemeentestukken value
     * @param \Webservices\ArrayType\GemeenteStukArray $gemeentestukken
     * @return \Webservices\StructType\BerichtObjectV2
     */
    public function setGemeentestukken(\Webservices\ArrayType\GemeenteStukArray $gemeentestukken = null)
    {
        $this->gemeentestukken = $gemeentestukken;
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\BerichtObjectV2
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BerichtObjectV2
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
