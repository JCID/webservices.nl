<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterHypotheek StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterHypotheek extends AbstractStructBase
{
    /**
     * The hoofdsom
     * @var \Webservices\StructType\KadasterBedrag
     */
    public $hoofdsom;
    /**
     * The rentevoet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $rentevoet;
    /**
     * The meerdere_rentevoet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $meerdere_rentevoet;
    /**
     * Constructor method for kadasterHypotheek
     * @uses KadasterHypotheek::setHoofdsom()
     * @uses KadasterHypotheek::setRentevoet()
     * @uses KadasterHypotheek::setMeerdere_rentevoet()
     * @param \Webservices\StructType\KadasterBedrag $hoofdsom
     * @param float $rentevoet
     * @param bool $meerdere_rentevoet
     */
    public function __construct(\Webservices\StructType\KadasterBedrag $hoofdsom = null, $rentevoet = null, $meerdere_rentevoet = null)
    {
        $this
            ->setHoofdsom($hoofdsom)
            ->setRentevoet($rentevoet)
            ->setMeerdere_rentevoet($meerdere_rentevoet);
    }
    /**
     * Get hoofdsom value
     * @return \Webservices\StructType\KadasterBedrag|null
     */
    public function getHoofdsom()
    {
        return $this->hoofdsom;
    }
    /**
     * Set hoofdsom value
     * @param \Webservices\StructType\KadasterBedrag $hoofdsom
     * @return \Webservices\StructType\KadasterHypotheek
     */
    public function setHoofdsom(\Webservices\StructType\KadasterBedrag $hoofdsom = null)
    {
        $this->hoofdsom = $hoofdsom;
        return $this;
    }
    /**
     * Get rentevoet value
     * @return float|null
     */
    public function getRentevoet()
    {
        return $this->rentevoet;
    }
    /**
     * Set rentevoet value
     * @param float $rentevoet
     * @return \Webservices\StructType\KadasterHypotheek
     */
    public function setRentevoet($rentevoet = null)
    {
        $this->rentevoet = $rentevoet;
        return $this;
    }
    /**
     * Get meerdere_rentevoet value
     * @return bool|null
     */
    public function getMeerdere_rentevoet()
    {
        return $this->meerdere_rentevoet;
    }
    /**
     * Set meerdere_rentevoet value
     * @param bool $meerdere_rentevoet
     * @return \Webservices\StructType\KadasterHypotheek
     */
    public function setMeerdere_rentevoet($meerdere_rentevoet = null)
    {
        // validation for constraint: boolean
        if (!is_null($meerdere_rentevoet) && !is_bool($meerdere_rentevoet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($meerdere_rentevoet)), __LINE__);
        }
        $this->meerdere_rentevoet = $meerdere_rentevoet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterHypotheek
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
