<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BerichtObjectResultaatV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BerichtObjectResultaatV2 extends AbstractStructBase
{
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\OverzichtV2
     */
    public $overzicht;
    /**
     * The eigendomsbericht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\BerichtObjectV2
     */
    public $eigendomsbericht;
    /**
     * Constructor method for BerichtObjectResultaatV2
     * @uses BerichtObjectResultaatV2::setOverzicht()
     * @uses BerichtObjectResultaatV2::setEigendomsbericht()
     * @param \Webservices\StructType\OverzichtV2 $overzicht
     * @param \Webservices\StructType\BerichtObjectV2 $eigendomsbericht
     */
    public function __construct(\Webservices\StructType\OverzichtV2 $overzicht = null, \Webservices\StructType\BerichtObjectV2 $eigendomsbericht = null)
    {
        $this
            ->setOverzicht($overzicht)
            ->setEigendomsbericht($eigendomsbericht);
    }
    /**
     * Get overzicht value
     * @return \Webservices\StructType\OverzichtV2|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\OverzichtV2 $overzicht
     * @return \Webservices\StructType\BerichtObjectResultaatV2
     */
    public function setOverzicht(\Webservices\StructType\OverzichtV2 $overzicht = null)
    {
        $this->overzicht = $overzicht;
        return $this;
    }
    /**
     * Get eigendomsbericht value
     * @return \Webservices\StructType\BerichtObjectV2|null
     */
    public function getEigendomsbericht()
    {
        return $this->eigendomsbericht;
    }
    /**
     * Set eigendomsbericht value
     * @param \Webservices\StructType\BerichtObjectV2 $eigendomsbericht
     * @return \Webservices\StructType\BerichtObjectResultaatV2
     */
    public function setEigendomsbericht(\Webservices\StructType\BerichtObjectV2 $eigendomsbericht = null)
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
     * @return \Webservices\StructType\BerichtObjectResultaatV2
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
