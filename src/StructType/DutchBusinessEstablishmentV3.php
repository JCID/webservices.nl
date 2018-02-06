<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessEstablishmentV3 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessEstablishmentV3 extends AbstractStructBase
{
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The main_establishment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $main_establishment;
    /**
     * The legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_text;
    /**
     * The activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $activity;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The establishment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $establishment_date;
    /**
     * The date_since
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $date_since;
    /**
     * The personnel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessPersonnelInfoV3
     */
    public $personnel;
    /**
     * The remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $remarks;
    /**
     * The sbi_codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessSbiCodeV3Array
     */
    public $sbi_codes;
    /**
     * The establishment_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $establishment_address;
    /**
     * The correspondence_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $correspondence_address;
    /**
     * The telephone_numbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $telephone_numbers;
    /**
     * The fax_numbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $fax_numbers;
    /**
     * The email_addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $email_addresses;
    /**
     * The domain_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $domain_names;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * Constructor method for DutchBusinessEstablishmentV3
     * @uses DutchBusinessEstablishmentV3::setEstablishment_number()
     * @uses DutchBusinessEstablishmentV3::setMain_establishment()
     * @uses DutchBusinessEstablishmentV3::setLegal_form_text()
     * @uses DutchBusinessEstablishmentV3::setActivity()
     * @uses DutchBusinessEstablishmentV3::setDescription()
     * @uses DutchBusinessEstablishmentV3::setEstablishment_date()
     * @uses DutchBusinessEstablishmentV3::setDate_since()
     * @uses DutchBusinessEstablishmentV3::setPersonnel()
     * @uses DutchBusinessEstablishmentV3::setRemarks()
     * @uses DutchBusinessEstablishmentV3::setSbi_codes()
     * @uses DutchBusinessEstablishmentV3::setEstablishment_address()
     * @uses DutchBusinessEstablishmentV3::setCorrespondence_address()
     * @uses DutchBusinessEstablishmentV3::setTelephone_numbers()
     * @uses DutchBusinessEstablishmentV3::setFax_numbers()
     * @uses DutchBusinessEstablishmentV3::setEmail_addresses()
     * @uses DutchBusinessEstablishmentV3::setDomain_names()
     * @uses DutchBusinessEstablishmentV3::setTrade_names()
     * @param string $establishment_number
     * @param bool $main_establishment
     * @param string $legal_form_text
     * @param string $activity
     * @param string $description
     * @param \Webservices\StructType\DutchBusinessDateV3 $establishment_date
     * @param \Webservices\StructType\DutchBusinessDateV3 $date_since
     * @param \Webservices\StructType\DutchBusinessPersonnelInfoV3 $personnel
     * @param \Webservices\ArrayType\StringArray $remarks
     * @param \Webservices\ArrayType\DutchBusinessSbiCodeV3Array $sbi_codes
     * @param \Webservices\StructType\DutchBusinessAddressV3 $establishment_address
     * @param \Webservices\StructType\DutchBusinessAddressV3 $correspondence_address
     * @param \Webservices\ArrayType\StringArray $telephone_numbers
     * @param \Webservices\ArrayType\StringArray $fax_numbers
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @param \Webservices\ArrayType\StringArray $domain_names
     * @param \Webservices\ArrayType\StringArray $trade_names
     */
    public function __construct($establishment_number = null, $main_establishment = null, $legal_form_text = null, $activity = null, $description = null, \Webservices\StructType\DutchBusinessDateV3 $establishment_date = null, \Webservices\StructType\DutchBusinessDateV3 $date_since = null, \Webservices\StructType\DutchBusinessPersonnelInfoV3 $personnel = null, \Webservices\ArrayType\StringArray $remarks = null, \Webservices\ArrayType\DutchBusinessSbiCodeV3Array $sbi_codes = null, \Webservices\StructType\DutchBusinessAddressV3 $establishment_address = null, \Webservices\StructType\DutchBusinessAddressV3 $correspondence_address = null, \Webservices\ArrayType\StringArray $telephone_numbers = null, \Webservices\ArrayType\StringArray $fax_numbers = null, \Webservices\ArrayType\StringArray $email_addresses = null, \Webservices\ArrayType\StringArray $domain_names = null, \Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this
            ->setEstablishment_number($establishment_number)
            ->setMain_establishment($main_establishment)
            ->setLegal_form_text($legal_form_text)
            ->setActivity($activity)
            ->setDescription($description)
            ->setEstablishment_date($establishment_date)
            ->setDate_since($date_since)
            ->setPersonnel($personnel)
            ->setRemarks($remarks)
            ->setSbi_codes($sbi_codes)
            ->setEstablishment_address($establishment_address)
            ->setCorrespondence_address($correspondence_address)
            ->setTelephone_numbers($telephone_numbers)
            ->setFax_numbers($fax_numbers)
            ->setEmail_addresses($email_addresses)
            ->setDomain_names($domain_names)
            ->setTrade_names($trade_names);
    }
    /**
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get main_establishment value
     * @return bool|null
     */
    public function getMain_establishment()
    {
        return $this->main_establishment;
    }
    /**
     * Set main_establishment value
     * @param bool $main_establishment
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setMain_establishment($main_establishment = null)
    {
        // validation for constraint: boolean
        if (!is_null($main_establishment) && !is_bool($main_establishment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($main_establishment)), __LINE__);
        }
        $this->main_establishment = $main_establishment;
        return $this;
    }
    /**
     * Get legal_form_text value
     * @return string|null
     */
    public function getLegal_form_text()
    {
        return $this->legal_form_text;
    }
    /**
     * Set legal_form_text value
     * @param string $legal_form_text
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setLegal_form_text($legal_form_text = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_text) && !is_string($legal_form_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_text)), __LINE__);
        }
        $this->legal_form_text = $legal_form_text;
        return $this;
    }
    /**
     * Get activity value
     * @return string|null
     */
    public function getActivity()
    {
        return $this->activity;
    }
    /**
     * Set activity value
     * @param string $activity
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setActivity($activity = null)
    {
        // validation for constraint: string
        if (!is_null($activity) && !is_string($activity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($activity)), __LINE__);
        }
        $this->activity = $activity;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get establishment_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getEstablishment_date()
    {
        return $this->establishment_date;
    }
    /**
     * Set establishment_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $establishment_date
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setEstablishment_date(\Webservices\StructType\DutchBusinessDateV3 $establishment_date = null)
    {
        $this->establishment_date = $establishment_date;
        return $this;
    }
    /**
     * Get date_since value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getDate_since()
    {
        return $this->date_since;
    }
    /**
     * Set date_since value
     * @param \Webservices\StructType\DutchBusinessDateV3 $date_since
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setDate_since(\Webservices\StructType\DutchBusinessDateV3 $date_since = null)
    {
        $this->date_since = $date_since;
        return $this;
    }
    /**
     * Get personnel value
     * @return \Webservices\StructType\DutchBusinessPersonnelInfoV3|null
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }
    /**
     * Set personnel value
     * @param \Webservices\StructType\DutchBusinessPersonnelInfoV3 $personnel
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setPersonnel(\Webservices\StructType\DutchBusinessPersonnelInfoV3 $personnel = null)
    {
        $this->personnel = $personnel;
        return $this;
    }
    /**
     * Get remarks value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @param \Webservices\ArrayType\StringArray $remarks
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setRemarks(\Webservices\ArrayType\StringArray $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Get sbi_codes value
     * @return \Webservices\ArrayType\DutchBusinessSbiCodeV3Array|null
     */
    public function getSbi_codes()
    {
        return $this->sbi_codes;
    }
    /**
     * Set sbi_codes value
     * @param \Webservices\ArrayType\DutchBusinessSbiCodeV3Array $sbi_codes
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setSbi_codes(\Webservices\ArrayType\DutchBusinessSbiCodeV3Array $sbi_codes = null)
    {
        $this->sbi_codes = $sbi_codes;
        return $this;
    }
    /**
     * Get establishment_address value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getEstablishment_address()
    {
        return $this->establishment_address;
    }
    /**
     * Set establishment_address value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $establishment_address
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setEstablishment_address(\Webservices\StructType\DutchBusinessAddressV3 $establishment_address = null)
    {
        $this->establishment_address = $establishment_address;
        return $this;
    }
    /**
     * Get correspondence_address value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getCorrespondence_address()
    {
        return $this->correspondence_address;
    }
    /**
     * Set correspondence_address value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $correspondence_address
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setCorrespondence_address(\Webservices\StructType\DutchBusinessAddressV3 $correspondence_address = null)
    {
        $this->correspondence_address = $correspondence_address;
        return $this;
    }
    /**
     * Get telephone_numbers value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTelephone_numbers()
    {
        return $this->telephone_numbers;
    }
    /**
     * Set telephone_numbers value
     * @param \Webservices\ArrayType\StringArray $telephone_numbers
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setTelephone_numbers(\Webservices\ArrayType\StringArray $telephone_numbers = null)
    {
        $this->telephone_numbers = $telephone_numbers;
        return $this;
    }
    /**
     * Get fax_numbers value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getFax_numbers()
    {
        return $this->fax_numbers;
    }
    /**
     * Set fax_numbers value
     * @param \Webservices\ArrayType\StringArray $fax_numbers
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setFax_numbers(\Webservices\ArrayType\StringArray $fax_numbers = null)
    {
        $this->fax_numbers = $fax_numbers;
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
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setEmail_addresses(\Webservices\ArrayType\StringArray $email_addresses = null)
    {
        $this->email_addresses = $email_addresses;
        return $this;
    }
    /**
     * Get domain_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getDomain_names()
    {
        return $this->domain_names;
    }
    /**
     * Set domain_names value
     * @param \Webservices\ArrayType\StringArray $domain_names
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setDomain_names(\Webservices\ArrayType\StringArray $domain_names = null)
    {
        $this->domain_names = $domain_names;
        return $this;
    }
    /**
     * Get trade_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTrade_names()
    {
        return $this->trade_names;
    }
    /**
     * Set trade_names value
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessEstablishmentV3
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
