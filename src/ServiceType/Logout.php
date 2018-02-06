<?php

namespace Webservices\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Logout ServiceType
 * @subpackage Services
 * @author JCID <info@jcid.nl>
 */
class Logout extends SoapClientBase
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
     * Method to call the operation originally named logout
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: HeaderLogin, HeaderAuthenticate
     * - SOAPHeaderNamespaces: http://www.webservices.nl/soap/, http://www.webservices.nl/soap/
     * - SOAPHeaderTypes: \Webservices\StructType\HeaderLoginType, \Webservices\StructType\HeaderAuthenticateType
     * - SOAPHeaders: required, required
     * - documentation: Logs the user out, destroys the session associated with the reactid
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Webservices\StructType\LogoutRequestType $parameters
     * @return \Webservices\StructType\LogoutResponseType|bool
     */
    public function logout(\Webservices\StructType\LogoutRequestType $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->logout($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Webservices\StructType\LogoutResponseType
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
