<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeAdditionalInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeAdditionalInformation extends AbstractStructBase
{
    /**
     * The nl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeNlAdditionalInformation
     */
    public $nl;
    /**
     * The be
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeBeAdditionalInformation
     */
    public $be;
    /**
     * Constructor method for CreditsafeAdditionalInformation
     * @uses CreditsafeAdditionalInformation::setNl()
     * @uses CreditsafeAdditionalInformation::setBe()
     * @param \Webservices\StructType\CreditsafeNlAdditionalInformation $nl
     * @param \Webservices\StructType\CreditsafeBeAdditionalInformation $be
     */
    public function __construct(\Webservices\StructType\CreditsafeNlAdditionalInformation $nl = null, \Webservices\StructType\CreditsafeBeAdditionalInformation $be = null)
    {
        $this
            ->setNl($nl)
            ->setBe($be);
    }
    /**
     * Get nl value
     * @return \Webservices\StructType\CreditsafeNlAdditionalInformation|null
     */
    public function getNl()
    {
        return $this->nl;
    }
    /**
     * Set nl value
     * @param \Webservices\StructType\CreditsafeNlAdditionalInformation $nl
     * @return \Webservices\StructType\CreditsafeAdditionalInformation
     */
    public function setNl(\Webservices\StructType\CreditsafeNlAdditionalInformation $nl = null)
    {
        $this->nl = $nl;
        return $this;
    }
    /**
     * Get be value
     * @return \Webservices\StructType\CreditsafeBeAdditionalInformation|null
     */
    public function getBe()
    {
        return $this->be;
    }
    /**
     * Set be value
     * @param \Webservices\StructType\CreditsafeBeAdditionalInformation $be
     * @return \Webservices\StructType\CreditsafeAdditionalInformation
     */
    public function setBe(\Webservices\StructType\CreditsafeBeAdditionalInformation $be = null)
    {
        $this->be = $be;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeAdditionalInformation
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
