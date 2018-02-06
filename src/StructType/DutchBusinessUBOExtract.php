<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBOExtract StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOExtract extends AbstractStructBase
{
    /**
     * The extract_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $extract_date;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document;
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $source;
    /**
     * The data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public $data;
    /**
     * Constructor method for DutchBusinessUBOExtract
     * @uses DutchBusinessUBOExtract::setExtract_date()
     * @uses DutchBusinessUBOExtract::setDocument()
     * @uses DutchBusinessUBOExtract::setSource()
     * @uses DutchBusinessUBOExtract::setData()
     * @param string $extract_date
     * @param string $document
     * @param string $source
     * @param \Webservices\StructType\DutchBusinessExtractDocumentData $data
     */
    public function __construct($extract_date = null, $document = null, $source = null, \Webservices\StructType\DutchBusinessExtractDocumentData $data = null)
    {
        $this
            ->setExtract_date($extract_date)
            ->setDocument($document)
            ->setSource($source)
            ->setData($data);
    }
    /**
     * Get extract_date value
     * @return string
     */
    public function getExtract_date()
    {
        return $this->extract_date;
    }
    /**
     * Set extract_date value
     * @param string $extract_date
     * @return \Webservices\StructType\DutchBusinessUBOExtract
     */
    public function setExtract_date($extract_date = null)
    {
        // validation for constraint: string
        if (!is_null($extract_date) && !is_string($extract_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extract_date)), __LINE__);
        }
        $this->extract_date = $extract_date;
        return $this;
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
     * @return \Webservices\StructType\DutchBusinessUBOExtract
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
     * Get source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Webservices\StructType\DutchBusinessUBOExtract
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Get data value
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \Webservices\StructType\DutchBusinessExtractDocumentData $data
     * @return \Webservices\StructType\DutchBusinessUBOExtract
     */
    public function setData(\Webservices\StructType\DutchBusinessExtractDocumentData $data = null)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOExtract
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
