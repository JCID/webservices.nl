<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanySimple StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanySimple extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The contact_details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRContactDetails
     */
    public $contact_details;
    /**
     * The official_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCROfficialData
     */
    public $official_data;
    /**
     * The history
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRHistory
     */
    public $history;
    /**
     * The sectors_of_industry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRSectorOfIndustryArray
     */
    public $sectors_of_industry;
    /**
     * Constructor method for GCRCompanySimple
     * @uses GCRCompanySimple::setGraydon_company_id()
     * @uses GCRCompanySimple::setContact_details()
     * @uses GCRCompanySimple::setOfficial_data()
     * @uses GCRCompanySimple::setHistory()
     * @uses GCRCompanySimple::setSectors_of_industry()
     * @param int $graydon_company_id
     * @param \Webservices\StructType\GCRContactDetails $contact_details
     * @param \Webservices\StructType\GCROfficialData $official_data
     * @param \Webservices\StructType\GCRHistory $history
     * @param \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry
     */
    public function __construct($graydon_company_id = null, \Webservices\StructType\GCRContactDetails $contact_details = null, \Webservices\StructType\GCROfficialData $official_data = null, \Webservices\StructType\GCRHistory $history = null, \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setContact_details($contact_details)
            ->setOfficial_data($official_data)
            ->setHistory($history)
            ->setSectors_of_industry($sectors_of_industry);
    }
    /**
     * Get graydon_company_id value
     * @return int|null
     */
    public function getGraydon_company_id()
    {
        return $this->graydon_company_id;
    }
    /**
     * Set graydon_company_id value
     * @param int $graydon_company_id
     * @return \Webservices\StructType\GCRCompanySimple
     */
    public function setGraydon_company_id($graydon_company_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_company_id) && !is_numeric($graydon_company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_company_id)), __LINE__);
        }
        $this->graydon_company_id = $graydon_company_id;
        return $this;
    }
    /**
     * Get contact_details value
     * @return \Webservices\StructType\GCRContactDetails|null
     */
    public function getContact_details()
    {
        return $this->contact_details;
    }
    /**
     * Set contact_details value
     * @param \Webservices\StructType\GCRContactDetails $contact_details
     * @return \Webservices\StructType\GCRCompanySimple
     */
    public function setContact_details(\Webservices\StructType\GCRContactDetails $contact_details = null)
    {
        $this->contact_details = $contact_details;
        return $this;
    }
    /**
     * Get official_data value
     * @return \Webservices\StructType\GCROfficialData|null
     */
    public function getOfficial_data()
    {
        return $this->official_data;
    }
    /**
     * Set official_data value
     * @param \Webservices\StructType\GCROfficialData $official_data
     * @return \Webservices\StructType\GCRCompanySimple
     */
    public function setOfficial_data(\Webservices\StructType\GCROfficialData $official_data = null)
    {
        $this->official_data = $official_data;
        return $this;
    }
    /**
     * Get history value
     * @return \Webservices\StructType\GCRHistory|null
     */
    public function getHistory()
    {
        return $this->history;
    }
    /**
     * Set history value
     * @param \Webservices\StructType\GCRHistory $history
     * @return \Webservices\StructType\GCRCompanySimple
     */
    public function setHistory(\Webservices\StructType\GCRHistory $history = null)
    {
        $this->history = $history;
        return $this;
    }
    /**
     * Get sectors_of_industry value
     * @return \Webservices\ArrayType\GCRSectorOfIndustryArray|null
     */
    public function getSectors_of_industry()
    {
        return $this->sectors_of_industry;
    }
    /**
     * Set sectors_of_industry value
     * @param \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry
     * @return \Webservices\StructType\GCRCompanySimple
     */
    public function setSectors_of_industry(\Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null)
    {
        $this->sectors_of_industry = $sectors_of_industry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCompanySimple
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
