<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceBusinessSearchReferencePagedResult StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceBusinessSearchReferencePagedResult extends AbstractStructBase
{
    /**
     * The paging
     * @var \Webservices\StructType\ResultInfo
     */
    public $paging;
    /**
     * The results
     * @var \Webservices\ArrayType\ComplianceBusinessSearchReferenceArray
     */
    public $results;
    /**
     * Constructor method for ComplianceBusinessSearchReferencePagedResult
     * @uses ComplianceBusinessSearchReferencePagedResult::setPaging()
     * @uses ComplianceBusinessSearchReferencePagedResult::setResults()
     * @param \Webservices\StructType\ResultInfo $paging
     * @param \Webservices\ArrayType\ComplianceBusinessSearchReferenceArray $results
     */
    public function __construct(\Webservices\StructType\ResultInfo $paging = null, \Webservices\ArrayType\ComplianceBusinessSearchReferenceArray $results = null)
    {
        $this
            ->setPaging($paging)
            ->setResults($results);
    }
    /**
     * Get paging value
     * @return \Webservices\StructType\ResultInfo|null
     */
    public function getPaging()
    {
        return $this->paging;
    }
    /**
     * Set paging value
     * @param \Webservices\StructType\ResultInfo $paging
     * @return \Webservices\StructType\ComplianceBusinessSearchReferencePagedResult
     */
    public function setPaging(\Webservices\StructType\ResultInfo $paging = null)
    {
        $this->paging = $paging;
        return $this;
    }
    /**
     * Get results value
     * @return \Webservices\ArrayType\ComplianceBusinessSearchReferenceArray|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @param \Webservices\ArrayType\ComplianceBusinessSearchReferenceArray $results
     * @return \Webservices\StructType\ComplianceBusinessSearchReferencePagedResult
     */
    public function setResults(\Webservices\ArrayType\ComplianceBusinessSearchReferenceArray $results = null)
    {
        $this->results = $results;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceBusinessSearchReferencePagedResult
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
