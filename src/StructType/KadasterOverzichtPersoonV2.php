<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterOverzichtPersoonV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterOverzichtPersoonV2 extends AbstractStructBase
{
    /**
     * The akr_subject_nr
     * @var string
     */
    public $akr_subject_nr;
    /**
     * The kadastrale_identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $kadastrale_identificatie;
    /**
     * The natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon
     */
    public $natuurlijk_persoon;
    /**
     * The niet_natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterOverzichtNietNatuurlijkPersoon
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
     * Constructor method for kadasterOverzichtPersoonV2
     * @uses KadasterOverzichtPersoonV2::setAkr_subject_nr()
     * @uses KadasterOverzichtPersoonV2::setKadastrale_identificatie()
     * @uses KadasterOverzichtPersoonV2::setNatuurlijk_persoon()
     * @uses KadasterOverzichtPersoonV2::setNiet_natuurlijk_persoon()
     * @uses KadasterOverzichtPersoonV2::setMelding()
     * @param string $akr_subject_nr
     * @param string $kadastrale_identificatie
     * @param \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon $natuurlijk_persoon
     * @param \Webservices\StructType\KadasterOverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @param string $melding
     */
    public function __construct($akr_subject_nr = null, $kadastrale_identificatie = null, \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon $natuurlijk_persoon = null, \Webservices\StructType\KadasterOverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon = null, $melding = null)
    {
        $this
            ->setAkr_subject_nr($akr_subject_nr)
            ->setKadastrale_identificatie($kadastrale_identificatie)
            ->setNatuurlijk_persoon($natuurlijk_persoon)
            ->setNiet_natuurlijk_persoon($niet_natuurlijk_persoon)
            ->setMelding($melding);
    }
    /**
     * Get akr_subject_nr value
     * @return string|null
     */
    public function getAkr_subject_nr()
    {
        return $this->akr_subject_nr;
    }
    /**
     * Set akr_subject_nr value
     * @param string $akr_subject_nr
     * @return \Webservices\StructType\KadasterOverzichtPersoonV2
     */
    public function setAkr_subject_nr($akr_subject_nr = null)
    {
        // validation for constraint: string
        if (!is_null($akr_subject_nr) && !is_string($akr_subject_nr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($akr_subject_nr)), __LINE__);
        }
        $this->akr_subject_nr = $akr_subject_nr;
        return $this;
    }
    /**
     * Get kadastrale_identificatie value
     * @return string|null
     */
    public function getKadastrale_identificatie()
    {
        return $this->kadastrale_identificatie;
    }
    /**
     * Set kadastrale_identificatie value
     * @param string $kadastrale_identificatie
     * @return \Webservices\StructType\KadasterOverzichtPersoonV2
     */
    public function setKadastrale_identificatie($kadastrale_identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($kadastrale_identificatie) && !is_string($kadastrale_identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kadastrale_identificatie)), __LINE__);
        }
        $this->kadastrale_identificatie = $kadastrale_identificatie;
        return $this;
    }
    /**
     * Get natuurlijk_persoon value
     * @return \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon|null
     */
    public function getNatuurlijk_persoon()
    {
        return $this->natuurlijk_persoon;
    }
    /**
     * Set natuurlijk_persoon value
     * @param \Webservices\StructType\KadasterOverzichtNatuurlijkPersoon $natuurlijk_persoon
     * @return \Webservices\StructType\KadasterOverzichtPersoonV2
     */
    public function setNatuurlijk_persoon(\Webservices\StructType\KadasterOverzichtNatuurlijkPersoon $natuurlijk_persoon = null)
    {
        $this->natuurlijk_persoon = $natuurlijk_persoon;
        return $this;
    }
    /**
     * Get niet_natuurlijk_persoon value
     * @return \Webservices\StructType\KadasterOverzichtNietNatuurlijkPersoon|null
     */
    public function getNiet_natuurlijk_persoon()
    {
        return $this->niet_natuurlijk_persoon;
    }
    /**
     * Set niet_natuurlijk_persoon value
     * @param \Webservices\StructType\KadasterOverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @return \Webservices\StructType\KadasterOverzichtPersoonV2
     */
    public function setNiet_natuurlijk_persoon(\Webservices\StructType\KadasterOverzichtNietNatuurlijkPersoon $niet_natuurlijk_persoon = null)
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
     * @return \Webservices\StructType\KadasterOverzichtPersoonV2
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
     * @return \Webservices\StructType\KadasterOverzichtPersoonV2
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
