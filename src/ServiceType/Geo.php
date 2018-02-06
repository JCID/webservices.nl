<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Geo ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Geo extends SoapClientBase
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
     * geoLocationNeighborhoodCoordinatesRD
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates in the RD system of the neighborhood, given the neighborhood code
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationNeighborhoodCoordinatesRDRequestType $parameters
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesRDResponseType|bool
     */
    public function geoLocationNeighborhoodCoordinatesRD(\Webservices\StructType\GeoLocationNeighborhoodCoordinatesRDRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationNeighborhoodCoordinatesRD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationPostcodeCoordinatesRD
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given postcode in the RD system.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationPostcodeCoordinatesRDRequestType $parameters
     * @return \Webservices\StructType\GeoLocationPostcodeCoordinatesRDResponseType|bool
     */
    public function geoLocationPostcodeCoordinatesRD(\Webservices\StructType\GeoLocationPostcodeCoordinatesRDRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationPostcodeCoordinatesRD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationNeighborhoodCoordinatesLatLon
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates in degrees of latitude/longitude of the neighborhood, given the neighborhood code
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonRequestType $parameters
     * @return \Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonResponseType|bool
     */
    public function geoLocationNeighborhoodCoordinatesLatLon(\Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationNeighborhoodCoordinatesLatLon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationPostcodeCoordinatesLatLon
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given postcode in degrees of latitude/longitude.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationPostcodeCoordinatesLatLonRequestType $parameters
     * @return \Webservices\StructType\GeoLocationPostcodeCoordinatesLatLonResponseType|bool
     */
    public function geoLocationPostcodeCoordinatesLatLon(\Webservices\StructType\GeoLocationPostcodeCoordinatesLatLonRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationPostcodeCoordinatesLatLon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationAddressCoordinatesLatLon
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given address in degrees of latitude/longitude. Address may be specified by postcode + house number or by city + street + house number.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationAddressCoordinatesLatLonRequestType $parameters
     * @return \Webservices\StructType\GeoLocationAddressCoordinatesLatLonResponseType|bool
     */
    public function geoLocationAddressCoordinatesLatLon(\Webservices\StructType\GeoLocationAddressCoordinatesLatLonRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationAddressCoordinatesLatLon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationAddressCoordinatesRD
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given address in the RD system. Address may be specified by postcode + house number or by city + street + house number.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationAddressCoordinatesRDRequestType $parameters
     * @return \Webservices\StructType\GeoLocationAddressCoordinatesRDResponseType|bool
     */
    public function geoLocationAddressCoordinatesRD(\Webservices\StructType\GeoLocationAddressCoordinatesRDRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationAddressCoordinatesRD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationLatLonToPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the postcode of the address closest to the specified latitude/longitude coordinate in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationLatLonToPostcodeRequestType $parameters
     * @return \Webservices\StructType\GeoLocationLatLonToPostcodeResponseType|bool
     */
    public function geoLocationLatLonToPostcode(\Webservices\StructType\GeoLocationLatLonToPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationLatLonToPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationLatLonToAddressV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the address closest to the specified latitude/longitude coordinate in the Netherlands. The returned x, y, latitude and logitude values are the coordinates of the retrieved address. Distance is the distance between these
     * coordinates and the input coordinate in meters
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationLatLonToAddressV2RequestType $parameters
     * @return \Webservices\StructType\GeoLocationLatLonToAddressV2ResponseType|bool
     */
    public function geoLocationLatLonToAddressV2(\Webservices\StructType\GeoLocationLatLonToAddressV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationLatLonToAddressV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationRDToPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the postcode of the address closest to the specified Rijksdriehoeksmeting coordinate in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationRDToPostcodeRequestType $parameters
     * @return \Webservices\StructType\GeoLocationRDToPostcodeResponseType|bool
     */
    public function geoLocationRDToPostcode(\Webservices\StructType\GeoLocationRDToPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationRDToPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationRDToAddressV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the address closest to the specified Rijksdriehoeksmeting coordinate in the Netherlands. The returned x, y, latitude and logitude values are the coordinates of the retrieved address. Distance is the distance between these
     * coordinates and the input coordinate in meters
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationRDToAddressV2RequestType $parameters
     * @return \Webservices\StructType\GeoLocationRDToAddressV2ResponseType|bool
     */
    public function geoLocationRDToAddressV2(\Webservices\StructType\GeoLocationRDToAddressV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationRDToAddressV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationInternationalPostcodeCoordinatesLatLon
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given postcode in degrees of latitude/longitude. Most countries are supported in the function. Accuracy of the result may vary between countries.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationInternationalPostcodeCoordinatesLatLonRequestType $parameters
     * @return \Webservices\StructType\GeoLocationInternationalPostcodeCoordinatesLatLonResponseType|bool
     */
    public function geoLocationInternationalPostcodeCoordinatesLatLon(\Webservices\StructType\GeoLocationInternationalPostcodeCoordinatesLatLonRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationInternationalPostcodeCoordinatesLatLon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationInternationalAddressCoordinatesLatLon
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given address in degrees of latitude/longitude. Most countries are supported in the function. Accuracy of the result may vary between countries. Since the street and city have to contain the complete
     * name and since this method acts with international data, we recommend to use <geoLocationInternationalPostcodeCoordinatesLatLon> if you know the postcode, since working with postcodes is less error prone.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType $parameters
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonResponseType|bool
     */
    public function geoLocationInternationalAddressCoordinatesLatLon(\Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationInternationalAddressCoordinatesLatLon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationInternationalAddressCoordinatesLatLonV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the coordinates of the given address in degrees of latitude/longitude. Most countries are supported in the function. Accuracy of the result may vary between countries.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType $parameters
     * @return \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2ResponseType|bool
     */
    public function geoLocationInternationalAddressCoordinatesLatLonV2(\Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationInternationalAddressCoordinatesLatLonV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationInternationalLatLonToAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the address closest to the specified latitude/longitude coordinate. The returned latitude and logitude values make up the coordinate of the retrieved address. Distance is the distance between this coordinate and the input
     * coordinate in meters
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationInternationalLatLonToAddressRequestType $parameters
     * @return \Webservices\StructType\GeoLocationInternationalLatLonToAddressResponseType|bool
     */
    public function geoLocationInternationalLatLonToAddress(\Webservices\StructType\GeoLocationInternationalLatLonToAddressRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationInternationalLatLonToAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationNeighborhoodDistance
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the estimated distance in meters (in a direct line) between the two neighborhoods, given the neighborhood codes
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationNeighborhoodDistanceRequestType $parameters
     * @return \Webservices\StructType\GeoLocationNeighborhoodDistanceResponseType|bool
     */
    public function geoLocationNeighborhoodDistance(\Webservices\StructType\GeoLocationNeighborhoodDistanceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationNeighborhoodDistance($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationPostcodeDistance
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the estimated distance in meters (in a direct line) between the two postcodes.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationPostcodeDistanceRequestType $parameters
     * @return \Webservices\StructType\GeoLocationPostcodeDistanceResponseType|bool
     */
    public function geoLocationPostcodeDistance(\Webservices\StructType\GeoLocationPostcodeDistanceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationPostcodeDistance($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationHaversineDistance
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the distance in meters (in a direct line) between two latitude/longitude coordinates
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationHaversineDistanceRequestType $parameters
     * @return \Webservices\StructType\GeoLocationHaversineDistanceResponseType|bool
     */
    public function geoLocationHaversineDistance(\Webservices\StructType\GeoLocationHaversineDistanceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationHaversineDistance($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationDistanceSortedNeighborhoodCodes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the neighborhood codes list sorted in order of increasing distance from a given neighborhood.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRequestType $parameters
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesResponseType|bool
     */
    public function geoLocationDistanceSortedNeighborhoodCodes(\Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationDistanceSortedNeighborhoodCodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationDistanceSortedNeighborhoodCodesRadius
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the neighborhood codes list sorted in order of increasing distance from a given neighborhood, within a given radius (in meters).
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType $parameters
     * @return \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusResponseType|bool
     */
    public function geoLocationDistanceSortedNeighborhoodCodesRadius(\Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationDistanceSortedNeighborhoodCodesRadius($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * geoLocationDistanceSortedPostcodesRadius
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of postcodes sorted in order of increasing distance from a given postcode, within a given radius (in meters). If the radius is larger than 1500 meters, the result will be based on neighborhood codes
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationDistanceSortedPostcodesRadiusRequestType $parameters
     * @return \Webservices\StructType\GeoLocationDistanceSortedPostcodesRadiusResponseType|bool
     */
    public function geoLocationDistanceSortedPostcodesRadius(\Webservices\StructType\GeoLocationDistanceSortedPostcodesRadiusRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationDistanceSortedPostcodesRadius($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationDistanceSortedPostcodes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a given postcode list sorted in order of increasingdistance from a given postcode.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationDistanceSortedPostcodesRequestType $parameters
     * @return \Webservices\StructType\GeoLocationDistanceSortedPostcodesResponseType|bool
     */
    public function geoLocationDistanceSortedPostcodes(\Webservices\StructType\GeoLocationDistanceSortedPostcodesRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationDistanceSortedPostcodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationLatLonToRD
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Convert a latitude/longitude coordinate to a RD ('Rijksdriehoeksmeting') coordinate.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationLatLonToRDRequestType $parameters
     * @return \Webservices\StructType\GeoLocationLatLonToRDResponseType|bool
     */
    public function geoLocationLatLonToRD(\Webservices\StructType\GeoLocationLatLonToRDRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationLatLonToRD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named geoLocationRDToLatLon
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Convert a RD ('Rijksdriehoeksmeting') coordinate to a latitude/longitude coordinate.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GeoLocationRDToLatLonRequestType $parameters
     * @return \Webservices\StructType\GeoLocationRDToLatLonResponseType|bool
     */
    public function geoLocationRDToLatLon(\Webservices\StructType\GeoLocationRDToLatLonRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->geoLocationRDToLatLon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\GeoLocationAddressCoordinatesLatLonResponseType|\Webservices\StructType\GeoLocationAddressCoordinatesRDResponseType|\Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusResponseType|\Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesResponseType|\Webservices\StructType\GeoLocationDistanceSortedPostcodesRadiusResponseType|\Webservices\StructType\GeoLocationDistanceSortedPostcodesResponseType|\Webservices\StructType\GeoLocationHaversineDistanceResponseType|\Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonResponseType|\Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2ResponseType|\Webservices\StructType\GeoLocationInternationalLatLonToAddressResponseType|\Webservices\StructType\GeoLocationInternationalPostcodeCoordinatesLatLonResponseType|\Webservices\StructType\GeoLocationLatLonToAddressV2ResponseType|\Webservices\StructType\GeoLocationLatLonToPostcodeResponseType|\Webservices\StructType\GeoLocationLatLonToRDResponseType|\Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonResponseType|\Webservices\StructType\GeoLocationNeighborhoodCoordinatesRDResponseType|\Webservices\StructType\GeoLocationNeighborhoodDistanceResponseType|\Webservices\StructType\GeoLocationPostcodeCoordinatesLatLonResponseType|\Webservices\StructType\GeoLocationPostcodeCoordinatesRDResponseType|\Webservices\StructType\GeoLocationPostcodeDistanceResponseType|\Webservices\StructType\GeoLocationRDToAddressV2ResponseType|\Webservices\StructType\GeoLocationRDToLatLonResponseType|\Webservices\StructType\GeoLocationRDToPostcodeResponseType
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
