<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractDataV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractDataV2 extends AbstractStructBase
{
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_number;
    /**
     * The reference_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reference_date;
    /**
     * The legal_entity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessLegalEntityV2
     */
    public $legal_entity;
    /**
     * The partnership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessPartnershipV2
     */
    public $partnership;
    /**
     * The enterprise
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public $enterprise;
    /**
     * The establishments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessEstablishmentV2Array
     */
    public $establishments;
    /**
     * The positions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessPositionV2Array
     */
    public $positions;
    /**
     * The remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $remarks;
    /**
     * Constructor method for DutchBusinessExtractDataV2
     * @uses DutchBusinessExtractDataV2::setDossier_number()
     * @uses DutchBusinessExtractDataV2::setReference_date()
     * @uses DutchBusinessExtractDataV2::setLegal_entity()
     * @uses DutchBusinessExtractDataV2::setPartnership()
     * @uses DutchBusinessExtractDataV2::setEnterprise()
     * @uses DutchBusinessExtractDataV2::setEstablishments()
     * @uses DutchBusinessExtractDataV2::setPositions()
     * @uses DutchBusinessExtractDataV2::setRemarks()
     * @param string $dossier_number
     * @param string $reference_date
     * @param \Webservices\StructType\DutchBusinessLegalEntityV2 $legal_entity
     * @param \Webservices\StructType\DutchBusinessPartnershipV2 $partnership
     * @param \Webservices\StructType\DutchBusinessEnterpriseV2 $enterprise
     * @param \Webservices\ArrayType\DutchBusinessEstablishmentV2Array $establishments
     * @param \Webservices\ArrayType\DutchBusinessPositionV2Array $positions
     * @param \Webservices\ArrayType\StringArray $remarks
     */
    public function __construct($dossier_number = null, $reference_date = null, \Webservices\StructType\DutchBusinessLegalEntityV2 $legal_entity = null, \Webservices\StructType\DutchBusinessPartnershipV2 $partnership = null, \Webservices\StructType\DutchBusinessEnterpriseV2 $enterprise = null, \Webservices\ArrayType\DutchBusinessEstablishmentV2Array $establishments = null, \Webservices\ArrayType\DutchBusinessPositionV2Array $positions = null, \Webservices\ArrayType\StringArray $remarks = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setReference_date($reference_date)
            ->setLegal_entity($legal_entity)
            ->setPartnership($partnership)
            ->setEnterprise($enterprise)
            ->setEstablishments($establishments)
            ->setPositions($positions)
            ->setRemarks($remarks);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get reference_date value
     * @return string|null
     */
    public function getReference_date()
    {
        return $this->reference_date;
    }
    /**
     * Set reference_date value
     * @param string $reference_date
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setReference_date($reference_date = null)
    {
        // validation for constraint: string
        if (!is_null($reference_date) && !is_string($reference_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference_date)), __LINE__);
        }
        $this->reference_date = $reference_date;
        return $this;
    }
    /**
     * Get legal_entity value
     * @return \Webservices\StructType\DutchBusinessLegalEntityV2|null
     */
    public function getLegal_entity()
    {
        return $this->legal_entity;
    }
    /**
     * Set legal_entity value
     * @param \Webservices\StructType\DutchBusinessLegalEntityV2 $legal_entity
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setLegal_entity(\Webservices\StructType\DutchBusinessLegalEntityV2 $legal_entity = null)
    {
        $this->legal_entity = $legal_entity;
        return $this;
    }
    /**
     * Get partnership value
     * @return \Webservices\StructType\DutchBusinessPartnershipV2|null
     */
    public function getPartnership()
    {
        return $this->partnership;
    }
    /**
     * Set partnership value
     * @param \Webservices\StructType\DutchBusinessPartnershipV2 $partnership
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setPartnership(\Webservices\StructType\DutchBusinessPartnershipV2 $partnership = null)
    {
        $this->partnership = $partnership;
        return $this;
    }
    /**
     * Get enterprise value
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2|null
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }
    /**
     * Set enterprise value
     * @param \Webservices\StructType\DutchBusinessEnterpriseV2 $enterprise
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setEnterprise(\Webservices\StructType\DutchBusinessEnterpriseV2 $enterprise = null)
    {
        $this->enterprise = $enterprise;
        return $this;
    }
    /**
     * Get establishments value
     * @return \Webservices\ArrayType\DutchBusinessEstablishmentV2Array|null
     */
    public function getEstablishments()
    {
        return $this->establishments;
    }
    /**
     * Set establishments value
     * @param \Webservices\ArrayType\DutchBusinessEstablishmentV2Array $establishments
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setEstablishments(\Webservices\ArrayType\DutchBusinessEstablishmentV2Array $establishments = null)
    {
        $this->establishments = $establishments;
        return $this;
    }
    /**
     * Get positions value
     * @return \Webservices\ArrayType\DutchBusinessPositionV2Array|null
     */
    public function getPositions()
    {
        return $this->positions;
    }
    /**
     * Set positions value
     * @param \Webservices\ArrayType\DutchBusinessPositionV2Array $positions
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setPositions(\Webservices\ArrayType\DutchBusinessPositionV2Array $positions = null)
    {
        $this->positions = $positions;
        return $this;
    }
    /**
     * Get remarks value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @param \Webservices\ArrayType\StringArray $remarks
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
     */
    public function setRemarks(\Webservices\ArrayType\StringArray $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessExtractDataV2
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
