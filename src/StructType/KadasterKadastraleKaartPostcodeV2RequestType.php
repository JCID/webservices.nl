<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterKadastraleKaartPostcodeV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterKadastraleKaartPostcodeV2RequestType extends AbstractStructBase
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
     * The huisnummer_toevoeging
     * @var string
     */
    public $huisnummer_toevoeging;
    /**
     * The format
     * @var string
     */
    public $format;
    /**
     * The schaal
     * @var int
     */
    public $schaal;
    /**
     * Constructor method for kadasterKadastraleKaartPostcodeV2RequestType
     * @uses KadasterKadastraleKaartPostcodeV2RequestType::setPostcode()
     * @uses KadasterKadastraleKaartPostcodeV2RequestType::setHuisnummer()
     * @uses KadasterKadastraleKaartPostcodeV2RequestType::setHuisnummer_toevoeging()
     * @uses KadasterKadastraleKaartPostcodeV2RequestType::setFormat()
     * @uses KadasterKadastraleKaartPostcodeV2RequestType::setSchaal()
     * @param string $postcode
     * @param int $huisnummer
     * @param string $huisnummer_toevoeging
     * @param string $format
     * @param int $schaal
     */
    public function __construct($postcode = null, $huisnummer = null, $huisnummer_toevoeging = null, $format = null, $schaal = null)
    {
        $this
            ->setPostcode($postcode)
            ->setHuisnummer($huisnummer)
            ->setHuisnummer_toevoeging($huisnummer_toevoeging)
            ->setFormat($format)
            ->setSchaal($schaal);
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
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType
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
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType
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
     * Get huisnummer_toevoeging value
     * @return string|null
     */
    public function getHuisnummer_toevoeging()
    {
        return $this->huisnummer_toevoeging;
    }
    /**
     * Set huisnummer_toevoeging value
     * @param string $huisnummer_toevoeging
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType
     */
    public function setHuisnummer_toevoeging($huisnummer_toevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnummer_toevoeging) && !is_string($huisnummer_toevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnummer_toevoeging)), __LINE__);
        }
        $this->huisnummer_toevoeging = $huisnummer_toevoeging;
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
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType
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
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType
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
