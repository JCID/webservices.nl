<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2OverzichtBetreft StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2OverzichtBetreft extends AbstractStructBase
{
    /**
     * The onroerende_zaak
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2OnroerendeZaakArray
     */
    public $onroerende_zaak;
    /**
     * Constructor method for KadasterV2OverzichtBetreft
     * @uses KadasterV2OverzichtBetreft::setOnroerende_zaak()
     * @param \Webservices\ArrayType\KadasterV2OnroerendeZaakArray $onroerende_zaak
     */
    public function __construct(\Webservices\ArrayType\KadasterV2OnroerendeZaakArray $onroerende_zaak = null)
    {
        $this
            ->setOnroerende_zaak($onroerende_zaak);
    }
    /**
     * Get onroerende_zaak value
     * @return \Webservices\ArrayType\KadasterV2OnroerendeZaakArray|null
     */
    public function getOnroerende_zaak()
    {
        return $this->onroerende_zaak;
    }
    /**
     * Set onroerende_zaak value
     * @param \Webservices\ArrayType\KadasterV2OnroerendeZaakArray $onroerende_zaak
     * @return \Webservices\StructType\KadasterV2OverzichtBetreft
     */
    public function setOnroerende_zaak(\Webservices\ArrayType\KadasterV2OnroerendeZaakArray $onroerende_zaak = null)
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
     * @return \Webservices\StructType\KadasterV2OverzichtBetreft
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
