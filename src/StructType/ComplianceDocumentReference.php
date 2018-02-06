<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceDocumentReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceDocumentReference extends AbstractStructBase
{
    /**
     * The cached_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $cached_url;
    /**
     * The categories
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\StringArray
     */
    public $categories;
    /**
     * The original_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $original_url;
    /**
     * The date_collected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_collected;
    /**
     * Constructor method for ComplianceDocumentReference
     * @uses ComplianceDocumentReference::setCached_url()
     * @uses ComplianceDocumentReference::setCategories()
     * @uses ComplianceDocumentReference::setOriginal_url()
     * @uses ComplianceDocumentReference::setDate_collected()
     * @param string $cached_url
     * @param \Webservices\ArrayType\StringArray $categories
     * @param string $original_url
     * @param string $date_collected
     */
    public function __construct($cached_url = null, \Webservices\ArrayType\StringArray $categories = null, $original_url = null, $date_collected = null)
    {
        $this
            ->setCached_url($cached_url)
            ->setCategories($categories)
            ->setOriginal_url($original_url)
            ->setDate_collected($date_collected);
    }
    /**
     * Get cached_url value
     * @return string
     */
    public function getCached_url()
    {
        return $this->cached_url;
    }
    /**
     * Set cached_url value
     * @param string $cached_url
     * @return \Webservices\StructType\ComplianceDocumentReference
     */
    public function setCached_url($cached_url = null)
    {
        // validation for constraint: string
        if (!is_null($cached_url) && !is_string($cached_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cached_url)), __LINE__);
        }
        $this->cached_url = $cached_url;
        return $this;
    }
    /**
     * Get categories value
     * @return \Webservices\ArrayType\StringArray
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * Set categories value
     * @param \Webservices\ArrayType\StringArray $categories
     * @return \Webservices\StructType\ComplianceDocumentReference
     */
    public function setCategories(\Webservices\ArrayType\StringArray $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * Get original_url value
     * @return string|null
     */
    public function getOriginal_url()
    {
        return $this->original_url;
    }
    /**
     * Set original_url value
     * @param string $original_url
     * @return \Webservices\StructType\ComplianceDocumentReference
     */
    public function setOriginal_url($original_url = null)
    {
        // validation for constraint: string
        if (!is_null($original_url) && !is_string($original_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($original_url)), __LINE__);
        }
        $this->original_url = $original_url;
        return $this;
    }
    /**
     * Get date_collected value
     * @return string|null
     */
    public function getDate_collected()
    {
        return $this->date_collected;
    }
    /**
     * Set date_collected value
     * @param string $date_collected
     * @return \Webservices\StructType\ComplianceDocumentReference
     */
    public function setDate_collected($date_collected = null)
    {
        // validation for constraint: string
        if (!is_null($date_collected) && !is_string($date_collected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_collected)), __LINE__);
        }
        $this->date_collected = $date_collected;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceDocumentReference
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
