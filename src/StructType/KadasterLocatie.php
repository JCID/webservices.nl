<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterLocatie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterLocatie extends AbstractStructBase
{
    /**
     * The locatie_binnenland
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterLocatieBinnenland
     */
    public $locatie_binnenland;
    /**
     * The locatie_buitenland
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterLocatieBuitenland
     */
    public $locatie_buitenland;
    /**
     * Constructor method for kadasterLocatie
     * @uses KadasterLocatie::setLocatie_binnenland()
     * @uses KadasterLocatie::setLocatie_buitenland()
     * @param \Webservices\StructType\KadasterLocatieBinnenland $locatie_binnenland
     * @param \Webservices\StructType\KadasterLocatieBuitenland $locatie_buitenland
     */
    public function __construct(\Webservices\StructType\KadasterLocatieBinnenland $locatie_binnenland = null, \Webservices\StructType\KadasterLocatieBuitenland $locatie_buitenland = null)
    {
        $this
            ->setLocatie_binnenland($locatie_binnenland)
            ->setLocatie_buitenland($locatie_buitenland);
    }
    /**
     * Get locatie_binnenland value
     * @return \Webservices\StructType\KadasterLocatieBinnenland|null
     */
    public function getLocatie_binnenland()
    {
        return $this->locatie_binnenland;
    }
    /**
     * Set locatie_binnenland value
     * @param \Webservices\StructType\KadasterLocatieBinnenland $locatie_binnenland
     * @return \Webservices\StructType\KadasterLocatie
     */
    public function setLocatie_binnenland(\Webservices\StructType\KadasterLocatieBinnenland $locatie_binnenland = null)
    {
        $this->locatie_binnenland = $locatie_binnenland;
        return $this;
    }
    /**
     * Get locatie_buitenland value
     * @return \Webservices\StructType\KadasterLocatieBuitenland|null
     */
    public function getLocatie_buitenland()
    {
        return $this->locatie_buitenland;
    }
    /**
     * Set locatie_buitenland value
     * @param \Webservices\StructType\KadasterLocatieBuitenland $locatie_buitenland
     * @return \Webservices\StructType\KadasterLocatie
     */
    public function setLocatie_buitenland(\Webservices\StructType\KadasterLocatieBuitenland $locatie_buitenland = null)
    {
        $this->locatie_buitenland = $locatie_buitenland;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterLocatie
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
