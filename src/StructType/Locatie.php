<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Locatie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Locatie extends AbstractStructBase
{
    /**
     * The locatie_binnenland
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\LocatieBinnenland
     */
    public $locatie_binnenland;
    /**
     * The locatie_buitenland
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\LocatieBuitenland
     */
    public $locatie_buitenland;
    /**
     * Constructor method for Locatie
     * @uses Locatie::setLocatie_binnenland()
     * @uses Locatie::setLocatie_buitenland()
     * @param \Webservices\StructType\LocatieBinnenland $locatie_binnenland
     * @param \Webservices\StructType\LocatieBuitenland $locatie_buitenland
     */
    public function __construct(\Webservices\StructType\LocatieBinnenland $locatie_binnenland = null, \Webservices\StructType\LocatieBuitenland $locatie_buitenland = null)
    {
        $this
            ->setLocatie_binnenland($locatie_binnenland)
            ->setLocatie_buitenland($locatie_buitenland);
    }
    /**
     * Get locatie_binnenland value
     * @return \Webservices\StructType\LocatieBinnenland|null
     */
    public function getLocatie_binnenland()
    {
        return $this->locatie_binnenland;
    }
    /**
     * Set locatie_binnenland value
     * @param \Webservices\StructType\LocatieBinnenland $locatie_binnenland
     * @return \Webservices\StructType\Locatie
     */
    public function setLocatie_binnenland(\Webservices\StructType\LocatieBinnenland $locatie_binnenland = null)
    {
        $this->locatie_binnenland = $locatie_binnenland;
        return $this;
    }
    /**
     * Get locatie_buitenland value
     * @return \Webservices\StructType\LocatieBuitenland|null
     */
    public function getLocatie_buitenland()
    {
        return $this->locatie_buitenland;
    }
    /**
     * Set locatie_buitenland value
     * @param \Webservices\StructType\LocatieBuitenland $locatie_buitenland
     * @return \Webservices\StructType\Locatie
     */
    public function setLocatie_buitenland(\Webservices\StructType\LocatieBuitenland $locatie_buitenland = null)
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
     * @return \Webservices\StructType\Locatie
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
