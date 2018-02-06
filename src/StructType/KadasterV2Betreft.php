<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Betreft StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Betreft extends AbstractStructBase
{
    /**
     * The kadastraal_object
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadastraalObject
     */
    public $kadastraal_object;
    /**
     * The onroerende_zaak
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2OnroerendeZaakObject
     */
    public $onroerende_zaak;
    /**
     * Constructor method for KadasterV2Betreft
     * @uses KadasterV2Betreft::setKadastraal_object()
     * @uses KadasterV2Betreft::setOnroerende_zaak()
     * @param \Webservices\StructType\KadasterV2KadastraalObject $kadastraal_object
     * @param \Webservices\StructType\KadasterV2OnroerendeZaakObject $onroerende_zaak
     */
    public function __construct(\Webservices\StructType\KadasterV2KadastraalObject $kadastraal_object = null, \Webservices\StructType\KadasterV2OnroerendeZaakObject $onroerende_zaak = null)
    {
        $this
            ->setKadastraal_object($kadastraal_object)
            ->setOnroerende_zaak($onroerende_zaak);
    }
    /**
     * Get kadastraal_object value
     * @return \Webservices\StructType\KadasterV2KadastraalObject|null
     */
    public function getKadastraal_object()
    {
        return $this->kadastraal_object;
    }
    /**
     * Set kadastraal_object value
     * @param \Webservices\StructType\KadasterV2KadastraalObject $kadastraal_object
     * @return \Webservices\StructType\KadasterV2Betreft
     */
    public function setKadastraal_object(\Webservices\StructType\KadasterV2KadastraalObject $kadastraal_object = null)
    {
        $this->kadastraal_object = $kadastraal_object;
        return $this;
    }
    /**
     * Get onroerende_zaak value
     * @return \Webservices\StructType\KadasterV2OnroerendeZaakObject|null
     */
    public function getOnroerende_zaak()
    {
        return $this->onroerende_zaak;
    }
    /**
     * Set onroerende_zaak value
     * @param \Webservices\StructType\KadasterV2OnroerendeZaakObject $onroerende_zaak
     * @return \Webservices\StructType\KadasterV2Betreft
     */
    public function setOnroerende_zaak(\Webservices\StructType\KadasterV2OnroerendeZaakObject $onroerende_zaak = null)
    {
        $this->onroerende_zaak = $onroerende_zaak;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Betreft
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
