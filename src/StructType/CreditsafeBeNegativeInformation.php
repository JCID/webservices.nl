<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeNegativeInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeNegativeInformation extends AbstractStructBase
{
    /**
     * The nsso_details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeBeNSSODetailArray
     */
    public $nsso_details;
    /**
     * The protested_bills
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeBeProtestedBillArray
     */
    public $protested_bills;
    /**
     * The bankruptcy_events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeBeBankruptcyEventArray
     */
    public $bankruptcy_events;
    /**
     * Constructor method for CreditsafeBeNegativeInformation
     * @uses CreditsafeBeNegativeInformation::setNsso_details()
     * @uses CreditsafeBeNegativeInformation::setProtested_bills()
     * @uses CreditsafeBeNegativeInformation::setBankruptcy_events()
     * @param \Webservices\ArrayType\CreditsafeBeNSSODetailArray $nsso_details
     * @param \Webservices\ArrayType\CreditsafeBeProtestedBillArray $protested_bills
     * @param \Webservices\ArrayType\CreditsafeBeBankruptcyEventArray $bankruptcy_events
     */
    public function __construct(\Webservices\ArrayType\CreditsafeBeNSSODetailArray $nsso_details = null, \Webservices\ArrayType\CreditsafeBeProtestedBillArray $protested_bills = null, \Webservices\ArrayType\CreditsafeBeBankruptcyEventArray $bankruptcy_events = null)
    {
        $this
            ->setNsso_details($nsso_details)
            ->setProtested_bills($protested_bills)
            ->setBankruptcy_events($bankruptcy_events);
    }
    /**
     * Get nsso_details value
     * @return \Webservices\ArrayType\CreditsafeBeNSSODetailArray|null
     */
    public function getNsso_details()
    {
        return $this->nsso_details;
    }
    /**
     * Set nsso_details value
     * @param \Webservices\ArrayType\CreditsafeBeNSSODetailArray $nsso_details
     * @return \Webservices\StructType\CreditsafeBeNegativeInformation
     */
    public function setNsso_details(\Webservices\ArrayType\CreditsafeBeNSSODetailArray $nsso_details = null)
    {
        $this->nsso_details = $nsso_details;
        return $this;
    }
    /**
     * Get protested_bills value
     * @return \Webservices\ArrayType\CreditsafeBeProtestedBillArray|null
     */
    public function getProtested_bills()
    {
        return $this->protested_bills;
    }
    /**
     * Set protested_bills value
     * @param \Webservices\ArrayType\CreditsafeBeProtestedBillArray $protested_bills
     * @return \Webservices\StructType\CreditsafeBeNegativeInformation
     */
    public function setProtested_bills(\Webservices\ArrayType\CreditsafeBeProtestedBillArray $protested_bills = null)
    {
        $this->protested_bills = $protested_bills;
        return $this;
    }
    /**
     * Get bankruptcy_events value
     * @return \Webservices\ArrayType\CreditsafeBeBankruptcyEventArray|null
     */
    public function getBankruptcy_events()
    {
        return $this->bankruptcy_events;
    }
    /**
     * Set bankruptcy_events value
     * @param \Webservices\ArrayType\CreditsafeBeBankruptcyEventArray $bankruptcy_events
     * @return \Webservices\StructType\CreditsafeBeNegativeInformation
     */
    public function setBankruptcy_events(\Webservices\ArrayType\CreditsafeBeBankruptcyEventArray $bankruptcy_events = null)
    {
        $this->bankruptcy_events = $bankruptcy_events;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeNegativeInformation
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
