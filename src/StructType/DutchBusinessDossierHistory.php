<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessDossierHistory StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessDossierHistory extends AbstractStructBase
{
    /**
     * The references
     * @var \Webservices\ArrayType\DutchBusinessDossierReferenceArray
     */
    public $references;
    /**
     * Constructor method for DutchBusinessDossierHistory
     * @uses DutchBusinessDossierHistory::setReferences()
     * @param \Webservices\ArrayType\DutchBusinessDossierReferenceArray $references
     */
    public function __construct(\Webservices\ArrayType\DutchBusinessDossierReferenceArray $references = null)
    {
        $this
            ->setReferences($references);
    }
    /**
     * Get references value
     * @return \Webservices\ArrayType\DutchBusinessDossierReferenceArray|null
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * Set references value
     * @param \Webservices\ArrayType\DutchBusinessDossierReferenceArray $references
     * @return \Webservices\StructType\DutchBusinessDossierHistory
     */
    public function setReferences(\Webservices\ArrayType\DutchBusinessDossierReferenceArray $references = null)
    {
        $this->references = $references;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessDossierHistory
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
