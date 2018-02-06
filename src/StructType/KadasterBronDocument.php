<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterBronDocument StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterBronDocument extends AbstractStructBase
{
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * The images
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\Base64BinaryArray
     */
    public $images;
    /**
     * Constructor method for KadasterBronDocument
     * @uses KadasterBronDocument::setDocument()
     * @uses KadasterBronDocument::setImages()
     * @param string $document
     * @param \Webservices\ArrayType\Base64BinaryArray $images
     */
    public function __construct($document = null, \Webservices\ArrayType\Base64BinaryArray $images = null)
    {
        $this
            ->setDocument($document)
            ->setImages($images);
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
     * @return \Webservices\StructType\KadasterBronDocument
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
     * Get images value
     * @return \Webservices\ArrayType\Base64BinaryArray|null
     */
    public function getImages()
    {
        return $this->images;
    }
    /**
     * Set images value
     * @param \Webservices\ArrayType\Base64BinaryArray $images
     * @return \Webservices\StructType\KadasterBronDocument
     */
    public function setImages(\Webservices\ArrayType\Base64BinaryArray $images = null)
    {
        $this->images = $images;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterBronDocument
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
