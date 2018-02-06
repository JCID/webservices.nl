<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2NaamType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2NaamType extends AbstractStructBase
{
    /**
     * The naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Naam
     */
    public $naam;
    /**
     * Constructor method for KadasterV2NaamType
     * @uses KadasterV2NaamType::setNaam()
     * @param \Webservices\StructType\KadasterV2Naam $naam
     */
    public function __construct(\Webservices\StructType\KadasterV2Naam $naam = null)
    {
        $this
            ->setNaam($naam);
    }
    /**
     * Get naam value
     * @return \Webservices\StructType\KadasterV2Naam|null
     */
    public function getNaam()
    {
        return $this->naam;
    }
    /**
     * Set naam value
     * @param \Webservices\StructType\KadasterV2Naam $naam
     * @return \Webservices\StructType\KadasterV2NaamType
     */
    public function setNaam(\Webservices\StructType\KadasterV2Naam $naam = null)
    {
        $this->naam = $naam;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2NaamType
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
