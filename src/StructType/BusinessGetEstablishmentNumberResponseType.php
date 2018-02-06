<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessGetEstablishmentNumberResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessGetEstablishmentNumberResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var string
     */
    public $out;
    /**
     * Constructor method for businessGetEstablishmentNumberResponseType
     * @uses BusinessGetEstablishmentNumberResponseType::setOut()
     * @param string $out
     */
    public function __construct($out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return string|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param string $out
     * @return \Webservices\StructType\BusinessGetEstablishmentNumberResponseType
     */
    public function setOut($out = null)
    {
        // validation for constraint: string
        if (!is_null($out) && !is_string($out)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($out)), __LINE__);
        }
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessGetEstablishmentNumberResponseType
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
