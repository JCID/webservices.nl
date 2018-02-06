<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRImportExport StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRImportExport extends AbstractStructBase
{
    /**
     * The import_countries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCountryArray
     */
    public $import_countries;
    /**
     * The export_countries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCountryArray
     */
    public $export_countries;
    /**
     * Constructor method for GCRImportExport
     * @uses GCRImportExport::setImport_countries()
     * @uses GCRImportExport::setExport_countries()
     * @param \Webservices\ArrayType\GCRCountryArray $import_countries
     * @param \Webservices\ArrayType\GCRCountryArray $export_countries
     */
    public function __construct(\Webservices\ArrayType\GCRCountryArray $import_countries = null, \Webservices\ArrayType\GCRCountryArray $export_countries = null)
    {
        $this
            ->setImport_countries($import_countries)
            ->setExport_countries($export_countries);
    }
    /**
     * Get import_countries value
     * @return \Webservices\ArrayType\GCRCountryArray|null
     */
    public function getImport_countries()
    {
        return $this->import_countries;
    }
    /**
     * Set import_countries value
     * @param \Webservices\ArrayType\GCRCountryArray $import_countries
     * @return \Webservices\StructType\GCRImportExport
     */
    public function setImport_countries(\Webservices\ArrayType\GCRCountryArray $import_countries = null)
    {
        $this->import_countries = $import_countries;
        return $this;
    }
    /**
     * Get export_countries value
     * @return \Webservices\ArrayType\GCRCountryArray|null
     */
    public function getExport_countries()
    {
        return $this->export_countries;
    }
    /**
     * Set export_countries value
     * @param \Webservices\ArrayType\GCRCountryArray $export_countries
     * @return \Webservices\StructType\GCRImportExport
     */
    public function setExport_countries(\Webservices\ArrayType\GCRCountryArray $export_countries = null)
    {
        $this->export_countries = $export_countries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRImportExport
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
