<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Stuk StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Stuk extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The aanduiding_soort_register
     * @var string
     */
    public $aanduiding_soort_register;
    /**
     * The deel
     * @var string
     */
    public $deel;
    /**
     * The nummer
     * @var string
     */
    public $nummer;
    /**
     * The reeks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reeks;
    /**
     * The datum_aanbieding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_aanbieding;
    /**
     * Constructor method for Stuk
     * @uses Stuk::setId()
     * @uses Stuk::setAanduiding_soort_register()
     * @uses Stuk::setDeel()
     * @uses Stuk::setNummer()
     * @uses Stuk::setReeks()
     * @uses Stuk::setDatum_aanbieding()
     * @param string $id
     * @param string $aanduiding_soort_register
     * @param string $deel
     * @param string $nummer
     * @param string $reeks
     * @param string $datum_aanbieding
     */
    public function __construct($id = null, $aanduiding_soort_register = null, $deel = null, $nummer = null, $reeks = null, $datum_aanbieding = null)
    {
        $this
            ->setId($id)
            ->setAanduiding_soort_register($aanduiding_soort_register)
            ->setDeel($deel)
            ->setNummer($nummer)
            ->setReeks($reeks)
            ->setDatum_aanbieding($datum_aanbieding);
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
     * @return \Webservices\StructType\Stuk
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
     * Get aanduiding_soort_register value
     * @return string|null
     */
    public function getAanduiding_soort_register()
    {
        return $this->aanduiding_soort_register;
    }
    /**
     * Set aanduiding_soort_register value
     * @param string $aanduiding_soort_register
     * @return \Webservices\StructType\Stuk
     */
    public function setAanduiding_soort_register($aanduiding_soort_register = null)
    {
        // validation for constraint: string
        if (!is_null($aanduiding_soort_register) && !is_string($aanduiding_soort_register)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aanduiding_soort_register)), __LINE__);
        }
        $this->aanduiding_soort_register = $aanduiding_soort_register;
        return $this;
    }
    /**
     * Get deel value
     * @return string|null
     */
    public function getDeel()
    {
        return $this->deel;
    }
    /**
     * Set deel value
     * @param string $deel
     * @return \Webservices\StructType\Stuk
     */
    public function setDeel($deel = null)
    {
        // validation for constraint: string
        if (!is_null($deel) && !is_string($deel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deel)), __LINE__);
        }
        $this->deel = $deel;
        return $this;
    }
    /**
     * Get nummer value
     * @return string|null
     */
    public function getNummer()
    {
        return $this->nummer;
    }
    /**
     * Set nummer value
     * @param string $nummer
     * @return \Webservices\StructType\Stuk
     */
    public function setNummer($nummer = null)
    {
        // validation for constraint: string
        if (!is_null($nummer) && !is_string($nummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nummer)), __LINE__);
        }
        $this->nummer = $nummer;
        return $this;
    }
    /**
     * Get reeks value
     * @return string|null
     */
    public function getReeks()
    {
        return $this->reeks;
    }
    /**
     * Set reeks value
     * @param string $reeks
     * @return \Webservices\StructType\Stuk
     */
    public function setReeks($reeks = null)
    {
        // validation for constraint: string
        if (!is_null($reeks) && !is_string($reeks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reeks)), __LINE__);
        }
        $this->reeks = $reeks;
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
     * @return \Webservices\StructType\Stuk
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Stuk
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
