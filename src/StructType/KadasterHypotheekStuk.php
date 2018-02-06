<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterHypotheekStuk StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterHypotheekStuk extends AbstractStructBase
{
    /**
     * The stuk
     * @var \Webservices\StructType\Stuk
     */
    public $stuk;
    /**
     * The stukdelen
     * @var \Webservices\ArrayType\KadasterStukdeelArray
     */
    public $stukdelen;
    /**
     * The datum_aanbieding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_aanbieding;
    /**
     * The datum_ondertekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_ondertekening;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The rectificatie_verzocht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $rectificatie_verzocht;
    /**
     * The eenzijdig_opzegbaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $eenzijdig_opzegbaar;
    /**
     * The gefiatteerd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $gefiatteerd;
    /**
     * Constructor method for kadasterHypotheekStuk
     * @uses KadasterHypotheekStuk::setStuk()
     * @uses KadasterHypotheekStuk::setStukdelen()
     * @uses KadasterHypotheekStuk::setDatum_aanbieding()
     * @uses KadasterHypotheekStuk::setDatum_ondertekening()
     * @uses KadasterHypotheekStuk::setOmschrijving()
     * @uses KadasterHypotheekStuk::setRectificatie_verzocht()
     * @uses KadasterHypotheekStuk::setEenzijdig_opzegbaar()
     * @uses KadasterHypotheekStuk::setGefiatteerd()
     * @param \Webservices\StructType\Stuk $stuk
     * @param \Webservices\ArrayType\KadasterStukdeelArray $stukdelen
     * @param string $datum_aanbieding
     * @param string $datum_ondertekening
     * @param string $omschrijving
     * @param bool $rectificatie_verzocht
     * @param bool $eenzijdig_opzegbaar
     * @param bool $gefiatteerd
     */
    public function __construct(\Webservices\StructType\Stuk $stuk = null, \Webservices\ArrayType\KadasterStukdeelArray $stukdelen = null, $datum_aanbieding = null, $datum_ondertekening = null, $omschrijving = null, $rectificatie_verzocht = null, $eenzijdig_opzegbaar = null, $gefiatteerd = null)
    {
        $this
            ->setStuk($stuk)
            ->setStukdelen($stukdelen)
            ->setDatum_aanbieding($datum_aanbieding)
            ->setDatum_ondertekening($datum_ondertekening)
            ->setOmschrijving($omschrijving)
            ->setRectificatie_verzocht($rectificatie_verzocht)
            ->setEenzijdig_opzegbaar($eenzijdig_opzegbaar)
            ->setGefiatteerd($gefiatteerd);
    }
    /**
     * Get stuk value
     * @return \Webservices\StructType\Stuk|null
     */
    public function getStuk()
    {
        return $this->stuk;
    }
    /**
     * Set stuk value
     * @param \Webservices\StructType\Stuk $stuk
     * @return \Webservices\StructType\KadasterHypotheekStuk
     */
    public function setStuk(\Webservices\StructType\Stuk $stuk = null)
    {
        $this->stuk = $stuk;
        return $this;
    }
    /**
     * Get stukdelen value
     * @return \Webservices\ArrayType\KadasterStukdeelArray|null
     */
    public function getStukdelen()
    {
        return $this->stukdelen;
    }
    /**
     * Set stukdelen value
     * @param \Webservices\ArrayType\KadasterStukdeelArray $stukdelen
     * @return \Webservices\StructType\KadasterHypotheekStuk
     */
    public function setStukdelen(\Webservices\ArrayType\KadasterStukdeelArray $stukdelen = null)
    {
        $this->stukdelen = $stukdelen;
        return $this;
    }
    /**
     * Get datum_aanbieding value
     * @return string|null
     */
    public function getDatum_aanbieding()
    {
        return $this->datum_aanbieding;
    }
    /**
     * Set datum_aanbieding value
     * @param string $datum_aanbieding
     * @return \Webservices\StructType\KadasterHypotheekStuk
     */
    public function setDatum_aanbieding($datum_aanbieding = null)
    {
        // validation for constraint: string
        if (!is_null($datum_aanbieding) && !is_string($datum_aanbieding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_aanbieding)), __LINE__);
        }
        $this->datum_aanbieding = $datum_aanbieding;
        return $this;
    }
    /**
     * Get datum_ondertekening value
     * @return string|null
     */
    public function getDatum_ondertekening()
    {
        return $this->datum_ondertekening;
    }
    /**
     * Set datum_ondertekening value
     * @param string $datum_ondertekening
     * @return \Webservices\StructType\KadasterHypotheekStuk
     */
    public function setDatum_ondertekening($datum_ondertekening = null)
    {
        // validation for constraint: string
        if (!is_null($datum_ondertekening) && !is_string($datum_ondertekening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_ondertekening)), __LINE__);
        }
        $this->datum_ondertekening = $datum_ondertekening;
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
     * @return \Webservices\StructType\KadasterHypotheekStuk
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
     * Get rectificatie_verzocht value
     * @return bool|null
     */
    public function getRectificatie_verzocht()
    {
        return $this->rectificatie_verzocht;
    }
    /**
     * Set rectificatie_verzocht value
     * @param bool $rectificatie_verzocht
     * @return \Webservices\StructType\KadasterHypotheekStuk
     */
    public function setRectificatie_verzocht($rectificatie_verzocht = null)
    {
        // validation for constraint: boolean
        if (!is_null($rectificatie_verzocht) && !is_bool($rectificatie_verzocht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rectificatie_verzocht)), __LINE__);
        }
        $this->rectificatie_verzocht = $rectificatie_verzocht;
        return $this;
    }
    /**
     * Get eenzijdig_opzegbaar value
     * @return bool|null
     */
    public function getEenzijdig_opzegbaar()
    {
        return $this->eenzijdig_opzegbaar;
    }
    /**
     * Set eenzijdig_opzegbaar value
     * @param bool $eenzijdig_opzegbaar
     * @return \Webservices\StructType\KadasterHypotheekStuk
     */
    public function setEenzijdig_opzegbaar($eenzijdig_opzegbaar = null)
    {
        // validation for constraint: boolean
        if (!is_null($eenzijdig_opzegbaar) && !is_bool($eenzijdig_opzegbaar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eenzijdig_opzegbaar)), __LINE__);
        }
        $this->eenzijdig_opzegbaar = $eenzijdig_opzegbaar;
        return $this;
    }
    /**
     * Get gefiatteerd value
     * @return bool|null
     */
    public function getGefiatteerd()
    {
        return $this->gefiatteerd;
    }
    /**
     * Set gefiatteerd value
     * @param bool $gefiatteerd
     * @return \Webservices\StructType\KadasterHypotheekStuk
     */
    public function setGefiatteerd($gefiatteerd = null)
    {
        // validation for constraint: boolean
        if (!is_null($gefiatteerd) && !is_bool($gefiatteerd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gefiatteerd)), __LINE__);
        }
        $this->gefiatteerd = $gefiatteerd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterHypotheekStuk
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
