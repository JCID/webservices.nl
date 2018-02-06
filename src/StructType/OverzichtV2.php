<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverzichtV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class OverzichtV2 extends AbstractStructBase
{
    /**
     * The onroerende_zaken
     * @var \Webservices\ArrayType\OverzichtOnroerendeZaakArray
     */
    public $onroerende_zaken;
    /**
     * The rechten
     * @var \Webservices\ArrayType\OverzichtRechtArray
     */
    public $rechten;
    /**
     * The personen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\OverzichtPersoonV2Array
     */
    public $personen;
    /**
     * Constructor method for OverzichtV2
     * @uses OverzichtV2::setOnroerende_zaken()
     * @uses OverzichtV2::setRechten()
     * @uses OverzichtV2::setPersonen()
     * @param \Webservices\ArrayType\OverzichtOnroerendeZaakArray $onroerende_zaken
     * @param \Webservices\ArrayType\OverzichtRechtArray $rechten
     * @param \Webservices\ArrayType\OverzichtPersoonV2Array $personen
     */
    public function __construct(\Webservices\ArrayType\OverzichtOnroerendeZaakArray $onroerende_zaken = null, \Webservices\ArrayType\OverzichtRechtArray $rechten = null, \Webservices\ArrayType\OverzichtPersoonV2Array $personen = null)
    {
        $this
            ->setOnroerende_zaken($onroerende_zaken)
            ->setRechten($rechten)
            ->setPersonen($personen);
    }
    /**
     * Get onroerende_zaken value
     * @return \Webservices\ArrayType\OverzichtOnroerendeZaakArray|null
     */
    public function getOnroerende_zaken()
    {
        return $this->onroerende_zaken;
    }
    /**
     * Set onroerende_zaken value
     * @param \Webservices\ArrayType\OverzichtOnroerendeZaakArray $onroerende_zaken
     * @return \Webservices\StructType\OverzichtV2
     */
    public function setOnroerende_zaken(\Webservices\ArrayType\OverzichtOnroerendeZaakArray $onroerende_zaken = null)
    {
        $this->onroerende_zaken = $onroerende_zaken;
        return $this;
    }
    /**
     * Get rechten value
     * @return \Webservices\ArrayType\OverzichtRechtArray|null
     */
    public function getRechten()
    {
        return $this->rechten;
    }
    /**
     * Set rechten value
     * @param \Webservices\ArrayType\OverzichtRechtArray $rechten
     * @return \Webservices\StructType\OverzichtV2
     */
    public function setRechten(\Webservices\ArrayType\OverzichtRechtArray $rechten = null)
    {
        $this->rechten = $rechten;
        return $this;
    }
    /**
     * Get personen value
     * @return \Webservices\ArrayType\OverzichtPersoonV2Array|null
     */
    public function getPersonen()
    {
        return $this->personen;
    }
    /**
     * Set personen value
     * @param \Webservices\ArrayType\OverzichtPersoonV2Array $personen
     * @return \Webservices\StructType\OverzichtV2
     */
    public function setPersonen(\Webservices\ArrayType\OverzichtPersoonV2Array $personen = null)
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
     * @return \Webservices\StructType\OverzichtV2
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
