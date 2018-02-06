<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRLiaisonOfficialData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRLiaisonOfficialData extends AbstractStructBase
{
    /**
     * The chamber_of_commerce
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRChamberOfCommerce
     */
    public $chamber_of_commerce;
    /**
     * The present_legal_form_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $present_legal_form_code;
    /**
     * The present_legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $present_legal_form_text;
    /**
     * Constructor method for GCRLiaisonOfficialData
     * @uses GCRLiaisonOfficialData::setChamber_of_commerce()
     * @uses GCRLiaisonOfficialData::setPresent_legal_form_code()
     * @uses GCRLiaisonOfficialData::setPresent_legal_form_text()
     * @param \Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce
     * @param int $present_legal_form_code
     * @param string $present_legal_form_text
     */
    public function __construct(\Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce = null, $present_legal_form_code = null, $present_legal_form_text = null)
    {
        $this
            ->setChamber_of_commerce($chamber_of_commerce)
            ->setPresent_legal_form_code($present_legal_form_code)
            ->setPresent_legal_form_text($present_legal_form_text);
    }
    /**
     * Get chamber_of_commerce value
     * @return \Webservices\StructType\GCRChamberOfCommerce|null
     */
    public function getChamber_of_commerce()
    {
        return $this->chamber_of_commerce;
    }
    /**
     * Set chamber_of_commerce value
     * @param \Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce
     * @return \Webservices\StructType\GCRLiaisonOfficialData
     */
    public function setChamber_of_commerce(\Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce = null)
    {
        $this->chamber_of_commerce = $chamber_of_commerce;
        return $this;
    }
    /**
     * Get present_legal_form_code value
     * @return int|null
     */
    public function getPresent_legal_form_code()
    {
        return $this->present_legal_form_code;
    }
    /**
     * Set present_legal_form_code value
     * @param int $present_legal_form_code
     * @return \Webservices\StructType\GCRLiaisonOfficialData
     */
    public function setPresent_legal_form_code($present_legal_form_code = null)
    {
        // validation for constraint: int
        if (!is_null($present_legal_form_code) && !is_numeric($present_legal_form_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($present_legal_form_code)), __LINE__);
        }
        $this->present_legal_form_code = $present_legal_form_code;
        return $this;
    }
    /**
     * Get present_legal_form_text value
     * @return string|null
     */
    public function getPresent_legal_form_text()
    {
        return $this->present_legal_form_text;
    }
    /**
     * Set present_legal_form_text value
     * @param string $present_legal_form_text
     * @return \Webservices\StructType\GCRLiaisonOfficialData
     */
    public function setPresent_legal_form_text($present_legal_form_text = null)
    {
        // validation for constraint: string
        if (!is_null($present_legal_form_text) && !is_string($present_legal_form_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($present_legal_form_text)), __LINE__);
        }
        $this->present_legal_form_text = $present_legal_form_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRLiaisonOfficialData
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
