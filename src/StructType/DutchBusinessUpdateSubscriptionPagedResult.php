<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUpdateSubscriptionPagedResult StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUpdateSubscriptionPagedResult extends AbstractStructBase
{
    /**
     * The paging
     * @var \Webservices\StructType\ResultInfo
     */
    public $paging;
    /**
     * The results
     * @var \Webservices\ArrayType\DutchBusinessUpdateSubscriptionArray
     */
    public $results;
    /**
     * Constructor method for DutchBusinessUpdateSubscriptionPagedResult
     * @uses DutchBusinessUpdateSubscriptionPagedResult::setPaging()
     * @uses DutchBusinessUpdateSubscriptionPagedResult::setResults()
     * @param \Webservices\StructType\ResultInfo $paging
     * @param \Webservices\ArrayType\DutchBusinessUpdateSubscriptionArray $results
     */
    public function __construct(\Webservices\StructType\ResultInfo $paging = null, \Webservices\ArrayType\DutchBusinessUpdateSubscriptionArray $results = null)
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
     * @return \Webservices\StructType\DutchBusinessUpdateSubscriptionPagedResult
     */
    public function setPaging(\Webservices\StructType\ResultInfo $paging = null)
    {
        $this->paging = $paging;
        return $this;
    }
    /**
     * Get results value
     * @return \Webservices\ArrayType\DutchBusinessUpdateSubscriptionArray|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @param \Webservices\ArrayType\DutchBusinessUpdateSubscriptionArray $results
     * @return \Webservices\StructType\DutchBusinessUpdateSubscriptionPagedResult
     */
    public function setResults(\Webservices\ArrayType\DutchBusinessUpdateSubscriptionArray $results = null)
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
     * @return \Webservices\StructType\DutchBusinessUpdateSubscriptionPagedResult
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
