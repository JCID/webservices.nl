<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractReference extends AbstractStructBase
{
    /**
     * The extract_id
     * @var string
     */
    public $extract_id;
    /**
     * The document_date
     * @var string
     */
    public $document_date;
    /**
     * The change_set
     * @var \Webservices\StructType\DutchBusinessExtractChangeSet
     */
    public $change_set;
    /**
     * Constructor method for DutchBusinessExtractReference
     * @uses DutchBusinessExtractReference::setExtract_id()
     * @uses DutchBusinessExtractReference::setDocument_date()
     * @uses DutchBusinessExtractReference::setChange_set()
     * @param string $extract_id
     * @param string $document_date
     * @param \Webservices\StructType\DutchBusinessExtractChangeSet $change_set
     */
    public function __construct($extract_id = null, $document_date = null, \Webservices\StructType\DutchBusinessExtractChangeSet $change_set = null)
    {
        $this
            ->setExtract_id($extract_id)
            ->setDocument_date($document_date)
            ->setChange_set($change_set);
    }
    /**
     * Get extract_id value
     * @return string|null
     */
    public function getExtract_id()
    {
        return $this->extract_id;
    }
    /**
     * Set extract_id value
     * @param string $extract_id
     * @return \Webservices\StructType\DutchBusinessExtractReference
     */
    public function setExtract_id($extract_id = null)
    {
        // validation for constraint: string
        if (!is_null($extract_id) && !is_string($extract_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extract_id)), __LINE__);
        }
        $this->extract_id = $extract_id;
        return $this;
    }
    /**
     * Get document_date value
     * @return string|null
     */
    public function getDocument_date()
    {
        return $this->document_date;
    }
    /**
     * Set document_date value
     * @param string $document_date
     * @return \Webservices\StructType\DutchBusinessExtractReference
     */
    public function setDocument_date($document_date = null)
    {
        // validation for constraint: string
        if (!is_null($document_date) && !is_string($document_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_date)), __LINE__);
        }
        $this->document_date = $document_date;
        return $this;
    }
    /**
     * Get change_set value
     * @return \Webservices\StructType\DutchBusinessExtractChangeSet|null
     */
    public function getChange_set()
    {
        return $this->change_set;
    }
    /**
     * Set change_set value
     * @param \Webservices\StructType\DutchBusinessExtractChangeSet $change_set
     * @return \Webservices\StructType\DutchBusinessExtractReference
     */
    public function setChange_set(\Webservices\StructType\DutchBusinessExtractChangeSet $change_set = null)
    {
        $this->change_set = $change_set;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessExtractReference
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
