<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carRDWCarDataResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarRDWCarDataResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\Car
     */
    public $out;
    /**
     * Constructor method for carRDWCarDataResponseType
     * @uses CarRDWCarDataResponseType::setOut()
     * @param \Webservices\StructType\Car $out
     */
    public function __construct(\Webservices\StructType\Car $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\Car|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\Car $out
     * @return \Webservices\StructType\CarRDWCarDataResponseType
     */
    public function setOut(\Webservices\StructType\Car $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarRDWCarDataResponseType
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
