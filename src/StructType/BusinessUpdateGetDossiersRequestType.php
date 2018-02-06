<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessUpdateGetDossiersRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessUpdateGetDossiersRequestType extends AbstractStructBase
{
    /**
     * The update_types
     * @var \Webservices\ArrayType\StringArray
     */
    public $update_types;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for businessUpdateGetDossiersRequestType
     * @uses BusinessUpdateGetDossiersRequestType::setUpdate_types()
     * @uses BusinessUpdateGetDossiersRequestType::setPage()
     * @param \Webservices\ArrayType\StringArray $update_types
     * @param int $page
     */
    public function __construct(\Webservices\ArrayType\StringArray $update_types = null, $page = null)
    {
        $this
            ->setUpdate_types($update_types)
            ->setPage($page);
    }
    /**
     * Get update_types value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getUpdate_types()
    {
        return $this->update_types;
    }
    /**
     * Set update_types value
     * @param \Webservices\ArrayType\StringArray $update_types
     * @return \Webservices\StructType\BusinessUpdateGetDossiersRequestType
     */
    public function setUpdate_types(\Webservices\ArrayType\StringArray $update_types = null)
    {
        $this->update_types = $update_types;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\BusinessUpdateGetDossiersRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessUpdateGetDossiersRequestType
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
