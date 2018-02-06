<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessIdentifiers StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessIdentifiers extends AbstractStructBase
{
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The rsi_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rsi_number;
    /**
     * Constructor method for DutchBusinessIdentifiers
     * @uses DutchBusinessIdentifiers::setDossier_number()
     * @uses DutchBusinessIdentifiers::setEstablishment_number()
     * @uses DutchBusinessIdentifiers::setRsi_number()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $rsi_number
     */
    public function __construct($dossier_number = null, $establishment_number = null, $rsi_number = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setRsi_number($rsi_number);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessIdentifiers
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\DutchBusinessIdentifiers
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get rsi_number value
     * @return string|null
     */
    public function getRsi_number()
    {
        return $this->rsi_number;
    }
    /**
     * Set rsi_number value
     * @param string $rsi_number
     * @return \Webservices\StructType\DutchBusinessIdentifiers
     */
    public function setRsi_number($rsi_number = null)
    {
        // validation for constraint: string
        if (!is_null($rsi_number) && !is_string($rsi_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rsi_number)), __LINE__);
        }
        $this->rsi_number = $rsi_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessIdentifiers
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
