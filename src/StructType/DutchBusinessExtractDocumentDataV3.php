<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractDocumentDataV3 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractDocumentDataV3 extends AbstractStructBase
{
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document;
    /**
     * The data
     * @var \Webservices\StructType\DutchBusinessExtractDataV3
     */
    public $data;
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $source;
    /**
     * Constructor method for DutchBusinessExtractDocumentDataV3
     * @uses DutchBusinessExtractDocumentDataV3::setDocument()
     * @uses DutchBusinessExtractDocumentDataV3::setData()
     * @uses DutchBusinessExtractDocumentDataV3::setSource()
     * @param string $document
     * @param \Webservices\StructType\DutchBusinessExtractDataV3 $data
     * @param string $source
     */
    public function __construct($document = null, \Webservices\StructType\DutchBusinessExtractDataV3 $data = null, $source = null)
    {
        $this
            ->setDocument($document)
            ->setData($data)
            ->setSource($source);
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
     * @return \Webservices\StructType\DutchBusinessExtractDocumentDataV3
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
     * Get data value
     * @return \Webservices\StructType\DutchBusinessExtractDataV3|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \Webservices\StructType\DutchBusinessExtractDataV3 $data
     * @return \Webservices\StructType\DutchBusinessExtractDocumentDataV3
     */
    public function setData(\Webservices\StructType\DutchBusinessExtractDataV3 $data = null)
    {
        $this->data = $data;
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
     * @return \Webservices\StructType\DutchBusinessExtractDocumentDataV3
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessExtractDocumentDataV3
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
