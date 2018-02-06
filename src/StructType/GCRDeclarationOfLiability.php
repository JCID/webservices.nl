<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRDeclarationOfLiability StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRDeclarationOfLiability extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The is_current
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_current;
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * The date_until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_until;
    /**
     * Constructor method for GCRDeclarationOfLiability
     * @uses GCRDeclarationOfLiability::setGraydon_company_id()
     * @uses GCRDeclarationOfLiability::setIs_current()
     * @uses GCRDeclarationOfLiability::setDate_from()
     * @uses GCRDeclarationOfLiability::setDate_until()
     * @param int $graydon_company_id
     * @param bool $is_current
     * @param string $date_from
     * @param string $date_until
     */
    public function __construct($graydon_company_id = null, $is_current = null, $date_from = null, $date_until = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setIs_current($is_current)
            ->setDate_from($date_from)
            ->setDate_until($date_until);
    }
    /**
     * Get graydon_company_id value
     * @return int|null
     */
    public function getGraydon_company_id()
    {
        return $this->graydon_company_id;
    }
    /**
     * Set graydon_company_id value
     * @param int $graydon_company_id
     * @return \Webservices\StructType\GCRDeclarationOfLiability
     */
    public function setGraydon_company_id($graydon_company_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_company_id) && !is_numeric($graydon_company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_company_id)), __LINE__);
        }
        $this->graydon_company_id = $graydon_company_id;
        return $this;
    }
    /**
     * Get is_current value
     * @return bool|null
     */
    public function getIs_current()
    {
        return $this->is_current;
    }
    /**
     * Set is_current value
     * @param bool $is_current
     * @return \Webservices\StructType\GCRDeclarationOfLiability
     */
    public function setIs_current($is_current = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_current) && !is_bool($is_current)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_current)), __LINE__);
        }
        $this->is_current = $is_current;
        return $this;
    }
    /**
     * Get date_from value
     * @return string|null
     */
    public function getDate_from()
    {
        return $this->date_from;
    }
    /**
     * Set date_from value
     * @param string $date_from
     * @return \Webservices\StructType\GCRDeclarationOfLiability
     */
    public function setDate_from($date_from = null)
    {
        // validation for constraint: string
        if (!is_null($date_from) && !is_string($date_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_from)), __LINE__);
        }
        $this->date_from = $date_from;
        return $this;
    }
    /**
     * Get date_until value
     * @return string|null
     */
    public function getDate_until()
    {
        return $this->date_until;
    }
    /**
     * Set date_until value
     * @param string $date_until
     * @return \Webservices\StructType\GCRDeclarationOfLiability
     */
    public function setDate_until($date_until = null)
    {
        // validation for constraint: string
        if (!is_null($date_until) && !is_string($date_until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_until)), __LINE__);
        }
        $this->date_until = $date_until;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRDeclarationOfLiability
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
