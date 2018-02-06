<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AantekeningKadastraalObjectLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AantekeningKadastraalObjectLijst extends AbstractStructBase
{
    /**
     * The aantekeningen
     * @var \Webservices\ArrayType\AantekeningKadastraalObjectArray
     */
    public $aantekeningen;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for AantekeningKadastraalObjectLijst
     * @uses AantekeningKadastraalObjectLijst::setAantekeningen()
     * @uses AantekeningKadastraalObjectLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\AantekeningKadastraalObjectArray $aantekeningen
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\AantekeningKadastraalObjectArray $aantekeningen = null, $indicatie_compleet = null)
    {
        $this
            ->setAantekeningen($aantekeningen)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get aantekeningen value
     * @return \Webservices\ArrayType\AantekeningKadastraalObjectArray|null
     */
    public function getAantekeningen()
    {
        return $this->aantekeningen;
    }
    /**
     * Set aantekeningen value
     * @param \Webservices\ArrayType\AantekeningKadastraalObjectArray $aantekeningen
     * @return \Webservices\StructType\AantekeningKadastraalObjectLijst
     */
    public function setAantekeningen(\Webservices\ArrayType\AantekeningKadastraalObjectArray $aantekeningen = null)
    {
        $this->aantekeningen = $aantekeningen;
        return $this;
    }
    /**
     * Get indicatie_compleet value
     * @return bool|null
     */
    public function getIndicatie_compleet()
    {
        return $this->indicatie_compleet;
    }
    /**
     * Set indicatie_compleet value
     * @param bool $indicatie_compleet
     * @return \Webservices\StructType\AantekeningKadastraalObjectLijst
     */
    public function setIndicatie_compleet($indicatie_compleet = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_compleet) && !is_bool($indicatie_compleet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_compleet)), __LINE__);
        }
        $this->indicatie_compleet = $indicatie_compleet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AantekeningKadastraalObjectLijst
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
