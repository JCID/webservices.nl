<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafePreviousDirector StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafePreviousDirector extends AbstractStructBase
{
    /**
     * The director
     * @var \Webservices\StructType\CreditsafeDirector
     */
    public $director;
    /**
     * The resignation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $resignation_date;
    /**
     * Constructor method for CreditsafePreviousDirector
     * @uses CreditsafePreviousDirector::setDirector()
     * @uses CreditsafePreviousDirector::setResignation_date()
     * @param \Webservices\StructType\CreditsafeDirector $director
     * @param string $resignation_date
     */
    public function __construct(\Webservices\StructType\CreditsafeDirector $director = null, $resignation_date = null)
    {
        $this
            ->setDirector($director)
            ->setResignation_date($resignation_date);
    }
    /**
     * Get director value
     * @return \Webservices\StructType\CreditsafeDirector|null
     */
    public function getDirector()
    {
        return $this->director;
    }
    /**
     * Set director value
     * @param \Webservices\StructType\CreditsafeDirector $director
     * @return \Webservices\StructType\CreditsafePreviousDirector
     */
    public function setDirector(\Webservices\StructType\CreditsafeDirector $director = null)
    {
        $this->director = $director;
        return $this;
    }
    /**
     * Get resignation_date value
     * @return string|null
     */
    public function getResignation_date()
    {
        return $this->resignation_date;
    }
    /**
     * Set resignation_date value
     * @param string $resignation_date
     * @return \Webservices\StructType\CreditsafePreviousDirector
     */
    public function setResignation_date($resignation_date = null)
    {
        // validation for constraint: string
        if (!is_null($resignation_date) && !is_string($resignation_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resignation_date)), __LINE__);
        }
        $this->resignation_date = $resignation_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafePreviousDirector
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
