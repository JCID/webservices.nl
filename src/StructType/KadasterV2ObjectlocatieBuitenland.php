<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2ObjectlocatieBuitenland StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2ObjectlocatieBuitenland extends AbstractStructBase
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
     * The adresgegevens
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AdresgegevensBuitenland
     */
    public $adresgegevens;
    /**
     * Constructor method for KadasterV2ObjectlocatieBuitenland
     * @uses KadasterV2ObjectlocatieBuitenland::setId()
     * @uses KadasterV2ObjectlocatieBuitenland::setIdentificatie()
     * @uses KadasterV2ObjectlocatieBuitenland::setAdresgegevens()
     * @param string $id
     * @param string $identificatie
     * @param \Webservices\StructType\KadasterV2AdresgegevensBuitenland $adresgegevens
     */
    public function __construct($id = null, $identificatie = null, \Webservices\StructType\KadasterV2AdresgegevensBuitenland $adresgegevens = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAdresgegevens($adresgegevens);
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
     * @return \Webservices\StructType\KadasterV2ObjectlocatieBuitenland
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
     * @return \Webservices\StructType\KadasterV2ObjectlocatieBuitenland
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
     * Get adresgegevens value
     * @return \Webservices\StructType\KadasterV2AdresgegevensBuitenland|null
     */
    public function getAdresgegevens()
    {
        return $this->adresgegevens;
    }
    /**
     * Set adresgegevens value
     * @param \Webservices\StructType\KadasterV2AdresgegevensBuitenland $adresgegevens
     * @return \Webservices\StructType\KadasterV2ObjectlocatieBuitenland
     */
    public function setAdresgegevens(\Webservices\StructType\KadasterV2AdresgegevensBuitenland $adresgegevens = null)
    {
        $this->adresgegevens = $adresgegevens;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2ObjectlocatieBuitenland
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
