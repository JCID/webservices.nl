<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * dutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The include_source
     * @var bool
     */
    public $include_source;
    /**
     * The period_start
     * @var string
     */
    public $period_start;
    /**
     * The period_end
     * @var string
     */
    public $period_end;
    /**
     * Constructor method for
     * dutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType
     * @uses DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType::setDossier_number()
     * @uses DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType::setInclude_source()
     * @uses DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType::setPeriod_start()
     * @uses DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType::setPeriod_end()
     * @param string $dossier_number
     * @param bool $include_source
     * @param string $period_start
     * @param string $period_end
     */
    public function __construct($dossier_number = null, $include_source = null, $period_start = null, $period_end = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setInclude_source($include_source)
            ->setPeriod_start($period_start)
            ->setPeriod_end($period_end);
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
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType
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
     * Get include_source value
     * @return bool|null
     */
    public function getInclude_source()
    {
        return $this->include_source;
    }
    /**
     * Set include_source value
     * @param bool $include_source
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType
     */
    public function setInclude_source($include_source = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_source) && !is_bool($include_source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($include_source)), __LINE__);
        }
        $this->include_source = $include_source;
        return $this;
    }
    /**
     * Get period_start value
     * @return string|null
     */
    public function getPeriod_start()
    {
        return $this->period_start;
    }
    /**
     * Set period_start value
     * @param string $period_start
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType
     */
    public function setPeriod_start($period_start = null)
    {
        // validation for constraint: string
        if (!is_null($period_start) && !is_string($period_start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period_start)), __LINE__);
        }
        $this->period_start = $period_start;
        return $this;
    }
    /**
     * Get period_end value
     * @return string|null
     */
    public function getPeriod_end()
    {
        return $this->period_end;
    }
    /**
     * Set period_end value
     * @param string $period_end
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType
     */
    public function setPeriod_end($period_end = null)
    {
        // validation for constraint: string
        if (!is_null($period_end) && !is_string($period_end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period_end)), __LINE__);
        }
        $this->period_end = $period_end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType
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
