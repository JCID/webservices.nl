<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUpdateSubscription StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUpdateSubscription extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The up_to_date
     * @var bool
     */
    public $up_to_date;
    /**
     * The pending_updates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $pending_updates;
    /**
     * Constructor method for DutchBusinessUpdateSubscription
     * @uses DutchBusinessUpdateSubscription::setDossier_number()
     * @uses DutchBusinessUpdateSubscription::setEstablishment_number()
     * @uses DutchBusinessUpdateSubscription::setUp_to_date()
     * @uses DutchBusinessUpdateSubscription::setPending_updates()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param bool $up_to_date
     * @param \Webservices\ArrayType\StringArray $pending_updates
     */
    public function __construct($dossier_number = null, $establishment_number = null, $up_to_date = null, \Webservices\ArrayType\StringArray $pending_updates = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setUp_to_date($up_to_date)
            ->setPending_updates($pending_updates);
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
     * @return \Webservices\StructType\DutchBusinessUpdateSubscription
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
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\DutchBusinessUpdateSubscription
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get up_to_date value
     * @return bool|null
     */
    public function getUp_to_date()
    {
        return $this->up_to_date;
    }
    /**
     * Set up_to_date value
     * @param bool $up_to_date
     * @return \Webservices\StructType\DutchBusinessUpdateSubscription
     */
    public function setUp_to_date($up_to_date = null)
    {
        // validation for constraint: boolean
        if (!is_null($up_to_date) && !is_bool($up_to_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($up_to_date)), __LINE__);
        }
        $this->up_to_date = $up_to_date;
        return $this;
    }
    /**
     * Get pending_updates value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getPending_updates()
    {
        return $this->pending_updates;
    }
    /**
     * Set pending_updates value
     * @param \Webservices\ArrayType\StringArray $pending_updates
     * @return \Webservices\StructType\DutchBusinessUpdateSubscription
     */
    public function setPending_updates(\Webservices\ArrayType\StringArray $pending_updates = null)
    {
        $this->pending_updates = $pending_updates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUpdateSubscription
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
