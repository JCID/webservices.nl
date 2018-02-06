<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessGetVatNumberRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetVatNumberRequestType extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * Constructor method for dutchBusinessGetVatNumberRequestType
     * @uses DutchBusinessGetVatNumberRequestType::setDossier_number()
     * @param string $dossier_number
     */
    public function __construct($dossier_number = null)
    {
        $this
            ->setDossier_number($dossier_number);
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
     * @return \Webservices\StructType\DutchBusinessGetVatNumberRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessGetVatNumberRequestType
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
