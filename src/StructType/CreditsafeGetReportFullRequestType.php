<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creditsafeGetReportFullRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeGetReportFullRequestType extends AbstractStructBase
{
    /**
     * The company_id
     * @var string
     */
    public $company_id;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * Constructor method for creditsafeGetReportFullRequestType
     * @uses CreditsafeGetReportFullRequestType::setCompany_id()
     * @uses CreditsafeGetReportFullRequestType::setLanguage()
     * @uses CreditsafeGetReportFullRequestType::setDocument()
     * @param string $company_id
     * @param string $language
     * @param string $document
     */
    public function __construct($company_id = null, $language = null, $document = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setLanguage($language)
            ->setDocument($document);
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->company_id;
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \Webservices\StructType\CreditsafeGetReportFullRequestType
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $company_id;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Webservices\StructType\CreditsafeGetReportFullRequestType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\CreditsafeGetReportFullRequestType
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeGetReportFullRequestType
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
