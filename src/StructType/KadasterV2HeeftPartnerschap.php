<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2HeeftPartnerschap StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2HeeftPartnerschap extends AbstractStructBase
{
    /**
     * The partnerschap
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Partnerschap
     */
    public $partnerschap;
    /**
     * Constructor method for KadasterV2HeeftPartnerschap
     * @uses KadasterV2HeeftPartnerschap::setPartnerschap()
     * @param \Webservices\StructType\KadasterV2Partnerschap $partnerschap
     */
    public function __construct(\Webservices\StructType\KadasterV2Partnerschap $partnerschap = null)
    {
        $this
            ->setPartnerschap($partnerschap);
    }
    /**
     * Get partnerschap value
     * @return \Webservices\StructType\KadasterV2Partnerschap|null
     */
    public function getPartnerschap()
    {
        return $this->partnerschap;
    }
    /**
     * Set partnerschap value
     * @param \Webservices\StructType\KadasterV2Partnerschap $partnerschap
     * @return \Webservices\StructType\KadasterV2HeeftPartnerschap
     */
    public function setPartnerschap(\Webservices\StructType\KadasterV2Partnerschap $partnerschap = null)
    {
        $this->partnerschap = $partnerschap;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2HeeftPartnerschap
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
