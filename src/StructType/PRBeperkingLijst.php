<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PRBeperkingLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class PRBeperkingLijst extends AbstractStructBase
{
    /**
     * The pr_beperkingen
     * @var \Webservices\ArrayType\PRBeperkingArray
     */
    public $pr_beperkingen;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for PRBeperkingLijst
     * @uses PRBeperkingLijst::setPr_beperkingen()
     * @uses PRBeperkingLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\PRBeperkingArray $pr_beperkingen
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\PRBeperkingArray $pr_beperkingen = null, $indicatie_compleet = null)
    {
        $this
            ->setPr_beperkingen($pr_beperkingen)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get pr_beperkingen value
     * @return \Webservices\ArrayType\PRBeperkingArray|null
     */
    public function getPr_beperkingen()
    {
        return $this->pr_beperkingen;
    }
    /**
     * Set pr_beperkingen value
     * @param \Webservices\ArrayType\PRBeperkingArray $pr_beperkingen
     * @return \Webservices\StructType\PRBeperkingLijst
     */
    public function setPr_beperkingen(\Webservices\ArrayType\PRBeperkingArray $pr_beperkingen = null)
    {
        $this->pr_beperkingen = $pr_beperkingen;
        return $this;
    }
    /**
     * Get indicatie_compleet value
     * @return bool|null
     */
    public function getIndicatie_compleet()
    {
        return $this->indicatie_compleet;
    }
    /**
     * Set indicatie_compleet value
     * @param bool $indicatie_compleet
     * @return \Webservices\StructType\PRBeperkingLijst
     */
    public function setIndicatie_compleet($indicatie_compleet = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_compleet) && !is_bool($indicatie_compleet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_compleet)), __LINE__);
        }
        $this->indicatie_compleet = $indicatie_compleet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\PRBeperkingLijst
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
