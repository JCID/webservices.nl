<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Kvk ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Kvk extends SoapClientBase
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
     * Method to call the operation originally named kvkGetDossier
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve data on a business establishment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkGetDossierRequestType $parameters
     * @return \Webservices\StructType\KvkGetDossierResponseType|bool
     */
    public function kvkGetDossier(\Webservices\StructType\KvkGetDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkGetDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkSearchDossierNumber
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Search for business establishments using a known identifier
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkSearchDossierNumberRequestType $parameters
     * @return \Webservices\StructType\KvkSearchDossierNumberResponseType|bool
     */
    public function kvkSearchDossierNumber(\Webservices\StructType\KvkSearchDossierNumberRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkSearchDossierNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkSearchParameters
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find business establishments using a variety of parameters
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkSearchParametersRequestType $parameters
     * @return \Webservices\StructType\KvkSearchParametersResponseType|bool
     */
    public function kvkSearchParameters(\Webservices\StructType\KvkSearchParametersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkSearchParameters($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkSearchPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find business establishments based on postcode and house number
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkSearchPostcodeRequestType $parameters
     * @return \Webservices\StructType\KvkSearchPostcodeResponseType|bool
     */
    public function kvkSearchPostcode(\Webservices\StructType\KvkSearchPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkSearchPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkSearchSelection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Search for businesses matching all of the given criteria.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkSearchSelectionRequestType $parameters
     * @return \Webservices\StructType\KvkSearchSelectionResponseType|bool
     */
    public function kvkSearchSelection(\Webservices\StructType\KvkSearchSelectionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkSearchSelection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkGetExtractDocument
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister)
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkGetExtractDocumentRequestType $parameters
     * @return \Webservices\StructType\KvkGetExtractDocumentResponseType|bool
     */
    public function kvkGetExtractDocument(\Webservices\StructType\KvkGetExtractDocumentRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkGetExtractDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkUpdateCheckDossier
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve information on the last change of a business establishment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkUpdateCheckDossierRequestType $parameters
     * @return \Webservices\StructType\KvkUpdateCheckDossierResponseType|bool
     */
    public function kvkUpdateCheckDossier(\Webservices\StructType\KvkUpdateCheckDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkUpdateCheckDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkUpdateGetChangedDossiers
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve all dossiers changed since the given date.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkUpdateGetChangedDossiersRequestType $parameters
     * @return \Webservices\StructType\KvkUpdateGetChangedDossiersResponseType|bool
     */
    public function kvkUpdateGetChangedDossiers(\Webservices\StructType\KvkUpdateGetChangedDossiersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkUpdateGetChangedDossiers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkUpdateGetDossiers
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of all dossiers that have been updated since they were last retrieved by the user
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkUpdateGetDossiersRequestType $parameters
     * @return \Webservices\StructType\KvkUpdateGetDossiersResponseType|bool
     */
    public function kvkUpdateGetDossiers(\Webservices\StructType\KvkUpdateGetDossiersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkUpdateGetDossiers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkUpdateAddDossier
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Add a dossier to the list of dossiers for which the user (the user whose credentials are used to make the call) wants to receive updates
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkUpdateAddDossierRequestType $parameters
     * @return \Webservices\StructType\KvkUpdateAddDossierResponseType|bool
     */
    public function kvkUpdateAddDossier(\Webservices\StructType\KvkUpdateAddDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkUpdateAddDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kvkUpdateRemoveDossier
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Remove a dossier from the list of dossiers for which the user (the user whose credentials are used to make the call) wants to receive updates.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KvkUpdateRemoveDossierRequestType $parameters
     * @return \Webservices\StructType\KvkUpdateRemoveDossierResponseType|bool
     */
    public function kvkUpdateRemoveDossier(\Webservices\StructType\KvkUpdateRemoveDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kvkUpdateRemoveDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\KvkGetDossierResponseType|\Webservices\StructType\KvkGetExtractDocumentResponseType|\Webservices\StructType\KvkSearchDossierNumberResponseType|\Webservices\StructType\KvkSearchParametersResponseType|\Webservices\StructType\KvkSearchPostcodeResponseType|\Webservices\StructType\KvkSearchSelectionResponseType|\Webservices\StructType\KvkUpdateAddDossierResponseType|\Webservices\StructType\KvkUpdateCheckDossierResponseType|\Webservices\StructType\KvkUpdateGetChangedDossiersResponseType|\Webservices\StructType\KvkUpdateGetDossiersResponseType|\Webservices\StructType\KvkUpdateRemoveDossierResponseType
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
