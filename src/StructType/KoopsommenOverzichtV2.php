<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KoopsommenOverzichtV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KoopsommenOverzichtV2 extends AbstractStructBase
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
     * @var \Webservices\StructType\KoopsommenOverzicht
     */
    public $overzicht;
    /**
     * Constructor method for KoopsommenOverzichtV2
     * @uses KoopsommenOverzichtV2::setDocument()
     * @uses KoopsommenOverzichtV2::setOverzicht()
     * @param string $document
     * @param \Webservices\StructType\KoopsommenOverzicht $overzicht
     */
    public function __construct($document = null, \Webservices\StructType\KoopsommenOverzicht $overzicht = null)
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
     * @return \Webservices\StructType\KoopsommenOverzichtV2
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
     * @return \Webservices\StructType\KoopsommenOverzicht|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\KoopsommenOverzicht $overzicht
     * @return \Webservices\StructType\KoopsommenOverzichtV2
     */
    public function setOverzicht(\Webservices\StructType\KoopsommenOverzicht $overzicht = null)
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
     * @return \Webservices\StructType\KoopsommenOverzichtV2
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
