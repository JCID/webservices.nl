<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportNormal StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportNormal extends AbstractStructBase
{
    /**
     * The company
     * @var \Webservices\StructType\GCRCompanyItself
     */
    public $company;
    /**
     * The company_relations
     * @var \Webservices\StructType\GCRCompanyRelations
     */
    public $company_relations;
    /**
     * The indirect_company_relations
     * @var \Webservices\StructType\GCRCompanyRelations
     */
    public $indirect_company_relations;
    /**
     * Constructor method for GraydonCreditReportNormal
     * @uses GraydonCreditReportNormal::setCompany()
     * @uses GraydonCreditReportNormal::setCompany_relations()
     * @uses GraydonCreditReportNormal::setIndirect_company_relations()
     * @param \Webservices\StructType\GCRCompanyItself $company
     * @param \Webservices\StructType\GCRCompanyRelations $company_relations
     * @param \Webservices\StructType\GCRCompanyRelations $indirect_company_relations
     */
    public function __construct(\Webservices\StructType\GCRCompanyItself $company = null, \Webservices\StructType\GCRCompanyRelations $company_relations = null, \Webservices\StructType\GCRCompanyRelations $indirect_company_relations = null)
    {
        $this
            ->setCompany($company)
            ->setCompany_relations($company_relations)
            ->setIndirect_company_relations($indirect_company_relations);
    }
    /**
     * Get company value
     * @return \Webservices\StructType\GCRCompanyItself|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param \Webservices\StructType\GCRCompanyItself $company
     * @return \Webservices\StructType\GraydonCreditReportNormal
     */
    public function setCompany(\Webservices\StructType\GCRCompanyItself $company = null)
    {
        $this->company = $company;
        return $this;
    }
    /**
     * Get company_relations value
     * @return \Webservices\StructType\GCRCompanyRelations|null
     */
    public function getCompany_relations()
    {
        return $this->company_relations;
    }
    /**
     * Set company_relations value
     * @param \Webservices\StructType\GCRCompanyRelations $company_relations
     * @return \Webservices\StructType\GraydonCreditReportNormal
     */
    public function setCompany_relations(\Webservices\StructType\GCRCompanyRelations $company_relations = null)
    {
        $this->company_relations = $company_relations;
        return $this;
    }
    /**
     * Get indirect_company_relations value
     * @return \Webservices\StructType\GCRCompanyRelations|null
     */
    public function getIndirect_company_relations()
    {
        return $this->indirect_company_relations;
    }
    /**
     * Set indirect_company_relations value
     * @param \Webservices\StructType\GCRCompanyRelations $indirect_company_relations
     * @return \Webservices\StructType\GraydonCreditReportNormal
     */
    public function setIndirect_company_relations(\Webservices\StructType\GCRCompanyRelations $indirect_company_relations = null)
    {
        $this->indirect_company_relations = $indirect_company_relations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditReportNormal
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
