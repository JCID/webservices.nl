<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRPersonalDetails StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRPersonalDetails extends AbstractStructBase
{
    /**
     * The gender_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gender_code;
    /**
     * The gender_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gender_text;
    /**
     * The titles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRTitleArray
     */
    public $titles;
    /**
     * The initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $initials;
    /**
     * The prefixes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $prefixes;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * Constructor method for GCRPersonalDetails
     * @uses GCRPersonalDetails::setGender_code()
     * @uses GCRPersonalDetails::setGender_text()
     * @uses GCRPersonalDetails::setTitles()
     * @uses GCRPersonalDetails::setInitials()
     * @uses GCRPersonalDetails::setPrefixes()
     * @uses GCRPersonalDetails::setName()
     * @param string $gender_code
     * @param string $gender_text
     * @param \Webservices\ArrayType\GCRTitleArray $titles
     * @param string $initials
     * @param string $prefixes
     * @param string $name
     */
    public function __construct($gender_code = null, $gender_text = null, \Webservices\ArrayType\GCRTitleArray $titles = null, $initials = null, $prefixes = null, $name = null)
    {
        $this
            ->setGender_code($gender_code)
            ->setGender_text($gender_text)
            ->setTitles($titles)
            ->setInitials($initials)
            ->setPrefixes($prefixes)
            ->setName($name);
    }
    /**
     * Get gender_code value
     * @return string|null
     */
    public function getGender_code()
    {
        return $this->gender_code;
    }
    /**
     * Set gender_code value
     * @param string $gender_code
     * @return \Webservices\StructType\GCRPersonalDetails
     */
    public function setGender_code($gender_code = null)
    {
        // validation for constraint: string
        if (!is_null($gender_code) && !is_string($gender_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender_code)), __LINE__);
        }
        $this->gender_code = $gender_code;
        return $this;
    }
    /**
     * Get gender_text value
     * @return string|null
     */
    public function getGender_text()
    {
        return $this->gender_text;
    }
    /**
     * Set gender_text value
     * @param string $gender_text
     * @return \Webservices\StructType\GCRPersonalDetails
     */
    public function setGender_text($gender_text = null)
    {
        // validation for constraint: string
        if (!is_null($gender_text) && !is_string($gender_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender_text)), __LINE__);
        }
        $this->gender_text = $gender_text;
        return $this;
    }
    /**
     * Get titles value
     * @return \Webservices\ArrayType\GCRTitleArray|null
     */
    public function getTitles()
    {
        return $this->titles;
    }
    /**
     * Set titles value
     * @param \Webservices\ArrayType\GCRTitleArray $titles
     * @return \Webservices\StructType\GCRPersonalDetails
     */
    public function setTitles(\Webservices\ArrayType\GCRTitleArray $titles = null)
    {
        $this->titles = $titles;
        return $this;
    }
    /**
     * Get initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->initials;
    }
    /**
     * Set initials value
     * @param string $initials
     * @return \Webservices\StructType\GCRPersonalDetails
     */
    public function setInitials($initials = null)
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($initials)), __LINE__);
        }
        $this->initials = $initials;
        return $this;
    }
    /**
     * Get prefixes value
     * @return string|null
     */
    public function getPrefixes()
    {
        return $this->prefixes;
    }
    /**
     * Set prefixes value
     * @param string $prefixes
     * @return \Webservices\StructType\GCRPersonalDetails
     */
    public function setPrefixes($prefixes = null)
    {
        // validation for constraint: string
        if (!is_null($prefixes) && !is_string($prefixes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefixes)), __LINE__);
        }
        $this->prefixes = $prefixes;
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
     * @return \Webservices\StructType\GCRPersonalDetails
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRPersonalDetails
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
