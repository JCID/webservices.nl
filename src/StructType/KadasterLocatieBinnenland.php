<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterLocatieBinnenland StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterLocatieBinnenland extends AbstractStructBase
{
    /**
     * The plaats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $plaats;
    /**
     * The straatnaam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $straatnaam;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The huisnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $huisnummer;
    /**
     * The huisnummer_toevoeging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisnummer_toevoeging;
    /**
     * The huisletter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisletter;
    /**
     * The positie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $positie;
    /**
     * Constructor method for kadasterLocatieBinnenland
     * @uses KadasterLocatieBinnenland::setPlaats()
     * @uses KadasterLocatieBinnenland::setStraatnaam()
     * @uses KadasterLocatieBinnenland::setPostcode()
     * @uses KadasterLocatieBinnenland::setHuisnummer()
     * @uses KadasterLocatieBinnenland::setHuisnummer_toevoeging()
     * @uses KadasterLocatieBinnenland::setHuisletter()
     * @uses KadasterLocatieBinnenland::setPositie()
     * @param string $plaats
     * @param string $straatnaam
     * @param string $postcode
     * @param int $huisnummer
     * @param string $huisnummer_toevoeging
     * @param string $huisletter
     * @param string $positie
     */
    public function __construct($plaats = null, $straatnaam = null, $postcode = null, $huisnummer = null, $huisnummer_toevoeging = null, $huisletter = null, $positie = null)
    {
        $this
            ->setPlaats($plaats)
            ->setStraatnaam($straatnaam)
            ->setPostcode($postcode)
            ->setHuisnummer($huisnummer)
            ->setHuisnummer_toevoeging($huisnummer_toevoeging)
            ->setHuisletter($huisletter)
            ->setPositie($positie);
    }
    /**
     * Get plaats value
     * @return string|null
     */
    public function getPlaats()
    {
        return $this->plaats;
    }
    /**
     * Set plaats value
     * @param string $plaats
     * @return \Webservices\StructType\KadasterLocatieBinnenland
     */
    public function setPlaats($plaats = null)
    {
        // validation for constraint: string
        if (!is_null($plaats) && !is_string($plaats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaats)), __LINE__);
        }
        $this->plaats = $plaats;
        return $this;
    }
    /**
     * Get straatnaam value
     * @return string|null
     */
    public function getStraatnaam()
    {
        return $this->straatnaam;
    }
    /**
     * Set straatnaam value
     * @param string $straatnaam
     * @return \Webservices\StructType\KadasterLocatieBinnenland
     */
    public function setStraatnaam($straatnaam = null)
    {
        // validation for constraint: string
        if (!is_null($straatnaam) && !is_string($straatnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($straatnaam)), __LINE__);
        }
        $this->straatnaam = $straatnaam;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\KadasterLocatieBinnenland
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get huisnummer value
     * @return int|null
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }
    /**
     * Set huisnummer value
     * @param int $huisnummer
     * @return \Webservices\StructType\KadasterLocatieBinnenland
     */
    public function setHuisnummer($huisnummer = null)
    {
        // validation for constraint: int
        if (!is_null($huisnummer) && !is_numeric($huisnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnummer)), __LINE__);
        }
        $this->huisnummer = $huisnummer;
        return $this;
    }
    /**
     * Get huisnummer_toevoeging value
     * @return string|null
     */
    public function getHuisnummer_toevoeging()
    {
        return $this->huisnummer_toevoeging;
    }
    /**
     * Set huisnummer_toevoeging value
     * @param string $huisnummer_toevoeging
     * @return \Webservices\StructType\KadasterLocatieBinnenland
     */
    public function setHuisnummer_toevoeging($huisnummer_toevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnummer_toevoeging) && !is_string($huisnummer_toevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnummer_toevoeging)), __LINE__);
        }
        $this->huisnummer_toevoeging = $huisnummer_toevoeging;
        return $this;
    }
    /**
     * Get huisletter value
     * @return string|null
     */
    public function getHuisletter()
    {
        return $this->huisletter;
    }
    /**
     * Set huisletter value
     * @param string $huisletter
     * @return \Webservices\StructType\KadasterLocatieBinnenland
     */
    public function setHuisletter($huisletter = null)
    {
        // validation for constraint: string
        if (!is_null($huisletter) && !is_string($huisletter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisletter)), __LINE__);
        }
        $this->huisletter = $huisletter;
        return $this;
    }
    /**
     * Get positie value
     * @return string|null
     */
    public function getPositie()
    {
        return $this->positie;
    }
    /**
     * Set positie value
     * @param string $positie
     * @return \Webservices\StructType\KadasterLocatieBinnenland
     */
    public function setPositie($positie = null)
    {
        // validation for constraint: string
        if (!is_null($positie) && !is_string($positie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($positie)), __LINE__);
        }
        $this->positie = $positie;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterLocatieBinnenland
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
