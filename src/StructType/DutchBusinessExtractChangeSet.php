<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractChangeSet StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractChangeSet extends AbstractStructBase
{
    /**
     * The period
     * @var \Webservices\StructType\DutchBusinessPeriod
     */
    public $period;
    /**
     * The changes
     * @var \Webservices\ArrayType\StringArray
     */
    public $changes;
    /**
     * Constructor method for DutchBusinessExtractChangeSet
     * @uses DutchBusinessExtractChangeSet::setPeriod()
     * @uses DutchBusinessExtractChangeSet::setChanges()
     * @param \Webservices\StructType\DutchBusinessPeriod $period
     * @param \Webservices\ArrayType\StringArray $changes
     */
    public function __construct(\Webservices\StructType\DutchBusinessPeriod $period = null, \Webservices\ArrayType\StringArray $changes = null)
    {
        $this
            ->setPeriod($period)
            ->setChanges($changes);
    }
    /**
     * Get period value
     * @return \Webservices\StructType\DutchBusinessPeriod|null
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param \Webservices\StructType\DutchBusinessPeriod $period
     * @return \Webservices\StructType\DutchBusinessExtractChangeSet
     */
    public function setPeriod(\Webservices\StructType\DutchBusinessPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }
    /**
     * Get changes value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getChanges()
    {
        return $this->changes;
    }
    /**
     * Set changes value
     * @param \Webservices\ArrayType\StringArray $changes
     * @return \Webservices\StructType\DutchBusinessExtractChangeSet
     */
    public function setChanges(\Webservices\ArrayType\StringArray $changes = null)
    {
        $this->changes = $changes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessExtractChangeSet
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
