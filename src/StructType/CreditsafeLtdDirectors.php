<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdDirectors StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdDirectors extends AbstractStructBase
{
    /**
     * The current_directors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeDirectorArray
     */
    public $current_directors;
    /**
     * The previous_directors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafePreviousDirectorArray
     */
    public $previous_directors;
    /**
     * Constructor method for CreditsafeLtdDirectors
     * @uses CreditsafeLtdDirectors::setCurrent_directors()
     * @uses CreditsafeLtdDirectors::setPrevious_directors()
     * @param \Webservices\ArrayType\CreditsafeDirectorArray $current_directors
     * @param \Webservices\ArrayType\CreditsafePreviousDirectorArray $previous_directors
     */
    public function __construct(\Webservices\ArrayType\CreditsafeDirectorArray $current_directors = null, \Webservices\ArrayType\CreditsafePreviousDirectorArray $previous_directors = null)
    {
        $this
            ->setCurrent_directors($current_directors)
            ->setPrevious_directors($previous_directors);
    }
    /**
     * Get current_directors value
     * @return \Webservices\ArrayType\CreditsafeDirectorArray|null
     */
    public function getCurrent_directors()
    {
        return $this->current_directors;
    }
    /**
     * Set current_directors value
     * @param \Webservices\ArrayType\CreditsafeDirectorArray $current_directors
     * @return \Webservices\StructType\CreditsafeLtdDirectors
     */
    public function setCurrent_directors(\Webservices\ArrayType\CreditsafeDirectorArray $current_directors = null)
    {
        $this->current_directors = $current_directors;
        return $this;
    }
    /**
     * Get previous_directors value
     * @return \Webservices\ArrayType\CreditsafePreviousDirectorArray|null
     */
    public function getPrevious_directors()
    {
        return $this->previous_directors;
    }
    /**
     * Set previous_directors value
     * @param \Webservices\ArrayType\CreditsafePreviousDirectorArray $previous_directors
     * @return \Webservices\StructType\CreditsafeLtdDirectors
     */
    public function setPrevious_directors(\Webservices\ArrayType\CreditsafePreviousDirectorArray $previous_directors = null)
    {
        $this->previous_directors = $previous_directors;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdDirectors
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
