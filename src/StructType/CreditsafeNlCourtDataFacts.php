<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlCourtDataFacts StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlCourtDataFacts extends AbstractStructBase
{
    /**
     * The court_action
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $court_action;
    /**
     * The date_of_bankruptcy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_bankruptcy;
    /**
     * The details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $details;
    /**
     * Constructor method for CreditsafeNlCourtDataFacts
     * @uses CreditsafeNlCourtDataFacts::setCourt_action()
     * @uses CreditsafeNlCourtDataFacts::setDate_of_bankruptcy()
     * @uses CreditsafeNlCourtDataFacts::setDetails()
     * @param bool $court_action
     * @param string $date_of_bankruptcy
     * @param string $details
     */
    public function __construct($court_action = null, $date_of_bankruptcy = null, $details = null)
    {
        $this
            ->setCourt_action($court_action)
            ->setDate_of_bankruptcy($date_of_bankruptcy)
            ->setDetails($details);
    }
    /**
     * Get court_action value
     * @return bool|null
     */
    public function getCourt_action()
    {
        return $this->court_action;
    }
    /**
     * Set court_action value
     * @param bool $court_action
     * @return \Webservices\StructType\CreditsafeNlCourtDataFacts
     */
    public function setCourt_action($court_action = null)
    {
        // validation for constraint: boolean
        if (!is_null($court_action) && !is_bool($court_action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($court_action)), __LINE__);
        }
        $this->court_action = $court_action;
        return $this;
    }
    /**
     * Get date_of_bankruptcy value
     * @return string|null
     */
    public function getDate_of_bankruptcy()
    {
        return $this->date_of_bankruptcy;
    }
    /**
     * Set date_of_bankruptcy value
     * @param string $date_of_bankruptcy
     * @return \Webservices\StructType\CreditsafeNlCourtDataFacts
     */
    public function setDate_of_bankruptcy($date_of_bankruptcy = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_bankruptcy) && !is_string($date_of_bankruptcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_bankruptcy)), __LINE__);
        }
        $this->date_of_bankruptcy = $date_of_bankruptcy;
        return $this;
    }
    /**
     * Get details value
     * @return string|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param string $details
     * @return \Webservices\StructType\CreditsafeNlCourtDataFacts
     */
    public function setDetails($details = null)
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($details)), __LINE__);
        }
        $this->details = $details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlCourtDataFacts
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
