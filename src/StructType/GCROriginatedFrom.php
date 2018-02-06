<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCROriginatedFrom StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCROriginatedFrom extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The originated_from_code
     * @var int
     */
    public $originated_from_code;
    /**
     * The originated_from_text
     * @var string
     */
    public $originated_from_text;
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * Constructor method for GCROriginatedFrom
     * @uses GCROriginatedFrom::setGraydon_company_id()
     * @uses GCROriginatedFrom::setOriginated_from_code()
     * @uses GCROriginatedFrom::setOriginated_from_text()
     * @uses GCROriginatedFrom::setDate_from()
     * @param int $graydon_company_id
     * @param int $originated_from_code
     * @param string $originated_from_text
     * @param string $date_from
     */
    public function __construct($graydon_company_id = null, $originated_from_code = null, $originated_from_text = null, $date_from = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setOriginated_from_code($originated_from_code)
            ->setOriginated_from_text($originated_from_text)
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
     * @return \Webservices\StructType\GCROriginatedFrom
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
     * Get originated_from_code value
     * @return int|null
     */
    public function getOriginated_from_code()
    {
        return $this->originated_from_code;
    }
    /**
     * Set originated_from_code value
     * @param int $originated_from_code
     * @return \Webservices\StructType\GCROriginatedFrom
     */
    public function setOriginated_from_code($originated_from_code = null)
    {
        // validation for constraint: int
        if (!is_null($originated_from_code) && !is_numeric($originated_from_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originated_from_code)), __LINE__);
        }
        $this->originated_from_code = $originated_from_code;
        return $this;
    }
    /**
     * Get originated_from_text value
     * @return string|null
     */
    public function getOriginated_from_text()
    {
        return $this->originated_from_text;
    }
    /**
     * Set originated_from_text value
     * @param string $originated_from_text
     * @return \Webservices\StructType\GCROriginatedFrom
     */
    public function setOriginated_from_text($originated_from_text = null)
    {
        // validation for constraint: string
        if (!is_null($originated_from_text) && !is_string($originated_from_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originated_from_text)), __LINE__);
        }
        $this->originated_from_text = $originated_from_text;
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
     * @return \Webservices\StructType\GCROriginatedFrom
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
     * @return \Webservices\StructType\GCROriginatedFrom
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
