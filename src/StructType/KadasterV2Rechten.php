<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Rechten StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Rechten extends AbstractStructBase
{
    /**
     * The mandeligheid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2MandeligheidArray
     */
    public $mandeligheid;
    /**
     * The zakelijk_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2ZakelijkRechtArray
     */
    public $zakelijk_recht;
    /**
     * The aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2AantekeningArray
     */
    public $aantekening;
    /**
     * The hoofd_splitsing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2SplitsingArray
     */
    public $hoofd_splitsing;
    /**
     * The ondersplitsing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2SplitsingArray
     */
    public $ondersplitsing;
    /**
     * The splitsing_afkoop_erfpacht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2SplitsingArray
     */
    public $splitsing_afkoop_erfpacht;
    /**
     * Constructor method for KadasterV2Rechten
     * @uses KadasterV2Rechten::setMandeligheid()
     * @uses KadasterV2Rechten::setZakelijk_recht()
     * @uses KadasterV2Rechten::setAantekening()
     * @uses KadasterV2Rechten::setHoofd_splitsing()
     * @uses KadasterV2Rechten::setOndersplitsing()
     * @uses KadasterV2Rechten::setSplitsing_afkoop_erfpacht()
     * @param \Webservices\ArrayType\KadasterV2MandeligheidArray $mandeligheid
     * @param \Webservices\ArrayType\KadasterV2ZakelijkRechtArray $zakelijk_recht
     * @param \Webservices\ArrayType\KadasterV2AantekeningArray $aantekening
     * @param \Webservices\ArrayType\KadasterV2SplitsingArray $hoofd_splitsing
     * @param \Webservices\ArrayType\KadasterV2SplitsingArray $ondersplitsing
     * @param \Webservices\ArrayType\KadasterV2SplitsingArray $splitsing_afkoop_erfpacht
     */
    public function __construct(\Webservices\ArrayType\KadasterV2MandeligheidArray $mandeligheid = null, \Webservices\ArrayType\KadasterV2ZakelijkRechtArray $zakelijk_recht = null, \Webservices\ArrayType\KadasterV2AantekeningArray $aantekening = null, \Webservices\ArrayType\KadasterV2SplitsingArray $hoofd_splitsing = null, \Webservices\ArrayType\KadasterV2SplitsingArray $ondersplitsing = null, \Webservices\ArrayType\KadasterV2SplitsingArray $splitsing_afkoop_erfpacht = null)
    {
        $this
            ->setMandeligheid($mandeligheid)
            ->setZakelijk_recht($zakelijk_recht)
            ->setAantekening($aantekening)
            ->setHoofd_splitsing($hoofd_splitsing)
            ->setOndersplitsing($ondersplitsing)
            ->setSplitsing_afkoop_erfpacht($splitsing_afkoop_erfpacht);
    }
    /**
     * Get mandeligheid value
     * @return \Webservices\ArrayType\KadasterV2MandeligheidArray|null
     */
    public function getMandeligheid()
    {
        return $this->mandeligheid;
    }
    /**
     * Set mandeligheid value
     * @param \Webservices\ArrayType\KadasterV2MandeligheidArray $mandeligheid
     * @return \Webservices\StructType\KadasterV2Rechten
     */
    public function setMandeligheid(\Webservices\ArrayType\KadasterV2MandeligheidArray $mandeligheid = null)
    {
        $this->mandeligheid = $mandeligheid;
        return $this;
    }
    /**
     * Get zakelijk_recht value
     * @return \Webservices\ArrayType\KadasterV2ZakelijkRechtArray|null
     */
    public function getZakelijk_recht()
    {
        return $this->zakelijk_recht;
    }
    /**
     * Set zakelijk_recht value
     * @param \Webservices\ArrayType\KadasterV2ZakelijkRechtArray $zakelijk_recht
     * @return \Webservices\StructType\KadasterV2Rechten
     */
    public function setZakelijk_recht(\Webservices\ArrayType\KadasterV2ZakelijkRechtArray $zakelijk_recht = null)
    {
        $this->zakelijk_recht = $zakelijk_recht;
        return $this;
    }
    /**
     * Get aantekening value
     * @return \Webservices\ArrayType\KadasterV2AantekeningArray|null
     */
    public function getAantekening()
    {
        return $this->aantekening;
    }
    /**
     * Set aantekening value
     * @param \Webservices\ArrayType\KadasterV2AantekeningArray $aantekening
     * @return \Webservices\StructType\KadasterV2Rechten
     */
    public function setAantekening(\Webservices\ArrayType\KadasterV2AantekeningArray $aantekening = null)
    {
        $this->aantekening = $aantekening;
        return $this;
    }
    /**
     * Get hoofd_splitsing value
     * @return \Webservices\ArrayType\KadasterV2SplitsingArray|null
     */
    public function getHoofd_splitsing()
    {
        return $this->hoofd_splitsing;
    }
    /**
     * Set hoofd_splitsing value
     * @param \Webservices\ArrayType\KadasterV2SplitsingArray $hoofd_splitsing
     * @return \Webservices\StructType\KadasterV2Rechten
     */
    public function setHoofd_splitsing(\Webservices\ArrayType\KadasterV2SplitsingArray $hoofd_splitsing = null)
    {
        $this->hoofd_splitsing = $hoofd_splitsing;
        return $this;
    }
    /**
     * Get ondersplitsing value
     * @return \Webservices\ArrayType\KadasterV2SplitsingArray|null
     */
    public function getOndersplitsing()
    {
        return $this->ondersplitsing;
    }
    /**
     * Set ondersplitsing value
     * @param \Webservices\ArrayType\KadasterV2SplitsingArray $ondersplitsing
     * @return \Webservices\StructType\KadasterV2Rechten
     */
    public function setOndersplitsing(\Webservices\ArrayType\KadasterV2SplitsingArray $ondersplitsing = null)
    {
        $this->ondersplitsing = $ondersplitsing;
        return $this;
    }
    /**
     * Get splitsing_afkoop_erfpacht value
     * @return \Webservices\ArrayType\KadasterV2SplitsingArray|null
     */
    public function getSplitsing_afkoop_erfpacht()
    {
        return $this->splitsing_afkoop_erfpacht;
    }
    /**
     * Set splitsing_afkoop_erfpacht value
     * @param \Webservices\ArrayType\KadasterV2SplitsingArray $splitsing_afkoop_erfpacht
     * @return \Webservices\StructType\KadasterV2Rechten
     */
    public function setSplitsing_afkoop_erfpacht(\Webservices\ArrayType\KadasterV2SplitsingArray $splitsing_afkoop_erfpacht = null)
    {
        $this->splitsing_afkoop_erfpacht = $splitsing_afkoop_erfpacht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Rechten
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
