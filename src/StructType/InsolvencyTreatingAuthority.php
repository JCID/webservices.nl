<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyTreatingAuthority StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyTreatingAuthority extends AbstractStructBase
{
    /**
     * The code
     * @var int
     */
    public $code;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The establishment_code
     * @var int
     */
    public $establishment_code;
    /**
     * The establishment_name
     * @var string
     */
    public $establishment_name;
    /**
     * Constructor method for InsolvencyTreatingAuthority
     * @uses InsolvencyTreatingAuthority::setCode()
     * @uses InsolvencyTreatingAuthority::setName()
     * @uses InsolvencyTreatingAuthority::setEstablishment_code()
     * @uses InsolvencyTreatingAuthority::setEstablishment_name()
     * @param int $code
     * @param string $name
     * @param int $establishment_code
     * @param string $establishment_name
     */
    public function __construct($code = null, $name = null, $establishment_code = null, $establishment_name = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setEstablishment_code($establishment_code)
            ->setEstablishment_name($establishment_name);
    }
    /**
     * Get code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param int $code
     * @return \Webservices\StructType\InsolvencyTreatingAuthority
     */
    public function setCode($code = null)
    {
        // validation for constraint: int
        if (!is_null($code) && !is_numeric($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\InsolvencyTreatingAuthority
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get establishment_code value
     * @return int|null
     */
    public function getEstablishment_code()
    {
        return $this->establishment_code;
    }
    /**
     * Set establishment_code value
     * @param int $establishment_code
     * @return \Webservices\StructType\InsolvencyTreatingAuthority
     */
    public function setEstablishment_code($establishment_code = null)
    {
        // validation for constraint: int
        if (!is_null($establishment_code) && !is_numeric($establishment_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($establishment_code)), __LINE__);
        }
        $this->establishment_code = $establishment_code;
        return $this;
    }
    /**
     * Get establishment_name value
     * @return string|null
     */
    public function getEstablishment_name()
    {
        return $this->establishment_name;
    }
    /**
     * Set establishment_name value
     * @param string $establishment_name
     * @return \Webservices\StructType\InsolvencyTreatingAuthority
     */
    public function setEstablishment_name($establishment_name = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_name) && !is_string($establishment_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_name)), __LINE__);
        }
        $this->establishment_name = $establishment_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyTreatingAuthority
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
