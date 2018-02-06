<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2RedenVerzoek StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2RedenVerzoek extends AbstractStructBase
{
    /**
     * The reden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reden;
    /**
     * The reden_omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reden_omschrijving;
    /**
     * Constructor method for KadasterV2RedenVerzoek
     * @uses KadasterV2RedenVerzoek::setReden()
     * @uses KadasterV2RedenVerzoek::setReden_omschrijving()
     * @param string $reden
     * @param string $reden_omschrijving
     */
    public function __construct($reden = null, $reden_omschrijving = null)
    {
        $this
            ->setReden($reden)
            ->setReden_omschrijving($reden_omschrijving);
    }
    /**
     * Get reden value
     * @return string|null
     */
    public function getReden()
    {
        return $this->reden;
    }
    /**
     * Set reden value
     * @param string $reden
     * @return \Webservices\StructType\KadasterV2RedenVerzoek
     */
    public function setReden($reden = null)
    {
        // validation for constraint: string
        if (!is_null($reden) && !is_string($reden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reden)), __LINE__);
        }
        $this->reden = $reden;
        return $this;
    }
    /**
     * Get reden_omschrijving value
     * @return string|null
     */
    public function getReden_omschrijving()
    {
        return $this->reden_omschrijving;
    }
    /**
     * Set reden_omschrijving value
     * @param string $reden_omschrijving
     * @return \Webservices\StructType\KadasterV2RedenVerzoek
     */
    public function setReden_omschrijving($reden_omschrijving = null)
    {
        // validation for constraint: string
        if (!is_null($reden_omschrijving) && !is_string($reden_omschrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reden_omschrijving)), __LINE__);
        }
        $this->reden_omschrijving = $reden_omschrijving;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2RedenVerzoek
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
