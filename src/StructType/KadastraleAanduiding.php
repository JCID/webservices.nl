<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadastraleAanduiding StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadastraleAanduiding extends AbstractStructBase
{
    /**
     * The gemeentecode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gemeentecode;
    /**
     * The gemeentenaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * @var string
     */
    public $perceelnummer;
    /**
     * The relatiecode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $relatiecode;
    /**
     * The volgnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $volgnummer;
    /**
     * Constructor method for KadastraleAanduiding
     * @uses KadastraleAanduiding::setGemeentecode()
     * @uses KadastraleAanduiding::setGemeentenaam()
     * @uses KadastraleAanduiding::setSectie()
     * @uses KadastraleAanduiding::setPerceelnummer()
     * @uses KadastraleAanduiding::setRelatiecode()
     * @uses KadastraleAanduiding::setVolgnummer()
     * @param string $gemeentecode
     * @param string $gemeentenaam
     * @param string $sectie
     * @param string $perceelnummer
     * @param string $relatiecode
     * @param string $volgnummer
     */
    public function __construct($gemeentecode = null, $gemeentenaam = null, $sectie = null, $perceelnummer = null, $relatiecode = null, $volgnummer = null)
    {
        $this
            ->setGemeentecode($gemeentecode)
            ->setGemeentenaam($gemeentenaam)
            ->setSectie($sectie)
            ->setPerceelnummer($perceelnummer)
            ->setRelatiecode($relatiecode)
            ->setVolgnummer($volgnummer);
    }
    /**
     * Get gemeentecode value
     * @return string|null
     */
    public function getGemeentecode()
    {
        return $this->gemeentecode;
    }
    /**
     * Set gemeentecode value
     * @param string $gemeentecode
     * @return \Webservices\StructType\KadastraleAanduiding
     */
    public function setGemeentecode($gemeentecode = null)
    {
        // validation for constraint: string
        if (!is_null($gemeentecode) && !is_string($gemeentecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gemeentecode)), __LINE__);
        }
        $this->gemeentecode = $gemeentecode;
        return $this;
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
     * @return \Webservices\StructType\KadastraleAanduiding
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
     * @return \Webservices\StructType\KadastraleAanduiding
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
     * @return string|null
     */
    public function getPerceelnummer()
    {
        return $this->perceelnummer;
    }
    /**
     * Set perceelnummer value
     * @param string $perceelnummer
     * @return \Webservices\StructType\KadastraleAanduiding
     */
    public function setPerceelnummer($perceelnummer = null)
    {
        // validation for constraint: string
        if (!is_null($perceelnummer) && !is_string($perceelnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($perceelnummer)), __LINE__);
        }
        $this->perceelnummer = $perceelnummer;
        return $this;
    }
    /**
     * Get relatiecode value
     * @return string|null
     */
    public function getRelatiecode()
    {
        return $this->relatiecode;
    }
    /**
     * Set relatiecode value
     * @param string $relatiecode
     * @return \Webservices\StructType\KadastraleAanduiding
     */
    public function setRelatiecode($relatiecode = null)
    {
        // validation for constraint: string
        if (!is_null($relatiecode) && !is_string($relatiecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatiecode)), __LINE__);
        }
        $this->relatiecode = $relatiecode;
        return $this;
    }
    /**
     * Get volgnummer value
     * @return string|null
     */
    public function getVolgnummer()
    {
        return $this->volgnummer;
    }
    /**
     * Set volgnummer value
     * @param string $volgnummer
     * @return \Webservices\StructType\KadastraleAanduiding
     */
    public function setVolgnummer($volgnummer = null)
    {
        // validation for constraint: string
        if (!is_null($volgnummer) && !is_string($volgnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($volgnummer)), __LINE__);
        }
        $this->volgnummer = $volgnummer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadastraleAanduiding
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
