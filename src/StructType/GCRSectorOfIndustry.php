<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRSectorOfIndustry StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRSectorOfIndustry extends AbstractStructBase
{
    /**
     * The is_primary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_primary;
    /**
     * The sector_code
     * @var string
     */
    public $sector_code;
    /**
     * The sector_text
     * @var string
     */
    public $sector_text;
    /**
     * Constructor method for GCRSectorOfIndustry
     * @uses GCRSectorOfIndustry::setIs_primary()
     * @uses GCRSectorOfIndustry::setSector_code()
     * @uses GCRSectorOfIndustry::setSector_text()
     * @param bool $is_primary
     * @param string $sector_code
     * @param string $sector_text
     */
    public function __construct($is_primary = null, $sector_code = null, $sector_text = null)
    {
        $this
            ->setIs_primary($is_primary)
            ->setSector_code($sector_code)
            ->setSector_text($sector_text);
    }
    /**
     * Get is_primary value
     * @return bool|null
     */
    public function getIs_primary()
    {
        return $this->is_primary;
    }
    /**
     * Set is_primary value
     * @param bool $is_primary
     * @return \Webservices\StructType\GCRSectorOfIndustry
     */
    public function setIs_primary($is_primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_primary) && !is_bool($is_primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_primary)), __LINE__);
        }
        $this->is_primary = $is_primary;
        return $this;
    }
    /**
     * Get sector_code value
     * @return string|null
     */
    public function getSector_code()
    {
        return $this->sector_code;
    }
    /**
     * Set sector_code value
     * @param string $sector_code
     * @return \Webservices\StructType\GCRSectorOfIndustry
     */
    public function setSector_code($sector_code = null)
    {
        // validation for constraint: string
        if (!is_null($sector_code) && !is_string($sector_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sector_code)), __LINE__);
        }
        $this->sector_code = $sector_code;
        return $this;
    }
    /**
     * Get sector_text value
     * @return string|null
     */
    public function getSector_text()
    {
        return $this->sector_text;
    }
    /**
     * Set sector_text value
     * @param string $sector_text
     * @return \Webservices\StructType\GCRSectorOfIndustry
     */
    public function setSector_text($sector_text = null)
    {
        // validation for constraint: string
        if (!is_null($sector_text) && !is_string($sector_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sector_text)), __LINE__);
        }
        $this->sector_text = $sector_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRSectorOfIndustry
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
