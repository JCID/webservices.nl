<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2TijdstipType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2TijdstipType extends AbstractStructBase
{
    /**
     * The datum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum;
    /**
     * The tijd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $tijd;
    /**
     * Constructor method for KadasterV2TijdstipType
     * @uses KadasterV2TijdstipType::setDatum()
     * @uses KadasterV2TijdstipType::setTijd()
     * @param string $datum
     * @param string $tijd
     */
    public function __construct($datum = null, $tijd = null)
    {
        $this
            ->setDatum($datum)
            ->setTijd($tijd);
    }
    /**
     * Get datum value
     * @return string|null
     */
    public function getDatum()
    {
        return $this->datum;
    }
    /**
     * Set datum value
     * @param string $datum
     * @return \Webservices\StructType\KadasterV2TijdstipType
     */
    public function setDatum($datum = null)
    {
        // validation for constraint: string
        if (!is_null($datum) && !is_string($datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum)), __LINE__);
        }
        $this->datum = $datum;
        return $this;
    }
    /**
     * Get tijd value
     * @return string|null
     */
    public function getTijd()
    {
        return $this->tijd;
    }
    /**
     * Set tijd value
     * @param string $tijd
     * @return \Webservices\StructType\KadasterV2TijdstipType
     */
    public function setTijd($tijd = null)
    {
        // validation for constraint: string
        if (!is_null($tijd) && !is_string($tijd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tijd)), __LINE__);
        }
        $this->tijd = $tijd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2TijdstipType
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
