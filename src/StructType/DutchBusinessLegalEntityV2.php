<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessLegalEntityV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessLegalEntityV2 extends AbstractStructBase
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
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $registration_date;
    /**
     * The founding_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $founding_date;
    /**
     * The discontinuation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $discontinuation_date;
    /**
     * The dissolution_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
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
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $removal_date;
    /**
     * The registration_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $registration_end_date;
    /**
     * The legal_entity_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $legal_entity_end_date;
    /**
     * The liquidation_closure_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $liquidation_closure_date;
    /**
     * The liquidation_reopening_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $liquidation_reopening_date;
    /**
     * The deed_incorporation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $deed_incorporation_date;
    /**
     * The deed_last_statutes_amendment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $deed_last_statutes_amendment_date;
    /**
     * The last_statutes_amendment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
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
     * @var \Webservices\StructType\DutchBusinessMoneyV2
     */
    public $authorized_share_capital;
    /**
     * The issued_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessMoneyV2
     */
    public $issued_share_capital;
    /**
     * The paid_up_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessMoneyV2
     */
    public $paid_up_share_capital;
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
     * @var \Webservices\StructType\DutchBusinessDateV2
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
     * The remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $remarks;
    /**
     * The establishment_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV2
     */
    public $establishment_address;
    /**
     * The correspondence_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV2
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
     * The sbi_codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessSbiCodeV2Array
     */
    public $sbi_codes;
    /**
     * Constructor method for DutchBusinessLegalEntityV2
     * @uses DutchBusinessLegalEntityV2::setRsin_number()
     * @uses DutchBusinessLegalEntityV2::setName()
     * @uses DutchBusinessLegalEntityV2::setAlternative_name()
     * @uses DutchBusinessLegalEntityV2::setShortened_name()
     * @uses DutchBusinessLegalEntityV2::setRegistration()
     * @uses DutchBusinessLegalEntityV2::setLegal_form_text()
     * @uses DutchBusinessLegalEntityV2::setLegal_form_change()
     * @uses DutchBusinessLegalEntityV2::setForeign_legal_form_description()
     * @uses DutchBusinessLegalEntityV2::setActivity()
     * @uses DutchBusinessLegalEntityV2::setCompany_arrangement()
     * @uses DutchBusinessLegalEntityV2::setLegal_name()
     * @uses DutchBusinessLegalEntityV2::setStatutory_seat()
     * @uses DutchBusinessLegalEntityV2::setRegistration_date()
     * @uses DutchBusinessLegalEntityV2::setFounding_date()
     * @uses DutchBusinessLegalEntityV2::setDiscontinuation_date()
     * @uses DutchBusinessLegalEntityV2::setDissolution_date()
     * @uses DutchBusinessLegalEntityV2::setDissolution_reason()
     * @uses DutchBusinessLegalEntityV2::setRemoval_date()
     * @uses DutchBusinessLegalEntityV2::setRegistration_end_date()
     * @uses DutchBusinessLegalEntityV2::setLegal_entity_end_date()
     * @uses DutchBusinessLegalEntityV2::setLiquidation_closure_date()
     * @uses DutchBusinessLegalEntityV2::setLiquidation_reopening_date()
     * @uses DutchBusinessLegalEntityV2::setDeed_incorporation_date()
     * @uses DutchBusinessLegalEntityV2::setDeed_last_statutes_amendment_date()
     * @uses DutchBusinessLegalEntityV2::setLast_statutes_amendment_date()
     * @uses DutchBusinessLegalEntityV2::setLiability()
     * @uses DutchBusinessLegalEntityV2::setMerger_description()
     * @uses DutchBusinessLegalEntityV2::setAnnual_report_submission()
     * @uses DutchBusinessLegalEntityV2::setAuthorized_share_capital()
     * @uses DutchBusinessLegalEntityV2::setIssued_share_capital()
     * @uses DutchBusinessLegalEntityV2::setPaid_up_share_capital()
     * @uses DutchBusinessLegalEntityV2::setDuration()
     * @uses DutchBusinessLegalEntityV2::setDuration_end_date()
     * @uses DutchBusinessLegalEntityV2::setShares()
     * @uses DutchBusinessLegalEntityV2::setShare_holders()
     * @uses DutchBusinessLegalEntityV2::setRemarks()
     * @uses DutchBusinessLegalEntityV2::setEstablishment_address()
     * @uses DutchBusinessLegalEntityV2::setCorrespondence_address()
     * @uses DutchBusinessLegalEntityV2::setTelephone_numbers()
     * @uses DutchBusinessLegalEntityV2::setFax_numbers()
     * @uses DutchBusinessLegalEntityV2::setEmail_addresses()
     * @uses DutchBusinessLegalEntityV2::setDomain_names()
     * @uses DutchBusinessLegalEntityV2::setSbi_codes()
     * @param string $rsin_number
     * @param string $name
     * @param string $alternative_name
     * @param string $shortened_name
     * @param string $registration
     * @param string $legal_form_text
     * @param string $legal_form_change
     * @param string $foreign_legal_form_description
     * @param string $activity
     * @param string $company_arrangement
     * @param string $legal_name
     * @param string $statutory_seat
     * @param \Webservices\StructType\DutchBusinessDateV2 $registration_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $founding_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $discontinuation_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $dissolution_date
     * @param string $dissolution_reason
     * @param \Webservices\StructType\DutchBusinessDateV2 $removal_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $registration_end_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $legal_entity_end_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $liquidation_closure_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $liquidation_reopening_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $deed_incorporation_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $deed_last_statutes_amendment_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $last_statutes_amendment_date
     * @param string $liability
     * @param string $merger_description
     * @param string $annual_report_submission
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $authorized_share_capital
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $issued_share_capital
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $paid_up_share_capital
     * @param string $duration
     * @param \Webservices\StructType\DutchBusinessDateV2 $duration_end_date
     * @param string $shares
     * @param string $share_holders
     * @param \Webservices\ArrayType\StringArray $remarks
     * @param \Webservices\StructType\DutchBusinessAddressV2 $establishment_address
     * @param \Webservices\StructType\DutchBusinessAddressV2 $correspondence_address
     * @param \Webservices\ArrayType\StringArray $telephone_numbers
     * @param \Webservices\ArrayType\StringArray $fax_numbers
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @param \Webservices\ArrayType\StringArray $domain_names
     * @param \Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes
     */
    public function __construct($rsin_number = null, $name = null, $alternative_name = null, $shortened_name = null, $registration = null, $legal_form_text = null, $legal_form_change = null, $foreign_legal_form_description = null, $activity = null, $company_arrangement = null, $legal_name = null, $statutory_seat = null, \Webservices\StructType\DutchBusinessDateV2 $registration_date = null, \Webservices\StructType\DutchBusinessDateV2 $founding_date = null, \Webservices\StructType\DutchBusinessDateV2 $discontinuation_date = null, \Webservices\StructType\DutchBusinessDateV2 $dissolution_date = null, $dissolution_reason = null, \Webservices\StructType\DutchBusinessDateV2 $removal_date = null, \Webservices\StructType\DutchBusinessDateV2 $registration_end_date = null, \Webservices\StructType\DutchBusinessDateV2 $legal_entity_end_date = null, \Webservices\StructType\DutchBusinessDateV2 $liquidation_closure_date = null, \Webservices\StructType\DutchBusinessDateV2 $liquidation_reopening_date = null, \Webservices\StructType\DutchBusinessDateV2 $deed_incorporation_date = null, \Webservices\StructType\DutchBusinessDateV2 $deed_last_statutes_amendment_date = null, \Webservices\StructType\DutchBusinessDateV2 $last_statutes_amendment_date = null, $liability = null, $merger_description = null, $annual_report_submission = null, \Webservices\StructType\DutchBusinessMoneyV2 $authorized_share_capital = null, \Webservices\StructType\DutchBusinessMoneyV2 $issued_share_capital = null, \Webservices\StructType\DutchBusinessMoneyV2 $paid_up_share_capital = null, $duration = null, \Webservices\StructType\DutchBusinessDateV2 $duration_end_date = null, $shares = null, $share_holders = null, \Webservices\ArrayType\StringArray $remarks = null, \Webservices\StructType\DutchBusinessAddressV2 $establishment_address = null, \Webservices\StructType\DutchBusinessAddressV2 $correspondence_address = null, \Webservices\ArrayType\StringArray $telephone_numbers = null, \Webservices\ArrayType\StringArray $fax_numbers = null, \Webservices\ArrayType\StringArray $email_addresses = null, \Webservices\ArrayType\StringArray $domain_names = null, \Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes = null)
    {
        $this
            ->setRsin_number($rsin_number)
            ->setName($name)
            ->setAlternative_name($alternative_name)
            ->setShortened_name($shortened_name)
            ->setRegistration($registration)
            ->setLegal_form_text($legal_form_text)
            ->setLegal_form_change($legal_form_change)
            ->setForeign_legal_form_description($foreign_legal_form_description)
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
            ->setIssued_share_capital($issued_share_capital)
            ->setPaid_up_share_capital($paid_up_share_capital)
            ->setDuration($duration)
            ->setDuration_end_date($duration_end_date)
            ->setShares($shares)
            ->setShare_holders($share_holders)
            ->setRemarks($remarks)
            ->setEstablishment_address($establishment_address)
            ->setCorrespondence_address($correspondence_address)
            ->setTelephone_numbers($telephone_numbers)
            ->setFax_numbers($fax_numbers)
            ->setEmail_addresses($email_addresses)
            ->setDomain_names($domain_names)
            ->setSbi_codes($sbi_codes);
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getRegistration_date()
    {
        return $this->registration_date;
    }
    /**
     * Set registration_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $registration_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setRegistration_date(\Webservices\StructType\DutchBusinessDateV2 $registration_date = null)
    {
        $this->registration_date = $registration_date;
        return $this;
    }
    /**
     * Get founding_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getFounding_date()
    {
        return $this->founding_date;
    }
    /**
     * Set founding_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $founding_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setFounding_date(\Webservices\StructType\DutchBusinessDateV2 $founding_date = null)
    {
        $this->founding_date = $founding_date;
        return $this;
    }
    /**
     * Get discontinuation_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDiscontinuation_date()
    {
        return $this->discontinuation_date;
    }
    /**
     * Set discontinuation_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $discontinuation_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setDiscontinuation_date(\Webservices\StructType\DutchBusinessDateV2 $discontinuation_date = null)
    {
        $this->discontinuation_date = $discontinuation_date;
        return $this;
    }
    /**
     * Get dissolution_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDissolution_date()
    {
        return $this->dissolution_date;
    }
    /**
     * Set dissolution_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $dissolution_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setDissolution_date(\Webservices\StructType\DutchBusinessDateV2 $dissolution_date = null)
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getRemoval_date()
    {
        return $this->removal_date;
    }
    /**
     * Set removal_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $removal_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setRemoval_date(\Webservices\StructType\DutchBusinessDateV2 $removal_date = null)
    {
        $this->removal_date = $removal_date;
        return $this;
    }
    /**
     * Get registration_end_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getRegistration_end_date()
    {
        return $this->registration_end_date;
    }
    /**
     * Set registration_end_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $registration_end_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setRegistration_end_date(\Webservices\StructType\DutchBusinessDateV2 $registration_end_date = null)
    {
        $this->registration_end_date = $registration_end_date;
        return $this;
    }
    /**
     * Get legal_entity_end_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getLegal_entity_end_date()
    {
        return $this->legal_entity_end_date;
    }
    /**
     * Set legal_entity_end_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $legal_entity_end_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setLegal_entity_end_date(\Webservices\StructType\DutchBusinessDateV2 $legal_entity_end_date = null)
    {
        $this->legal_entity_end_date = $legal_entity_end_date;
        return $this;
    }
    /**
     * Get liquidation_closure_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getLiquidation_closure_date()
    {
        return $this->liquidation_closure_date;
    }
    /**
     * Set liquidation_closure_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $liquidation_closure_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setLiquidation_closure_date(\Webservices\StructType\DutchBusinessDateV2 $liquidation_closure_date = null)
    {
        $this->liquidation_closure_date = $liquidation_closure_date;
        return $this;
    }
    /**
     * Get liquidation_reopening_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getLiquidation_reopening_date()
    {
        return $this->liquidation_reopening_date;
    }
    /**
     * Set liquidation_reopening_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $liquidation_reopening_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setLiquidation_reopening_date(\Webservices\StructType\DutchBusinessDateV2 $liquidation_reopening_date = null)
    {
        $this->liquidation_reopening_date = $liquidation_reopening_date;
        return $this;
    }
    /**
     * Get deed_incorporation_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDeed_incorporation_date()
    {
        return $this->deed_incorporation_date;
    }
    /**
     * Set deed_incorporation_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $deed_incorporation_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setDeed_incorporation_date(\Webservices\StructType\DutchBusinessDateV2 $deed_incorporation_date = null)
    {
        $this->deed_incorporation_date = $deed_incorporation_date;
        return $this;
    }
    /**
     * Get deed_last_statutes_amendment_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDeed_last_statutes_amendment_date()
    {
        return $this->deed_last_statutes_amendment_date;
    }
    /**
     * Set deed_last_statutes_amendment_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $deed_last_statutes_amendment_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setDeed_last_statutes_amendment_date(\Webservices\StructType\DutchBusinessDateV2 $deed_last_statutes_amendment_date = null)
    {
        $this->deed_last_statutes_amendment_date = $deed_last_statutes_amendment_date;
        return $this;
    }
    /**
     * Get last_statutes_amendment_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getLast_statutes_amendment_date()
    {
        return $this->last_statutes_amendment_date;
    }
    /**
     * Set last_statutes_amendment_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $last_statutes_amendment_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setLast_statutes_amendment_date(\Webservices\StructType\DutchBusinessDateV2 $last_statutes_amendment_date = null)
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessMoneyV2|null
     */
    public function getAuthorized_share_capital()
    {
        return $this->authorized_share_capital;
    }
    /**
     * Set authorized_share_capital value
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $authorized_share_capital
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setAuthorized_share_capital(\Webservices\StructType\DutchBusinessMoneyV2 $authorized_share_capital = null)
    {
        $this->authorized_share_capital = $authorized_share_capital;
        return $this;
    }
    /**
     * Get issued_share_capital value
     * @return \Webservices\StructType\DutchBusinessMoneyV2|null
     */
    public function getIssued_share_capital()
    {
        return $this->issued_share_capital;
    }
    /**
     * Set issued_share_capital value
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $issued_share_capital
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setIssued_share_capital(\Webservices\StructType\DutchBusinessMoneyV2 $issued_share_capital = null)
    {
        $this->issued_share_capital = $issued_share_capital;
        return $this;
    }
    /**
     * Get paid_up_share_capital value
     * @return \Webservices\StructType\DutchBusinessMoneyV2|null
     */
    public function getPaid_up_share_capital()
    {
        return $this->paid_up_share_capital;
    }
    /**
     * Set paid_up_share_capital value
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $paid_up_share_capital
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setPaid_up_share_capital(\Webservices\StructType\DutchBusinessMoneyV2 $paid_up_share_capital = null)
    {
        $this->paid_up_share_capital = $paid_up_share_capital;
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDuration_end_date()
    {
        return $this->duration_end_date;
    }
    /**
     * Set duration_end_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $duration_end_date
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setDuration_end_date(\Webservices\StructType\DutchBusinessDateV2 $duration_end_date = null)
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setRemarks(\Webservices\ArrayType\StringArray $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Get establishment_address value
     * @return \Webservices\StructType\DutchBusinessAddressV2|null
     */
    public function getEstablishment_address()
    {
        return $this->establishment_address;
    }
    /**
     * Set establishment_address value
     * @param \Webservices\StructType\DutchBusinessAddressV2 $establishment_address
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setEstablishment_address(\Webservices\StructType\DutchBusinessAddressV2 $establishment_address = null)
    {
        $this->establishment_address = $establishment_address;
        return $this;
    }
    /**
     * Get correspondence_address value
     * @return \Webservices\StructType\DutchBusinessAddressV2|null
     */
    public function getCorrespondence_address()
    {
        return $this->correspondence_address;
    }
    /**
     * Set correspondence_address value
     * @param \Webservices\StructType\DutchBusinessAddressV2 $correspondence_address
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setCorrespondence_address(\Webservices\StructType\DutchBusinessAddressV2 $correspondence_address = null)
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setDomain_names(\Webservices\ArrayType\StringArray $domain_names = null)
    {
        $this->domain_names = $domain_names;
        return $this;
    }
    /**
     * Get sbi_codes value
     * @return \Webservices\ArrayType\DutchBusinessSbiCodeV2Array|null
     */
    public function getSbi_codes()
    {
        return $this->sbi_codes;
    }
    /**
     * Set sbi_codes value
     * @param \Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public function setSbi_codes(\Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes = null)
    {
        $this->sbi_codes = $sbi_codes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2
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
