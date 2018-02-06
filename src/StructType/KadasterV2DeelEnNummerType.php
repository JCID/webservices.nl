<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2DeelEnNummerType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2DeelEnNummerType extends AbstractStructBase
{
    /**
     * The deel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deel;
    /**
     * The nummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nummer;
    /**
     * The reeks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reeks;
    /**
     * The registercode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $registercode;
    /**
     * The soort_register
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $soort_register;
    /**
     * Constructor method for KadasterV2DeelEnNummerType
     * @uses KadasterV2DeelEnNummerType::setDeel()
     * @uses KadasterV2DeelEnNummerType::setNummer()
     * @uses KadasterV2DeelEnNummerType::setReeks()
     * @uses KadasterV2DeelEnNummerType::setRegistercode()
     * @uses KadasterV2DeelEnNummerType::setSoort_register()
     * @param string $deel
     * @param string $nummer
     * @param string $reeks
     * @param string $registercode
     * @param string $soort_register
     */
    public function __construct($deel = null, $nummer = null, $reeks = null, $registercode = null, $soort_register = null)
    {
        $this
            ->setDeel($deel)
            ->setNummer($nummer)
            ->setReeks($reeks)
            ->setRegistercode($registercode)
            ->setSoort_register($soort_register);
    }
    /**
     * Get deel value
     * @return string|null
     */
    public function getDeel()
    {
        return $this->deel;
    }
    /**
     * Set deel value
     * @param string $deel
     * @return \Webservices\StructType\KadasterV2DeelEnNummerType
     */
    public function setDeel($deel = null)
    {
        // validation for constraint: string
        if (!is_null($deel) && !is_string($deel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deel)), __LINE__);
        }
        $this->deel = $deel;
        return $this;
    }
    /**
     * Get nummer value
     * @return string|null
     */
    public function getNummer()
    {
        return $this->nummer;
    }
    /**
     * Set nummer value
     * @param string $nummer
     * @return \Webservices\StructType\KadasterV2DeelEnNummerType
     */
    public function setNummer($nummer = null)
    {
        // validation for constraint: string
        if (!is_null($nummer) && !is_string($nummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nummer)), __LINE__);
        }
        $this->nummer = $nummer;
        return $this;
    }
    /**
     * Get reeks value
     * @return string|null
     */
    public function getReeks()
    {
        return $this->reeks;
    }
    /**
     * Set reeks value
     * @param string $reeks
     * @return \Webservices\StructType\KadasterV2DeelEnNummerType
     */
    public function setReeks($reeks = null)
    {
        // validation for constraint: string
        if (!is_null($reeks) && !is_string($reeks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reeks)), __LINE__);
        }
        $this->reeks = $reeks;
        return $this;
    }
    /**
     * Get registercode value
     * @return string|null
     */
    public function getRegistercode()
    {
        return $this->registercode;
    }
    /**
     * Set registercode value
     * @param string $registercode
     * @return \Webservices\StructType\KadasterV2DeelEnNummerType
     */
    public function setRegistercode($registercode = null)
    {
        // validation for constraint: string
        if (!is_null($registercode) && !is_string($registercode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registercode)), __LINE__);
        }
        $this->registercode = $registercode;
        return $this;
    }
    /**
     * Get soort_register value
     * @return string|null
     */
    public function getSoort_register()
    {
        return $this->soort_register;
    }
    /**
     * Set soort_register value
     * @param string $soort_register
     * @return \Webservices\StructType\KadasterV2DeelEnNummerType
     */
    public function setSoort_register($soort_register = null)
    {
        // validation for constraint: string
        if (!is_null($soort_register) && !is_string($soort_register)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($soort_register)), __LINE__);
        }
        $this->soort_register = $soort_register;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2DeelEnNummerType
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
