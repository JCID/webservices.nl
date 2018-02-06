<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCalamityOther StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCalamityOther extends AbstractStructBase
{
    /**
     * The calamity_code
     * @var int
     */
    public $calamity_code;
    /**
     * The calamity_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $calamity_text;
    /**
     * The expiration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expiration_date;
    /**
     * Constructor method for GCRCalamityOther
     * @uses GCRCalamityOther::setCalamity_code()
     * @uses GCRCalamityOther::setCalamity_text()
     * @uses GCRCalamityOther::setExpiration_date()
     * @param int $calamity_code
     * @param string $calamity_text
     * @param string $expiration_date
     */
    public function __construct($calamity_code = null, $calamity_text = null, $expiration_date = null)
    {
        $this
            ->setCalamity_code($calamity_code)
            ->setCalamity_text($calamity_text)
            ->setExpiration_date($expiration_date);
    }
    /**
     * Get calamity_code value
     * @return int|null
     */
    public function getCalamity_code()
    {
        return $this->calamity_code;
    }
    /**
     * Set calamity_code value
     * @param int $calamity_code
     * @return \Webservices\StructType\GCRCalamityOther
     */
    public function setCalamity_code($calamity_code = null)
    {
        // validation for constraint: int
        if (!is_null($calamity_code) && !is_numeric($calamity_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($calamity_code)), __LINE__);
        }
        $this->calamity_code = $calamity_code;
        return $this;
    }
    /**
     * Get calamity_text value
     * @return string|null
     */
    public function getCalamity_text()
    {
        return $this->calamity_text;
    }
    /**
     * Set calamity_text value
     * @param string $calamity_text
     * @return \Webservices\StructType\GCRCalamityOther
     */
    public function setCalamity_text($calamity_text = null)
    {
        // validation for constraint: string
        if (!is_null($calamity_text) && !is_string($calamity_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calamity_text)), __LINE__);
        }
        $this->calamity_text = $calamity_text;
        return $this;
    }
    /**
     * Get expiration_date value
     * @return string|null
     */
    public function getExpiration_date()
    {
        return $this->expiration_date;
    }
    /**
     * Set expiration_date value
     * @param string $expiration_date
     * @return \Webservices\StructType\GCRCalamityOther
     */
    public function setExpiration_date($expiration_date = null)
    {
        // validation for constraint: string
        if (!is_null($expiration_date) && !is_string($expiration_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiration_date)), __LINE__);
        }
        $this->expiration_date = $expiration_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCalamityOther
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
