<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRDiscontinuance StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRDiscontinuance extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * The reason
     * @var string
     */
    public $reason;
    /**
     * Constructor method for GCRDiscontinuance
     * @uses GCRDiscontinuance::setType()
     * @uses GCRDiscontinuance::setDate()
     * @uses GCRDiscontinuance::setReason()
     * @param string $type
     * @param string $date
     * @param string $reason
     */
    public function __construct($type = null, $date = null, $reason = null)
    {
        $this
            ->setType($type)
            ->setDate($date)
            ->setReason($reason);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\GCRDiscontinuance
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Webservices\StructType\GCRDiscontinuance
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Webservices\StructType\GCRDiscontinuance
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRDiscontinuance
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
