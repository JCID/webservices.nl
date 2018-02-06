<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessDossierReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessDossierReference extends AbstractStructBase
{
    /**
     * The update_date
     * @var string
     */
    public $update_date;
    /**
     * The change_set
     * @var \Webservices\StructType\DutchBusinessChangeSet
     */
    public $change_set;
    /**
     * Constructor method for DutchBusinessDossierReference
     * @uses DutchBusinessDossierReference::setUpdate_date()
     * @uses DutchBusinessDossierReference::setChange_set()
     * @param string $update_date
     * @param \Webservices\StructType\DutchBusinessChangeSet $change_set
     */
    public function __construct($update_date = null, \Webservices\StructType\DutchBusinessChangeSet $change_set = null)
    {
        $this
            ->setUpdate_date($update_date)
            ->setChange_set($change_set);
    }
    /**
     * Get update_date value
     * @return string|null
     */
    public function getUpdate_date()
    {
        return $this->update_date;
    }
    /**
     * Set update_date value
     * @param string $update_date
     * @return \Webservices\StructType\DutchBusinessDossierReference
     */
    public function setUpdate_date($update_date = null)
    {
        // validation for constraint: string
        if (!is_null($update_date) && !is_string($update_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($update_date)), __LINE__);
        }
        $this->update_date = $update_date;
        return $this;
    }
    /**
     * Get change_set value
     * @return \Webservices\StructType\DutchBusinessChangeSet|null
     */
    public function getChange_set()
    {
        return $this->change_set;
    }
    /**
     * Set change_set value
     * @param \Webservices\StructType\DutchBusinessChangeSet $change_set
     * @return \Webservices\StructType\DutchBusinessDossierReference
     */
    public function setChange_set(\Webservices\StructType\DutchBusinessChangeSet $change_set = null)
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
     * @return \Webservices\StructType\DutchBusinessDossierReference
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
