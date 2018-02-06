<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterV2GetBronDocumentRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GetBronDocumentRequestType extends AbstractStructBase
{
    /**
     * The register_code
     * @var string
     */
    public $register_code;
    /**
     * The deel
     * @var string
     */
    public $deel;
    /**
     * The nummer
     * @var string
     */
    public $nummer;
    /**
     * The reeks
     * @var string
     */
    public $reeks;
    /**
     * The soort_register
     * @var string
     */
    public $soort_register;
    /**
     * Constructor method for kadasterV2GetBronDocumentRequestType
     * @uses KadasterV2GetBronDocumentRequestType::setRegister_code()
     * @uses KadasterV2GetBronDocumentRequestType::setDeel()
     * @uses KadasterV2GetBronDocumentRequestType::setNummer()
     * @uses KadasterV2GetBronDocumentRequestType::setReeks()
     * @uses KadasterV2GetBronDocumentRequestType::setSoort_register()
     * @param string $register_code
     * @param string $deel
     * @param string $nummer
     * @param string $reeks
     * @param string $soort_register
     */
    public function __construct($register_code = null, $deel = null, $nummer = null, $reeks = null, $soort_register = null)
    {
        $this
            ->setRegister_code($register_code)
            ->setDeel($deel)
            ->setNummer($nummer)
            ->setReeks($reeks)
            ->setSoort_register($soort_register);
    }
    /**
     * Get register_code value
     * @return string|null
     */
    public function getRegister_code()
    {
        return $this->register_code;
    }
    /**
     * Set register_code value
     * @param string $register_code
     * @return \Webservices\StructType\KadasterV2GetBronDocumentRequestType
     */
    public function setRegister_code($register_code = null)
    {
        // validation for constraint: string
        if (!is_null($register_code) && !is_string($register_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($register_code)), __LINE__);
        }
        $this->register_code = $register_code;
        return $this;
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
     * @return \Webservices\StructType\KadasterV2GetBronDocumentRequestType
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
     * @return \Webservices\StructType\KadasterV2GetBronDocumentRequestType
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
     * @return \Webservices\StructType\KadasterV2GetBronDocumentRequestType
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
     * @return \Webservices\StructType\KadasterV2GetBronDocumentRequestType
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
     * @return \Webservices\StructType\KadasterV2GetBronDocumentRequestType
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
