<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessGetExtractHistoryDocumentDataRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetExtractHistoryDocumentDataRequestType extends AbstractStructBase
{
    /**
     * The extract_id
     * @var string
     */
    public $extract_id;
    /**
     * Constructor method for dutchBusinessGetExtractHistoryDocumentDataRequestType
     * @uses DutchBusinessGetExtractHistoryDocumentDataRequestType::setExtract_id()
     * @param string $extract_id
     */
    public function __construct($extract_id = null)
    {
        $this
            ->setExtract_id($extract_id);
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
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataRequestType
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
