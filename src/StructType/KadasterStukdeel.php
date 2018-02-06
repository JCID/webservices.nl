<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterStukdeel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterStukdeel extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The aard_stukdeel_omschrijving
     * @var string
     */
    public $aard_stukdeel_omschrijving;
    /**
     * The hypotheek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterHypotheek
     */
    public $hypotheek;
    /**
     * The schuldeisers_beslagleggers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterPersoonLijst
     */
    public $schuldeisers_beslagleggers;
    /**
     * The vordering
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterBedrag
     */
    public $vordering;
    /**
     * The rechten
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterStukdeelRechtArray
     */
    public $rechten;
    /**
     * The onroerende_zaken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterBeknoptOnroerendeZaakArray
     */
    public $onroerende_zaken;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The stukdeel_relaties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterStukdeelReferentiesLijst
     */
    public $stukdeel_relaties;
    /**
     * The hoort_bij
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterGerelateerdStukdeelArray
     */
    public $hoort_bij;
    /**
     * Constructor method for kadasterStukdeel
     * @uses KadasterStukdeel::setId()
     * @uses KadasterStukdeel::setAard_stukdeel_omschrijving()
     * @uses KadasterStukdeel::setHypotheek()
     * @uses KadasterStukdeel::setSchuldeisers_beslagleggers()
     * @uses KadasterStukdeel::setVordering()
     * @uses KadasterStukdeel::setRechten()
     * @uses KadasterStukdeel::setOnroerende_zaken()
     * @uses KadasterStukdeel::setOmschrijving()
     * @uses KadasterStukdeel::setStukdeel_relaties()
     * @uses KadasterStukdeel::setHoort_bij()
     * @param string $id
     * @param string $aard_stukdeel_omschrijving
     * @param \Webservices\StructType\KadasterHypotheek $hypotheek
     * @param \Webservices\StructType\KadasterPersoonLijst $schuldeisers_beslagleggers
     * @param \Webservices\StructType\KadasterBedrag $vordering
     * @param \Webservices\ArrayType\KadasterStukdeelRechtArray $rechten
     * @param \Webservices\ArrayType\KadasterBeknoptOnroerendeZaakArray $onroerende_zaken
     * @param string $omschrijving
     * @param \Webservices\StructType\KadasterStukdeelReferentiesLijst $stukdeel_relaties
     * @param \Webservices\ArrayType\KadasterGerelateerdStukdeelArray $hoort_bij
     */
    public function __construct($id = null, $aard_stukdeel_omschrijving = null, \Webservices\StructType\KadasterHypotheek $hypotheek = null, \Webservices\StructType\KadasterPersoonLijst $schuldeisers_beslagleggers = null, \Webservices\StructType\KadasterBedrag $vordering = null, \Webservices\ArrayType\KadasterStukdeelRechtArray $rechten = null, \Webservices\ArrayType\KadasterBeknoptOnroerendeZaakArray $onroerende_zaken = null, $omschrijving = null, \Webservices\StructType\KadasterStukdeelReferentiesLijst $stukdeel_relaties = null, \Webservices\ArrayType\KadasterGerelateerdStukdeelArray $hoort_bij = null)
    {
        $this
            ->setId($id)
            ->setAard_stukdeel_omschrijving($aard_stukdeel_omschrijving)
            ->setHypotheek($hypotheek)
            ->setSchuldeisers_beslagleggers($schuldeisers_beslagleggers)
            ->setVordering($vordering)
            ->setRechten($rechten)
            ->setOnroerende_zaken($onroerende_zaken)
            ->setOmschrijving($omschrijving)
            ->setStukdeel_relaties($stukdeel_relaties)
            ->setHoort_bij($hoort_bij);
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
     * @return \Webservices\StructType\KadasterStukdeel
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
     * Get aard_stukdeel_omschrijving value
     * @return string|null
     */
    public function getAard_stukdeel_omschrijving()
    {
        return $this->aard_stukdeel_omschrijving;
    }
    /**
     * Set aard_stukdeel_omschrijving value
     * @param string $aard_stukdeel_omschrijving
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setAard_stukdeel_omschrijving($aard_stukdeel_omschrijving = null)
    {
        // validation for constraint: string
        if (!is_null($aard_stukdeel_omschrijving) && !is_string($aard_stukdeel_omschrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard_stukdeel_omschrijving)), __LINE__);
        }
        $this->aard_stukdeel_omschrijving = $aard_stukdeel_omschrijving;
        return $this;
    }
    /**
     * Get hypotheek value
     * @return \Webservices\StructType\KadasterHypotheek|null
     */
    public function getHypotheek()
    {
        return $this->hypotheek;
    }
    /**
     * Set hypotheek value
     * @param \Webservices\StructType\KadasterHypotheek $hypotheek
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setHypotheek(\Webservices\StructType\KadasterHypotheek $hypotheek = null)
    {
        $this->hypotheek = $hypotheek;
        return $this;
    }
    /**
     * Get schuldeisers_beslagleggers value
     * @return \Webservices\StructType\KadasterPersoonLijst|null
     */
    public function getSchuldeisers_beslagleggers()
    {
        return $this->schuldeisers_beslagleggers;
    }
    /**
     * Set schuldeisers_beslagleggers value
     * @param \Webservices\StructType\KadasterPersoonLijst $schuldeisers_beslagleggers
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setSchuldeisers_beslagleggers(\Webservices\StructType\KadasterPersoonLijst $schuldeisers_beslagleggers = null)
    {
        $this->schuldeisers_beslagleggers = $schuldeisers_beslagleggers;
        return $this;
    }
    /**
     * Get vordering value
     * @return \Webservices\StructType\KadasterBedrag|null
     */
    public function getVordering()
    {
        return $this->vordering;
    }
    /**
     * Set vordering value
     * @param \Webservices\StructType\KadasterBedrag $vordering
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setVordering(\Webservices\StructType\KadasterBedrag $vordering = null)
    {
        $this->vordering = $vordering;
        return $this;
    }
    /**
     * Get rechten value
     * @return \Webservices\ArrayType\KadasterStukdeelRechtArray|null
     */
    public function getRechten()
    {
        return $this->rechten;
    }
    /**
     * Set rechten value
     * @param \Webservices\ArrayType\KadasterStukdeelRechtArray $rechten
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setRechten(\Webservices\ArrayType\KadasterStukdeelRechtArray $rechten = null)
    {
        $this->rechten = $rechten;
        return $this;
    }
    /**
     * Get onroerende_zaken value
     * @return \Webservices\ArrayType\KadasterBeknoptOnroerendeZaakArray|null
     */
    public function getOnroerende_zaken()
    {
        return $this->onroerende_zaken;
    }
    /**
     * Set onroerende_zaken value
     * @param \Webservices\ArrayType\KadasterBeknoptOnroerendeZaakArray $onroerende_zaken
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setOnroerende_zaken(\Webservices\ArrayType\KadasterBeknoptOnroerendeZaakArray $onroerende_zaken = null)
    {
        $this->onroerende_zaken = $onroerende_zaken;
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
     * @return \Webservices\StructType\KadasterStukdeel
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
     * Get stukdeel_relaties value
     * @return \Webservices\StructType\KadasterStukdeelReferentiesLijst|null
     */
    public function getStukdeel_relaties()
    {
        return $this->stukdeel_relaties;
    }
    /**
     * Set stukdeel_relaties value
     * @param \Webservices\StructType\KadasterStukdeelReferentiesLijst $stukdeel_relaties
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setStukdeel_relaties(\Webservices\StructType\KadasterStukdeelReferentiesLijst $stukdeel_relaties = null)
    {
        $this->stukdeel_relaties = $stukdeel_relaties;
        return $this;
    }
    /**
     * Get hoort_bij value
     * @return \Webservices\ArrayType\KadasterGerelateerdStukdeelArray|null
     */
    public function getHoort_bij()
    {
        return $this->hoort_bij;
    }
    /**
     * Set hoort_bij value
     * @param \Webservices\ArrayType\KadasterGerelateerdStukdeelArray $hoort_bij
     * @return \Webservices\StructType\KadasterStukdeel
     */
    public function setHoort_bij(\Webservices\ArrayType\KadasterGerelateerdStukdeelArray $hoort_bij = null)
    {
        $this->hoort_bij = $hoort_bij;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterStukdeel
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
