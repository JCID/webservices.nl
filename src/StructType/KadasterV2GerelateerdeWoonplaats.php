<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2GerelateerdeWoonplaats StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GerelateerdeWoonplaats extends AbstractStructBase
{
    /**
     * The woonplaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Woonplaats
     */
    public $woonplaats;
    /**
     * Constructor method for KadasterV2GerelateerdeWoonplaats
     * @uses KadasterV2GerelateerdeWoonplaats::setWoonplaats()
     * @param \Webservices\StructType\KadasterV2Woonplaats $woonplaats
     */
    public function __construct(\Webservices\StructType\KadasterV2Woonplaats $woonplaats = null)
    {
        $this
            ->setWoonplaats($woonplaats);
    }
    /**
     * Get woonplaats value
     * @return \Webservices\StructType\KadasterV2Woonplaats|null
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }
    /**
     * Set woonplaats value
     * @param \Webservices\StructType\KadasterV2Woonplaats $woonplaats
     * @return \Webservices\StructType\KadasterV2GerelateerdeWoonplaats
     */
    public function setWoonplaats(\Webservices\StructType\KadasterV2Woonplaats $woonplaats = null)
    {
        $this->woonplaats = $woonplaats;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GerelateerdeWoonplaats
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
