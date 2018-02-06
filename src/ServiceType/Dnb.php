<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Dnb ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Dnb extends SoapClientBase
{
    /**
     * Sets the HeaderLogin SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Webservices\StructType\HeaderLoginType $headerLogin
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderHeaderLogin(\Webservices\StructType\HeaderLoginType $headerLogin, $nameSpace = 'http://www.webservices.nl/soap/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'HeaderLogin', $headerLogin, $mustUnderstand, $actor);
    }
    /**
     * Sets the HeaderAuthenticate SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Webservices\StructType\HeaderAuthenticateType $headerAuthenticate
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderHeaderAuthenticate(\Webservices\StructType\HeaderAuthenticateType $headerAuthenticate, $nameSpace = 'http://www.webservices.nl/soap/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'HeaderAuthenticate', $headerAuthenticate, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named dnbSearchReferenceV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business and return basic information about the business.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbSearchReferenceV2RequestType $parameters
     * @return \Webservices\StructType\DnbSearchReferenceV2ResponseType|bool
     */
    public function dnbSearchReferenceV2(\Webservices\StructType\DnbSearchReferenceV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbSearchReferenceV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbGetReference
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve a DNBBusinessReference with name, address and D&B business key for a specific business.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbGetReferenceRequestType $parameters
     * @return \Webservices\StructType\DnbGetReferenceResponseType|bool
     */
    public function dnbGetReference(\Webservices\StructType\DnbGetReferenceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbGetReference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbWorldbaseMarketing
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve basic WorldBase business information
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbWorldbaseMarketingRequestType $parameters
     * @return \Webservices\StructType\DnbWorldbaseMarketingResponseType|bool
     */
    public function dnbWorldbaseMarketing(\Webservices\StructType\DnbWorldbaseMarketingRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbWorldbaseMarketing($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbWorldbaseMarketingPlus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve detailed WorldBase business information
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbWorldbaseMarketingPlusRequestType $parameters
     * @return \Webservices\StructType\DnbWorldbaseMarketingPlusResponseType|bool
     */
    public function dnbWorldbaseMarketingPlus(\Webservices\StructType\DnbWorldbaseMarketingPlusRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbWorldbaseMarketingPlus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbWorldbaseMarketingPlusLinkage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Detailed WorldBase information, including information on a business' family tree
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbWorldbaseMarketingPlusLinkageRequestType $parameters
     * @return \Webservices\StructType\DnbWorldbaseMarketingPlusLinkageResponseType|bool
     */
    public function dnbWorldbaseMarketingPlusLinkage(\Webservices\StructType\DnbWorldbaseMarketingPlusLinkageRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbWorldbaseMarketingPlusLinkage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbQuickCheck
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Do a D&B Quick Check on a business.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbQuickCheckRequestType $parameters
     * @return \Webservices\StructType\DnbQuickCheckResponseType|bool
     */
    public function dnbQuickCheck(\Webservices\StructType\DnbQuickCheckRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbQuickCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbBusinessVerification
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Do a D&B Business Verification on a business.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbBusinessVerificationRequestType $parameters
     * @return \Webservices\StructType\DnbBusinessVerificationResponseType|bool
     */
    public function dnbBusinessVerification(\Webservices\StructType\DnbBusinessVerificationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbBusinessVerification($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbEnterpriseManagement
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve D&B Enterprise Management for a business.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbEnterpriseManagementRequestType $parameters
     * @return \Webservices\StructType\DnbEnterpriseManagementResponseType|bool
     */
    public function dnbEnterpriseManagement(\Webservices\StructType\DnbEnterpriseManagementRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbEnterpriseManagement($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dnbSearchReference
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business and return basic information about the business.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DnbSearchReferenceRequestType $parameters
     * @return \Webservices\StructType\DnbSearchReferenceResponseType|bool
     */
    public function dnbSearchReference(\Webservices\StructType\DnbSearchReferenceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dnbSearchReference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\DnbBusinessVerificationResponseType|\Webservices\StructType\DnbEnterpriseManagementResponseType|\Webservices\StructType\DnbGetReferenceResponseType|\Webservices\StructType\DnbQuickCheckResponseType|\Webservices\StructType\DnbSearchReferenceResponseType|\Webservices\StructType\DnbSearchReferenceV2ResponseType|\Webservices\StructType\DnbWorldbaseMarketingPlusLinkageResponseType|\Webservices\StructType\DnbWorldbaseMarketingPlusResponseType|\Webservices\StructType\DnbWorldbaseMarketingResponseType
     */
    public function getResult()
    {
        return parent::getResult();
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
