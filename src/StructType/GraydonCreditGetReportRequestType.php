<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graydonCreditGetReportRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditGetReportRequestType extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * Constructor method for graydonCreditGetReportRequestType
     * @uses GraydonCreditGetReportRequestType::setGraydon_company_id()
     * @uses GraydonCreditGetReportRequestType::setDocument()
     * @param int $graydon_company_id
     * @param string $document
     */
    public function __construct($graydon_company_id = null, $document = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setDocument($document);
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
     * @return \Webservices\StructType\GraydonCreditGetReportRequestType
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
     * @return \Webservices\StructType\GraydonCreditGetReportRequestType
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
     * @return \Webservices\StructType\GraydonCreditGetReportRequestType
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
