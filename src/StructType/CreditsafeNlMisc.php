<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlMisc StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlMisc extends AbstractStructBase
{
    /**
     * The ceased_trading_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ceased_trading_date;
    /**
     * The exporter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $exporter;
    /**
     * The importer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $importer;
    /**
     * Constructor method for CreditsafeNlMisc
     * @uses CreditsafeNlMisc::setCeased_trading_date()
     * @uses CreditsafeNlMisc::setExporter()
     * @uses CreditsafeNlMisc::setImporter()
     * @param string $ceased_trading_date
     * @param bool $exporter
     * @param bool $importer
     */
    public function __construct($ceased_trading_date = null, $exporter = null, $importer = null)
    {
        $this
            ->setCeased_trading_date($ceased_trading_date)
            ->setExporter($exporter)
            ->setImporter($importer);
    }
    /**
     * Get ceased_trading_date value
     * @return string|null
     */
    public function getCeased_trading_date()
    {
        return $this->ceased_trading_date;
    }
    /**
     * Set ceased_trading_date value
     * @param string $ceased_trading_date
     * @return \Webservices\StructType\CreditsafeNlMisc
     */
    public function setCeased_trading_date($ceased_trading_date = null)
    {
        // validation for constraint: string
        if (!is_null($ceased_trading_date) && !is_string($ceased_trading_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ceased_trading_date)), __LINE__);
        }
        $this->ceased_trading_date = $ceased_trading_date;
        return $this;
    }
    /**
     * Get exporter value
     * @return bool|null
     */
    public function getExporter()
    {
        return $this->exporter;
    }
    /**
     * Set exporter value
     * @param bool $exporter
     * @return \Webservices\StructType\CreditsafeNlMisc
     */
    public function setExporter($exporter = null)
    {
        // validation for constraint: boolean
        if (!is_null($exporter) && !is_bool($exporter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exporter)), __LINE__);
        }
        $this->exporter = $exporter;
        return $this;
    }
    /**
     * Get importer value
     * @return bool|null
     */
    public function getImporter()
    {
        return $this->importer;
    }
    /**
     * Set importer value
     * @param bool $importer
     * @return \Webservices\StructType\CreditsafeNlMisc
     */
    public function setImporter($importer = null)
    {
        // validation for constraint: boolean
        if (!is_null($importer) && !is_bool($importer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($importer)), __LINE__);
        }
        $this->importer = $importer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlMisc
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
