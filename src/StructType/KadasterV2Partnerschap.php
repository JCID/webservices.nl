<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Partnerschap StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Partnerschap extends AbstractStructBase
{
    /**
     * The naam_partner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2NaamPartner
     */
    public $naam_partner;
    /**
     * Constructor method for KadasterV2Partnerschap
     * @uses KadasterV2Partnerschap::setNaam_partner()
     * @param \Webservices\StructType\KadasterV2NaamPartner $naam_partner
     */
    public function __construct(\Webservices\StructType\KadasterV2NaamPartner $naam_partner = null)
    {
        $this
            ->setNaam_partner($naam_partner);
    }
    /**
     * Get naam_partner value
     * @return \Webservices\StructType\KadasterV2NaamPartner|null
     */
    public function getNaam_partner()
    {
        return $this->naam_partner;
    }
    /**
     * Set naam_partner value
     * @param \Webservices\StructType\KadasterV2NaamPartner $naam_partner
     * @return \Webservices\StructType\KadasterV2Partnerschap
     */
    public function setNaam_partner(\Webservices\StructType\KadasterV2NaamPartner $naam_partner = null)
    {
        $this->naam_partner = $naam_partner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Partnerschap
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
