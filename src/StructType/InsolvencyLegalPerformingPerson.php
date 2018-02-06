<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyLegalPerformingPerson StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyLegalPerformingPerson extends AbstractStructBase
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
     * @var string
     */
    public $last_name;
    /**
     * The contact_info
     * @var \Webservices\StructType\InsolvencyAddress
     */
    public $contact_info;
    /**
     * The start_date
     * @var string
     */
    public $start_date;
    /**
     * The end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $end_date;
    /**
     * Constructor method for InsolvencyLegalPerformingPerson
     * @uses InsolvencyLegalPerformingPerson::setTitles()
     * @uses InsolvencyLegalPerformingPerson::setInitials()
     * @uses InsolvencyLegalPerformingPerson::setPrefix()
     * @uses InsolvencyLegalPerformingPerson::setLast_name()
     * @uses InsolvencyLegalPerformingPerson::setContact_info()
     * @uses InsolvencyLegalPerformingPerson::setStart_date()
     * @uses InsolvencyLegalPerformingPerson::setEnd_date()
     * @param string $titles
     * @param string $initials
     * @param string $prefix
     * @param string $last_name
     * @param \Webservices\StructType\InsolvencyAddress $contact_info
     * @param string $start_date
     * @param string $end_date
     */
    public function __construct($titles = null, $initials = null, $prefix = null, $last_name = null, \Webservices\StructType\InsolvencyAddress $contact_info = null, $start_date = null, $end_date = null)
    {
        $this
            ->setTitles($titles)
            ->setInitials($initials)
            ->setPrefix($prefix)
            ->setLast_name($last_name)
            ->setContact_info($contact_info)
            ->setStart_date($start_date)
            ->setEnd_date($end_date);
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
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
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
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
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
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
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
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
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
     * Get contact_info value
     * @return \Webservices\StructType\InsolvencyAddress|null
     */
    public function getContact_info()
    {
        return $this->contact_info;
    }
    /**
     * Set contact_info value
     * @param \Webservices\StructType\InsolvencyAddress $contact_info
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
     */
    public function setContact_info(\Webservices\StructType\InsolvencyAddress $contact_info = null)
    {
        $this->contact_info = $contact_info;
        return $this;
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
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
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
     * Get end_date value
     * @return string|null
     */
    public function getEnd_date()
    {
        return $this->end_date;
    }
    /**
     * Set end_date value
     * @param string $end_date
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
     */
    public function setEnd_date($end_date = null)
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end_date)), __LINE__);
        }
        $this->end_date = $end_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyLegalPerformingPerson
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
