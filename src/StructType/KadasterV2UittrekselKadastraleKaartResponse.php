<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2UittrekselKadastraleKaartResponse StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2UittrekselKadastraleKaartResponse extends AbstractStructBase
{
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document;
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2OverzichtProduct
     */
    public $overzicht;
    /**
     * Constructor method for KadasterV2UittrekselKadastraleKaartResponse
     * @uses KadasterV2UittrekselKadastraleKaartResponse::setDocument()
     * @uses KadasterV2UittrekselKadastraleKaartResponse::setOverzicht()
     * @param string $document
     * @param \Webservices\StructType\KadasterV2OverzichtProduct $overzicht
     */
    public function __construct($document = null, \Webservices\StructType\KadasterV2OverzichtProduct $overzicht = null)
    {
        $this
            ->setDocument($document)
            ->setOverzicht($overzicht);
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
     * @return \Webservices\StructType\KadasterV2UittrekselKadastraleKaartResponse
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
     * Get overzicht value
     * @return \Webservices\StructType\KadasterV2OverzichtProduct|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\KadasterV2OverzichtProduct $overzicht
     * @return \Webservices\StructType\KadasterV2UittrekselKadastraleKaartResponse
     */
    public function setOverzicht(\Webservices\StructType\KadasterV2OverzichtProduct $overzicht = null)
    {
        $this->overzicht = $overzicht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2UittrekselKadastraleKaartResponse
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
