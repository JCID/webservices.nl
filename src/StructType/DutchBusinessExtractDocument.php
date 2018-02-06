<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractDocument StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractDocument extends AbstractStructBase
{
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * The document_date
     * @var string
     */
    public $document_date;
    /**
     * Constructor method for DutchBusinessExtractDocument
     * @uses DutchBusinessExtractDocument::setDocument()
     * @uses DutchBusinessExtractDocument::setDocument_date()
     * @param string $document
     * @param string $document_date
     */
    public function __construct($document = null, $document_date = null)
    {
        $this
            ->setDocument($document)
            ->setDocument_date($document_date);
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\DutchBusinessExtractDocument
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Get document_date value
     * @return string|null
     */
    public function getDocument_date()
    {
        return $this->document_date;
    }
    /**
     * Set document_date value
     * @param string $document_date
     * @return \Webservices\StructType\DutchBusinessExtractDocument
     */
    public function setDocument_date($document_date = null)
    {
        // validation for constraint: string
        if (!is_null($document_date) && !is_string($document_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_date)), __LINE__);
        }
        $this->document_date = $document_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessExtractDocument
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
