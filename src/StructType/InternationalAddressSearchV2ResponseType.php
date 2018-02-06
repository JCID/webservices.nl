<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for internationalAddressSearchV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InternationalAddressSearchV2ResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\InternationalAddressSearchV2Result
     */
    public $out;
    /**
     * Constructor method for internationalAddressSearchV2ResponseType
     * @uses InternationalAddressSearchV2ResponseType::setOut()
     * @param \Webservices\StructType\InternationalAddressSearchV2Result $out
     */
    public function __construct(\Webservices\StructType\InternationalAddressSearchV2Result $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\InternationalAddressSearchV2Result|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\InternationalAddressSearchV2Result $out
     * @return \Webservices\StructType\InternationalAddressSearchV2ResponseType
     */
    public function setOut(\Webservices\StructType\InternationalAddressSearchV2Result $out = null)
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
     * @return \Webservices\StructType\InternationalAddressSearchV2ResponseType
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
