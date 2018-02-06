<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2BetreftNietNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2BetreftNietNatuurlijkPersoon extends AbstractStructBase
{
    /**
     * The rechtspersoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Rechtspersoon
     */
    public $rechtspersoon;
    /**
     * Constructor method for KadasterV2BetreftNietNatuurlijkPersoon
     * @uses KadasterV2BetreftNietNatuurlijkPersoon::setRechtspersoon()
     * @param \Webservices\StructType\KadasterV2Rechtspersoon $rechtspersoon
     */
    public function __construct(\Webservices\StructType\KadasterV2Rechtspersoon $rechtspersoon = null)
    {
        $this
            ->setRechtspersoon($rechtspersoon);
    }
    /**
     * Get rechtspersoon value
     * @return \Webservices\StructType\KadasterV2Rechtspersoon|null
     */
    public function getRechtspersoon()
    {
        return $this->rechtspersoon;
    }
    /**
     * Set rechtspersoon value
     * @param \Webservices\StructType\KadasterV2Rechtspersoon $rechtspersoon
     * @return \Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon
     */
    public function setRechtspersoon(\Webservices\StructType\KadasterV2Rechtspersoon $rechtspersoon = null)
    {
        $this->rechtspersoon = $rechtspersoon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon
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
