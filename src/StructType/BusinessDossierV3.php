<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDossierV3 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessDossierV3 extends AbstractStructBase
{
    /**
     * The RegisterLetter
     * @var string
     */
    public $RegisterLetter;
    /**
     * The DossierNo
     * @var string
     */
    public $DossierNo;
    /**
     * The SubDossierNo
     * @var string
     */
    public $SubDossierNo;
    /**
     * The ChamberNo
     * @var string
     */
    public $ChamberNo;
    /**
     * The Legalformcode
     * @var string
     */
    public $Legalformcode;
    /**
     * The LegalformcodeText
     * @var string
     */
    public $LegalformcodeText;
    /**
     * The PreviousDossierNo
     * @var string
     */
    public $PreviousDossierNo;
    /**
     * The PreviousSubDossierNo
     * @var string
     */
    public $PreviousSubDossierNo;
    /**
     * The Tradename45
     * @var string
     */
    public $Tradename45;
    /**
     * The TradenameFull
     * @var string
     */
    public $TradenameFull;
    /**
     * The EstablishmentPostcode
     * @var string
     */
    public $EstablishmentPostcode;
    /**
     * The EstablishmentCity
     * @var string
     */
    public $EstablishmentCity;
    /**
     * The EstablishmentStreetname
     * @var string
     */
    public $EstablishmentStreetname;
    /**
     * The EstablishmentHouseNo
     * @var int
     */
    public $EstablishmentHouseNo;
    /**
     * The EstablishmentHouseNoAddition
     * @var string
     */
    public $EstablishmentHouseNoAddition;
    /**
     * The CorrespondencePostcode
     * @var string
     */
    public $CorrespondencePostcode;
    /**
     * The CorrespondenceCity
     * @var string
     */
    public $CorrespondenceCity;
    /**
     * The CorrespondenceStreetname
     * @var string
     */
    public $CorrespondenceStreetname;
    /**
     * The CorrespondenceHouseNo
     * @var int
     */
    public $CorrespondenceHouseNo;
    /**
     * The CorrespondenceHouseNoAddition
     * @var string
     */
    public $CorrespondenceHouseNoAddition;
    /**
     * The TelephoneNo
     * @var string
     */
    public $TelephoneNo;
    /**
     * The Domainname
     * @var string
     */
    public $Domainname;
    /**
     * The PrimarySBICode
     * @var string
     */
    public $PrimarySBICode;
    /**
     * The SecondarySBICode1
     * @var string
     */
    public $SecondarySBICode1;
    /**
     * The SecondarySBICode2
     * @var string
     */
    public $SecondarySBICode2;
    /**
     * The PrimarySBICodeText
     * @var string
     */
    public $PrimarySBICodeText;
    /**
     * The SecondarySBICode1Text
     * @var string
     */
    public $SecondarySBICode1Text;
    /**
     * The SecondarySBICode2Text
     * @var string
     */
    public $SecondarySBICode2Text;
    /**
     * The Personnel
     * @var int
     */
    public $Personnel;
    /**
     * The ClassPersonnel
     * @var int
     */
    public $ClassPersonnel;
    /**
     * The IndicationOrganisationcode
     * @var string
     */
    public $IndicationOrganisationcode;
    /**
     * The IndicationEconomicallyActive
     * @var bool
     */
    public $IndicationEconomicallyActive;
    /**
     * The IndicationNonMailing
     * @var bool
     */
    public $IndicationNonMailing;
    /**
     * The IndicationBankruptcy
     * @var bool
     */
    public $IndicationBankruptcy;
    /**
     * The IndicationDIP
     * @var bool
     */
    public $IndicationDIP;
    /**
     * Constructor method for BusinessDossierV3
     * @uses BusinessDossierV3::setRegisterLetter()
     * @uses BusinessDossierV3::setDossierNo()
     * @uses BusinessDossierV3::setSubDossierNo()
     * @uses BusinessDossierV3::setChamberNo()
     * @uses BusinessDossierV3::setLegalformcode()
     * @uses BusinessDossierV3::setLegalformcodeText()
     * @uses BusinessDossierV3::setPreviousDossierNo()
     * @uses BusinessDossierV3::setPreviousSubDossierNo()
     * @uses BusinessDossierV3::setTradename45()
     * @uses BusinessDossierV3::setTradenameFull()
     * @uses BusinessDossierV3::setEstablishmentPostcode()
     * @uses BusinessDossierV3::setEstablishmentCity()
     * @uses BusinessDossierV3::setEstablishmentStreetname()
     * @uses BusinessDossierV3::setEstablishmentHouseNo()
     * @uses BusinessDossierV3::setEstablishmentHouseNoAddition()
     * @uses BusinessDossierV3::setCorrespondencePostcode()
     * @uses BusinessDossierV3::setCorrespondenceCity()
     * @uses BusinessDossierV3::setCorrespondenceStreetname()
     * @uses BusinessDossierV3::setCorrespondenceHouseNo()
     * @uses BusinessDossierV3::setCorrespondenceHouseNoAddition()
     * @uses BusinessDossierV3::setTelephoneNo()
     * @uses BusinessDossierV3::setDomainname()
     * @uses BusinessDossierV3::setPrimarySBICode()
     * @uses BusinessDossierV3::setSecondarySBICode1()
     * @uses BusinessDossierV3::setSecondarySBICode2()
     * @uses BusinessDossierV3::setPrimarySBICodeText()
     * @uses BusinessDossierV3::setSecondarySBICode1Text()
     * @uses BusinessDossierV3::setSecondarySBICode2Text()
     * @uses BusinessDossierV3::setPersonnel()
     * @uses BusinessDossierV3::setClassPersonnel()
     * @uses BusinessDossierV3::setIndicationOrganisationcode()
     * @uses BusinessDossierV3::setIndicationEconomicallyActive()
     * @uses BusinessDossierV3::setIndicationNonMailing()
     * @uses BusinessDossierV3::setIndicationBankruptcy()
     * @uses BusinessDossierV3::setIndicationDIP()
     * @param string $registerLetter
     * @param string $dossierNo
     * @param string $subDossierNo
     * @param string $chamberNo
     * @param string $legalformcode
     * @param string $legalformcodeText
     * @param string $previousDossierNo
     * @param string $previousSubDossierNo
     * @param string $tradename45
     * @param string $tradenameFull
     * @param string $establishmentPostcode
     * @param string $establishmentCity
     * @param string $establishmentStreetname
     * @param int $establishmentHouseNo
     * @param string $establishmentHouseNoAddition
     * @param string $correspondencePostcode
     * @param string $correspondenceCity
     * @param string $correspondenceStreetname
     * @param int $correspondenceHouseNo
     * @param string $correspondenceHouseNoAddition
     * @param string $telephoneNo
     * @param string $domainname
     * @param string $primarySBICode
     * @param string $secondarySBICode1
     * @param string $secondarySBICode2
     * @param string $primarySBICodeText
     * @param string $secondarySBICode1Text
     * @param string $secondarySBICode2Text
     * @param int $personnel
     * @param int $classPersonnel
     * @param string $indicationOrganisationcode
     * @param bool $indicationEconomicallyActive
     * @param bool $indicationNonMailing
     * @param bool $indicationBankruptcy
     * @param bool $indicationDIP
     */
    public function __construct($registerLetter = null, $dossierNo = null, $subDossierNo = null, $chamberNo = null, $legalformcode = null, $legalformcodeText = null, $previousDossierNo = null, $previousSubDossierNo = null, $tradename45 = null, $tradenameFull = null, $establishmentPostcode = null, $establishmentCity = null, $establishmentStreetname = null, $establishmentHouseNo = null, $establishmentHouseNoAddition = null, $correspondencePostcode = null, $correspondenceCity = null, $correspondenceStreetname = null, $correspondenceHouseNo = null, $correspondenceHouseNoAddition = null, $telephoneNo = null, $domainname = null, $primarySBICode = null, $secondarySBICode1 = null, $secondarySBICode2 = null, $primarySBICodeText = null, $secondarySBICode1Text = null, $secondarySBICode2Text = null, $personnel = null, $classPersonnel = null, $indicationOrganisationcode = null, $indicationEconomicallyActive = null, $indicationNonMailing = null, $indicationBankruptcy = null, $indicationDIP = null)
    {
        $this
            ->setRegisterLetter($registerLetter)
            ->setDossierNo($dossierNo)
            ->setSubDossierNo($subDossierNo)
            ->setChamberNo($chamberNo)
            ->setLegalformcode($legalformcode)
            ->setLegalformcodeText($legalformcodeText)
            ->setPreviousDossierNo($previousDossierNo)
            ->setPreviousSubDossierNo($previousSubDossierNo)
            ->setTradename45($tradename45)
            ->setTradenameFull($tradenameFull)
            ->setEstablishmentPostcode($establishmentPostcode)
            ->setEstablishmentCity($establishmentCity)
            ->setEstablishmentStreetname($establishmentStreetname)
            ->setEstablishmentHouseNo($establishmentHouseNo)
            ->setEstablishmentHouseNoAddition($establishmentHouseNoAddition)
            ->setCorrespondencePostcode($correspondencePostcode)
            ->setCorrespondenceCity($correspondenceCity)
            ->setCorrespondenceStreetname($correspondenceStreetname)
            ->setCorrespondenceHouseNo($correspondenceHouseNo)
            ->setCorrespondenceHouseNoAddition($correspondenceHouseNoAddition)
            ->setTelephoneNo($telephoneNo)
            ->setDomainname($domainname)
            ->setPrimarySBICode($primarySBICode)
            ->setSecondarySBICode1($secondarySBICode1)
            ->setSecondarySBICode2($secondarySBICode2)
            ->setPrimarySBICodeText($primarySBICodeText)
            ->setSecondarySBICode1Text($secondarySBICode1Text)
            ->setSecondarySBICode2Text($secondarySBICode2Text)
            ->setPersonnel($personnel)
            ->setClassPersonnel($classPersonnel)
            ->setIndicationOrganisationcode($indicationOrganisationcode)
            ->setIndicationEconomicallyActive($indicationEconomicallyActive)
            ->setIndicationNonMailing($indicationNonMailing)
            ->setIndicationBankruptcy($indicationBankruptcy)
            ->setIndicationDIP($indicationDIP);
    }
    /**
     * Get RegisterLetter value
     * @return string|null
     */
    public function getRegisterLetter()
    {
        return $this->RegisterLetter;
    }
    /**
     * Set RegisterLetter value
     * @param string $registerLetter
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setRegisterLetter($registerLetter = null)
    {
        // validation for constraint: string
        if (!is_null($registerLetter) && !is_string($registerLetter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registerLetter)), __LINE__);
        }
        $this->RegisterLetter = $registerLetter;
        return $this;
    }
    /**
     * Get DossierNo value
     * @return string|null
     */
    public function getDossierNo()
    {
        return $this->DossierNo;
    }
    /**
     * Set DossierNo value
     * @param string $dossierNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setDossierNo($dossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($dossierNo) && !is_string($dossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossierNo)), __LINE__);
        }
        $this->DossierNo = $dossierNo;
        return $this;
    }
    /**
     * Get SubDossierNo value
     * @return string|null
     */
    public function getSubDossierNo()
    {
        return $this->SubDossierNo;
    }
    /**
     * Set SubDossierNo value
     * @param string $subDossierNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setSubDossierNo($subDossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($subDossierNo) && !is_string($subDossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subDossierNo)), __LINE__);
        }
        $this->SubDossierNo = $subDossierNo;
        return $this;
    }
    /**
     * Get ChamberNo value
     * @return string|null
     */
    public function getChamberNo()
    {
        return $this->ChamberNo;
    }
    /**
     * Set ChamberNo value
     * @param string $chamberNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setChamberNo($chamberNo = null)
    {
        // validation for constraint: string
        if (!is_null($chamberNo) && !is_string($chamberNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chamberNo)), __LINE__);
        }
        $this->ChamberNo = $chamberNo;
        return $this;
    }
    /**
     * Get Legalformcode value
     * @return string|null
     */
    public function getLegalformcode()
    {
        return $this->Legalformcode;
    }
    /**
     * Set Legalformcode value
     * @param string $legalformcode
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setLegalformcode($legalformcode = null)
    {
        // validation for constraint: string
        if (!is_null($legalformcode) && !is_string($legalformcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalformcode)), __LINE__);
        }
        $this->Legalformcode = $legalformcode;
        return $this;
    }
    /**
     * Get LegalformcodeText value
     * @return string|null
     */
    public function getLegalformcodeText()
    {
        return $this->LegalformcodeText;
    }
    /**
     * Set LegalformcodeText value
     * @param string $legalformcodeText
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setLegalformcodeText($legalformcodeText = null)
    {
        // validation for constraint: string
        if (!is_null($legalformcodeText) && !is_string($legalformcodeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalformcodeText)), __LINE__);
        }
        $this->LegalformcodeText = $legalformcodeText;
        return $this;
    }
    /**
     * Get PreviousDossierNo value
     * @return string|null
     */
    public function getPreviousDossierNo()
    {
        return $this->PreviousDossierNo;
    }
    /**
     * Set PreviousDossierNo value
     * @param string $previousDossierNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setPreviousDossierNo($previousDossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($previousDossierNo) && !is_string($previousDossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousDossierNo)), __LINE__);
        }
        $this->PreviousDossierNo = $previousDossierNo;
        return $this;
    }
    /**
     * Get PreviousSubDossierNo value
     * @return string|null
     */
    public function getPreviousSubDossierNo()
    {
        return $this->PreviousSubDossierNo;
    }
    /**
     * Set PreviousSubDossierNo value
     * @param string $previousSubDossierNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setPreviousSubDossierNo($previousSubDossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($previousSubDossierNo) && !is_string($previousSubDossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousSubDossierNo)), __LINE__);
        }
        $this->PreviousSubDossierNo = $previousSubDossierNo;
        return $this;
    }
    /**
     * Get Tradename45 value
     * @return string|null
     */
    public function getTradename45()
    {
        return $this->Tradename45;
    }
    /**
     * Set Tradename45 value
     * @param string $tradename45
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setTradename45($tradename45 = null)
    {
        // validation for constraint: string
        if (!is_null($tradename45) && !is_string($tradename45)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradename45)), __LINE__);
        }
        $this->Tradename45 = $tradename45;
        return $this;
    }
    /**
     * Get TradenameFull value
     * @return string|null
     */
    public function getTradenameFull()
    {
        return $this->TradenameFull;
    }
    /**
     * Set TradenameFull value
     * @param string $tradenameFull
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setTradenameFull($tradenameFull = null)
    {
        // validation for constraint: string
        if (!is_null($tradenameFull) && !is_string($tradenameFull)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradenameFull)), __LINE__);
        }
        $this->TradenameFull = $tradenameFull;
        return $this;
    }
    /**
     * Get EstablishmentPostcode value
     * @return string|null
     */
    public function getEstablishmentPostcode()
    {
        return $this->EstablishmentPostcode;
    }
    /**
     * Set EstablishmentPostcode value
     * @param string $establishmentPostcode
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setEstablishmentPostcode($establishmentPostcode = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentPostcode) && !is_string($establishmentPostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentPostcode)), __LINE__);
        }
        $this->EstablishmentPostcode = $establishmentPostcode;
        return $this;
    }
    /**
     * Get EstablishmentCity value
     * @return string|null
     */
    public function getEstablishmentCity()
    {
        return $this->EstablishmentCity;
    }
    /**
     * Set EstablishmentCity value
     * @param string $establishmentCity
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setEstablishmentCity($establishmentCity = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentCity) && !is_string($establishmentCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentCity)), __LINE__);
        }
        $this->EstablishmentCity = $establishmentCity;
        return $this;
    }
    /**
     * Get EstablishmentStreetname value
     * @return string|null
     */
    public function getEstablishmentStreetname()
    {
        return $this->EstablishmentStreetname;
    }
    /**
     * Set EstablishmentStreetname value
     * @param string $establishmentStreetname
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setEstablishmentStreetname($establishmentStreetname = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentStreetname) && !is_string($establishmentStreetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentStreetname)), __LINE__);
        }
        $this->EstablishmentStreetname = $establishmentStreetname;
        return $this;
    }
    /**
     * Get EstablishmentHouseNo value
     * @return int|null
     */
    public function getEstablishmentHouseNo()
    {
        return $this->EstablishmentHouseNo;
    }
    /**
     * Set EstablishmentHouseNo value
     * @param int $establishmentHouseNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setEstablishmentHouseNo($establishmentHouseNo = null)
    {
        // validation for constraint: int
        if (!is_null($establishmentHouseNo) && !is_numeric($establishmentHouseNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($establishmentHouseNo)), __LINE__);
        }
        $this->EstablishmentHouseNo = $establishmentHouseNo;
        return $this;
    }
    /**
     * Get EstablishmentHouseNoAddition value
     * @return string|null
     */
    public function getEstablishmentHouseNoAddition()
    {
        return $this->EstablishmentHouseNoAddition;
    }
    /**
     * Set EstablishmentHouseNoAddition value
     * @param string $establishmentHouseNoAddition
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setEstablishmentHouseNoAddition($establishmentHouseNoAddition = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentHouseNoAddition) && !is_string($establishmentHouseNoAddition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentHouseNoAddition)), __LINE__);
        }
        $this->EstablishmentHouseNoAddition = $establishmentHouseNoAddition;
        return $this;
    }
    /**
     * Get CorrespondencePostcode value
     * @return string|null
     */
    public function getCorrespondencePostcode()
    {
        return $this->CorrespondencePostcode;
    }
    /**
     * Set CorrespondencePostcode value
     * @param string $correspondencePostcode
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setCorrespondencePostcode($correspondencePostcode = null)
    {
        // validation for constraint: string
        if (!is_null($correspondencePostcode) && !is_string($correspondencePostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondencePostcode)), __LINE__);
        }
        $this->CorrespondencePostcode = $correspondencePostcode;
        return $this;
    }
    /**
     * Get CorrespondenceCity value
     * @return string|null
     */
    public function getCorrespondenceCity()
    {
        return $this->CorrespondenceCity;
    }
    /**
     * Set CorrespondenceCity value
     * @param string $correspondenceCity
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setCorrespondenceCity($correspondenceCity = null)
    {
        // validation for constraint: string
        if (!is_null($correspondenceCity) && !is_string($correspondenceCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondenceCity)), __LINE__);
        }
        $this->CorrespondenceCity = $correspondenceCity;
        return $this;
    }
    /**
     * Get CorrespondenceStreetname value
     * @return string|null
     */
    public function getCorrespondenceStreetname()
    {
        return $this->CorrespondenceStreetname;
    }
    /**
     * Set CorrespondenceStreetname value
     * @param string $correspondenceStreetname
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setCorrespondenceStreetname($correspondenceStreetname = null)
    {
        // validation for constraint: string
        if (!is_null($correspondenceStreetname) && !is_string($correspondenceStreetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondenceStreetname)), __LINE__);
        }
        $this->CorrespondenceStreetname = $correspondenceStreetname;
        return $this;
    }
    /**
     * Get CorrespondenceHouseNo value
     * @return int|null
     */
    public function getCorrespondenceHouseNo()
    {
        return $this->CorrespondenceHouseNo;
    }
    /**
     * Set CorrespondenceHouseNo value
     * @param int $correspondenceHouseNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setCorrespondenceHouseNo($correspondenceHouseNo = null)
    {
        // validation for constraint: int
        if (!is_null($correspondenceHouseNo) && !is_numeric($correspondenceHouseNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($correspondenceHouseNo)), __LINE__);
        }
        $this->CorrespondenceHouseNo = $correspondenceHouseNo;
        return $this;
    }
    /**
     * Get CorrespondenceHouseNoAddition value
     * @return string|null
     */
    public function getCorrespondenceHouseNoAddition()
    {
        return $this->CorrespondenceHouseNoAddition;
    }
    /**
     * Set CorrespondenceHouseNoAddition value
     * @param string $correspondenceHouseNoAddition
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setCorrespondenceHouseNoAddition($correspondenceHouseNoAddition = null)
    {
        // validation for constraint: string
        if (!is_null($correspondenceHouseNoAddition) && !is_string($correspondenceHouseNoAddition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondenceHouseNoAddition)), __LINE__);
        }
        $this->CorrespondenceHouseNoAddition = $correspondenceHouseNoAddition;
        return $this;
    }
    /**
     * Get TelephoneNo value
     * @return string|null
     */
    public function getTelephoneNo()
    {
        return $this->TelephoneNo;
    }
    /**
     * Set TelephoneNo value
     * @param string $telephoneNo
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setTelephoneNo($telephoneNo = null)
    {
        // validation for constraint: string
        if (!is_null($telephoneNo) && !is_string($telephoneNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephoneNo)), __LINE__);
        }
        $this->TelephoneNo = $telephoneNo;
        return $this;
    }
    /**
     * Get Domainname value
     * @return string|null
     */
    public function getDomainname()
    {
        return $this->Domainname;
    }
    /**
     * Set Domainname value
     * @param string $domainname
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setDomainname($domainname = null)
    {
        // validation for constraint: string
        if (!is_null($domainname) && !is_string($domainname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainname)), __LINE__);
        }
        $this->Domainname = $domainname;
        return $this;
    }
    /**
     * Get PrimarySBICode value
     * @return string|null
     */
    public function getPrimarySBICode()
    {
        return $this->PrimarySBICode;
    }
    /**
     * Set PrimarySBICode value
     * @param string $primarySBICode
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setPrimarySBICode($primarySBICode = null)
    {
        // validation for constraint: string
        if (!is_null($primarySBICode) && !is_string($primarySBICode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primarySBICode)), __LINE__);
        }
        $this->PrimarySBICode = $primarySBICode;
        return $this;
    }
    /**
     * Get SecondarySBICode1 value
     * @return string|null
     */
    public function getSecondarySBICode1()
    {
        return $this->SecondarySBICode1;
    }
    /**
     * Set SecondarySBICode1 value
     * @param string $secondarySBICode1
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setSecondarySBICode1($secondarySBICode1 = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode1) && !is_string($secondarySBICode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode1)), __LINE__);
        }
        $this->SecondarySBICode1 = $secondarySBICode1;
        return $this;
    }
    /**
     * Get SecondarySBICode2 value
     * @return string|null
     */
    public function getSecondarySBICode2()
    {
        return $this->SecondarySBICode2;
    }
    /**
     * Set SecondarySBICode2 value
     * @param string $secondarySBICode2
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setSecondarySBICode2($secondarySBICode2 = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode2) && !is_string($secondarySBICode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode2)), __LINE__);
        }
        $this->SecondarySBICode2 = $secondarySBICode2;
        return $this;
    }
    /**
     * Get PrimarySBICodeText value
     * @return string|null
     */
    public function getPrimarySBICodeText()
    {
        return $this->PrimarySBICodeText;
    }
    /**
     * Set PrimarySBICodeText value
     * @param string $primarySBICodeText
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setPrimarySBICodeText($primarySBICodeText = null)
    {
        // validation for constraint: string
        if (!is_null($primarySBICodeText) && !is_string($primarySBICodeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primarySBICodeText)), __LINE__);
        }
        $this->PrimarySBICodeText = $primarySBICodeText;
        return $this;
    }
    /**
     * Get SecondarySBICode1Text value
     * @return string|null
     */
    public function getSecondarySBICode1Text()
    {
        return $this->SecondarySBICode1Text;
    }
    /**
     * Set SecondarySBICode1Text value
     * @param string $secondarySBICode1Text
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setSecondarySBICode1Text($secondarySBICode1Text = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode1Text) && !is_string($secondarySBICode1Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode1Text)), __LINE__);
        }
        $this->SecondarySBICode1Text = $secondarySBICode1Text;
        return $this;
    }
    /**
     * Get SecondarySBICode2Text value
     * @return string|null
     */
    public function getSecondarySBICode2Text()
    {
        return $this->SecondarySBICode2Text;
    }
    /**
     * Set SecondarySBICode2Text value
     * @param string $secondarySBICode2Text
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setSecondarySBICode2Text($secondarySBICode2Text = null)
    {
        // validation for constraint: string
        if (!is_null($secondarySBICode2Text) && !is_string($secondarySBICode2Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondarySBICode2Text)), __LINE__);
        }
        $this->SecondarySBICode2Text = $secondarySBICode2Text;
        return $this;
    }
    /**
     * Get Personnel value
     * @return int|null
     */
    public function getPersonnel()
    {
        return $this->Personnel;
    }
    /**
     * Set Personnel value
     * @param int $personnel
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setPersonnel($personnel = null)
    {
        // validation for constraint: int
        if (!is_null($personnel) && !is_numeric($personnel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($personnel)), __LINE__);
        }
        $this->Personnel = $personnel;
        return $this;
    }
    /**
     * Get ClassPersonnel value
     * @return int|null
     */
    public function getClassPersonnel()
    {
        return $this->ClassPersonnel;
    }
    /**
     * Set ClassPersonnel value
     * @param int $classPersonnel
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setClassPersonnel($classPersonnel = null)
    {
        // validation for constraint: int
        if (!is_null($classPersonnel) && !is_numeric($classPersonnel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($classPersonnel)), __LINE__);
        }
        $this->ClassPersonnel = $classPersonnel;
        return $this;
    }
    /**
     * Get IndicationOrganisationcode value
     * @return string|null
     */
    public function getIndicationOrganisationcode()
    {
        return $this->IndicationOrganisationcode;
    }
    /**
     * Set IndicationOrganisationcode value
     * @param string $indicationOrganisationcode
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setIndicationOrganisationcode($indicationOrganisationcode = null)
    {
        // validation for constraint: string
        if (!is_null($indicationOrganisationcode) && !is_string($indicationOrganisationcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicationOrganisationcode)), __LINE__);
        }
        $this->IndicationOrganisationcode = $indicationOrganisationcode;
        return $this;
    }
    /**
     * Get IndicationEconomicallyActive value
     * @return bool|null
     */
    public function getIndicationEconomicallyActive()
    {
        return $this->IndicationEconomicallyActive;
    }
    /**
     * Set IndicationEconomicallyActive value
     * @param bool $indicationEconomicallyActive
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setIndicationEconomicallyActive($indicationEconomicallyActive = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicationEconomicallyActive) && !is_bool($indicationEconomicallyActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicationEconomicallyActive)), __LINE__);
        }
        $this->IndicationEconomicallyActive = $indicationEconomicallyActive;
        return $this;
    }
    /**
     * Get IndicationNonMailing value
     * @return bool|null
     */
    public function getIndicationNonMailing()
    {
        return $this->IndicationNonMailing;
    }
    /**
     * Set IndicationNonMailing value
     * @param bool $indicationNonMailing
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setIndicationNonMailing($indicationNonMailing = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicationNonMailing) && !is_bool($indicationNonMailing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicationNonMailing)), __LINE__);
        }
        $this->IndicationNonMailing = $indicationNonMailing;
        return $this;
    }
    /**
     * Get IndicationBankruptcy value
     * @return bool|null
     */
    public function getIndicationBankruptcy()
    {
        return $this->IndicationBankruptcy;
    }
    /**
     * Set IndicationBankruptcy value
     * @param bool $indicationBankruptcy
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setIndicationBankruptcy($indicationBankruptcy = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicationBankruptcy) && !is_bool($indicationBankruptcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicationBankruptcy)), __LINE__);
        }
        $this->IndicationBankruptcy = $indicationBankruptcy;
        return $this;
    }
    /**
     * Get IndicationDIP value
     * @return bool|null
     */
    public function getIndicationDIP()
    {
        return $this->IndicationDIP;
    }
    /**
     * Set IndicationDIP value
     * @param bool $indicationDIP
     * @return \Webservices\StructType\BusinessDossierV3
     */
    public function setIndicationDIP($indicationDIP = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicationDIP) && !is_bool($indicationDIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicationDIP)), __LINE__);
        }
        $this->IndicationDIP = $indicationDIP;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessDossierV3
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
