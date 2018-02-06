<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRContinuation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRContinuation extends AbstractStructBase
{
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * The residence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $residence;
    /**
     * The legal_form_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $legal_form_code;
    /**
     * The legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_text;
    /**
     * Constructor method for GCRContinuation
     * @uses GCRContinuation::setDate_from()
     * @uses GCRContinuation::setResidence()
     * @uses GCRContinuation::setLegal_form_code()
     * @uses GCRContinuation::setLegal_form_text()
     * @param string $date_from
     * @param string $residence
     * @param int $legal_form_code
     * @param string $legal_form_text
     */
    public function __construct($date_from = null, $residence = null, $legal_form_code = null, $legal_form_text = null)
    {
        $this
            ->setDate_from($date_from)
            ->setResidence($residence)
            ->setLegal_form_code($legal_form_code)
            ->setLegal_form_text($legal_form_text);
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
     * @return \Webservices\StructType\GCRContinuation
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
     * Get residence value
     * @return string|null
     */
    public function getResidence()
    {
        return $this->residence;
    }
    /**
     * Set residence value
     * @param string $residence
     * @return \Webservices\StructType\GCRContinuation
     */
    public function setResidence($residence = null)
    {
        // validation for constraint: string
        if (!is_null($residence) && !is_string($residence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residence)), __LINE__);
        }
        $this->residence = $residence;
        return $this;
    }
    /**
     * Get legal_form_code value
     * @return int|null
     */
    public function getLegal_form_code()
    {
        return $this->legal_form_code;
    }
    /**
     * Set legal_form_code value
     * @param int $legal_form_code
     * @return \Webservices\StructType\GCRContinuation
     */
    public function setLegal_form_code($legal_form_code = null)
    {
        // validation for constraint: int
        if (!is_null($legal_form_code) && !is_numeric($legal_form_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($legal_form_code)), __LINE__);
        }
        $this->legal_form_code = $legal_form_code;
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
     * @return \Webservices\StructType\GCRContinuation
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRContinuation
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
