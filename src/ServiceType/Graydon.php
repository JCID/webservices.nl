<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Graydon ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Graydon extends SoapClientBase
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
     * Method to call the operation originally named graydonCreditGetReport
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve a Graydon credit report of a company registered in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditGetReportRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditGetReportResponseType|bool
     */
    public function graydonCreditGetReport(\Webservices\StructType\GraydonCreditGetReportRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditGetReport($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditSearchIdentification
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Search international Graydon credit report databases for a company using an identifier.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditSearchIdentificationRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditSearchIdentificationResponseType|bool
     */
    public function graydonCreditSearchIdentification(\Webservices\StructType\GraydonCreditSearchIdentificationRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditSearchIdentification($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditSearchName
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Search international Graydon credit report database for a company by name.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditSearchNameRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditSearchNameResponseType|bool
     */
    public function graydonCreditSearchName(\Webservices\StructType\GraydonCreditSearchNameRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditSearchName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditSearchPostcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Search international Graydon credit report database for a company using postcode.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditSearchPostcodeRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditSearchPostcodeResponseType|bool
     */
    public function graydonCreditSearchPostcode(\Webservices\StructType\GraydonCreditSearchPostcodeRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditSearchPostcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditQuickscan
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve a Graydon pd ratings and credit flag of a company registered in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditQuickscanRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditQuickscanResponseType|bool
     */
    public function graydonCreditQuickscan(\Webservices\StructType\GraydonCreditQuickscanRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditQuickscan($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditRatings
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve various Graydon credit ratings of a company registered in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditRatingsRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditRatingsResponseType|bool
     */
    public function graydonCreditRatings(\Webservices\StructType\GraydonCreditRatingsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditRatings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditVatNumber
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve the BTW (VAT) number of a company registered in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditVatNumberRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditVatNumberResponseType|bool
     */
    public function graydonCreditVatNumber(\Webservices\StructType\GraydonCreditVatNumberRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditVatNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditCompanyLiaisons
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve top-parent, parent and sibling companies of a company registered in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditCompanyLiaisonsRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditCompanyLiaisonsResponseType|bool
     */
    public function graydonCreditCompanyLiaisons(\Webservices\StructType\GraydonCreditCompanyLiaisonsRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditCompanyLiaisons($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named graydonCreditManagement
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Retrieve company management credit scores of a company registered in the Netherlands.
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\GraydonCreditManagementRequestType $parameters
     * @return \Webservices\StructType\GraydonCreditManagementResponseType|bool
     */
    public function graydonCreditManagement(\Webservices\StructType\GraydonCreditManagementRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->graydonCreditManagement($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\GraydonCreditCompanyLiaisonsResponseType|\Webservices\StructType\GraydonCreditGetReportResponseType|\Webservices\StructType\GraydonCreditManagementResponseType|\Webservices\StructType\GraydonCreditQuickscanResponseType|\Webservices\StructType\GraydonCreditRatingsResponseType|\Webservices\StructType\GraydonCreditSearchIdentificationResponseType|\Webservices\StructType\GraydonCreditSearchNameResponseType|\Webservices\StructType\GraydonCreditSearchPostcodeResponseType|\Webservices\StructType\GraydonCreditVatNumberResponseType
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
