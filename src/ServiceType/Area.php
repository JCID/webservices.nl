<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Area ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Area extends SoapClientBase
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
     * Method to call the operation originally named areaCodeLookup
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get the telephone area codes belonging to the neighborhood
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AreaCodeLookupRequestType $parameters
     * @return \Webservices\StructType\AreaCodeLookupResponseType|bool
     */
    public function areaCodeLookup(\Webservices\StructType\AreaCodeLookupRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->areaCodeLookup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named areaCodeToNeighborhoodcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get the neighborhood codes of the neighborhoods that have the specified area code
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AreaCodeToNeighborhoodcodeRequestType $parameters
     * @return \Webservices\StructType\AreaCodeToNeighborhoodcodeResponseType|bool
     */
    public function areaCodeToNeighborhoodcode(\Webservices\StructType\AreaCodeToNeighborhoodcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->areaCodeToNeighborhoodcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named areaCodePostcodeLookup
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get the telephone areacodes related to a given postcode
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AreaCodePostcodeLookupRequestType $parameters
     * @return \Webservices\StructType\AreaCodePostcodeLookupResponseType|bool
     */
    public function areaCodePostcodeLookup(\Webservices\StructType\AreaCodePostcodeLookupRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->areaCodePostcodeLookup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\AreaCodeLookupResponseType|\Webservices\StructType\AreaCodePostcodeLookupResponseType|\Webservices\StructType\AreaCodeToNeighborhoodcodeResponseType
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
