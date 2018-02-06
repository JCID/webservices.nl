<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlNegativeInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlNegativeInformation extends AbstractStructBase
{
    /**
     * The court_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeNlCourtData
     */
    public $court_data;
    /**
     * Constructor method for CreditsafeNlNegativeInformation
     * @uses CreditsafeNlNegativeInformation::setCourt_data()
     * @param \Webservices\StructType\CreditsafeNlCourtData $court_data
     */
    public function __construct(\Webservices\StructType\CreditsafeNlCourtData $court_data = null)
    {
        $this
            ->setCourt_data($court_data);
    }
    /**
     * Get court_data value
     * @return \Webservices\StructType\CreditsafeNlCourtData|null
     */
    public function getCourt_data()
    {
        return $this->court_data;
    }
    /**
     * Set court_data value
     * @param \Webservices\StructType\CreditsafeNlCourtData $court_data
     * @return \Webservices\StructType\CreditsafeNlNegativeInformation
     */
    public function setCourt_data(\Webservices\StructType\CreditsafeNlCourtData $court_data = null)
    {
        $this->court_data = $court_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlNegativeInformation
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
