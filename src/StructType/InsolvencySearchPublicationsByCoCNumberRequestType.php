<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for insolvencySearchPublicationsByCoCNumberRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencySearchPublicationsByCoCNumberRequestType extends AbstractStructBase
{
    /**
     * The coc_number
     * @var string
     */
    public $coc_number;
    /**
     * Constructor method for insolvencySearchPublicationsByCoCNumberRequestType
     * @uses InsolvencySearchPublicationsByCoCNumberRequestType::setCoc_number()
     * @param string $coc_number
     */
    public function __construct($coc_number = null)
    {
        $this
            ->setCoc_number($coc_number);
    }
    /**
     * Get coc_number value
     * @return string|null
     */
    public function getCoc_number()
    {
        return $this->coc_number;
    }
    /**
     * Set coc_number value
     * @param string $coc_number
     * @return \Webservices\StructType\InsolvencySearchPublicationsByCoCNumberRequestType
     */
    public function setCoc_number($coc_number = null)
    {
        // validation for constraint: string
        if (!is_null($coc_number) && !is_string($coc_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coc_number)), __LINE__);
        }
        $this->coc_number = $coc_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencySearchPublicationsByCoCNumberRequestType
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
