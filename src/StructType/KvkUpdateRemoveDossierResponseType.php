<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kvkUpdateRemoveDossierResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KvkUpdateRemoveDossierResponseType extends AbstractStructBase
{
    /**
     * Constructor method for kvkUpdateRemoveDossierResponseType
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KvkUpdateRemoveDossierResponseType
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
