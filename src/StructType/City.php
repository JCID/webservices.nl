<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for City StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class City extends AbstractStructBase
{
    /**
     * The plaatsid
     * @var int
     */
    public $plaatsid;
    /**
     * The plaatsnaam
     * @var string
     */
    public $plaatsnaam;
    /**
     * The plaatsnaam_ptt
     * @var string
     */
    public $plaatsnaam_ptt;
    /**
     * The plaatsnaam_extract
     * @var string
     */
    public $plaatsnaam_extract;
    /**
     * The gemeenteid
     * @var int
     */
    public $gemeenteid;
    /**
     * Constructor method for City
     * @uses City::setPlaatsid()
     * @uses City::setPlaatsnaam()
     * @uses City::setPlaatsnaam_ptt()
     * @uses City::setPlaatsnaam_extract()
     * @uses City::setGemeenteid()
     * @param int $plaatsid
     * @param string $plaatsnaam
     * @param string $plaatsnaam_ptt
     * @param string $plaatsnaam_extract
     * @param int $gemeenteid
     */
    public function __construct($plaatsid = null, $plaatsnaam = null, $plaatsnaam_ptt = null, $plaatsnaam_extract = null, $gemeenteid = null)
    {
        $this
            ->setPlaatsid($plaatsid)
            ->setPlaatsnaam($plaatsnaam)
            ->setPlaatsnaam_ptt($plaatsnaam_ptt)
            ->setPlaatsnaam_extract($plaatsnaam_extract)
            ->setGemeenteid($gemeenteid);
    }
    /**
     * Get plaatsid value
     * @return int|null
     */
    public function getPlaatsid()
    {
        return $this->plaatsid;
    }
    /**
     * Set plaatsid value
     * @param int $plaatsid
     * @return \Webservices\StructType\City
     */
    public function setPlaatsid($plaatsid = null)
    {
        // validation for constraint: int
        if (!is_null($plaatsid) && !is_numeric($plaatsid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($plaatsid)), __LINE__);
        }
        $this->plaatsid = $plaatsid;
        return $this;
    }
    /**
     * Get plaatsnaam value
     * @return string|null
     */
    public function getPlaatsnaam()
    {
        return $this->plaatsnaam;
    }
    /**
     * Set plaatsnaam value
     * @param string $plaatsnaam
     * @return \Webservices\StructType\City
     */
    public function setPlaatsnaam($plaatsnaam = null)
    {
        // validation for constraint: string
        if (!is_null($plaatsnaam) && !is_string($plaatsnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaatsnaam)), __LINE__);
        }
        $this->plaatsnaam = $plaatsnaam;
        return $this;
    }
    /**
     * Get plaatsnaam_ptt value
     * @return string|null
     */
    public function getPlaatsnaam_ptt()
    {
        return $this->plaatsnaam_ptt;
    }
    /**
     * Set plaatsnaam_ptt value
     * @param string $plaatsnaam_ptt
     * @return \Webservices\StructType\City
     */
    public function setPlaatsnaam_ptt($plaatsnaam_ptt = null)
    {
        // validation for constraint: string
        if (!is_null($plaatsnaam_ptt) && !is_string($plaatsnaam_ptt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaatsnaam_ptt)), __LINE__);
        }
        $this->plaatsnaam_ptt = $plaatsnaam_ptt;
        return $this;
    }
    /**
     * Get plaatsnaam_extract value
     * @return string|null
     */
    public function getPlaatsnaam_extract()
    {
        return $this->plaatsnaam_extract;
    }
    /**
     * Set plaatsnaam_extract value
     * @param string $plaatsnaam_extract
     * @return \Webservices\StructType\City
     */
    public function setPlaatsnaam_extract($plaatsnaam_extract = null)
    {
        // validation for constraint: string
        if (!is_null($plaatsnaam_extract) && !is_string($plaatsnaam_extract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaatsnaam_extract)), __LINE__);
        }
        $this->plaatsnaam_extract = $plaatsnaam_extract;
        return $this;
    }
    /**
     * Get gemeenteid value
     * @return int|null
     */
    public function getGemeenteid()
    {
        return $this->gemeenteid;
    }
    /**
     * Set gemeenteid value
     * @param int $gemeenteid
     * @return \Webservices\StructType\City
     */
    public function setGemeenteid($gemeenteid = null)
    {
        // validation for constraint: int
        if (!is_null($gemeenteid) && !is_numeric($gemeenteid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gemeenteid)), __LINE__);
        }
        $this->gemeenteid = $gemeenteid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\City
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
