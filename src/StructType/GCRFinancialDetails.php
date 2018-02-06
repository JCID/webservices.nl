<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRFinancialDetails StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRFinancialDetails extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $graydon_company_id;
    /**
     * The turnovers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFinancialDetailValueArray
     */
    public $turnovers;
    /**
     * The results
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFinancialDetailValueArray
     */
    public $results;
    /**
     * Constructor method for GCRFinancialDetails
     * @uses GCRFinancialDetails::setGraydon_company_id()
     * @uses GCRFinancialDetails::setTurnovers()
     * @uses GCRFinancialDetails::setResults()
     * @param int $graydon_company_id
     * @param \Webservices\ArrayType\GCRFinancialDetailValueArray $turnovers
     * @param \Webservices\ArrayType\GCRFinancialDetailValueArray $results
     */
    public function __construct($graydon_company_id = null, \Webservices\ArrayType\GCRFinancialDetailValueArray $turnovers = null, \Webservices\ArrayType\GCRFinancialDetailValueArray $results = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setTurnovers($turnovers)
            ->setResults($results);
    }
    /**
     * Get graydon_company_id value
     * @return int|null
     */
    public function getGraydon_company_id()
    {
        return $this->graydon_company_id;
    }
    /**
     * Set graydon_company_id value
     * @param int $graydon_company_id
     * @return \Webservices\StructType\GCRFinancialDetails
     */
    public function setGraydon_company_id($graydon_company_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_company_id) && !is_numeric($graydon_company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_company_id)), __LINE__);
        }
        $this->graydon_company_id = $graydon_company_id;
        return $this;
    }
    /**
     * Get turnovers value
     * @return \Webservices\ArrayType\GCRFinancialDetailValueArray|null
     */
    public function getTurnovers()
    {
        return $this->turnovers;
    }
    /**
     * Set turnovers value
     * @param \Webservices\ArrayType\GCRFinancialDetailValueArray $turnovers
     * @return \Webservices\StructType\GCRFinancialDetails
     */
    public function setTurnovers(\Webservices\ArrayType\GCRFinancialDetailValueArray $turnovers = null)
    {
        $this->turnovers = $turnovers;
        return $this;
    }
    /**
     * Get results value
     * @return \Webservices\ArrayType\GCRFinancialDetailValueArray|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @param \Webservices\ArrayType\GCRFinancialDetailValueArray $results
     * @return \Webservices\StructType\GCRFinancialDetails
     */
    public function setResults(\Webservices\ArrayType\GCRFinancialDetailValueArray $results = null)
    {
        $this->results = $results;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRFinancialDetails
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
