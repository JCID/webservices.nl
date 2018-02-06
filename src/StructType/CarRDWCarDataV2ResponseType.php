<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carRDWCarDataV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarRDWCarDataV2ResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\CarV2
     */
    public $out;
    /**
     * Constructor method for carRDWCarDataV2ResponseType
     * @uses CarRDWCarDataV2ResponseType::setOut()
     * @param \Webservices\StructType\CarV2 $out
     */
    public function __construct(\Webservices\StructType\CarV2 $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\CarV2|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\CarV2 $out
     * @return \Webservices\StructType\CarRDWCarDataV2ResponseType
     */
    public function setOut(\Webservices\StructType\CarV2 $out = null)
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
     * @return \Webservices\StructType\CarRDWCarDataV2ResponseType
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
