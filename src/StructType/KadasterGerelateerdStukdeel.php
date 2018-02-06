<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterGerelateerdStukdeel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterGerelateerdStukdeel extends AbstractStructBase
{
    /**
     * The aard_stukdeel_omschrijving
     * @var string
     */
    public $aard_stukdeel_omschrijving;
    /**
     * The stuk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\Stuk
     */
    public $stuk;
    /**
     * The gefiatteerd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $gefiatteerd;
    /**
     * Constructor method for kadasterGerelateerdStukdeel
     * @uses KadasterGerelateerdStukdeel::setAard_stukdeel_omschrijving()
     * @uses KadasterGerelateerdStukdeel::setStuk()
     * @uses KadasterGerelateerdStukdeel::setGefiatteerd()
     * @param string $aard_stukdeel_omschrijving
     * @param \Webservices\StructType\Stuk $stuk
     * @param bool $gefiatteerd
     */
    public function __construct($aard_stukdeel_omschrijving = null, \Webservices\StructType\Stuk $stuk = null, $gefiatteerd = null)
    {
        $this
            ->setAard_stukdeel_omschrijving($aard_stukdeel_omschrijving)
            ->setStuk($stuk)
            ->setGefiatteerd($gefiatteerd);
    }
    /**
     * Get aard_stukdeel_omschrijving value
     * @return string|null
     */
    public function getAard_stukdeel_omschrijving()
    {
        return $this->aard_stukdeel_omschrijving;
    }
    /**
     * Set aard_stukdeel_omschrijving value
     * @param string $aard_stukdeel_omschrijving
     * @return \Webservices\StructType\KadasterGerelateerdStukdeel
     */
    public function setAard_stukdeel_omschrijving($aard_stukdeel_omschrijving = null)
    {
        // validation for constraint: string
        if (!is_null($aard_stukdeel_omschrijving) && !is_string($aard_stukdeel_omschrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard_stukdeel_omschrijving)), __LINE__);
        }
        $this->aard_stukdeel_omschrijving = $aard_stukdeel_omschrijving;
        return $this;
    }
    /**
     * Get stuk value
     * @return \Webservices\StructType\Stuk|null
     */
    public function getStuk()
    {
        return $this->stuk;
    }
    /**
     * Set stuk value
     * @param \Webservices\StructType\Stuk $stuk
     * @return \Webservices\StructType\KadasterGerelateerdStukdeel
     */
    public function setStuk(\Webservices\StructType\Stuk $stuk = null)
    {
        $this->stuk = $stuk;
        return $this;
    }
    /**
     * Get gefiatteerd value
     * @return bool|null
     */
    public function getGefiatteerd()
    {
        return $this->gefiatteerd;
    }
    /**
     * Set gefiatteerd value
     * @param bool $gefiatteerd
     * @return \Webservices\StructType\KadasterGerelateerdStukdeel
     */
    public function setGefiatteerd($gefiatteerd = null)
    {
        // validation for constraint: boolean
        if (!is_null($gefiatteerd) && !is_bool($gefiatteerd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gefiatteerd)), __LINE__);
        }
        $this->gefiatteerd = $gefiatteerd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterGerelateerdStukdeel
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
