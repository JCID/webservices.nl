<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KoopsommenOverzichtResponse StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KoopsommenOverzichtResponse extends AbstractStructBase
{
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct
     */
    public $overzicht;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document;
    /**
     * Constructor method for KadasterV2KoopsommenOverzichtResponse
     * @uses KadasterV2KoopsommenOverzichtResponse::setOverzicht()
     * @uses KadasterV2KoopsommenOverzichtResponse::setDocument()
     * @param \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct $overzicht
     * @param string $document
     */
    public function __construct(\Webservices\StructType\KadasterV2KoopsommenOverzichtProduct $overzicht = null, $document = null)
    {
        $this
            ->setOverzicht($overzicht)
            ->setDocument($document);
    }
    /**
     * Get overzicht value
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\KadasterV2KoopsommenOverzichtProduct $overzicht
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtResponse
     */
    public function setOverzicht(\Webservices\StructType\KadasterV2KoopsommenOverzichtProduct $overzicht = null)
    {
        $this->overzicht = $overzicht;
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
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtResponse
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
