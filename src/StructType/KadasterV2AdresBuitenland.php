<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2AdresBuitenland StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2AdresBuitenland extends AbstractStructBase
{
    /**
     * The adres
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adres;
    /**
     * The woonplaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $woonplaats;
    /**
     * The regio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $regio;
    /**
     * The land
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $land;
    /**
     * Constructor method for KadasterV2AdresBuitenland
     * @uses KadasterV2AdresBuitenland::setAdres()
     * @uses KadasterV2AdresBuitenland::setWoonplaats()
     * @uses KadasterV2AdresBuitenland::setRegio()
     * @uses KadasterV2AdresBuitenland::setLand()
     * @param string $adres
     * @param string $woonplaats
     * @param string $regio
     * @param string $land
     */
    public function __construct($adres = null, $woonplaats = null, $regio = null, $land = null)
    {
        $this
            ->setAdres($adres)
            ->setWoonplaats($woonplaats)
            ->setRegio($regio)
            ->setLand($land);
    }
    /**
     * Get adres value
     * @return string|null
     */
    public function getAdres()
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param string $adres
     * @return \Webservices\StructType\KadasterV2AdresBuitenland
     */
    public function setAdres($adres = null)
    {
        // validation for constraint: string
        if (!is_null($adres) && !is_string($adres)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adres)), __LINE__);
        }
        $this->adres = $adres;
        return $this;
    }
    /**
     * Get woonplaats value
     * @return string|null
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }
    /**
     * Set woonplaats value
     * @param string $woonplaats
     * @return \Webservices\StructType\KadasterV2AdresBuitenland
     */
    public function setWoonplaats($woonplaats = null)
    {
        // validation for constraint: string
        if (!is_null($woonplaats) && !is_string($woonplaats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($woonplaats)), __LINE__);
        }
        $this->woonplaats = $woonplaats;
        return $this;
    }
    /**
     * Get regio value
     * @return string|null
     */
    public function getRegio()
    {
        return $this->regio;
    }
    /**
     * Set regio value
     * @param string $regio
     * @return \Webservices\StructType\KadasterV2AdresBuitenland
     */
    public function setRegio($regio = null)
    {
        // validation for constraint: string
        if (!is_null($regio) && !is_string($regio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regio)), __LINE__);
        }
        $this->regio = $regio;
        return $this;
    }
    /**
     * Get land value
     * @return string|null
     */
    public function getLand()
    {
        return $this->land;
    }
    /**
     * Set land value
     * @param string $land
     * @return \Webservices\StructType\KadasterV2AdresBuitenland
     */
    public function setLand($land = null)
    {
        // validation for constraint: string
        if (!is_null($land) && !is_string($land)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($land)), __LINE__);
        }
        $this->land = $land;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2AdresBuitenland
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
