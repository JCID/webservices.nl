<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AantekeningRechtLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AantekeningRechtLijst extends AbstractStructBase
{
    /**
     * The aantekeningen_recht
     * @var \Webservices\ArrayType\AantekeningRechtArray
     */
    public $aantekeningen_recht;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for AantekeningRechtLijst
     * @uses AantekeningRechtLijst::setAantekeningen_recht()
     * @uses AantekeningRechtLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\AantekeningRechtArray $aantekeningen_recht
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\AantekeningRechtArray $aantekeningen_recht = null, $indicatie_compleet = null)
    {
        $this
            ->setAantekeningen_recht($aantekeningen_recht)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get aantekeningen_recht value
     * @return \Webservices\ArrayType\AantekeningRechtArray|null
     */
    public function getAantekeningen_recht()
    {
        return $this->aantekeningen_recht;
    }
    /**
     * Set aantekeningen_recht value
     * @param \Webservices\ArrayType\AantekeningRechtArray $aantekeningen_recht
     * @return \Webservices\StructType\AantekeningRechtLijst
     */
    public function setAantekeningen_recht(\Webservices\ArrayType\AantekeningRechtArray $aantekeningen_recht = null)
    {
        $this->aantekeningen_recht = $aantekeningen_recht;
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
     * @return \Webservices\StructType\AantekeningRechtLijst
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
     * @return \Webservices\StructType\AantekeningRechtLijst
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
