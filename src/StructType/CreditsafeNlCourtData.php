<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlCourtData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlCourtData extends AbstractStructBase
{
    /**
     * The facts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeNlCourtDataFacts
     */
    public $facts;
    /**
     * The receiver_details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeNlCourtDataReceiver
     */
    public $receiver_details;
    /**
     * Constructor method for CreditsafeNlCourtData
     * @uses CreditsafeNlCourtData::setFacts()
     * @uses CreditsafeNlCourtData::setReceiver_details()
     * @param \Webservices\StructType\CreditsafeNlCourtDataFacts $facts
     * @param \Webservices\StructType\CreditsafeNlCourtDataReceiver $receiver_details
     */
    public function __construct(\Webservices\StructType\CreditsafeNlCourtDataFacts $facts = null, \Webservices\StructType\CreditsafeNlCourtDataReceiver $receiver_details = null)
    {
        $this
            ->setFacts($facts)
            ->setReceiver_details($receiver_details);
    }
    /**
     * Get facts value
     * @return \Webservices\StructType\CreditsafeNlCourtDataFacts|null
     */
    public function getFacts()
    {
        return $this->facts;
    }
    /**
     * Set facts value
     * @param \Webservices\StructType\CreditsafeNlCourtDataFacts $facts
     * @return \Webservices\StructType\CreditsafeNlCourtData
     */
    public function setFacts(\Webservices\StructType\CreditsafeNlCourtDataFacts $facts = null)
    {
        $this->facts = $facts;
        return $this;
    }
    /**
     * Get receiver_details value
     * @return \Webservices\StructType\CreditsafeNlCourtDataReceiver|null
     */
    public function getReceiver_details()
    {
        return $this->receiver_details;
    }
    /**
     * Set receiver_details value
     * @param \Webservices\StructType\CreditsafeNlCourtDataReceiver $receiver_details
     * @return \Webservices\StructType\CreditsafeNlCourtData
     */
    public function setReceiver_details(\Webservices\StructType\CreditsafeNlCourtDataReceiver $receiver_details = null)
    {
        $this->receiver_details = $receiver_details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlCourtData
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
