<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Dutch ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Dutch extends SoapClientBase
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
     * Method to call the operation originally named dutchAddressRangePostcodeSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Validate and complete an address based on postcode and house number.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchAddressRangePostcodeSearchRequestType $parameters
     * @return \Webservices\StructType\DutchAddressRangePostcodeSearchResponseType|bool
     */
    public function dutchAddressRangePostcodeSearch(\Webservices\StructType\DutchAddressRangePostcodeSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchAddressRangePostcodeSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetDossier
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
     * @param \Webservices\StructType\DutchBusinessGetDossierRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetDossierResponseType|bool
     */
    public function dutchBusinessGetDossier(\Webservices\StructType\DutchBusinessGetDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetDossierV2
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
     * @param \Webservices\StructType\DutchBusinessGetDossierV2RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetDossierV2ResponseType|bool
     */
    public function dutchBusinessGetDossierV2(\Webservices\StructType\DutchBusinessGetDossierV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetDossierV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetDossierV3
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
     * @param \Webservices\StructType\DutchBusinessGetDossierV3RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetDossierV3ResponseType|bool
     */
    public function dutchBusinessGetDossierV3(\Webservices\StructType\DutchBusinessGetDossierV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetDossierV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetSBI
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve SBI Information on a company
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetSBIRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetSBIResponseType|bool
     */
    public function dutchBusinessGetSBI(\Webservices\StructType\DutchBusinessGetSBIRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetSBI($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetVatNumber
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
     * @param \Webservices\StructType\DutchBusinessGetVatNumberRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetVatNumberResponseType|bool
     */
    public function dutchBusinessGetVatNumber(\Webservices\StructType\DutchBusinessGetVatNumberRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetVatNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetPositions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve position data on a business establishment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetPositionsRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetPositionsResponseType|bool
     */
    public function dutchBusinessGetPositions(\Webservices\StructType\DutchBusinessGetPositionsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetPositions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetLegalEntity
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve legal entity data on a business establishment
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetLegalEntityRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetLegalEntityResponseType|bool
     */
    public function dutchBusinessGetLegalEntity(\Webservices\StructType\DutchBusinessGetLegalEntityRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetLegalEntity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetOrganizationTree
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve the organization tree of a company
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetOrganizationTreeRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetOrganizationTreeResponseType|bool
     */
    public function dutchBusinessGetOrganizationTree(\Webservices\StructType\DutchBusinessGetOrganizationTreeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetOrganizationTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearchDossierNumber
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
     * @param \Webservices\StructType\DutchBusinessSearchDossierNumberRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchDossierNumberResponseType|bool
     */
    public function dutchBusinessSearchDossierNumber(\Webservices\StructType\DutchBusinessSearchDossierNumberRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearchDossierNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearchParametersV2
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
     * @param \Webservices\StructType\DutchBusinessSearchParametersV2RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchParametersV2ResponseType|bool
     */
    public function dutchBusinessSearchParametersV2(\Webservices\StructType\DutchBusinessSearchParametersV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearchParametersV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearch
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
     * @param \Webservices\StructType\DutchBusinessSearchRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchResponseType|bool
     */
    public function dutchBusinessSearch(\Webservices\StructType\DutchBusinessSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearchEstablishments
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
     * @param \Webservices\StructType\DutchBusinessSearchEstablishmentsRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchEstablishmentsResponseType|bool
     */
    public function dutchBusinessSearchEstablishments(\Webservices\StructType\DutchBusinessSearchEstablishmentsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearchEstablishments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearchPostcode
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
     * @param \Webservices\StructType\DutchBusinessSearchPostcodeRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchPostcodeResponseType|bool
     */
    public function dutchBusinessSearchPostcode(\Webservices\StructType\DutchBusinessSearchPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearchPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearchSelection
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
     * @param \Webservices\StructType\DutchBusinessSearchSelectionRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchSelectionResponseType|bool
     */
    public function dutchBusinessSearchSelection(\Webservices\StructType\DutchBusinessSearchSelectionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearchSelection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetSBIDescription
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a SBI ('Standaard Bedrijfs Indeling 2008') code.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetSBIDescriptionRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetSBIDescriptionResponseType|bool
     */
    public function dutchBusinessGetSBIDescription(\Webservices\StructType\DutchBusinessGetSBIDescriptionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetSBIDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetExtractDocument
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
     * @param \Webservices\StructType\DutchBusinessGetExtractDocumentRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractDocumentResponseType|bool
     */
    public function dutchBusinessGetExtractDocument(\Webservices\StructType\DutchBusinessGetExtractDocumentRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractDocumentData
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
     * @param \Webservices\StructType\DutchBusinessGetExtractDocumentDataRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractDocumentDataResponseType|bool
     */
    public function dutchBusinessGetExtractDocumentData(\Webservices\StructType\DutchBusinessGetExtractDocumentDataRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractDocumentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractDocumentDataV2
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
     * @param \Webservices\StructType\DutchBusinessGetExtractDocumentDataV2RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractDocumentDataV2ResponseType|bool
     */
    public function dutchBusinessGetExtractDocumentDataV2(\Webservices\StructType\DutchBusinessGetExtractDocumentDataV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractDocumentDataV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractDocumentDataV3
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
     * @param \Webservices\StructType\DutchBusinessGetExtractDocumentDataV3RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractDocumentDataV3ResponseType|bool
     */
    public function dutchBusinessGetExtractDocumentDataV3(\Webservices\StructType\DutchBusinessGetExtractDocumentDataV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractDocumentDataV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetLegalExtractDocumentDataV2
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
     * @param \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV2RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV2ResponseType|bool
     */
    public function dutchBusinessGetLegalExtractDocumentDataV2(\Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetLegalExtractDocumentDataV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetLegalExtractDocumentDataV3
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
     * @param \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3ResponseType|bool
     */
    public function dutchBusinessGetLegalExtractDocumentDataV3(\Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetLegalExtractDocumentDataV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetExtractHistory
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve a list of extract document references
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetExtractHistoryRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryResponseType|bool
     */
    public function dutchBusinessGetExtractHistory(\Webservices\StructType\DutchBusinessGetExtractHistoryRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractHistoryChanged
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve a list of extract document references
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetExtractHistoryChangedRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryChangedResponseType|bool
     */
    public function dutchBusinessGetExtractHistoryChanged(\Webservices\StructType\DutchBusinessGetExtractHistoryChangedRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractHistoryChanged($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractHistoryDocumentData
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
     * @param \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataResponseType|bool
     */
    public function dutchBusinessGetExtractHistoryDocumentData(\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractHistoryDocumentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractHistoryDocumentDataV2
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
     * @param \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV2RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV2ResponseType|bool
     */
    public function dutchBusinessGetExtractHistoryDocumentDataV2(\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractHistoryDocumentDataV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractHistoryDocumentDataV3
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
     * @param \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3RequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ResponseType|bool
     */
    public function dutchBusinessGetExtractHistoryDocumentDataV3(\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractHistoryDocumentDataV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessGetExtractHistoryDocumentDataV3ByDossier
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
     * @param \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierResponseType|bool
     */
    public function dutchBusinessGetExtractHistoryDocumentDataV3ByDossier(\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetExtractHistoryDocumentDataV3ByDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessGetDossierHistory
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get a list of logged updates for a specific business dossier
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessGetDossierHistoryRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessGetDossierHistoryResponseType|bool
     */
    public function dutchBusinessGetDossierHistory(\Webservices\StructType\DutchBusinessGetDossierHistoryRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessGetDossierHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessUpdateGetOverview
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get a paged result of all the dossier the logged on user is subscribed to.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessUpdateGetOverviewRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUpdateGetOverviewResponseType|bool
     */
    public function dutchBusinessUpdateGetOverview(\Webservices\StructType\DutchBusinessUpdateGetOverviewRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUpdateGetOverview($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessUpdateCheckDossier
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
     * @param \Webservices\StructType\DutchBusinessUpdateCheckDossierRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUpdateCheckDossierResponseType|bool
     */
    public function dutchBusinessUpdateCheckDossier(\Webservices\StructType\DutchBusinessUpdateCheckDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUpdateCheckDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessUpdateGetChangedDossiers
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
     * @param \Webservices\StructType\DutchBusinessUpdateGetChangedDossiersRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUpdateGetChangedDossiersResponseType|bool
     */
    public function dutchBusinessUpdateGetChangedDossiers(\Webservices\StructType\DutchBusinessUpdateGetChangedDossiersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUpdateGetChangedDossiers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessUpdateGetDossiers
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
     * @param \Webservices\StructType\DutchBusinessUpdateGetDossiersRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUpdateGetDossiersResponseType|bool
     */
    public function dutchBusinessUpdateGetDossiers(\Webservices\StructType\DutchBusinessUpdateGetDossiersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUpdateGetDossiers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessUpdateAddDossier
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
     * @param \Webservices\StructType\DutchBusinessUpdateAddDossierRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUpdateAddDossierResponseType|bool
     */
    public function dutchBusinessUpdateAddDossier(\Webservices\StructType\DutchBusinessUpdateAddDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUpdateAddDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessUpdateRemoveDossier
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
     * @param \Webservices\StructType\DutchBusinessUpdateRemoveDossierRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUpdateRemoveDossierResponseType|bool
     */
    public function dutchBusinessUpdateRemoveDossier(\Webservices\StructType\DutchBusinessUpdateRemoveDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUpdateRemoveDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearchNewsByDossier
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get a paged result of all news items found.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchNewsByDossierResponseType|bool
     */
    public function dutchBusinessSearchNewsByDossier(\Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearchNewsByDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessUBOStartInvestigation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Starts an UBO investigation for given dossierNumber and establishmentNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessUBOStartInvestigationRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUBOStartInvestigationResponseType|bool
     */
    public function dutchBusinessUBOStartInvestigation(\Webservices\StructType\DutchBusinessUBOStartInvestigationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUBOStartInvestigation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessUBOCheckInvestigation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Checks the status of an UBO investigation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessUBOCheckInvestigationRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUBOCheckInvestigationResponseType|bool
     */
    public function dutchBusinessUBOCheckInvestigation(\Webservices\StructType\DutchBusinessUBOCheckInvestigationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUBOCheckInvestigation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * dutchBusinessUBOPickupInvestigation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Pickup the result of an UBO investigation
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchBusinessUBOPickupInvestigationRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessUBOPickupInvestigationResponseType|bool
     */
    public function dutchBusinessUBOPickupInvestigation(\Webservices\StructType\DutchBusinessUBOPickupInvestigationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessUBOPickupInvestigation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchBusinessSearchParameters
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
     * @param \Webservices\StructType\DutchBusinessSearchParametersRequestType $parameters
     * @return \Webservices\StructType\DutchBusinessSearchParametersResponseType|bool
     */
    public function dutchBusinessSearchParameters(\Webservices\StructType\DutchBusinessSearchParametersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchBusinessSearchParameters($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchVehicleGetVehicleV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get the information of a dutch vehicle
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchVehicleGetVehicleV2RequestType $parameters
     * @return \Webservices\StructType\DutchVehicleGetVehicleV2ResponseType|bool
     */
    public function dutchVehicleGetVehicleV2(\Webservices\StructType\DutchVehicleGetVehicleV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchVehicleGetVehicleV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchVehicleGetPurchaseReference
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get the price information of a dutch vehicle
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchVehicleGetPurchaseReferenceRequestType $parameters
     * @return \Webservices\StructType\DutchVehicleGetPurchaseReferenceResponseType|bool
     */
    public function dutchVehicleGetPurchaseReference(\Webservices\StructType\DutchVehicleGetPurchaseReferenceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchVehicleGetPurchaseReference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchVehicleGetOwnerHistory
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get all the (previous) owners of a dutch vehicle
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchVehicleGetOwnerHistoryRequestType $parameters
     * @return \Webservices\StructType\DutchVehicleGetOwnerHistoryResponseType|bool
     */
    public function dutchVehicleGetOwnerHistory(\Webservices\StructType\DutchVehicleGetOwnerHistoryRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchVehicleGetOwnerHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchVehicleGetMarketValue
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get all the current market value of a vehicle
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchVehicleGetMarketValueRequestType $parameters
     * @return \Webservices\StructType\DutchVehicleGetMarketValueResponseType|bool
     */
    public function dutchVehicleGetMarketValue(\Webservices\StructType\DutchVehicleGetMarketValueRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchVehicleGetMarketValue($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named dutchVehicleGetVehicle
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get the information of a dutch vehicle
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\DutchVehicleGetVehicleRequestType $parameters
     * @return \Webservices\StructType\DutchVehicleGetVehicleResponseType|bool
     */
    public function dutchVehicleGetVehicle(\Webservices\StructType\DutchVehicleGetVehicleRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->dutchVehicleGetVehicle($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\DutchAddressRangePostcodeSearchResponseType|\Webservices\StructType\DutchBusinessGetDossierHistoryResponseType|\Webservices\StructType\DutchBusinessGetDossierResponseType|\Webservices\StructType\DutchBusinessGetDossierV2ResponseType|\Webservices\StructType\DutchBusinessGetDossierV3ResponseType|\Webservices\StructType\DutchBusinessGetExtractDocumentDataResponseType|\Webservices\StructType\DutchBusinessGetExtractDocumentDataV2ResponseType|\Webservices\StructType\DutchBusinessGetExtractDocumentDataV3ResponseType|\Webservices\StructType\DutchBusinessGetExtractDocumentResponseType|\Webservices\StructType\DutchBusinessGetExtractHistoryChangedResponseType|\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataResponseType|\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV2ResponseType|\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierResponseType|\Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ResponseType|\Webservices\StructType\DutchBusinessGetExtractHistoryResponseType|\Webservices\StructType\DutchBusinessGetLegalEntityResponseType|\Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV2ResponseType|\Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3ResponseType|\Webservices\StructType\DutchBusinessGetOrganizationTreeResponseType|\Webservices\StructType\DutchBusinessGetPositionsResponseType|\Webservices\StructType\DutchBusinessGetSBIDescriptionResponseType|\Webservices\StructType\DutchBusinessGetSBIResponseType|\Webservices\StructType\DutchBusinessGetVatNumberResponseType|\Webservices\StructType\DutchBusinessSearchDossierNumberResponseType|\Webservices\StructType\DutchBusinessSearchEstablishmentsResponseType|\Webservices\StructType\DutchBusinessSearchNewsByDossierResponseType|\Webservices\StructType\DutchBusinessSearchParametersResponseType|\Webservices\StructType\DutchBusinessSearchParametersV2ResponseType|\Webservices\StructType\DutchBusinessSearchPostcodeResponseType|\Webservices\StructType\DutchBusinessSearchResponseType|\Webservices\StructType\DutchBusinessSearchSelectionResponseType|\Webservices\StructType\DutchBusinessUBOCheckInvestigationResponseType|\Webservices\StructType\DutchBusinessUBOPickupInvestigationResponseType|\Webservices\StructType\DutchBusinessUBOStartInvestigationResponseType|\Webservices\StructType\DutchBusinessUpdateAddDossierResponseType|\Webservices\StructType\DutchBusinessUpdateCheckDossierResponseType|\Webservices\StructType\DutchBusinessUpdateGetChangedDossiersResponseType|\Webservices\StructType\DutchBusinessUpdateGetDossiersResponseType|\Webservices\StructType\DutchBusinessUpdateGetOverviewResponseType|\Webservices\StructType\DutchBusinessUpdateRemoveDossierResponseType|\Webservices\StructType\DutchVehicleGetMarketValueResponseType|\Webservices\StructType\DutchVehicleGetOwnerHistoryResponseType|\Webservices\StructType\DutchVehicleGetPurchaseReferenceResponseType|\Webservices\StructType\DutchVehicleGetVehicleResponseType|\Webservices\StructType\DutchVehicleGetVehicleV2ResponseType
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
