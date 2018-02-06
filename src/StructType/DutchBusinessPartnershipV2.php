<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPartnershipV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPartnershipV2 extends AbstractStructBase
{
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_number;
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
     * The founding_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $founding_date;
    /**
     * The dissolution_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $dissolution_date;
    /**
     * The function_start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $function_start_date;
    /**
     * The duration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $duration;
    /**
     * The limited_partnership_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessMoneyV2
     */
    public $limited_partnership_capital;
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
     * The silent_partners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $silent_partners;
    /**
     * The remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $remarks;
    /**
     * Constructor method for DutchBusinessPartnershipV2
     * @uses DutchBusinessPartnershipV2::setDossier_number()
     * @uses DutchBusinessPartnershipV2::setRsin_number()
     * @uses DutchBusinessPartnershipV2::setName()
     * @uses DutchBusinessPartnershipV2::setRegistration()
     * @uses DutchBusinessPartnershipV2::setLegal_form_text()
     * @uses DutchBusinessPartnershipV2::setFounding_date()
     * @uses DutchBusinessPartnershipV2::setDissolution_date()
     * @uses DutchBusinessPartnershipV2::setFunction_start_date()
     * @uses DutchBusinessPartnershipV2::setDuration()
     * @uses DutchBusinessPartnershipV2::setLimited_partnership_capital()
     * @uses DutchBusinessPartnershipV2::setEstablishment_address()
     * @uses DutchBusinessPartnershipV2::setCorrespondence_address()
     * @uses DutchBusinessPartnershipV2::setSilent_partners()
     * @uses DutchBusinessPartnershipV2::setRemarks()
     * @param string $dossier_number
     * @param string $rsin_number
     * @param string $name
     * @param string $registration
     * @param string $legal_form_text
     * @param \Webservices\StructType\DutchBusinessDateV2 $founding_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $dissolution_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $function_start_date
     * @param string $duration
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $limited_partnership_capital
     * @param \Webservices\StructType\DutchBusinessAddressV2 $establishment_address
     * @param \Webservices\StructType\DutchBusinessAddressV2 $correspondence_address
     * @param int $silent_partners
     * @param \Webservices\ArrayType\StringArray $remarks
     */
    public function __construct($dossier_number = null, $rsin_number = null, $name = null, $registration = null, $legal_form_text = null, \Webservices\StructType\DutchBusinessDateV2 $founding_date = null, \Webservices\StructType\DutchBusinessDateV2 $dissolution_date = null, \Webservices\StructType\DutchBusinessDateV2 $function_start_date = null, $duration = null, \Webservices\StructType\DutchBusinessMoneyV2 $limited_partnership_capital = null, \Webservices\StructType\DutchBusinessAddressV2 $establishment_address = null, \Webservices\StructType\DutchBusinessAddressV2 $correspondence_address = null, $silent_partners = null, \Webservices\ArrayType\StringArray $remarks = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setRsin_number($rsin_number)
            ->setName($name)
            ->setRegistration($registration)
            ->setLegal_form_text($legal_form_text)
            ->setFounding_date($founding_date)
            ->setDissolution_date($dissolution_date)
            ->setFunction_start_date($function_start_date)
            ->setDuration($duration)
            ->setLimited_partnership_capital($limited_partnership_capital)
            ->setEstablishment_address($establishment_address)
            ->setCorrespondence_address($correspondence_address)
            ->setSilent_partners($silent_partners)
            ->setRemarks($remarks);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setFounding_date(\Webservices\StructType\DutchBusinessDateV2 $founding_date = null)
    {
        $this->founding_date = $founding_date;
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setDissolution_date(\Webservices\StructType\DutchBusinessDateV2 $dissolution_date = null)
    {
        $this->dissolution_date = $dissolution_date;
        return $this;
    }
    /**
     * Get function_start_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getFunction_start_date()
    {
        return $this->function_start_date;
    }
    /**
     * Set function_start_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $function_start_date
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setFunction_start_date(\Webservices\StructType\DutchBusinessDateV2 $function_start_date = null)
    {
        $this->function_start_date = $function_start_date;
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
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
     * Get limited_partnership_capital value
     * @return \Webservices\StructType\DutchBusinessMoneyV2|null
     */
    public function getLimited_partnership_capital()
    {
        return $this->limited_partnership_capital;
    }
    /**
     * Set limited_partnership_capital value
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $limited_partnership_capital
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setLimited_partnership_capital(\Webservices\StructType\DutchBusinessMoneyV2 $limited_partnership_capital = null)
    {
        $this->limited_partnership_capital = $limited_partnership_capital;
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setCorrespondence_address(\Webservices\StructType\DutchBusinessAddressV2 $correspondence_address = null)
    {
        $this->correspondence_address = $correspondence_address;
        return $this;
    }
    /**
     * Get silent_partners value
     * @return int|null
     */
    public function getSilent_partners()
    {
        return $this->silent_partners;
    }
    /**
     * Set silent_partners value
     * @param int $silent_partners
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setSilent_partners($silent_partners = null)
    {
        // validation for constraint: int
        if (!is_null($silent_partners) && !is_numeric($silent_partners)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($silent_partners)), __LINE__);
        }
        $this->silent_partners = $silent_partners;
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
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public function setRemarks(\Webservices\ArrayType\StringArray $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPartnershipV2
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
