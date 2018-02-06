<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2AddressLocatie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2AddressLocatie extends AbstractStructBase
{
    /**
     * The objectlocatie_binnenland
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2ObjectlocatieBinnenland
     */
    public $objectlocatie_binnenland;
    /**
     * The objectlocatie_buitenland
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2ObjectlocatieBuitenland
     */
    public $objectlocatie_buitenland;
    /**
     * The postbus_locatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2PostbusLocatie
     */
    public $postbus_locatie;
    /**
     * Constructor method for KadasterV2AddressLocatie
     * @uses KadasterV2AddressLocatie::setObjectlocatie_binnenland()
     * @uses KadasterV2AddressLocatie::setObjectlocatie_buitenland()
     * @uses KadasterV2AddressLocatie::setPostbus_locatie()
     * @param \Webservices\StructType\KadasterV2ObjectlocatieBinnenland $objectlocatie_binnenland
     * @param \Webservices\StructType\KadasterV2ObjectlocatieBuitenland $objectlocatie_buitenland
     * @param \Webservices\StructType\KadasterV2PostbusLocatie $postbus_locatie
     */
    public function __construct(\Webservices\StructType\KadasterV2ObjectlocatieBinnenland $objectlocatie_binnenland = null, \Webservices\StructType\KadasterV2ObjectlocatieBuitenland $objectlocatie_buitenland = null, \Webservices\StructType\KadasterV2PostbusLocatie $postbus_locatie = null)
    {
        $this
            ->setObjectlocatie_binnenland($objectlocatie_binnenland)
            ->setObjectlocatie_buitenland($objectlocatie_buitenland)
            ->setPostbus_locatie($postbus_locatie);
    }
    /**
     * Get objectlocatie_binnenland value
     * @return \Webservices\StructType\KadasterV2ObjectlocatieBinnenland|null
     */
    public function getObjectlocatie_binnenland()
    {
        return $this->objectlocatie_binnenland;
    }
    /**
     * Set objectlocatie_binnenland value
     * @param \Webservices\StructType\KadasterV2ObjectlocatieBinnenland $objectlocatie_binnenland
     * @return \Webservices\StructType\KadasterV2AddressLocatie
     */
    public function setObjectlocatie_binnenland(\Webservices\StructType\KadasterV2ObjectlocatieBinnenland $objectlocatie_binnenland = null)
    {
        $this->objectlocatie_binnenland = $objectlocatie_binnenland;
        return $this;
    }
    /**
     * Get objectlocatie_buitenland value
     * @return \Webservices\StructType\KadasterV2ObjectlocatieBuitenland|null
     */
    public function getObjectlocatie_buitenland()
    {
        return $this->objectlocatie_buitenland;
    }
    /**
     * Set objectlocatie_buitenland value
     * @param \Webservices\StructType\KadasterV2ObjectlocatieBuitenland $objectlocatie_buitenland
     * @return \Webservices\StructType\KadasterV2AddressLocatie
     */
    public function setObjectlocatie_buitenland(\Webservices\StructType\KadasterV2ObjectlocatieBuitenland $objectlocatie_buitenland = null)
    {
        $this->objectlocatie_buitenland = $objectlocatie_buitenland;
        return $this;
    }
    /**
     * Get postbus_locatie value
     * @return \Webservices\StructType\KadasterV2PostbusLocatie|null
     */
    public function getPostbus_locatie()
    {
        return $this->postbus_locatie;
    }
    /**
     * Set postbus_locatie value
     * @param \Webservices\StructType\KadasterV2PostbusLocatie $postbus_locatie
     * @return \Webservices\StructType\KadasterV2AddressLocatie
     */
    public function setPostbus_locatie(\Webservices\StructType\KadasterV2PostbusLocatie $postbus_locatie = null)
    {
        $this->postbus_locatie = $postbus_locatie;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2AddressLocatie
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
