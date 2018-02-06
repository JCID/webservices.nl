<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBOOrganisation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOOrganisation extends AbstractStructBase
{
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_number;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The legal_form_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_code;
    /**
     * The legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_text;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The extract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessUBOExtract
     */
    public $extract;
    /**
     * Constructor method for DutchBusinessUBOOrganisation
     * @uses DutchBusinessUBOOrganisation::setDossier_number()
     * @uses DutchBusinessUBOOrganisation::setName()
     * @uses DutchBusinessUBOOrganisation::setLegal_form_code()
     * @uses DutchBusinessUBOOrganisation::setLegal_form_text()
     * @uses DutchBusinessUBOOrganisation::setCity()
     * @uses DutchBusinessUBOOrganisation::setExtract()
     * @param string $dossier_number
     * @param string $name
     * @param string $legal_form_code
     * @param string $legal_form_text
     * @param string $city
     * @param \Webservices\StructType\DutchBusinessUBOExtract $extract
     */
    public function __construct($dossier_number = null, $name = null, $legal_form_code = null, $legal_form_text = null, $city = null, \Webservices\StructType\DutchBusinessUBOExtract $extract = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setName($name)
            ->setLegal_form_code($legal_form_code)
            ->setLegal_form_text($legal_form_text)
            ->setCity($city)
            ->setExtract($extract);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessUBOOrganisation
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\DutchBusinessUBOOrganisation
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get legal_form_code value
     * @return string|null
     */
    public function getLegal_form_code()
    {
        return $this->legal_form_code;
    }
    /**
     * Set legal_form_code value
     * @param string $legal_form_code
     * @return \Webservices\StructType\DutchBusinessUBOOrganisation
     */
    public function setLegal_form_code($legal_form_code = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_code) && !is_string($legal_form_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_code)), __LINE__);
        }
        $this->legal_form_code = $legal_form_code;
        return $this;
    }
    /**
     * Get legal_form_text value
     * @return string|null
     */
    public function getLegal_form_text()
    {
        return $this->legal_form_text;
    }
    /**
     * Set legal_form_text value
     * @param string $legal_form_text
     * @return \Webservices\StructType\DutchBusinessUBOOrganisation
     */
    public function setLegal_form_text($legal_form_text = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_text) && !is_string($legal_form_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_text)), __LINE__);
        }
        $this->legal_form_text = $legal_form_text;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Webservices\StructType\DutchBusinessUBOOrganisation
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get extract value
     * @return \Webservices\StructType\DutchBusinessUBOExtract|null
     */
    public function getExtract()
    {
        return $this->extract;
    }
    /**
     * Set extract value
     * @param \Webservices\StructType\DutchBusinessUBOExtract $extract
     * @return \Webservices\StructType\DutchBusinessUBOOrganisation
     */
    public function setExtract(\Webservices\StructType\DutchBusinessUBOExtract $extract = null)
    {
        $this->extract = $extract;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOOrganisation
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
