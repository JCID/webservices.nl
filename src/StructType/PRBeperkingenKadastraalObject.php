<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PRBeperkingenKadastraalObject StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class PRBeperkingenKadastraalObject extends AbstractStructBase
{
    /**
     * The pr_beperkingen_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\PRBeperkingLijst
     */
    public $pr_beperkingen_lijst;
    /**
     * The melding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $melding;
    /**
     * Constructor method for PRBeperkingenKadastraalObject
     * @uses PRBeperkingenKadastraalObject::setPr_beperkingen_lijst()
     * @uses PRBeperkingenKadastraalObject::setMelding()
     * @param \Webservices\StructType\PRBeperkingLijst $pr_beperkingen_lijst
     * @param string $melding
     */
    public function __construct(\Webservices\StructType\PRBeperkingLijst $pr_beperkingen_lijst = null, $melding = null)
    {
        $this
            ->setPr_beperkingen_lijst($pr_beperkingen_lijst)
            ->setMelding($melding);
    }
    /**
     * Get pr_beperkingen_lijst value
     * @return \Webservices\StructType\PRBeperkingLijst|null
     */
    public function getPr_beperkingen_lijst()
    {
        return $this->pr_beperkingen_lijst;
    }
    /**
     * Set pr_beperkingen_lijst value
     * @param \Webservices\StructType\PRBeperkingLijst $pr_beperkingen_lijst
     * @return \Webservices\StructType\PRBeperkingenKadastraalObject
     */
    public function setPr_beperkingen_lijst(\Webservices\StructType\PRBeperkingLijst $pr_beperkingen_lijst = null)
    {
        $this->pr_beperkingen_lijst = $pr_beperkingen_lijst;
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
     * @return \Webservices\StructType\PRBeperkingenKadastraalObject
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
     * @return \Webservices\StructType\PRBeperkingenKadastraalObject
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
