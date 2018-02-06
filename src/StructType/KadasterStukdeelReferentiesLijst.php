<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterStukdeelReferentiesLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterStukdeelReferentiesLijst extends AbstractStructBase
{
    /**
     * The stukdelen
     * @var \Webservices\ArrayType\StringArray
     */
    public $stukdelen;
    /**
     * The indicatie_compleet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for kadasterStukdeelReferentiesLijst
     * @uses KadasterStukdeelReferentiesLijst::setStukdelen()
     * @uses KadasterStukdeelReferentiesLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\StringArray $stukdelen
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\StringArray $stukdelen = null, $indicatie_compleet = null)
    {
        $this
            ->setStukdelen($stukdelen)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get stukdelen value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getStukdelen()
    {
        return $this->stukdelen;
    }
    /**
     * Set stukdelen value
     * @param \Webservices\ArrayType\StringArray $stukdelen
     * @return \Webservices\StructType\KadasterStukdeelReferentiesLijst
     */
    public function setStukdelen(\Webservices\ArrayType\StringArray $stukdelen = null)
    {
        $this->stukdelen = $stukdelen;
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
     * @return \Webservices\StructType\KadasterStukdeelReferentiesLijst
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
     * @return \Webservices\StructType\KadasterStukdeelReferentiesLijst
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
