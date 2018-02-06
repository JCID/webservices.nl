<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEOption StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEOption extends AbstractStructBase
{
    /**
     * The option_id
     * @var int
     */
    public $option_id;
    /**
     * The description_short
     * @var string
     */
    public $description_short;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $price;
    /**
     * Constructor method for CarVWEOption
     * @uses CarVWEOption::setOption_id()
     * @uses CarVWEOption::setDescription_short()
     * @uses CarVWEOption::setDescription()
     * @uses CarVWEOption::setPrice()
     * @param int $option_id
     * @param string $description_short
     * @param string $description
     * @param int $price
     */
    public function __construct($option_id = null, $description_short = null, $description = null, $price = null)
    {
        $this
            ->setOption_id($option_id)
            ->setDescription_short($description_short)
            ->setDescription($description)
            ->setPrice($price);
    }
    /**
     * Get option_id value
     * @return int|null
     */
    public function getOption_id()
    {
        return $this->option_id;
    }
    /**
     * Set option_id value
     * @param int $option_id
     * @return \Webservices\StructType\CarVWEOption
     */
    public function setOption_id($option_id = null)
    {
        // validation for constraint: int
        if (!is_null($option_id) && !is_numeric($option_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($option_id)), __LINE__);
        }
        $this->option_id = $option_id;
        return $this;
    }
    /**
     * Get description_short value
     * @return string|null
     */
    public function getDescription_short()
    {
        return $this->description_short;
    }
    /**
     * Set description_short value
     * @param string $description_short
     * @return \Webservices\StructType\CarVWEOption
     */
    public function setDescription_short($description_short = null)
    {
        // validation for constraint: string
        if (!is_null($description_short) && !is_string($description_short)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description_short)), __LINE__);
        }
        $this->description_short = $description_short;
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
     * @return \Webservices\StructType\CarVWEOption
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
     * Get price value
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param int $price
     * @return \Webservices\StructType\CarVWEOption
     */
    public function setPrice($price = null)
    {
        // validation for constraint: int
        if (!is_null($price) && !is_numeric($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEOption
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
