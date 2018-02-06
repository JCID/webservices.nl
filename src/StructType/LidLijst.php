<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LidLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class LidLijst extends AbstractStructBase
{
    /**
     * The leden
     * @var \Webservices\ArrayType\LidArray
     */
    public $leden;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for LidLijst
     * @uses LidLijst::setLeden()
     * @uses LidLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\LidArray $leden
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\LidArray $leden = null, $indicatie_compleet = null)
    {
        $this
            ->setLeden($leden)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get leden value
     * @return \Webservices\ArrayType\LidArray|null
     */
    public function getLeden()
    {
        return $this->leden;
    }
    /**
     * Set leden value
     * @param \Webservices\ArrayType\LidArray $leden
     * @return \Webservices\StructType\LidLijst
     */
    public function setLeden(\Webservices\ArrayType\LidArray $leden = null)
    {
        $this->leden = $leden;
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
     * @return \Webservices\StructType\LidLijst
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
     * @return \Webservices\StructType\LidLijst
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
