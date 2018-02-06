<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NeighborhoodName StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NeighborhoodName extends AbstractStructBase
{
    /**
     * The nbcode
     * @var string
     */
    public $nbcode;
    /**
     * The nbname
     * @var string
     */
    public $nbname;
    /**
     * Constructor method for NeighborhoodName
     * @uses NeighborhoodName::setNbcode()
     * @uses NeighborhoodName::setNbname()
     * @param string $nbcode
     * @param string $nbname
     */
    public function __construct($nbcode = null, $nbname = null)
    {
        $this
            ->setNbcode($nbcode)
            ->setNbname($nbname);
    }
    /**
     * Get nbcode value
     * @return string|null
     */
    public function getNbcode()
    {
        return $this->nbcode;
    }
    /**
     * Set nbcode value
     * @param string $nbcode
     * @return \Webservices\StructType\NeighborhoodName
     */
    public function setNbcode($nbcode = null)
    {
        // validation for constraint: string
        if (!is_null($nbcode) && !is_string($nbcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbcode)), __LINE__);
        }
        $this->nbcode = $nbcode;
        return $this;
    }
    /**
     * Get nbname value
     * @return string|null
     */
    public function getNbname()
    {
        return $this->nbname;
    }
    /**
     * Set nbname value
     * @param string $nbname
     * @return \Webservices\StructType\NeighborhoodName
     */
    public function setNbname($nbname = null)
    {
        // validation for constraint: string
        if (!is_null($nbname) && !is_string($nbname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbname)), __LINE__);
        }
        $this->nbname = $nbname;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NeighborhoodName
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
