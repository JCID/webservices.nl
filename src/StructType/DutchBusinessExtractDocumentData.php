<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessExtractDocumentData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessExtractDocumentData extends AbstractStructBase
{
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document;
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The document_date
     * @var string
     */
    public $document_date;
    /**
     * The legal_entity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessLegalEntity
     */
    public $legal_entity;
    /**
     * The enterprise
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessEnterprise
     */
    public $enterprise;
    /**
     * The partnership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessPartnershipArray
     */
    public $partnership;
    /**
     * The establishments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessEstablishmentArray
     */
    public $establishments;
    /**
     * The positions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessPositionArray
     */
    public $positions;
    /**
     * Constructor method for DutchBusinessExtractDocumentData
     * @uses DutchBusinessExtractDocumentData::setDocument()
     * @uses DutchBusinessExtractDocumentData::setDossier_number()
     * @uses DutchBusinessExtractDocumentData::setEstablishment_number()
     * @uses DutchBusinessExtractDocumentData::setStatus()
     * @uses DutchBusinessExtractDocumentData::setDocument_date()
     * @uses DutchBusinessExtractDocumentData::setLegal_entity()
     * @uses DutchBusinessExtractDocumentData::setEnterprise()
     * @uses DutchBusinessExtractDocumentData::setPartnership()
     * @uses DutchBusinessExtractDocumentData::setEstablishments()
     * @uses DutchBusinessExtractDocumentData::setPositions()
     * @param string $document
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $status
     * @param string $document_date
     * @param \Webservices\StructType\DutchBusinessLegalEntity $legal_entity
     * @param \Webservices\StructType\DutchBusinessEnterprise $enterprise
     * @param \Webservices\ArrayType\DutchBusinessPartnershipArray $partnership
     * @param \Webservices\ArrayType\DutchBusinessEstablishmentArray $establishments
     * @param \Webservices\ArrayType\DutchBusinessPositionArray $positions
     */
    public function __construct($document = null, $dossier_number = null, $establishment_number = null, $status = null, $document_date = null, \Webservices\StructType\DutchBusinessLegalEntity $legal_entity = null, \Webservices\StructType\DutchBusinessEnterprise $enterprise = null, \Webservices\ArrayType\DutchBusinessPartnershipArray $partnership = null, \Webservices\ArrayType\DutchBusinessEstablishmentArray $establishments = null, \Webservices\ArrayType\DutchBusinessPositionArray $positions = null)
    {
        $this
            ->setDocument($document)
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setStatus($status)
            ->setDocument_date($document_date)
            ->setLegal_entity($legal_entity)
            ->setEnterprise($enterprise)
            ->setPartnership($partnership)
            ->setEstablishments($establishments)
            ->setPositions($positions);
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
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
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
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
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get document_date value
     * @return string|null
     */
    public function getDocument_date()
    {
        return $this->document_date;
    }
    /**
     * Set document_date value
     * @param string $document_date
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setDocument_date($document_date = null)
    {
        // validation for constraint: string
        if (!is_null($document_date) && !is_string($document_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_date)), __LINE__);
        }
        $this->document_date = $document_date;
        return $this;
    }
    /**
     * Get legal_entity value
     * @return \Webservices\StructType\DutchBusinessLegalEntity|null
     */
    public function getLegal_entity()
    {
        return $this->legal_entity;
    }
    /**
     * Set legal_entity value
     * @param \Webservices\StructType\DutchBusinessLegalEntity $legal_entity
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setLegal_entity(\Webservices\StructType\DutchBusinessLegalEntity $legal_entity = null)
    {
        $this->legal_entity = $legal_entity;
        return $this;
    }
    /**
     * Get enterprise value
     * @return \Webservices\StructType\DutchBusinessEnterprise|null
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }
    /**
     * Set enterprise value
     * @param \Webservices\StructType\DutchBusinessEnterprise $enterprise
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setEnterprise(\Webservices\StructType\DutchBusinessEnterprise $enterprise = null)
    {
        $this->enterprise = $enterprise;
        return $this;
    }
    /**
     * Get partnership value
     * @return \Webservices\ArrayType\DutchBusinessPartnershipArray|null
     */
    public function getPartnership()
    {
        return $this->partnership;
    }
    /**
     * Set partnership value
     * @param \Webservices\ArrayType\DutchBusinessPartnershipArray $partnership
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setPartnership(\Webservices\ArrayType\DutchBusinessPartnershipArray $partnership = null)
    {
        $this->partnership = $partnership;
        return $this;
    }
    /**
     * Get establishments value
     * @return \Webservices\ArrayType\DutchBusinessEstablishmentArray|null
     */
    public function getEstablishments()
    {
        return $this->establishments;
    }
    /**
     * Set establishments value
     * @param \Webservices\ArrayType\DutchBusinessEstablishmentArray $establishments
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setEstablishments(\Webservices\ArrayType\DutchBusinessEstablishmentArray $establishments = null)
    {
        $this->establishments = $establishments;
        return $this;
    }
    /**
     * Get positions value
     * @return \Webservices\ArrayType\DutchBusinessPositionArray|null
     */
    public function getPositions()
    {
        return $this->positions;
    }
    /**
     * Set positions value
     * @param \Webservices\ArrayType\DutchBusinessPositionArray $positions
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
     */
    public function setPositions(\Webservices\ArrayType\DutchBusinessPositionArray $positions = null)
    {
        $this->positions = $positions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessExtractDocumentData
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
