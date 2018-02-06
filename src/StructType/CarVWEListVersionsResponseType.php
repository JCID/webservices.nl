<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carVWEListVersionsResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEListVersionsResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\CarVWEVersionPagedResult
     */
    public $out;
    /**
     * Constructor method for carVWEListVersionsResponseType
     * @uses CarVWEListVersionsResponseType::setOut()
     * @param \Webservices\StructType\CarVWEVersionPagedResult $out
     */
    public function __construct(\Webservices\StructType\CarVWEVersionPagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\CarVWEVersionPagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\CarVWEVersionPagedResult $out
     * @return \Webservices\StructType\CarVWEListVersionsResponseType
     */
    public function setOut(\Webservices\StructType\CarVWEVersionPagedResult $out = null)
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
     * @return \Webservices\StructType\CarVWEListVersionsResponseType
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
