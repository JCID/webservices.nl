<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KadastraalObjectNotificatie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KadastraalObjectNotificatie extends AbstractStructBase
{
    /**
     * The van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2StukVan
     */
    public $van;
    /**
     * The ten_behoeve_van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2OverzichtBetreft
     */
    public $ten_behoeve_van;
    /**
     * Constructor method for KadasterV2KadastraalObjectNotificatie
     * @uses KadasterV2KadastraalObjectNotificatie::setVan()
     * @uses KadasterV2KadastraalObjectNotificatie::setTen_behoeve_van()
     * @param \Webservices\StructType\KadasterV2StukVan $van
     * @param \Webservices\StructType\KadasterV2OverzichtBetreft $ten_behoeve_van
     */
    public function __construct(\Webservices\StructType\KadasterV2StukVan $van = null, \Webservices\StructType\KadasterV2OverzichtBetreft $ten_behoeve_van = null)
    {
        $this
            ->setVan($van)
            ->setTen_behoeve_van($ten_behoeve_van);
    }
    /**
     * Get van value
     * @return \Webservices\StructType\KadasterV2StukVan|null
     */
    public function getVan()
    {
        return $this->van;
    }
    /**
     * Set van value
     * @param \Webservices\StructType\KadasterV2StukVan $van
     * @return \Webservices\StructType\KadasterV2KadastraalObjectNotificatie
     */
    public function setVan(\Webservices\StructType\KadasterV2StukVan $van = null)
    {
        $this->van = $van;
        return $this;
    }
    /**
     * Get ten_behoeve_van value
     * @return \Webservices\StructType\KadasterV2OverzichtBetreft|null
     */
    public function getTen_behoeve_van()
    {
        return $this->ten_behoeve_van;
    }
    /**
     * Set ten_behoeve_van value
     * @param \Webservices\StructType\KadasterV2OverzichtBetreft $ten_behoeve_van
     * @return \Webservices\StructType\KadasterV2KadastraalObjectNotificatie
     */
    public function setTen_behoeve_van(\Webservices\StructType\KadasterV2OverzichtBetreft $ten_behoeve_van = null)
    {
        $this->ten_behoeve_van = $ten_behoeve_van;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KadastraalObjectNotificatie
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
