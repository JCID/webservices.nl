<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Stukken StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Stukken extends AbstractStructBase
{
    /**
     * The stukdeel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $stukdeel;
    /**
     * The kadasterstuk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2KadasterstukArray
     */
    public $kadasterstuk;
    /**
     * The kadaster_verzoek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2KadasterVerzoekArray
     */
    public $kadaster_verzoek;
    /**
     * Constructor method for KadasterV2Stukken
     * @uses KadasterV2Stukken::setStukdeel()
     * @uses KadasterV2Stukken::setKadasterstuk()
     * @uses KadasterV2Stukken::setKadaster_verzoek()
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel
     * @param \Webservices\ArrayType\KadasterV2KadasterstukArray $kadasterstuk
     * @param \Webservices\ArrayType\KadasterV2KadasterVerzoekArray $kadaster_verzoek
     */
    public function __construct(\Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel = null, \Webservices\ArrayType\KadasterV2KadasterstukArray $kadasterstuk = null, \Webservices\ArrayType\KadasterV2KadasterVerzoekArray $kadaster_verzoek = null)
    {
        $this
            ->setStukdeel($stukdeel)
            ->setKadasterstuk($kadasterstuk)
            ->setKadaster_verzoek($kadaster_verzoek);
    }
    /**
     * Get stukdeel value
     * @return \Webservices\ArrayType\KadasterV2StukdeelArray|null
     */
    public function getStukdeel()
    {
        return $this->stukdeel;
    }
    /**
     * Set stukdeel value
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel
     * @return \Webservices\StructType\KadasterV2Stukken
     */
    public function setStukdeel(\Webservices\ArrayType\KadasterV2StukdeelArray $stukdeel = null)
    {
        $this->stukdeel = $stukdeel;
        return $this;
    }
    /**
     * Get kadasterstuk value
     * @return \Webservices\ArrayType\KadasterV2KadasterstukArray|null
     */
    public function getKadasterstuk()
    {
        return $this->kadasterstuk;
    }
    /**
     * Set kadasterstuk value
     * @param \Webservices\ArrayType\KadasterV2KadasterstukArray $kadasterstuk
     * @return \Webservices\StructType\KadasterV2Stukken
     */
    public function setKadasterstuk(\Webservices\ArrayType\KadasterV2KadasterstukArray $kadasterstuk = null)
    {
        $this->kadasterstuk = $kadasterstuk;
        return $this;
    }
    /**
     * Get kadaster_verzoek value
     * @return \Webservices\ArrayType\KadasterV2KadasterVerzoekArray|null
     */
    public function getKadaster_verzoek()
    {
        return $this->kadaster_verzoek;
    }
    /**
     * Set kadaster_verzoek value
     * @param \Webservices\ArrayType\KadasterV2KadasterVerzoekArray $kadaster_verzoek
     * @return \Webservices\StructType\KadasterV2Stukken
     */
    public function setKadaster_verzoek(\Webservices\ArrayType\KadasterV2KadasterVerzoekArray $kadaster_verzoek = null)
    {
        $this->kadaster_verzoek = $kadaster_verzoek;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Stukken
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
