<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRChamberOfCommerce StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRChamberOfCommerce extends AbstractStructBase
{
    /**
     * The chamber_no
     * @var string
     */
    public $chamber_no;
    /**
     * The dossier_no
     * @var string
     */
    public $dossier_no;
    /**
     * The sub_dossier_no
     * @var string
     */
    public $sub_dossier_no;
    /**
     * The administering_chamber_no
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $administering_chamber_no;
    /**
     * The trade_register_location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trade_register_location;
    /**
     * Constructor method for GCRChamberOfCommerce
     * @uses GCRChamberOfCommerce::setChamber_no()
     * @uses GCRChamberOfCommerce::setDossier_no()
     * @uses GCRChamberOfCommerce::setSub_dossier_no()
     * @uses GCRChamberOfCommerce::setAdministering_chamber_no()
     * @uses GCRChamberOfCommerce::setTrade_register_location()
     * @param string $chamber_no
     * @param string $dossier_no
     * @param string $sub_dossier_no
     * @param string $administering_chamber_no
     * @param string $trade_register_location
     */
    public function __construct($chamber_no = null, $dossier_no = null, $sub_dossier_no = null, $administering_chamber_no = null, $trade_register_location = null)
    {
        $this
            ->setChamber_no($chamber_no)
            ->setDossier_no($dossier_no)
            ->setSub_dossier_no($sub_dossier_no)
            ->setAdministering_chamber_no($administering_chamber_no)
            ->setTrade_register_location($trade_register_location);
    }
    /**
     * Get chamber_no value
     * @return string|null
     */
    public function getChamber_no()
    {
        return $this->chamber_no;
    }
    /**
     * Set chamber_no value
     * @param string $chamber_no
     * @return \Webservices\StructType\GCRChamberOfCommerce
     */
    public function setChamber_no($chamber_no = null)
    {
        // validation for constraint: string
        if (!is_null($chamber_no) && !is_string($chamber_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chamber_no)), __LINE__);
        }
        $this->chamber_no = $chamber_no;
        return $this;
    }
    /**
     * Get dossier_no value
     * @return string|null
     */
    public function getDossier_no()
    {
        return $this->dossier_no;
    }
    /**
     * Set dossier_no value
     * @param string $dossier_no
     * @return \Webservices\StructType\GCRChamberOfCommerce
     */
    public function setDossier_no($dossier_no = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_no) && !is_string($dossier_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_no)), __LINE__);
        }
        $this->dossier_no = $dossier_no;
        return $this;
    }
    /**
     * Get sub_dossier_no value
     * @return string|null
     */
    public function getSub_dossier_no()
    {
        return $this->sub_dossier_no;
    }
    /**
     * Set sub_dossier_no value
     * @param string $sub_dossier_no
     * @return \Webservices\StructType\GCRChamberOfCommerce
     */
    public function setSub_dossier_no($sub_dossier_no = null)
    {
        // validation for constraint: string
        if (!is_null($sub_dossier_no) && !is_string($sub_dossier_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sub_dossier_no)), __LINE__);
        }
        $this->sub_dossier_no = $sub_dossier_no;
        return $this;
    }
    /**
     * Get administering_chamber_no value
     * @return string|null
     */
    public function getAdministering_chamber_no()
    {
        return $this->administering_chamber_no;
    }
    /**
     * Set administering_chamber_no value
     * @param string $administering_chamber_no
     * @return \Webservices\StructType\GCRChamberOfCommerce
     */
    public function setAdministering_chamber_no($administering_chamber_no = null)
    {
        // validation for constraint: string
        if (!is_null($administering_chamber_no) && !is_string($administering_chamber_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($administering_chamber_no)), __LINE__);
        }
        $this->administering_chamber_no = $administering_chamber_no;
        return $this;
    }
    /**
     * Get trade_register_location value
     * @return string|null
     */
    public function getTrade_register_location()
    {
        return $this->trade_register_location;
    }
    /**
     * Set trade_register_location value
     * @param string $trade_register_location
     * @return \Webservices\StructType\GCRChamberOfCommerce
     */
    public function setTrade_register_location($trade_register_location = null)
    {
        // validation for constraint: string
        if (!is_null($trade_register_location) && !is_string($trade_register_location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_register_location)), __LINE__);
        }
        $this->trade_register_location = $trade_register_location;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRChamberOfCommerce
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
