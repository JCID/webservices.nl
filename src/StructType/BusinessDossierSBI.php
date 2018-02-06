<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDossierSBI StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessDossierSBI extends AbstractStructBase
{
    /**
     * The PrimarySBICode
     * @var string
     */
    public $PrimarySBICode;
    /**
     * The SecondarySBICode1
     * @var string
     */
    public $SecondarySBICode1;
    /**
     * The SecondarySBICode2
     * @var string
     */
    public $SecondarySBICode2;
    /**
     * The PrimarySBICodeText
     * @var string
     */
    public $PrimarySBICodeText;
    /**
     * The SecondarySBICode1Text
     * @var string
     */
    public $SecondarySBICode1Text;
    /**
     * The SecondarySBICode2Text
     * @var string
     */
    public $SecondarySBICode2Text;
    /**
     * Constructor method for BusinessDossierSBI
     * @uses BusinessDossierSBI::setPrimarySBICode()
     * @uses BusinessDossierSBI::setSecondarySBICode1()
     * @uses BusinessDossierSBI::setSecondarySBICode2()
     * @uses BusinessDossierSBI::setPrimarySBICodeText()
     * @uses BusinessDossierSBI::setSecondarySBICode1Text()
     * @uses BusinessDossierSBI::setSecondarySBICode2Text()
     * @param string $primarySBICode
     * @param string $secondarySBICode1
     * @param string $secondarySBICode2
     * @param string $primarySBICodeText
     * @param string $secondarySBICode1Text
     * @param string $secondarySBICode2Text
     */
    public function __construct($primarySBICode = null, $secondarySBICode1 = null, $secondarySBICode2 = null, $primarySBICodeText = null, $secondarySBICode1Text = null, $secondarySBICode2Text = null)
    {
        $this
            ->setPrimarySBICode($primarySBICode)
            ->setSecondarySBICode1($secondarySBICode1)
            ->setSecondarySBICode2($secondarySBICode2)
            ->setPrimarySBICodeText($primarySBICodeText)
            ->setSecondarySBICode1Text($secondarySBICode1Text)
            ->setSecondarySBICode2Text($secondarySBICode2Text);
    }
    /**
     * Get PrimarySBICode value
     * @return string|null
     */
    public function getPrimarySBICode()
    {
        return $this->PrimarySBICode;
    }
    /**
     * Set PrimarySBICode value
     * @param string $primarySBICode
     * @return \Webservices\StructType\BusinessDossierSBI
     */
    public function setPrimarySBICode($primarySBICode = null)
    {
        // validation for constraint: string
        if (!is_null($primarySBICode) && !is_string($primarySBICode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primarySBICode)), __LINE__);
        }
        $this->PrimarySBICode = $primarySBICode;
        return $this;
    }
    /**
     * Get SecondarySBICode1 value
     * @return string|null
     */
    public function getSecondarySBICode1()
    {
        return $this->SecondarySBICode1;
    }
    /**
     * Set SecondarySBICode1 value
     * @param string $secondarySBICode1
     * @return \Webservices\StructType\BusinessDossierSBI
     */
    public function setSecondarySBICode1($secondarySBICode1 = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode1) && !is_string($secondarySBICode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode1)), __LINE__);
        }
        $this->SecondarySBICode1 = $secondarySBICode1;
        return $this;
    }
    /**
     * Get SecondarySBICode2 value
     * @return string|null
     */
    public function getSecondarySBICode2()
    {
        return $this->SecondarySBICode2;
    }
    /**
     * Set SecondarySBICode2 value
     * @param string $secondarySBICode2
     * @return \Webservices\StructType\BusinessDossierSBI
     */
    public function setSecondarySBICode2($secondarySBICode2 = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode2) && !is_string($secondarySBICode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode2)), __LINE__);
        }
        $this->SecondarySBICode2 = $secondarySBICode2;
        return $this;
    }
    /**
     * Get PrimarySBICodeText value
     * @return string|null
     */
    public function getPrimarySBICodeText()
    {
        return $this->PrimarySBICodeText;
    }
    /**
     * Set PrimarySBICodeText value
     * @param string $primarySBICodeText
     * @return \Webservices\StructType\BusinessDossierSBI
     */
    public function setPrimarySBICodeText($primarySBICodeText = null)
    {
        // validation for constraint: string
        if (!is_null($primarySBICodeText) && !is_string($primarySBICodeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primarySBICodeText)), __LINE__);
        }
        $this->PrimarySBICodeText = $primarySBICodeText;
        return $this;
    }
    /**
     * Get SecondarySBICode1Text value
     * @return string|null
     */
    public function getSecondarySBICode1Text()
    {
        return $this->SecondarySBICode1Text;
    }
    /**
     * Set SecondarySBICode1Text value
     * @param string $secondarySBICode1Text
     * @return \Webservices\StructType\BusinessDossierSBI
     */
    public function setSecondarySBICode1Text($secondarySBICode1Text = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode1Text) && !is_string($secondarySBICode1Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode1Text)), __LINE__);
        }
        $this->SecondarySBICode1Text = $secondarySBICode1Text;
        return $this;
    }
    /**
     * Get SecondarySBICode2Text value
     * @return string|null
     */
    public function getSecondarySBICode2Text()
    {
        return $this->SecondarySBICode2Text;
    }
    /**
     * Set SecondarySBICode2Text value
     * @param string $secondarySBICode2Text
     * @return \Webservices\StructType\BusinessDossierSBI
     */
    public function setSecondarySBICode2Text($secondarySBICode2Text = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode2Text) && !is_string($secondarySBICode2Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode2Text)), __LINE__);
        }
        $this->SecondarySBICode2Text = $secondarySBICode2Text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessDossierSBI
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
