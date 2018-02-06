<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PCReeksSearchPartsPagedResult StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class PCReeksSearchPartsPagedResult extends AbstractStructBase
{
    /**
     * The extra
     * @var \Webservices\StructType\SearchParts
     */
    public $extra;
    /**
     * The paging
     * @var \Webservices\StructType\ResultInfo
     */
    public $paging;
    /**
     * The results
     * @var \Webservices\ArrayType\PCReeksArray
     */
    public $results;
    /**
     * Constructor method for PCReeksSearchPartsPagedResult
     * @uses PCReeksSearchPartsPagedResult::setExtra()
     * @uses PCReeksSearchPartsPagedResult::setPaging()
     * @uses PCReeksSearchPartsPagedResult::setResults()
     * @param \Webservices\StructType\SearchParts $extra
     * @param \Webservices\StructType\ResultInfo $paging
     * @param \Webservices\ArrayType\PCReeksArray $results
     */
    public function __construct(\Webservices\StructType\SearchParts $extra = null, \Webservices\StructType\ResultInfo $paging = null, \Webservices\ArrayType\PCReeksArray $results = null)
    {
        $this
            ->setExtra($extra)
            ->setPaging($paging)
            ->setResults($results);
    }
    /**
     * Get extra value
     * @return \Webservices\StructType\SearchParts|null
     */
    public function getExtra()
    {
        return $this->extra;
    }
    /**
     * Set extra value
     * @param \Webservices\StructType\SearchParts $extra
     * @return \Webservices\StructType\PCReeksSearchPartsPagedResult
     */
    public function setExtra(\Webservices\StructType\SearchParts $extra = null)
    {
        $this->extra = $extra;
        return $this;
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
     * @return \Webservices\StructType\PCReeksSearchPartsPagedResult
     */
    public function setPaging(\Webservices\StructType\ResultInfo $paging = null)
    {
        $this->paging = $paging;
        return $this;
    }
    /**
     * Get results value
     * @return \Webservices\ArrayType\PCReeksArray|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @param \Webservices\ArrayType\PCReeksArray $results
     * @return \Webservices\StructType\PCReeksSearchPartsPagedResult
     */
    public function setResults(\Webservices\ArrayType\PCReeksArray $results = null)
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
     * @return \Webservices\StructType\PCReeksSearchPartsPagedResult
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
