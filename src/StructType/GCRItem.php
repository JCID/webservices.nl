<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRItem StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRItem extends AbstractStructBase
{
    /**
     * The main_code
     * @var string
     */
    public $main_code;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The sub_code
     * @var string
     */
    public $sub_code;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $value;
    /**
     * The free_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $free_text;
    /**
     * Constructor method for GCRItem
     * @uses GCRItem::setMain_code()
     * @uses GCRItem::setCode()
     * @uses GCRItem::setSub_code()
     * @uses GCRItem::setDescription()
     * @uses GCRItem::setValue()
     * @uses GCRItem::setFree_text()
     * @param string $main_code
     * @param string $code
     * @param string $sub_code
     * @param string $description
     * @param float $value
     * @param string $free_text
     */
    public function __construct($main_code = null, $code = null, $sub_code = null, $description = null, $value = null, $free_text = null)
    {
        $this
            ->setMain_code($main_code)
            ->setCode($code)
            ->setSub_code($sub_code)
            ->setDescription($description)
            ->setValue($value)
            ->setFree_text($free_text);
    }
    /**
     * Get main_code value
     * @return string|null
     */
    public function getMain_code()
    {
        return $this->main_code;
    }
    /**
     * Set main_code value
     * @param string $main_code
     * @return \Webservices\StructType\GCRItem
     */
    public function setMain_code($main_code = null)
    {
        // validation for constraint: string
        if (!is_null($main_code) && !is_string($main_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($main_code)), __LINE__);
        }
        $this->main_code = $main_code;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Webservices\StructType\GCRItem
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get sub_code value
     * @return string|null
     */
    public function getSub_code()
    {
        return $this->sub_code;
    }
    /**
     * Set sub_code value
     * @param string $sub_code
     * @return \Webservices\StructType\GCRItem
     */
    public function setSub_code($sub_code = null)
    {
        // validation for constraint: string
        if (!is_null($sub_code) && !is_string($sub_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sub_code)), __LINE__);
        }
        $this->sub_code = $sub_code;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\GCRItem
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \Webservices\StructType\GCRItem
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Get free_text value
     * @return string|null
     */
    public function getFree_text()
    {
        return $this->free_text;
    }
    /**
     * Set free_text value
     * @param string $free_text
     * @return \Webservices\StructType\GCRItem
     */
    public function setFree_text($free_text = null)
    {
        // validation for constraint: string
        if (!is_null($free_text) && !is_string($free_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($free_text)), __LINE__);
        }
        $this->free_text = $free_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRItem
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
