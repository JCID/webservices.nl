<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskInsolvency StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskInsolvency extends AbstractStructBase
{
    /**
     * The registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskInsolvencyRegistration
     */
    public $registration;
    /**
     * The publications
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\RiskInsolvencyPublicationArray
     */
    public $publications;
    /**
     * The curators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\RiskInsolvencyCuratorArray
     */
    public $curators;
    /**
     * The judge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskInsolvencyJudge
     */
    public $judge;
    /**
     * Constructor method for RiskInsolvency
     * @uses RiskInsolvency::setRegistration()
     * @uses RiskInsolvency::setPublications()
     * @uses RiskInsolvency::setCurators()
     * @uses RiskInsolvency::setJudge()
     * @param \Webservices\StructType\RiskInsolvencyRegistration $registration
     * @param \Webservices\ArrayType\RiskInsolvencyPublicationArray $publications
     * @param \Webservices\ArrayType\RiskInsolvencyCuratorArray $curators
     * @param \Webservices\StructType\RiskInsolvencyJudge $judge
     */
    public function __construct(\Webservices\StructType\RiskInsolvencyRegistration $registration = null, \Webservices\ArrayType\RiskInsolvencyPublicationArray $publications = null, \Webservices\ArrayType\RiskInsolvencyCuratorArray $curators = null, \Webservices\StructType\RiskInsolvencyJudge $judge = null)
    {
        $this
            ->setRegistration($registration)
            ->setPublications($publications)
            ->setCurators($curators)
            ->setJudge($judge);
    }
    /**
     * Get registration value
     * @return \Webservices\StructType\RiskInsolvencyRegistration|null
     */
    public function getRegistration()
    {
        return $this->registration;
    }
    /**
     * Set registration value
     * @param \Webservices\StructType\RiskInsolvencyRegistration $registration
     * @return \Webservices\StructType\RiskInsolvency
     */
    public function setRegistration(\Webservices\StructType\RiskInsolvencyRegistration $registration = null)
    {
        $this->registration = $registration;
        return $this;
    }
    /**
     * Get publications value
     * @return \Webservices\ArrayType\RiskInsolvencyPublicationArray|null
     */
    public function getPublications()
    {
        return $this->publications;
    }
    /**
     * Set publications value
     * @param \Webservices\ArrayType\RiskInsolvencyPublicationArray $publications
     * @return \Webservices\StructType\RiskInsolvency
     */
    public function setPublications(\Webservices\ArrayType\RiskInsolvencyPublicationArray $publications = null)
    {
        $this->publications = $publications;
        return $this;
    }
    /**
     * Get curators value
     * @return \Webservices\ArrayType\RiskInsolvencyCuratorArray|null
     */
    public function getCurators()
    {
        return $this->curators;
    }
    /**
     * Set curators value
     * @param \Webservices\ArrayType\RiskInsolvencyCuratorArray $curators
     * @return \Webservices\StructType\RiskInsolvency
     */
    public function setCurators(\Webservices\ArrayType\RiskInsolvencyCuratorArray $curators = null)
    {
        $this->curators = $curators;
        return $this;
    }
    /**
     * Get judge value
     * @return \Webservices\StructType\RiskInsolvencyJudge|null
     */
    public function getJudge()
    {
        return $this->judge;
    }
    /**
     * Set judge value
     * @param \Webservices\StructType\RiskInsolvencyJudge $judge
     * @return \Webservices\StructType\RiskInsolvency
     */
    public function setJudge(\Webservices\StructType\RiskInsolvencyJudge $judge = null)
    {
        $this->judge = $judge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskInsolvency
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
