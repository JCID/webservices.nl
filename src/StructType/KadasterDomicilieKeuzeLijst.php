<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterDomicilieKeuzeLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterDomicilieKeuzeLijst extends AbstractStructBase
{
    /**
     * The domicilie_keuzes
     * @var \Webservices\ArrayType\KadasterDomicilieKeuzeArray
     */
    public $domicilie_keuzes;
    /**
     * The indicatie_compleet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for kadasterDomicilieKeuzeLijst
     * @uses KadasterDomicilieKeuzeLijst::setDomicilie_keuzes()
     * @uses KadasterDomicilieKeuzeLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\KadasterDomicilieKeuzeArray $domicilie_keuzes
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\KadasterDomicilieKeuzeArray $domicilie_keuzes = null, $indicatie_compleet = null)
    {
        $this
            ->setDomicilie_keuzes($domicilie_keuzes)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get domicilie_keuzes value
     * @return \Webservices\ArrayType\KadasterDomicilieKeuzeArray|null
     */
    public function getDomicilie_keuzes()
    {
        return $this->domicilie_keuzes;
    }
    /**
     * Set domicilie_keuzes value
     * @param \Webservices\ArrayType\KadasterDomicilieKeuzeArray $domicilie_keuzes
     * @return \Webservices\StructType\KadasterDomicilieKeuzeLijst
     */
    public function setDomicilie_keuzes(\Webservices\ArrayType\KadasterDomicilieKeuzeArray $domicilie_keuzes = null)
    {
        $this->domicilie_keuzes = $domicilie_keuzes;
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
     * @return \Webservices\StructType\KadasterDomicilieKeuzeLijst
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
     * @return \Webservices\StructType\KadasterDomicilieKeuzeLijst
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
