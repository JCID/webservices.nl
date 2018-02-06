<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Nummeraanduiding StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Nummeraanduiding extends AbstractStructBase
{
    /**
     * The huisnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $huisnummer;
    /**
     * The huisletter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisletter;
    /**
     * The huisnummertoevoeging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisnummertoevoeging;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The in_onderzoek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $in_onderzoek;
    /**
     * The gerelateerde_woonplaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GerelateerdeWoonplaats
     */
    public $gerelateerde_woonplaats;
    /**
     * The gerelateerde_openbare_ruimte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte
     */
    public $gerelateerde_openbare_ruimte;
    /**
     * Constructor method for KadasterV2Nummeraanduiding
     * @uses KadasterV2Nummeraanduiding::setHuisnummer()
     * @uses KadasterV2Nummeraanduiding::setHuisletter()
     * @uses KadasterV2Nummeraanduiding::setHuisnummertoevoeging()
     * @uses KadasterV2Nummeraanduiding::setPostcode()
     * @uses KadasterV2Nummeraanduiding::setIn_onderzoek()
     * @uses KadasterV2Nummeraanduiding::setGerelateerde_woonplaats()
     * @uses KadasterV2Nummeraanduiding::setGerelateerde_openbare_ruimte()
     * @param int $huisnummer
     * @param string $huisletter
     * @param string $huisnummertoevoeging
     * @param string $postcode
     * @param bool $in_onderzoek
     * @param \Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats
     * @param \Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte $gerelateerde_openbare_ruimte
     */
    public function __construct($huisnummer = null, $huisletter = null, $huisnummertoevoeging = null, $postcode = null, $in_onderzoek = null, \Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats = null, \Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte $gerelateerde_openbare_ruimte = null)
    {
        $this
            ->setHuisnummer($huisnummer)
            ->setHuisletter($huisletter)
            ->setHuisnummertoevoeging($huisnummertoevoeging)
            ->setPostcode($postcode)
            ->setIn_onderzoek($in_onderzoek)
            ->setGerelateerde_woonplaats($gerelateerde_woonplaats)
            ->setGerelateerde_openbare_ruimte($gerelateerde_openbare_ruimte);
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
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
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
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
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
     * Get huisnummertoevoeging value
     * @return string|null
     */
    public function getHuisnummertoevoeging()
    {
        return $this->huisnummertoevoeging;
    }
    /**
     * Set huisnummertoevoeging value
     * @param string $huisnummertoevoeging
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
     */
    public function setHuisnummertoevoeging($huisnummertoevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnummertoevoeging) && !is_string($huisnummertoevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnummertoevoeging)), __LINE__);
        }
        $this->huisnummertoevoeging = $huisnummertoevoeging;
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
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
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
     * Get in_onderzoek value
     * @return bool|null
     */
    public function getIn_onderzoek()
    {
        return $this->in_onderzoek;
    }
    /**
     * Set in_onderzoek value
     * @param bool $in_onderzoek
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
     */
    public function setIn_onderzoek($in_onderzoek = null)
    {
        // validation for constraint: boolean
        if (!is_null($in_onderzoek) && !is_bool($in_onderzoek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($in_onderzoek)), __LINE__);
        }
        $this->in_onderzoek = $in_onderzoek;
        return $this;
    }
    /**
     * Get gerelateerde_woonplaats value
     * @return \Webservices\StructType\KadasterV2GerelateerdeWoonplaats|null
     */
    public function getGerelateerde_woonplaats()
    {
        return $this->gerelateerde_woonplaats;
    }
    /**
     * Set gerelateerde_woonplaats value
     * @param \Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
     */
    public function setGerelateerde_woonplaats(\Webservices\StructType\KadasterV2GerelateerdeWoonplaats $gerelateerde_woonplaats = null)
    {
        $this->gerelateerde_woonplaats = $gerelateerde_woonplaats;
        return $this;
    }
    /**
     * Get gerelateerde_openbare_ruimte value
     * @return \Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte|null
     */
    public function getGerelateerde_openbare_ruimte()
    {
        return $this->gerelateerde_openbare_ruimte;
    }
    /**
     * Set gerelateerde_openbare_ruimte value
     * @param \Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte $gerelateerde_openbare_ruimte
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
     */
    public function setGerelateerde_openbare_ruimte(\Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte $gerelateerde_openbare_ruimte = null)
    {
        $this->gerelateerde_openbare_ruimte = $gerelateerde_openbare_ruimte;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding
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
