<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2PubliekrechtelijkeBeperkingType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2PubliekrechtelijkeBeperkingType extends AbstractStructBase
{
    /**
     * The kadaster_melding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadasterMelding
     */
    public $kadaster_melding;
    /**
     * The gemeentelijke_registratie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GemeentelijkeRegistratie
     */
    public $gemeentelijke_registratie;
    /**
     * Constructor method for KadasterV2PubliekrechtelijkeBeperkingType
     * @uses KadasterV2PubliekrechtelijkeBeperkingType::setKadaster_melding()
     * @uses KadasterV2PubliekrechtelijkeBeperkingType::setGemeentelijke_registratie()
     * @param \Webservices\StructType\KadasterV2KadasterMelding $kadaster_melding
     * @param \Webservices\StructType\KadasterV2GemeentelijkeRegistratie $gemeentelijke_registratie
     */
    public function __construct(\Webservices\StructType\KadasterV2KadasterMelding $kadaster_melding = null, \Webservices\StructType\KadasterV2GemeentelijkeRegistratie $gemeentelijke_registratie = null)
    {
        $this
            ->setKadaster_melding($kadaster_melding)
            ->setGemeentelijke_registratie($gemeentelijke_registratie);
    }
    /**
     * Get kadaster_melding value
     * @return \Webservices\StructType\KadasterV2KadasterMelding|null
     */
    public function getKadaster_melding()
    {
        return $this->kadaster_melding;
    }
    /**
     * Set kadaster_melding value
     * @param \Webservices\StructType\KadasterV2KadasterMelding $kadaster_melding
     * @return \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType
     */
    public function setKadaster_melding(\Webservices\StructType\KadasterV2KadasterMelding $kadaster_melding = null)
    {
        $this->kadaster_melding = $kadaster_melding;
        return $this;
    }
    /**
     * Get gemeentelijke_registratie value
     * @return \Webservices\StructType\KadasterV2GemeentelijkeRegistratie|null
     */
    public function getGemeentelijke_registratie()
    {
        return $this->gemeentelijke_registratie;
    }
    /**
     * Set gemeentelijke_registratie value
     * @param \Webservices\StructType\KadasterV2GemeentelijkeRegistratie $gemeentelijke_registratie
     * @return \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType
     */
    public function setGemeentelijke_registratie(\Webservices\StructType\KadasterV2GemeentelijkeRegistratie $gemeentelijke_registratie = null)
    {
        $this->gemeentelijke_registratie = $gemeentelijke_registratie;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType
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
