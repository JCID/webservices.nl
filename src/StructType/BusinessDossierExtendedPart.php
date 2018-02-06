<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDossierExtendedPart StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessDossierExtendedPart extends AbstractStructBase
{
    /**
     * The MainBranchIndication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MainBranchIndication;
    /**
     * The MainBranchDossierNo
     * @var string
     */
    public $MainBranchDossierNo;
    /**
     * The MainBranchSubDossierNo
     * @var string
     */
    public $MainBranchSubDossierNo;
    /**
     * The ImportIndication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ImportIndication;
    /**
     * The ExportIndication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExportIndication;
    /**
     * The LegalName
     * @var string
     */
    public $LegalName;
    /**
     * The ContactTitle1
     * @var string
     */
    public $ContactTitle1;
    /**
     * The ContactTitle2
     * @var string
     */
    public $ContactTitle2;
    /**
     * The ContactInitials
     * @var string
     */
    public $ContactInitials;
    /**
     * The ContactPrefix
     * @var string
     */
    public $ContactPrefix;
    /**
     * The ContactSurname
     * @var string
     */
    public $ContactSurname;
    /**
     * The ContactGender
     * @var string
     */
    public $ContactGender;
    /**
     * The AuthorizedShareCapital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AuthorizedShareCapital;
    /**
     * The AuthorizedShareCapitalCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AuthorizedShareCapitalCurrency;
    /**
     * The PaidUpShareCapital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PaidUpShareCapital;
    /**
     * The PaidUpShareCapitalCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaidUpShareCapitalCurrency;
    /**
     * The IssuedShareCapital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $IssuedShareCapital;
    /**
     * The IssuedShareCapitalCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssuedShareCapitalCurrency;
    /**
     * The FoundingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\BusinessDate
     */
    public $FoundingDate;
    /**
     * The ContinuationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\BusinessDate
     */
    public $ContinuationDate;
    /**
     * The EstablishmentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\BusinessDate
     */
    public $EstablishmentDate;
    /**
     * Constructor method for BusinessDossierExtendedPart
     * @uses BusinessDossierExtendedPart::setMainBranchIndication()
     * @uses BusinessDossierExtendedPart::setMainBranchDossierNo()
     * @uses BusinessDossierExtendedPart::setMainBranchSubDossierNo()
     * @uses BusinessDossierExtendedPart::setImportIndication()
     * @uses BusinessDossierExtendedPart::setExportIndication()
     * @uses BusinessDossierExtendedPart::setLegalName()
     * @uses BusinessDossierExtendedPart::setContactTitle1()
     * @uses BusinessDossierExtendedPart::setContactTitle2()
     * @uses BusinessDossierExtendedPart::setContactInitials()
     * @uses BusinessDossierExtendedPart::setContactPrefix()
     * @uses BusinessDossierExtendedPart::setContactSurname()
     * @uses BusinessDossierExtendedPart::setContactGender()
     * @uses BusinessDossierExtendedPart::setAuthorizedShareCapital()
     * @uses BusinessDossierExtendedPart::setAuthorizedShareCapitalCurrency()
     * @uses BusinessDossierExtendedPart::setPaidUpShareCapital()
     * @uses BusinessDossierExtendedPart::setPaidUpShareCapitalCurrency()
     * @uses BusinessDossierExtendedPart::setIssuedShareCapital()
     * @uses BusinessDossierExtendedPart::setIssuedShareCapitalCurrency()
     * @uses BusinessDossierExtendedPart::setFoundingDate()
     * @uses BusinessDossierExtendedPart::setContinuationDate()
     * @uses BusinessDossierExtendedPart::setEstablishmentDate()
     * @param bool $mainBranchIndication
     * @param string $mainBranchDossierNo
     * @param string $mainBranchSubDossierNo
     * @param bool $importIndication
     * @param bool $exportIndication
     * @param string $legalName
     * @param string $contactTitle1
     * @param string $contactTitle2
     * @param string $contactInitials
     * @param string $contactPrefix
     * @param string $contactSurname
     * @param string $contactGender
     * @param int $authorizedShareCapital
     * @param string $authorizedShareCapitalCurrency
     * @param int $paidUpShareCapital
     * @param string $paidUpShareCapitalCurrency
     * @param int $issuedShareCapital
     * @param string $issuedShareCapitalCurrency
     * @param \Webservices\StructType\BusinessDate $foundingDate
     * @param \Webservices\StructType\BusinessDate $continuationDate
     * @param \Webservices\StructType\BusinessDate $establishmentDate
     */
    public function __construct($mainBranchIndication = null, $mainBranchDossierNo = null, $mainBranchSubDossierNo = null, $importIndication = null, $exportIndication = null, $legalName = null, $contactTitle1 = null, $contactTitle2 = null, $contactInitials = null, $contactPrefix = null, $contactSurname = null, $contactGender = null, $authorizedShareCapital = null, $authorizedShareCapitalCurrency = null, $paidUpShareCapital = null, $paidUpShareCapitalCurrency = null, $issuedShareCapital = null, $issuedShareCapitalCurrency = null, \Webservices\StructType\BusinessDate $foundingDate = null, \Webservices\StructType\BusinessDate $continuationDate = null, \Webservices\StructType\BusinessDate $establishmentDate = null)
    {
        $this
            ->setMainBranchIndication($mainBranchIndication)
            ->setMainBranchDossierNo($mainBranchDossierNo)
            ->setMainBranchSubDossierNo($mainBranchSubDossierNo)
            ->setImportIndication($importIndication)
            ->setExportIndication($exportIndication)
            ->setLegalName($legalName)
            ->setContactTitle1($contactTitle1)
            ->setContactTitle2($contactTitle2)
            ->setContactInitials($contactInitials)
            ->setContactPrefix($contactPrefix)
            ->setContactSurname($contactSurname)
            ->setContactGender($contactGender)
            ->setAuthorizedShareCapital($authorizedShareCapital)
            ->setAuthorizedShareCapitalCurrency($authorizedShareCapitalCurrency)
            ->setPaidUpShareCapital($paidUpShareCapital)
            ->setPaidUpShareCapitalCurrency($paidUpShareCapitalCurrency)
            ->setIssuedShareCapital($issuedShareCapital)
            ->setIssuedShareCapitalCurrency($issuedShareCapitalCurrency)
            ->setFoundingDate($foundingDate)
            ->setContinuationDate($continuationDate)
            ->setEstablishmentDate($establishmentDate);
    }
    /**
     * Get MainBranchIndication value
     * @return bool|null
     */
    public function getMainBranchIndication()
    {
        return $this->MainBranchIndication;
    }
    /**
     * Set MainBranchIndication value
     * @param bool $mainBranchIndication
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setMainBranchIndication($mainBranchIndication = null)
    {
        // validation for constraint: boolean
        if (!is_null($mainBranchIndication) && !is_bool($mainBranchIndication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mainBranchIndication)), __LINE__);
        }
        $this->MainBranchIndication = $mainBranchIndication;
        return $this;
    }
    /**
     * Get MainBranchDossierNo value
     * @return string|null
     */
    public function getMainBranchDossierNo()
    {
        return $this->MainBranchDossierNo;
    }
    /**
     * Set MainBranchDossierNo value
     * @param string $mainBranchDossierNo
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setMainBranchDossierNo($mainBranchDossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($mainBranchDossierNo) && !is_string($mainBranchDossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mainBranchDossierNo)), __LINE__);
        }
        $this->MainBranchDossierNo = $mainBranchDossierNo;
        return $this;
    }
    /**
     * Get MainBranchSubDossierNo value
     * @return string|null
     */
    public function getMainBranchSubDossierNo()
    {
        return $this->MainBranchSubDossierNo;
    }
    /**
     * Set MainBranchSubDossierNo value
     * @param string $mainBranchSubDossierNo
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setMainBranchSubDossierNo($mainBranchSubDossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($mainBranchSubDossierNo) && !is_string($mainBranchSubDossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mainBranchSubDossierNo)), __LINE__);
        }
        $this->MainBranchSubDossierNo = $mainBranchSubDossierNo;
        return $this;
    }
    /**
     * Get ImportIndication value
     * @return bool|null
     */
    public function getImportIndication()
    {
        return $this->ImportIndication;
    }
    /**
     * Set ImportIndication value
     * @param bool $importIndication
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setImportIndication($importIndication = null)
    {
        // validation for constraint: boolean
        if (!is_null($importIndication) && !is_bool($importIndication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($importIndication)), __LINE__);
        }
        $this->ImportIndication = $importIndication;
        return $this;
    }
    /**
     * Get ExportIndication value
     * @return bool|null
     */
    public function getExportIndication()
    {
        return $this->ExportIndication;
    }
    /**
     * Set ExportIndication value
     * @param bool $exportIndication
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setExportIndication($exportIndication = null)
    {
        // validation for constraint: boolean
        if (!is_null($exportIndication) && !is_bool($exportIndication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exportIndication)), __LINE__);
        }
        $this->ExportIndication = $exportIndication;
        return $this;
    }
    /**
     * Get LegalName value
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->LegalName;
    }
    /**
     * Set LegalName value
     * @param string $legalName
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setLegalName($legalName = null)
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalName)), __LINE__);
        }
        $this->LegalName = $legalName;
        return $this;
    }
    /**
     * Get ContactTitle1 value
     * @return string|null
     */
    public function getContactTitle1()
    {
        return $this->ContactTitle1;
    }
    /**
     * Set ContactTitle1 value
     * @param string $contactTitle1
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setContactTitle1($contactTitle1 = null)
    {
        // validation for constraint: string
        if (!is_null($contactTitle1) && !is_string($contactTitle1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactTitle1)), __LINE__);
        }
        $this->ContactTitle1 = $contactTitle1;
        return $this;
    }
    /**
     * Get ContactTitle2 value
     * @return string|null
     */
    public function getContactTitle2()
    {
        return $this->ContactTitle2;
    }
    /**
     * Set ContactTitle2 value
     * @param string $contactTitle2
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setContactTitle2($contactTitle2 = null)
    {
        // validation for constraint: string
        if (!is_null($contactTitle2) && !is_string($contactTitle2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactTitle2)), __LINE__);
        }
        $this->ContactTitle2 = $contactTitle2;
        return $this;
    }
    /**
     * Get ContactInitials value
     * @return string|null
     */
    public function getContactInitials()
    {
        return $this->ContactInitials;
    }
    /**
     * Set ContactInitials value
     * @param string $contactInitials
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setContactInitials($contactInitials = null)
    {
        // validation for constraint: string
        if (!is_null($contactInitials) && !is_string($contactInitials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactInitials)), __LINE__);
        }
        $this->ContactInitials = $contactInitials;
        return $this;
    }
    /**
     * Get ContactPrefix value
     * @return string|null
     */
    public function getContactPrefix()
    {
        return $this->ContactPrefix;
    }
    /**
     * Set ContactPrefix value
     * @param string $contactPrefix
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setContactPrefix($contactPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($contactPrefix) && !is_string($contactPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactPrefix)), __LINE__);
        }
        $this->ContactPrefix = $contactPrefix;
        return $this;
    }
    /**
     * Get ContactSurname value
     * @return string|null
     */
    public function getContactSurname()
    {
        return $this->ContactSurname;
    }
    /**
     * Set ContactSurname value
     * @param string $contactSurname
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setContactSurname($contactSurname = null)
    {
        // validation for constraint: string
        if (!is_null($contactSurname) && !is_string($contactSurname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactSurname)), __LINE__);
        }
        $this->ContactSurname = $contactSurname;
        return $this;
    }
    /**
     * Get ContactGender value
     * @return string|null
     */
    public function getContactGender()
    {
        return $this->ContactGender;
    }
    /**
     * Set ContactGender value
     * @param string $contactGender
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setContactGender($contactGender = null)
    {
        // validation for constraint: string
        if (!is_null($contactGender) && !is_string($contactGender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactGender)), __LINE__);
        }
        $this->ContactGender = $contactGender;
        return $this;
    }
    /**
     * Get AuthorizedShareCapital value
     * @return int|null
     */
    public function getAuthorizedShareCapital()
    {
        return $this->AuthorizedShareCapital;
    }
    /**
     * Set AuthorizedShareCapital value
     * @param int $authorizedShareCapital
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setAuthorizedShareCapital($authorizedShareCapital = null)
    {
        // validation for constraint: int
        if (!is_null($authorizedShareCapital) && !is_numeric($authorizedShareCapital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($authorizedShareCapital)), __LINE__);
        }
        $this->AuthorizedShareCapital = $authorizedShareCapital;
        return $this;
    }
    /**
     * Get AuthorizedShareCapitalCurrency value
     * @return string|null
     */
    public function getAuthorizedShareCapitalCurrency()
    {
        return $this->AuthorizedShareCapitalCurrency;
    }
    /**
     * Set AuthorizedShareCapitalCurrency value
     * @param string $authorizedShareCapitalCurrency
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setAuthorizedShareCapitalCurrency($authorizedShareCapitalCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($authorizedShareCapitalCurrency) && !is_string($authorizedShareCapitalCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizedShareCapitalCurrency)), __LINE__);
        }
        $this->AuthorizedShareCapitalCurrency = $authorizedShareCapitalCurrency;
        return $this;
    }
    /**
     * Get PaidUpShareCapital value
     * @return int|null
     */
    public function getPaidUpShareCapital()
    {
        return $this->PaidUpShareCapital;
    }
    /**
     * Set PaidUpShareCapital value
     * @param int $paidUpShareCapital
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setPaidUpShareCapital($paidUpShareCapital = null)
    {
        // validation for constraint: int
        if (!is_null($paidUpShareCapital) && !is_numeric($paidUpShareCapital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paidUpShareCapital)), __LINE__);
        }
        $this->PaidUpShareCapital = $paidUpShareCapital;
        return $this;
    }
    /**
     * Get PaidUpShareCapitalCurrency value
     * @return string|null
     */
    public function getPaidUpShareCapitalCurrency()
    {
        return $this->PaidUpShareCapitalCurrency;
    }
    /**
     * Set PaidUpShareCapitalCurrency value
     * @param string $paidUpShareCapitalCurrency
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setPaidUpShareCapitalCurrency($paidUpShareCapitalCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($paidUpShareCapitalCurrency) && !is_string($paidUpShareCapitalCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paidUpShareCapitalCurrency)), __LINE__);
        }
        $this->PaidUpShareCapitalCurrency = $paidUpShareCapitalCurrency;
        return $this;
    }
    /**
     * Get IssuedShareCapital value
     * @return int|null
     */
    public function getIssuedShareCapital()
    {
        return $this->IssuedShareCapital;
    }
    /**
     * Set IssuedShareCapital value
     * @param int $issuedShareCapital
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setIssuedShareCapital($issuedShareCapital = null)
    {
        // validation for constraint: int
        if (!is_null($issuedShareCapital) && !is_numeric($issuedShareCapital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($issuedShareCapital)), __LINE__);
        }
        $this->IssuedShareCapital = $issuedShareCapital;
        return $this;
    }
    /**
     * Get IssuedShareCapitalCurrency value
     * @return string|null
     */
    public function getIssuedShareCapitalCurrency()
    {
        return $this->IssuedShareCapitalCurrency;
    }
    /**
     * Set IssuedShareCapitalCurrency value
     * @param string $issuedShareCapitalCurrency
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setIssuedShareCapitalCurrency($issuedShareCapitalCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($issuedShareCapitalCurrency) && !is_string($issuedShareCapitalCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuedShareCapitalCurrency)), __LINE__);
        }
        $this->IssuedShareCapitalCurrency = $issuedShareCapitalCurrency;
        return $this;
    }
    /**
     * Get FoundingDate value
     * @return \Webservices\StructType\BusinessDate|null
     */
    public function getFoundingDate()
    {
        return $this->FoundingDate;
    }
    /**
     * Set FoundingDate value
     * @param \Webservices\StructType\BusinessDate $foundingDate
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setFoundingDate(\Webservices\StructType\BusinessDate $foundingDate = null)
    {
        $this->FoundingDate = $foundingDate;
        return $this;
    }
    /**
     * Get ContinuationDate value
     * @return \Webservices\StructType\BusinessDate|null
     */
    public function getContinuationDate()
    {
        return $this->ContinuationDate;
    }
    /**
     * Set ContinuationDate value
     * @param \Webservices\StructType\BusinessDate $continuationDate
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setContinuationDate(\Webservices\StructType\BusinessDate $continuationDate = null)
    {
        $this->ContinuationDate = $continuationDate;
        return $this;
    }
    /**
     * Get EstablishmentDate value
     * @return \Webservices\StructType\BusinessDate|null
     */
    public function getEstablishmentDate()
    {
        return $this->EstablishmentDate;
    }
    /**
     * Set EstablishmentDate value
     * @param \Webservices\StructType\BusinessDate $establishmentDate
     * @return \Webservices\StructType\BusinessDossierExtendedPart
     */
    public function setEstablishmentDate(\Webservices\StructType\BusinessDate $establishmentDate = null)
    {
        $this->EstablishmentDate = $establishmentDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessDossierExtendedPart
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
