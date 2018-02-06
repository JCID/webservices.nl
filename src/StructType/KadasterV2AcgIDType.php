<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2AcgIDType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2AcgIDType extends AbstractStructBase
{
    /**
     * The akr_registercode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $akr_registercode;
    /**
     * The akr_stukdeel1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $akr_stukdeel1;
    /**
     * The akr_stukdeel2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $akr_stukdeel2;
    /**
     * The akr_stukdeel3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $akr_stukdeel3;
    /**
     * The volgnummer_staat75
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $volgnummer_staat75;
    /**
     * Constructor method for KadasterV2AcgIDType
     * @uses KadasterV2AcgIDType::setAkr_registercode()
     * @uses KadasterV2AcgIDType::setAkr_stukdeel1()
     * @uses KadasterV2AcgIDType::setAkr_stukdeel2()
     * @uses KadasterV2AcgIDType::setAkr_stukdeel3()
     * @uses KadasterV2AcgIDType::setVolgnummer_staat75()
     * @param string $akr_registercode
     * @param string $akr_stukdeel1
     * @param string $akr_stukdeel2
     * @param string $akr_stukdeel3
     * @param int $volgnummer_staat75
     */
    public function __construct($akr_registercode = null, $akr_stukdeel1 = null, $akr_stukdeel2 = null, $akr_stukdeel3 = null, $volgnummer_staat75 = null)
    {
        $this
            ->setAkr_registercode($akr_registercode)
            ->setAkr_stukdeel1($akr_stukdeel1)
            ->setAkr_stukdeel2($akr_stukdeel2)
            ->setAkr_stukdeel3($akr_stukdeel3)
            ->setVolgnummer_staat75($volgnummer_staat75);
    }
    /**
     * Get akr_registercode value
     * @return string|null
     */
    public function getAkr_registercode()
    {
        return $this->akr_registercode;
    }
    /**
     * Set akr_registercode value
     * @param string $akr_registercode
     * @return \Webservices\StructType\KadasterV2AcgIDType
     */
    public function setAkr_registercode($akr_registercode = null)
    {
        // validation for constraint: string
        if (!is_null($akr_registercode) && !is_string($akr_registercode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($akr_registercode)), __LINE__);
        }
        $this->akr_registercode = $akr_registercode;
        return $this;
    }
    /**
     * Get akr_stukdeel1 value
     * @return string|null
     */
    public function getAkr_stukdeel1()
    {
        return $this->akr_stukdeel1;
    }
    /**
     * Set akr_stukdeel1 value
     * @param string $akr_stukdeel1
     * @return \Webservices\StructType\KadasterV2AcgIDType
     */
    public function setAkr_stukdeel1($akr_stukdeel1 = null)
    {
        // validation for constraint: string
        if (!is_null($akr_stukdeel1) && !is_string($akr_stukdeel1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($akr_stukdeel1)), __LINE__);
        }
        $this->akr_stukdeel1 = $akr_stukdeel1;
        return $this;
    }
    /**
     * Get akr_stukdeel2 value
     * @return string|null
     */
    public function getAkr_stukdeel2()
    {
        return $this->akr_stukdeel2;
    }
    /**
     * Set akr_stukdeel2 value
     * @param string $akr_stukdeel2
     * @return \Webservices\StructType\KadasterV2AcgIDType
     */
    public function setAkr_stukdeel2($akr_stukdeel2 = null)
    {
        // validation for constraint: string
        if (!is_null($akr_stukdeel2) && !is_string($akr_stukdeel2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($akr_stukdeel2)), __LINE__);
        }
        $this->akr_stukdeel2 = $akr_stukdeel2;
        return $this;
    }
    /**
     * Get akr_stukdeel3 value
     * @return string|null
     */
    public function getAkr_stukdeel3()
    {
        return $this->akr_stukdeel3;
    }
    /**
     * Set akr_stukdeel3 value
     * @param string $akr_stukdeel3
     * @return \Webservices\StructType\KadasterV2AcgIDType
     */
    public function setAkr_stukdeel3($akr_stukdeel3 = null)
    {
        // validation for constraint: string
        if (!is_null($akr_stukdeel3) && !is_string($akr_stukdeel3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($akr_stukdeel3)), __LINE__);
        }
        $this->akr_stukdeel3 = $akr_stukdeel3;
        return $this;
    }
    /**
     * Get volgnummer_staat75 value
     * @return int|null
     */
    public function getVolgnummer_staat75()
    {
        return $this->volgnummer_staat75;
    }
    /**
     * Set volgnummer_staat75 value
     * @param int $volgnummer_staat75
     * @return \Webservices\StructType\KadasterV2AcgIDType
     */
    public function setVolgnummer_staat75($volgnummer_staat75 = null)
    {
        // validation for constraint: int
        if (!is_null($volgnummer_staat75) && !is_numeric($volgnummer_staat75)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($volgnummer_staat75)), __LINE__);
        }
        $this->volgnummer_staat75 = $volgnummer_staat75;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2AcgIDType
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
