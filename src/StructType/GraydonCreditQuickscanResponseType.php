<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graydonCreditQuickscanResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditQuickscanResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\GraydonCreditReportQuickscan
     */
    public $out;
    /**
     * Constructor method for graydonCreditQuickscanResponseType
     * @uses GraydonCreditQuickscanResponseType::setOut()
     * @param \Webservices\StructType\GraydonCreditReportQuickscan $out
     */
    public function __construct(\Webservices\StructType\GraydonCreditReportQuickscan $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\GraydonCreditReportQuickscan|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\GraydonCreditReportQuickscan $out
     * @return \Webservices\StructType\GraydonCreditQuickscanResponseType
     */
    public function setOut(\Webservices\StructType\GraydonCreditReportQuickscan $out = null)
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
     * @return \Webservices\StructType\GraydonCreditQuickscanResponseType
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
