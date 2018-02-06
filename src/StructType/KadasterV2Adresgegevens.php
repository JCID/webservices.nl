<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Adresgegevens StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Adresgegevens extends AbstractStructBase
{
    /**
     * The nummeraanduiding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Nummeraanduiding
     */
    public $nummeraanduiding;
    /**
     * Constructor method for KadasterV2Adresgegevens
     * @uses KadasterV2Adresgegevens::setNummeraanduiding()
     * @param \Webservices\StructType\KadasterV2Nummeraanduiding $nummeraanduiding
     */
    public function __construct(\Webservices\StructType\KadasterV2Nummeraanduiding $nummeraanduiding = null)
    {
        $this
            ->setNummeraanduiding($nummeraanduiding);
    }
    /**
     * Get nummeraanduiding value
     * @return \Webservices\StructType\KadasterV2Nummeraanduiding|null
     */
    public function getNummeraanduiding()
    {
        return $this->nummeraanduiding;
    }
    /**
     * Set nummeraanduiding value
     * @param \Webservices\StructType\KadasterV2Nummeraanduiding $nummeraanduiding
     * @return \Webservices\StructType\KadasterV2Adresgegevens
     */
    public function setNummeraanduiding(\Webservices\StructType\KadasterV2Nummeraanduiding $nummeraanduiding = null)
    {
        $this->nummeraanduiding = $nummeraanduiding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Adresgegevens
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
