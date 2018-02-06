<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GemeenteStuk StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GemeenteStuk extends AbstractStructBase
{
    /**
     * The gemeentelijke_registratie_id
     * @var string
     */
    public $gemeentelijke_registratie_id;
    /**
     * The nummer
     * @var string
     */
    public $nummer;
    /**
     * The datum_in_werking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_in_werking;
    /**
     * Constructor method for GemeenteStuk
     * @uses GemeenteStuk::setGemeentelijke_registratie_id()
     * @uses GemeenteStuk::setNummer()
     * @uses GemeenteStuk::setDatum_in_werking()
     * @param string $gemeentelijke_registratie_id
     * @param string $nummer
     * @param string $datum_in_werking
     */
    public function __construct($gemeentelijke_registratie_id = null, $nummer = null, $datum_in_werking = null)
    {
        $this
            ->setGemeentelijke_registratie_id($gemeentelijke_registratie_id)
            ->setNummer($nummer)
            ->setDatum_in_werking($datum_in_werking);
    }
    /**
     * Get gemeentelijke_registratie_id value
     * @return string|null
     */
    public function getGemeentelijke_registratie_id()
    {
        return $this->gemeentelijke_registratie_id;
    }
    /**
     * Set gemeentelijke_registratie_id value
     * @param string $gemeentelijke_registratie_id
     * @return \Webservices\StructType\GemeenteStuk
     */
    public function setGemeentelijke_registratie_id($gemeentelijke_registratie_id = null)
    {
        // validation for constraint: string
        if (!is_null($gemeentelijke_registratie_id) && !is_string($gemeentelijke_registratie_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gemeentelijke_registratie_id)), __LINE__);
        }
        $this->gemeentelijke_registratie_id = $gemeentelijke_registratie_id;
        return $this;
    }
    /**
     * Get nummer value
     * @return string|null
     */
    public function getNummer()
    {
        return $this->nummer;
    }
    /**
     * Set nummer value
     * @param string $nummer
     * @return \Webservices\StructType\GemeenteStuk
     */
    public function setNummer($nummer = null)
    {
        // validation for constraint: string
        if (!is_null($nummer) && !is_string($nummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nummer)), __LINE__);
        }
        $this->nummer = $nummer;
        return $this;
    }
    /**
     * Get datum_in_werking value
     * @return string|null
     */
    public function getDatum_in_werking()
    {
        return $this->datum_in_werking;
    }
    /**
     * Set datum_in_werking value
     * @param string $datum_in_werking
     * @return \Webservices\StructType\GemeenteStuk
     */
    public function setDatum_in_werking($datum_in_werking = null)
    {
        // validation for constraint: string
        if (!is_null($datum_in_werking) && !is_string($datum_in_werking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_in_werking)), __LINE__);
        }
        $this->datum_in_werking = $datum_in_werking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GemeenteStuk
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
