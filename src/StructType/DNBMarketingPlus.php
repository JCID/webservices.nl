<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBMarketingPlus StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBMarketingPlus extends AbstractStructBase
{
    /**
     * The correspondence_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBAddress
     */
    public $correspondence_address;
    /**
     * The correspondence_deliverability_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $correspondence_deliverability_indication;
    /**
     * The establishment_deliverability_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $establishment_deliverability_indication;
    /**
     * The location_status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $location_status;
    /**
     * The is_subsidiary_location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_subsidiary_location;
    /**
     * The legal_form
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $legal_form;
    /**
     * The line_of_business
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line_of_business;
    /**
     * The sic_activity_codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DNBSICCodeArray
     */
    public $sic_activity_codes;
    /**
     * The sic8_activity_codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DNBSICCodeArray
     */
    public $sic8_activity_codes;
    /**
     * The local_activity_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $local_activity_code;
    /**
     * The local_activity_code_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $local_activity_code_type;
    /**
     * The start_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $start_year;
    /**
     * The ceo_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ceo_name;
    /**
     * The ceo_title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ceo_title;
    /**
     * The executive_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $executive_names;
    /**
     * The statement_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $statement_date;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The annual_sales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $annual_sales;
    /**
     * The annual_sales_us
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $annual_sales_us;
    /**
     * The annual_sales_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $annual_sales_indication;
    /**
     * The net_worth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $net_worth;
    /**
     * The net_worth_us
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $net_worth_us;
    /**
     * The net_income
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $net_income;
    /**
     * The net_income_us
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $net_income_us;
    /**
     * The import_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $import_indication;
    /**
     * The export_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $export_indication;
    /**
     * The agent_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $agent_indication;
    /**
     * The employees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $employees;
    /**
     * The employees_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $employees_indication;
    /**
     * The employees_total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $employees_total;
    /**
     * The employees_total_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $employees_total_indication;
    /**
     * The employees_total_includes_principals
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $employees_total_includes_principals;
    /**
     * The report_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $report_date;
    /**
     * The out_of_business
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $out_of_business;
    /**
     * Constructor method for DNBMarketingPlus
     * @uses DNBMarketingPlus::setCorrespondence_address()
     * @uses DNBMarketingPlus::setCorrespondence_deliverability_indication()
     * @uses DNBMarketingPlus::setEstablishment_deliverability_indication()
     * @uses DNBMarketingPlus::setLocation_status()
     * @uses DNBMarketingPlus::setIs_subsidiary_location()
     * @uses DNBMarketingPlus::setLegal_form()
     * @uses DNBMarketingPlus::setLine_of_business()
     * @uses DNBMarketingPlus::setSic_activity_codes()
     * @uses DNBMarketingPlus::setSic8_activity_codes()
     * @uses DNBMarketingPlus::setLocal_activity_code()
     * @uses DNBMarketingPlus::setLocal_activity_code_type()
     * @uses DNBMarketingPlus::setStart_year()
     * @uses DNBMarketingPlus::setCeo_name()
     * @uses DNBMarketingPlus::setCeo_title()
     * @uses DNBMarketingPlus::setExecutive_names()
     * @uses DNBMarketingPlus::setStatement_date()
     * @uses DNBMarketingPlus::setCurrency()
     * @uses DNBMarketingPlus::setAnnual_sales()
     * @uses DNBMarketingPlus::setAnnual_sales_us()
     * @uses DNBMarketingPlus::setAnnual_sales_indication()
     * @uses DNBMarketingPlus::setNet_worth()
     * @uses DNBMarketingPlus::setNet_worth_us()
     * @uses DNBMarketingPlus::setNet_income()
     * @uses DNBMarketingPlus::setNet_income_us()
     * @uses DNBMarketingPlus::setImport_indication()
     * @uses DNBMarketingPlus::setExport_indication()
     * @uses DNBMarketingPlus::setAgent_indication()
     * @uses DNBMarketingPlus::setEmployees()
     * @uses DNBMarketingPlus::setEmployees_indication()
     * @uses DNBMarketingPlus::setEmployees_total()
     * @uses DNBMarketingPlus::setEmployees_total_indication()
     * @uses DNBMarketingPlus::setEmployees_total_includes_principals()
     * @uses DNBMarketingPlus::setReport_date()
     * @uses DNBMarketingPlus::setOut_of_business()
     * @param \Webservices\StructType\DNBAddress $correspondence_address
     * @param bool $correspondence_deliverability_indication
     * @param bool $establishment_deliverability_indication
     * @param string $location_status
     * @param bool $is_subsidiary_location
     * @param int $legal_form
     * @param string $line_of_business
     * @param \Webservices\ArrayType\DNBSICCodeArray $sic_activity_codes
     * @param \Webservices\ArrayType\DNBSICCodeArray $sic8_activity_codes
     * @param string $local_activity_code
     * @param int $local_activity_code_type
     * @param int $start_year
     * @param string $ceo_name
     * @param string $ceo_title
     * @param \Webservices\ArrayType\StringArray $executive_names
     * @param string $statement_date
     * @param string $currency
     * @param int $annual_sales
     * @param int $annual_sales_us
     * @param int $annual_sales_indication
     * @param int $net_worth
     * @param int $net_worth_us
     * @param int $net_income
     * @param int $net_income_us
     * @param bool $import_indication
     * @param bool $export_indication
     * @param bool $agent_indication
     * @param int $employees
     * @param int $employees_indication
     * @param int $employees_total
     * @param int $employees_total_indication
     * @param bool $employees_total_includes_principals
     * @param string $report_date
     * @param bool $out_of_business
     */
    public function __construct(\Webservices\StructType\DNBAddress $correspondence_address = null, $correspondence_deliverability_indication = null, $establishment_deliverability_indication = null, $location_status = null, $is_subsidiary_location = null, $legal_form = null, $line_of_business = null, \Webservices\ArrayType\DNBSICCodeArray $sic_activity_codes = null, \Webservices\ArrayType\DNBSICCodeArray $sic8_activity_codes = null, $local_activity_code = null, $local_activity_code_type = null, $start_year = null, $ceo_name = null, $ceo_title = null, \Webservices\ArrayType\StringArray $executive_names = null, $statement_date = null, $currency = null, $annual_sales = null, $annual_sales_us = null, $annual_sales_indication = null, $net_worth = null, $net_worth_us = null, $net_income = null, $net_income_us = null, $import_indication = null, $export_indication = null, $agent_indication = null, $employees = null, $employees_indication = null, $employees_total = null, $employees_total_indication = null, $employees_total_includes_principals = null, $report_date = null, $out_of_business = null)
    {
        $this
            ->setCorrespondence_address($correspondence_address)
            ->setCorrespondence_deliverability_indication($correspondence_deliverability_indication)
            ->setEstablishment_deliverability_indication($establishment_deliverability_indication)
            ->setLocation_status($location_status)
            ->setIs_subsidiary_location($is_subsidiary_location)
            ->setLegal_form($legal_form)
            ->setLine_of_business($line_of_business)
            ->setSic_activity_codes($sic_activity_codes)
            ->setSic8_activity_codes($sic8_activity_codes)
            ->setLocal_activity_code($local_activity_code)
            ->setLocal_activity_code_type($local_activity_code_type)
            ->setStart_year($start_year)
            ->setCeo_name($ceo_name)
            ->setCeo_title($ceo_title)
            ->setExecutive_names($executive_names)
            ->setStatement_date($statement_date)
            ->setCurrency($currency)
            ->setAnnual_sales($annual_sales)
            ->setAnnual_sales_us($annual_sales_us)
            ->setAnnual_sales_indication($annual_sales_indication)
            ->setNet_worth($net_worth)
            ->setNet_worth_us($net_worth_us)
            ->setNet_income($net_income)
            ->setNet_income_us($net_income_us)
            ->setImport_indication($import_indication)
            ->setExport_indication($export_indication)
            ->setAgent_indication($agent_indication)
            ->setEmployees($employees)
            ->setEmployees_indication($employees_indication)
            ->setEmployees_total($employees_total)
            ->setEmployees_total_indication($employees_total_indication)
            ->setEmployees_total_includes_principals($employees_total_includes_principals)
            ->setReport_date($report_date)
            ->setOut_of_business($out_of_business);
    }
    /**
     * Get correspondence_address value
     * @return \Webservices\StructType\DNBAddress|null
     */
    public function getCorrespondence_address()
    {
        return $this->correspondence_address;
    }
    /**
     * Set correspondence_address value
     * @param \Webservices\StructType\DNBAddress $correspondence_address
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setCorrespondence_address(\Webservices\StructType\DNBAddress $correspondence_address = null)
    {
        $this->correspondence_address = $correspondence_address;
        return $this;
    }
    /**
     * Get correspondence_deliverability_indication value
     * @return bool|null
     */
    public function getCorrespondence_deliverability_indication()
    {
        return $this->correspondence_deliverability_indication;
    }
    /**
     * Set correspondence_deliverability_indication value
     * @param bool $correspondence_deliverability_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setCorrespondence_deliverability_indication($correspondence_deliverability_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($correspondence_deliverability_indication) && !is_bool($correspondence_deliverability_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($correspondence_deliverability_indication)), __LINE__);
        }
        $this->correspondence_deliverability_indication = $correspondence_deliverability_indication;
        return $this;
    }
    /**
     * Get establishment_deliverability_indication value
     * @return bool|null
     */
    public function getEstablishment_deliverability_indication()
    {
        return $this->establishment_deliverability_indication;
    }
    /**
     * Set establishment_deliverability_indication value
     * @param bool $establishment_deliverability_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setEstablishment_deliverability_indication($establishment_deliverability_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($establishment_deliverability_indication) && !is_bool($establishment_deliverability_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($establishment_deliverability_indication)), __LINE__);
        }
        $this->establishment_deliverability_indication = $establishment_deliverability_indication;
        return $this;
    }
    /**
     * Get location_status value
     * @return string|null
     */
    public function getLocation_status()
    {
        return $this->location_status;
    }
    /**
     * Set location_status value
     * @param string $location_status
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setLocation_status($location_status = null)
    {
        // validation for constraint: string
        if (!is_null($location_status) && !is_string($location_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location_status)), __LINE__);
        }
        $this->location_status = $location_status;
        return $this;
    }
    /**
     * Get is_subsidiary_location value
     * @return bool|null
     */
    public function getIs_subsidiary_location()
    {
        return $this->is_subsidiary_location;
    }
    /**
     * Set is_subsidiary_location value
     * @param bool $is_subsidiary_location
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setIs_subsidiary_location($is_subsidiary_location = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_subsidiary_location) && !is_bool($is_subsidiary_location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_subsidiary_location)), __LINE__);
        }
        $this->is_subsidiary_location = $is_subsidiary_location;
        return $this;
    }
    /**
     * Get legal_form value
     * @return int|null
     */
    public function getLegal_form()
    {
        return $this->legal_form;
    }
    /**
     * Set legal_form value
     * @param int $legal_form
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setLegal_form($legal_form = null)
    {
        // validation for constraint: int
        if (!is_null($legal_form) && !is_numeric($legal_form)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($legal_form)), __LINE__);
        }
        $this->legal_form = $legal_form;
        return $this;
    }
    /**
     * Get line_of_business value
     * @return string|null
     */
    public function getLine_of_business()
    {
        return $this->line_of_business;
    }
    /**
     * Set line_of_business value
     * @param string $line_of_business
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setLine_of_business($line_of_business = null)
    {
        // validation for constraint: string
        if (!is_null($line_of_business) && !is_string($line_of_business)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line_of_business)), __LINE__);
        }
        $this->line_of_business = $line_of_business;
        return $this;
    }
    /**
     * Get sic_activity_codes value
     * @return \Webservices\ArrayType\DNBSICCodeArray|null
     */
    public function getSic_activity_codes()
    {
        return $this->sic_activity_codes;
    }
    /**
     * Set sic_activity_codes value
     * @param \Webservices\ArrayType\DNBSICCodeArray $sic_activity_codes
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setSic_activity_codes(\Webservices\ArrayType\DNBSICCodeArray $sic_activity_codes = null)
    {
        $this->sic_activity_codes = $sic_activity_codes;
        return $this;
    }
    /**
     * Get sic8_activity_codes value
     * @return \Webservices\ArrayType\DNBSICCodeArray|null
     */
    public function getSic8_activity_codes()
    {
        return $this->sic8_activity_codes;
    }
    /**
     * Set sic8_activity_codes value
     * @param \Webservices\ArrayType\DNBSICCodeArray $sic8_activity_codes
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setSic8_activity_codes(\Webservices\ArrayType\DNBSICCodeArray $sic8_activity_codes = null)
    {
        $this->sic8_activity_codes = $sic8_activity_codes;
        return $this;
    }
    /**
     * Get local_activity_code value
     * @return string|null
     */
    public function getLocal_activity_code()
    {
        return $this->local_activity_code;
    }
    /**
     * Set local_activity_code value
     * @param string $local_activity_code
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setLocal_activity_code($local_activity_code = null)
    {
        // validation for constraint: string
        if (!is_null($local_activity_code) && !is_string($local_activity_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($local_activity_code)), __LINE__);
        }
        $this->local_activity_code = $local_activity_code;
        return $this;
    }
    /**
     * Get local_activity_code_type value
     * @return int|null
     */
    public function getLocal_activity_code_type()
    {
        return $this->local_activity_code_type;
    }
    /**
     * Set local_activity_code_type value
     * @param int $local_activity_code_type
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setLocal_activity_code_type($local_activity_code_type = null)
    {
        // validation for constraint: int
        if (!is_null($local_activity_code_type) && !is_numeric($local_activity_code_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($local_activity_code_type)), __LINE__);
        }
        $this->local_activity_code_type = $local_activity_code_type;
        return $this;
    }
    /**
     * Get start_year value
     * @return int|null
     */
    public function getStart_year()
    {
        return $this->start_year;
    }
    /**
     * Set start_year value
     * @param int $start_year
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setStart_year($start_year = null)
    {
        // validation for constraint: int
        if (!is_null($start_year) && !is_numeric($start_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($start_year)), __LINE__);
        }
        $this->start_year = $start_year;
        return $this;
    }
    /**
     * Get ceo_name value
     * @return string|null
     */
    public function getCeo_name()
    {
        return $this->ceo_name;
    }
    /**
     * Set ceo_name value
     * @param string $ceo_name
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setCeo_name($ceo_name = null)
    {
        // validation for constraint: string
        if (!is_null($ceo_name) && !is_string($ceo_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ceo_name)), __LINE__);
        }
        $this->ceo_name = $ceo_name;
        return $this;
    }
    /**
     * Get ceo_title value
     * @return string|null
     */
    public function getCeo_title()
    {
        return $this->ceo_title;
    }
    /**
     * Set ceo_title value
     * @param string $ceo_title
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setCeo_title($ceo_title = null)
    {
        // validation for constraint: string
        if (!is_null($ceo_title) && !is_string($ceo_title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ceo_title)), __LINE__);
        }
        $this->ceo_title = $ceo_title;
        return $this;
    }
    /**
     * Get executive_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getExecutive_names()
    {
        return $this->executive_names;
    }
    /**
     * Set executive_names value
     * @param \Webservices\ArrayType\StringArray $executive_names
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setExecutive_names(\Webservices\ArrayType\StringArray $executive_names = null)
    {
        $this->executive_names = $executive_names;
        return $this;
    }
    /**
     * Get statement_date value
     * @return string|null
     */
    public function getStatement_date()
    {
        return $this->statement_date;
    }
    /**
     * Set statement_date value
     * @param string $statement_date
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setStatement_date($statement_date = null)
    {
        // validation for constraint: string
        if (!is_null($statement_date) && !is_string($statement_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statement_date)), __LINE__);
        }
        $this->statement_date = $statement_date;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get annual_sales value
     * @return int|null
     */
    public function getAnnual_sales()
    {
        return $this->annual_sales;
    }
    /**
     * Set annual_sales value
     * @param int $annual_sales
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setAnnual_sales($annual_sales = null)
    {
        // validation for constraint: int
        if (!is_null($annual_sales) && !is_numeric($annual_sales)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($annual_sales)), __LINE__);
        }
        $this->annual_sales = $annual_sales;
        return $this;
    }
    /**
     * Get annual_sales_us value
     * @return int|null
     */
    public function getAnnual_sales_us()
    {
        return $this->annual_sales_us;
    }
    /**
     * Set annual_sales_us value
     * @param int $annual_sales_us
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setAnnual_sales_us($annual_sales_us = null)
    {
        // validation for constraint: int
        if (!is_null($annual_sales_us) && !is_numeric($annual_sales_us)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($annual_sales_us)), __LINE__);
        }
        $this->annual_sales_us = $annual_sales_us;
        return $this;
    }
    /**
     * Get annual_sales_indication value
     * @return int|null
     */
    public function getAnnual_sales_indication()
    {
        return $this->annual_sales_indication;
    }
    /**
     * Set annual_sales_indication value
     * @param int $annual_sales_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setAnnual_sales_indication($annual_sales_indication = null)
    {
        // validation for constraint: int
        if (!is_null($annual_sales_indication) && !is_numeric($annual_sales_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($annual_sales_indication)), __LINE__);
        }
        $this->annual_sales_indication = $annual_sales_indication;
        return $this;
    }
    /**
     * Get net_worth value
     * @return int|null
     */
    public function getNet_worth()
    {
        return $this->net_worth;
    }
    /**
     * Set net_worth value
     * @param int $net_worth
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setNet_worth($net_worth = null)
    {
        // validation for constraint: int
        if (!is_null($net_worth) && !is_numeric($net_worth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($net_worth)), __LINE__);
        }
        $this->net_worth = $net_worth;
        return $this;
    }
    /**
     * Get net_worth_us value
     * @return int|null
     */
    public function getNet_worth_us()
    {
        return $this->net_worth_us;
    }
    /**
     * Set net_worth_us value
     * @param int $net_worth_us
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setNet_worth_us($net_worth_us = null)
    {
        // validation for constraint: int
        if (!is_null($net_worth_us) && !is_numeric($net_worth_us)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($net_worth_us)), __LINE__);
        }
        $this->net_worth_us = $net_worth_us;
        return $this;
    }
    /**
     * Get net_income value
     * @return int|null
     */
    public function getNet_income()
    {
        return $this->net_income;
    }
    /**
     * Set net_income value
     * @param int $net_income
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setNet_income($net_income = null)
    {
        // validation for constraint: int
        if (!is_null($net_income) && !is_numeric($net_income)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($net_income)), __LINE__);
        }
        $this->net_income = $net_income;
        return $this;
    }
    /**
     * Get net_income_us value
     * @return int|null
     */
    public function getNet_income_us()
    {
        return $this->net_income_us;
    }
    /**
     * Set net_income_us value
     * @param int $net_income_us
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setNet_income_us($net_income_us = null)
    {
        // validation for constraint: int
        if (!is_null($net_income_us) && !is_numeric($net_income_us)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($net_income_us)), __LINE__);
        }
        $this->net_income_us = $net_income_us;
        return $this;
    }
    /**
     * Get import_indication value
     * @return bool|null
     */
    public function getImport_indication()
    {
        return $this->import_indication;
    }
    /**
     * Set import_indication value
     * @param bool $import_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setImport_indication($import_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($import_indication) && !is_bool($import_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($import_indication)), __LINE__);
        }
        $this->import_indication = $import_indication;
        return $this;
    }
    /**
     * Get export_indication value
     * @return bool|null
     */
    public function getExport_indication()
    {
        return $this->export_indication;
    }
    /**
     * Set export_indication value
     * @param bool $export_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setExport_indication($export_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($export_indication) && !is_bool($export_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($export_indication)), __LINE__);
        }
        $this->export_indication = $export_indication;
        return $this;
    }
    /**
     * Get agent_indication value
     * @return bool|null
     */
    public function getAgent_indication()
    {
        return $this->agent_indication;
    }
    /**
     * Set agent_indication value
     * @param bool $agent_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setAgent_indication($agent_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($agent_indication) && !is_bool($agent_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($agent_indication)), __LINE__);
        }
        $this->agent_indication = $agent_indication;
        return $this;
    }
    /**
     * Get employees value
     * @return int|null
     */
    public function getEmployees()
    {
        return $this->employees;
    }
    /**
     * Set employees value
     * @param int $employees
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setEmployees($employees = null)
    {
        // validation for constraint: int
        if (!is_null($employees) && !is_numeric($employees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees)), __LINE__);
        }
        $this->employees = $employees;
        return $this;
    }
    /**
     * Get employees_indication value
     * @return int|null
     */
    public function getEmployees_indication()
    {
        return $this->employees_indication;
    }
    /**
     * Set employees_indication value
     * @param int $employees_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setEmployees_indication($employees_indication = null)
    {
        // validation for constraint: int
        if (!is_null($employees_indication) && !is_numeric($employees_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees_indication)), __LINE__);
        }
        $this->employees_indication = $employees_indication;
        return $this;
    }
    /**
     * Get employees_total value
     * @return int|null
     */
    public function getEmployees_total()
    {
        return $this->employees_total;
    }
    /**
     * Set employees_total value
     * @param int $employees_total
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setEmployees_total($employees_total = null)
    {
        // validation for constraint: int
        if (!is_null($employees_total) && !is_numeric($employees_total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees_total)), __LINE__);
        }
        $this->employees_total = $employees_total;
        return $this;
    }
    /**
     * Get employees_total_indication value
     * @return int|null
     */
    public function getEmployees_total_indication()
    {
        return $this->employees_total_indication;
    }
    /**
     * Set employees_total_indication value
     * @param int $employees_total_indication
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setEmployees_total_indication($employees_total_indication = null)
    {
        // validation for constraint: int
        if (!is_null($employees_total_indication) && !is_numeric($employees_total_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($employees_total_indication)), __LINE__);
        }
        $this->employees_total_indication = $employees_total_indication;
        return $this;
    }
    /**
     * Get employees_total_includes_principals value
     * @return bool|null
     */
    public function getEmployees_total_includes_principals()
    {
        return $this->employees_total_includes_principals;
    }
    /**
     * Set employees_total_includes_principals value
     * @param bool $employees_total_includes_principals
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setEmployees_total_includes_principals($employees_total_includes_principals = null)
    {
        // validation for constraint: boolean
        if (!is_null($employees_total_includes_principals) && !is_bool($employees_total_includes_principals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($employees_total_includes_principals)), __LINE__);
        }
        $this->employees_total_includes_principals = $employees_total_includes_principals;
        return $this;
    }
    /**
     * Get report_date value
     * @return string|null
     */
    public function getReport_date()
    {
        return $this->report_date;
    }
    /**
     * Set report_date value
     * @param string $report_date
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setReport_date($report_date = null)
    {
        // validation for constraint: string
        if (!is_null($report_date) && !is_string($report_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($report_date)), __LINE__);
        }
        $this->report_date = $report_date;
        return $this;
    }
    /**
     * Get out_of_business value
     * @return bool|null
     */
    public function getOut_of_business()
    {
        return $this->out_of_business;
    }
    /**
     * Set out_of_business value
     * @param bool $out_of_business
     * @return \Webservices\StructType\DNBMarketingPlus
     */
    public function setOut_of_business($out_of_business = null)
    {
        // validation for constraint: boolean
        if (!is_null($out_of_business) && !is_bool($out_of_business)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($out_of_business)), __LINE__);
        }
        $this->out_of_business = $out_of_business;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBMarketingPlus
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
