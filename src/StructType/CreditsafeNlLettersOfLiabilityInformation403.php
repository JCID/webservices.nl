<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlLettersOfLiabilityInformation403 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlLettersOfLiabilityInformation403 extends AbstractStructBase
{
    /**
     * The financial_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $financial_year;
    /**
     * The company_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_name;
    /**
     * The company_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $company_number;
    /**
     * The date_submitted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_submitted;
    /**
     * The letters_of_liability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray
     */
    public $letters_of_liability;
    /**
     * The letters_of_liability_2nd_parent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray
     */
    public $letters_of_liability_2nd_parent;
    /**
     * Constructor method for CreditsafeNlLettersOfLiabilityInformation403
     * @uses CreditsafeNlLettersOfLiabilityInformation403::setFinancial_year()
     * @uses CreditsafeNlLettersOfLiabilityInformation403::setCompany_name()
     * @uses CreditsafeNlLettersOfLiabilityInformation403::setCompany_number()
     * @uses CreditsafeNlLettersOfLiabilityInformation403::setDate_submitted()
     * @uses CreditsafeNlLettersOfLiabilityInformation403::setLetters_of_liability()
     * @uses CreditsafeNlLettersOfLiabilityInformation403::setLetters_of_liability_2nd_parent()
     * @param int $financial_year
     * @param string $company_name
     * @param int $company_number
     * @param string $date_submitted
     * @param \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray $letters_of_liability
     * @param \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray $letters_of_liability_2nd_parent
     */
    public function __construct($financial_year = null, $company_name = null, $company_number = null, $date_submitted = null, \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray $letters_of_liability = null, \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray $letters_of_liability_2nd_parent = null)
    {
        $this
            ->setFinancial_year($financial_year)
            ->setCompany_name($company_name)
            ->setCompany_number($company_number)
            ->setDate_submitted($date_submitted)
            ->setLetters_of_liability($letters_of_liability)
            ->setLetters_of_liability_2nd_parent($letters_of_liability_2nd_parent);
    }
    /**
     * Get financial_year value
     * @return int|null
     */
    public function getFinancial_year()
    {
        return $this->financial_year;
    }
    /**
     * Set financial_year value
     * @param int $financial_year
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
     */
    public function setFinancial_year($financial_year = null)
    {
        // validation for constraint: int
        if (!is_null($financial_year) && !is_numeric($financial_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($financial_year)), __LINE__);
        }
        $this->financial_year = $financial_year;
        return $this;
    }
    /**
     * Get company_name value
     * @return string|null
     */
    public function getCompany_name()
    {
        return $this->company_name;
    }
    /**
     * Set company_name value
     * @param string $company_name
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
     */
    public function setCompany_name($company_name = null)
    {
        // validation for constraint: string
        if (!is_null($company_name) && !is_string($company_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_name)), __LINE__);
        }
        $this->company_name = $company_name;
        return $this;
    }
    /**
     * Get company_number value
     * @return int|null
     */
    public function getCompany_number()
    {
        return $this->company_number;
    }
    /**
     * Set company_number value
     * @param int $company_number
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
     */
    public function setCompany_number($company_number = null)
    {
        // validation for constraint: int
        if (!is_null($company_number) && !is_numeric($company_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($company_number)), __LINE__);
        }
        $this->company_number = $company_number;
        return $this;
    }
    /**
     * Get date_submitted value
     * @return string|null
     */
    public function getDate_submitted()
    {
        return $this->date_submitted;
    }
    /**
     * Set date_submitted value
     * @param string $date_submitted
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
     */
    public function setDate_submitted($date_submitted = null)
    {
        // validation for constraint: string
        if (!is_null($date_submitted) && !is_string($date_submitted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_submitted)), __LINE__);
        }
        $this->date_submitted = $date_submitted;
        return $this;
    }
    /**
     * Get letters_of_liability value
     * @return \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray|null
     */
    public function getLetters_of_liability()
    {
        return $this->letters_of_liability;
    }
    /**
     * Set letters_of_liability value
     * @param \Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray $letters_of_liability
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
     */
    public function setLetters_of_liability(\Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray $letters_of_liability = null)
    {
        $this->letters_of_liability = $letters_of_liability;
        return $this;
    }
    /**
     * Get letters_of_liabilitynd_parent value
     * @return letters_of_liabilitynd_parent
     */
    public function getLetters_of_liability_2nd_parent()
    {
        return $this->letters_of_liability_2nd_parent;
    }
    /**
     * Set letters_of_liabilitynd_parent value
     * @param letters_of_liabilitynd_parent $letters_of_liabilitynd_parent
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
     */
    public function setLetters_of_liability_2nd_parent(\Webservices\ArrayType\CreditsafeNlLettersOfLiabilityArray $letters_of_liability_2nd_parent = null)
    {
        $this->letters_of_liability_2nd_parent = $letters_of_liability_2nd_parent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiabilityInformation403
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
