<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRFiling StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRFiling extends AbstractStructBase
{
    /**
     * The filing_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $filing_code;
    /**
     * The filing_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $filing_text;
    /**
     * The filing_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $filing_date;
    /**
     * The chamber_of_commerce
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRChamberOfCommerce
     */
    public $chamber_of_commerce;
    /**
     * Constructor method for GCRFiling
     * @uses GCRFiling::setFiling_code()
     * @uses GCRFiling::setFiling_text()
     * @uses GCRFiling::setFiling_date()
     * @uses GCRFiling::setChamber_of_commerce()
     * @param string $filing_code
     * @param string $filing_text
     * @param string $filing_date
     * @param \Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce
     */
    public function __construct($filing_code = null, $filing_text = null, $filing_date = null, \Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce = null)
    {
        $this
            ->setFiling_code($filing_code)
            ->setFiling_text($filing_text)
            ->setFiling_date($filing_date)
            ->setChamber_of_commerce($chamber_of_commerce);
    }
    /**
     * Get filing_code value
     * @return string|null
     */
    public function getFiling_code()
    {
        return $this->filing_code;
    }
    /**
     * Set filing_code value
     * @param string $filing_code
     * @return \Webservices\StructType\GCRFiling
     */
    public function setFiling_code($filing_code = null)
    {
        // validation for constraint: string
        if (!is_null($filing_code) && !is_string($filing_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filing_code)), __LINE__);
        }
        $this->filing_code = $filing_code;
        return $this;
    }
    /**
     * Get filing_text value
     * @return string|null
     */
    public function getFiling_text()
    {
        return $this->filing_text;
    }
    /**
     * Set filing_text value
     * @param string $filing_text
     * @return \Webservices\StructType\GCRFiling
     */
    public function setFiling_text($filing_text = null)
    {
        // validation for constraint: string
        if (!is_null($filing_text) && !is_string($filing_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filing_text)), __LINE__);
        }
        $this->filing_text = $filing_text;
        return $this;
    }
    /**
     * Get filing_date value
     * @return string|null
     */
    public function getFiling_date()
    {
        return $this->filing_date;
    }
    /**
     * Set filing_date value
     * @param string $filing_date
     * @return \Webservices\StructType\GCRFiling
     */
    public function setFiling_date($filing_date = null)
    {
        // validation for constraint: string
        if (!is_null($filing_date) && !is_string($filing_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filing_date)), __LINE__);
        }
        $this->filing_date = $filing_date;
        return $this;
    }
    /**
     * Get chamber_of_commerce value
     * @return \Webservices\StructType\GCRChamberOfCommerce|null
     */
    public function getChamber_of_commerce()
    {
        return $this->chamber_of_commerce;
    }
    /**
     * Set chamber_of_commerce value
     * @param \Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce
     * @return \Webservices\StructType\GCRFiling
     */
    public function setChamber_of_commerce(\Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce = null)
    {
        $this->chamber_of_commerce = $chamber_of_commerce;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRFiling
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
