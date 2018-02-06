<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadastraalPerceel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadastraalPerceel extends AbstractStructBase
{
    /**
     * The x_coordinaat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $x_coordinaat;
    /**
     * The y_coordinaat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $y_coordinaat;
    /**
     * The grootte_perceel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $grootte_perceel;
    /**
     * The indicatie_grootte_geschat
     * @var bool
     */
    public $indicatie_grootte_geschat;
    /**
     * Constructor method for KadastraalPerceel
     * @uses KadastraalPerceel::setX_coordinaat()
     * @uses KadastraalPerceel::setY_coordinaat()
     * @uses KadastraalPerceel::setGrootte_perceel()
     * @uses KadastraalPerceel::setIndicatie_grootte_geschat()
     * @param string $x_coordinaat
     * @param string $y_coordinaat
     * @param string $grootte_perceel
     * @param bool $indicatie_grootte_geschat
     */
    public function __construct($x_coordinaat = null, $y_coordinaat = null, $grootte_perceel = null, $indicatie_grootte_geschat = null)
    {
        $this
            ->setX_coordinaat($x_coordinaat)
            ->setY_coordinaat($y_coordinaat)
            ->setGrootte_perceel($grootte_perceel)
            ->setIndicatie_grootte_geschat($indicatie_grootte_geschat);
    }
    /**
     * Get x_coordinaat value
     * @return string|null
     */
    public function getX_coordinaat()
    {
        return $this->x_coordinaat;
    }
    /**
     * Set x_coordinaat value
     * @param string $x_coordinaat
     * @return \Webservices\StructType\KadastraalPerceel
     */
    public function setX_coordinaat($x_coordinaat = null)
    {
        // validation for constraint: string
        if (!is_null($x_coordinaat) && !is_string($x_coordinaat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x_coordinaat)), __LINE__);
        }
        $this->x_coordinaat = $x_coordinaat;
        return $this;
    }
    /**
     * Get y_coordinaat value
     * @return string|null
     */
    public function getY_coordinaat()
    {
        return $this->y_coordinaat;
    }
    /**
     * Set y_coordinaat value
     * @param string $y_coordinaat
     * @return \Webservices\StructType\KadastraalPerceel
     */
    public function setY_coordinaat($y_coordinaat = null)
    {
        // validation for constraint: string
        if (!is_null($y_coordinaat) && !is_string($y_coordinaat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($y_coordinaat)), __LINE__);
        }
        $this->y_coordinaat = $y_coordinaat;
        return $this;
    }
    /**
     * Get grootte_perceel value
     * @return string|null
     */
    public function getGrootte_perceel()
    {
        return $this->grootte_perceel;
    }
    /**
     * Set grootte_perceel value
     * @param string $grootte_perceel
     * @return \Webservices\StructType\KadastraalPerceel
     */
    public function setGrootte_perceel($grootte_perceel = null)
    {
        // validation for constraint: string
        if (!is_null($grootte_perceel) && !is_string($grootte_perceel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($grootte_perceel)), __LINE__);
        }
        $this->grootte_perceel = $grootte_perceel;
        return $this;
    }
    /**
     * Get indicatie_grootte_geschat value
     * @return bool|null
     */
    public function getIndicatie_grootte_geschat()
    {
        return $this->indicatie_grootte_geschat;
    }
    /**
     * Set indicatie_grootte_geschat value
     * @param bool $indicatie_grootte_geschat
     * @return \Webservices\StructType\KadastraalPerceel
     */
    public function setIndicatie_grootte_geschat($indicatie_grootte_geschat = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_grootte_geschat) && !is_bool($indicatie_grootte_geschat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_grootte_geschat)), __LINE__);
        }
        $this->indicatie_grootte_geschat = $indicatie_grootte_geschat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadastraalPerceel
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
