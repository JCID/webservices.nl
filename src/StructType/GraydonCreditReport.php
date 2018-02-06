<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReport StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReport extends AbstractStructBase
{
    /**
     * The report_normal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GraydonCreditReportNormal
     */
    public $report_normal;
    /**
     * The report_calamity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GraydonCreditReportCalamity
     */
    public $report_calamity;
    /**
     * The report_alarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GraydonCreditReportAlarm
     */
    public $report_alarm;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document;
    /**
     * The alarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAlarm
     */
    public $alarm;
    /**
     * Constructor method for GraydonCreditReport
     * @uses GraydonCreditReport::setReport_normal()
     * @uses GraydonCreditReport::setReport_calamity()
     * @uses GraydonCreditReport::setReport_alarm()
     * @uses GraydonCreditReport::setDocument()
     * @uses GraydonCreditReport::setAlarm()
     * @param \Webservices\StructType\GraydonCreditReportNormal $report_normal
     * @param \Webservices\StructType\GraydonCreditReportCalamity $report_calamity
     * @param \Webservices\StructType\GraydonCreditReportAlarm $report_alarm
     * @param string $document
     * @param \Webservices\StructType\GCRAlarm $alarm
     */
    public function __construct(\Webservices\StructType\GraydonCreditReportNormal $report_normal = null, \Webservices\StructType\GraydonCreditReportCalamity $report_calamity = null, \Webservices\StructType\GraydonCreditReportAlarm $report_alarm = null, $document = null, \Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this
            ->setReport_normal($report_normal)
            ->setReport_calamity($report_calamity)
            ->setReport_alarm($report_alarm)
            ->setDocument($document)
            ->setAlarm($alarm);
    }
    /**
     * Get report_normal value
     * @return \Webservices\StructType\GraydonCreditReportNormal|null
     */
    public function getReport_normal()
    {
        return $this->report_normal;
    }
    /**
     * Set report_normal value
     * @param \Webservices\StructType\GraydonCreditReportNormal $report_normal
     * @return \Webservices\StructType\GraydonCreditReport
     */
    public function setReport_normal(\Webservices\StructType\GraydonCreditReportNormal $report_normal = null)
    {
        $this->report_normal = $report_normal;
        return $this;
    }
    /**
     * Get report_calamity value
     * @return \Webservices\StructType\GraydonCreditReportCalamity|null
     */
    public function getReport_calamity()
    {
        return $this->report_calamity;
    }
    /**
     * Set report_calamity value
     * @param \Webservices\StructType\GraydonCreditReportCalamity $report_calamity
     * @return \Webservices\StructType\GraydonCreditReport
     */
    public function setReport_calamity(\Webservices\StructType\GraydonCreditReportCalamity $report_calamity = null)
    {
        $this->report_calamity = $report_calamity;
        return $this;
    }
    /**
     * Get report_alarm value
     * @return \Webservices\StructType\GraydonCreditReportAlarm|null
     */
    public function getReport_alarm()
    {
        return $this->report_alarm;
    }
    /**
     * Set report_alarm value
     * @param \Webservices\StructType\GraydonCreditReportAlarm $report_alarm
     * @return \Webservices\StructType\GraydonCreditReport
     */
    public function setReport_alarm(\Webservices\StructType\GraydonCreditReportAlarm $report_alarm = null)
    {
        $this->report_alarm = $report_alarm;
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\GraydonCreditReport
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Get alarm value
     * @return \Webservices\StructType\GCRAlarm|null
     */
    public function getAlarm()
    {
        return $this->alarm;
    }
    /**
     * Set alarm value
     * @param \Webservices\StructType\GCRAlarm $alarm
     * @return \Webservices\StructType\GraydonCreditReport
     */
    public function setAlarm(\Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this->alarm = $alarm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditReport
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
