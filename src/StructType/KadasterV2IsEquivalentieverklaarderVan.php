<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2IsEquivalentieverklaarderVan StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2IsEquivalentieverklaarderVan extends AbstractStructBase
{
    /**
     * The ondertekenaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Ondertekenaar
     */
    public $ondertekenaar;
    /**
     * Constructor method for KadasterV2IsEquivalentieverklaarderVan
     * @uses KadasterV2IsEquivalentieverklaarderVan::setOndertekenaar()
     * @param \Webservices\StructType\KadasterV2Ondertekenaar $ondertekenaar
     */
    public function __construct(\Webservices\StructType\KadasterV2Ondertekenaar $ondertekenaar = null)
    {
        $this
            ->setOndertekenaar($ondertekenaar);
    }
    /**
     * Get ondertekenaar value
     * @return \Webservices\StructType\KadasterV2Ondertekenaar|null
     */
    public function getOndertekenaar()
    {
        return $this->ondertekenaar;
    }
    /**
     * Set ondertekenaar value
     * @param \Webservices\StructType\KadasterV2Ondertekenaar $ondertekenaar
     * @return \Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan
     */
    public function setOndertekenaar(\Webservices\StructType\KadasterV2Ondertekenaar $ondertekenaar = null)
    {
        $this->ondertekenaar = $ondertekenaar;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2IsEquivalentieverklaarderVan
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
