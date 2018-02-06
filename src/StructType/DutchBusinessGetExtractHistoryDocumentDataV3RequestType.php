<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessGetExtractHistoryDocumentDataV3RequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetExtractHistoryDocumentDataV3RequestType extends AbstractStructBase
{
    /**
     * The extract_id
     * @var string
     */
    public $extract_id;
    /**
     * The include_source
     * @var bool
     */
    public $include_source;
    /**
     * Constructor method for dutchBusinessGetExtractHistoryDocumentDataV3RequestType
     * @uses DutchBusinessGetExtractHistoryDocumentDataV3RequestType::setExtract_id()
     * @uses DutchBusinessGetExtractHistoryDocumentDataV3RequestType::setInclude_source()
     * @param string $extract_id
     * @param bool $include_source
     */
    public function __construct($extract_id = null, $include_source = null)
    {
        $this
            ->setExtract_id($extract_id)
            ->setInclude_source($include_source);
    }
    /**
     * Get extract_id value
     * @return string|null
     */
    public function getExtract_id()
    {
        return $this->extract_id;
    }
    /**
     * Set extract_id value
     * @param string $extract_id
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3RequestType
     */
    public function setExtract_id($extract_id = null)
    {
        // validation for constraint: string
        if (!is_null($extract_id) && !is_string($extract_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extract_id)), __LINE__);
        }
        $this->extract_id = $extract_id;
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
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3RequestType
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
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3RequestType
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
