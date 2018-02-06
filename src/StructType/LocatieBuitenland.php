<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocatieBuitenland StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class LocatieBuitenland extends AbstractStructBase
{
    /**
     * The adres_buitenland1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adres_buitenland1;
    /**
     * The adres_buitenland2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adres_buitenland2;
    /**
     * The adres_buitenland3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adres_buitenland3;
    /**
     * The land
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $land;
    /**
     * Constructor method for LocatieBuitenland
     * @uses LocatieBuitenland::setAdres_buitenland1()
     * @uses LocatieBuitenland::setAdres_buitenland2()
     * @uses LocatieBuitenland::setAdres_buitenland3()
     * @uses LocatieBuitenland::setLand()
     * @param string $adres_buitenland1
     * @param string $adres_buitenland2
     * @param string $adres_buitenland3
     * @param string $land
     */
    public function __construct($adres_buitenland1 = null, $adres_buitenland2 = null, $adres_buitenland3 = null, $land = null)
    {
        $this
            ->setAdres_buitenland1($adres_buitenland1)
            ->setAdres_buitenland2($adres_buitenland2)
            ->setAdres_buitenland3($adres_buitenland3)
            ->setLand($land);
    }
    /**
     * Get adres_buitenland1 value
     * @return string|null
     */
    public function getAdres_buitenland1()
    {
        return $this->adres_buitenland1;
    }
    /**
     * Set adres_buitenland1 value
     * @param string $adres_buitenland1
     * @return \Webservices\StructType\LocatieBuitenland
     */
    public function setAdres_buitenland1($adres_buitenland1 = null)
    {
        // validation for constraint: string
        if (!is_null($adres_buitenland1) && !is_string($adres_buitenland1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adres_buitenland1)), __LINE__);
        }
        $this->adres_buitenland1 = $adres_buitenland1;
        return $this;
    }
    /**
     * Get adres_buitenland2 value
     * @return string|null
     */
    public function getAdres_buitenland2()
    {
        return $this->adres_buitenland2;
    }
    /**
     * Set adres_buitenland2 value
     * @param string $adres_buitenland2
     * @return \Webservices\StructType\LocatieBuitenland
     */
    public function setAdres_buitenland2($adres_buitenland2 = null)
    {
        // validation for constraint: string
        if (!is_null($adres_buitenland2) && !is_string($adres_buitenland2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adres_buitenland2)), __LINE__);
        }
        $this->adres_buitenland2 = $adres_buitenland2;
        return $this;
    }
    /**
     * Get adres_buitenland3 value
     * @return string|null
     */
    public function getAdres_buitenland3()
    {
        return $this->adres_buitenland3;
    }
    /**
     * Set adres_buitenland3 value
     * @param string $adres_buitenland3
     * @return \Webservices\StructType\LocatieBuitenland
     */
    public function setAdres_buitenland3($adres_buitenland3 = null)
    {
        // validation for constraint: string
        if (!is_null($adres_buitenland3) && !is_string($adres_buitenland3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adres_buitenland3)), __LINE__);
        }
        $this->adres_buitenland3 = $adres_buitenland3;
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
     * @return \Webservices\StructType\LocatieBuitenland
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
     * @return \Webservices\StructType\LocatieBuitenland
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
