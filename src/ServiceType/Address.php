<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Address ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Address extends SoapClientBase
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
     * Method to call the operation originally named addressReeksPostcodeSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get an address by providing its complete postcode (including house number). This is a reeks level function.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressReeksPostcodeSearchRequestType $parameters
     * @return \Webservices\StructType\AddressReeksPostcodeSearchResponseType|bool
     */
    public function addressReeksPostcodeSearch(\Webservices\StructType\AddressReeksPostcodeSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressReeksPostcodeSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressReeksAddressSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Get an address by providing the address, postcode, city. This is a reeks level function.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressReeksAddressSearchRequestType $parameters
     * @return \Webservices\StructType\AddressReeksAddressSearchResponseType|bool
     */
    public function addressReeksAddressSearch(\Webservices\StructType\AddressReeksAddressSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressReeksAddressSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressReeksFullParameterSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look for an address by province, municipality, city, street, house number and house number addition. Returns a list of matches. This is a reeks level function.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressReeksFullParameterSearchRequestType $parameters
     * @return \Webservices\StructType\AddressReeksFullParameterSearchResponseType|bool
     */
    public function addressReeksFullParameterSearch(\Webservices\StructType\AddressReeksFullParameterSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressReeksFullParameterSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressReeksParameterSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look for an address by province, municipality, city, street, house number and house number addition. Returns a list of matches. This is a reeks level function.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressReeksParameterSearchRequestType $parameters
     * @return \Webservices\StructType\AddressReeksParameterSearchResponseType|bool
     */
    public function addressReeksParameterSearch(\Webservices\StructType\AddressReeksParameterSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressReeksParameterSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressPerceelPhraseSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look for an perceel address by simply providing a phrase such as "Somestreet 123". Returns a list of matches. This is a perceel level function (more accurate than reeks level).
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressPerceelPhraseSearchRequestType $parameters
     * @return \Webservices\StructType\AddressPerceelPhraseSearchResponseType|bool
     */
    public function addressPerceelPhraseSearch(\Webservices\StructType\AddressPerceelPhraseSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressPerceelPhraseSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * addressPerceelFullParameterSearchV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Look for an perceel address by province, municipality, city, street, house number and house number addition. Returns a list of matches This is a perceel level function (more accurate than reeks level).
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressPerceelFullParameterSearchV2RequestType $parameters
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchV2ResponseType|bool
     */
    public function addressPerceelFullParameterSearchV2(\Webservices\StructType\AddressPerceelFullParameterSearchV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressPerceelFullParameterSearchV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressProvinceListNeighborhoods
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of all neighborhood codes in the province
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressProvinceListNeighborhoodsRequestType $parameters
     * @return \Webservices\StructType\AddressProvinceListNeighborhoodsResponseType|bool
     */
    public function addressProvinceListNeighborhoods(\Webservices\StructType\AddressProvinceListNeighborhoodsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressProvinceListNeighborhoods($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressProvinceListDistricts
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of municipalities which are in the specified province
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressProvinceListDistrictsRequestType $parameters
     * @return \Webservices\StructType\AddressProvinceListDistrictsResponseType|bool
     */
    public function addressProvinceListDistricts(\Webservices\StructType\AddressProvinceListDistrictsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressProvinceListDistricts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressProvinceList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of all provinces
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressProvinceListRequestType $parameters
     * @return \Webservices\StructType\AddressProvinceListResponseType|bool
     */
    public function addressProvinceList(\Webservices\StructType\AddressProvinceListRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressProvinceList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressProvinceSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of provinces which match the given name
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressProvinceSearchRequestType $parameters
     * @return \Webservices\StructType\AddressProvinceSearchResponseType|bool
     */
    public function addressProvinceSearch(\Webservices\StructType\AddressProvinceSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressProvinceSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressDistrictSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of municipalities which match the given name
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressDistrictSearchRequestType $parameters
     * @return \Webservices\StructType\AddressDistrictSearchResponseType|bool
     */
    public function addressDistrictSearch(\Webservices\StructType\AddressDistrictSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressDistrictSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressDistrictListCities
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of cities which are in the specified municipality
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressDistrictListCitiesRequestType $parameters
     * @return \Webservices\StructType\AddressDistrictListCitiesResponseType|bool
     */
    public function addressDistrictListCities(\Webservices\StructType\AddressDistrictListCitiesRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressDistrictListCities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressDistrictListNeighborhoods
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of all neighborhood codes in the municipality
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressDistrictListNeighborhoodsRequestType $parameters
     * @return \Webservices\StructType\AddressDistrictListNeighborhoodsResponseType|bool
     */
    public function addressDistrictListNeighborhoods(\Webservices\StructType\AddressDistrictListNeighborhoodsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressDistrictListNeighborhoods($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressCitySearchV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Search for all cities that match a phrase. Cities are also matched if input matches a commonly used alternative city name. Exact matches on the official name are listed first, the rest of the results is sorted alphabetically.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressCitySearchV2RequestType $parameters
     * @return \Webservices\StructType\AddressCitySearchV2ResponseType|bool
     */
    public function addressCitySearchV2(\Webservices\StructType\AddressCitySearchV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressCitySearchV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressCityListNeighborhoods
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Returns a list of all neighborhood codes in the city
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressCityListNeighborhoodsRequestType $parameters
     * @return \Webservices\StructType\AddressCityListNeighborhoodsResponseType|bool
     */
    public function addressCityListNeighborhoods(\Webservices\StructType\AddressCityListNeighborhoodsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressCityListNeighborhoods($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressPerceelFullParameterSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: This is a deprecated function. Please use "addressPerceelFullParameterSearchV2" instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressPerceelFullParameterSearchRequestType $parameters
     * @return \Webservices\StructType\AddressPerceelFullParameterSearchResponseType|bool
     */
    public function addressPerceelFullParameterSearch(\Webservices\StructType\AddressPerceelFullParameterSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressPerceelFullParameterSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressPerceelParameterSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: This is a deprecated function. Please use "addressPerceelFullParameterSearchV2" or "addressPerceelPhraseSearch" instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressPerceelParameterSearchRequestType $parameters
     * @return \Webservices\StructType\AddressPerceelParameterSearchResponseType|bool
     */
    public function addressPerceelParameterSearch(\Webservices\StructType\AddressPerceelParameterSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressPerceelParameterSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressReeksPhraseSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: This function is deprecated and will not be available in the future. Use "addressReeksAddressSearch" or "addressReeksFullParameterSearch" instead.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressReeksPhraseSearchRequestType $parameters
     * @return \Webservices\StructType\AddressReeksPhraseSearchResponseType|bool
     */
    public function addressReeksPhraseSearch(\Webservices\StructType\AddressReeksPhraseSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressReeksPhraseSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressNeighborhoodName
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: This function is about to be removed!
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressNeighborhoodNameRequestType $parameters
     * @return \Webservices\StructType\AddressNeighborhoodNameResponseType|bool
     */
    public function addressNeighborhoodName(\Webservices\StructType\AddressNeighborhoodNameRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressNeighborhoodName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addressNeighborhoodPhraseSearch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: This function is about to be removed!
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\AddressNeighborhoodPhraseSearchRequestType $parameters
     * @return \Webservices\StructType\AddressNeighborhoodPhraseSearchResponseType|bool
     */
    public function addressNeighborhoodPhraseSearch(\Webservices\StructType\AddressNeighborhoodPhraseSearchRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addressNeighborhoodPhraseSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\AddressCityListNeighborhoodsResponseType|\Webservices\StructType\AddressCitySearchV2ResponseType|\Webservices\StructType\AddressDistrictListCitiesResponseType|\Webservices\StructType\AddressDistrictListNeighborhoodsResponseType|\Webservices\StructType\AddressDistrictSearchResponseType|\Webservices\StructType\AddressNeighborhoodNameResponseType|\Webservices\StructType\AddressNeighborhoodPhraseSearchResponseType|\Webservices\StructType\AddressPerceelFullParameterSearchResponseType|\Webservices\StructType\AddressPerceelFullParameterSearchV2ResponseType|\Webservices\StructType\AddressPerceelParameterSearchResponseType|\Webservices\StructType\AddressPerceelPhraseSearchResponseType|\Webservices\StructType\AddressProvinceListDistrictsResponseType|\Webservices\StructType\AddressProvinceListNeighborhoodsResponseType|\Webservices\StructType\AddressProvinceListResponseType|\Webservices\StructType\AddressProvinceSearchResponseType|\Webservices\StructType\AddressReeksAddressSearchResponseType|\Webservices\StructType\AddressReeksFullParameterSearchResponseType|\Webservices\StructType\AddressReeksParameterSearchResponseType|\Webservices\StructType\AddressReeksPhraseSearchResponseType|\Webservices\StructType\AddressReeksPostcodeSearchResponseType
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
