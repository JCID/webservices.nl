<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterKadastraleKaartResultaatV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterKadastraleKaartResultaatV2 extends AbstractStructBase
{
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DocumentOverzicht
     */
    public $overzicht;
    /**
     * The kadastrale_kaart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterKadastraleKaart
     */
    public $kadastrale_kaart;
    /**
     * Constructor method for KadasterKadastraleKaartResultaatV2
     * @uses KadasterKadastraleKaartResultaatV2::setOverzicht()
     * @uses KadasterKadastraleKaartResultaatV2::setKadastrale_kaart()
     * @param \Webservices\StructType\DocumentOverzicht $overzicht
     * @param \Webservices\StructType\KadasterKadastraleKaart $kadastrale_kaart
     */
    public function __construct(\Webservices\StructType\DocumentOverzicht $overzicht = null, \Webservices\StructType\KadasterKadastraleKaart $kadastrale_kaart = null)
    {
        $this
            ->setOverzicht($overzicht)
            ->setKadastrale_kaart($kadastrale_kaart);
    }
    /**
     * Get overzicht value
     * @return \Webservices\StructType\DocumentOverzicht|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\DocumentOverzicht $overzicht
     * @return \Webservices\StructType\KadasterKadastraleKaartResultaatV2
     */
    public function setOverzicht(\Webservices\StructType\DocumentOverzicht $overzicht = null)
    {
        $this->overzicht = $overzicht;
        return $this;
    }
    /**
     * Get kadastrale_kaart value
     * @return \Webservices\StructType\KadasterKadastraleKaart|null
     */
    public function getKadastrale_kaart()
    {
        return $this->kadastrale_kaart;
    }
    /**
     * Set kadastrale_kaart value
     * @param \Webservices\StructType\KadasterKadastraleKaart $kadastrale_kaart
     * @return \Webservices\StructType\KadasterKadastraleKaartResultaatV2
     */
    public function setKadastrale_kaart(\Webservices\StructType\KadasterKadastraleKaart $kadastrale_kaart = null)
    {
        $this->kadastrale_kaart = $kadastrale_kaart;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterKadastraleKaartResultaatV2
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
