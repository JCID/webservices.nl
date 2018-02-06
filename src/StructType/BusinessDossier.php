<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDossier StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessDossier extends AbstractStructBase
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
     * The Tradename30
     * @var string
     */
    public $Tradename30;
    /**
     * The Tradename1x30
     * @var string
     */
    public $Tradename1x30;
    /**
     * The Tradename2x30
     * @var string
     */
    public $Tradename2x30;
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
     * The EstablishmentAddress
     * @var string
     */
    public $EstablishmentAddress;
    /**
     * The EstablishmentPostcodeCity
     * @var string
     */
    public $EstablishmentPostcodeCity;
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
     * The EstablishmentPostcode
     * @var string
     */
    public $EstablishmentPostcode;
    /**
     * The CorrespondenceAddress
     * @var string
     */
    public $CorrespondenceAddress;
    /**
     * The CorrespondencePostcodeCity
     * @var string
     */
    public $CorrespondencePostcodeCity;
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
     * The CorrespondencePostcode
     * @var string
     */
    public $CorrespondencePostcode;
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
     * The PrimaryActivitycode
     * @var string
     */
    public $PrimaryActivitycode;
    /**
     * The SecondaryActivitycode1
     * @var string
     */
    public $SecondaryActivitycode1;
    /**
     * The SecondaryActivitycode2
     * @var string
     */
    public $SecondaryActivitycode2;
    /**
     * The PrimaryActivitycodeText
     * @var string
     */
    public $PrimaryActivitycodeText;
    /**
     * The SecondaryActivitycode1Text
     * @var string
     */
    public $SecondaryActivitycode1Text;
    /**
     * The SecondaryActivitycode2Text
     * @var string
     */
    public $SecondaryActivitycode2Text;
    /**
     * The PersonnelFulltime
     * @var string
     */
    public $PersonnelFulltime;
    /**
     * The ClassPersonnelFulltime
     * @var string
     */
    public $ClassPersonnelFulltime;
    /**
     * The IndicationOrganisationcode
     * @var string
     */
    public $IndicationOrganisationcode;
    /**
     * The IndicationEconomicallyActive
     * @var string
     */
    public $IndicationEconomicallyActive;
    /**
     * The IndicationNonMailing
     * @var string
     */
    public $IndicationNonMailing;
    /**
     * The IndicationBankruptcy
     * @var string
     */
    public $IndicationBankruptcy;
    /**
     * The IndicationDIP
     * @var string
     */
    public $IndicationDIP;
    /**
     * Constructor method for BusinessDossier
     * @uses BusinessDossier::setRegisterLetter()
     * @uses BusinessDossier::setDossierNo()
     * @uses BusinessDossier::setSubDossierNo()
     * @uses BusinessDossier::setChamberNo()
     * @uses BusinessDossier::setLegalformcode()
     * @uses BusinessDossier::setLegalformcodeText()
     * @uses BusinessDossier::setPreviousDossierNo()
     * @uses BusinessDossier::setPreviousSubDossierNo()
     * @uses BusinessDossier::setTradename30()
     * @uses BusinessDossier::setTradename1x30()
     * @uses BusinessDossier::setTradename2x30()
     * @uses BusinessDossier::setTradename45()
     * @uses BusinessDossier::setTradenameFull()
     * @uses BusinessDossier::setEstablishmentAddress()
     * @uses BusinessDossier::setEstablishmentPostcodeCity()
     * @uses BusinessDossier::setEstablishmentStreetname()
     * @uses BusinessDossier::setEstablishmentHouseNo()
     * @uses BusinessDossier::setEstablishmentHouseNoAddition()
     * @uses BusinessDossier::setEstablishmentPostcode()
     * @uses BusinessDossier::setCorrespondenceAddress()
     * @uses BusinessDossier::setCorrespondencePostcodeCity()
     * @uses BusinessDossier::setCorrespondenceStreetname()
     * @uses BusinessDossier::setCorrespondenceHouseNo()
     * @uses BusinessDossier::setCorrespondenceHouseNoAddition()
     * @uses BusinessDossier::setCorrespondencePostcode()
     * @uses BusinessDossier::setTelephoneNo()
     * @uses BusinessDossier::setDomainname()
     * @uses BusinessDossier::setPrimaryActivitycode()
     * @uses BusinessDossier::setSecondaryActivitycode1()
     * @uses BusinessDossier::setSecondaryActivitycode2()
     * @uses BusinessDossier::setPrimaryActivitycodeText()
     * @uses BusinessDossier::setSecondaryActivitycode1Text()
     * @uses BusinessDossier::setSecondaryActivitycode2Text()
     * @uses BusinessDossier::setPersonnelFulltime()
     * @uses BusinessDossier::setClassPersonnelFulltime()
     * @uses BusinessDossier::setIndicationOrganisationcode()
     * @uses BusinessDossier::setIndicationEconomicallyActive()
     * @uses BusinessDossier::setIndicationNonMailing()
     * @uses BusinessDossier::setIndicationBankruptcy()
     * @uses BusinessDossier::setIndicationDIP()
     * @param string $registerLetter
     * @param string $dossierNo
     * @param string $subDossierNo
     * @param string $chamberNo
     * @param string $legalformcode
     * @param string $legalformcodeText
     * @param string $previousDossierNo
     * @param string $previousSubDossierNo
     * @param string $tradename30
     * @param string $tradename1x30
     * @param string $tradename2x30
     * @param string $tradename45
     * @param string $tradenameFull
     * @param string $establishmentAddress
     * @param string $establishmentPostcodeCity
     * @param string $establishmentStreetname
     * @param int $establishmentHouseNo
     * @param string $establishmentHouseNoAddition
     * @param string $establishmentPostcode
     * @param string $correspondenceAddress
     * @param string $correspondencePostcodeCity
     * @param string $correspondenceStreetname
     * @param int $correspondenceHouseNo
     * @param string $correspondenceHouseNoAddition
     * @param string $correspondencePostcode
     * @param string $telephoneNo
     * @param string $domainname
     * @param string $primaryActivitycode
     * @param string $secondaryActivitycode1
     * @param string $secondaryActivitycode2
     * @param string $primaryActivitycodeText
     * @param string $secondaryActivitycode1Text
     * @param string $secondaryActivitycode2Text
     * @param string $personnelFulltime
     * @param string $classPersonnelFulltime
     * @param string $indicationOrganisationcode
     * @param string $indicationEconomicallyActive
     * @param string $indicationNonMailing
     * @param string $indicationBankruptcy
     * @param string $indicationDIP
     */
    public function __construct($registerLetter = null, $dossierNo = null, $subDossierNo = null, $chamberNo = null, $legalformcode = null, $legalformcodeText = null, $previousDossierNo = null, $previousSubDossierNo = null, $tradename30 = null, $tradename1x30 = null, $tradename2x30 = null, $tradename45 = null, $tradenameFull = null, $establishmentAddress = null, $establishmentPostcodeCity = null, $establishmentStreetname = null, $establishmentHouseNo = null, $establishmentHouseNoAddition = null, $establishmentPostcode = null, $correspondenceAddress = null, $correspondencePostcodeCity = null, $correspondenceStreetname = null, $correspondenceHouseNo = null, $correspondenceHouseNoAddition = null, $correspondencePostcode = null, $telephoneNo = null, $domainname = null, $primaryActivitycode = null, $secondaryActivitycode1 = null, $secondaryActivitycode2 = null, $primaryActivitycodeText = null, $secondaryActivitycode1Text = null, $secondaryActivitycode2Text = null, $personnelFulltime = null, $classPersonnelFulltime = null, $indicationOrganisationcode = null, $indicationEconomicallyActive = null, $indicationNonMailing = null, $indicationBankruptcy = null, $indicationDIP = null)
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
            ->setTradename30($tradename30)
            ->setTradename1x30($tradename1x30)
            ->setTradename2x30($tradename2x30)
            ->setTradename45($tradename45)
            ->setTradenameFull($tradenameFull)
            ->setEstablishmentAddress($establishmentAddress)
            ->setEstablishmentPostcodeCity($establishmentPostcodeCity)
            ->setEstablishmentStreetname($establishmentStreetname)
            ->setEstablishmentHouseNo($establishmentHouseNo)
            ->setEstablishmentHouseNoAddition($establishmentHouseNoAddition)
            ->setEstablishmentPostcode($establishmentPostcode)
            ->setCorrespondenceAddress($correspondenceAddress)
            ->setCorrespondencePostcodeCity($correspondencePostcodeCity)
            ->setCorrespondenceStreetname($correspondenceStreetname)
            ->setCorrespondenceHouseNo($correspondenceHouseNo)
            ->setCorrespondenceHouseNoAddition($correspondenceHouseNoAddition)
            ->setCorrespondencePostcode($correspondencePostcode)
            ->setTelephoneNo($telephoneNo)
            ->setDomainname($domainname)
            ->setPrimaryActivitycode($primaryActivitycode)
            ->setSecondaryActivitycode1($secondaryActivitycode1)
            ->setSecondaryActivitycode2($secondaryActivitycode2)
            ->setPrimaryActivitycodeText($primaryActivitycodeText)
            ->setSecondaryActivitycode1Text($secondaryActivitycode1Text)
            ->setSecondaryActivitycode2Text($secondaryActivitycode2Text)
            ->setPersonnelFulltime($personnelFulltime)
            ->setClassPersonnelFulltime($classPersonnelFulltime)
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * Get Tradename30 value
     * @return string|null
     */
    public function getTradename30()
    {
        return $this->Tradename30;
    }
    /**
     * Set Tradename30 value
     * @param string $tradename30
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setTradename30($tradename30 = null)
    {
        // validation for constraint: string
        if (!is_null($tradename30) && !is_string($tradename30)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradename30)), __LINE__);
        }
        $this->Tradename30 = $tradename30;
        return $this;
    }
    /**
     * Get Tradename1x30 value
     * @return string|null
     */
    public function getTradename1x30()
    {
        return $this->Tradename1x30;
    }
    /**
     * Set Tradename1x30 value
     * @param string $tradename1x30
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setTradename1x30($tradename1x30 = null)
    {
        // validation for constraint: string
        if (!is_null($tradename1x30) && !is_string($tradename1x30)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradename1x30)), __LINE__);
        }
        $this->Tradename1x30 = $tradename1x30;
        return $this;
    }
    /**
     * Get Tradename2x30 value
     * @return string|null
     */
    public function getTradename2x30()
    {
        return $this->Tradename2x30;
    }
    /**
     * Set Tradename2x30 value
     * @param string $tradename2x30
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setTradename2x30($tradename2x30 = null)
    {
        // validation for constraint: string
        if (!is_null($tradename2x30) && !is_string($tradename2x30)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradename2x30)), __LINE__);
        }
        $this->Tradename2x30 = $tradename2x30;
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * Get EstablishmentAddress value
     * @return string|null
     */
    public function getEstablishmentAddress()
    {
        return $this->EstablishmentAddress;
    }
    /**
     * Set EstablishmentAddress value
     * @param string $establishmentAddress
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setEstablishmentAddress($establishmentAddress = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentAddress) && !is_string($establishmentAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentAddress)), __LINE__);
        }
        $this->EstablishmentAddress = $establishmentAddress;
        return $this;
    }
    /**
     * Get EstablishmentPostcodeCity value
     * @return string|null
     */
    public function getEstablishmentPostcodeCity()
    {
        return $this->EstablishmentPostcodeCity;
    }
    /**
     * Set EstablishmentPostcodeCity value
     * @param string $establishmentPostcodeCity
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setEstablishmentPostcodeCity($establishmentPostcodeCity = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentPostcodeCity) && !is_string($establishmentPostcodeCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentPostcodeCity)), __LINE__);
        }
        $this->EstablishmentPostcodeCity = $establishmentPostcodeCity;
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * Get CorrespondenceAddress value
     * @return string|null
     */
    public function getCorrespondenceAddress()
    {
        return $this->CorrespondenceAddress;
    }
    /**
     * Set CorrespondenceAddress value
     * @param string $correspondenceAddress
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setCorrespondenceAddress($correspondenceAddress = null)
    {
        // validation for constraint: string
        if (!is_null($correspondenceAddress) && !is_string($correspondenceAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondenceAddress)), __LINE__);
        }
        $this->CorrespondenceAddress = $correspondenceAddress;
        return $this;
    }
    /**
     * Get CorrespondencePostcodeCity value
     * @return string|null
     */
    public function getCorrespondencePostcodeCity()
    {
        return $this->CorrespondencePostcodeCity;
    }
    /**
     * Set CorrespondencePostcodeCity value
     * @param string $correspondencePostcodeCity
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setCorrespondencePostcodeCity($correspondencePostcodeCity = null)
    {
        // validation for constraint: string
        if (!is_null($correspondencePostcodeCity) && !is_string($correspondencePostcodeCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondencePostcodeCity)), __LINE__);
        }
        $this->CorrespondencePostcodeCity = $correspondencePostcodeCity;
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return \Webservices\StructType\BusinessDossier
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
     * Get PrimaryActivitycode value
     * @return string|null
     */
    public function getPrimaryActivitycode()
    {
        return $this->PrimaryActivitycode;
    }
    /**
     * Set PrimaryActivitycode value
     * @param string $primaryActivitycode
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setPrimaryActivitycode($primaryActivitycode = null)
    {
        // validation for constraint: string
        if (!is_null($primaryActivitycode) && !is_string($primaryActivitycode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryActivitycode)), __LINE__);
        }
        $this->PrimaryActivitycode = $primaryActivitycode;
        return $this;
    }
    /**
     * Get SecondaryActivitycode1 value
     * @return string|null
     */
    public function getSecondaryActivitycode1()
    {
        return $this->SecondaryActivitycode1;
    }
    /**
     * Set SecondaryActivitycode1 value
     * @param string $secondaryActivitycode1
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setSecondaryActivitycode1($secondaryActivitycode1 = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryActivitycode1) && !is_string($secondaryActivitycode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryActivitycode1)), __LINE__);
        }
        $this->SecondaryActivitycode1 = $secondaryActivitycode1;
        return $this;
    }
    /**
     * Get SecondaryActivitycode2 value
     * @return string|null
     */
    public function getSecondaryActivitycode2()
    {
        return $this->SecondaryActivitycode2;
    }
    /**
     * Set SecondaryActivitycode2 value
     * @param string $secondaryActivitycode2
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setSecondaryActivitycode2($secondaryActivitycode2 = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryActivitycode2) && !is_string($secondaryActivitycode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryActivitycode2)), __LINE__);
        }
        $this->SecondaryActivitycode2 = $secondaryActivitycode2;
        return $this;
    }
    /**
     * Get PrimaryActivitycodeText value
     * @return string|null
     */
    public function getPrimaryActivitycodeText()
    {
        return $this->PrimaryActivitycodeText;
    }
    /**
     * Set PrimaryActivitycodeText value
     * @param string $primaryActivitycodeText
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setPrimaryActivitycodeText($primaryActivitycodeText = null)
    {
        // validation for constraint: string
        if (!is_null($primaryActivitycodeText) && !is_string($primaryActivitycodeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryActivitycodeText)), __LINE__);
        }
        $this->PrimaryActivitycodeText = $primaryActivitycodeText;
        return $this;
    }
    /**
     * Get SecondaryActivitycode1Text value
     * @return string|null
     */
    public function getSecondaryActivitycode1Text()
    {
        return $this->SecondaryActivitycode1Text;
    }
    /**
     * Set SecondaryActivitycode1Text value
     * @param string $secondaryActivitycode1Text
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setSecondaryActivitycode1Text($secondaryActivitycode1Text = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryActivitycode1Text) && !is_string($secondaryActivitycode1Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryActivitycode1Text)), __LINE__);
        }
        $this->SecondaryActivitycode1Text = $secondaryActivitycode1Text;
        return $this;
    }
    /**
     * Get SecondaryActivitycode2Text value
     * @return string|null
     */
    public function getSecondaryActivitycode2Text()
    {
        return $this->SecondaryActivitycode2Text;
    }
    /**
     * Set SecondaryActivitycode2Text value
     * @param string $secondaryActivitycode2Text
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setSecondaryActivitycode2Text($secondaryActivitycode2Text = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryActivitycode2Text) && !is_string($secondaryActivitycode2Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryActivitycode2Text)), __LINE__);
        }
        $this->SecondaryActivitycode2Text = $secondaryActivitycode2Text;
        return $this;
    }
    /**
     * Get PersonnelFulltime value
     * @return string|null
     */
    public function getPersonnelFulltime()
    {
        return $this->PersonnelFulltime;
    }
    /**
     * Set PersonnelFulltime value
     * @param string $personnelFulltime
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setPersonnelFulltime($personnelFulltime = null)
    {
        // validation for constraint: string
        if (!is_null($personnelFulltime) && !is_string($personnelFulltime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personnelFulltime)), __LINE__);
        }
        $this->PersonnelFulltime = $personnelFulltime;
        return $this;
    }
    /**
     * Get ClassPersonnelFulltime value
     * @return string|null
     */
    public function getClassPersonnelFulltime()
    {
        return $this->ClassPersonnelFulltime;
    }
    /**
     * Set ClassPersonnelFulltime value
     * @param string $classPersonnelFulltime
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setClassPersonnelFulltime($classPersonnelFulltime = null)
    {
        // validation for constraint: string
        if (!is_null($classPersonnelFulltime) && !is_string($classPersonnelFulltime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classPersonnelFulltime)), __LINE__);
        }
        $this->ClassPersonnelFulltime = $classPersonnelFulltime;
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
     * @return \Webservices\StructType\BusinessDossier
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
     * @return string|null
     */
    public function getIndicationEconomicallyActive()
    {
        return $this->IndicationEconomicallyActive;
    }
    /**
     * Set IndicationEconomicallyActive value
     * @param string $indicationEconomicallyActive
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setIndicationEconomicallyActive($indicationEconomicallyActive = null)
    {
        // validation for constraint: string
        if (!is_null($indicationEconomicallyActive) && !is_string($indicationEconomicallyActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicationEconomicallyActive)), __LINE__);
        }
        $this->IndicationEconomicallyActive = $indicationEconomicallyActive;
        return $this;
    }
    /**
     * Get IndicationNonMailing value
     * @return string|null
     */
    public function getIndicationNonMailing()
    {
        return $this->IndicationNonMailing;
    }
    /**
     * Set IndicationNonMailing value
     * @param string $indicationNonMailing
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setIndicationNonMailing($indicationNonMailing = null)
    {
        // validation for constraint: string
        if (!is_null($indicationNonMailing) && !is_string($indicationNonMailing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicationNonMailing)), __LINE__);
        }
        $this->IndicationNonMailing = $indicationNonMailing;
        return $this;
    }
    /**
     * Get IndicationBankruptcy value
     * @return string|null
     */
    public function getIndicationBankruptcy()
    {
        return $this->IndicationBankruptcy;
    }
    /**
     * Set IndicationBankruptcy value
     * @param string $indicationBankruptcy
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setIndicationBankruptcy($indicationBankruptcy = null)
    {
        // validation for constraint: string
        if (!is_null($indicationBankruptcy) && !is_string($indicationBankruptcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicationBankruptcy)), __LINE__);
        }
        $this->IndicationBankruptcy = $indicationBankruptcy;
        return $this;
    }
    /**
     * Get IndicationDIP value
     * @return string|null
     */
    public function getIndicationDIP()
    {
        return $this->IndicationDIP;
    }
    /**
     * Set IndicationDIP value
     * @param string $indicationDIP
     * @return \Webservices\StructType\BusinessDossier
     */
    public function setIndicationDIP($indicationDIP = null)
    {
        // validation for constraint: string
        if (!is_null($indicationDIP) && !is_string($indicationDIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicationDIP)), __LINE__);
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
     * @return \Webservices\StructType\BusinessDossier
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
