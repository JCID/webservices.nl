<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KadastraleAanduiding StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KadastraleAanduiding extends AbstractStructBase
{
    /**
     * The kadastrale_gemeente
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $kadastrale_gemeente;
    /**
     * The sectie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sectie;
    /**
     * The perceelnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $perceelnummer;
    /**
     * The appartementsrecht_volgnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $appartementsrecht_volgnummer;
    /**
     * Constructor method for KadasterV2KadastraleAanduiding
     * @uses KadasterV2KadastraleAanduiding::setKadastrale_gemeente()
     * @uses KadasterV2KadastraleAanduiding::setSectie()
     * @uses KadasterV2KadastraleAanduiding::setPerceelnummer()
     * @uses KadasterV2KadastraleAanduiding::setAppartementsrecht_volgnummer()
     * @param string $kadastrale_gemeente
     * @param string $sectie
     * @param int $perceelnummer
     * @param int $appartementsrecht_volgnummer
     */
    public function __construct($kadastrale_gemeente = null, $sectie = null, $perceelnummer = null, $appartementsrecht_volgnummer = null)
    {
        $this
            ->setKadastrale_gemeente($kadastrale_gemeente)
            ->setSectie($sectie)
            ->setPerceelnummer($perceelnummer)
            ->setAppartementsrecht_volgnummer($appartementsrecht_volgnummer);
    }
    /**
     * Get kadastrale_gemeente value
     * @return string|null
     */
    public function getKadastrale_gemeente()
    {
        return $this->kadastrale_gemeente;
    }
    /**
     * Set kadastrale_gemeente value
     * @param string $kadastrale_gemeente
     * @return \Webservices\StructType\KadasterV2KadastraleAanduiding
     */
    public function setKadastrale_gemeente($kadastrale_gemeente = null)
    {
        // validation for constraint: string
        if (!is_null($kadastrale_gemeente) && !is_string($kadastrale_gemeente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kadastrale_gemeente)), __LINE__);
        }
        $this->kadastrale_gemeente = $kadastrale_gemeente;
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
     * @return \Webservices\StructType\KadasterV2KadastraleAanduiding
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
     * @return \Webservices\StructType\KadasterV2KadastraleAanduiding
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
     * Get appartementsrecht_volgnummer value
     * @return int|null
     */
    public function getAppartementsrecht_volgnummer()
    {
        return $this->appartementsrecht_volgnummer;
    }
    /**
     * Set appartementsrecht_volgnummer value
     * @param int $appartementsrecht_volgnummer
     * @return \Webservices\StructType\KadasterV2KadastraleAanduiding
     */
    public function setAppartementsrecht_volgnummer($appartementsrecht_volgnummer = null)
    {
        // validation for constraint: int
        if (!is_null($appartementsrecht_volgnummer) && !is_numeric($appartementsrecht_volgnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($appartementsrecht_volgnummer)), __LINE__);
        }
        $this->appartementsrecht_volgnummer = $appartementsrecht_volgnummer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KadastraleAanduiding
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
