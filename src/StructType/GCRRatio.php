<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRRatio StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRRatio extends AbstractStructBase
{
    /**
     * The ratio_code
     * @var string
     */
    public $ratio_code;
    /**
     * The ratio_text
     * @var string
     */
    public $ratio_text;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $value;
    /**
     * Constructor method for GCRRatio
     * @uses GCRRatio::setRatio_code()
     * @uses GCRRatio::setRatio_text()
     * @uses GCRRatio::setValue()
     * @param string $ratio_code
     * @param string $ratio_text
     * @param float $value
     */
    public function __construct($ratio_code = null, $ratio_text = null, $value = null)
    {
        $this
            ->setRatio_code($ratio_code)
            ->setRatio_text($ratio_text)
            ->setValue($value);
    }
    /**
     * Get ratio_code value
     * @return string|null
     */
    public function getRatio_code()
    {
        return $this->ratio_code;
    }
    /**
     * Set ratio_code value
     * @param string $ratio_code
     * @return \Webservices\StructType\GCRRatio
     */
    public function setRatio_code($ratio_code = null)
    {
        // validation for constraint: string
        if (!is_null($ratio_code) && !is_string($ratio_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratio_code)), __LINE__);
        }
        $this->ratio_code = $ratio_code;
        return $this;
    }
    /**
     * Get ratio_text value
     * @return string|null
     */
    public function getRatio_text()
    {
        return $this->ratio_text;
    }
    /**
     * Set ratio_text value
     * @param string $ratio_text
     * @return \Webservices\StructType\GCRRatio
     */
    public function setRatio_text($ratio_text = null)
    {
        // validation for constraint: string
        if (!is_null($ratio_text) && !is_string($ratio_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratio_text)), __LINE__);
        }
        $this->ratio_text = $ratio_text;
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Webservices\StructType\GCRRatio
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRRatio
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
