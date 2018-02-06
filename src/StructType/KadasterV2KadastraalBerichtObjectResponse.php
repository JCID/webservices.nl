<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KadastraalBerichtObjectResponse StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KadastraalBerichtObjectResponse extends AbstractStructBase
{
    /**
     * The bericht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadastraalBerichtObjectProduct
     */
    public $bericht;
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
     * Constructor method for KadasterV2KadastraalBerichtObjectResponse
     * @uses KadasterV2KadastraalBerichtObjectResponse::setBericht()
     * @uses KadasterV2KadastraalBerichtObjectResponse::setDocument()
     * @uses KadasterV2KadastraalBerichtObjectResponse::setOverzicht()
     * @param \Webservices\StructType\KadasterV2KadastraalBerichtObjectProduct $bericht
     * @param string $document
     * @param \Webservices\StructType\KadasterV2OverzichtProduct $overzicht
     */
    public function __construct(\Webservices\StructType\KadasterV2KadastraalBerichtObjectProduct $bericht = null, $document = null, \Webservices\StructType\KadasterV2OverzichtProduct $overzicht = null)
    {
        $this
            ->setBericht($bericht)
            ->setDocument($document)
            ->setOverzicht($overzicht);
    }
    /**
     * Get bericht value
     * @return \Webservices\StructType\KadasterV2KadastraalBerichtObjectProduct|null
     */
    public function getBericht()
    {
        return $this->bericht;
    }
    /**
     * Set bericht value
     * @param \Webservices\StructType\KadasterV2KadastraalBerichtObjectProduct $bericht
     * @return \Webservices\StructType\KadasterV2KadastraalBerichtObjectResponse
     */
    public function setBericht(\Webservices\StructType\KadasterV2KadastraalBerichtObjectProduct $bericht = null)
    {
        $this->bericht = $bericht;
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
     * @return \Webservices\StructType\KadasterV2KadastraalBerichtObjectResponse
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
     * @return \Webservices\StructType\KadasterV2KadastraalBerichtObjectResponse
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
     * @return \Webservices\StructType\KadasterV2KadastraalBerichtObjectResponse
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
