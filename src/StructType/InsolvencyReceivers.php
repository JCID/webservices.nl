<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyReceivers StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyReceivers extends AbstractStructBase
{
    /**
     * The receiver
     * @var \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray
     */
    public $receiver;
    /**
     * Constructor method for InsolvencyReceivers
     * @uses InsolvencyReceivers::setReceiver()
     * @param \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $receiver
     */
    public function __construct(\Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $receiver = null)
    {
        $this
            ->setReceiver($receiver);
    }
    /**
     * Get receiver value
     * @return \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $receiver
     * @return \Webservices\StructType\InsolvencyReceivers
     */
    public function setReceiver(\Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $receiver = null)
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyReceivers
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
