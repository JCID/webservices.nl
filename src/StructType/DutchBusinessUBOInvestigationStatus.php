<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBOInvestigationStatus StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOInvestigationStatus extends AbstractStructBase
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $status;
    /**
     * The date_since
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $date_since;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * Constructor method for DutchBusinessUBOInvestigationStatus
     * @uses DutchBusinessUBOInvestigationStatus::setStatus()
     * @uses DutchBusinessUBOInvestigationStatus::setDate_since()
     * @uses DutchBusinessUBOInvestigationStatus::setDescription()
     * @param string $status
     * @param string $date_since
     * @param string $description
     */
    public function __construct($status = null, $date_since = null, $description = null)
    {
        $this
            ->setStatus($status)
            ->setDate_since($date_since)
            ->setDescription($description);
    }
    /**
     * Get status value
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationStatus
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get date_since value
     * @return string
     */
    public function getDate_since()
    {
        return $this->date_since;
    }
    /**
     * Set date_since value
     * @param string $date_since
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationStatus
     */
    public function setDate_since($date_since = null)
    {
        // validation for constraint: string
        if (!is_null($date_since) && !is_string($date_since)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_since)), __LINE__);
        }
        $this->date_since = $date_since;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationStatus
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationStatus
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
