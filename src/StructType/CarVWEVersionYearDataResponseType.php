<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carVWEVersionYearDataResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEVersionYearDataResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\CarVWEVersionYearData
     */
    public $out;
    /**
     * Constructor method for carVWEVersionYearDataResponseType
     * @uses CarVWEVersionYearDataResponseType::setOut()
     * @param \Webservices\StructType\CarVWEVersionYearData $out
     */
    public function __construct(\Webservices\StructType\CarVWEVersionYearData $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\CarVWEVersionYearData|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\CarVWEVersionYearData $out
     * @return \Webservices\StructType\CarVWEVersionYearDataResponseType
     */
    public function setOut(\Webservices\StructType\CarVWEVersionYearData $out = null)
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
     * @return \Webservices\StructType\CarVWEVersionYearDataResponseType
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
