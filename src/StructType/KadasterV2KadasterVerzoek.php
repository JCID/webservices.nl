<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KadasterVerzoek StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KadasterVerzoek extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificatie;
    /**
     * The aard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard;
    /**
     * The heeft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadasterVerzoekHeeft
     */
    public $heeft;
    /**
     * Constructor method for KadasterV2KadasterVerzoek
     * @uses KadasterV2KadasterVerzoek::setId()
     * @uses KadasterV2KadasterVerzoek::setIdentificatie()
     * @uses KadasterV2KadasterVerzoek::setAard()
     * @uses KadasterV2KadasterVerzoek::setHeeft()
     * @param string $id
     * @param string $identificatie
     * @param string $aard
     * @param \Webservices\StructType\KadasterV2KadasterVerzoekHeeft $heeft
     */
    public function __construct($id = null, $identificatie = null, $aard = null, \Webservices\StructType\KadasterV2KadasterVerzoekHeeft $heeft = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAard($aard)
            ->setHeeft($heeft);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\KadasterV2KadasterVerzoek
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get identificatie value
     * @return string|null
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }
    /**
     * Set identificatie value
     * @param string $identificatie
     * @return \Webservices\StructType\KadasterV2KadasterVerzoek
     */
    public function setIdentificatie($identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($identificatie) && !is_string($identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificatie)), __LINE__);
        }
        $this->identificatie = $identificatie;
        return $this;
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
     * @return \Webservices\StructType\KadasterV2KadasterVerzoek
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
     * Get heeft value
     * @return \Webservices\StructType\KadasterV2KadasterVerzoekHeeft|null
     */
    public function getHeeft()
    {
        return $this->heeft;
    }
    /**
     * Set heeft value
     * @param \Webservices\StructType\KadasterV2KadasterVerzoekHeeft $heeft
     * @return \Webservices\StructType\KadasterV2KadasterVerzoek
     */
    public function setHeeft(\Webservices\StructType\KadasterV2KadasterVerzoekHeeft $heeft = null)
    {
        $this->heeft = $heeft;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KadasterVerzoek
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
