<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRLiaison StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRLiaison extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The liaison_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $liaison_code;
    /**
     * The liaison_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $liaison_text;
    /**
     * Constructor method for GCRLiaison
     * @uses GCRLiaison::setGraydon_company_id()
     * @uses GCRLiaison::setLiaison_code()
     * @uses GCRLiaison::setLiaison_text()
     * @param int $graydon_company_id
     * @param string $liaison_code
     * @param string $liaison_text
     */
    public function __construct($graydon_company_id = null, $liaison_code = null, $liaison_text = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setLiaison_code($liaison_code)
            ->setLiaison_text($liaison_text);
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
     * @return \Webservices\StructType\GCRLiaison
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
     * Get liaison_code value
     * @return string|null
     */
    public function getLiaison_code()
    {
        return $this->liaison_code;
    }
    /**
     * Set liaison_code value
     * @param string $liaison_code
     * @return \Webservices\StructType\GCRLiaison
     */
    public function setLiaison_code($liaison_code = null)
    {
        // validation for constraint: string
        if (!is_null($liaison_code) && !is_string($liaison_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liaison_code)), __LINE__);
        }
        $this->liaison_code = $liaison_code;
        return $this;
    }
    /**
     * Get liaison_text value
     * @return string|null
     */
    public function getLiaison_text()
    {
        return $this->liaison_text;
    }
    /**
     * Set liaison_text value
     * @param string $liaison_text
     * @return \Webservices\StructType\GCRLiaison
     */
    public function setLiaison_text($liaison_text = null)
    {
        // validation for constraint: string
        if (!is_null($liaison_text) && !is_string($liaison_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liaison_text)), __LINE__);
        }
        $this->liaison_text = $liaison_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRLiaison
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
