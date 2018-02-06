<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractChangeForecast StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractChangeForecast extends AbstractStructBase
{
    /**
     * The change_set
     * @var \Webservices\StructType\DutchBusinessExtractChangeSet
     */
    public $change_set;
    /**
     * Constructor method for DutchBusinessExtractChangeForecast
     * @uses DutchBusinessExtractChangeForecast::setChange_set()
     * @param \Webservices\StructType\DutchBusinessExtractChangeSet $change_set
     */
    public function __construct(\Webservices\StructType\DutchBusinessExtractChangeSet $change_set = null)
    {
        $this
            ->setChange_set($change_set);
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
     * @return \Webservices\StructType\DutchBusinessExtractChangeForecast
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
     * @return \Webservices\StructType\DutchBusinessExtractChangeForecast
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
