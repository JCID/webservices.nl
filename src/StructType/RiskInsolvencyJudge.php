<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskInsolvencyJudge StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskInsolvencyJudge extends AbstractStructBase
{
    /**
     * The titles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $titles;
    /**
     * The initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $initials;
    /**
     * The prefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $prefix;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $last_name;
    /**
     * Constructor method for RiskInsolvencyJudge
     * @uses RiskInsolvencyJudge::setTitles()
     * @uses RiskInsolvencyJudge::setInitials()
     * @uses RiskInsolvencyJudge::setPrefix()
     * @uses RiskInsolvencyJudge::setLast_name()
     * @param string $titles
     * @param string $initials
     * @param string $prefix
     * @param string $last_name
     */
    public function __construct($titles = null, $initials = null, $prefix = null, $last_name = null)
    {
        $this
            ->setTitles($titles)
            ->setInitials($initials)
            ->setPrefix($prefix)
            ->setLast_name($last_name);
    }
    /**
     * Get titles value
     * @return string|null
     */
    public function getTitles()
    {
        return $this->titles;
    }
    /**
     * Set titles value
     * @param string $titles
     * @return \Webservices\StructType\RiskInsolvencyJudge
     */
    public function setTitles($titles = null)
    {
        // validation for constraint: string
        if (!is_null($titles) && !is_string($titles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($titles)), __LINE__);
        }
        $this->titles = $titles;
        return $this;
    }
    /**
     * Get initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->initials;
    }
    /**
     * Set initials value
     * @param string $initials
     * @return \Webservices\StructType\RiskInsolvencyJudge
     */
    public function setInitials($initials = null)
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($initials)), __LINE__);
        }
        $this->initials = $initials;
        return $this;
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Webservices\StructType\RiskInsolvencyJudge
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\RiskInsolvencyJudge
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskInsolvencyJudge
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
