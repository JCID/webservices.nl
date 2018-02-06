<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KoopsommenBetreft StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KoopsommenBetreft extends AbstractStructBase
{
    /**
     * The gevraagd_gebied
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
     */
    public $gevraagd_gebied;
    /**
     * Constructor method for KadasterV2KoopsommenBetreft
     * @uses KadasterV2KoopsommenBetreft::setGevraagd_gebied()
     * @param \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied $gevraagd_gebied
     */
    public function __construct(\Webservices\StructType\KadasterV2KoopsommenGevraagdGebied $gevraagd_gebied = null)
    {
        $this
            ->setGevraagd_gebied($gevraagd_gebied);
    }
    /**
     * Get gevraagd_gebied value
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied|null
     */
    public function getGevraagd_gebied()
    {
        return $this->gevraagd_gebied;
    }
    /**
     * Set gevraagd_gebied value
     * @param \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied $gevraagd_gebied
     * @return \Webservices\StructType\KadasterV2KoopsommenBetreft
     */
    public function setGevraagd_gebied(\Webservices\StructType\KadasterV2KoopsommenGevraagdGebied $gevraagd_gebied = null)
    {
        $this->gevraagd_gebied = $gevraagd_gebied;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KoopsommenBetreft
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
