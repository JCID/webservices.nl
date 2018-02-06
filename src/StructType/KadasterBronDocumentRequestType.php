<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterBronDocumentRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterBronDocumentRequestType extends AbstractStructBase
{
    /**
     * The aanduiding_soort_register
     * @var string
     */
    public $aanduiding_soort_register;
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
     * The format
     * @var string
     */
    public $format;
    /**
     * Constructor method for kadasterBronDocumentRequestType
     * @uses KadasterBronDocumentRequestType::setAanduiding_soort_register()
     * @uses KadasterBronDocumentRequestType::setDeel()
     * @uses KadasterBronDocumentRequestType::setNummer()
     * @uses KadasterBronDocumentRequestType::setReeks()
     * @uses KadasterBronDocumentRequestType::setFormat()
     * @param string $aanduiding_soort_register
     * @param string $deel
     * @param string $nummer
     * @param string $reeks
     * @param string $format
     */
    public function __construct($aanduiding_soort_register = null, $deel = null, $nummer = null, $reeks = null, $format = null)
    {
        $this
            ->setAanduiding_soort_register($aanduiding_soort_register)
            ->setDeel($deel)
            ->setNummer($nummer)
            ->setReeks($reeks)
            ->setFormat($format);
    }
    /**
     * Get aanduiding_soort_register value
     * @return string|null
     */
    public function getAanduiding_soort_register()
    {
        return $this->aanduiding_soort_register;
    }
    /**
     * Set aanduiding_soort_register value
     * @param string $aanduiding_soort_register
     * @return \Webservices\StructType\KadasterBronDocumentRequestType
     */
    public function setAanduiding_soort_register($aanduiding_soort_register = null)
    {
        // validation for constraint: string
        if (!is_null($aanduiding_soort_register) && !is_string($aanduiding_soort_register)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aanduiding_soort_register)), __LINE__);
        }
        $this->aanduiding_soort_register = $aanduiding_soort_register;
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
     * @return \Webservices\StructType\KadasterBronDocumentRequestType
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
     * @return \Webservices\StructType\KadasterBronDocumentRequestType
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
     * @return \Webservices\StructType\KadasterBronDocumentRequestType
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
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Webservices\StructType\KadasterBronDocumentRequestType
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterBronDocumentRequestType
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
