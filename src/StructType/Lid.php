<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Lid StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Lid extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The omschrijving
     * @var string
     */
    public $omschrijving;
    /**
     * Constructor method for Lid
     * @uses Lid::setId()
     * @uses Lid::setOmschrijving()
     * @param string $id
     * @param string $omschrijving
     */
    public function __construct($id = null, $omschrijving = null)
    {
        $this
            ->setId($id)
            ->setOmschrijving($omschrijving);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\Lid
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get omschrijving value
     * @return string|null
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }
    /**
     * Set omschrijving value
     * @param string $omschrijving
     * @return \Webservices\StructType\Lid
     */
    public function setOmschrijving($omschrijving = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving) && !is_string($omschrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving)), __LINE__);
        }
        $this->omschrijving = $omschrijving;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Lid
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
