<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeCompanyActivity StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeCompanyActivity extends AbstractStructBase
{
    /**
     * The activity_code
     * @var string
     */
    public $activity_code;
    /**
     * The activity_description
     * @var string
     */
    public $activity_description;
    /**
     * Constructor method for CreditsafeCompanyActivity
     * @uses CreditsafeCompanyActivity::setActivity_code()
     * @uses CreditsafeCompanyActivity::setActivity_description()
     * @param string $activity_code
     * @param string $activity_description
     */
    public function __construct($activity_code = null, $activity_description = null)
    {
        $this
            ->setActivity_code($activity_code)
            ->setActivity_description($activity_description);
    }
    /**
     * Get activity_code value
     * @return string|null
     */
    public function getActivity_code()
    {
        return $this->activity_code;
    }
    /**
     * Set activity_code value
     * @param string $activity_code
     * @return \Webservices\StructType\CreditsafeCompanyActivity
     */
    public function setActivity_code($activity_code = null)
    {
        // validation for constraint: string
        if (!is_null($activity_code) && !is_string($activity_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($activity_code)), __LINE__);
        }
        $this->activity_code = $activity_code;
        return $this;
    }
    /**
     * Get activity_description value
     * @return string|null
     */
    public function getActivity_description()
    {
        return $this->activity_description;
    }
    /**
     * Set activity_description value
     * @param string $activity_description
     * @return \Webservices\StructType\CreditsafeCompanyActivity
     */
    public function setActivity_description($activity_description = null)
    {
        // validation for constraint: string
        if (!is_null($activity_description) && !is_string($activity_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($activity_description)), __LINE__);
        }
        $this->activity_description = $activity_description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeCompanyActivity
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
