<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterBerichtObjectDocument StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterBerichtObjectDocument extends AbstractStructBase
{
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * The afbeeldingen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\Base64BinaryArray
     */
    public $afbeeldingen;
    /**
     * Constructor method for kadasterBerichtObjectDocument
     * @uses KadasterBerichtObjectDocument::setDocument()
     * @uses KadasterBerichtObjectDocument::setAfbeeldingen()
     * @param string $document
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     */
    public function __construct($document = null, \Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this
            ->setDocument($document)
            ->setAfbeeldingen($afbeeldingen);
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
     * @return \Webservices\StructType\KadasterBerichtObjectDocument
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
     * Get afbeeldingen value
     * @return \Webservices\ArrayType\Base64BinaryArray|null
     */
    public function getAfbeeldingen()
    {
        return $this->afbeeldingen;
    }
    /**
     * Set afbeeldingen value
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     * @return \Webservices\StructType\KadasterBerichtObjectDocument
     */
    public function setAfbeeldingen(\Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this->afbeeldingen = $afbeeldingen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterBerichtObjectDocument
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
