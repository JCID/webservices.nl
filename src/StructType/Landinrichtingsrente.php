<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Landinrichtingsrente StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Landinrichtingsrente extends AbstractStructBase
{
    /**
     * The bedrag
     * @var string
     */
    public $bedrag;
    /**
     * The eindjaar
     * @var string
     */
    public $eindjaar;
    /**
     * Constructor method for Landinrichtingsrente
     * @uses Landinrichtingsrente::setBedrag()
     * @uses Landinrichtingsrente::setEindjaar()
     * @param string $bedrag
     * @param string $eindjaar
     */
    public function __construct($bedrag = null, $eindjaar = null)
    {
        $this
            ->setBedrag($bedrag)
            ->setEindjaar($eindjaar);
    }
    /**
     * Get bedrag value
     * @return string|null
     */
    public function getBedrag()
    {
        return $this->bedrag;
    }
    /**
     * Set bedrag value
     * @param string $bedrag
     * @return \Webservices\StructType\Landinrichtingsrente
     */
    public function setBedrag($bedrag = null)
    {
        // validation for constraint: string
        if (!is_null($bedrag) && !is_string($bedrag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedrag)), __LINE__);
        }
        $this->bedrag = $bedrag;
        return $this;
    }
    /**
     * Get eindjaar value
     * @return string|null
     */
    public function getEindjaar()
    {
        return $this->eindjaar;
    }
    /**
     * Set eindjaar value
     * @param string $eindjaar
     * @return \Webservices\StructType\Landinrichtingsrente
     */
    public function setEindjaar($eindjaar = null)
    {
        // validation for constraint: string
        if (!is_null($eindjaar) && !is_string($eindjaar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eindjaar)), __LINE__);
        }
        $this->eindjaar = $eindjaar;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Landinrichtingsrente
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
