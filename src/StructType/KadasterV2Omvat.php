<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Omvat StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Omvat extends AbstractStructBase
{
    /**
     * The stukdeel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $stukdeel;
    /**
     * Constructor method for KadasterV2Omvat
     * @uses KadasterV2Omvat::setStukdeel()
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel
     */
    public function __construct(\Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel = null)
    {
        $this
            ->setStukdeel($stukdeel);
    }
    /**
     * Get stukdeel value
     * @return \Webservices\ArrayType\KadasterV2StukdeelArray|null
     */
    public function getStukdeel()
    {
        return $this->stukdeel;
    }
    /**
     * Set stukdeel value
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel
     * @return \Webservices\StructType\KadasterV2Omvat
     */
    public function setStukdeel(\Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel = null)
    {
        $this->stukdeel = $stukdeel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Omvat
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
