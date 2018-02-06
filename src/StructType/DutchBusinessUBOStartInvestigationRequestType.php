<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessUBOStartInvestigationRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOStartInvestigationRequestType extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The oldest_extract_date
     * @var string
     */
    public $oldest_extract_date;
    /**
     * The use_updates
     * @var bool
     */
    public $use_updates;
    /**
     * Constructor method for dutchBusinessUBOStartInvestigationRequestType
     * @uses DutchBusinessUBOStartInvestigationRequestType::setDossier_number()
     * @uses DutchBusinessUBOStartInvestigationRequestType::setOldest_extract_date()
     * @uses DutchBusinessUBOStartInvestigationRequestType::setUse_updates()
     * @param string $dossier_number
     * @param string $oldest_extract_date
     * @param bool $use_updates
     */
    public function __construct($dossier_number = null, $oldest_extract_date = null, $use_updates = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setOldest_extract_date($oldest_extract_date)
            ->setUse_updates($use_updates);
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
     * @return \Webservices\StructType\DutchBusinessUBOStartInvestigationRequestType
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
     * Get oldest_extract_date value
     * @return string|null
     */
    public function getOldest_extract_date()
    {
        return $this->oldest_extract_date;
    }
    /**
     * Set oldest_extract_date value
     * @param string $oldest_extract_date
     * @return \Webservices\StructType\DutchBusinessUBOStartInvestigationRequestType
     */
    public function setOldest_extract_date($oldest_extract_date = null)
    {
        // validation for constraint: string
        if (!is_null($oldest_extract_date) && !is_string($oldest_extract_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oldest_extract_date)), __LINE__);
        }
        $this->oldest_extract_date = $oldest_extract_date;
        return $this;
    }
    /**
     * Get use_updates value
     * @return bool|null
     */
    public function getUse_updates()
    {
        return $this->use_updates;
    }
    /**
     * Set use_updates value
     * @param bool $use_updates
     * @return \Webservices\StructType\DutchBusinessUBOStartInvestigationRequestType
     */
    public function setUse_updates($use_updates = null)
    {
        // validation for constraint: boolean
        if (!is_null($use_updates) && !is_bool($use_updates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($use_updates)), __LINE__);
        }
        $this->use_updates = $use_updates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOStartInvestigationRequestType
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
