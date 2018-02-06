<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractDocumentDataV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractDocumentDataV2 extends AbstractStructBase
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
     * @var \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public $data;
    /**
     * Constructor method for DutchBusinessExtractDocumentDataV2
     * @uses DutchBusinessExtractDocumentDataV2::setDocument()
     * @uses DutchBusinessExtractDocumentDataV2::setData()
     * @param string $document
     * @param \Webservices\StructType\DutchBusinessExtractDataV2 $data
     */
    public function __construct($document = null, \Webservices\StructType\DutchBusinessExtractDataV2 $data = null)
    {
        $this
            ->setDocument($document)
            ->setData($data);
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
     * @return \Webservices\StructType\DutchBusinessExtractDocumentDataV2
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
     * @return \Webservices\StructType\DutchBusinessExtractDataV2|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \Webservices\StructType\DutchBusinessExtractDataV2 $data
     * @return \Webservices\StructType\DutchBusinessExtractDocumentDataV2
     */
    public function setData(\Webservices\StructType\DutchBusinessExtractDataV2 $data = null)
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
     * @return \Webservices\StructType\DutchBusinessExtractDocumentDataV2
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
