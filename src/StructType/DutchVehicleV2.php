<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleV2 extends AbstractStructBase
{
    /**
     * The basic_data
     * @var \Webservices\StructType\DutchVehicleData
     */
    public $basic_data;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleStatus
     */
    public $status;
    /**
     * The registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleRegistration
     */
    public $registration;
    /**
     * The details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleFeature
     */
    public $details;
    /**
     * The tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleTaxData
     */
    public $tax;
    /**
     * The technical_weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleTechnicalWeight
     */
    public $technical_weight;
    /**
     * The engine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleEngine
     */
    public $engine;
    /**
     * The environmental_impact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchVehicleEnvironmentArray
     */
    public $environmental_impact;
    /**
     * The axle_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchVehicleAxleArray
     */
    public $axle_information;
    /**
     * The type_approval
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleTypeApproval
     */
    public $type_approval;
    /**
     * The body_approval
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchVehicleBodyApprovalArray
     */
    public $body_approval;
    /**
     * The remark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchVehicleRemarkArray
     */
    public $remark;
    /**
     * The recall
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleRecall
     */
    public $recall;
    /**
     * The mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchVehicleMileage
     */
    public $mileage;
    /**
     * Constructor method for DutchVehicleV2
     * @uses DutchVehicleV2::setBasic_data()
     * @uses DutchVehicleV2::setStatus()
     * @uses DutchVehicleV2::setRegistration()
     * @uses DutchVehicleV2::setDetails()
     * @uses DutchVehicleV2::setTax()
     * @uses DutchVehicleV2::setTechnical_weight()
     * @uses DutchVehicleV2::setEngine()
     * @uses DutchVehicleV2::setEnvironmental_impact()
     * @uses DutchVehicleV2::setAxle_information()
     * @uses DutchVehicleV2::setType_approval()
     * @uses DutchVehicleV2::setBody_approval()
     * @uses DutchVehicleV2::setRemark()
     * @uses DutchVehicleV2::setRecall()
     * @uses DutchVehicleV2::setMileage()
     * @param \Webservices\StructType\DutchVehicleData $basic_data
     * @param \Webservices\StructType\DutchVehicleStatus $status
     * @param \Webservices\StructType\DutchVehicleRegistration $registration
     * @param \Webservices\StructType\DutchVehicleFeature $details
     * @param \Webservices\StructType\DutchVehicleTaxData $tax
     * @param \Webservices\StructType\DutchVehicleTechnicalWeight $technical_weight
     * @param \Webservices\StructType\DutchVehicleEngine $engine
     * @param \Webservices\ArrayType\DutchVehicleEnvironmentArray $environmental_impact
     * @param \Webservices\ArrayType\DutchVehicleAxleArray $axle_information
     * @param \Webservices\StructType\DutchVehicleTypeApproval $type_approval
     * @param \Webservices\ArrayType\DutchVehicleBodyApprovalArray $body_approval
     * @param \Webservices\ArrayType\DutchVehicleRemarkArray $remark
     * @param \Webservices\StructType\DutchVehicleRecall $recall
     * @param \Webservices\StructType\DutchVehicleMileage $mileage
     */
    public function __construct(\Webservices\StructType\DutchVehicleData $basic_data = null, \Webservices\StructType\DutchVehicleStatus $status = null, \Webservices\StructType\DutchVehicleRegistration $registration = null, \Webservices\StructType\DutchVehicleFeature $details = null, \Webservices\StructType\DutchVehicleTaxData $tax = null, \Webservices\StructType\DutchVehicleTechnicalWeight $technical_weight = null, \Webservices\StructType\DutchVehicleEngine $engine = null, \Webservices\ArrayType\DutchVehicleEnvironmentArray $environmental_impact = null, \Webservices\ArrayType\DutchVehicleAxleArray $axle_information = null, \Webservices\StructType\DutchVehicleTypeApproval $type_approval = null, \Webservices\ArrayType\DutchVehicleBodyApprovalArray $body_approval = null, \Webservices\ArrayType\DutchVehicleRemarkArray $remark = null, \Webservices\StructType\DutchVehicleRecall $recall = null, \Webservices\StructType\DutchVehicleMileage $mileage = null)
    {
        $this
            ->setBasic_data($basic_data)
            ->setStatus($status)
            ->setRegistration($registration)
            ->setDetails($details)
            ->setTax($tax)
            ->setTechnical_weight($technical_weight)
            ->setEngine($engine)
            ->setEnvironmental_impact($environmental_impact)
            ->setAxle_information($axle_information)
            ->setType_approval($type_approval)
            ->setBody_approval($body_approval)
            ->setRemark($remark)
            ->setRecall($recall)
            ->setMileage($mileage);
    }
    /**
     * Get basic_data value
     * @return \Webservices\StructType\DutchVehicleData|null
     */
    public function getBasic_data()
    {
        return $this->basic_data;
    }
    /**
     * Set basic_data value
     * @param \Webservices\StructType\DutchVehicleData $basic_data
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setBasic_data(\Webservices\StructType\DutchVehicleData $basic_data = null)
    {
        $this->basic_data = $basic_data;
        return $this;
    }
    /**
     * Get status value
     * @return \Webservices\StructType\DutchVehicleStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \Webservices\StructType\DutchVehicleStatus $status
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setStatus(\Webservices\StructType\DutchVehicleStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get registration value
     * @return \Webservices\StructType\DutchVehicleRegistration|null
     */
    public function getRegistration()
    {
        return $this->registration;
    }
    /**
     * Set registration value
     * @param \Webservices\StructType\DutchVehicleRegistration $registration
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setRegistration(\Webservices\StructType\DutchVehicleRegistration $registration = null)
    {
        $this->registration = $registration;
        return $this;
    }
    /**
     * Get details value
     * @return \Webservices\StructType\DutchVehicleFeature|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param \Webservices\StructType\DutchVehicleFeature $details
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setDetails(\Webservices\StructType\DutchVehicleFeature $details = null)
    {
        $this->details = $details;
        return $this;
    }
    /**
     * Get tax value
     * @return \Webservices\StructType\DutchVehicleTaxData|null
     */
    public function getTax()
    {
        return $this->tax;
    }
    /**
     * Set tax value
     * @param \Webservices\StructType\DutchVehicleTaxData $tax
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setTax(\Webservices\StructType\DutchVehicleTaxData $tax = null)
    {
        $this->tax = $tax;
        return $this;
    }
    /**
     * Get technical_weight value
     * @return \Webservices\StructType\DutchVehicleTechnicalWeight|null
     */
    public function getTechnical_weight()
    {
        return $this->technical_weight;
    }
    /**
     * Set technical_weight value
     * @param \Webservices\StructType\DutchVehicleTechnicalWeight $technical_weight
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setTechnical_weight(\Webservices\StructType\DutchVehicleTechnicalWeight $technical_weight = null)
    {
        $this->technical_weight = $technical_weight;
        return $this;
    }
    /**
     * Get engine value
     * @return \Webservices\StructType\DutchVehicleEngine|null
     */
    public function getEngine()
    {
        return $this->engine;
    }
    /**
     * Set engine value
     * @param \Webservices\StructType\DutchVehicleEngine $engine
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setEngine(\Webservices\StructType\DutchVehicleEngine $engine = null)
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * Get environmental_impact value
     * @return \Webservices\ArrayType\DutchVehicleEnvironmentArray|null
     */
    public function getEnvironmental_impact()
    {
        return $this->environmental_impact;
    }
    /**
     * Set environmental_impact value
     * @param \Webservices\ArrayType\DutchVehicleEnvironmentArray $environmental_impact
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setEnvironmental_impact(\Webservices\ArrayType\DutchVehicleEnvironmentArray $environmental_impact = null)
    {
        $this->environmental_impact = $environmental_impact;
        return $this;
    }
    /**
     * Get axle_information value
     * @return \Webservices\ArrayType\DutchVehicleAxleArray|null
     */
    public function getAxle_information()
    {
        return $this->axle_information;
    }
    /**
     * Set axle_information value
     * @param \Webservices\ArrayType\DutchVehicleAxleArray $axle_information
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setAxle_information(\Webservices\ArrayType\DutchVehicleAxleArray $axle_information = null)
    {
        $this->axle_information = $axle_information;
        return $this;
    }
    /**
     * Get type_approval value
     * @return \Webservices\StructType\DutchVehicleTypeApproval|null
     */
    public function getType_approval()
    {
        return $this->type_approval;
    }
    /**
     * Set type_approval value
     * @param \Webservices\StructType\DutchVehicleTypeApproval $type_approval
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setType_approval(\Webservices\StructType\DutchVehicleTypeApproval $type_approval = null)
    {
        $this->type_approval = $type_approval;
        return $this;
    }
    /**
     * Get body_approval value
     * @return \Webservices\ArrayType\DutchVehicleBodyApprovalArray|null
     */
    public function getBody_approval()
    {
        return $this->body_approval;
    }
    /**
     * Set body_approval value
     * @param \Webservices\ArrayType\DutchVehicleBodyApprovalArray $body_approval
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setBody_approval(\Webservices\ArrayType\DutchVehicleBodyApprovalArray $body_approval = null)
    {
        $this->body_approval = $body_approval;
        return $this;
    }
    /**
     * Get remark value
     * @return \Webservices\ArrayType\DutchVehicleRemarkArray|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param \Webservices\ArrayType\DutchVehicleRemarkArray $remark
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setRemark(\Webservices\ArrayType\DutchVehicleRemarkArray $remark = null)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Get recall value
     * @return \Webservices\StructType\DutchVehicleRecall|null
     */
    public function getRecall()
    {
        return $this->recall;
    }
    /**
     * Set recall value
     * @param \Webservices\StructType\DutchVehicleRecall $recall
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setRecall(\Webservices\StructType\DutchVehicleRecall $recall = null)
    {
        $this->recall = $recall;
        return $this;
    }
    /**
     * Get mileage value
     * @return \Webservices\StructType\DutchVehicleMileage|null
     */
    public function getMileage()
    {
        return $this->mileage;
    }
    /**
     * Set mileage value
     * @param \Webservices\StructType\DutchVehicleMileage $mileage
     * @return \Webservices\StructType\DutchVehicleV2
     */
    public function setMileage(\Webservices\StructType\DutchVehicleMileage $mileage = null)
    {
        $this->mileage = $mileage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleV2
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
