<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBMarketingPlusLinkage StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBMarketingPlusLinkage extends AbstractStructBase
{
    /**
     * The domestic_ultimate_duns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $domestic_ultimate_duns;
    /**
     * The domestic_ultimate_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $domestic_ultimate_name;
    /**
     * The domestic_ultimate_address
     * @var \Webservices\StructType\DNBAddress
     */
    public $domestic_ultimate_address;
    /**
     * The global_ultimate_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $global_ultimate_indication;
    /**
     * The global_ultimate_duns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $global_ultimate_duns;
    /**
     * The global_ultimate_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $global_ultimate_name;
    /**
     * The global_ultimate_address
     * @var \Webservices\StructType\DNBAddress
     */
    public $global_ultimate_address;
    /**
     * The headquarters_duns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $headquarters_duns;
    /**
     * The headquarters_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $headquarters_name;
    /**
     * The headquarters_address
     * @var \Webservices\StructType\DNBAddress
     */
    public $headquarters_address;
    /**
     * The family_member_count
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $family_member_count;
    /**
     * The linkage_report_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $linkage_report_date;
    /**
     * Constructor method for DNBMarketingPlusLinkage
     * @uses DNBMarketingPlusLinkage::setDomestic_ultimate_duns()
     * @uses DNBMarketingPlusLinkage::setDomestic_ultimate_name()
     * @uses DNBMarketingPlusLinkage::setDomestic_ultimate_address()
     * @uses DNBMarketingPlusLinkage::setGlobal_ultimate_indication()
     * @uses DNBMarketingPlusLinkage::setGlobal_ultimate_duns()
     * @uses DNBMarketingPlusLinkage::setGlobal_ultimate_name()
     * @uses DNBMarketingPlusLinkage::setGlobal_ultimate_address()
     * @uses DNBMarketingPlusLinkage::setHeadquarters_duns()
     * @uses DNBMarketingPlusLinkage::setHeadquarters_name()
     * @uses DNBMarketingPlusLinkage::setHeadquarters_address()
     * @uses DNBMarketingPlusLinkage::setFamily_member_count()
     * @uses DNBMarketingPlusLinkage::setLinkage_report_date()
     * @param string $domestic_ultimate_duns
     * @param string $domestic_ultimate_name
     * @param \Webservices\StructType\DNBAddress $domestic_ultimate_address
     * @param bool $global_ultimate_indication
     * @param string $global_ultimate_duns
     * @param string $global_ultimate_name
     * @param \Webservices\StructType\DNBAddress $global_ultimate_address
     * @param string $headquarters_duns
     * @param string $headquarters_name
     * @param \Webservices\StructType\DNBAddress $headquarters_address
     * @param int $family_member_count
     * @param string $linkage_report_date
     */
    public function __construct($domestic_ultimate_duns = null, $domestic_ultimate_name = null, \Webservices\StructType\DNBAddress $domestic_ultimate_address = null, $global_ultimate_indication = null, $global_ultimate_duns = null, $global_ultimate_name = null, \Webservices\StructType\DNBAddress $global_ultimate_address = null, $headquarters_duns = null, $headquarters_name = null, \Webservices\StructType\DNBAddress $headquarters_address = null, $family_member_count = null, $linkage_report_date = null)
    {
        $this
            ->setDomestic_ultimate_duns($domestic_ultimate_duns)
            ->setDomestic_ultimate_name($domestic_ultimate_name)
            ->setDomestic_ultimate_address($domestic_ultimate_address)
            ->setGlobal_ultimate_indication($global_ultimate_indication)
            ->setGlobal_ultimate_duns($global_ultimate_duns)
            ->setGlobal_ultimate_name($global_ultimate_name)
            ->setGlobal_ultimate_address($global_ultimate_address)
            ->setHeadquarters_duns($headquarters_duns)
            ->setHeadquarters_name($headquarters_name)
            ->setHeadquarters_address($headquarters_address)
            ->setFamily_member_count($family_member_count)
            ->setLinkage_report_date($linkage_report_date);
    }
    /**
     * Get domestic_ultimate_duns value
     * @return string|null
     */
    public function getDomestic_ultimate_duns()
    {
        return $this->domestic_ultimate_duns;
    }
    /**
     * Set domestic_ultimate_duns value
     * @param string $domestic_ultimate_duns
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setDomestic_ultimate_duns($domestic_ultimate_duns = null)
    {
        // validation for constraint: string
        if (!is_null($domestic_ultimate_duns) && !is_string($domestic_ultimate_duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domestic_ultimate_duns)), __LINE__);
        }
        $this->domestic_ultimate_duns = $domestic_ultimate_duns;
        return $this;
    }
    /**
     * Get domestic_ultimate_name value
     * @return string|null
     */
    public function getDomestic_ultimate_name()
    {
        return $this->domestic_ultimate_name;
    }
    /**
     * Set domestic_ultimate_name value
     * @param string $domestic_ultimate_name
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setDomestic_ultimate_name($domestic_ultimate_name = null)
    {
        // validation for constraint: string
        if (!is_null($domestic_ultimate_name) && !is_string($domestic_ultimate_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domestic_ultimate_name)), __LINE__);
        }
        $this->domestic_ultimate_name = $domestic_ultimate_name;
        return $this;
    }
    /**
     * Get domestic_ultimate_address value
     * @return \Webservices\StructType\DNBAddress|null
     */
    public function getDomestic_ultimate_address()
    {
        return $this->domestic_ultimate_address;
    }
    /**
     * Set domestic_ultimate_address value
     * @param \Webservices\StructType\DNBAddress $domestic_ultimate_address
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setDomestic_ultimate_address(\Webservices\StructType\DNBAddress $domestic_ultimate_address = null)
    {
        $this->domestic_ultimate_address = $domestic_ultimate_address;
        return $this;
    }
    /**
     * Get global_ultimate_indication value
     * @return bool|null
     */
    public function getGlobal_ultimate_indication()
    {
        return $this->global_ultimate_indication;
    }
    /**
     * Set global_ultimate_indication value
     * @param bool $global_ultimate_indication
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setGlobal_ultimate_indication($global_ultimate_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($global_ultimate_indication) && !is_bool($global_ultimate_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($global_ultimate_indication)), __LINE__);
        }
        $this->global_ultimate_indication = $global_ultimate_indication;
        return $this;
    }
    /**
     * Get global_ultimate_duns value
     * @return string|null
     */
    public function getGlobal_ultimate_duns()
    {
        return $this->global_ultimate_duns;
    }
    /**
     * Set global_ultimate_duns value
     * @param string $global_ultimate_duns
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setGlobal_ultimate_duns($global_ultimate_duns = null)
    {
        // validation for constraint: string
        if (!is_null($global_ultimate_duns) && !is_string($global_ultimate_duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($global_ultimate_duns)), __LINE__);
        }
        $this->global_ultimate_duns = $global_ultimate_duns;
        return $this;
    }
    /**
     * Get global_ultimate_name value
     * @return string|null
     */
    public function getGlobal_ultimate_name()
    {
        return $this->global_ultimate_name;
    }
    /**
     * Set global_ultimate_name value
     * @param string $global_ultimate_name
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setGlobal_ultimate_name($global_ultimate_name = null)
    {
        // validation for constraint: string
        if (!is_null($global_ultimate_name) && !is_string($global_ultimate_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($global_ultimate_name)), __LINE__);
        }
        $this->global_ultimate_name = $global_ultimate_name;
        return $this;
    }
    /**
     * Get global_ultimate_address value
     * @return \Webservices\StructType\DNBAddress|null
     */
    public function getGlobal_ultimate_address()
    {
        return $this->global_ultimate_address;
    }
    /**
     * Set global_ultimate_address value
     * @param \Webservices\StructType\DNBAddress $global_ultimate_address
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setGlobal_ultimate_address(\Webservices\StructType\DNBAddress $global_ultimate_address = null)
    {
        $this->global_ultimate_address = $global_ultimate_address;
        return $this;
    }
    /**
     * Get headquarters_duns value
     * @return string|null
     */
    public function getHeadquarters_duns()
    {
        return $this->headquarters_duns;
    }
    /**
     * Set headquarters_duns value
     * @param string $headquarters_duns
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setHeadquarters_duns($headquarters_duns = null)
    {
        // validation for constraint: string
        if (!is_null($headquarters_duns) && !is_string($headquarters_duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headquarters_duns)), __LINE__);
        }
        $this->headquarters_duns = $headquarters_duns;
        return $this;
    }
    /**
     * Get headquarters_name value
     * @return string|null
     */
    public function getHeadquarters_name()
    {
        return $this->headquarters_name;
    }
    /**
     * Set headquarters_name value
     * @param string $headquarters_name
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setHeadquarters_name($headquarters_name = null)
    {
        // validation for constraint: string
        if (!is_null($headquarters_name) && !is_string($headquarters_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($headquarters_name)), __LINE__);
        }
        $this->headquarters_name = $headquarters_name;
        return $this;
    }
    /**
     * Get headquarters_address value
     * @return \Webservices\StructType\DNBAddress|null
     */
    public function getHeadquarters_address()
    {
        return $this->headquarters_address;
    }
    /**
     * Set headquarters_address value
     * @param \Webservices\StructType\DNBAddress $headquarters_address
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setHeadquarters_address(\Webservices\StructType\DNBAddress $headquarters_address = null)
    {
        $this->headquarters_address = $headquarters_address;
        return $this;
    }
    /**
     * Get family_member_count value
     * @return int|null
     */
    public function getFamily_member_count()
    {
        return $this->family_member_count;
    }
    /**
     * Set family_member_count value
     * @param int $family_member_count
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setFamily_member_count($family_member_count = null)
    {
        // validation for constraint: int
        if (!is_null($family_member_count) && !is_numeric($family_member_count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($family_member_count)), __LINE__);
        }
        $this->family_member_count = $family_member_count;
        return $this;
    }
    /**
     * Get linkage_report_date value
     * @return string|null
     */
    public function getLinkage_report_date()
    {
        return $this->linkage_report_date;
    }
    /**
     * Set linkage_report_date value
     * @param string $linkage_report_date
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
     */
    public function setLinkage_report_date($linkage_report_date = null)
    {
        // validation for constraint: string
        if (!is_null($linkage_report_date) && !is_string($linkage_report_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkage_report_date)), __LINE__);
        }
        $this->linkage_report_date = $linkage_report_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBMarketingPlusLinkage
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
