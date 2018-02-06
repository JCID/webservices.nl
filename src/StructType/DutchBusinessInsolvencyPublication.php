<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessInsolvencyPublication StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessInsolvencyPublication extends AbstractStructBase
{
    /**
     * The publication_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $publication_id;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $date;
    /**
     * Constructor method for DutchBusinessInsolvencyPublication
     * @uses DutchBusinessInsolvencyPublication::setPublication_id()
     * @uses DutchBusinessInsolvencyPublication::setDescription()
     * @uses DutchBusinessInsolvencyPublication::setDate()
     * @param string $publication_id
     * @param string $description
     * @param \Webservices\StructType\DutchBusinessDateV3 $date
     */
    public function __construct($publication_id = null, $description = null, \Webservices\StructType\DutchBusinessDateV3 $date = null)
    {
        $this
            ->setPublication_id($publication_id)
            ->setDescription($description)
            ->setDate($date);
    }
    /**
     * Get publication_id value
     * @return string|null
     */
    public function getPublication_id()
    {
        return $this->publication_id;
    }
    /**
     * Set publication_id value
     * @param string $publication_id
     * @return \Webservices\StructType\DutchBusinessInsolvencyPublication
     */
    public function setPublication_id($publication_id = null)
    {
        // validation for constraint: string
        if (!is_null($publication_id) && !is_string($publication_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publication_id)), __LINE__);
        }
        $this->publication_id = $publication_id;
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
     * @return \Webservices\StructType\DutchBusinessInsolvencyPublication
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
     * Get date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $date
     * @return \Webservices\StructType\DutchBusinessInsolvencyPublication
     */
    public function setDate(\Webservices\StructType\DutchBusinessDateV3 $date = null)
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessInsolvencyPublication
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
