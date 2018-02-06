<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2PostbusLocatie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2PostbusLocatie extends AbstractStructBase
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
     * The postbusnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $postbusnummer;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The woonplaats_naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $woonplaats_naam;
    /**
     * Constructor method for KadasterV2PostbusLocatie
     * @uses KadasterV2PostbusLocatie::setId()
     * @uses KadasterV2PostbusLocatie::setIdentificatie()
     * @uses KadasterV2PostbusLocatie::setPostbusnummer()
     * @uses KadasterV2PostbusLocatie::setPostcode()
     * @uses KadasterV2PostbusLocatie::setWoonplaats_naam()
     * @param string $id
     * @param string $identificatie
     * @param int $postbusnummer
     * @param string $postcode
     * @param string $woonplaats_naam
     */
    public function __construct($id = null, $identificatie = null, $postbusnummer = null, $postcode = null, $woonplaats_naam = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setPostbusnummer($postbusnummer)
            ->setPostcode($postcode)
            ->setWoonplaats_naam($woonplaats_naam);
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
     * @return \Webservices\StructType\KadasterV2PostbusLocatie
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
     * @return \Webservices\StructType\KadasterV2PostbusLocatie
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
     * Get postbusnummer value
     * @return int|null
     */
    public function getPostbusnummer()
    {
        return $this->postbusnummer;
    }
    /**
     * Set postbusnummer value
     * @param int $postbusnummer
     * @return \Webservices\StructType\KadasterV2PostbusLocatie
     */
    public function setPostbusnummer($postbusnummer = null)
    {
        // validation for constraint: int
        if (!is_null($postbusnummer) && !is_numeric($postbusnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($postbusnummer)), __LINE__);
        }
        $this->postbusnummer = $postbusnummer;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\KadasterV2PostbusLocatie
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get woonplaats_naam value
     * @return string|null
     */
    public function getWoonplaats_naam()
    {
        return $this->woonplaats_naam;
    }
    /**
     * Set woonplaats_naam value
     * @param string $woonplaats_naam
     * @return \Webservices\StructType\KadasterV2PostbusLocatie
     */
    public function setWoonplaats_naam($woonplaats_naam = null)
    {
        // validation for constraint: string
        if (!is_null($woonplaats_naam) && !is_string($woonplaats_naam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($woonplaats_naam)), __LINE__);
        }
        $this->woonplaats_naam = $woonplaats_naam;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2PostbusLocatie
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
