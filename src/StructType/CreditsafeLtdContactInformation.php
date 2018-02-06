<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdContactInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdContactInformation extends AbstractStructBase
{
    /**
     * The main_address
     * @var \Webservices\StructType\CreditsafeStreetAddressWithTelephone
     */
    public $main_address;
    /**
     * The other_addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeStreetAddressWithTelephoneArray
     */
    public $other_addresses;
    /**
     * The previous_addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeStreetAddressArray
     */
    public $previous_addresses;
    /**
     * The email_addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $email_addresses;
    /**
     * The websites
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $websites;
    /**
     * Constructor method for CreditsafeLtdContactInformation
     * @uses CreditsafeLtdContactInformation::setMain_address()
     * @uses CreditsafeLtdContactInformation::setOther_addresses()
     * @uses CreditsafeLtdContactInformation::setPrevious_addresses()
     * @uses CreditsafeLtdContactInformation::setEmail_addresses()
     * @uses CreditsafeLtdContactInformation::setWebsites()
     * @param \Webservices\StructType\CreditsafeStreetAddressWithTelephone $main_address
     * @param \Webservices\ArrayType\CreditsafeStreetAddressWithTelephoneArray $other_addresses
     * @param \Webservices\ArrayType\CreditsafeStreetAddressArray $previous_addresses
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @param \Webservices\ArrayType\StringArray $websites
     */
    public function __construct(\Webservices\StructType\CreditsafeStreetAddressWithTelephone $main_address = null, \Webservices\ArrayType\CreditsafeStreetAddressWithTelephoneArray $other_addresses = null, \Webservices\ArrayType\CreditsafeStreetAddressArray $previous_addresses = null, \Webservices\ArrayType\StringArray $email_addresses = null, \Webservices\ArrayType\StringArray $websites = null)
    {
        $this
            ->setMain_address($main_address)
            ->setOther_addresses($other_addresses)
            ->setPrevious_addresses($previous_addresses)
            ->setEmail_addresses($email_addresses)
            ->setWebsites($websites);
    }
    /**
     * Get main_address value
     * @return \Webservices\StructType\CreditsafeStreetAddressWithTelephone|null
     */
    public function getMain_address()
    {
        return $this->main_address;
    }
    /**
     * Set main_address value
     * @param \Webservices\StructType\CreditsafeStreetAddressWithTelephone $main_address
     * @return \Webservices\StructType\CreditsafeLtdContactInformation
     */
    public function setMain_address(\Webservices\StructType\CreditsafeStreetAddressWithTelephone $main_address = null)
    {
        $this->main_address = $main_address;
        return $this;
    }
    /**
     * Get other_addresses value
     * @return \Webservices\ArrayType\CreditsafeStreetAddressWithTelephoneArray|null
     */
    public function getOther_addresses()
    {
        return $this->other_addresses;
    }
    /**
     * Set other_addresses value
     * @param \Webservices\ArrayType\CreditsafeStreetAddressWithTelephoneArray $other_addresses
     * @return \Webservices\StructType\CreditsafeLtdContactInformation
     */
    public function setOther_addresses(\Webservices\ArrayType\CreditsafeStreetAddressWithTelephoneArray $other_addresses = null)
    {
        $this->other_addresses = $other_addresses;
        return $this;
    }
    /**
     * Get previous_addresses value
     * @return \Webservices\ArrayType\CreditsafeStreetAddressArray|null
     */
    public function getPrevious_addresses()
    {
        return $this->previous_addresses;
    }
    /**
     * Set previous_addresses value
     * @param \Webservices\ArrayType\CreditsafeStreetAddressArray $previous_addresses
     * @return \Webservices\StructType\CreditsafeLtdContactInformation
     */
    public function setPrevious_addresses(\Webservices\ArrayType\CreditsafeStreetAddressArray $previous_addresses = null)
    {
        $this->previous_addresses = $previous_addresses;
        return $this;
    }
    /**
     * Get email_addresses value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getEmail_addresses()
    {
        return $this->email_addresses;
    }
    /**
     * Set email_addresses value
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @return \Webservices\StructType\CreditsafeLtdContactInformation
     */
    public function setEmail_addresses(\Webservices\ArrayType\StringArray $email_addresses = null)
    {
        $this->email_addresses = $email_addresses;
        return $this;
    }
    /**
     * Get websites value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getWebsites()
    {
        return $this->websites;
    }
    /**
     * Set websites value
     * @param \Webservices\ArrayType\StringArray $websites
     * @return \Webservices\StructType\CreditsafeLtdContactInformation
     */
    public function setWebsites(\Webservices\ArrayType\StringArray $websites = null)
    {
        $this->websites = $websites;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdContactInformation
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
