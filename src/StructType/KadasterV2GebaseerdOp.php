<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2GebaseerdOp StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GebaseerdOp extends AbstractStructBase
{
    /**
     * The stukdeel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Stukdeel
     */
    public $stukdeel;
    /**
     * Constructor method for KadasterV2GebaseerdOp
     * @uses KadasterV2GebaseerdOp::setStukdeel()
     * @param \Webservices\StructType\KadasterV2Stukdeel $stukdeel
     */
    public function __construct(\Webservices\StructType\KadasterV2Stukdeel $stukdeel = null)
    {
        $this
            ->setStukdeel($stukdeel);
    }
    /**
     * Get stukdeel value
     * @return \Webservices\StructType\KadasterV2Stukdeel|null
     */
    public function getStukdeel()
    {
        return $this->stukdeel;
    }
    /**
     * Set stukdeel value
     * @param \Webservices\StructType\KadasterV2Stukdeel $stukdeel
     * @return \Webservices\StructType\KadasterV2GebaseerdOp
     */
    public function setStukdeel(\Webservices\StructType\KadasterV2Stukdeel $stukdeel = null)
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
     * @return \Webservices\StructType\KadasterV2GebaseerdOp
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
