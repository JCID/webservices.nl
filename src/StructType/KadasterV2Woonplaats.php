<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Woonplaats StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Woonplaats extends AbstractStructBase
{
    /**
     * The woonplaats_naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $woonplaats_naam;
    /**
     * The in_onderzoek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $in_onderzoek;
    /**
     * Constructor method for KadasterV2Woonplaats
     * @uses KadasterV2Woonplaats::setWoonplaats_naam()
     * @uses KadasterV2Woonplaats::setIn_onderzoek()
     * @param string $woonplaats_naam
     * @param bool $in_onderzoek
     */
    public function __construct($woonplaats_naam = null, $in_onderzoek = null)
    {
        $this
            ->setWoonplaats_naam($woonplaats_naam)
            ->setIn_onderzoek($in_onderzoek);
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
     * @return \Webservices\StructType\KadasterV2Woonplaats
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
     * @return \Webservices\StructType\KadasterV2Woonplaats
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Woonplaats
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
