<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterV2GetHypothecairBerichtObjectByAdresRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GetHypothecairBerichtObjectByAdresRequestType extends AbstractStructBase
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
     * The document
     * @var string
     */
    public $document;
    /**
     * The huisletter
     * @var string
     */
    public $huisletter;
    /**
     * Constructor method for kadasterV2GetHypothecairBerichtObjectByAdresRequestType
     * @uses KadasterV2GetHypothecairBerichtObjectByAdresRequestType::setPostcode()
     * @uses KadasterV2GetHypothecairBerichtObjectByAdresRequestType::setHuisnummer()
     * @uses KadasterV2GetHypothecairBerichtObjectByAdresRequestType::setHuisnummer_toevoeging()
     * @uses KadasterV2GetHypothecairBerichtObjectByAdresRequestType::setDocument()
     * @uses KadasterV2GetHypothecairBerichtObjectByAdresRequestType::setHuisletter()
     * @param string $postcode
     * @param int $huisnummer
     * @param string $huisnummer_toevoeging
     * @param string $document
     * @param string $huisletter
     */
    public function __construct($postcode = null, $huisnummer = null, $huisnummer_toevoeging = null, $document = null, $huisletter = null)
    {
        $this
            ->setPostcode($postcode)
            ->setHuisnummer($huisnummer)
            ->setHuisnummer_toevoeging($huisnummer_toevoeging)
            ->setDocument($document)
            ->setHuisletter($huisletter);
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
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType
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
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType
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
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType
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
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Get huisletter value
     * @return string|null
     */
    public function getHuisletter()
    {
        return $this->huisletter;
    }
    /**
     * Set huisletter value
     * @param string $huisletter
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType
     */
    public function setHuisletter($huisletter = null)
    {
        // validation for constraint: string
        if (!is_null($huisletter) && !is_string($huisletter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisletter)), __LINE__);
        }
        $this->huisletter = $huisletter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType
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
