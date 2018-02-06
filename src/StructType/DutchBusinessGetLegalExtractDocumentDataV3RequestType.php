<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessGetLegalExtractDocumentDataV3RequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetLegalExtractDocumentDataV3RequestType extends AbstractStructBase
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
     * Constructor method for dutchBusinessGetLegalExtractDocumentDataV3RequestType
     * @uses DutchBusinessGetLegalExtractDocumentDataV3RequestType::setDossier_number()
     * @uses DutchBusinessGetLegalExtractDocumentDataV3RequestType::setInclude_source()
     * @param string $dossier_number
     * @param bool $include_source
     */
    public function __construct($dossier_number = null, $include_source = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setInclude_source($include_source);
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
     * @return \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3RequestType
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
     * @return \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3RequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3RequestType
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
