<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentOverzicht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DocumentOverzicht extends AbstractStructBase
{
    /**
     * The onroerende_zaken
     * @var \Webservices\ArrayType\OverzichtOnroerendeZaakArray
     */
    public $onroerende_zaken;
    /**
     * Constructor method for DocumentOverzicht
     * @uses DocumentOverzicht::setOnroerende_zaken()
     * @param \Webservices\ArrayType\OverzichtOnroerendeZaakArray $onroerende_zaken
     */
    public function __construct(\Webservices\ArrayType\OverzichtOnroerendeZaakArray $onroerende_zaken = null)
    {
        $this
            ->setOnroerende_zaken($onroerende_zaken);
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
     * @return \Webservices\StructType\DocumentOverzicht
     */
    public function setOnroerende_zaken(\Webservices\ArrayType\OverzichtOnroerendeZaakArray $onroerende_zaken = null)
    {
        $this->onroerende_zaken = $onroerende_zaken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DocumentOverzicht
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
