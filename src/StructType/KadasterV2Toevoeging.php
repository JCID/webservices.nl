<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Toevoeging StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Toevoeging extends AbstractStructBase
{
    /**
     * The meer_gegevens_beschikbaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2MeerGegevensBeschikbaarArray
     */
    public $meer_gegevens_beschikbaar;
    /**
     * The aanvullende_gegevens
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2AanvullendeGegevensArray
     */
    public $aanvullende_gegevens;
    /**
     * The attendering_kadastraal_object
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray
     */
    public $attendering_kadastraal_object;
    /**
     * The signalering_kadastraal_object
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray
     */
    public $signalering_kadastraal_object;
    /**
     * The attendering_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2PersoonNotificatieArray
     */
    public $attendering_persoon;
    /**
     * The signalering_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2PersoonNotificatieArray
     */
    public $signalering_persoon;
    /**
     * Constructor method for KadasterV2Toevoeging
     * @uses KadasterV2Toevoeging::setMeer_gegevens_beschikbaar()
     * @uses KadasterV2Toevoeging::setAanvullende_gegevens()
     * @uses KadasterV2Toevoeging::setAttendering_kadastraal_object()
     * @uses KadasterV2Toevoeging::setSignalering_kadastraal_object()
     * @uses KadasterV2Toevoeging::setAttendering_persoon()
     * @uses KadasterV2Toevoeging::setSignalering_persoon()
     * @param \Webservices\ArrayType\KadasterV2MeerGegevensBeschikbaarArray $meer_gegevens_beschikbaar
     * @param \Webservices\ArrayType\KadasterV2AanvullendeGegevensArray $aanvullende_gegevens
     * @param \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $attendering_kadastraal_object
     * @param \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $signalering_kadastraal_object
     * @param \Webservices\ArrayType\KadasterV2PersoonNotificatieArray $attendering_persoon
     * @param \Webservices\ArrayType\KadasterV2PersoonNotificatieArray $signalering_persoon
     */
    public function __construct(\Webservices\ArrayType\KadasterV2MeerGegevensBeschikbaarArray $meer_gegevens_beschikbaar = null, \Webservices\ArrayType\KadasterV2AanvullendeGegevensArray $aanvullende_gegevens = null, \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $attendering_kadastraal_object = null, \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $signalering_kadastraal_object = null, \Webservices\ArrayType\KadasterV2PersoonNotificatieArray $attendering_persoon = null, \Webservices\ArrayType\KadasterV2PersoonNotificatieArray $signalering_persoon = null)
    {
        $this
            ->setMeer_gegevens_beschikbaar($meer_gegevens_beschikbaar)
            ->setAanvullende_gegevens($aanvullende_gegevens)
            ->setAttendering_kadastraal_object($attendering_kadastraal_object)
            ->setSignalering_kadastraal_object($signalering_kadastraal_object)
            ->setAttendering_persoon($attendering_persoon)
            ->setSignalering_persoon($signalering_persoon);
    }
    /**
     * Get meer_gegevens_beschikbaar value
     * @return \Webservices\ArrayType\KadasterV2MeerGegevensBeschikbaarArray|null
     */
    public function getMeer_gegevens_beschikbaar()
    {
        return $this->meer_gegevens_beschikbaar;
    }
    /**
     * Set meer_gegevens_beschikbaar value
     * @param \Webservices\ArrayType\KadasterV2MeerGegevensBeschikbaarArray $meer_gegevens_beschikbaar
     * @return \Webservices\StructType\KadasterV2Toevoeging
     */
    public function setMeer_gegevens_beschikbaar(\Webservices\ArrayType\KadasterV2MeerGegevensBeschikbaarArray $meer_gegevens_beschikbaar = null)
    {
        $this->meer_gegevens_beschikbaar = $meer_gegevens_beschikbaar;
        return $this;
    }
    /**
     * Get aanvullende_gegevens value
     * @return \Webservices\ArrayType\KadasterV2AanvullendeGegevensArray|null
     */
    public function getAanvullende_gegevens()
    {
        return $this->aanvullende_gegevens;
    }
    /**
     * Set aanvullende_gegevens value
     * @param \Webservices\ArrayType\KadasterV2AanvullendeGegevensArray $aanvullende_gegevens
     * @return \Webservices\StructType\KadasterV2Toevoeging
     */
    public function setAanvullende_gegevens(\Webservices\ArrayType\KadasterV2AanvullendeGegevensArray $aanvullende_gegevens = null)
    {
        $this->aanvullende_gegevens = $aanvullende_gegevens;
        return $this;
    }
    /**
     * Get attendering_kadastraal_object value
     * @return \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray|null
     */
    public function getAttendering_kadastraal_object()
    {
        return $this->attendering_kadastraal_object;
    }
    /**
     * Set attendering_kadastraal_object value
     * @param \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $attendering_kadastraal_object
     * @return \Webservices\StructType\KadasterV2Toevoeging
     */
    public function setAttendering_kadastraal_object(\Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $attendering_kadastraal_object = null)
    {
        $this->attendering_kadastraal_object = $attendering_kadastraal_object;
        return $this;
    }
    /**
     * Get signalering_kadastraal_object value
     * @return \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray|null
     */
    public function getSignalering_kadastraal_object()
    {
        return $this->signalering_kadastraal_object;
    }
    /**
     * Set signalering_kadastraal_object value
     * @param \Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $signalering_kadastraal_object
     * @return \Webservices\StructType\KadasterV2Toevoeging
     */
    public function setSignalering_kadastraal_object(\Webservices\ArrayType\KadasterV2KadastraalObjectNotificatieArray $signalering_kadastraal_object = null)
    {
        $this->signalering_kadastraal_object = $signalering_kadastraal_object;
        return $this;
    }
    /**
     * Get attendering_persoon value
     * @return \Webservices\ArrayType\KadasterV2PersoonNotificatieArray|null
     */
    public function getAttendering_persoon()
    {
        return $this->attendering_persoon;
    }
    /**
     * Set attendering_persoon value
     * @param \Webservices\ArrayType\KadasterV2PersoonNotificatieArray $attendering_persoon
     * @return \Webservices\StructType\KadasterV2Toevoeging
     */
    public function setAttendering_persoon(\Webservices\ArrayType\KadasterV2PersoonNotificatieArray $attendering_persoon = null)
    {
        $this->attendering_persoon = $attendering_persoon;
        return $this;
    }
    /**
     * Get signalering_persoon value
     * @return \Webservices\ArrayType\KadasterV2PersoonNotificatieArray|null
     */
    public function getSignalering_persoon()
    {
        return $this->signalering_persoon;
    }
    /**
     * Set signalering_persoon value
     * @param \Webservices\ArrayType\KadasterV2PersoonNotificatieArray $signalering_persoon
     * @return \Webservices\StructType\KadasterV2Toevoeging
     */
    public function setSignalering_persoon(\Webservices\ArrayType\KadasterV2PersoonNotificatieArray $signalering_persoon = null)
    {
        $this->signalering_persoon = $signalering_persoon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Toevoeging
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
