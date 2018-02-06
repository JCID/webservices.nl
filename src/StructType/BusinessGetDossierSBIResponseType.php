<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessGetDossierSBIResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessGetDossierSBIResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\BusinessDossierSBI
     */
    public $out;
    /**
     * Constructor method for businessGetDossierSBIResponseType
     * @uses BusinessGetDossierSBIResponseType::setOut()
     * @param \Webservices\StructType\BusinessDossierSBI $out
     */
    public function __construct(\Webservices\StructType\BusinessDossierSBI $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\BusinessDossierSBI|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\BusinessDossierSBI $out
     * @return \Webservices\StructType\BusinessGetDossierSBIResponseType
     */
    public function setOut(\Webservices\StructType\BusinessDossierSBI $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessGetDossierSBIResponseType
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
