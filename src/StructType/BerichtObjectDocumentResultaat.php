<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BerichtObjectDocumentResultaat StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BerichtObjectDocumentResultaat extends AbstractStructBase
{
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DocumentOverzicht
     */
    public $overzicht;
    /**
     * The eigendomsbericht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\BerichtObjectDocument
     */
    public $eigendomsbericht;
    /**
     * Constructor method for BerichtObjectDocumentResultaat
     * @uses BerichtObjectDocumentResultaat::setOverzicht()
     * @uses BerichtObjectDocumentResultaat::setEigendomsbericht()
     * @param \Webservices\StructType\DocumentOverzicht $overzicht
     * @param \Webservices\StructType\BerichtObjectDocument $eigendomsbericht
     */
    public function __construct(\Webservices\StructType\DocumentOverzicht $overzicht = null, \Webservices\StructType\BerichtObjectDocument $eigendomsbericht = null)
    {
        $this
            ->setOverzicht($overzicht)
            ->setEigendomsbericht($eigendomsbericht);
    }
    /**
     * Get overzicht value
     * @return \Webservices\StructType\DocumentOverzicht|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\DocumentOverzicht $overzicht
     * @return \Webservices\StructType\BerichtObjectDocumentResultaat
     */
    public function setOverzicht(\Webservices\StructType\DocumentOverzicht $overzicht = null)
    {
        $this->overzicht = $overzicht;
        return $this;
    }
    /**
     * Get eigendomsbericht value
     * @return \Webservices\StructType\BerichtObjectDocument|null
     */
    public function getEigendomsbericht()
    {
        return $this->eigendomsbericht;
    }
    /**
     * Set eigendomsbericht value
     * @param \Webservices\StructType\BerichtObjectDocument $eigendomsbericht
     * @return \Webservices\StructType\BerichtObjectDocumentResultaat
     */
    public function setEigendomsbericht(\Webservices\StructType\BerichtObjectDocument $eigendomsbericht = null)
    {
        $this->eigendomsbericht = $eigendomsbericht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BerichtObjectDocumentResultaat
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
