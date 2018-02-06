<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverzichtPersoonV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class OverzichtPersoonV2 extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\OverzichtNatuurlijkPersoon
     */
    public $natuurlijk_persoon;
    /**
     * The niet_natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\OverzichtNietNatuurlijkPersoon
     */
    public $niet_natuurlijk_persoon;
    /**
     * The melding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $melding;
    /**
     * Constructor method for OverzichtPersoonV2
     * @uses OverzichtPersoonV2::setId()
     * @uses OverzichtPersoonV2::setNatuurlijk_persoon()
     * @uses OverzichtPersoonV2::setNiet_natuurlijk_persoon()
     * @uses OverzichtPersoonV2::setMelding()
     * @param string $id
     * @param \Webservices\StructType\OverzichtNatuurlijkPersoon $natuurlijk_persoon
     * @param \Webservices\StructType\OverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @param string $melding
     */
    public function __construct($id = null, \Webservices\StructType\OverzichtNatuurlijkPersoon $natuurlijk_persoon = null, \Webservices\StructType\OverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon = null, $melding = null)
    {
        $this
            ->setId($id)
            ->setNatuurlijk_persoon($natuurlijk_persoon)
            ->setNiet_natuurlijk_persoon($niet_natuurlijk_persoon)
            ->setMelding($melding);
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
     * @return \Webservices\StructType\OverzichtPersoonV2
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
     * Get natuurlijk_persoon value
     * @return \Webservices\StructType\OverzichtNatuurlijkPersoon|null
     */
    public function getNatuurlijk_persoon()
    {
        return $this->natuurlijk_persoon;
    }
    /**
     * Set natuurlijk_persoon value
     * @param \Webservices\StructType\OverzichtNatuurlijkPersoon $natuurlijk_persoon
     * @return \Webservices\StructType\OverzichtPersoonV2
     */
    public function setNatuurlijk_persoon(\Webservices\StructType\OverzichtNatuurlijkPersoon $natuurlijk_persoon = null)
    {
        $this->natuurlijk_persoon = $natuurlijk_persoon;
        return $this;
    }
    /**
     * Get niet_natuurlijk_persoon value
     * @return \Webservices\StructType\OverzichtNietNatuurlijkPersoon|null
     */
    public function getNiet_natuurlijk_persoon()
    {
        return $this->niet_natuurlijk_persoon;
    }
    /**
     * Set niet_natuurlijk_persoon value
     * @param \Webservices\StructType\OverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @return \Webservices\StructType\OverzichtPersoonV2
     */
    public function setNiet_natuurlijk_persoon(\Webservices\StructType\OverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon = null)
    {
        $this->niet_natuurlijk_persoon = $niet_natuurlijk_persoon;
        return $this;
    }
    /**
     * Get melding value
     * @return string|null
     */
    public function getMelding()
    {
        return $this->melding;
    }
    /**
     * Set melding value
     * @param string $melding
     * @return \Webservices\StructType\OverzichtPersoonV2
     */
    public function setMelding($melding = null)
    {
        // validation for constraint: string
        if (!is_null($melding) && !is_string($melding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($melding)), __LINE__);
        }
        $this->melding = $melding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\OverzichtPersoonV2
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
