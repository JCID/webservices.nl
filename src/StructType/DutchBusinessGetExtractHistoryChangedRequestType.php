<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessGetExtractHistoryChangedRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetExtractHistoryChangedRequestType extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The period_start_date
     * @var string
     */
    public $period_start_date;
    /**
     * The period_end_date
     * @var string
     */
    public $period_end_date;
    /**
     * Constructor method for dutchBusinessGetExtractHistoryChangedRequestType
     * @uses DutchBusinessGetExtractHistoryChangedRequestType::setDossier_number()
     * @uses DutchBusinessGetExtractHistoryChangedRequestType::setPeriod_start_date()
     * @uses DutchBusinessGetExtractHistoryChangedRequestType::setPeriod_end_date()
     * @param string $dossier_number
     * @param string $period_start_date
     * @param string $period_end_date
     */
    public function __construct($dossier_number = null, $period_start_date = null, $period_end_date = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setPeriod_start_date($period_start_date)
            ->setPeriod_end_date($period_end_date);
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
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryChangedRequestType
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
     * Get period_start_date value
     * @return string|null
     */
    public function getPeriod_start_date()
    {
        return $this->period_start_date;
    }
    /**
     * Set period_start_date value
     * @param string $period_start_date
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryChangedRequestType
     */
    public function setPeriod_start_date($period_start_date = null)
    {
        // validation for constraint: string
        if (!is_null($period_start_date) && !is_string($period_start_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period_start_date)), __LINE__);
        }
        $this->period_start_date = $period_start_date;
        return $this;
    }
    /**
     * Get period_end_date value
     * @return string|null
     */
    public function getPeriod_end_date()
    {
        return $this->period_end_date;
    }
    /**
     * Set period_end_date value
     * @param string $period_end_date
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryChangedRequestType
     */
    public function setPeriod_end_date($period_end_date = null)
    {
        // validation for constraint: string
        if (!is_null($period_end_date) && !is_string($period_end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period_end_date)), __LINE__);
        }
        $this->period_end_date = $period_end_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryChangedRequestType
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
