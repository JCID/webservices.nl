<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessVatNumber StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessVatNumber extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The vat_number
     * @var string
     */
    public $vat_number;
    /**
     * The date_last_update
     * @var string
     */
    public $date_last_update;
    /**
     * Constructor method for DutchBusinessVatNumber
     * @uses DutchBusinessVatNumber::setDossier_number()
     * @uses DutchBusinessVatNumber::setVat_number()
     * @uses DutchBusinessVatNumber::setDate_last_update()
     * @param string $dossier_number
     * @param string $vat_number
     * @param string $date_last_update
     */
    public function __construct($dossier_number = null, $vat_number = null, $date_last_update = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setVat_number($vat_number)
            ->setDate_last_update($date_last_update);
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
     * @return \Webservices\StructType\DutchBusinessVatNumber
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
     * Get vat_number value
     * @return string|null
     */
    public function getVat_number()
    {
        return $this->vat_number;
    }
    /**
     * Set vat_number value
     * @param string $vat_number
     * @return \Webservices\StructType\DutchBusinessVatNumber
     */
    public function setVat_number($vat_number = null)
    {
        // validation for constraint: string
        if (!is_null($vat_number) && !is_string($vat_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vat_number)), __LINE__);
        }
        $this->vat_number = $vat_number;
        return $this;
    }
    /**
     * Get date_last_update value
     * @return string|null
     */
    public function getDate_last_update()
    {
        return $this->date_last_update;
    }
    /**
     * Set date_last_update value
     * @param string $date_last_update
     * @return \Webservices\StructType\DutchBusinessVatNumber
     */
    public function setDate_last_update($date_last_update = null)
    {
        // validation for constraint: string
        if (!is_null($date_last_update) && !is_string($date_last_update)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_last_update)), __LINE__);
        }
        $this->date_last_update = $date_last_update;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessVatNumber
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
