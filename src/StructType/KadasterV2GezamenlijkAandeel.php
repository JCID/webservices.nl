<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2GezamenlijkAandeel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GezamenlijkAandeel extends AbstractStructBase
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
     * The aandeel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BreukType
     */
    public $aandeel;
    /**
     * Constructor method for KadasterV2GezamenlijkAandeel
     * @uses KadasterV2GezamenlijkAandeel::setId()
     * @uses KadasterV2GezamenlijkAandeel::setIdentificatie()
     * @uses KadasterV2GezamenlijkAandeel::setAandeel()
     * @param string $id
     * @param string $identificatie
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel
     */
    public function __construct($id = null, $identificatie = null, \Webservices\StructType\KadasterV2BreukType $aandeel = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAandeel($aandeel);
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
     * @return \Webservices\StructType\KadasterV2GezamenlijkAandeel
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
     * @return \Webservices\StructType\KadasterV2GezamenlijkAandeel
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
     * Get aandeel value
     * @return \Webservices\StructType\KadasterV2BreukType|null
     */
    public function getAandeel()
    {
        return $this->aandeel;
    }
    /**
     * Set aandeel value
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel
     * @return \Webservices\StructType\KadasterV2GezamenlijkAandeel
     */
    public function setAandeel(\Webservices\StructType\KadasterV2BreukType $aandeel = null)
    {
        $this->aandeel = $aandeel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GezamenlijkAandeel
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
