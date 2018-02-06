<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Business ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Business extends SoapClientBase
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
     * Method to call the operation originally named businessGetEstablishmentNumber
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve the establishment number (Dutch 'Vestigingsnummer') for a business.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessGetEstablishmentNumberRequestType $parameters
     * @return \Webservices\StructType\BusinessGetEstablishmentNumberResponseType|bool
     */
    public function businessGetEstablishmentNumber(\Webservices\StructType\BusinessGetEstablishmentNumberRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessGetEstablishmentNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessGetBIKDescription
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a BIK ('Bedrijfsindeling kamers van koophandel') code, which is the type of code returned in a <BusinessDossier> as the Primary or Secondary activity code. The description for all levels of the BIK code is returned, even if
     * the full length BIK code does not exist. Descriptions of the section associated with the BIK code is also returned.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessGetBIKDescriptionRequestType $parameters
     * @return \Webservices\StructType\BusinessGetBIKDescriptionResponseType|bool
     */
    public function businessGetBIKDescription(\Webservices\StructType\BusinessGetBIKDescriptionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessGetBIKDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessGetSBIDescription
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
     * @param \Webservices\StructType\BusinessGetSBIDescriptionRequestType $parameters
     * @return \Webservices\StructType\BusinessGetSBIDescriptionResponseType|bool
     */
    public function businessGetSBIDescription(\Webservices\StructType\BusinessGetSBIDescriptionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessGetSBIDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessBIKToSBI
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessBIKToSBIRequestType $parameters
     * @return \Webservices\StructType\BusinessBIKToSBIResponseType|bool
     */
    public function businessBIKToSBI(\Webservices\StructType\BusinessBIKToSBIRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessBIKToSBI($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSBIToBIK
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSBIToBIKRequestType $parameters
     * @return \Webservices\StructType\BusinessSBIToBIKResponseType|bool
     */
    public function businessSBIToBIK(\Webservices\StructType\BusinessSBIToBIKRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSBIToBIK($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessGetDossierV3
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business Dossier. The subdossierno parameter can be left empty to get all Sub Dossiers of one Dossier.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessGetDossierV3RequestType $parameters
     * @return \Webservices\StructType\BusinessGetDossierV3ResponseType|bool
     */
    public function businessGetDossierV3(\Webservices\StructType\BusinessGetDossierV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessGetDossierV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessGetDossierExtended
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up an extended business Dossier.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessGetDossierExtendedRequestType $parameters
     * @return \Webservices\StructType\BusinessGetDossierExtendedResponseType|bool
     */
    public function businessGetDossierExtended(\Webservices\StructType\BusinessGetDossierExtendedRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessGetDossierExtended($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchDossierNumber
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business using its dossier number.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchDossierNumberRequestType $parameters
     * @return \Webservices\StructType\BusinessSearchDossierNumberResponseType|bool
     */
    public function businessSearchDossierNumber(\Webservices\StructType\BusinessSearchDossierNumberRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchDossierNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business using its postcode address. nbcode is required, other parameters may be left empty.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchPostcodeRequestType $parameters
     * @return \Webservices\StructType\BusinessSearchPostcodeResponseType|bool
     */
    public function businessSearchPostcode(\Webservices\StructType\BusinessSearchPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Lookup a business using its address. Specified parameters are compared against both establishment and correspondence addresses to find a match. Parameters may be left empty.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchAddressRequestType $parameters
     * @return \Webservices\StructType\BusinessSearchAddressResponseType|bool
     */
    public function businessSearchAddress(\Webservices\StructType\BusinessSearchAddressRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchName
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Lookup a business using its name.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchNameRequestType $parameters
     * @return \Webservices\StructType\BusinessSearchNameResponseType|bool
     */
    public function businessSearchName(\Webservices\StructType\BusinessSearchNameRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchParameters
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business by a number of parameters. At least a tradename, neighborhood code, street, city or telephone number is required. Lookups based on postbus address are possible by specifying streetname "Postbus" and specifying the
     * postbus number in the houseno parameter. Specified address parameters are compared against both establishment and correspondence addresses to find a match.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchParametersRequestType $parameters
     * @return \Webservices\StructType\BusinessSearchParametersResponseType|bool
     */
    public function businessSearchParameters(\Webservices\StructType\BusinessSearchParametersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchParameters($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchParametersV3
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business by a number of parameters. At least a tradename, neighborhood code, street, city or telephone number is required. Lookups based on postbus address are possible by specifying streetname "Postbus" and specifying the
     * postbus number in the houseno parameter. Specified address parameters are compared against both establishment and correspondence addresses to find a match.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchParametersV3RequestType $parameters
     * @return \Webservices\StructType\BusinessSearchParametersV3ResponseType|bool
     */
    public function businessSearchParametersV3(\Webservices\StructType\BusinessSearchParametersV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchParametersV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchSelection
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business using its location and SBI code.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchSelectionRequestType $parameters
     * @return \Webservices\StructType\BusinessSearchSelectionResponseType|bool
     */
    public function businessSearchSelection(\Webservices\StructType\BusinessSearchSelectionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchSelection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchSelectionV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business using its location and SBI code.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchSelectionV2RequestType $parameters
     * @return \Webservices\StructType\BusinessSearchSelectionV2ResponseType|bool
     */
    public function businessSearchSelectionV2(\Webservices\StructType\BusinessSearchSelectionV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchSelectionV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessGetDossierSBI
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the SBI codes and their descriptions for a dossier.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessGetDossierSBIRequestType $parameters
     * @return \Webservices\StructType\BusinessGetDossierSBIResponseType|bool
     */
    public function businessGetDossierSBI(\Webservices\StructType\BusinessGetDossierSBIRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessGetDossierSBI($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessUpdateCheckDossier
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessUpdateCheckDossierRequestType $parameters
     * @return \Webservices\StructType\BusinessUpdateCheckDossierResponseType|bool
     */
    public function businessUpdateCheckDossier(\Webservices\StructType\BusinessUpdateCheckDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessUpdateCheckDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessUpdateGetChangedDossiers
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve dossier numbers for all dossiers changed since the given date.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessUpdateGetChangedDossiersRequestType $parameters
     * @return \Webservices\StructType\BusinessUpdateGetChangedDossiersResponseType|bool
     */
    public function businessUpdateGetChangedDossiers(\Webservices\StructType\BusinessUpdateGetChangedDossiersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessUpdateGetChangedDossiers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessUpdateGetDossiers
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
     * @param \Webservices\StructType\BusinessUpdateGetDossiersRequestType $parameters
     * @return \Webservices\StructType\BusinessUpdateGetDossiersResponseType|bool
     */
    public function businessUpdateGetDossiers(\Webservices\StructType\BusinessUpdateGetDossiersRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessUpdateGetDossiers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessUpdateAddDossier
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
     * @param \Webservices\StructType\BusinessUpdateAddDossierRequestType $parameters
     * @return \Webservices\StructType\BusinessUpdateAddDossierResponseType|bool
     */
    public function businessUpdateAddDossier(\Webservices\StructType\BusinessUpdateAddDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessUpdateAddDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessUpdateRemoveDossier
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
     * @param \Webservices\StructType\BusinessUpdateRemoveDossierRequestType $parameters
     * @return \Webservices\StructType\BusinessUpdateRemoveDossierResponseType|bool
     */
    public function businessUpdateRemoveDossier(\Webservices\StructType\BusinessUpdateRemoveDossierRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessUpdateRemoveDossier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named businessSearchParametersV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look up a business by a number of parameters. At least a tradename, neighborhood code, street, city or telephone number is required. Lookups based on postbus address are possible by specifying streetname "Postbus" and specifying the
     * postbus number in the houseno parameter. Specified address parameters are compared against both establishment and correspondence addresses to find a match.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\BusinessSearchParametersV2RequestType $parameters
     * @return \Webservices\StructType\BusinessSearchParametersV2ResponseType|bool
     */
    public function businessSearchParametersV2(\Webservices\StructType\BusinessSearchParametersV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->businessSearchParametersV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\BusinessBIKToSBIResponseType|\Webservices\StructType\BusinessGetBIKDescriptionResponseType|\Webservices\StructType\BusinessGetDossierExtendedResponseType|\Webservices\StructType\BusinessGetDossierSBIResponseType|\Webservices\StructType\BusinessGetDossierV3ResponseType|\Webservices\StructType\BusinessGetEstablishmentNumberResponseType|\Webservices\StructType\BusinessGetSBIDescriptionResponseType|\Webservices\StructType\BusinessSBIToBIKResponseType|\Webservices\StructType\BusinessSearchAddressResponseType|\Webservices\StructType\BusinessSearchDossierNumberResponseType|\Webservices\StructType\BusinessSearchNameResponseType|\Webservices\StructType\BusinessSearchParametersResponseType|\Webservices\StructType\BusinessSearchParametersV2ResponseType|\Webservices\StructType\BusinessSearchParametersV3ResponseType|\Webservices\StructType\BusinessSearchPostcodeResponseType|\Webservices\StructType\BusinessSearchSelectionResponseType|\Webservices\StructType\BusinessSearchSelectionV2ResponseType|\Webservices\StructType\BusinessUpdateAddDossierResponseType|\Webservices\StructType\BusinessUpdateCheckDossierResponseType|\Webservices\StructType\BusinessUpdateGetChangedDossiersResponseType|\Webservices\StructType\BusinessUpdateGetDossiersResponseType|\Webservices\StructType\BusinessUpdateRemoveDossierResponseType
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
