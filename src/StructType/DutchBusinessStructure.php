<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessStructure StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessStructure extends AbstractStructBase
{
    /**
     * The ultimate_parent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ultimate_parent;
    /**
     * The number_of_subsidiaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $number_of_subsidiaries;
    /**
     * The parent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parent;
    /**
     * Constructor method for DutchBusinessStructure
     * @uses DutchBusinessStructure::setUltimate_parent()
     * @uses DutchBusinessStructure::setNumber_of_subsidiaries()
     * @uses DutchBusinessStructure::setParent()
     * @param string $ultimate_parent
     * @param int $number_of_subsidiaries
     * @param string $parent
     */
    public function __construct($ultimate_parent = null, $number_of_subsidiaries = null, $parent = null)
    {
        $this
            ->setUltimate_parent($ultimate_parent)
            ->setNumber_of_subsidiaries($number_of_subsidiaries)
            ->setParent($parent);
    }
    /**
     * Get ultimate_parent value
     * @return string|null
     */
    public function getUltimate_parent()
    {
        return $this->ultimate_parent;
    }
    /**
     * Set ultimate_parent value
     * @param string $ultimate_parent
     * @return \Webservices\StructType\DutchBusinessStructure
     */
    public function setUltimate_parent($ultimate_parent = null)
    {
        // validation for constraint: string
        if (!is_null($ultimate_parent) && !is_string($ultimate_parent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ultimate_parent)), __LINE__);
        }
        $this->ultimate_parent = $ultimate_parent;
        return $this;
    }
    /**
     * Get number_of_subsidiaries value
     * @return int|null
     */
    public function getNumber_of_subsidiaries()
    {
        return $this->number_of_subsidiaries;
    }
    /**
     * Set number_of_subsidiaries value
     * @param int $number_of_subsidiaries
     * @return \Webservices\StructType\DutchBusinessStructure
     */
    public function setNumber_of_subsidiaries($number_of_subsidiaries = null)
    {
        // validation for constraint: int
        if (!is_null($number_of_subsidiaries) && !is_numeric($number_of_subsidiaries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number_of_subsidiaries)), __LINE__);
        }
        $this->number_of_subsidiaries = $number_of_subsidiaries;
        return $this;
    }
    /**
     * Get parent value
     * @return string|null
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Set parent value
     * @param string $parent
     * @return \Webservices\StructType\DutchBusinessStructure
     */
    public function setParent($parent = null)
    {
        // validation for constraint: string
        if (!is_null($parent) && !is_string($parent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parent)), __LINE__);
        }
        $this->parent = $parent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessStructure
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
