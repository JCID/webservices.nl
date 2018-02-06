<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterHypothecairBerichtResultaat StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterHypothecairBerichtResultaat extends AbstractStructBase
{
    /**
     * The overzicht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterOverzicht
     */
    public $overzicht;
    /**
     * The hypothecairbericht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterHypothecairBerichtObject
     */
    public $hypothecairbericht;
    /**
     * Constructor method for kadasterHypothecairBerichtResultaat
     * @uses KadasterHypothecairBerichtResultaat::setOverzicht()
     * @uses KadasterHypothecairBerichtResultaat::setHypothecairbericht()
     * @param \Webservices\StructType\KadasterOverzicht $overzicht
     * @param \Webservices\StructType\KadasterHypothecairBerichtObject $hypothecairbericht
     */
    public function __construct(\Webservices\StructType\KadasterOverzicht $overzicht = null, \Webservices\StructType\KadasterHypothecairBerichtObject $hypothecairbericht = null)
    {
        $this
            ->setOverzicht($overzicht)
            ->setHypothecairbericht($hypothecairbericht);
    }
    /**
     * Get overzicht value
     * @return \Webservices\StructType\KadasterOverzicht|null
     */
    public function getOverzicht()
    {
        return $this->overzicht;
    }
    /**
     * Set overzicht value
     * @param \Webservices\StructType\KadasterOverzicht $overzicht
     * @return \Webservices\StructType\KadasterHypothecairBerichtResultaat
     */
    public function setOverzicht(\Webservices\StructType\KadasterOverzicht $overzicht = null)
    {
        $this->overzicht = $overzicht;
        return $this;
    }
    /**
     * Get hypothecairbericht value
     * @return \Webservices\StructType\KadasterHypothecairBerichtObject|null
     */
    public function getHypothecairbericht()
    {
        return $this->hypothecairbericht;
    }
    /**
     * Set hypothecairbericht value
     * @param \Webservices\StructType\KadasterHypothecairBerichtObject $hypothecairbericht
     * @return \Webservices\StructType\KadasterHypothecairBerichtResultaat
     */
    public function setHypothecairbericht(\Webservices\StructType\KadasterHypothecairBerichtObject $hypothecairbericht = null)
    {
        $this->hypothecairbericht = $hypothecairbericht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterHypothecairBerichtResultaat
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
