<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nbwoEstimateValueResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NbwoEstimateValueResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\NbwoWaarde
     */
    public $out;
    /**
     * Constructor method for nbwoEstimateValueResponseType
     * @uses NbwoEstimateValueResponseType::setOut()
     * @param \Webservices\StructType\NbwoWaarde $out
     */
    public function __construct(\Webservices\StructType\NbwoWaarde $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\NbwoWaarde|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\NbwoWaarde $out
     * @return \Webservices\StructType\NbwoEstimateValueResponseType
     */
    public function setOut(\Webservices\StructType\NbwoWaarde $out = null)
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
     * @return \Webservices\StructType\NbwoEstimateValueResponseType
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
