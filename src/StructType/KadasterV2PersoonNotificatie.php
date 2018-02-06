<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2PersoonNotificatie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2PersoonNotificatie extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
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
     * @var \Webservices\StructType\KadasterV2TenBehoeveVan
     */
    public $ten_behoeve_van;
    /**
     * Constructor method for KadasterV2PersoonNotificatie
     * @uses KadasterV2PersoonNotificatie::setType()
     * @uses KadasterV2PersoonNotificatie::setVan()
     * @uses KadasterV2PersoonNotificatie::setTen_behoeve_van()
     * @param string $type
     * @param \Webservices\StructType\KadasterV2StukVan $van
     * @param \Webservices\StructType\KadasterV2TenBehoeveVan $ten_behoeve_van
     */
    public function __construct($type = null, \Webservices\StructType\KadasterV2StukVan $van = null, \Webservices\StructType\KadasterV2TenBehoeveVan $ten_behoeve_van = null)
    {
        $this
            ->setType($type)
            ->setVan($van)
            ->setTen_behoeve_van($ten_behoeve_van);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\KadasterV2PersoonNotificatie
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
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
     * @return \Webservices\StructType\KadasterV2PersoonNotificatie
     */
    public function setVan(\Webservices\StructType\KadasterV2StukVan $van = null)
    {
        $this->van = $van;
        return $this;
    }
    /**
     * Get ten_behoeve_van value
     * @return \Webservices\StructType\KadasterV2TenBehoeveVan|null
     */
    public function getTen_behoeve_van()
    {
        return $this->ten_behoeve_van;
    }
    /**
     * Set ten_behoeve_van value
     * @param \Webservices\StructType\KadasterV2TenBehoeveVan $ten_behoeve_van
     * @return \Webservices\StructType\KadasterV2PersoonNotificatie
     */
    public function setTen_behoeve_van(\Webservices\StructType\KadasterV2TenBehoeveVan $ten_behoeve_van = null)
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
     * @return \Webservices\StructType\KadasterV2PersoonNotificatie
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
