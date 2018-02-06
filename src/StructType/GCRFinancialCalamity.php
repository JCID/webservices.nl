<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRFinancialCalamity StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRFinancialCalamity extends AbstractStructBase
{
    /**
     * The bankruptcy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRBankruptcy
     */
    public $bankruptcy;
    /**
     * The moratorium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRMoratorium
     */
    public $moratorium;
    /**
     * The debt_restructuring_private_persons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRDebtRestructuringPrivatePersons
     */
    public $debt_restructuring_private_persons;
    /**
     * Constructor method for GCRFinancialCalamity
     * @uses GCRFinancialCalamity::setBankruptcy()
     * @uses GCRFinancialCalamity::setMoratorium()
     * @uses GCRFinancialCalamity::setDebt_restructuring_private_persons()
     * @param \Webservices\StructType\GCRBankruptcy $bankruptcy
     * @param \Webservices\StructType\GCRMoratorium $moratorium
     * @param \Webservices\StructType\GCRDebtRestructuringPrivatePersons $debt_restructuring_private_persons
     */
    public function __construct(\Webservices\StructType\GCRBankruptcy $bankruptcy = null, \Webservices\StructType\GCRMoratorium $moratorium = null, \Webservices\StructType\GCRDebtRestructuringPrivatePersons $debt_restructuring_private_persons = null)
    {
        $this
            ->setBankruptcy($bankruptcy)
            ->setMoratorium($moratorium)
            ->setDebt_restructuring_private_persons($debt_restructuring_private_persons);
    }
    /**
     * Get bankruptcy value
     * @return \Webservices\StructType\GCRBankruptcy|null
     */
    public function getBankruptcy()
    {
        return $this->bankruptcy;
    }
    /**
     * Set bankruptcy value
     * @param \Webservices\StructType\GCRBankruptcy $bankruptcy
     * @return \Webservices\StructType\GCRFinancialCalamity
     */
    public function setBankruptcy(\Webservices\StructType\GCRBankruptcy $bankruptcy = null)
    {
        $this->bankruptcy = $bankruptcy;
        return $this;
    }
    /**
     * Get moratorium value
     * @return \Webservices\StructType\GCRMoratorium|null
     */
    public function getMoratorium()
    {
        return $this->moratorium;
    }
    /**
     * Set moratorium value
     * @param \Webservices\StructType\GCRMoratorium $moratorium
     * @return \Webservices\StructType\GCRFinancialCalamity
     */
    public function setMoratorium(\Webservices\StructType\GCRMoratorium $moratorium = null)
    {
        $this->moratorium = $moratorium;
        return $this;
    }
    /**
     * Get debt_restructuring_private_persons value
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons|null
     */
    public function getDebt_restructuring_private_persons()
    {
        return $this->debt_restructuring_private_persons;
    }
    /**
     * Set debt_restructuring_private_persons value
     * @param \Webservices\StructType\GCRDebtRestructuringPrivatePersons $debt_restructuring_private_persons
     * @return \Webservices\StructType\GCRFinancialCalamity
     */
    public function setDebt_restructuring_private_persons(\Webservices\StructType\GCRDebtRestructuringPrivatePersons $debt_restructuring_private_persons = null)
    {
        $this->debt_restructuring_private_persons = $debt_restructuring_private_persons;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRFinancialCalamity
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
