<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterUittrekselKadastraleKaartPostcodeResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterUittrekselKadastraleKaartPostcodeResponseType extends AbstractStructBase
{
    /**
     * The uittreksel
     * @var \Webservices\StructType\UittrekselKadastraleKaart
     */
    public $uittreksel;
    /**
     * Constructor method for kadasterUittrekselKadastraleKaartPostcodeResponseType
     * @uses KadasterUittrekselKadastraleKaartPostcodeResponseType::setUittreksel()
     * @param \Webservices\StructType\UittrekselKadastraleKaart $uittreksel
     */
    public function __construct(\Webservices\StructType\UittrekselKadastraleKaart $uittreksel = null)
    {
        $this
            ->setUittreksel($uittreksel);
    }
    /**
     * Get uittreksel value
     * @return \Webservices\StructType\UittrekselKadastraleKaart|null
     */
    public function getUittreksel()
    {
        return $this->uittreksel;
    }
    /**
     * Set uittreksel value
     * @param \Webservices\StructType\UittrekselKadastraleKaart $uittreksel
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeResponseType
     */
    public function setUittreksel(\Webservices\StructType\UittrekselKadastraleKaart $uittreksel = null)
    {
        $this->uittreksel = $uittreksel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeResponseType
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
