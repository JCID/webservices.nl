<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessLegalEntity StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessLegalEntity extends AbstractStructBase
{
    /**
     * The rsin_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rsin_number;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The alternative_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $alternative_name;
    /**
     * The shortened_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shortened_name;
    /**
     * The registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $registration;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_text;
    /**
     * The legal_form_change
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_change;
    /**
     * The foreign_legal_form_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $foreign_legal_form_description;
    /**
     * The sbi_codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $sbi_codes;
    /**
     * The sbi_codes_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $sbi_codes_text;
    /**
     * The activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $activity;
    /**
     * The company_arrangement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_arrangement;
    /**
     * The legal_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_name;
    /**
     * The statutory_seat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $statutory_seat;
    /**
     * The registration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $registration_date;
    /**
     * The founding_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $founding_date;
    /**
     * The discontinuation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $discontinuation_date;
    /**
     * The dissolution_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $dissolution_date;
    /**
     * The dissolution_reason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dissolution_reason;
    /**
     * The removal_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $removal_date;
    /**
     * The registration_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $registration_end_date;
    /**
     * The legal_entity_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $legal_entity_end_date;
    /**
     * The liquidation_closure_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $liquidation_closure_date;
    /**
     * The liquidation_reopening_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $liquidation_reopening_date;
    /**
     * The deed_incorporation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $deed_incorporation_date;
    /**
     * The deed_last_statutes_amendment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $deed_last_statutes_amendment_date;
    /**
     * The last_statutes_amendment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $last_statutes_amendment_date;
    /**
     * The liability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $liability;
    /**
     * The merger_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $merger_description;
    /**
     * The annual_report_submission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $annual_report_submission;
    /**
     * The authorized_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $authorized_share_capital;
    /**
     * The authorized_share_capital_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $authorized_share_capital_currency;
    /**
     * The issued_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $issued_share_capital;
    /**
     * The issued_share_capital_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issued_share_capital_currency;
    /**
     * The paid_up_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $paid_up_share_capital;
    /**
     * The paid_up_share_capital_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paid_up_share_capital_currency;
    /**
     * The establishment_postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_postcode;
    /**
     * The establishment_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_city;
    /**
     * The establishment_street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_street;
    /**
     * The establishment_house_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $establishment_house_number;
    /**
     * The establishment_house_number_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_house_number_addition;
    /**
     * The establishment_country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_country;
    /**
     * The correspondence_postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_postcode;
    /**
     * The correspondence_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_city;
    /**
     * The correspondence_street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_street;
    /**
     * The correspondence_house_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $correspondence_house_number;
    /**
     * The correspondence_house_number_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_house_number_addition;
    /**
     * The correspondence_country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_country;
    /**
     * The duration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $duration;
    /**
     * The duration_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $duration_end_date;
    /**
     * The shares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shares;
    /**
     * The share_holders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $share_holders;
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
     * Constructor method for DutchBusinessLegalEntity
     * @uses DutchBusinessLegalEntity::setRsin_number()
     * @uses DutchBusinessLegalEntity::setName()
     * @uses DutchBusinessLegalEntity::setAlternative_name()
     * @uses DutchBusinessLegalEntity::setShortened_name()
     * @uses DutchBusinessLegalEntity::setRegistration()
     * @uses DutchBusinessLegalEntity::setStatus()
     * @uses DutchBusinessLegalEntity::setLegal_form_text()
     * @uses DutchBusinessLegalEntity::setLegal_form_change()
     * @uses DutchBusinessLegalEntity::setForeign_legal_form_description()
     * @uses DutchBusinessLegalEntity::setSbi_codes()
     * @uses DutchBusinessLegalEntity::setSbi_codes_text()
     * @uses DutchBusinessLegalEntity::setActivity()
     * @uses DutchBusinessLegalEntity::setCompany_arrangement()
     * @uses DutchBusinessLegalEntity::setLegal_name()
     * @uses DutchBusinessLegalEntity::setStatutory_seat()
     * @uses DutchBusinessLegalEntity::setRegistration_date()
     * @uses DutchBusinessLegalEntity::setFounding_date()
     * @uses DutchBusinessLegalEntity::setDiscontinuation_date()
     * @uses DutchBusinessLegalEntity::setDissolution_date()
     * @uses DutchBusinessLegalEntity::setDissolution_reason()
     * @uses DutchBusinessLegalEntity::setRemoval_date()
     * @uses DutchBusinessLegalEntity::setRegistration_end_date()
     * @uses DutchBusinessLegalEntity::setLegal_entity_end_date()
     * @uses DutchBusinessLegalEntity::setLiquidation_closure_date()
     * @uses DutchBusinessLegalEntity::setLiquidation_reopening_date()
     * @uses DutchBusinessLegalEntity::setDeed_incorporation_date()
     * @uses DutchBusinessLegalEntity::setDeed_last_statutes_amendment_date()
     * @uses DutchBusinessLegalEntity::setLast_statutes_amendment_date()
     * @uses DutchBusinessLegalEntity::setLiability()
     * @uses DutchBusinessLegalEntity::setMerger_description()
     * @uses DutchBusinessLegalEntity::setAnnual_report_submission()
     * @uses DutchBusinessLegalEntity::setAuthorized_share_capital()
     * @uses DutchBusinessLegalEntity::setAuthorized_share_capital_currency()
     * @uses DutchBusinessLegalEntity::setIssued_share_capital()
     * @uses DutchBusinessLegalEntity::setIssued_share_capital_currency()
     * @uses DutchBusinessLegalEntity::setPaid_up_share_capital()
     * @uses DutchBusinessLegalEntity::setPaid_up_share_capital_currency()
     * @uses DutchBusinessLegalEntity::setEstablishment_postcode()
     * @uses DutchBusinessLegalEntity::setEstablishment_city()
     * @uses DutchBusinessLegalEntity::setEstablishment_street()
     * @uses DutchBusinessLegalEntity::setEstablishment_house_number()
     * @uses DutchBusinessLegalEntity::setEstablishment_house_number_addition()
     * @uses DutchBusinessLegalEntity::setEstablishment_country()
     * @uses DutchBusinessLegalEntity::setCorrespondence_postcode()
     * @uses DutchBusinessLegalEntity::setCorrespondence_city()
     * @uses DutchBusinessLegalEntity::setCorrespondence_street()
     * @uses DutchBusinessLegalEntity::setCorrespondence_house_number()
     * @uses DutchBusinessLegalEntity::setCorrespondence_house_number_addition()
     * @uses DutchBusinessLegalEntity::setCorrespondence_country()
     * @uses DutchBusinessLegalEntity::setDuration()
     * @uses DutchBusinessLegalEntity::setDuration_end_date()
     * @uses DutchBusinessLegalEntity::setShares()
     * @uses DutchBusinessLegalEntity::setShare_holders()
     * @uses DutchBusinessLegalEntity::setTelephone_numbers()
     * @uses DutchBusinessLegalEntity::setFax_numbers()
     * @uses DutchBusinessLegalEntity::setEmail_addresses()
     * @uses DutchBusinessLegalEntity::setDomain_names()
     * @param string $rsin_number
     * @param string $name
     * @param string $alternative_name
     * @param string $shortened_name
     * @param string $registration
     * @param string $status
     * @param string $legal_form_text
     * @param string $legal_form_change
     * @param string $foreign_legal_form_description
     * @param \Webservices\ArrayType\StringArray $sbi_codes
     * @param \Webservices\ArrayType\StringArray $sbi_codes_text
     * @param string $activity
     * @param string $company_arrangement
     * @param string $legal_name
     * @param string $statutory_seat
     * @param \Webservices\StructType\DutchBusinessDate $registration_date
     * @param \Webservices\StructType\DutchBusinessDate $founding_date
     * @param \Webservices\StructType\DutchBusinessDate $discontinuation_date
     * @param \Webservices\StructType\DutchBusinessDate $dissolution_date
     * @param string $dissolution_reason
     * @param \Webservices\StructType\DutchBusinessDate $removal_date
     * @param \Webservices\StructType\DutchBusinessDate $registration_end_date
     * @param \Webservices\StructType\DutchBusinessDate $legal_entity_end_date
     * @param \Webservices\StructType\DutchBusinessDate $liquidation_closure_date
     * @param \Webservices\StructType\DutchBusinessDate $liquidation_reopening_date
     * @param \Webservices\StructType\DutchBusinessDate $deed_incorporation_date
     * @param \Webservices\StructType\DutchBusinessDate $deed_last_statutes_amendment_date
     * @param \Webservices\StructType\DutchBusinessDate $last_statutes_amendment_date
     * @param string $liability
     * @param string $merger_description
     * @param string $annual_report_submission
     * @param int $authorized_share_capital
     * @param string $authorized_share_capital_currency
     * @param int $issued_share_capital
     * @param string $issued_share_capital_currency
     * @param int $paid_up_share_capital
     * @param string $paid_up_share_capital_currency
     * @param string $establishment_postcode
     * @param string $establishment_city
     * @param string $establishment_street
     * @param int $establishment_house_number
     * @param string $establishment_house_number_addition
     * @param string $establishment_country
     * @param string $correspondence_postcode
     * @param string $correspondence_city
     * @param string $correspondence_street
     * @param int $correspondence_house_number
     * @param string $correspondence_house_number_addition
     * @param string $correspondence_country
     * @param string $duration
     * @param \Webservices\StructType\DutchBusinessDate $duration_end_date
     * @param string $shares
     * @param string $share_holders
     * @param \Webservices\ArrayType\StringArray $telephone_numbers
     * @param \Webservices\ArrayType\StringArray $fax_numbers
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @param \Webservices\ArrayType\StringArray $domain_names
     */
    public function __construct($rsin_number = null, $name = null, $alternative_name = null, $shortened_name = null, $registration = null, $status = null, $legal_form_text = null, $legal_form_change = null, $foreign_legal_form_description = null, \Webservices\ArrayType\StringArray $sbi_codes = null, \Webservices\ArrayType\StringArray $sbi_codes_text = null, $activity = null, $company_arrangement = null, $legal_name = null, $statutory_seat = null, \Webservices\StructType\DutchBusinessDate $registration_date = null, \Webservices\StructType\DutchBusinessDate $founding_date = null, \Webservices\StructType\DutchBusinessDate $discontinuation_date = null, \Webservices\StructType\DutchBusinessDate $dissolution_date = null, $dissolution_reason = null, \Webservices\StructType\DutchBusinessDate $removal_date = null, \Webservices\StructType\DutchBusinessDate $registration_end_date = null, \Webservices\StructType\DutchBusinessDate $legal_entity_end_date = null, \Webservices\StructType\DutchBusinessDate $liquidation_closure_date = null, \Webservices\StructType\DutchBusinessDate $liquidation_reopening_date = null, \Webservices\StructType\DutchBusinessDate $deed_incorporation_date = null, \Webservices\StructType\DutchBusinessDate $deed_last_statutes_amendment_date = null, \Webservices\StructType\DutchBusinessDate $last_statutes_amendment_date = null, $liability = null, $merger_description = null, $annual_report_submission = null, $authorized_share_capital = null, $authorized_share_capital_currency = null, $issued_share_capital = null, $issued_share_capital_currency = null, $paid_up_share_capital = null, $paid_up_share_capital_currency = null, $establishment_postcode = null, $establishment_city = null, $establishment_street = null, $establishment_house_number = null, $establishment_house_number_addition = null, $establishment_country = null, $correspondence_postcode = null, $correspondence_city = null, $correspondence_street = null, $correspondence_house_number = null, $correspondence_house_number_addition = null, $correspondence_country = null, $duration = null, \Webservices\StructType\DutchBusinessDate $duration_end_date = null, $shares = null, $share_holders = null, \Webservices\ArrayType\StringArray $telephone_numbers = null, \Webservices\ArrayType\StringArray $fax_numbers = null, \Webservices\ArrayType\StringArray $email_addresses = null, \Webservices\ArrayType\StringArray $domain_names = null)
    {
        $this
            ->setRsin_number($rsin_number)
            ->setName($name)
            ->setAlternative_name($alternative_name)
            ->setShortened_name($shortened_name)
            ->setRegistration($registration)
            ->setStatus($status)
            ->setLegal_form_text($legal_form_text)
            ->setLegal_form_change($legal_form_change)
            ->setForeign_legal_form_description($foreign_legal_form_description)
            ->setSbi_codes($sbi_codes)
            ->setSbi_codes_text($sbi_codes_text)
            ->setActivity($activity)
            ->setCompany_arrangement($company_arrangement)
            ->setLegal_name($legal_name)
            ->setStatutory_seat($statutory_seat)
            ->setRegistration_date($registration_date)
            ->setFounding_date($founding_date)
            ->setDiscontinuation_date($discontinuation_date)
            ->setDissolution_date($dissolution_date)
            ->setDissolution_reason($dissolution_reason)
            ->setRemoval_date($removal_date)
            ->setRegistration_end_date($registration_end_date)
            ->setLegal_entity_end_date($legal_entity_end_date)
            ->setLiquidation_closure_date($liquidation_closure_date)
            ->setLiquidation_reopening_date($liquidation_reopening_date)
            ->setDeed_incorporation_date($deed_incorporation_date)
            ->setDeed_last_statutes_amendment_date($deed_last_statutes_amendment_date)
            ->setLast_statutes_amendment_date($last_statutes_amendment_date)
            ->setLiability($liability)
            ->setMerger_description($merger_description)
            ->setAnnual_report_submission($annual_report_submission)
            ->setAuthorized_share_capital($authorized_share_capital)
            ->setAuthorized_share_capital_currency($authorized_share_capital_currency)
            ->setIssued_share_capital($issued_share_capital)
            ->setIssued_share_capital_currency($issued_share_capital_currency)
            ->setPaid_up_share_capital($paid_up_share_capital)
            ->setPaid_up_share_capital_currency($paid_up_share_capital_currency)
            ->setEstablishment_postcode($establishment_postcode)
            ->setEstablishment_city($establishment_city)
            ->setEstablishment_street($establishment_street)
            ->setEstablishment_house_number($establishment_house_number)
            ->setEstablishment_house_number_addition($establishment_house_number_addition)
            ->setEstablishment_country($establishment_country)
            ->setCorrespondence_postcode($correspondence_postcode)
            ->setCorrespondence_city($correspondence_city)
            ->setCorrespondence_street($correspondence_street)
            ->setCorrespondence_house_number($correspondence_house_number)
            ->setCorrespondence_house_number_addition($correspondence_house_number_addition)
            ->setCorrespondence_country($correspondence_country)
            ->setDuration($duration)
            ->setDuration_end_date($duration_end_date)
            ->setShares($shares)
            ->setShare_holders($share_holders)
            ->setTelephone_numbers($telephone_numbers)
            ->setFax_numbers($fax_numbers)
            ->setEmail_addresses($email_addresses)
            ->setDomain_names($domain_names);
    }
    /**
     * Get rsin_number value
     * @return string|null
     */
    public function getRsin_number()
    {
        return $this->rsin_number;
    }
    /**
     * Set rsin_number value
     * @param string $rsin_number
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setRsin_number($rsin_number = null)
    {
        // validation for constraint: string
        if (!is_null($rsin_number) && !is_string($rsin_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rsin_number)), __LINE__);
        }
        $this->rsin_number = $rsin_number;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get alternative_name value
     * @return string|null
     */
    public function getAlternative_name()
    {
        return $this->alternative_name;
    }
    /**
     * Set alternative_name value
     * @param string $alternative_name
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setAlternative_name($alternative_name = null)
    {
        // validation for constraint: string
        if (!is_null($alternative_name) && !is_string($alternative_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alternative_name)), __LINE__);
        }
        $this->alternative_name = $alternative_name;
        return $this;
    }
    /**
     * Get shortened_name value
     * @return string|null
     */
    public function getShortened_name()
    {
        return $this->shortened_name;
    }
    /**
     * Set shortened_name value
     * @param string $shortened_name
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setShortened_name($shortened_name = null)
    {
        // validation for constraint: string
        if (!is_null($shortened_name) && !is_string($shortened_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortened_name)), __LINE__);
        }
        $this->shortened_name = $shortened_name;
        return $this;
    }
    /**
     * Get registration value
     * @return string|null
     */
    public function getRegistration()
    {
        return $this->registration;
    }
    /**
     * Set registration value
     * @param string $registration
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setRegistration($registration = null)
    {
        // validation for constraint: string
        if (!is_null($registration) && !is_string($registration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration)), __LINE__);
        }
        $this->registration = $registration;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
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
     * @return \Webservices\StructType\DutchBusinessLegalEntity
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
     * Get legal_form_change value
     * @return string|null
     */
    public function getLegal_form_change()
    {
        return $this->legal_form_change;
    }
    /**
     * Set legal_form_change value
     * @param string $legal_form_change
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setLegal_form_change($legal_form_change = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_change) && !is_string($legal_form_change)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_change)), __LINE__);
        }
        $this->legal_form_change = $legal_form_change;
        return $this;
    }
    /**
     * Get foreign_legal_form_description value
     * @return string|null
     */
    public function getForeign_legal_form_description()
    {
        return $this->foreign_legal_form_description;
    }
    /**
     * Set foreign_legal_form_description value
     * @param string $foreign_legal_form_description
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setForeign_legal_form_description($foreign_legal_form_description = null)
    {
        // validation for constraint: string
        if (!is_null($foreign_legal_form_description) && !is_string($foreign_legal_form_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($foreign_legal_form_description)), __LINE__);
        }
        $this->foreign_legal_form_description = $foreign_legal_form_description;
        return $this;
    }
    /**
     * Get sbi_codes value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getSbi_codes()
    {
        return $this->sbi_codes;
    }
    /**
     * Set sbi_codes value
     * @param \Webservices\ArrayType\StringArray $sbi_codes
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setSbi_codes(\Webservices\ArrayType\StringArray $sbi_codes = null)
    {
        $this->sbi_codes = $sbi_codes;
        return $this;
    }
    /**
     * Get sbi_codes_text value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getSbi_codes_text()
    {
        return $this->sbi_codes_text;
    }
    /**
     * Set sbi_codes_text value
     * @param \Webservices\ArrayType\StringArray $sbi_codes_text
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setSbi_codes_text(\Webservices\ArrayType\StringArray $sbi_codes_text = null)
    {
        $this->sbi_codes_text = $sbi_codes_text;
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
     * @return \Webservices\StructType\DutchBusinessLegalEntity
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
     * Get company_arrangement value
     * @return string|null
     */
    public function getCompany_arrangement()
    {
        return $this->company_arrangement;
    }
    /**
     * Set company_arrangement value
     * @param string $company_arrangement
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setCompany_arrangement($company_arrangement = null)
    {
        // validation for constraint: string
        if (!is_null($company_arrangement) && !is_string($company_arrangement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_arrangement)), __LINE__);
        }
        $this->company_arrangement = $company_arrangement;
        return $this;
    }
    /**
     * Get legal_name value
     * @return string|null
     */
    public function getLegal_name()
    {
        return $this->legal_name;
    }
    /**
     * Set legal_name value
     * @param string $legal_name
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setLegal_name($legal_name = null)
    {
        // validation for constraint: string
        if (!is_null($legal_name) && !is_string($legal_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_name)), __LINE__);
        }
        $this->legal_name = $legal_name;
        return $this;
    }
    /**
     * Get statutory_seat value
     * @return string|null
     */
    public function getStatutory_seat()
    {
        return $this->statutory_seat;
    }
    /**
     * Set statutory_seat value
     * @param string $statutory_seat
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setStatutory_seat($statutory_seat = null)
    {
        // validation for constraint: string
        if (!is_null($statutory_seat) && !is_string($statutory_seat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statutory_seat)), __LINE__);
        }
        $this->statutory_seat = $statutory_seat;
        return $this;
    }
    /**
     * Get registration_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getRegistration_date()
    {
        return $this->registration_date;
    }
    /**
     * Set registration_date value
     * @param \Webservices\StructType\DutchBusinessDate $registration_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setRegistration_date(\Webservices\StructType\DutchBusinessDate $registration_date = null)
    {
        $this->registration_date = $registration_date;
        return $this;
    }
    /**
     * Get founding_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getFounding_date()
    {
        return $this->founding_date;
    }
    /**
     * Set founding_date value
     * @param \Webservices\StructType\DutchBusinessDate $founding_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setFounding_date(\Webservices\StructType\DutchBusinessDate $founding_date = null)
    {
        $this->founding_date = $founding_date;
        return $this;
    }
    /**
     * Get discontinuation_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDiscontinuation_date()
    {
        return $this->discontinuation_date;
    }
    /**
     * Set discontinuation_date value
     * @param \Webservices\StructType\DutchBusinessDate $discontinuation_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDiscontinuation_date(\Webservices\StructType\DutchBusinessDate $discontinuation_date = null)
    {
        $this->discontinuation_date = $discontinuation_date;
        return $this;
    }
    /**
     * Get dissolution_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDissolution_date()
    {
        return $this->dissolution_date;
    }
    /**
     * Set dissolution_date value
     * @param \Webservices\StructType\DutchBusinessDate $dissolution_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDissolution_date(\Webservices\StructType\DutchBusinessDate $dissolution_date = null)
    {
        $this->dissolution_date = $dissolution_date;
        return $this;
    }
    /**
     * Get dissolution_reason value
     * @return string|null
     */
    public function getDissolution_reason()
    {
        return $this->dissolution_reason;
    }
    /**
     * Set dissolution_reason value
     * @param string $dissolution_reason
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDissolution_reason($dissolution_reason = null)
    {
        // validation for constraint: string
        if (!is_null($dissolution_reason) && !is_string($dissolution_reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dissolution_reason)), __LINE__);
        }
        $this->dissolution_reason = $dissolution_reason;
        return $this;
    }
    /**
     * Get removal_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getRemoval_date()
    {
        return $this->removal_date;
    }
    /**
     * Set removal_date value
     * @param \Webservices\StructType\DutchBusinessDate $removal_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setRemoval_date(\Webservices\StructType\DutchBusinessDate $removal_date = null)
    {
        $this->removal_date = $removal_date;
        return $this;
    }
    /**
     * Get registration_end_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getRegistration_end_date()
    {
        return $this->registration_end_date;
    }
    /**
     * Set registration_end_date value
     * @param \Webservices\StructType\DutchBusinessDate $registration_end_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setRegistration_end_date(\Webservices\StructType\DutchBusinessDate $registration_end_date = null)
    {
        $this->registration_end_date = $registration_end_date;
        return $this;
    }
    /**
     * Get legal_entity_end_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getLegal_entity_end_date()
    {
        return $this->legal_entity_end_date;
    }
    /**
     * Set legal_entity_end_date value
     * @param \Webservices\StructType\DutchBusinessDate $legal_entity_end_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setLegal_entity_end_date(\Webservices\StructType\DutchBusinessDate $legal_entity_end_date = null)
    {
        $this->legal_entity_end_date = $legal_entity_end_date;
        return $this;
    }
    /**
     * Get liquidation_closure_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getLiquidation_closure_date()
    {
        return $this->liquidation_closure_date;
    }
    /**
     * Set liquidation_closure_date value
     * @param \Webservices\StructType\DutchBusinessDate $liquidation_closure_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setLiquidation_closure_date(\Webservices\StructType\DutchBusinessDate $liquidation_closure_date = null)
    {
        $this->liquidation_closure_date = $liquidation_closure_date;
        return $this;
    }
    /**
     * Get liquidation_reopening_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getLiquidation_reopening_date()
    {
        return $this->liquidation_reopening_date;
    }
    /**
     * Set liquidation_reopening_date value
     * @param \Webservices\StructType\DutchBusinessDate $liquidation_reopening_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setLiquidation_reopening_date(\Webservices\StructType\DutchBusinessDate $liquidation_reopening_date = null)
    {
        $this->liquidation_reopening_date = $liquidation_reopening_date;
        return $this;
    }
    /**
     * Get deed_incorporation_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDeed_incorporation_date()
    {
        return $this->deed_incorporation_date;
    }
    /**
     * Set deed_incorporation_date value
     * @param \Webservices\StructType\DutchBusinessDate $deed_incorporation_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDeed_incorporation_date(\Webservices\StructType\DutchBusinessDate $deed_incorporation_date = null)
    {
        $this->deed_incorporation_date = $deed_incorporation_date;
        return $this;
    }
    /**
     * Get deed_last_statutes_amendment_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDeed_last_statutes_amendment_date()
    {
        return $this->deed_last_statutes_amendment_date;
    }
    /**
     * Set deed_last_statutes_amendment_date value
     * @param \Webservices\StructType\DutchBusinessDate $deed_last_statutes_amendment_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDeed_last_statutes_amendment_date(\Webservices\StructType\DutchBusinessDate $deed_last_statutes_amendment_date = null)
    {
        $this->deed_last_statutes_amendment_date = $deed_last_statutes_amendment_date;
        return $this;
    }
    /**
     * Get last_statutes_amendment_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getLast_statutes_amendment_date()
    {
        return $this->last_statutes_amendment_date;
    }
    /**
     * Set last_statutes_amendment_date value
     * @param \Webservices\StructType\DutchBusinessDate $last_statutes_amendment_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setLast_statutes_amendment_date(\Webservices\StructType\DutchBusinessDate $last_statutes_amendment_date = null)
    {
        $this->last_statutes_amendment_date = $last_statutes_amendment_date;
        return $this;
    }
    /**
     * Get liability value
     * @return string|null
     */
    public function getLiability()
    {
        return $this->liability;
    }
    /**
     * Set liability value
     * @param string $liability
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setLiability($liability = null)
    {
        // validation for constraint: string
        if (!is_null($liability) && !is_string($liability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liability)), __LINE__);
        }
        $this->liability = $liability;
        return $this;
    }
    /**
     * Get merger_description value
     * @return string|null
     */
    public function getMerger_description()
    {
        return $this->merger_description;
    }
    /**
     * Set merger_description value
     * @param string $merger_description
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setMerger_description($merger_description = null)
    {
        // validation for constraint: string
        if (!is_null($merger_description) && !is_string($merger_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merger_description)), __LINE__);
        }
        $this->merger_description = $merger_description;
        return $this;
    }
    /**
     * Get annual_report_submission value
     * @return string|null
     */
    public function getAnnual_report_submission()
    {
        return $this->annual_report_submission;
    }
    /**
     * Set annual_report_submission value
     * @param string $annual_report_submission
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setAnnual_report_submission($annual_report_submission = null)
    {
        // validation for constraint: string
        if (!is_null($annual_report_submission) && !is_string($annual_report_submission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($annual_report_submission)), __LINE__);
        }
        $this->annual_report_submission = $annual_report_submission;
        return $this;
    }
    /**
     * Get authorized_share_capital value
     * @return int|null
     */
    public function getAuthorized_share_capital()
    {
        return $this->authorized_share_capital;
    }
    /**
     * Set authorized_share_capital value
     * @param int $authorized_share_capital
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setAuthorized_share_capital($authorized_share_capital = null)
    {
        // validation for constraint: int
        if (!is_null($authorized_share_capital) && !is_numeric($authorized_share_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($authorized_share_capital)), __LINE__);
        }
        $this->authorized_share_capital = $authorized_share_capital;
        return $this;
    }
    /**
     * Get authorized_share_capital_currency value
     * @return string|null
     */
    public function getAuthorized_share_capital_currency()
    {
        return $this->authorized_share_capital_currency;
    }
    /**
     * Set authorized_share_capital_currency value
     * @param string $authorized_share_capital_currency
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setAuthorized_share_capital_currency($authorized_share_capital_currency = null)
    {
        // validation for constraint: string
        if (!is_null($authorized_share_capital_currency) && !is_string($authorized_share_capital_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorized_share_capital_currency)), __LINE__);
        }
        $this->authorized_share_capital_currency = $authorized_share_capital_currency;
        return $this;
    }
    /**
     * Get issued_share_capital value
     * @return int|null
     */
    public function getIssued_share_capital()
    {
        return $this->issued_share_capital;
    }
    /**
     * Set issued_share_capital value
     * @param int $issued_share_capital
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setIssued_share_capital($issued_share_capital = null)
    {
        // validation for constraint: int
        if (!is_null($issued_share_capital) && !is_numeric($issued_share_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($issued_share_capital)), __LINE__);
        }
        $this->issued_share_capital = $issued_share_capital;
        return $this;
    }
    /**
     * Get issued_share_capital_currency value
     * @return string|null
     */
    public function getIssued_share_capital_currency()
    {
        return $this->issued_share_capital_currency;
    }
    /**
     * Set issued_share_capital_currency value
     * @param string $issued_share_capital_currency
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setIssued_share_capital_currency($issued_share_capital_currency = null)
    {
        // validation for constraint: string
        if (!is_null($issued_share_capital_currency) && !is_string($issued_share_capital_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issued_share_capital_currency)), __LINE__);
        }
        $this->issued_share_capital_currency = $issued_share_capital_currency;
        return $this;
    }
    /**
     * Get paid_up_share_capital value
     * @return int|null
     */
    public function getPaid_up_share_capital()
    {
        return $this->paid_up_share_capital;
    }
    /**
     * Set paid_up_share_capital value
     * @param int $paid_up_share_capital
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setPaid_up_share_capital($paid_up_share_capital = null)
    {
        // validation for constraint: int
        if (!is_null($paid_up_share_capital) && !is_numeric($paid_up_share_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paid_up_share_capital)), __LINE__);
        }
        $this->paid_up_share_capital = $paid_up_share_capital;
        return $this;
    }
    /**
     * Get paid_up_share_capital_currency value
     * @return string|null
     */
    public function getPaid_up_share_capital_currency()
    {
        return $this->paid_up_share_capital_currency;
    }
    /**
     * Set paid_up_share_capital_currency value
     * @param string $paid_up_share_capital_currency
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setPaid_up_share_capital_currency($paid_up_share_capital_currency = null)
    {
        // validation for constraint: string
        if (!is_null($paid_up_share_capital_currency) && !is_string($paid_up_share_capital_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paid_up_share_capital_currency)), __LINE__);
        }
        $this->paid_up_share_capital_currency = $paid_up_share_capital_currency;
        return $this;
    }
    /**
     * Get establishment_postcode value
     * @return string|null
     */
    public function getEstablishment_postcode()
    {
        return $this->establishment_postcode;
    }
    /**
     * Set establishment_postcode value
     * @param string $establishment_postcode
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setEstablishment_postcode($establishment_postcode = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_postcode) && !is_string($establishment_postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_postcode)), __LINE__);
        }
        $this->establishment_postcode = $establishment_postcode;
        return $this;
    }
    /**
     * Get establishment_city value
     * @return string|null
     */
    public function getEstablishment_city()
    {
        return $this->establishment_city;
    }
    /**
     * Set establishment_city value
     * @param string $establishment_city
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setEstablishment_city($establishment_city = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_city) && !is_string($establishment_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_city)), __LINE__);
        }
        $this->establishment_city = $establishment_city;
        return $this;
    }
    /**
     * Get establishment_street value
     * @return string|null
     */
    public function getEstablishment_street()
    {
        return $this->establishment_street;
    }
    /**
     * Set establishment_street value
     * @param string $establishment_street
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setEstablishment_street($establishment_street = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_street) && !is_string($establishment_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_street)), __LINE__);
        }
        $this->establishment_street = $establishment_street;
        return $this;
    }
    /**
     * Get establishment_house_number value
     * @return int|null
     */
    public function getEstablishment_house_number()
    {
        return $this->establishment_house_number;
    }
    /**
     * Set establishment_house_number value
     * @param int $establishment_house_number
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setEstablishment_house_number($establishment_house_number = null)
    {
        // validation for constraint: int
        if (!is_null($establishment_house_number) && !is_numeric($establishment_house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($establishment_house_number)), __LINE__);
        }
        $this->establishment_house_number = $establishment_house_number;
        return $this;
    }
    /**
     * Get establishment_house_number_addition value
     * @return string|null
     */
    public function getEstablishment_house_number_addition()
    {
        return $this->establishment_house_number_addition;
    }
    /**
     * Set establishment_house_number_addition value
     * @param string $establishment_house_number_addition
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setEstablishment_house_number_addition($establishment_house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_house_number_addition) && !is_string($establishment_house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_house_number_addition)), __LINE__);
        }
        $this->establishment_house_number_addition = $establishment_house_number_addition;
        return $this;
    }
    /**
     * Get establishment_country value
     * @return string|null
     */
    public function getEstablishment_country()
    {
        return $this->establishment_country;
    }
    /**
     * Set establishment_country value
     * @param string $establishment_country
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setEstablishment_country($establishment_country = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_country) && !is_string($establishment_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_country)), __LINE__);
        }
        $this->establishment_country = $establishment_country;
        return $this;
    }
    /**
     * Get correspondence_postcode value
     * @return string|null
     */
    public function getCorrespondence_postcode()
    {
        return $this->correspondence_postcode;
    }
    /**
     * Set correspondence_postcode value
     * @param string $correspondence_postcode
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setCorrespondence_postcode($correspondence_postcode = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_postcode) && !is_string($correspondence_postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_postcode)), __LINE__);
        }
        $this->correspondence_postcode = $correspondence_postcode;
        return $this;
    }
    /**
     * Get correspondence_city value
     * @return string|null
     */
    public function getCorrespondence_city()
    {
        return $this->correspondence_city;
    }
    /**
     * Set correspondence_city value
     * @param string $correspondence_city
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setCorrespondence_city($correspondence_city = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_city) && !is_string($correspondence_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_city)), __LINE__);
        }
        $this->correspondence_city = $correspondence_city;
        return $this;
    }
    /**
     * Get correspondence_street value
     * @return string|null
     */
    public function getCorrespondence_street()
    {
        return $this->correspondence_street;
    }
    /**
     * Set correspondence_street value
     * @param string $correspondence_street
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setCorrespondence_street($correspondence_street = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_street) && !is_string($correspondence_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_street)), __LINE__);
        }
        $this->correspondence_street = $correspondence_street;
        return $this;
    }
    /**
     * Get correspondence_house_number value
     * @return int|null
     */
    public function getCorrespondence_house_number()
    {
        return $this->correspondence_house_number;
    }
    /**
     * Set correspondence_house_number value
     * @param int $correspondence_house_number
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setCorrespondence_house_number($correspondence_house_number = null)
    {
        // validation for constraint: int
        if (!is_null($correspondence_house_number) && !is_numeric($correspondence_house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($correspondence_house_number)), __LINE__);
        }
        $this->correspondence_house_number = $correspondence_house_number;
        return $this;
    }
    /**
     * Get correspondence_house_number_addition value
     * @return string|null
     */
    public function getCorrespondence_house_number_addition()
    {
        return $this->correspondence_house_number_addition;
    }
    /**
     * Set correspondence_house_number_addition value
     * @param string $correspondence_house_number_addition
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setCorrespondence_house_number_addition($correspondence_house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_house_number_addition) && !is_string($correspondence_house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_house_number_addition)), __LINE__);
        }
        $this->correspondence_house_number_addition = $correspondence_house_number_addition;
        return $this;
    }
    /**
     * Get correspondence_country value
     * @return string|null
     */
    public function getCorrespondence_country()
    {
        return $this->correspondence_country;
    }
    /**
     * Set correspondence_country value
     * @param string $correspondence_country
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setCorrespondence_country($correspondence_country = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_country) && !is_string($correspondence_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_country)), __LINE__);
        }
        $this->correspondence_country = $correspondence_country;
        return $this;
    }
    /**
     * Get duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param string $duration
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        return $this;
    }
    /**
     * Get duration_end_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDuration_end_date()
    {
        return $this->duration_end_date;
    }
    /**
     * Set duration_end_date value
     * @param \Webservices\StructType\DutchBusinessDate $duration_end_date
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDuration_end_date(\Webservices\StructType\DutchBusinessDate $duration_end_date = null)
    {
        $this->duration_end_date = $duration_end_date;
        return $this;
    }
    /**
     * Get shares value
     * @return string|null
     */
    public function getShares()
    {
        return $this->shares;
    }
    /**
     * Set shares value
     * @param string $shares
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setShares($shares = null)
    {
        // validation for constraint: string
        if (!is_null($shares) && !is_string($shares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shares)), __LINE__);
        }
        $this->shares = $shares;
        return $this;
    }
    /**
     * Get share_holders value
     * @return string|null
     */
    public function getShare_holders()
    {
        return $this->share_holders;
    }
    /**
     * Set share_holders value
     * @param string $share_holders
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setShare_holders($share_holders = null)
    {
        // validation for constraint: string
        if (!is_null($share_holders) && !is_string($share_holders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($share_holders)), __LINE__);
        }
        $this->share_holders = $share_holders;
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
     * @return \Webservices\StructType\DutchBusinessLegalEntity
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
     * @return \Webservices\StructType\DutchBusinessLegalEntity
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
     * @return \Webservices\StructType\DutchBusinessLegalEntity
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
     * @return \Webservices\StructType\DutchBusinessLegalEntity
     */
    public function setDomain_names(\Webservices\ArrayType\StringArray $domain_names = null)
    {
        $this->domain_names = $domain_names;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessLegalEntity
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
