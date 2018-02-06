<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRHistory StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRHistory extends AbstractStructBase
{
    /**
     * The originated_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCROriginatedFromArray
     */
    public $originated_from;
    /**
     * The continuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRContinuationArray
     */
    public $continuation;
    /**
     * The company_continued_under
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCompanyContinuedUnderArray
     */
    public $company_continued_under;
    /**
     * Constructor method for GCRHistory
     * @uses GCRHistory::setOriginated_from()
     * @uses GCRHistory::setContinuation()
     * @uses GCRHistory::setCompany_continued_under()
     * @param \Webservices\ArrayType\GCROriginatedFromArray $originated_from
     * @param \Webservices\ArrayType\GCRContinuationArray $continuation
     * @param \Webservices\ArrayType\GCRCompanyContinuedUnderArray $company_continued_under
     */
    public function __construct(\Webservices\ArrayType\GCROriginatedFromArray $originated_from = null, \Webservices\ArrayType\GCRContinuationArray $continuation = null, \Webservices\ArrayType\GCRCompanyContinuedUnderArray $company_continued_under = null)
    {
        $this
            ->setOriginated_from($originated_from)
            ->setContinuation($continuation)
            ->setCompany_continued_under($company_continued_under);
    }
    /**
     * Get originated_from value
     * @return \Webservices\ArrayType\GCROriginatedFromArray|null
     */
    public function getOriginated_from()
    {
        return $this->originated_from;
    }
    /**
     * Set originated_from value
     * @param \Webservices\ArrayType\GCROriginatedFromArray $originated_from
     * @return \Webservices\StructType\GCRHistory
     */
    public function setOriginated_from(\Webservices\ArrayType\GCROriginatedFromArray $originated_from = null)
    {
        $this->originated_from = $originated_from;
        return $this;
    }
    /**
     * Get continuation value
     * @return \Webservices\ArrayType\GCRContinuationArray|null
     */
    public function getContinuation()
    {
        return $this->continuation;
    }
    /**
     * Set continuation value
     * @param \Webservices\ArrayType\GCRContinuationArray $continuation
     * @return \Webservices\StructType\GCRHistory
     */
    public function setContinuation(\Webservices\ArrayType\GCRContinuationArray $continuation = null)
    {
        $this->continuation = $continuation;
        return $this;
    }
    /**
     * Get company_continued_under value
     * @return \Webservices\ArrayType\GCRCompanyContinuedUnderArray|null
     */
    public function getCompany_continued_under()
    {
        return $this->company_continued_under;
    }
    /**
     * Set company_continued_under value
     * @param \Webservices\ArrayType\GCRCompanyContinuedUnderArray $company_continued_under
     * @return \Webservices\StructType\GCRHistory
     */
    public function setCompany_continued_under(\Webservices\ArrayType\GCRCompanyContinuedUnderArray $company_continued_under = null)
    {
        $this->company_continued_under = $company_continued_under;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRHistory
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
