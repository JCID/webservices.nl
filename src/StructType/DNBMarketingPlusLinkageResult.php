<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBMarketingPlusLinkageResult StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBMarketingPlusLinkageResult extends AbstractStructBase
{
    /**
     * The marketing
     * @var \Webservices\StructType\DNBMarketing
     */
    public $marketing;
    /**
     * The marketing_plus
     * @var \Webservices\StructType\DNBMarketingPlus
     */
    public $marketing_plus;
    /**
     * The marketing_plus_linkage
     * @var \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public $marketing_plus_linkage;
    /**
     * Constructor method for DNBMarketingPlusLinkageResult
     * @uses DNBMarketingPlusLinkageResult::setMarketing()
     * @uses DNBMarketingPlusLinkageResult::setMarketing_plus()
     * @uses DNBMarketingPlusLinkageResult::setMarketing_plus_linkage()
     * @param \Webservices\StructType\DNBMarketing $marketing
     * @param \Webservices\StructType\DNBMarketingPlus $marketing_plus
     * @param \Webservices\StructType\DNBMarketingPlusLinkage $marketing_plus_linkage
     */
    public function __construct(\Webservices\StructType\DNBMarketing $marketing = null, \Webservices\StructType\DNBMarketingPlus $marketing_plus = null, \Webservices\StructType\DNBMarketingPlusLinkage $marketing_plus_linkage = null)
    {
        $this
            ->setMarketing($marketing)
            ->setMarketing_plus($marketing_plus)
            ->setMarketing_plus_linkage($marketing_plus_linkage);
    }
    /**
     * Get marketing value
     * @return \Webservices\StructType\DNBMarketing|null
     */
    public function getMarketing()
    {
        return $this->marketing;
    }
    /**
     * Set marketing value
     * @param \Webservices\StructType\DNBMarketing $marketing
     * @return \Webservices\StructType\DNBMarketingPlusLinkageResult
     */
    public function setMarketing(\Webservices\StructType\DNBMarketing $marketing = null)
    {
        $this->marketing = $marketing;
        return $this;
    }
    /**
     * Get marketing_plus value
     * @return \Webservices\StructType\DNBMarketingPlus|null
     */
    public function getMarketing_plus()
    {
        return $this->marketing_plus;
    }
    /**
     * Set marketing_plus value
     * @param \Webservices\StructType\DNBMarketingPlus $marketing_plus
     * @return \Webservices\StructType\DNBMarketingPlusLinkageResult
     */
    public function setMarketing_plus(\Webservices\StructType\DNBMarketingPlus $marketing_plus = null)
    {
        $this->marketing_plus = $marketing_plus;
        return $this;
    }
    /**
     * Get marketing_plus_linkage value
     * @return \Webservices\StructType\DNBMarketingPlusLinkage|null
     */
    public function getMarketing_plus_linkage()
    {
        return $this->marketing_plus_linkage;
    }
    /**
     * Set marketing_plus_linkage value
     * @param \Webservices\StructType\DNBMarketingPlusLinkage $marketing_plus_linkage
     * @return \Webservices\StructType\DNBMarketingPlusLinkageResult
     */
    public function setMarketing_plus_linkage(\Webservices\StructType\DNBMarketingPlusLinkage $marketing_plus_linkage = null)
    {
        $this->marketing_plus_linkage = $marketing_plus_linkage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBMarketingPlusLinkageResult
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
