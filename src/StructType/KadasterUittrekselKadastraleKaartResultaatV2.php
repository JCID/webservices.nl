<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterUittrekselKadastraleKaartResultaatV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterUittrekselKadastraleKaartResultaatV2 extends AbstractStructBase
{
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterOverzichtV2
     */
    public $overzicht;
    /**
     * The kadastrale_kaart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterUittrekselKadastraleKaartV2
     */
    public $kadastrale_kaart;
    /**
     * Constructor method for KadasterUittrekselKadastraleKaartResultaatV2
     * @uses KadasterUittrekselKadastraleKaartResultaatV2::setOverzicht()
     * @uses KadasterUittrekselKadastraleKaartResultaatV2::setKadastrale_kaart()
     * @param \Webservices\StructType\KadasterOverzichtV2 $overzicht
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartV2 $kadastrale_kaart
     */
    public function __construct(\Webservices\StructType\KadasterOverzichtV2 $overzicht = null, \Webservices\StructType\KadasterUittrekselKadastraleKaartV2 $kadastrale_kaart = null)
    {
        $this
            ->setOverzicht($overzicht)
            ->setKadastrale_kaart($kadastrale_kaart);
    }
    /**
     * Get overzicht value
     * @return \Webservices\StructType\KadasterOverzichtV2|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\KadasterOverzichtV2 $overzicht
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2
     */
    public function setOverzicht(\Webservices\StructType\KadasterOverzichtV2 $overzicht = null)
    {
        $this->overzicht = $overzicht;
        return $this;
    }
    /**
     * Get kadastrale_kaart value
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartV2|null
     */
    public function getKadastrale_kaart()
    {
        return $this->kadastrale_kaart;
    }
    /**
     * Set kadastrale_kaart value
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartV2 $kadastrale_kaart
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2
     */
    public function setKadastrale_kaart(\Webservices\StructType\KadasterUittrekselKadastraleKaartV2 $kadastrale_kaart = null)
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
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2
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
