<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for insolvencyGetCaseByPublicationRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyGetCaseByPublicationRequestType extends AbstractStructBase
{
    /**
     * The publication_id
     * @var string
     */
    public $publication_id;
    /**
     * Constructor method for insolvencyGetCaseByPublicationRequestType
     * @uses InsolvencyGetCaseByPublicationRequestType::setPublication_id()
     * @param string $publication_id
     */
    public function __construct($publication_id = null)
    {
        $this
            ->setPublication_id($publication_id);
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
     * @return \Webservices\StructType\InsolvencyGetCaseByPublicationRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyGetCaseByPublicationRequestType
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
