<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * kadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType extends AbstractStructBase
{
    /**
     * The gemeentenaam
     * @var string
     */
    public $gemeentenaam;
    /**
     * The sectie
     * @var string
     */
    public $sectie;
    /**
     * The perceelnummer
     * @var int
     */
    public $perceelnummer;
    /**
     * The appartementsnummer
     * @var int
     */
    public $appartementsnummer;
    /**
     * Constructor method for
     * kadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType
     * @uses KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType::setGemeentenaam()
     * @uses KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType::setSectie()
     * @uses KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType::setPerceelnummer()
     * @uses KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType::setAppartementsnummer()
     * @param string $gemeentenaam
     * @param string $sectie
     * @param int $perceelnummer
     * @param int $appartementsnummer
     */
    public function __construct($gemeentenaam = null, $sectie = null, $perceelnummer = null, $appartementsnummer = null)
    {
        $this
            ->setGemeentenaam($gemeentenaam)
            ->setSectie($sectie)
            ->setPerceelnummer($perceelnummer)
            ->setAppartementsnummer($appartementsnummer);
    }
    /**
     * Get gemeentenaam value
     * @return string|null
     */
    public function getGemeentenaam()
    {
        return $this->gemeentenaam;
    }
    /**
     * Set gemeentenaam value
     * @param string $gemeentenaam
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType
     */
    public function setGemeentenaam($gemeentenaam = null)
    {
        // validation for constraint: string
        if (!is_null($gemeentenaam) && !is_string($gemeentenaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gemeentenaam)), __LINE__);
        }
        $this->gemeentenaam = $gemeentenaam;
        return $this;
    }
    /**
     * Get sectie value
     * @return string|null
     */
    public function getSectie()
    {
        return $this->sectie;
    }
    /**
     * Set sectie value
     * @param string $sectie
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType
     */
    public function setSectie($sectie = null)
    {
        // validation for constraint: string
        if (!is_null($sectie) && !is_string($sectie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sectie)), __LINE__);
        }
        $this->sectie = $sectie;
        return $this;
    }
    /**
     * Get perceelnummer value
     * @return int|null
     */
    public function getPerceelnummer()
    {
        return $this->perceelnummer;
    }
    /**
     * Set perceelnummer value
     * @param int $perceelnummer
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType
     */
    public function setPerceelnummer($perceelnummer = null)
    {
        // validation for constraint: int
        if (!is_null($perceelnummer) && !is_numeric($perceelnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($perceelnummer)), __LINE__);
        }
        $this->perceelnummer = $perceelnummer;
        return $this;
    }
    /**
     * Get appartementsnummer value
     * @return int|null
     */
    public function getAppartementsnummer()
    {
        return $this->appartementsnummer;
    }
    /**
     * Set appartementsnummer value
     * @param int $appartementsnummer
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType
     */
    public function setAppartementsnummer($appartementsnummer = null)
    {
        // validation for constraint: int
        if (!is_null($appartementsnummer) && !is_numeric($appartementsnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($appartementsnummer)), __LINE__);
        }
        $this->appartementsnummer = $appartementsnummer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType
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
