<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCROfficialData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCROfficialData extends AbstractStructBase
{
    /**
     * The chamber_of_commerce
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRChamberOfCommerce
     */
    public $chamber_of_commerce;
    /**
     * The vat_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vat_number;
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
     * The present_legal_form_fine_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $present_legal_form_fine_code;
    /**
     * The present_legal_form_fine_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $present_legal_form_fine_text;
    /**
     * The number_of_non_executive_partners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number_of_non_executive_partners;
    /**
     * The publication_duty_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $publication_duty_code;
    /**
     * The publication_duty_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $publication_duty_text;
    /**
     * The capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCapitalArray
     */
    public $capital;
    /**
     * The founded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFoundedArray
     */
    public $founded;
    /**
     * The discontinuance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRDiscontinuance
     */
    public $discontinuance;
    /**
     * Constructor method for GCROfficialData
     * @uses GCROfficialData::setChamber_of_commerce()
     * @uses GCROfficialData::setVat_number()
     * @uses GCROfficialData::setPresent_legal_form_code()
     * @uses GCROfficialData::setPresent_legal_form_text()
     * @uses GCROfficialData::setPresent_legal_form_fine_code()
     * @uses GCROfficialData::setPresent_legal_form_fine_text()
     * @uses GCROfficialData::setNumber_of_non_executive_partners()
     * @uses GCROfficialData::setPublication_duty_code()
     * @uses GCROfficialData::setPublication_duty_text()
     * @uses GCROfficialData::setCapital()
     * @uses GCROfficialData::setFounded()
     * @uses GCROfficialData::setDiscontinuance()
     * @param \Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce
     * @param string $vat_number
     * @param int $present_legal_form_code
     * @param string $present_legal_form_text
     * @param int $present_legal_form_fine_code
     * @param string $present_legal_form_fine_text
     * @param string $number_of_non_executive_partners
     * @param string $publication_duty_code
     * @param string $publication_duty_text
     * @param \Webservices\ArrayType\GCRCapitalArray $capital
     * @param \Webservices\ArrayType\GCRFoundedArray $founded
     * @param \Webservices\StructType\GCRDiscontinuance $discontinuance
     */
    public function __construct(\Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce = null, $vat_number = null, $present_legal_form_code = null, $present_legal_form_text = null, $present_legal_form_fine_code = null, $present_legal_form_fine_text = null, $number_of_non_executive_partners = null, $publication_duty_code = null, $publication_duty_text = null, \Webservices\ArrayType\GCRCapitalArray $capital = null, \Webservices\ArrayType\GCRFoundedArray $founded = null, \Webservices\StructType\GCRDiscontinuance $discontinuance = null)
    {
        $this
            ->setChamber_of_commerce($chamber_of_commerce)
            ->setVat_number($vat_number)
            ->setPresent_legal_form_code($present_legal_form_code)
            ->setPresent_legal_form_text($present_legal_form_text)
            ->setPresent_legal_form_fine_code($present_legal_form_fine_code)
            ->setPresent_legal_form_fine_text($present_legal_form_fine_text)
            ->setNumber_of_non_executive_partners($number_of_non_executive_partners)
            ->setPublication_duty_code($publication_duty_code)
            ->setPublication_duty_text($publication_duty_text)
            ->setCapital($capital)
            ->setFounded($founded)
            ->setDiscontinuance($discontinuance);
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
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setChamber_of_commerce(\Webservices\StructType\GCRChamberOfCommerce $chamber_of_commerce = null)
    {
        $this->chamber_of_commerce = $chamber_of_commerce;
        return $this;
    }
    /**
     * Get vat_number value
     * @return string|null
     */
    public function getVat_number()
    {
        return $this->vat_number;
    }
    /**
     * Set vat_number value
     * @param string $vat_number
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setVat_number($vat_number = null)
    {
        // validation for constraint: string
        if (!is_null($vat_number) && !is_string($vat_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vat_number)), __LINE__);
        }
        $this->vat_number = $vat_number;
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
     * @return \Webservices\StructType\GCROfficialData
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
     * @return \Webservices\StructType\GCROfficialData
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
     * Get present_legal_form_fine_code value
     * @return int|null
     */
    public function getPresent_legal_form_fine_code()
    {
        return $this->present_legal_form_fine_code;
    }
    /**
     * Set present_legal_form_fine_code value
     * @param int $present_legal_form_fine_code
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setPresent_legal_form_fine_code($present_legal_form_fine_code = null)
    {
        // validation for constraint: int
        if (!is_null($present_legal_form_fine_code) && !is_numeric($present_legal_form_fine_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($present_legal_form_fine_code)), __LINE__);
        }
        $this->present_legal_form_fine_code = $present_legal_form_fine_code;
        return $this;
    }
    /**
     * Get present_legal_form_fine_text value
     * @return string|null
     */
    public function getPresent_legal_form_fine_text()
    {
        return $this->present_legal_form_fine_text;
    }
    /**
     * Set present_legal_form_fine_text value
     * @param string $present_legal_form_fine_text
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setPresent_legal_form_fine_text($present_legal_form_fine_text = null)
    {
        // validation for constraint: string
        if (!is_null($present_legal_form_fine_text) && !is_string($present_legal_form_fine_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($present_legal_form_fine_text)), __LINE__);
        }
        $this->present_legal_form_fine_text = $present_legal_form_fine_text;
        return $this;
    }
    /**
     * Get number_of_non_executive_partners value
     * @return string|null
     */
    public function getNumber_of_non_executive_partners()
    {
        return $this->number_of_non_executive_partners;
    }
    /**
     * Set number_of_non_executive_partners value
     * @param string $number_of_non_executive_partners
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setNumber_of_non_executive_partners($number_of_non_executive_partners = null)
    {
        // validation for constraint: string
        if (!is_null($number_of_non_executive_partners) && !is_string($number_of_non_executive_partners)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number_of_non_executive_partners)), __LINE__);
        }
        $this->number_of_non_executive_partners = $number_of_non_executive_partners;
        return $this;
    }
    /**
     * Get publication_duty_code value
     * @return string|null
     */
    public function getPublication_duty_code()
    {
        return $this->publication_duty_code;
    }
    /**
     * Set publication_duty_code value
     * @param string $publication_duty_code
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setPublication_duty_code($publication_duty_code = null)
    {
        // validation for constraint: string
        if (!is_null($publication_duty_code) && !is_string($publication_duty_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publication_duty_code)), __LINE__);
        }
        $this->publication_duty_code = $publication_duty_code;
        return $this;
    }
    /**
     * Get publication_duty_text value
     * @return string|null
     */
    public function getPublication_duty_text()
    {
        return $this->publication_duty_text;
    }
    /**
     * Set publication_duty_text value
     * @param string $publication_duty_text
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setPublication_duty_text($publication_duty_text = null)
    {
        // validation for constraint: string
        if (!is_null($publication_duty_text) && !is_string($publication_duty_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publication_duty_text)), __LINE__);
        }
        $this->publication_duty_text = $publication_duty_text;
        return $this;
    }
    /**
     * Get capital value
     * @return \Webservices\ArrayType\GCRCapitalArray|null
     */
    public function getCapital()
    {
        return $this->capital;
    }
    /**
     * Set capital value
     * @param \Webservices\ArrayType\GCRCapitalArray $capital
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setCapital(\Webservices\ArrayType\GCRCapitalArray $capital = null)
    {
        $this->capital = $capital;
        return $this;
    }
    /**
     * Get founded value
     * @return \Webservices\ArrayType\GCRFoundedArray|null
     */
    public function getFounded()
    {
        return $this->founded;
    }
    /**
     * Set founded value
     * @param \Webservices\ArrayType\GCRFoundedArray $founded
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setFounded(\Webservices\ArrayType\GCRFoundedArray $founded = null)
    {
        $this->founded = $founded;
        return $this;
    }
    /**
     * Get discontinuance value
     * @return \Webservices\StructType\GCRDiscontinuance|null
     */
    public function getDiscontinuance()
    {
        return $this->discontinuance;
    }
    /**
     * Set discontinuance value
     * @param \Webservices\StructType\GCRDiscontinuance $discontinuance
     * @return \Webservices\StructType\GCROfficialData
     */
    public function setDiscontinuance(\Webservices\StructType\GCRDiscontinuance $discontinuance = null)
    {
        $this->discontinuance = $discontinuance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCROfficialData
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
