<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Kadaster ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Kadaster extends SoapClientBase
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
     * Method to call the operation originally named
     * kadasterEigendomsBerichtDocumentPerceel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Eigendomsbericht' by parcel details. Returns the result in a file of the specified format. If the input matches more than one parcel, a list of the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterEigendomsBerichtDocumentPerceelRequestType $parameters
     * @return \Webservices\StructType\KadasterEigendomsBerichtDocumentPerceelResponseType|bool
     */
    public function kadasterEigendomsBerichtDocumentPerceel(\Webservices\StructType\KadasterEigendomsBerichtDocumentPerceelRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterEigendomsBerichtDocumentPerceel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterEigendomsBerichtDocumentPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Eigendomsbericht' by postcode and house number. Returns the result in a file of the specified format. If the input matches more than one parcel, a list of the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterEigendomsBerichtDocumentPostcodeRequestType $parameters
     * @return \Webservices\StructType\KadasterEigendomsBerichtDocumentPostcodeResponseType|bool
     */
    public function kadasterEigendomsBerichtDocumentPostcode(\Webservices\StructType\KadasterEigendomsBerichtDocumentPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterEigendomsBerichtDocumentPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterEigendomsBerichtPerceelV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Eigendomsbericht' by parcel details. Returns the result as a <BerichtObjectResultaatV2>. In addition to the structured result, a file of the specified format is returned. If the input matches more than one parcel, a list of
     * the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterEigendomsBerichtPerceelV2RequestType $parameters
     * @return \Webservices\StructType\KadasterEigendomsBerichtPerceelV2ResponseType|bool
     */
    public function kadasterEigendomsBerichtPerceelV2(\Webservices\StructType\KadasterEigendomsBerichtPerceelV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterEigendomsBerichtPerceelV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterEigendomsBerichtPostcodeV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Eigendomsbericht' by postcode and house number. Returns the result as a <BerichtObjectResultaatV2>. In addition to the structured result, a file of the specified format is returned. If the input matches more than one parcel,
     * a list of the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterEigendomsBerichtPostcodeV2RequestType $parameters
     * @return \Webservices\StructType\KadasterEigendomsBerichtPostcodeV2ResponseType|bool
     */
    public function kadasterEigendomsBerichtPostcodeV2(\Webservices\StructType\KadasterEigendomsBerichtPostcodeV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterEigendomsBerichtPostcodeV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterKoopsommenOverzichtV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a koopsommenoverzicht (in English: real estate transactions overview), which is a list of all transactions of the past five years in the given postcode range.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterKoopsommenOverzichtV2RequestType $parameters
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtV2ResponseType|bool
     */
    public function kadasterKoopsommenOverzichtV2(\Webservices\StructType\KadasterKoopsommenOverzichtV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterKoopsommenOverzichtV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterUittrekselKadastraleKaartPerceelV3
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Uittreksel Kadastrale Kaart' (a map showing the boundaries of a parcel and buildings on that parcel) in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV3RequestType $parameters
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV3ResponseType|bool
     */
    public function kadasterUittrekselKadastraleKaartPerceelV3(\Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterUittrekselKadastraleKaartPerceelV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterUittrekselKadastraleKaartPostcodeV3
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Uittreksel Kadastrale Kaart' (a map showing the boundaries of a parcel and buildings on that parcel) in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV3RequestType $parameters
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV3ResponseType|bool
     */
    public function kadasterUittrekselKadastraleKaartPostcodeV3(\Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterUittrekselKadastraleKaartPostcodeV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterHypothecairBerichtPostcodeV3
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Hypothecair bericht' by postcode and house number. If the input matches more than one parcel, a list of the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterHypothecairBerichtPostcodeV3RequestType $parameters
     * @return \Webservices\StructType\KadasterHypothecairBerichtPostcodeV3ResponseType|bool
     */
    public function kadasterHypothecairBerichtPostcodeV3(\Webservices\StructType\KadasterHypothecairBerichtPostcodeV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterHypothecairBerichtPostcodeV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterHypothecairBerichtPerceelV3
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Hypothecair bericht' by parcel details.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterHypothecairBerichtPerceelV3RequestType $parameters
     * @return \Webservices\StructType\KadasterHypothecairBerichtPerceelV3ResponseType|bool
     */
    public function kadasterHypothecairBerichtPerceelV3(\Webservices\StructType\KadasterHypothecairBerichtPerceelV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterHypothecairBerichtPerceelV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterBronDocument
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'brondocument', a document which is the basis for an ascription.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterBronDocumentRequestType $parameters
     * @return \Webservices\StructType\KadasterBronDocumentResponseType|bool
     */
    public function kadasterBronDocument(\Webservices\StructType\KadasterBronDocumentRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterBronDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterValueListGetRanges
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterValueListGetRangesRequestType $parameters
     * @return \Webservices\StructType\KadasterValueListGetRangesResponseType|bool
     */
    public function kadasterValueListGetRanges(\Webservices\StructType\KadasterValueListGetRangesRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterValueListGetRanges($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterValueListGetMunicipalities
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterValueListGetMunicipalitiesRequestType $parameters
     * @return \Webservices\StructType\KadasterValueListGetMunicipalitiesResponseType|bool
     */
    public function kadasterValueListGetMunicipalities(\Webservices\StructType\KadasterValueListGetMunicipalitiesRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterValueListGetMunicipalities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterAddressCoordinates
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given address in both the RD system and the latitude/longitude system. The lat/lon coordinates are derived from the RD coordinates.The address may be specified by giving the postcode, house number &
     * house number addition or by giving the cityname, streetname, house number & house number addition.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterAddressCoordinatesRequestType $parameters
     * @return \Webservices\StructType\KadasterAddressCoordinatesResponseType|bool
     */
    public function kadasterAddressCoordinates(\Webservices\StructType\KadasterAddressCoordinatesRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterAddressCoordinates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterKadastraleKaartPerceelV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Kadata WMS De Kadastrale Kaart' map in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterKadastraleKaartPerceelV2RequestType $parameters
     * @return \Webservices\StructType\KadasterKadastraleKaartPerceelV2ResponseType|bool
     */
    public function kadasterKadastraleKaartPerceelV2(\Webservices\StructType\KadasterKadastraleKaartPerceelV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterKadastraleKaartPerceelV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterKadastraleKaartPostcodeV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Kadata WMS De Kadastrale Kaart' map in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType $parameters
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeV2ResponseType|bool
     */
    public function kadasterKadastraleKaartPostcodeV2(\Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterKadastraleKaartPostcodeV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterUittrekselKadastraleKaartPerceel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: This function is deprecated and will not be available in the future. Use "kadasterUittrekselKadastraleKaartPerceelV2" instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelRequestType $parameters
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelResponseType|bool
     */
    public function kadasterUittrekselKadastraleKaartPerceel(\Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterUittrekselKadastraleKaartPerceel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterUittrekselKadastraleKaartPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: This function is deprecated and will not be available in the future. Use "kadasterUittrekselKadastraleKaartPostcodeV2" instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeRequestType $parameters
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeResponseType|bool
     */
    public function kadasterUittrekselKadastraleKaartPostcode(\Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterUittrekselKadastraleKaartPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterHypothecairBerichtPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Hypothecair bericht' by postcode and house number. If the input matches more than one parcel, a list of the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterHypothecairBerichtPostcodeRequestType $parameters
     * @return \Webservices\StructType\KadasterHypothecairBerichtPostcodeResponseType|bool
     */
    public function kadasterHypothecairBerichtPostcode(\Webservices\StructType\KadasterHypothecairBerichtPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterHypothecairBerichtPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterHypothecairBerichtPerceel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Hypothecair bericht' by parcel details.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterHypothecairBerichtPerceelRequestType $parameters
     * @return \Webservices\StructType\KadasterHypothecairBerichtPerceelResponseType|bool
     */
    public function kadasterHypothecairBerichtPerceel(\Webservices\StructType\KadasterHypothecairBerichtPerceelRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterHypothecairBerichtPerceel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterEigendomsBerichtPerceel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Eigendomsbericht' by parcel details. Returns the result as a <BerichtObjectResultaat>. In addition to the structured result, a file of the specified format is returned. If the input matches more than one parcel, a list of the
     * parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterEigendomsBerichtPerceelRequestType $parameters
     * @return \Webservices\StructType\KadasterEigendomsBerichtPerceelResponseType|bool
     */
    public function kadasterEigendomsBerichtPerceel(\Webservices\StructType\KadasterEigendomsBerichtPerceelRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterEigendomsBerichtPerceel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterEigendomsBerichtPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Eigendomsbericht' by postcode and house number. Returns the result as a <BerichtObjectResultaat>. In addition to the structured result, a file of the specified format is returned. If the input matches more than one parcel, a
     * list of the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterEigendomsBerichtPostcodeRequestType $parameters
     * @return \Webservices\StructType\KadasterEigendomsBerichtPostcodeResponseType|bool
     */
    public function kadasterEigendomsBerichtPostcode(\Webservices\StructType\KadasterEigendomsBerichtPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterEigendomsBerichtPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterUittrekselKadastraleKaartPerceelV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Uittreksel Kadastrale Kaart' (a map showing the boundaries of a parcel and buildings on that parcel) in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV2RequestType $parameters
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV2ResponseType|bool
     */
    public function kadasterUittrekselKadastraleKaartPerceelV2(\Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterUittrekselKadastraleKaartPerceelV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterUittrekselKadastraleKaartPostcodeV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Uittreksel Kadastrale Kaart' (a map showing the boundaries of a parcel and buildings on that parcel) in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV2RequestType $parameters
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV2ResponseType|bool
     */
    public function kadasterUittrekselKadastraleKaartPostcodeV2(\Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterUittrekselKadastraleKaartPostcodeV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterKadastraleKaartPerceel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Kadata WMS De Kadastrale Kaart' map in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterKadastraleKaartPerceelRequestType $parameters
     * @return \Webservices\StructType\KadasterKadastraleKaartPerceelResponseType|bool
     */
    public function kadasterKadastraleKaartPerceel(\Webservices\StructType\KadasterKadastraleKaartPerceelRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterKadastraleKaartPerceel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterKadastraleKaartPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a 'Kadata WMS De Kadastrale Kaart' map in the specified format.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterKadastraleKaartPostcodeRequestType $parameters
     * @return \Webservices\StructType\KadasterKadastraleKaartPostcodeResponseType|bool
     */
    public function kadasterKadastraleKaartPostcode(\Webservices\StructType\KadasterKadastraleKaartPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterKadastraleKaartPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterHypothecairBerichtPostcodeV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Hypothecair bericht' by postcode and house number. If the input matches more than one parcel, a list of the parcels found is returned instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterHypothecairBerichtPostcodeV2RequestType $parameters
     * @return \Webservices\StructType\KadasterHypothecairBerichtPostcodeV2ResponseType|bool
     */
    public function kadasterHypothecairBerichtPostcodeV2(\Webservices\StructType\KadasterHypothecairBerichtPostcodeV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterHypothecairBerichtPostcodeV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterHypothecairBerichtPerceelV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a 'Hypothecair bericht' by parcel details.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterHypothecairBerichtPerceelV2RequestType $parameters
     * @return \Webservices\StructType\KadasterHypothecairBerichtPerceelV2ResponseType|bool
     */
    public function kadasterHypothecairBerichtPerceelV2(\Webservices\StructType\KadasterHypothecairBerichtPerceelV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterHypothecairBerichtPerceelV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterKoopsommenOverzicht
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a koopsommenoverzicht (in English: real estate transactions overview), which is a list of all transactions of the past five years in the given postcode range.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterKoopsommenOverzichtRequestType $parameters
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtResponseType|bool
     */
    public function kadasterKoopsommenOverzicht(\Webservices\StructType\KadasterKoopsommenOverzichtRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterKoopsommenOverzicht($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetKadastraalBerichtObjectByAdres
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a "KadastraalBerichtObject" using an address
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByAdresRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByAdresResponseType|bool
     */
    public function kadasterV2GetKadastraalBerichtObjectByAdres(\Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByAdresRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetKadastraalBerichtObjectByAdres($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetKadastraalBerichtObjectByKadastraleAanduiding
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a "KadastraalBerichtObject" using a designation for the parcel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByKadastraleAanduidingRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByKadastraleAanduidingResponseType|bool
     */
    public function kadasterV2GetKadastraalBerichtObjectByKadastraleAanduiding(\Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByKadastraleAanduidingRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetKadastraalBerichtObjectByKadastraleAanduiding($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetKadastraalBerichtObjectByObjectId
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a "KadastraalBerichtObject" using its identifier
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByObjectIdRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByObjectIdResponseType|bool
     */
    public function kadasterV2GetKadastraalBerichtObjectByObjectId(\Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByObjectIdRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetKadastraalBerichtObjectByObjectId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetHypothecairBerichtObjectByAdres
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a "HypothecairBerichtObject" using an address
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresResponseType|bool
     */
    public function kadasterV2GetHypothecairBerichtObjectByAdres(\Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetHypothecairBerichtObjectByAdres($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetHypothecairBerichtObjectByKadastraleAanduiding
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a "HypothecairBerichtObject" using a designation for the parcel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByKadastraleAanduidingRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByKadastraleAanduidingResponseType|bool
     */
    public function kadasterV2GetHypothecairBerichtObjectByKadastraleAanduiding(\Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByKadastraleAanduidingRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetHypothecairBerichtObjectByKadastraleAanduiding($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetHypothecairBerichtObjectByObjectId
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a "HypothecairBerichtObject" using its identifier
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByObjectIdRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByObjectIdResponseType|bool
     */
    public function kadasterV2GetHypothecairBerichtObjectByObjectId(\Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByObjectIdRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetHypothecairBerichtObjectByObjectId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetUittrekselKadastraleKaartByAdres
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch an "UittrekselKadastraleKaart" using an address
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByAdresRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByAdresResponseType|bool
     */
    public function kadasterV2GetUittrekselKadastraleKaartByAdres(\Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByAdresRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetUittrekselKadastraleKaartByAdres($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetUittrekselKadastraleKaartByKadastraleAanduiding
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch an "UittrekselKadastraleKaart" using a designation for the parcel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingResponseType|bool
     */
    public function kadasterV2GetUittrekselKadastraleKaartByKadastraleAanduiding(\Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetUittrekselKadastraleKaartByKadastraleAanduiding($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * kadasterV2GetUittrekselKadastraleKaartByObjectId
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch an "UittrekselKadastraleKaart" using its identifier
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByObjectIdResponseType|bool
     */
    public function kadasterV2GetUittrekselKadastraleKaartByObjectId(\Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetUittrekselKadastraleKaartByObjectId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterV2GetKoopsommenOverzicht
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a list of "Koopsommen" using an address
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetKoopsommenOverzichtRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetKoopsommenOverzichtResponseType|bool
     */
    public function kadasterV2GetKoopsommenOverzicht(\Webservices\StructType\KadasterV2GetKoopsommenOverzichtRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetKoopsommenOverzicht($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named kadasterV2GetBronDocument
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Fetch a "KadasterV2BronDocumentResponse"
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\KadasterV2GetBronDocumentRequestType $parameters
     * @return \Webservices\StructType\KadasterV2GetBronDocumentResponseType|bool
     */
    public function kadasterV2GetBronDocument(\Webservices\StructType\KadasterV2GetBronDocumentRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->kadasterV2GetBronDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\KadasterAddressCoordinatesResponseType|\Webservices\StructType\KadasterBronDocumentResponseType|\Webservices\StructType\KadasterEigendomsBerichtDocumentPerceelResponseType|\Webservices\StructType\KadasterEigendomsBerichtDocumentPostcodeResponseType|\Webservices\StructType\KadasterEigendomsBerichtPerceelResponseType|\Webservices\StructType\KadasterEigendomsBerichtPerceelV2ResponseType|\Webservices\StructType\KadasterEigendomsBerichtPostcodeResponseType|\Webservices\StructType\KadasterEigendomsBerichtPostcodeV2ResponseType|\Webservices\StructType\KadasterHypothecairBerichtPerceelResponseType|\Webservices\StructType\KadasterHypothecairBerichtPerceelV2ResponseType|\Webservices\StructType\KadasterHypothecairBerichtPerceelV3ResponseType|\Webservices\StructType\KadasterHypothecairBerichtPostcodeResponseType|\Webservices\StructType\KadasterHypothecairBerichtPostcodeV2ResponseType|\Webservices\StructType\KadasterHypothecairBerichtPostcodeV3ResponseType|\Webservices\StructType\KadasterKadastraleKaartPerceelResponseType|\Webservices\StructType\KadasterKadastraleKaartPerceelV2ResponseType|\Webservices\StructType\KadasterKadastraleKaartPostcodeResponseType|\Webservices\StructType\KadasterKadastraleKaartPostcodeV2ResponseType|\Webservices\StructType\KadasterKoopsommenOverzichtResponseType|\Webservices\StructType\KadasterKoopsommenOverzichtV2ResponseType|\Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelResponseType|\Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV2ResponseType|\Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV3ResponseType|\Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeResponseType|\Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV2ResponseType|\Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV3ResponseType|\Webservices\StructType\KadasterV2GetBronDocumentResponseType|\Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresResponseType|\Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByKadastraleAanduidingResponseType|\Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByObjectIdResponseType|\Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByAdresResponseType|\Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByKadastraleAanduidingResponseType|\Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByObjectIdResponseType|\Webservices\StructType\KadasterV2GetKoopsommenOverzichtResponseType|\Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByAdresResponseType|\Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingResponseType|\Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByObjectIdResponseType|\Webservices\StructType\KadasterValueListGetMunicipalitiesResponseType|\Webservices\StructType\KadasterValueListGetRangesResponseType
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
