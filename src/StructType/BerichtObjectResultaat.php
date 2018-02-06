<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BerichtObjectResultaat StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BerichtObjectResultaat extends AbstractStructBase
{
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\Overzicht
     */
    public $overzicht;
    /**
     * The eigendomsbericht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\BerichtObject
     */
    public $eigendomsbericht;
    /**
     * Constructor method for BerichtObjectResultaat
     * @uses BerichtObjectResultaat::setOverzicht()
     * @uses BerichtObjectResultaat::setEigendomsbericht()
     * @param \Webservices\StructType\Overzicht $overzicht
     * @param \Webservices\StructType\BerichtObject $eigendomsbericht
     */
    public function __construct(\Webservices\StructType\Overzicht $overzicht = null, \Webservices\StructType\BerichtObject $eigendomsbericht = null)
    {
        $this
            ->setOverzicht($overzicht)
            ->setEigendomsbericht($eigendomsbericht);
    }
    /**
     * Get overzicht value
     * @return \Webservices\StructType\Overzicht|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\Overzicht $overzicht
     * @return \Webservices\StructType\BerichtObjectResultaat
     */
    public function setOverzicht(\Webservices\StructType\Overzicht $overzicht = null)
    {
        $this->overzicht = $overzicht;
        return $this;
    }
    /**
     * Get eigendomsbericht value
     * @return \Webservices\StructType\BerichtObject|null
     */
    public function getEigendomsbericht()
    {
        return $this->eigendomsbericht;
    }
    /**
     * Set eigendomsbericht value
     * @param \Webservices\StructType\BerichtObject $eigendomsbericht
     * @return \Webservices\StructType\BerichtObjectResultaat
     */
    public function setEigendomsbericht(\Webservices\StructType\BerichtObject $eigendomsbericht = null)
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
     * @return \Webservices\StructType\BerichtObjectResultaat
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
