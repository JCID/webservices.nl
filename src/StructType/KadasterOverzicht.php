<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterOverzicht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterOverzicht extends AbstractStructBase
{
    /**
     * The onroerende_zaken
     * @var \Webservices\ArrayType\KadasterOverzichtOnroerendeZaakArray
     */
    public $onroerende_zaken;
    /**
     * The rechten
     * @var \Webservices\ArrayType\KadasterOverzichtRechtArray
     */
    public $rechten;
    /**
     * The personen
     * @var \Webservices\ArrayType\KadasterOverzichtPersoonArray
     */
    public $personen;
    /**
     * Constructor method for kadasterOverzicht
     * @uses KadasterOverzicht::setOnroerende_zaken()
     * @uses KadasterOverzicht::setRechten()
     * @uses KadasterOverzicht::setPersonen()
     * @param \Webservices\ArrayType\KadasterOverzichtOnroerendeZaakArray $onroerende_zaken
     * @param \Webservices\ArrayType\KadasterOverzichtRechtArray $rechten
     * @param \Webservices\ArrayType\KadasterOverzichtPersoonArray $personen
     */
    public function __construct(\Webservices\ArrayType\KadasterOverzichtOnroerendeZaakArray $onroerende_zaken = null, \Webservices\ArrayType\KadasterOverzichtRechtArray $rechten = null, \Webservices\ArrayType\KadasterOverzichtPersoonArray $personen = null)
    {
        $this
            ->setOnroerende_zaken($onroerende_zaken)
            ->setRechten($rechten)
            ->setPersonen($personen);
    }
    /**
     * Get onroerende_zaken value
     * @return \Webservices\ArrayType\KadasterOverzichtOnroerendeZaakArray|null
     */
    public function getOnroerende_zaken()
    {
        return $this->onroerende_zaken;
    }
    /**
     * Set onroerende_zaken value
     * @param \Webservices\ArrayType\KadasterOverzichtOnroerendeZaakArray $onroerende_zaken
     * @return \Webservices\StructType\KadasterOverzicht
     */
    public function setOnroerende_zaken(\Webservices\ArrayType\KadasterOverzichtOnroerendeZaakArray $onroerende_zaken = null)
    {
        $this->onroerende_zaken = $onroerende_zaken;
        return $this;
    }
    /**
     * Get rechten value
     * @return \Webservices\ArrayType\KadasterOverzichtRechtArray|null
     */
    public function getRechten()
    {
        return $this->rechten;
    }
    /**
     * Set rechten value
     * @param \Webservices\ArrayType\KadasterOverzichtRechtArray $rechten
     * @return \Webservices\StructType\KadasterOverzicht
     */
    public function setRechten(\Webservices\ArrayType\KadasterOverzichtRechtArray $rechten = null)
    {
        $this->rechten = $rechten;
        return $this;
    }
    /**
     * Get personen value
     * @return \Webservices\ArrayType\KadasterOverzichtPersoonArray|null
     */
    public function getPersonen()
    {
        return $this->personen;
    }
    /**
     * Set personen value
     * @param \Webservices\ArrayType\KadasterOverzichtPersoonArray $personen
     * @return \Webservices\StructType\KadasterOverzicht
     */
    public function setPersonen(\Webservices\ArrayType\KadasterOverzichtPersoonArray $personen = null)
    {
        $this->personen = $personen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterOverzicht
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
