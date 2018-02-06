<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyCase StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyCase extends AbstractStructBase
{
    /**
     * The insolvency_id
     * @var string
     */
    public $insolvency_id;
    /**
     * The magistrate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $magistrate;
    /**
     * The previous_insolvency_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $previous_insolvency_id;
    /**
     * The previous_magistrate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $previous_magistrate;
    /**
     * The is_pre_hgk_published
     * @var bool
     */
    public $is_pre_hgk_published;
    /**
     * The pre_hgk_insolvency_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pre_hgk_insolvency_id;
    /**
     * The dept_restructuring_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dept_restructuring_number;
    /**
     * The removal_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $removal_date;
    /**
     * The legal_subject
     * @var \Webservices\StructType\InsolvencyLegalSubject
     */
    public $legal_subject;
    /**
     * The treating_authority
     * @var \Webservices\StructType\InsolvencyTreatingAuthority
     */
    public $treating_authority;
    /**
     * The curators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\InsolvencyCurators
     */
    public $curators;
    /**
     * The receivers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\InsolvencyReceivers
     */
    public $receivers;
    /**
     * The events
     * @var \Webservices\StructType\InsolvencyPublications
     */
    public $events;
    /**
     * The reports
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\InsolvencyReportArray
     */
    public $reports;
    /**
     * The affected_companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\InsolvencyAffectedCompanyArray
     */
    public $affected_companies;
    /**
     * Constructor method for InsolvencyCase
     * @uses InsolvencyCase::setInsolvency_id()
     * @uses InsolvencyCase::setMagistrate()
     * @uses InsolvencyCase::setPrevious_insolvency_id()
     * @uses InsolvencyCase::setPrevious_magistrate()
     * @uses InsolvencyCase::setIs_pre_hgk_published()
     * @uses InsolvencyCase::setPre_hgk_insolvency_id()
     * @uses InsolvencyCase::setDept_restructuring_number()
     * @uses InsolvencyCase::setRemoval_date()
     * @uses InsolvencyCase::setLegal_subject()
     * @uses InsolvencyCase::setTreating_authority()
     * @uses InsolvencyCase::setCurators()
     * @uses InsolvencyCase::setReceivers()
     * @uses InsolvencyCase::setEvents()
     * @uses InsolvencyCase::setReports()
     * @uses InsolvencyCase::setAffected_companies()
     * @param string $insolvency_id
     * @param string $magistrate
     * @param string $previous_insolvency_id
     * @param string $previous_magistrate
     * @param bool $is_pre_hgk_published
     * @param string $pre_hgk_insolvency_id
     * @param string $dept_restructuring_number
     * @param string $removal_date
     * @param \Webservices\StructType\InsolvencyLegalSubject $legal_subject
     * @param \Webservices\StructType\InsolvencyTreatingAuthority $treating_authority
     * @param \Webservices\StructType\InsolvencyCurators $curators
     * @param \Webservices\StructType\InsolvencyReceivers $receivers
     * @param \Webservices\StructType\InsolvencyPublications $events
     * @param \Webservices\ArrayType\InsolvencyReportArray $reports
     * @param \Webservices\ArrayType\InsolvencyAffectedCompanyArray $affected_companies
     */
    public function __construct($insolvency_id = null, $magistrate = null, $previous_insolvency_id = null, $previous_magistrate = null, $is_pre_hgk_published = null, $pre_hgk_insolvency_id = null, $dept_restructuring_number = null, $removal_date = null, \Webservices\StructType\InsolvencyLegalSubject $legal_subject = null, \Webservices\StructType\InsolvencyTreatingAuthority $treating_authority = null, \Webservices\StructType\InsolvencyCurators $curators = null, \Webservices\StructType\InsolvencyReceivers $receivers = null, \Webservices\StructType\InsolvencyPublications $events = null, \Webservices\ArrayType\InsolvencyReportArray $reports = null, \Webservices\ArrayType\InsolvencyAffectedCompanyArray $affected_companies = null)
    {
        $this
            ->setInsolvency_id($insolvency_id)
            ->setMagistrate($magistrate)
            ->setPrevious_insolvency_id($previous_insolvency_id)
            ->setPrevious_magistrate($previous_magistrate)
            ->setIs_pre_hgk_published($is_pre_hgk_published)
            ->setPre_hgk_insolvency_id($pre_hgk_insolvency_id)
            ->setDept_restructuring_number($dept_restructuring_number)
            ->setRemoval_date($removal_date)
            ->setLegal_subject($legal_subject)
            ->setTreating_authority($treating_authority)
            ->setCurators($curators)
            ->setReceivers($receivers)
            ->setEvents($events)
            ->setReports($reports)
            ->setAffected_companies($affected_companies);
    }
    /**
     * Get insolvency_id value
     * @return string|null
     */
    public function getInsolvency_id()
    {
        return $this->insolvency_id;
    }
    /**
     * Set insolvency_id value
     * @param string $insolvency_id
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setInsolvency_id($insolvency_id = null)
    {
        // validation for constraint: string
        if (!is_null($insolvency_id) && !is_string($insolvency_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insolvency_id)), __LINE__);
        }
        $this->insolvency_id = $insolvency_id;
        return $this;
    }
    /**
     * Get magistrate value
     * @return string|null
     */
    public function getMagistrate()
    {
        return $this->magistrate;
    }
    /**
     * Set magistrate value
     * @param string $magistrate
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setMagistrate($magistrate = null)
    {
        // validation for constraint: string
        if (!is_null($magistrate) && !is_string($magistrate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($magistrate)), __LINE__);
        }
        $this->magistrate = $magistrate;
        return $this;
    }
    /**
     * Get previous_insolvency_id value
     * @return string|null
     */
    public function getPrevious_insolvency_id()
    {
        return $this->previous_insolvency_id;
    }
    /**
     * Set previous_insolvency_id value
     * @param string $previous_insolvency_id
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setPrevious_insolvency_id($previous_insolvency_id = null)
    {
        // validation for constraint: string
        if (!is_null($previous_insolvency_id) && !is_string($previous_insolvency_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previous_insolvency_id)), __LINE__);
        }
        $this->previous_insolvency_id = $previous_insolvency_id;
        return $this;
    }
    /**
     * Get previous_magistrate value
     * @return string|null
     */
    public function getPrevious_magistrate()
    {
        return $this->previous_magistrate;
    }
    /**
     * Set previous_magistrate value
     * @param string $previous_magistrate
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setPrevious_magistrate($previous_magistrate = null)
    {
        // validation for constraint: string
        if (!is_null($previous_magistrate) && !is_string($previous_magistrate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previous_magistrate)), __LINE__);
        }
        $this->previous_magistrate = $previous_magistrate;
        return $this;
    }
    /**
     * Get is_pre_hgk_published value
     * @return bool|null
     */
    public function getIs_pre_hgk_published()
    {
        return $this->is_pre_hgk_published;
    }
    /**
     * Set is_pre_hgk_published value
     * @param bool $is_pre_hgk_published
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setIs_pre_hgk_published($is_pre_hgk_published = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_pre_hgk_published) && !is_bool($is_pre_hgk_published)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_pre_hgk_published)), __LINE__);
        }
        $this->is_pre_hgk_published = $is_pre_hgk_published;
        return $this;
    }
    /**
     * Get pre_hgk_insolvency_id value
     * @return string|null
     */
    public function getPre_hgk_insolvency_id()
    {
        return $this->pre_hgk_insolvency_id;
    }
    /**
     * Set pre_hgk_insolvency_id value
     * @param string $pre_hgk_insolvency_id
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setPre_hgk_insolvency_id($pre_hgk_insolvency_id = null)
    {
        // validation for constraint: string
        if (!is_null($pre_hgk_insolvency_id) && !is_string($pre_hgk_insolvency_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pre_hgk_insolvency_id)), __LINE__);
        }
        $this->pre_hgk_insolvency_id = $pre_hgk_insolvency_id;
        return $this;
    }
    /**
     * Get dept_restructuring_number value
     * @return string|null
     */
    public function getDept_restructuring_number()
    {
        return $this->dept_restructuring_number;
    }
    /**
     * Set dept_restructuring_number value
     * @param string $dept_restructuring_number
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setDept_restructuring_number($dept_restructuring_number = null)
    {
        // validation for constraint: string
        if (!is_null($dept_restructuring_number) && !is_string($dept_restructuring_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dept_restructuring_number)), __LINE__);
        }
        $this->dept_restructuring_number = $dept_restructuring_number;
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
     * @return \Webservices\StructType\InsolvencyCase
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
     * Get legal_subject value
     * @return \Webservices\StructType\InsolvencyLegalSubject|null
     */
    public function getLegal_subject()
    {
        return $this->legal_subject;
    }
    /**
     * Set legal_subject value
     * @param \Webservices\StructType\InsolvencyLegalSubject $legal_subject
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setLegal_subject(\Webservices\StructType\InsolvencyLegalSubject $legal_subject = null)
    {
        $this->legal_subject = $legal_subject;
        return $this;
    }
    /**
     * Get treating_authority value
     * @return \Webservices\StructType\InsolvencyTreatingAuthority|null
     */
    public function getTreating_authority()
    {
        return $this->treating_authority;
    }
    /**
     * Set treating_authority value
     * @param \Webservices\StructType\InsolvencyTreatingAuthority $treating_authority
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setTreating_authority(\Webservices\StructType\InsolvencyTreatingAuthority $treating_authority = null)
    {
        $this->treating_authority = $treating_authority;
        return $this;
    }
    /**
     * Get curators value
     * @return \Webservices\StructType\InsolvencyCurators|null
     */
    public function getCurators()
    {
        return $this->curators;
    }
    /**
     * Set curators value
     * @param \Webservices\StructType\InsolvencyCurators $curators
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setCurators(\Webservices\StructType\InsolvencyCurators $curators = null)
    {
        $this->curators = $curators;
        return $this;
    }
    /**
     * Get receivers value
     * @return \Webservices\StructType\InsolvencyReceivers|null
     */
    public function getReceivers()
    {
        return $this->receivers;
    }
    /**
     * Set receivers value
     * @param \Webservices\StructType\InsolvencyReceivers $receivers
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setReceivers(\Webservices\StructType\InsolvencyReceivers $receivers = null)
    {
        $this->receivers = $receivers;
        return $this;
    }
    /**
     * Get events value
     * @return \Webservices\StructType\InsolvencyPublications|null
     */
    public function getEvents()
    {
        return $this->events;
    }
    /**
     * Set events value
     * @param \Webservices\StructType\InsolvencyPublications $events
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setEvents(\Webservices\StructType\InsolvencyPublications $events = null)
    {
        $this->events = $events;
        return $this;
    }
    /**
     * Get reports value
     * @return \Webservices\ArrayType\InsolvencyReportArray|null
     */
    public function getReports()
    {
        return $this->reports;
    }
    /**
     * Set reports value
     * @param \Webservices\ArrayType\InsolvencyReportArray $reports
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setReports(\Webservices\ArrayType\InsolvencyReportArray $reports = null)
    {
        $this->reports = $reports;
        return $this;
    }
    /**
     * Get affected_companies value
     * @return \Webservices\ArrayType\InsolvencyAffectedCompanyArray|null
     */
    public function getAffected_companies()
    {
        return $this->affected_companies;
    }
    /**
     * Set affected_companies value
     * @param \Webservices\ArrayType\InsolvencyAffectedCompanyArray $affected_companies
     * @return \Webservices\StructType\InsolvencyCase
     */
    public function setAffected_companies(\Webservices\ArrayType\InsolvencyAffectedCompanyArray $affected_companies = null)
    {
        $this->affected_companies = $affected_companies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyCase
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
