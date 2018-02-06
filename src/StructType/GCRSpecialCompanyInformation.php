<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRSpecialCompanyInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRSpecialCompanyInformation extends AbstractStructBase
{
    /**
     * The special_company_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $special_company_code;
    /**
     * The special_company_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $special_company_text;
    /**
     * The texts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRTextSequenceArray
     */
    public $texts;
    /**
     * Constructor method for GCRSpecialCompanyInformation
     * @uses GCRSpecialCompanyInformation::setSpecial_company_code()
     * @uses GCRSpecialCompanyInformation::setSpecial_company_text()
     * @uses GCRSpecialCompanyInformation::setTexts()
     * @param string $special_company_code
     * @param string $special_company_text
     * @param \Webservices\ArrayType\GCRTextSequenceArray $texts
     */
    public function __construct($special_company_code = null, $special_company_text = null, \Webservices\ArrayType\GCRTextSequenceArray $texts = null)
    {
        $this
            ->setSpecial_company_code($special_company_code)
            ->setSpecial_company_text($special_company_text)
            ->setTexts($texts);
    }
    /**
     * Get special_company_code value
     * @return string|null
     */
    public function getSpecial_company_code()
    {
        return $this->special_company_code;
    }
    /**
     * Set special_company_code value
     * @param string $special_company_code
     * @return \Webservices\StructType\GCRSpecialCompanyInformation
     */
    public function setSpecial_company_code($special_company_code = null)
    {
        // validation for constraint: string
        if (!is_null($special_company_code) && !is_string($special_company_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($special_company_code)), __LINE__);
        }
        $this->special_company_code = $special_company_code;
        return $this;
    }
    /**
     * Get special_company_text value
     * @return string|null
     */
    public function getSpecial_company_text()
    {
        return $this->special_company_text;
    }
    /**
     * Set special_company_text value
     * @param string $special_company_text
     * @return \Webservices\StructType\GCRSpecialCompanyInformation
     */
    public function setSpecial_company_text($special_company_text = null)
    {
        // validation for constraint: string
        if (!is_null($special_company_text) && !is_string($special_company_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($special_company_text)), __LINE__);
        }
        $this->special_company_text = $special_company_text;
        return $this;
    }
    /**
     * Get texts value
     * @return \Webservices\ArrayType\GCRTextSequenceArray|null
     */
    public function getTexts()
    {
        return $this->texts;
    }
    /**
     * Set texts value
     * @param \Webservices\ArrayType\GCRTextSequenceArray $texts
     * @return \Webservices\StructType\GCRSpecialCompanyInformation
     */
    public function setTexts(\Webservices\ArrayType\GCRTextSequenceArray $texts = null)
    {
        $this->texts = $texts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRSpecialCompanyInformation
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
