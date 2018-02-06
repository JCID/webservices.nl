<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyContinuedUnder StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyContinuedUnder extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The continued_under_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $continued_under_code;
    /**
     * The continued_under_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $continued_under_text;
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * Constructor method for GCRCompanyContinuedUnder
     * @uses GCRCompanyContinuedUnder::setGraydon_company_id()
     * @uses GCRCompanyContinuedUnder::setContinued_under_code()
     * @uses GCRCompanyContinuedUnder::setContinued_under_text()
     * @uses GCRCompanyContinuedUnder::setDate_from()
     * @param int $graydon_company_id
     * @param int $continued_under_code
     * @param string $continued_under_text
     * @param string $date_from
     */
    public function __construct($graydon_company_id = null, $continued_under_code = null, $continued_under_text = null, $date_from = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setContinued_under_code($continued_under_code)
            ->setContinued_under_text($continued_under_text)
            ->setDate_from($date_from);
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
     * @return \Webservices\StructType\GCRCompanyContinuedUnder
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
     * Get continued_under_code value
     * @return int|null
     */
    public function getContinued_under_code()
    {
        return $this->continued_under_code;
    }
    /**
     * Set continued_under_code value
     * @param int $continued_under_code
     * @return \Webservices\StructType\GCRCompanyContinuedUnder
     */
    public function setContinued_under_code($continued_under_code = null)
    {
        // validation for constraint: int
        if (!is_null($continued_under_code) && !is_numeric($continued_under_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($continued_under_code)), __LINE__);
        }
        $this->continued_under_code = $continued_under_code;
        return $this;
    }
    /**
     * Get continued_under_text value
     * @return string|null
     */
    public function getContinued_under_text()
    {
        return $this->continued_under_text;
    }
    /**
     * Set continued_under_text value
     * @param string $continued_under_text
     * @return \Webservices\StructType\GCRCompanyContinuedUnder
     */
    public function setContinued_under_text($continued_under_text = null)
    {
        // validation for constraint: string
        if (!is_null($continued_under_text) && !is_string($continued_under_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($continued_under_text)), __LINE__);
        }
        $this->continued_under_text = $continued_under_text;
        return $this;
    }
    /**
     * Get date_from value
     * @return string|null
     */
    public function getDate_from()
    {
        return $this->date_from;
    }
    /**
     * Set date_from value
     * @param string $date_from
     * @return \Webservices\StructType\GCRCompanyContinuedUnder
     */
    public function setDate_from($date_from = null)
    {
        // validation for constraint: string
        if (!is_null($date_from) && !is_string($date_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_from)), __LINE__);
        }
        $this->date_from = $date_from;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCompanyContinuedUnder
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
