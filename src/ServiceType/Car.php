<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Car ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Car extends SoapClientBase
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
     * Method to call the operation originally named carRDWCarCheckCode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Check the validity of a license plate and check code ('meldcode') combination
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarCheckCodeRequestType $parameters
     * @return \Webservices\StructType\CarRDWCarCheckCodeResponseType|bool
     */
    public function carRDWCarCheckCode(\Webservices\StructType\CarRDWCarCheckCodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarCheckCode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarDataV3
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieves data of a car with a Dutch license plate, including a list of types matched if more information is available.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataV3RequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataV3ResponseType|bool
     */
    public function carRDWCarDataV3(\Webservices\StructType\CarRDWCarDataV3RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarDataV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarDataBPV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a specific Dutch car's data, including BPM and power and types
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataBPV2RequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataBPV2ResponseType|bool
     */
    public function carRDWCarDataBPV2(\Webservices\StructType\CarRDWCarDataBPV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarDataBPV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarDataExtended
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a specific Dutch car's data, including European Approval Mark
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataExtendedRequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataExtendedResponseType|bool
     */
    public function carRDWCarDataExtended(\Webservices\StructType\CarRDWCarDataExtendedRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarDataExtended($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarDataPrice
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieves data of a car with a Dutch license plate, including catalog price.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataPriceRequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataPriceResponseType|bool
     */
    public function carRDWCarDataPrice(\Webservices\StructType\CarRDWCarDataPriceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarDataPrice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarDataOptions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a specific Dutch car's data, including information about extra options
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataOptionsRequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataOptionsResponseType|bool
     */
    public function carRDWCarDataOptions(\Webservices\StructType\CarRDWCarDataOptionsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarDataOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEMeldcodeCheck
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Check the validity of a license plate and check code ('meldcode') combination
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEMeldcodeCheckRequestType $parameters
     * @return \Webservices\StructType\CarVWEMeldcodeCheckResponseType|bool
     */
    public function carVWEMeldcodeCheck(\Webservices\StructType\CarVWEMeldcodeCheckRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEMeldcodeCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEBasicTypeData
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEBasicTypeDataRequestType $parameters
     * @return \Webservices\StructType\CarVWEBasicTypeDataResponseType|bool
     */
    public function carVWEBasicTypeData(\Webservices\StructType\CarVWEBasicTypeDataRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEBasicTypeData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEVersionPrice
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEVersionPriceRequestType $parameters
     * @return \Webservices\StructType\CarVWEVersionPriceResponseType|bool
     */
    public function carVWEVersionPrice(\Webservices\StructType\CarVWEVersionPriceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEVersionPrice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEOptions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve options of a specific model of a car
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEOptionsRequestType $parameters
     * @return \Webservices\StructType\CarVWEOptionsResponseType|bool
     */
    public function carVWEOptions(\Webservices\StructType\CarVWEOptionsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEListBrands
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEListBrandsRequestType $parameters
     * @return \Webservices\StructType\CarVWEListBrandsResponseType|bool
     */
    public function carVWEListBrands(\Webservices\StructType\CarVWEListBrandsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEListBrands($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEListModels
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEListModelsRequestType $parameters
     * @return \Webservices\StructType\CarVWEListModelsResponseType|bool
     */
    public function carVWEListModels(\Webservices\StructType\CarVWEListModelsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEListModels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEListVersions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEListVersionsRequestType $parameters
     * @return \Webservices\StructType\CarVWEListVersionsResponseType|bool
     */
    public function carVWEListVersions(\Webservices\StructType\CarVWEListVersionsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEListVersions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEVersionYearData
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEVersionYearDataRequestType $parameters
     * @return \Webservices\StructType\CarVWEVersionYearDataResponseType|bool
     */
    public function carVWEVersionYearData(\Webservices\StructType\CarVWEVersionYearDataRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEVersionYearData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carVWEPhotos
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve photos of a specific model of a car
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarVWEPhotosRequestType $parameters
     * @return \Webservices\StructType\CarVWEPhotosResponseType|bool
     */
    public function carVWEPhotos(\Webservices\StructType\CarVWEPhotosRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carVWEPhotos($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carATDPrice
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve Autodisk price information
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarATDPriceRequestType $parameters
     * @return \Webservices\StructType\CarATDPriceResponseType|bool
     */
    public function carATDPrice(\Webservices\StructType\CarATDPriceRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carATDPrice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarData
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a specific Dutch car's data
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataRequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataResponseType|bool
     */
    public function carRDWCarData(\Webservices\StructType\CarRDWCarDataRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarDataV2
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieves data of a car with a Dutch license plate, including a list of types matched if more information is available.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataV2RequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataV2ResponseType|bool
     */
    public function carRDWCarDataV2(\Webservices\StructType\CarRDWCarDataV2RequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarDataV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named carRDWCarDataBP
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Find a specific Dutch car's data, including BPM and power
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\CarRDWCarDataBPRequestType $parameters
     * @return \Webservices\StructType\CarRDWCarDataBPResponseType|bool
     */
    public function carRDWCarDataBP(\Webservices\StructType\CarRDWCarDataBPRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->carRDWCarDataBP($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\CarATDPriceResponseType|\Webservices\StructType\CarRDWCarCheckCodeResponseType|\Webservices\StructType\CarRDWCarDataBPResponseType|\Webservices\StructType\CarRDWCarDataBPV2ResponseType|\Webservices\StructType\CarRDWCarDataExtendedResponseType|\Webservices\StructType\CarRDWCarDataOptionsResponseType|\Webservices\StructType\CarRDWCarDataPriceResponseType|\Webservices\StructType\CarRDWCarDataResponseType|\Webservices\StructType\CarRDWCarDataV2ResponseType|\Webservices\StructType\CarRDWCarDataV3ResponseType|\Webservices\StructType\CarVWEBasicTypeDataResponseType|\Webservices\StructType\CarVWEListBrandsResponseType|\Webservices\StructType\CarVWEListModelsResponseType|\Webservices\StructType\CarVWEListVersionsResponseType|\Webservices\StructType\CarVWEMeldcodeCheckResponseType|\Webservices\StructType\CarVWEOptionsResponseType|\Webservices\StructType\CarVWEPhotosResponseType|\Webservices\StructType\CarVWEVersionPriceResponseType|\Webservices\StructType\CarVWEVersionYearDataResponseType
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
