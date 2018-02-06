<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyCurators StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyCurators extends AbstractStructBase
{
    /**
     * The curator
     * @var \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray
     */
    public $curator;
    /**
     * Constructor method for InsolvencyCurators
     * @uses InsolvencyCurators::setCurator()
     * @param \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $curator
     */
    public function __construct(\Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $curator = null)
    {
        $this
            ->setCurator($curator);
    }
    /**
     * Get curator value
     * @return \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray|null
     */
    public function getCurator()
    {
        return $this->curator;
    }
    /**
     * Set curator value
     * @param \Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $curator
     * @return \Webservices\StructType\InsolvencyCurators
     */
    public function setCurator(\Webservices\ArrayType\InsolvencyLegalPerformingPersonArray $curator = null)
    {
        $this->curator = $curator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyCurators
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
