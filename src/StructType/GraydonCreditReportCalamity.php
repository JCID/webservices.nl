<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportCalamity StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportCalamity extends AbstractStructBase
{
    /**
     * The company
     * @var \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public $company;
    /**
     * The company_relations
     * @var \Webservices\StructType\GCRCompanyRelationsSimple
     */
    public $company_relations;
    /**
     * Constructor method for GraydonCreditReportCalamity
     * @uses GraydonCreditReportCalamity::setCompany()
     * @uses GraydonCreditReportCalamity::setCompany_relations()
     * @param \Webservices\StructType\GCRCompanyItselfCalamity $company
     * @param \Webservices\StructType\GCRCompanyRelationsSimple $company_relations
     */
    public function __construct(\Webservices\StructType\GCRCompanyItselfCalamity $company = null, \Webservices\StructType\GCRCompanyRelationsSimple $company_relations = null)
    {
        $this
            ->setCompany($company)
            ->setCompany_relations($company_relations);
    }
    /**
     * Get company value
     * @return \Webservices\StructType\GCRCompanyItselfCalamity|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param \Webservices\StructType\GCRCompanyItselfCalamity $company
     * @return \Webservices\StructType\GraydonCreditReportCalamity
     */
    public function setCompany(\Webservices\StructType\GCRCompanyItselfCalamity $company = null)
    {
        $this->company = $company;
        return $this;
    }
    /**
     * Get company_relations value
     * @return \Webservices\StructType\GCRCompanyRelationsSimple|null
     */
    public function getCompany_relations()
    {
        return $this->company_relations;
    }
    /**
     * Set company_relations value
     * @param \Webservices\StructType\GCRCompanyRelationsSimple $company_relations
     * @return \Webservices\StructType\GraydonCreditReportCalamity
     */
    public function setCompany_relations(\Webservices\StructType\GCRCompanyRelationsSimple $company_relations = null)
    {
        $this->company_relations = $company_relations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditReportCalamity
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
