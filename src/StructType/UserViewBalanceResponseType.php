<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userViewBalanceResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserViewBalanceResponseType extends AbstractStructBase
{
    /**
     * The balance
     * @var float
     */
    public $balance;
    /**
     * Constructor method for userViewBalanceResponseType
     * @uses UserViewBalanceResponseType::setBalance()
     * @param float $balance
     */
    public function __construct($balance = null)
    {
        $this
            ->setBalance($balance);
    }
    /**
     * Get balance value
     * @return float|null
     */
    public function getBalance()
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param float $balance
     * @return \Webservices\StructType\UserViewBalanceResponseType
     */
    public function setBalance($balance = null)
    {
        $this->balance = $balance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserViewBalanceResponseType
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
