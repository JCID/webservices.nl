<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Bijlage StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Bijlage extends AbstractStructBase
{
    /**
     * The aard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard;
    /**
     * The tijdstip_aanbieding_bijlage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2TijdstipType
     */
    public $tijdstip_aanbieding_bijlage;
    /**
     * Constructor method for KadasterV2Bijlage
     * @uses KadasterV2Bijlage::setAard()
     * @uses KadasterV2Bijlage::setTijdstip_aanbieding_bijlage()
     * @param string $aard
     * @param \Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding_bijlage
     */
    public function __construct($aard = null, \Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding_bijlage = null)
    {
        $this
            ->setAard($aard)
            ->setTijdstip_aanbieding_bijlage($tijdstip_aanbieding_bijlage);
    }
    /**
     * Get aard value
     * @return string|null
     */
    public function getAard()
    {
        return $this->aard;
    }
    /**
     * Set aard value
     * @param string $aard
     * @return \Webservices\StructType\KadasterV2Bijlage
     */
    public function setAard($aard = null)
    {
        // validation for constraint: string
        if (!is_null($aard) && !is_string($aard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard)), __LINE__);
        }
        $this->aard = $aard;
        return $this;
    }
    /**
     * Get tijdstip_aanbieding_bijlage value
     * @return \Webservices\StructType\KadasterV2TijdstipType|null
     */
    public function getTijdstip_aanbieding_bijlage()
    {
        return $this->tijdstip_aanbieding_bijlage;
    }
    /**
     * Set tijdstip_aanbieding_bijlage value
     * @param \Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding_bijlage
     * @return \Webservices\StructType\KadasterV2Bijlage
     */
    public function setTijdstip_aanbieding_bijlage(\Webservices\StructType\KadasterV2TijdstipType $tijdstip_aanbieding_bijlage = null)
    {
        $this->tijdstip_aanbieding_bijlage = $tijdstip_aanbieding_bijlage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Bijlage
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
