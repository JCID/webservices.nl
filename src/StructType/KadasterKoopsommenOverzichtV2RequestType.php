<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterKoopsommenOverzichtV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterKoopsommenOverzichtV2RequestType extends AbstractStructBase
{
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The huisnummer
     * @var int
     */
    public $huisnummer;
    /**
     * The format
     * @var string
     */
    public $format;
    /**
     * Constructor method for kadasterKoopsommenOverzichtV2RequestType
     * @uses KadasterKoopsommenOverzichtV2RequestType::setPostcode()
     * @uses KadasterKoopsommenOverzichtV2RequestType::setHuisnummer()
     * @uses KadasterKoopsommenOverzichtV2RequestType::setFormat()
     * @param string $postcode
     * @param int $huisnummer
     * @param string $format
     */
    public function __construct($postcode = null, $huisnummer = null, $format = null)
    {
        $this
            ->setPostcode($postcode)
            ->setHuisnummer($huisnummer)
            ->setFormat($format);
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
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtV2RequestType
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
     * Get huisnummer value
     * @return int|null
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }
    /**
     * Set huisnummer value
     * @param int $huisnummer
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtV2RequestType
     */
    public function setHuisnummer($huisnummer = null)
    {
        // validation for constraint: int
        if (!is_null($huisnummer) && !is_numeric($huisnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnummer)), __LINE__);
        }
        $this->huisnummer = $huisnummer;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtV2RequestType
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtV2RequestType
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
