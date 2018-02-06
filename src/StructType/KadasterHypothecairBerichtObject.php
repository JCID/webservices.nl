<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterHypothecairBerichtObject StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterHypothecairBerichtObject extends AbstractStructBase
{
    /**
     * The datum_bijgewerkt
     * @var string
     */
    public $datum_bijgewerkt;
    /**
     * The onroerende_zaak
     * @var \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public $onroerende_zaak;
    /**
     * The hypotheek_stuk_lijst
     * @var \Webservices\StructType\KadasterHypotheekStukLijst
     */
    public $hypotheek_stuk_lijst;
    /**
     * The hypothecair_document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterBerichtObjectDocument
     */
    public $hypothecair_document;
    /**
     * Constructor method for kadasterHypothecairBerichtObject
     * @uses KadasterHypothecairBerichtObject::setDatum_bijgewerkt()
     * @uses KadasterHypothecairBerichtObject::setOnroerende_zaak()
     * @uses KadasterHypothecairBerichtObject::setHypotheek_stuk_lijst()
     * @uses KadasterHypothecairBerichtObject::setHypothecair_document()
     * @param string $datum_bijgewerkt
     * @param \Webservices\StructType\KadasterBeknoptOnroerendeZaak $onroerende_zaak
     * @param \Webservices\StructType\KadasterHypotheekStukLijst $hypotheek_stuk_lijst
     * @param \Webservices\StructType\KadasterBerichtObjectDocument $hypothecair_document
     */
    public function __construct($datum_bijgewerkt = null, \Webservices\StructType\KadasterBeknoptOnroerendeZaak $onroerende_zaak = null, \Webservices\StructType\KadasterHypotheekStukLijst $hypotheek_stuk_lijst = null, \Webservices\StructType\KadasterBerichtObjectDocument $hypothecair_document = null)
    {
        $this
            ->setDatum_bijgewerkt($datum_bijgewerkt)
            ->setOnroerende_zaak($onroerende_zaak)
            ->setHypotheek_stuk_lijst($hypotheek_stuk_lijst)
            ->setHypothecair_document($hypothecair_document);
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
     * @return \Webservices\StructType\KadasterHypothecairBerichtObject
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
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak|null
     */
    public function getOnroerende_zaak()
    {
        return $this->onroerende_zaak;
    }
    /**
     * Set onroerende_zaak value
     * @param \Webservices\StructType\KadasterBeknoptOnroerendeZaak $onroerende_zaak
     * @return \Webservices\StructType\KadasterHypothecairBerichtObject
     */
    public function setOnroerende_zaak(\Webservices\StructType\KadasterBeknoptOnroerendeZaak $onroerende_zaak = null)
    {
        $this->onroerende_zaak = $onroerende_zaak;
        return $this;
    }
    /**
     * Get hypotheek_stuk_lijst value
     * @return \Webservices\StructType\KadasterHypotheekStukLijst|null
     */
    public function getHypotheek_stuk_lijst()
    {
        return $this->hypotheek_stuk_lijst;
    }
    /**
     * Set hypotheek_stuk_lijst value
     * @param \Webservices\StructType\KadasterHypotheekStukLijst $hypotheek_stuk_lijst
     * @return \Webservices\StructType\KadasterHypothecairBerichtObject
     */
    public function setHypotheek_stuk_lijst(\Webservices\StructType\KadasterHypotheekStukLijst $hypotheek_stuk_lijst = null)
    {
        $this->hypotheek_stuk_lijst = $hypotheek_stuk_lijst;
        return $this;
    }
    /**
     * Get hypothecair_document value
     * @return \Webservices\StructType\KadasterBerichtObjectDocument|null
     */
    public function getHypothecair_document()
    {
        return $this->hypothecair_document;
    }
    /**
     * Set hypothecair_document value
     * @param \Webservices\StructType\KadasterBerichtObjectDocument $hypothecair_document
     * @return \Webservices\StructType\KadasterHypothecairBerichtObject
     */
    public function setHypothecair_document(\Webservices\StructType\KadasterBerichtObjectDocument $hypothecair_document = null)
    {
        $this->hypothecair_document = $hypothecair_document;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterHypothecairBerichtObject
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
