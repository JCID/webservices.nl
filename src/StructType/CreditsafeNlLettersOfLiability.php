<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeNlLettersOfLiability StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeNlLettersOfLiability extends AbstractStructBase
{
    /**
     * The start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $start_date;
    /**
     * The submitted_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $submitted_date;
    /**
     * The removal_submitted_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $removal_submitted_date;
    /**
     * The removal_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $removal_date;
    /**
     * Constructor method for CreditsafeNlLettersOfLiability
     * @uses CreditsafeNlLettersOfLiability::setStart_date()
     * @uses CreditsafeNlLettersOfLiability::setSubmitted_date()
     * @uses CreditsafeNlLettersOfLiability::setRemoval_submitted_date()
     * @uses CreditsafeNlLettersOfLiability::setRemoval_date()
     * @param string $start_date
     * @param string $submitted_date
     * @param string $removal_submitted_date
     * @param string $removal_date
     */
    public function __construct($start_date = null, $submitted_date = null, $removal_submitted_date = null, $removal_date = null)
    {
        $this
            ->setStart_date($start_date)
            ->setSubmitted_date($submitted_date)
            ->setRemoval_submitted_date($removal_submitted_date)
            ->setRemoval_date($removal_date);
    }
    /**
     * Get start_date value
     * @return string|null
     */
    public function getStart_date()
    {
        return $this->start_date;
    }
    /**
     * Set start_date value
     * @param string $start_date
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiability
     */
    public function setStart_date($start_date = null)
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_date)), __LINE__);
        }
        $this->start_date = $start_date;
        return $this;
    }
    /**
     * Get submitted_date value
     * @return string|null
     */
    public function getSubmitted_date()
    {
        return $this->submitted_date;
    }
    /**
     * Set submitted_date value
     * @param string $submitted_date
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiability
     */
    public function setSubmitted_date($submitted_date = null)
    {
        // validation for constraint: string
        if (!is_null($submitted_date) && !is_string($submitted_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($submitted_date)), __LINE__);
        }
        $this->submitted_date = $submitted_date;
        return $this;
    }
    /**
     * Get removal_submitted_date value
     * @return string|null
     */
    public function getRemoval_submitted_date()
    {
        return $this->removal_submitted_date;
    }
    /**
     * Set removal_submitted_date value
     * @param string $removal_submitted_date
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiability
     */
    public function setRemoval_submitted_date($removal_submitted_date = null)
    {
        // validation for constraint: string
        if (!is_null($removal_submitted_date) && !is_string($removal_submitted_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($removal_submitted_date)), __LINE__);
        }
        $this->removal_submitted_date = $removal_submitted_date;
        return $this;
    }
    /**
     * Get removal_date value
     * @return string|null
     */
    public function getRemoval_date()
    {
        return $this->removal_date;
    }
    /**
     * Set removal_date value
     * @param string $removal_date
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiability
     */
    public function setRemoval_date($removal_date = null)
    {
        // validation for constraint: string
        if (!is_null($removal_date) && !is_string($removal_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($removal_date)), __LINE__);
        }
        $this->removal_date = $removal_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeNlLettersOfLiability
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
