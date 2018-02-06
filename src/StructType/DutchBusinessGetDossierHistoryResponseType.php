<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessGetDossierHistoryResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetDossierHistoryResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DutchBusinessDossierHistory
     */
    public $out;
    /**
     * Constructor method for dutchBusinessGetDossierHistoryResponseType
     * @uses DutchBusinessGetDossierHistoryResponseType::setOut()
     * @param \Webservices\StructType\DutchBusinessDossierHistory $out
     */
    public function __construct(\Webservices\StructType\DutchBusinessDossierHistory $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DutchBusinessDossierHistory|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DutchBusinessDossierHistory $out
     * @return \Webservices\StructType\DutchBusinessGetDossierHistoryResponseType
     */
    public function setOut(\Webservices\StructType\DutchBusinessDossierHistory $out = null)
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
     * @return \Webservices\StructType\DutchBusinessGetDossierHistoryResponseType
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
