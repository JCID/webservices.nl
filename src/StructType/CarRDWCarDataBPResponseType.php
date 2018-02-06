<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carRDWCarDataBPResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarRDWCarDataBPResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\CarBP
     */
    public $out;
    /**
     * Constructor method for carRDWCarDataBPResponseType
     * @uses CarRDWCarDataBPResponseType::setOut()
     * @param \Webservices\StructType\CarBP $out
     */
    public function __construct(\Webservices\StructType\CarBP $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\CarBP|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\CarBP $out
     * @return \Webservices\StructType\CarRDWCarDataBPResponseType
     */
    public function setOut(\Webservices\StructType\CarBP $out = null)
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
     * @return \Webservices\StructType\CarRDWCarDataBPResponseType
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
