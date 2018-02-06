<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterKadastraleKaart StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterKadastraleKaart extends AbstractStructBase
{
    /**
     * The kaart
     * @var string
     */
    public $kaart;
    /**
     * The schaal
     * @var int
     */
    public $schaal;
    /**
     * The afbeeldingen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\Base64BinaryArray
     */
    public $afbeeldingen;
    /**
     * Constructor method for KadasterKadastraleKaart
     * @uses KadasterKadastraleKaart::setKaart()
     * @uses KadasterKadastraleKaart::setSchaal()
     * @uses KadasterKadastraleKaart::setAfbeeldingen()
     * @param string $kaart
     * @param int $schaal
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     */
    public function __construct($kaart = null, $schaal = null, \Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this
            ->setKaart($kaart)
            ->setSchaal($schaal)
            ->setAfbeeldingen($afbeeldingen);
    }
    /**
     * Get kaart value
     * @return string|null
     */
    public function getKaart()
    {
        return $this->kaart;
    }
    /**
     * Set kaart value
     * @param string $kaart
     * @return \Webservices\StructType\KadasterKadastraleKaart
     */
    public function setKaart($kaart = null)
    {
        // validation for constraint: string
        if (!is_null($kaart) && !is_string($kaart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kaart)), __LINE__);
        }
        $this->kaart = $kaart;
        return $this;
    }
    /**
     * Get schaal value
     * @return int|null
     */
    public function getSchaal()
    {
        return $this->schaal;
    }
    /**
     * Set schaal value
     * @param int $schaal
     * @return \Webservices\StructType\KadasterKadastraleKaart
     */
    public function setSchaal($schaal = null)
    {
        // validation for constraint: int
        if (!is_null($schaal) && !is_numeric($schaal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($schaal)), __LINE__);
        }
        $this->schaal = $schaal;
        return $this;
    }
    /**
     * Get afbeeldingen value
     * @return \Webservices\ArrayType\Base64BinaryArray|null
     */
    public function getAfbeeldingen()
    {
        return $this->afbeeldingen;
    }
    /**
     * Set afbeeldingen value
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     * @return \Webservices\StructType\KadasterKadastraleKaart
     */
    public function setAfbeeldingen(\Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this->afbeeldingen = $afbeeldingen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterKadastraleKaart
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
