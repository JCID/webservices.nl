<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceNoteReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceNoteReference extends AbstractStructBase
{
    /**
     * The text
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $text;
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $source;
    /**
     * Constructor method for ComplianceNoteReference
     * @uses ComplianceNoteReference::setText()
     * @uses ComplianceNoteReference::setSource()
     * @param string $text
     * @param string $source
     */
    public function __construct($text = null, $source = null)
    {
        $this
            ->setText($text)
            ->setSource($source);
    }
    /**
     * Get text value
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Webservices\StructType\ComplianceNoteReference
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->text = $text;
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
     * @return \Webservices\StructType\ComplianceNoteReference
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
     * @return \Webservices\StructType\ComplianceNoteReference
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
