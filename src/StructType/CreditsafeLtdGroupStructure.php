<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdGroupStructure StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdGroupStructure extends AbstractStructBase
{
    /**
     * The ultimate_parent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeCompanyListEntry
     */
    public $ultimate_parent;
    /**
     * The immediate_parent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeCompanyListEntry
     */
    public $immediate_parent;
    /**
     * The subsidiary_companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeCompanyListEntryArray
     */
    public $subsidiary_companies;
    /**
     * The affiliated_companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeCompanyListEntryArray
     */
    public $affiliated_companies;
    /**
     * Constructor method for CreditsafeLtdGroupStructure
     * @uses CreditsafeLtdGroupStructure::setUltimate_parent()
     * @uses CreditsafeLtdGroupStructure::setImmediate_parent()
     * @uses CreditsafeLtdGroupStructure::setSubsidiary_companies()
     * @uses CreditsafeLtdGroupStructure::setAffiliated_companies()
     * @param \Webservices\StructType\CreditsafeCompanyListEntry $ultimate_parent
     * @param \Webservices\StructType\CreditsafeCompanyListEntry $immediate_parent
     * @param \Webservices\ArrayType\CreditsafeCompanyListEntryArray $subsidiary_companies
     * @param \Webservices\ArrayType\CreditsafeCompanyListEntryArray $affiliated_companies
     */
    public function __construct(\Webservices\StructType\CreditsafeCompanyListEntry $ultimate_parent = null, \Webservices\StructType\CreditsafeCompanyListEntry $immediate_parent = null, \Webservices\ArrayType\CreditsafeCompanyListEntryArray $subsidiary_companies = null, \Webservices\ArrayType\CreditsafeCompanyListEntryArray $affiliated_companies = null)
    {
        $this
            ->setUltimate_parent($ultimate_parent)
            ->setImmediate_parent($immediate_parent)
            ->setSubsidiary_companies($subsidiary_companies)
            ->setAffiliated_companies($affiliated_companies);
    }
    /**
     * Get ultimate_parent value
     * @return \Webservices\StructType\CreditsafeCompanyListEntry|null
     */
    public function getUltimate_parent()
    {
        return $this->ultimate_parent;
    }
    /**
     * Set ultimate_parent value
     * @param \Webservices\StructType\CreditsafeCompanyListEntry $ultimate_parent
     * @return \Webservices\StructType\CreditsafeLtdGroupStructure
     */
    public function setUltimate_parent(\Webservices\StructType\CreditsafeCompanyListEntry $ultimate_parent = null)
    {
        $this->ultimate_parent = $ultimate_parent;
        return $this;
    }
    /**
     * Get immediate_parent value
     * @return \Webservices\StructType\CreditsafeCompanyListEntry|null
     */
    public function getImmediate_parent()
    {
        return $this->immediate_parent;
    }
    /**
     * Set immediate_parent value
     * @param \Webservices\StructType\CreditsafeCompanyListEntry $immediate_parent
     * @return \Webservices\StructType\CreditsafeLtdGroupStructure
     */
    public function setImmediate_parent(\Webservices\StructType\CreditsafeCompanyListEntry $immediate_parent = null)
    {
        $this->immediate_parent = $immediate_parent;
        return $this;
    }
    /**
     * Get subsidiary_companies value
     * @return \Webservices\ArrayType\CreditsafeCompanyListEntryArray|null
     */
    public function getSubsidiary_companies()
    {
        return $this->subsidiary_companies;
    }
    /**
     * Set subsidiary_companies value
     * @param \Webservices\ArrayType\CreditsafeCompanyListEntryArray $subsidiary_companies
     * @return \Webservices\StructType\CreditsafeLtdGroupStructure
     */
    public function setSubsidiary_companies(\Webservices\ArrayType\CreditsafeCompanyListEntryArray $subsidiary_companies = null)
    {
        $this->subsidiary_companies = $subsidiary_companies;
        return $this;
    }
    /**
     * Get affiliated_companies value
     * @return \Webservices\ArrayType\CreditsafeCompanyListEntryArray|null
     */
    public function getAffiliated_companies()
    {
        return $this->affiliated_companies;
    }
    /**
     * Set affiliated_companies value
     * @param \Webservices\ArrayType\CreditsafeCompanyListEntryArray $affiliated_companies
     * @return \Webservices\StructType\CreditsafeLtdGroupStructure
     */
    public function setAffiliated_companies(\Webservices\ArrayType\CreditsafeCompanyListEntryArray $affiliated_companies = null)
    {
        $this->affiliated_companies = $affiliated_companies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdGroupStructure
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
