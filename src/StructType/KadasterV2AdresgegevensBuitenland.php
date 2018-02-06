<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2AdresgegevensBuitenland StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2AdresgegevensBuitenland extends AbstractStructBase
{
    /**
     * The adres_buitenland
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AdresBuitenland
     */
    public $adres_buitenland;
    /**
     * Constructor method for KadasterV2AdresgegevensBuitenland
     * @uses KadasterV2AdresgegevensBuitenland::setAdres_buitenland()
     * @param \Webservices\StructType\KadasterV2AdresBuitenland $adres_buitenland
     */
    public function __construct(\Webservices\StructType\KadasterV2AdresBuitenland $adres_buitenland = null)
    {
        $this
            ->setAdres_buitenland($adres_buitenland);
    }
    /**
     * Get adres_buitenland value
     * @return \Webservices\StructType\KadasterV2AdresBuitenland|null
     */
    public function getAdres_buitenland()
    {
        return $this->adres_buitenland;
    }
    /**
     * Set adres_buitenland value
     * @param \Webservices\StructType\KadasterV2AdresBuitenland $adres_buitenland
     * @return \Webservices\StructType\KadasterV2AdresgegevensBuitenland
     */
    public function setAdres_buitenland(\Webservices\StructType\KadasterV2AdresBuitenland $adres_buitenland = null)
    {
        $this->adres_buitenland = $adres_buitenland;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2AdresgegevensBuitenland
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
