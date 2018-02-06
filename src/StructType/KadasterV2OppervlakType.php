<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2OppervlakType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2OppervlakType extends AbstractStructBase
{
    /**
     * The waarde
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $waarde;
    /**
     * The soort_grootte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $soort_grootte;
    /**
     * Constructor method for KadasterV2OppervlakType
     * @uses KadasterV2OppervlakType::setWaarde()
     * @uses KadasterV2OppervlakType::setSoort_grootte()
     * @param float $waarde
     * @param string $soort_grootte
     */
    public function __construct($waarde = null, $soort_grootte = null)
    {
        $this
            ->setWaarde($waarde)
            ->setSoort_grootte($soort_grootte);
    }
    /**
     * Get waarde value
     * @return float|null
     */
    public function getWaarde()
    {
        return $this->waarde;
    }
    /**
     * Set waarde value
     * @param float $waarde
     * @return \Webservices\StructType\KadasterV2OppervlakType
     */
    public function setWaarde($waarde = null)
    {
        $this->waarde = $waarde;
        return $this;
    }
    /**
     * Get soort_grootte value
     * @return string|null
     */
    public function getSoort_grootte()
    {
        return $this->soort_grootte;
    }
    /**
     * Set soort_grootte value
     * @param string $soort_grootte
     * @return \Webservices\StructType\KadasterV2OppervlakType
     */
    public function setSoort_grootte($soort_grootte = null)
    {
        // validation for constraint: string
        if (!is_null($soort_grootte) && !is_string($soort_grootte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($soort_grootte)), __LINE__);
        }
        $this->soort_grootte = $soort_grootte;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2OppervlakType
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
