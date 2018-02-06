<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerenigingVanEigenaren StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class VerenigingVanEigenaren extends AbstractStructBase
{
    /**
     * The naam
     * @var string
     */
    public $naam;
    /**
     * The bestuurder_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bestuurder_id;
    /**
     * Constructor method for VerenigingVanEigenaren
     * @uses VerenigingVanEigenaren::setNaam()
     * @uses VerenigingVanEigenaren::setBestuurder_id()
     * @param string $naam
     * @param string $bestuurder_id
     */
    public function __construct($naam = null, $bestuurder_id = null)
    {
        $this
            ->setNaam($naam)
            ->setBestuurder_id($bestuurder_id);
    }
    /**
     * Get naam value
     * @return string|null
     */
    public function getNaam()
    {
        return $this->naam;
    }
    /**
     * Set naam value
     * @param string $naam
     * @return \Webservices\StructType\VerenigingVanEigenaren
     */
    public function setNaam($naam = null)
    {
        // validation for constraint: string
        if (!is_null($naam) && !is_string($naam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($naam)), __LINE__);
        }
        $this->naam = $naam;
        return $this;
    }
    /**
     * Get bestuurder_id value
     * @return string|null
     */
    public function getBestuurder_id()
    {
        return $this->bestuurder_id;
    }
    /**
     * Set bestuurder_id value
     * @param string $bestuurder_id
     * @return \Webservices\StructType\VerenigingVanEigenaren
     */
    public function setBestuurder_id($bestuurder_id = null)
    {
        // validation for constraint: string
        if (!is_null($bestuurder_id) && !is_string($bestuurder_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bestuurder_id)), __LINE__);
        }
        $this->bestuurder_id = $bestuurder_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\VerenigingVanEigenaren
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
