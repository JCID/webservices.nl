<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2GeregistreerdPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GeregistreerdPersoon extends AbstractStructBase
{
    /**
     * The bsn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $bsn;
    /**
     * The naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2NaamType
     */
    public $naam;
    /**
     * The aanduiding_naamgebruik
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aanduiding_naamgebruik;
    /**
     * The geboorte_datum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geboorte_datum;
    /**
     * The geslacht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geslacht;
    /**
     * The adellijke_titel_ofpredikaat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adellijke_titel_ofpredikaat;
    /**
     * The land_waarnaar_vertrokken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $land_waarnaar_vertrokken;
    /**
     * The datum_overlijden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_overlijden;
    /**
     * The burgerlijkestaat_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $burgerlijkestaat_code;
    /**
     * The heeft_partnerschap
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2HeeftPartnerschap
     */
    public $heeft_partnerschap;
    /**
     * Constructor method for KadasterV2GeregistreerdPersoon
     * @uses KadasterV2GeregistreerdPersoon::setBsn()
     * @uses KadasterV2GeregistreerdPersoon::setNaam()
     * @uses KadasterV2GeregistreerdPersoon::setAanduiding_naamgebruik()
     * @uses KadasterV2GeregistreerdPersoon::setGeboorte_datum()
     * @uses KadasterV2GeregistreerdPersoon::setGeslacht()
     * @uses KadasterV2GeregistreerdPersoon::setAdellijke_titel_ofpredikaat()
     * @uses KadasterV2GeregistreerdPersoon::setLand_waarnaar_vertrokken()
     * @uses KadasterV2GeregistreerdPersoon::setDatum_overlijden()
     * @uses KadasterV2GeregistreerdPersoon::setBurgerlijkestaat_code()
     * @uses KadasterV2GeregistreerdPersoon::setHeeft_partnerschap()
     * @param int $bsn
     * @param \Webservices\StructType\KadasterV2NaamType $naam
     * @param string $aanduiding_naamgebruik
     * @param string $geboorte_datum
     * @param string $geslacht
     * @param string $adellijke_titel_ofpredikaat
     * @param string $land_waarnaar_vertrokken
     * @param string $datum_overlijden
     * @param string $burgerlijkestaat_code
     * @param \Webservices\StructType\KadasterV2HeeftPartnerschap $heeft_partnerschap
     */
    public function __construct($bsn = null, \Webservices\StructType\KadasterV2NaamType $naam = null, $aanduiding_naamgebruik = null, $geboorte_datum = null, $geslacht = null, $adellijke_titel_ofpredikaat = null, $land_waarnaar_vertrokken = null, $datum_overlijden = null, $burgerlijkestaat_code = null, \Webservices\StructType\KadasterV2HeeftPartnerschap $heeft_partnerschap = null)
    {
        $this
            ->setBsn($bsn)
            ->setNaam($naam)
            ->setAanduiding_naamgebruik($aanduiding_naamgebruik)
            ->setGeboorte_datum($geboorte_datum)
            ->setGeslacht($geslacht)
            ->setAdellijke_titel_ofpredikaat($adellijke_titel_ofpredikaat)
            ->setLand_waarnaar_vertrokken($land_waarnaar_vertrokken)
            ->setDatum_overlijden($datum_overlijden)
            ->setBurgerlijkestaat_code($burgerlijkestaat_code)
            ->setHeeft_partnerschap($heeft_partnerschap);
    }
    /**
     * Get bsn value
     * @return int|null
     */
    public function getBsn()
    {
        return $this->bsn;
    }
    /**
     * Set bsn value
     * @param int $bsn
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setBsn($bsn = null)
    {
        // validation for constraint: int
        if (!is_null($bsn) && !is_numeric($bsn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bsn)), __LINE__);
        }
        $this->bsn = $bsn;
        return $this;
    }
    /**
     * Get naam value
     * @return \Webservices\StructType\KadasterV2NaamType|null
     */
    public function getNaam()
    {
        return $this->naam;
    }
    /**
     * Set naam value
     * @param \Webservices\StructType\KadasterV2NaamType $naam
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setNaam(\Webservices\StructType\KadasterV2NaamType $naam = null)
    {
        $this->naam = $naam;
        return $this;
    }
    /**
     * Get aanduiding_naamgebruik value
     * @return string|null
     */
    public function getAanduiding_naamgebruik()
    {
        return $this->aanduiding_naamgebruik;
    }
    /**
     * Set aanduiding_naamgebruik value
     * @param string $aanduiding_naamgebruik
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setAanduiding_naamgebruik($aanduiding_naamgebruik = null)
    {
        // validation for constraint: string
        if (!is_null($aanduiding_naamgebruik) && !is_string($aanduiding_naamgebruik)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aanduiding_naamgebruik)), __LINE__);
        }
        $this->aanduiding_naamgebruik = $aanduiding_naamgebruik;
        return $this;
    }
    /**
     * Get geboorte_datum value
     * @return string|null
     */
    public function getGeboorte_datum()
    {
        return $this->geboorte_datum;
    }
    /**
     * Set geboorte_datum value
     * @param string $geboorte_datum
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setGeboorte_datum($geboorte_datum = null)
    {
        // validation for constraint: string
        if (!is_null($geboorte_datum) && !is_string($geboorte_datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geboorte_datum)), __LINE__);
        }
        $this->geboorte_datum = $geboorte_datum;
        return $this;
    }
    /**
     * Get geslacht value
     * @return string|null
     */
    public function getGeslacht()
    {
        return $this->geslacht;
    }
    /**
     * Set geslacht value
     * @param string $geslacht
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setGeslacht($geslacht = null)
    {
        // validation for constraint: string
        if (!is_null($geslacht) && !is_string($geslacht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geslacht)), __LINE__);
        }
        $this->geslacht = $geslacht;
        return $this;
    }
    /**
     * Get adellijke_titel_ofpredikaat value
     * @return string|null
     */
    public function getAdellijke_titel_ofpredikaat()
    {
        return $this->adellijke_titel_ofpredikaat;
    }
    /**
     * Set adellijke_titel_ofpredikaat value
     * @param string $adellijke_titel_ofpredikaat
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setAdellijke_titel_ofpredikaat($adellijke_titel_ofpredikaat = null)
    {
        // validation for constraint: string
        if (!is_null($adellijke_titel_ofpredikaat) && !is_string($adellijke_titel_ofpredikaat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adellijke_titel_ofpredikaat)), __LINE__);
        }
        $this->adellijke_titel_ofpredikaat = $adellijke_titel_ofpredikaat;
        return $this;
    }
    /**
     * Get land_waarnaar_vertrokken value
     * @return string|null
     */
    public function getLand_waarnaar_vertrokken()
    {
        return $this->land_waarnaar_vertrokken;
    }
    /**
     * Set land_waarnaar_vertrokken value
     * @param string $land_waarnaar_vertrokken
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setLand_waarnaar_vertrokken($land_waarnaar_vertrokken = null)
    {
        // validation for constraint: string
        if (!is_null($land_waarnaar_vertrokken) && !is_string($land_waarnaar_vertrokken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($land_waarnaar_vertrokken)), __LINE__);
        }
        $this->land_waarnaar_vertrokken = $land_waarnaar_vertrokken;
        return $this;
    }
    /**
     * Get datum_overlijden value
     * @return string|null
     */
    public function getDatum_overlijden()
    {
        return $this->datum_overlijden;
    }
    /**
     * Set datum_overlijden value
     * @param string $datum_overlijden
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setDatum_overlijden($datum_overlijden = null)
    {
        // validation for constraint: string
        if (!is_null($datum_overlijden) && !is_string($datum_overlijden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_overlijden)), __LINE__);
        }
        $this->datum_overlijden = $datum_overlijden;
        return $this;
    }
    /**
     * Get burgerlijkestaat_code value
     * @return string|null
     */
    public function getBurgerlijkestaat_code()
    {
        return $this->burgerlijkestaat_code;
    }
    /**
     * Set burgerlijkestaat_code value
     * @param string $burgerlijkestaat_code
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setBurgerlijkestaat_code($burgerlijkestaat_code = null)
    {
        // validation for constraint: string
        if (!is_null($burgerlijkestaat_code) && !is_string($burgerlijkestaat_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($burgerlijkestaat_code)), __LINE__);
        }
        $this->burgerlijkestaat_code = $burgerlijkestaat_code;
        return $this;
    }
    /**
     * Get heeft_partnerschap value
     * @return \Webservices\StructType\KadasterV2HeeftPartnerschap|null
     */
    public function getHeeft_partnerschap()
    {
        return $this->heeft_partnerschap;
    }
    /**
     * Set heeft_partnerschap value
     * @param \Webservices\StructType\KadasterV2HeeftPartnerschap $heeft_partnerschap
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public function setHeeft_partnerschap(\Webservices\StructType\KadasterV2HeeftPartnerschap $heeft_partnerschap = null)
    {
        $this->heeft_partnerschap = $heeft_partnerschap;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon
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
