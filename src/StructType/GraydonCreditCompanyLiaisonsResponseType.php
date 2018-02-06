<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graydonCreditCompanyLiaisonsResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditCompanyLiaisonsResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\GraydonCreditReportCompanyLiaisons
     */
    public $out;
    /**
     * Constructor method for graydonCreditCompanyLiaisonsResponseType
     * @uses GraydonCreditCompanyLiaisonsResponseType::setOut()
     * @param \Webservices\StructType\GraydonCreditReportCompanyLiaisons $out
     */
    public function __construct(\Webservices\StructType\GraydonCreditReportCompanyLiaisons $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\GraydonCreditReportCompanyLiaisons|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\GraydonCreditReportCompanyLiaisons $out
     * @return \Webservices\StructType\GraydonCreditCompanyLiaisonsResponseType
     */
    public function setOut(\Webservices\StructType\GraydonCreditReportCompanyLiaisons $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditCompanyLiaisonsResponseType
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
