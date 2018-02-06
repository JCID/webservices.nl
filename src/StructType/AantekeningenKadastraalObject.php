<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AantekeningenKadastraalObject StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AantekeningenKadastraalObject extends AbstractStructBase
{
    /**
     * The aantekeningen_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\AantekeningKadastraalObjectLijst
     */
    public $aantekeningen_lijst;
    /**
     * The melding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $melding;
    /**
     * Constructor method for AantekeningenKadastraalObject
     * @uses AantekeningenKadastraalObject::setAantekeningen_lijst()
     * @uses AantekeningenKadastraalObject::setMelding()
     * @param \Webservices\StructType\AantekeningKadastraalObjectLijst $aantekeningen_lijst
     * @param string $melding
     */
    public function __construct(\Webservices\StructType\AantekeningKadastraalObjectLijst $aantekeningen_lijst = null, $melding = null)
    {
        $this
            ->setAantekeningen_lijst($aantekeningen_lijst)
            ->setMelding($melding);
    }
    /**
     * Get aantekeningen_lijst value
     * @return \Webservices\StructType\AantekeningKadastraalObjectLijst|null
     */
    public function getAantekeningen_lijst()
    {
        return $this->aantekeningen_lijst;
    }
    /**
     * Set aantekeningen_lijst value
     * @param \Webservices\StructType\AantekeningKadastraalObjectLijst $aantekeningen_lijst
     * @return \Webservices\StructType\AantekeningenKadastraalObject
     */
    public function setAantekeningen_lijst(\Webservices\StructType\AantekeningKadastraalObjectLijst $aantekeningen_lijst = null)
    {
        $this->aantekeningen_lijst = $aantekeningen_lijst;
        return $this;
    }
    /**
     * Get melding value
     * @return string|null
     */
    public function getMelding()
    {
        return $this->melding;
    }
    /**
     * Set melding value
     * @param string $melding
     * @return \Webservices\StructType\AantekeningenKadastraalObject
     */
    public function setMelding($melding = null)
    {
        // validation for constraint: string
        if (!is_null($melding) && !is_string($melding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($melding)), __LINE__);
        }
        $this->melding = $melding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AantekeningenKadastraalObject
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
