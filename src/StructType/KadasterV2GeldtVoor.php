<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2GeldtVoor StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GeldtVoor extends AbstractStructBase
{
    /**
     * The gezamenlijk_aandeel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GezamenlijkAandeel
     */
    public $gezamenlijk_aandeel;
    /**
     * Constructor method for KadasterV2GeldtVoor
     * @uses KadasterV2GeldtVoor::setGezamenlijk_aandeel()
     * @param \Webservices\StructType\KadasterV2GezamenlijkAandeel $gezamenlijk_aandeel
     */
    public function __construct(\Webservices\StructType\KadasterV2GezamenlijkAandeel $gezamenlijk_aandeel = null)
    {
        $this
            ->setGezamenlijk_aandeel($gezamenlijk_aandeel);
    }
    /**
     * Get gezamenlijk_aandeel value
     * @return \Webservices\StructType\KadasterV2GezamenlijkAandeel|null
     */
    public function getGezamenlijk_aandeel()
    {
        return $this->gezamenlijk_aandeel;
    }
    /**
     * Set gezamenlijk_aandeel value
     * @param \Webservices\StructType\KadasterV2GezamenlijkAandeel $gezamenlijk_aandeel
     * @return \Webservices\StructType\KadasterV2GeldtVoor
     */
    public function setGezamenlijk_aandeel(\Webservices\StructType\KadasterV2GezamenlijkAandeel $gezamenlijk_aandeel = null)
    {
        $this->gezamenlijk_aandeel = $gezamenlijk_aandeel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GeldtVoor
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
