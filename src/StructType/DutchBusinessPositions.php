<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPositions StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPositions extends AbstractStructBase
{
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_number;
    /**
     * The reference_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reference_date;
    /**
     * The positions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessPositionV2Array
     */
    public $positions;
    /**
     * Constructor method for DutchBusinessPositions
     * @uses DutchBusinessPositions::setDossier_number()
     * @uses DutchBusinessPositions::setReference_date()
     * @uses DutchBusinessPositions::setPositions()
     * @param string $dossier_number
     * @param string $reference_date
     * @param \Webservices\ArrayType\DutchBusinessPositionV2Array $positions
     */
    public function __construct($dossier_number = null, $reference_date = null, \Webservices\ArrayType\DutchBusinessPositionV2Array $positions = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setReference_date($reference_date)
            ->setPositions($positions);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessPositions
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get reference_date value
     * @return string|null
     */
    public function getReference_date()
    {
        return $this->reference_date;
    }
    /**
     * Set reference_date value
     * @param string $reference_date
     * @return \Webservices\StructType\DutchBusinessPositions
     */
    public function setReference_date($reference_date = null)
    {
        // validation for constraint: string
        if (!is_null($reference_date) && !is_string($reference_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference_date)), __LINE__);
        }
        $this->reference_date = $reference_date;
        return $this;
    }
    /**
     * Get positions value
     * @return \Webservices\ArrayType\DutchBusinessPositionV2Array|null
     */
    public function getPositions()
    {
        return $this->positions;
    }
    /**
     * Set positions value
     * @param \Webservices\ArrayType\DutchBusinessPositionV2Array $positions
     * @return \Webservices\StructType\DutchBusinessPositions
     */
    public function setPositions(\Webservices\ArrayType\DutchBusinessPositionV2Array $positions = null)
    {
        $this->positions = $positions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPositions
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
