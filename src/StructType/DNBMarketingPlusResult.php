<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBMarketingPlusResult StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBMarketingPlusResult extends AbstractStructBase
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
     * Constructor method for DNBMarketingPlusResult
     * @uses DNBMarketingPlusResult::setMarketing()
     * @uses DNBMarketingPlusResult::setMarketing_plus()
     * @param \Webservices\StructType\DNBMarketing $marketing
     * @param \Webservices\StructType\DNBMarketingPlus $marketing_plus
     */
    public function __construct(\Webservices\StructType\DNBMarketing $marketing = null, \Webservices\StructType\DNBMarketingPlus $marketing_plus = null)
    {
        $this
            ->setMarketing($marketing)
            ->setMarketing_plus($marketing_plus);
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
     * @return \Webservices\StructType\DNBMarketingPlusResult
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
     * @return \Webservices\StructType\DNBMarketingPlusResult
     */
    public function setMarketing_plus(\Webservices\StructType\DNBMarketingPlus $marketing_plus = null)
    {
        $this->marketing_plus = $marketing_plus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBMarketingPlusResult
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
