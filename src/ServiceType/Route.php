<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Route ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Route extends SoapClientBase
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
     * Method to call the operation originally named routePlannerGetRoute
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get description and image for a route between two addresses
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerGetRouteRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerGetRouteResponseType|bool
     */
    public function routePlannerGetRoute(\Webservices\StructType\RoutePlannerGetRouteRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerGetRoute($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerInformationAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Summary information about a route calculated between two addresses
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerInformationAddressRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerInformationAddressResponseType|bool
     */
    public function routePlannerInformationAddress(\Webservices\StructType\RoutePlannerInformationAddressRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerInformationAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerDescriptionAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Detailed information about a route calculated between two addresses
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerDescriptionAddressRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerDescriptionAddressResponseType|bool
     */
    public function routePlannerDescriptionAddress(\Webservices\StructType\RoutePlannerDescriptionAddressRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerDescriptionAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerDescription
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a description of the fastest route between two postcodes. For every part of the route the drivetime in seconds and drivedistance in meters are given as well. If the english argument is true the description will be in english,
     * otherwise it will be in dutch.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerDescriptionRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerDescriptionResponseType|bool
     */
    public function routePlannerDescription(\Webservices\StructType\RoutePlannerDescriptionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerDescriptionShortest
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a description of the shortest route between two postcodes. For every part of the route the drivetime in seconds and drivedistance in meters are given as well. If the english argument is true the description will be in
     * english, otherwise it will be in dutch.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerDescriptionShortestRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerDescriptionShortestResponseType|bool
     */
    public function routePlannerDescriptionShortest(\Webservices\StructType\RoutePlannerDescriptionShortestRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerDescriptionShortest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * routePlannerDescriptionCoordinatesRD
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a description of the route between two dutch postcodes, including the RD coordinates along the route. For every part of the route the drivetime in seconds and drivedistance in meters are given as well. The routetype can be
     * shortest or fastest. By default the fastest route will be calculated. If the english argument is true the description will be in english, otherwise it will be in dutch.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDResponseType|bool
     */
    public function routePlannerDescriptionCoordinatesRD(\Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerDescriptionCoordinatesRD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerInformation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns information (drivetime in seconds and drivedistance in meters) of the route between two postcodes. The routetype can be shortest or fastest. By default the fastest route will be calculated.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerInformationRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerInformationResponseType|bool
     */
    public function routePlannerInformation(\Webservices\StructType\RoutePlannerInformationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerRDDescription
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a description of the route between two coordinates in the RD (Rijksdriehoeksmeting) coordinate system. For every part of the route the drivetime in seconds and drivedistance in meters are given as well. The description is
     * available in dutch and english, depending on the english parameter toggle. The fastest or shortest route can be calculated depending on theroutetype parameter.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerRDDescriptionRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerRDDescriptionResponseType|bool
     */
    public function routePlannerRDDescription(\Webservices\StructType\RoutePlannerRDDescriptionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerRDDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerRDInformation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the route distance and drive time between two coordinates in the RD (Rijksdriehoeksmeting) coordinate system. The fastest or shorted route can be calculated depending on the routetypeparameter.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerRDInformationRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerRDInformationResponseType|bool
     */
    public function routePlannerRDInformation(\Webservices\StructType\RoutePlannerRDInformationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerRDInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * routePlannerRDDescriptionCoordinatesRD
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a description of the route between two coordinates in the RD (Rijksdriehoeksmeting) coordinate system, including the RD coordinates along the route. For every part of the route the drivetime in seconds and drivedistance in
     * meters are given as well. The fastest or shortest route can be calculated depending on the routetype parameter. The description is available in dutch and english, depending on the english parameter toggle.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerRDDescriptionCoordinatesRDRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerRDDescriptionCoordinatesRDResponseType|bool
     */
    public function routePlannerRDDescriptionCoordinatesRD(\Webservices\StructType\RoutePlannerRDDescriptionCoordinatesRDRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerRDDescriptionCoordinatesRD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * routePlannerInformationDutchAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Summary information about a route calculated between two dutch-addresses
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerInformationDutchAddressRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerInformationDutchAddressResponseType|bool
     */
    public function routePlannerInformationDutchAddress(\Webservices\StructType\RoutePlannerInformationDutchAddressRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerInformationDutchAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * routePlannerDescriptionDutchAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Detailed information about a route calculated between two dutch-addresses
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressResponseType|bool
     */
    public function routePlannerDescriptionDutchAddress(\Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerDescriptionDutchAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerEUDescription
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a description of the route between two latitude/longitude coordinates in Europe. For every part of the route the drivetime and drivedistance are given as well. The description is available in several languages depending on
     * the language parameter. The fastest or shortest route is be calculated depending on the routetype parameter.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerEUDescriptionRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerEUDescriptionResponseType|bool
     */
    public function routePlannerEUDescription(\Webservices\StructType\RoutePlannerEUDescriptionRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerEUDescription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerEUInformation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns the route distance and drive time for the route between two latitude/longitude coordinates in Europe. The fastest or shortest route can be calculated depending on the routetype parameter.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerEUInformationRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerEUInformationResponseType|bool
     */
    public function routePlannerEUInformation(\Webservices\StructType\RoutePlannerEUInformationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerEUInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * routePlannerEUDescriptionCoordinatesLatLon
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a description of the route between two latitude/longitude coordinates in Europe, including the latitude/longitude coordinates along the route. For every part of the route the drivetime in seconds and drivedistance in meters
     * are given as well. The routetype can be shortest or fastest. By default information on the fastest route will be returned. The description is available in several languages depending on the language parameter.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerEUDescriptionCoordinatesLatLonRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerEUDescriptionCoordinatesLatLonResponseType|bool
     */
    public function routePlannerEUDescriptionCoordinatesLatLon(\Webservices\StructType\RoutePlannerEUDescriptionCoordinatesLatLonRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerEUDescriptionCoordinatesLatLon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named routePlannerEUMap
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a map showing the route between two latitude/longitude coordinates in Europe.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\RoutePlannerEUMapRequestType $parameters
     * @return \Webservices\StructType\RoutePlannerEUMapResponseType|bool
     */
    public function routePlannerEUMap(\Webservices\StructType\RoutePlannerEUMapRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->routePlannerEUMap($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\RoutePlannerDescriptionAddressResponseType|\Webservices\StructType\RoutePlannerDescriptionCoordinatesRDResponseType|\Webservices\StructType\RoutePlannerDescriptionDutchAddressResponseType|\Webservices\StructType\RoutePlannerDescriptionResponseType|\Webservices\StructType\RoutePlannerDescriptionShortestResponseType|\Webservices\StructType\RoutePlannerEUDescriptionCoordinatesLatLonResponseType|\Webservices\StructType\RoutePlannerEUDescriptionResponseType|\Webservices\StructType\RoutePlannerEUInformationResponseType|\Webservices\StructType\RoutePlannerEUMapResponseType|\Webservices\StructType\RoutePlannerGetRouteResponseType|\Webservices\StructType\RoutePlannerInformationAddressResponseType|\Webservices\StructType\RoutePlannerInformationDutchAddressResponseType|\Webservices\StructType\RoutePlannerInformationResponseType|\Webservices\StructType\RoutePlannerRDDescriptionCoordinatesRDResponseType|\Webservices\StructType\RoutePlannerRDDescriptionResponseType|\Webservices\StructType\RoutePlannerRDInformationResponseType
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
