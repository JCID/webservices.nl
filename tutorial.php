<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws1.webservices.nl/soap_doclit?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws1.webservices.nl/soap_doclit?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Webservices\ClassMap::get(),
);
/**
 * Samples for Account ServiceType
 */
$account = new \Webservices\ServiceType\Account($options);
$account->setSoapHeaderHeaderLogin($HeaderLogin);
$account->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for accountGetCreationToken operation/method
 */
if ($account->accountGetCreationToken(new \Webservices\StructType\AccountGetCreationTokenRequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountGetCreationStatus operation/method
 */
if ($account->accountGetCreationStatus(new \Webservices\StructType\AccountGetCreationStatusRequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountGetOrderToken operation/method
 */
if ($account->accountGetOrderToken(new \Webservices\StructType\AccountGetOrderTokenRequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountViewBalance operation/method
 */
if ($account->accountViewBalance(new \Webservices\StructType\AccountViewBalanceRequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountViewV2 operation/method
 */
if ($account->accountViewV2(new \Webservices\StructType\AccountViewV2RequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountEditV2 operation/method
 */
if ($account->accountEditV2(new \Webservices\StructType\AccountEditV2RequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountUserListV2 operation/method
 */
if ($account->accountUserListV2(new \Webservices\StructType\AccountUserListV2RequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountUserSearchV2 operation/method
 */
if ($account->accountUserSearchV2(new \Webservices\StructType\AccountUserSearchV2RequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountEditHostRestrictions operation/method
 */
if ($account->accountEditHostRestrictions(new \Webservices\StructType\AccountEditHostRestrictionsRequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for accountViewHostRestrictions operation/method
 */
if ($account->accountViewHostRestrictions(new \Webservices\StructType\AccountViewHostRestrictionsRequestType()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Samples for User ServiceType
 */
$user = new \Webservices\ServiceType\User($options);
$user->setSoapHeaderHeaderLogin($HeaderLogin);
$user->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for userSessionRemove operation/method
 */
if ($user->userSessionRemove(new \Webservices\StructType\UserSessionRemoveRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userSessionList operation/method
 */
if ($user->userSessionList(new \Webservices\StructType\UserSessionListRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userViewBalance operation/method
 */
if ($user->userViewBalance(new \Webservices\StructType\UserViewBalanceRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userEditBalance operation/method
 */
if ($user->userEditBalance(new \Webservices\StructType\UserEditBalanceRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userViewV2 operation/method
 */
if ($user->userViewV2(new \Webservices\StructType\UserViewV2RequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userEditV2 operation/method
 */
if ($user->userEditV2(new \Webservices\StructType\UserEditV2RequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userEditExtendedV2 operation/method
 */
if ($user->userEditExtendedV2(new \Webservices\StructType\UserEditExtendedV2RequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userCreateV2 operation/method
 */
if ($user->userCreateV2(new \Webservices\StructType\UserCreateV2RequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userChangePassword operation/method
 */
if ($user->userChangePassword(new \Webservices\StructType\UserChangePasswordRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userRemove operation/method
 */
if ($user->userRemove(new \Webservices\StructType\UserRemoveRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userNotify operation/method
 */
if ($user->userNotify(new \Webservices\StructType\UserNotifyRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userListAssignableGroups operation/method
 */
if ($user->userListAssignableGroups(new \Webservices\StructType\UserListAssignableGroupsRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userAddGroup operation/method
 */
if ($user->userAddGroup(new \Webservices\StructType\UserAddGroupRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userRemoveGroup operation/method
 */
if ($user->userRemoveGroup(new \Webservices\StructType\UserRemoveGroupRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userEditHostRestrictions operation/method
 */
if ($user->userEditHostRestrictions(new \Webservices\StructType\UserEditHostRestrictionsRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Sample call for userViewHostRestrictions operation/method
 */
if ($user->userViewHostRestrictions(new \Webservices\StructType\UserViewHostRestrictionsRequestType()) !== false) {
    print_r($user->getResult());
} else {
    print_r($user->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Webservices\ServiceType\Create($options);
$create->setSoapHeaderHeaderLogin($HeaderLogin);
$create->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for createTestUser operation/method
 */
if ($create->createTestUser(new \Webservices\StructType\CreateTestUserRequestType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Address ServiceType
 */
$address = new \Webservices\ServiceType\Address($options);
$address->setSoapHeaderHeaderLogin($HeaderLogin);
$address->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for addressReeksPostcodeSearch operation/method
 */
if ($address->addressReeksPostcodeSearch(new \Webservices\StructType\AddressReeksPostcodeSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressReeksAddressSearch operation/method
 */
if ($address->addressReeksAddressSearch(new \Webservices\StructType\AddressReeksAddressSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressReeksFullParameterSearch operation/method
 */
if ($address->addressReeksFullParameterSearch(new \Webservices\StructType\AddressReeksFullParameterSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressReeksParameterSearch operation/method
 */
if ($address->addressReeksParameterSearch(new \Webservices\StructType\AddressReeksParameterSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressPerceelPhraseSearch operation/method
 */
if ($address->addressPerceelPhraseSearch(new \Webservices\StructType\AddressPerceelPhraseSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressPerceelFullParameterSearchV2 operation/method
 */
if ($address->addressPerceelFullParameterSearchV2(new \Webservices\StructType\AddressPerceelFullParameterSearchV2RequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressProvinceListNeighborhoods operation/method
 */
if ($address->addressProvinceListNeighborhoods(new \Webservices\StructType\AddressProvinceListNeighborhoodsRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressProvinceListDistricts operation/method
 */
if ($address->addressProvinceListDistricts(new \Webservices\StructType\AddressProvinceListDistrictsRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressProvinceList operation/method
 */
if ($address->addressProvinceList(new \Webservices\StructType\AddressProvinceListRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressProvinceSearch operation/method
 */
if ($address->addressProvinceSearch(new \Webservices\StructType\AddressProvinceSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressDistrictSearch operation/method
 */
if ($address->addressDistrictSearch(new \Webservices\StructType\AddressDistrictSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressDistrictListCities operation/method
 */
if ($address->addressDistrictListCities(new \Webservices\StructType\AddressDistrictListCitiesRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressDistrictListNeighborhoods operation/method
 */
if ($address->addressDistrictListNeighborhoods(new \Webservices\StructType\AddressDistrictListNeighborhoodsRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressCitySearchV2 operation/method
 */
if ($address->addressCitySearchV2(new \Webservices\StructType\AddressCitySearchV2RequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressCityListNeighborhoods operation/method
 */
if ($address->addressCityListNeighborhoods(new \Webservices\StructType\AddressCityListNeighborhoodsRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressPerceelFullParameterSearch operation/method
 */
if ($address->addressPerceelFullParameterSearch(new \Webservices\StructType\AddressPerceelFullParameterSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressPerceelParameterSearch operation/method
 */
if ($address->addressPerceelParameterSearch(new \Webservices\StructType\AddressPerceelParameterSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressReeksPhraseSearch operation/method
 */
if ($address->addressReeksPhraseSearch(new \Webservices\StructType\AddressReeksPhraseSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressNeighborhoodName operation/method
 */
if ($address->addressNeighborhoodName(new \Webservices\StructType\AddressNeighborhoodNameRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Sample call for addressNeighborhoodPhraseSearch operation/method
 */
if ($address->addressNeighborhoodPhraseSearch(new \Webservices\StructType\AddressNeighborhoodPhraseSearchRequestType()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Samples for Area ServiceType
 */
$area = new \Webservices\ServiceType\Area($options);
$area->setSoapHeaderHeaderLogin($HeaderLogin);
$area->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for areaCodeLookup operation/method
 */
if ($area->areaCodeLookup(new \Webservices\StructType\AreaCodeLookupRequestType()) !== false) {
    print_r($area->getResult());
} else {
    print_r($area->getLastError());
}
/**
 * Sample call for areaCodeToNeighborhoodcode operation/method
 */
if ($area->areaCodeToNeighborhoodcode(new \Webservices\StructType\AreaCodeToNeighborhoodcodeRequestType()) !== false) {
    print_r($area->getResult());
} else {
    print_r($area->getLastError());
}
/**
 * Sample call for areaCodePostcodeLookup operation/method
 */
if ($area->areaCodePostcodeLookup(new \Webservices\StructType\AreaCodePostcodeLookupRequestType()) !== false) {
    print_r($area->getResult());
} else {
    print_r($area->getLastError());
}
/**
 * Samples for Login ServiceType
 */
$login = new \Webservices\ServiceType\Login($options);
$login->setSoapHeaderHeaderLogin($HeaderLogin);
$login->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for login operation/method
 */
if ($login->login(new \Webservices\StructType\LoginRequestType()) !== false) {
    print_r($login->getResult());
} else {
    print_r($login->getLastError());
}
/**
 * Samples for Logout ServiceType
 */
$logout = new \Webservices\ServiceType\Logout($options);
$logout->setSoapHeaderHeaderLogin($HeaderLogin);
$logout->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for logout operation/method
 */
if ($logout->logout(new \Webservices\StructType\LogoutRequestType()) !== false) {
    print_r($logout->getResult());
} else {
    print_r($logout->getLastError());
}
/**
 * Samples for Bovag ServiceType
 */
$bovag = new \Webservices\ServiceType\Bovag($options);
$bovag->setSoapHeaderHeaderLogin($HeaderLogin);
$bovag->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for bovagGetMemberByBovagId operation/method
 */
if ($bovag->bovagGetMemberByBovagId(new \Webservices\StructType\BovagGetMemberByBovagIdRequestType()) !== false) {
    print_r($bovag->getResult());
} else {
    print_r($bovag->getLastError());
}
/**
 * Sample call for bovagGetMemberByDutchBusiness operation/method
 */
if ($bovag->bovagGetMemberByDutchBusiness(new \Webservices\StructType\BovagGetMemberByDutchBusinessRequestType()) !== false) {
    print_r($bovag->getResult());
} else {
    print_r($bovag->getLastError());
}
/**
 * Samples for Business ServiceType
 */
$business = new \Webservices\ServiceType\Business($options);
$business->setSoapHeaderHeaderLogin($HeaderLogin);
$business->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for businessGetEstablishmentNumber operation/method
 */
if ($business->businessGetEstablishmentNumber(new \Webservices\StructType\BusinessGetEstablishmentNumberRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessGetBIKDescription operation/method
 */
if ($business->businessGetBIKDescription(new \Webservices\StructType\BusinessGetBIKDescriptionRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessGetSBIDescription operation/method
 */
if ($business->businessGetSBIDescription(new \Webservices\StructType\BusinessGetSBIDescriptionRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessBIKToSBI operation/method
 */
if ($business->businessBIKToSBI(new \Webservices\StructType\BusinessBIKToSBIRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSBIToBIK operation/method
 */
if ($business->businessSBIToBIK(new \Webservices\StructType\BusinessSBIToBIKRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessGetDossierV3 operation/method
 */
if ($business->businessGetDossierV3(new \Webservices\StructType\BusinessGetDossierV3RequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessGetDossierExtended operation/method
 */
if ($business->businessGetDossierExtended(new \Webservices\StructType\BusinessGetDossierExtendedRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchDossierNumber operation/method
 */
if ($business->businessSearchDossierNumber(new \Webservices\StructType\BusinessSearchDossierNumberRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchPostcode operation/method
 */
if ($business->businessSearchPostcode(new \Webservices\StructType\BusinessSearchPostcodeRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchAddress operation/method
 */
if ($business->businessSearchAddress(new \Webservices\StructType\BusinessSearchAddressRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchName operation/method
 */
if ($business->businessSearchName(new \Webservices\StructType\BusinessSearchNameRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchParameters operation/method
 */
if ($business->businessSearchParameters(new \Webservices\StructType\BusinessSearchParametersRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchParametersV3 operation/method
 */
if ($business->businessSearchParametersV3(new \Webservices\StructType\BusinessSearchParametersV3RequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchSelection operation/method
 */
if ($business->businessSearchSelection(new \Webservices\StructType\BusinessSearchSelectionRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchSelectionV2 operation/method
 */
if ($business->businessSearchSelectionV2(new \Webservices\StructType\BusinessSearchSelectionV2RequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessGetDossierSBI operation/method
 */
if ($business->businessGetDossierSBI(new \Webservices\StructType\BusinessGetDossierSBIRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessUpdateCheckDossier operation/method
 */
if ($business->businessUpdateCheckDossier(new \Webservices\StructType\BusinessUpdateCheckDossierRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessUpdateGetChangedDossiers operation/method
 */
if ($business->businessUpdateGetChangedDossiers(new \Webservices\StructType\BusinessUpdateGetChangedDossiersRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessUpdateGetDossiers operation/method
 */
if ($business->businessUpdateGetDossiers(new \Webservices\StructType\BusinessUpdateGetDossiersRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessUpdateAddDossier operation/method
 */
if ($business->businessUpdateAddDossier(new \Webservices\StructType\BusinessUpdateAddDossierRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessUpdateRemoveDossier operation/method
 */
if ($business->businessUpdateRemoveDossier(new \Webservices\StructType\BusinessUpdateRemoveDossierRequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Sample call for businessSearchParametersV2 operation/method
 */
if ($business->businessSearchParametersV2(new \Webservices\StructType\BusinessSearchParametersV2RequestType()) !== false) {
    print_r($business->getResult());
} else {
    print_r($business->getLastError());
}
/**
 * Samples for Car ServiceType
 */
$car = new \Webservices\ServiceType\Car($options);
$car->setSoapHeaderHeaderLogin($HeaderLogin);
$car->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for carRDWCarCheckCode operation/method
 */
if ($car->carRDWCarCheckCode(new \Webservices\StructType\CarRDWCarCheckCodeRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarDataV3 operation/method
 */
if ($car->carRDWCarDataV3(new \Webservices\StructType\CarRDWCarDataV3RequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarDataBPV2 operation/method
 */
if ($car->carRDWCarDataBPV2(new \Webservices\StructType\CarRDWCarDataBPV2RequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarDataExtended operation/method
 */
if ($car->carRDWCarDataExtended(new \Webservices\StructType\CarRDWCarDataExtendedRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarDataPrice operation/method
 */
if ($car->carRDWCarDataPrice(new \Webservices\StructType\CarRDWCarDataPriceRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarDataOptions operation/method
 */
if ($car->carRDWCarDataOptions(new \Webservices\StructType\CarRDWCarDataOptionsRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEMeldcodeCheck operation/method
 */
if ($car->carVWEMeldcodeCheck(new \Webservices\StructType\CarVWEMeldcodeCheckRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEBasicTypeData operation/method
 */
if ($car->carVWEBasicTypeData(new \Webservices\StructType\CarVWEBasicTypeDataRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEVersionPrice operation/method
 */
if ($car->carVWEVersionPrice(new \Webservices\StructType\CarVWEVersionPriceRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEOptions operation/method
 */
if ($car->carVWEOptions(new \Webservices\StructType\CarVWEOptionsRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEListBrands operation/method
 */
if ($car->carVWEListBrands(new \Webservices\StructType\CarVWEListBrandsRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEListModels operation/method
 */
if ($car->carVWEListModels(new \Webservices\StructType\CarVWEListModelsRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEListVersions operation/method
 */
if ($car->carVWEListVersions(new \Webservices\StructType\CarVWEListVersionsRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEVersionYearData operation/method
 */
if ($car->carVWEVersionYearData(new \Webservices\StructType\CarVWEVersionYearDataRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carVWEPhotos operation/method
 */
if ($car->carVWEPhotos(new \Webservices\StructType\CarVWEPhotosRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carATDPrice operation/method
 */
if ($car->carATDPrice(new \Webservices\StructType\CarATDPriceRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarData operation/method
 */
if ($car->carRDWCarData(new \Webservices\StructType\CarRDWCarDataRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarDataV2 operation/method
 */
if ($car->carRDWCarDataV2(new \Webservices\StructType\CarRDWCarDataV2RequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Sample call for carRDWCarDataBP operation/method
 */
if ($car->carRDWCarDataBP(new \Webservices\StructType\CarRDWCarDataBPRequestType()) !== false) {
    print_r($car->getResult());
} else {
    print_r($car->getLastError());
}
/**
 * Samples for Compliance ServiceType
 */
$compliance = new \Webservices\ServiceType\Compliance($options);
$compliance->setSoapHeaderHeaderLogin($HeaderLogin);
$compliance->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for complianceSearchPersons operation/method
 */
if ($compliance->complianceSearchPersons(new \Webservices\StructType\ComplianceSearchPersonsRequestType()) !== false) {
    print_r($compliance->getResult());
} else {
    print_r($compliance->getLastError());
}
/**
 * Sample call for complianceGetPerson operation/method
 */
if ($compliance->complianceGetPerson(new \Webservices\StructType\ComplianceGetPersonRequestType()) !== false) {
    print_r($compliance->getResult());
} else {
    print_r($compliance->getLastError());
}
/**
 * Sample call for complianceSearchBusinesses operation/method
 */
if ($compliance->complianceSearchBusinesses(new \Webservices\StructType\ComplianceSearchBusinessesRequestType()) !== false) {
    print_r($compliance->getResult());
} else {
    print_r($compliance->getLastError());
}
/**
 * Sample call for complianceGetBusiness operation/method
 */
if ($compliance->complianceGetBusiness(new \Webservices\StructType\ComplianceGetBusinessRequestType()) !== false) {
    print_r($compliance->getResult());
} else {
    print_r($compliance->getLastError());
}
/**
 * Samples for Creditsafe ServiceType
 */
$creditsafe = new \Webservices\ServiceType\Creditsafe($options);
$creditsafe->setSoapHeaderHeaderLogin($HeaderLogin);
$creditsafe->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for creditsafeGetReportFull operation/method
 */
if ($creditsafe->creditsafeGetReportFull(new \Webservices\StructType\CreditsafeGetReportFullRequestType()) !== false) {
    print_r($creditsafe->getResult());
} else {
    print_r($creditsafe->getLastError());
}
/**
 * Sample call for creditsafeSearch operation/method
 */
if ($creditsafe->creditsafeSearch(new \Webservices\StructType\CreditsafeSearchRequestType()) !== false) {
    print_r($creditsafe->getResult());
} else {
    print_r($creditsafe->getLastError());
}
/**
 * Sample call for creditsafeMonitorAddCompany operation/method
 */
if ($creditsafe->creditsafeMonitorAddCompany(new \Webservices\StructType\CreditsafeMonitorAddCompanyRequestType()) !== false) {
    print_r($creditsafe->getResult());
} else {
    print_r($creditsafe->getLastError());
}
/**
 * Sample call for creditsafeMonitorRemoveCompany operation/method
 */
if ($creditsafe->creditsafeMonitorRemoveCompany(new \Webservices\StructType\CreditsafeMonitorRemoveCompanyRequestType()) !== false) {
    print_r($creditsafe->getResult());
} else {
    print_r($creditsafe->getLastError());
}
/**
 * Sample call for creditsafeMonitorGetUpdatedCompanies operation/method
 */
if ($creditsafe->creditsafeMonitorGetUpdatedCompanies(new \Webservices\StructType\CreditsafeMonitorGetUpdatedCompaniesRequestType()) !== false) {
    print_r($creditsafe->getResult());
} else {
    print_r($creditsafe->getLastError());
}
/**
 * Samples for Dnb ServiceType
 */
$dnb = new \Webservices\ServiceType\Dnb($options);
$dnb->setSoapHeaderHeaderLogin($HeaderLogin);
$dnb->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for dnbSearchReferenceV2 operation/method
 */
if ($dnb->dnbSearchReferenceV2(new \Webservices\StructType\DnbSearchReferenceV2RequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbGetReference operation/method
 */
if ($dnb->dnbGetReference(new \Webservices\StructType\DnbGetReferenceRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbWorldbaseMarketing operation/method
 */
if ($dnb->dnbWorldbaseMarketing(new \Webservices\StructType\DnbWorldbaseMarketingRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbWorldbaseMarketingPlus operation/method
 */
if ($dnb->dnbWorldbaseMarketingPlus(new \Webservices\StructType\DnbWorldbaseMarketingPlusRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbWorldbaseMarketingPlusLinkage operation/method
 */
if ($dnb->dnbWorldbaseMarketingPlusLinkage(new \Webservices\StructType\DnbWorldbaseMarketingPlusLinkageRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbQuickCheck operation/method
 */
if ($dnb->dnbQuickCheck(new \Webservices\StructType\DnbQuickCheckRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbBusinessVerification operation/method
 */
if ($dnb->dnbBusinessVerification(new \Webservices\StructType\DnbBusinessVerificationRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbEnterpriseManagement operation/method
 */
if ($dnb->dnbEnterpriseManagement(new \Webservices\StructType\DnbEnterpriseManagementRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Sample call for dnbSearchReference operation/method
 */
if ($dnb->dnbSearchReference(new \Webservices\StructType\DnbSearchReferenceRequestType()) !== false) {
    print_r($dnb->getResult());
} else {
    print_r($dnb->getLastError());
}
/**
 * Samples for Drive ServiceType
 */
$drive = new \Webservices\ServiceType\Drive($options);
$drive->setSoapHeaderHeaderLogin($HeaderLogin);
$drive->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for driveInfoDistanceLookup operation/method
 */
if ($drive->driveInfoDistanceLookup(new \Webservices\StructType\DriveInfoDistanceLookupRequestType()) !== false) {
    print_r($drive->getResult());
} else {
    print_r($drive->getLastError());
}
/**
 * Sample call for driveInfoTimeLookup operation/method
 */
if ($drive->driveInfoTimeLookup(new \Webservices\StructType\DriveInfoTimeLookupRequestType()) !== false) {
    print_r($drive->getResult());
} else {
    print_r($drive->getLastError());
}
/**
 * Samples for Dutch ServiceType
 */
$dutch = new \Webservices\ServiceType\Dutch($options);
$dutch->setSoapHeaderHeaderLogin($HeaderLogin);
$dutch->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for dutchAddressRangePostcodeSearch operation/method
 */
if ($dutch->dutchAddressRangePostcodeSearch(new \Webservices\StructType\DutchAddressRangePostcodeSearchRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetDossier operation/method
 */
if ($dutch->dutchBusinessGetDossier(new \Webservices\StructType\DutchBusinessGetDossierRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetDossierV2 operation/method
 */
if ($dutch->dutchBusinessGetDossierV2(new \Webservices\StructType\DutchBusinessGetDossierV2RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetDossierV3 operation/method
 */
if ($dutch->dutchBusinessGetDossierV3(new \Webservices\StructType\DutchBusinessGetDossierV3RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetSBI operation/method
 */
if ($dutch->dutchBusinessGetSBI(new \Webservices\StructType\DutchBusinessGetSBIRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetVatNumber operation/method
 */
if ($dutch->dutchBusinessGetVatNumber(new \Webservices\StructType\DutchBusinessGetVatNumberRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetPositions operation/method
 */
if ($dutch->dutchBusinessGetPositions(new \Webservices\StructType\DutchBusinessGetPositionsRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetLegalEntity operation/method
 */
if ($dutch->dutchBusinessGetLegalEntity(new \Webservices\StructType\DutchBusinessGetLegalEntityRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetOrganizationTree operation/method
 */
if ($dutch->dutchBusinessGetOrganizationTree(new \Webservices\StructType\DutchBusinessGetOrganizationTreeRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearchDossierNumber operation/method
 */
if ($dutch->dutchBusinessSearchDossierNumber(new \Webservices\StructType\DutchBusinessSearchDossierNumberRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearchParametersV2 operation/method
 */
if ($dutch->dutchBusinessSearchParametersV2(new \Webservices\StructType\DutchBusinessSearchParametersV2RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearch operation/method
 */
if ($dutch->dutchBusinessSearch(new \Webservices\StructType\DutchBusinessSearchRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearchEstablishments operation/method
 */
if ($dutch->dutchBusinessSearchEstablishments(new \Webservices\StructType\DutchBusinessSearchEstablishmentsRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearchPostcode operation/method
 */
if ($dutch->dutchBusinessSearchPostcode(new \Webservices\StructType\DutchBusinessSearchPostcodeRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearchSelection operation/method
 */
if ($dutch->dutchBusinessSearchSelection(new \Webservices\StructType\DutchBusinessSearchSelectionRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetSBIDescription operation/method
 */
if ($dutch->dutchBusinessGetSBIDescription(new \Webservices\StructType\DutchBusinessGetSBIDescriptionRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractDocument operation/method
 */
if ($dutch->dutchBusinessGetExtractDocument(new \Webservices\StructType\DutchBusinessGetExtractDocumentRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractDocumentData operation/method
 */
if ($dutch->dutchBusinessGetExtractDocumentData(new \Webservices\StructType\DutchBusinessGetExtractDocumentDataRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractDocumentDataV2 operation/method
 */
if ($dutch->dutchBusinessGetExtractDocumentDataV2(new \Webservices\StructType\DutchBusinessGetExtractDocumentDataV2RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractDocumentDataV3 operation/method
 */
if ($dutch->dutchBusinessGetExtractDocumentDataV3(new \Webservices\StructType\DutchBusinessGetExtractDocumentDataV3RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetLegalExtractDocumentDataV2 operation/method
 */
if ($dutch->dutchBusinessGetLegalExtractDocumentDataV2(new \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV2RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetLegalExtractDocumentDataV3 operation/method
 */
if ($dutch->dutchBusinessGetLegalExtractDocumentDataV3(new \Webservices\StructType\DutchBusinessGetLegalExtractDocumentDataV3RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractHistory operation/method
 */
if ($dutch->dutchBusinessGetExtractHistory(new \Webservices\StructType\DutchBusinessGetExtractHistoryRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractHistoryChanged operation/method
 */
if ($dutch->dutchBusinessGetExtractHistoryChanged(new \Webservices\StructType\DutchBusinessGetExtractHistoryChangedRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractHistoryDocumentData operation/method
 */
if ($dutch->dutchBusinessGetExtractHistoryDocumentData(new \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractHistoryDocumentDataV2 operation/method
 */
if ($dutch->dutchBusinessGetExtractHistoryDocumentDataV2(new \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV2RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractHistoryDocumentDataV3 operation/method
 */
if ($dutch->dutchBusinessGetExtractHistoryDocumentDataV3(new \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetExtractHistoryDocumentDataV3ByDossier
 * operation/method
 */
if ($dutch->dutchBusinessGetExtractHistoryDocumentDataV3ByDossier(new \Webservices\StructType\DutchBusinessGetExtractHistoryDocumentDataV3ByDossierRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessGetDossierHistory operation/method
 */
if ($dutch->dutchBusinessGetDossierHistory(new \Webservices\StructType\DutchBusinessGetDossierHistoryRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUpdateGetOverview operation/method
 */
if ($dutch->dutchBusinessUpdateGetOverview(new \Webservices\StructType\DutchBusinessUpdateGetOverviewRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUpdateCheckDossier operation/method
 */
if ($dutch->dutchBusinessUpdateCheckDossier(new \Webservices\StructType\DutchBusinessUpdateCheckDossierRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUpdateGetChangedDossiers operation/method
 */
if ($dutch->dutchBusinessUpdateGetChangedDossiers(new \Webservices\StructType\DutchBusinessUpdateGetChangedDossiersRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUpdateGetDossiers operation/method
 */
if ($dutch->dutchBusinessUpdateGetDossiers(new \Webservices\StructType\DutchBusinessUpdateGetDossiersRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUpdateAddDossier operation/method
 */
if ($dutch->dutchBusinessUpdateAddDossier(new \Webservices\StructType\DutchBusinessUpdateAddDossierRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUpdateRemoveDossier operation/method
 */
if ($dutch->dutchBusinessUpdateRemoveDossier(new \Webservices\StructType\DutchBusinessUpdateRemoveDossierRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearchNewsByDossier operation/method
 */
if ($dutch->dutchBusinessSearchNewsByDossier(new \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUBOStartInvestigation operation/method
 */
if ($dutch->dutchBusinessUBOStartInvestigation(new \Webservices\StructType\DutchBusinessUBOStartInvestigationRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUBOCheckInvestigation operation/method
 */
if ($dutch->dutchBusinessUBOCheckInvestigation(new \Webservices\StructType\DutchBusinessUBOCheckInvestigationRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessUBOPickupInvestigation operation/method
 */
if ($dutch->dutchBusinessUBOPickupInvestigation(new \Webservices\StructType\DutchBusinessUBOPickupInvestigationRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchBusinessSearchParameters operation/method
 */
if ($dutch->dutchBusinessSearchParameters(new \Webservices\StructType\DutchBusinessSearchParametersRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchVehicleGetVehicleV2 operation/method
 */
if ($dutch->dutchVehicleGetVehicleV2(new \Webservices\StructType\DutchVehicleGetVehicleV2RequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchVehicleGetPurchaseReference operation/method
 */
if ($dutch->dutchVehicleGetPurchaseReference(new \Webservices\StructType\DutchVehicleGetPurchaseReferenceRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchVehicleGetOwnerHistory operation/method
 */
if ($dutch->dutchVehicleGetOwnerHistory(new \Webservices\StructType\DutchVehicleGetOwnerHistoryRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchVehicleGetMarketValue operation/method
 */
if ($dutch->dutchVehicleGetMarketValue(new \Webservices\StructType\DutchVehicleGetMarketValueRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Sample call for dutchVehicleGetVehicle operation/method
 */
if ($dutch->dutchVehicleGetVehicle(new \Webservices\StructType\DutchVehicleGetVehicleRequestType()) !== false) {
    print_r($dutch->getResult());
} else {
    print_r($dutch->getLastError());
}
/**
 * Samples for Edr ServiceType
 */
$edr = new \Webservices\ServiceType\Edr($options);
$edr->setSoapHeaderHeaderLogin($HeaderLogin);
$edr->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for edrGetScore operation/method
 */
if ($edr->edrGetScore(new \Webservices\StructType\EdrGetScoreRequestType()) !== false) {
    print_r($edr->getResult());
} else {
    print_r($edr->getLastError());
}
/**
 * Samples for Geo ServiceType
 */
$geo = new \Webservices\ServiceType\Geo($options);
$geo->setSoapHeaderHeaderLogin($HeaderLogin);
$geo->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for geoLocationNeighborhoodCoordinatesRD operation/method
 */
if ($geo->geoLocationNeighborhoodCoordinatesRD(new \Webservices\StructType\GeoLocationNeighborhoodCoordinatesRDRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationPostcodeCoordinatesRD operation/method
 */
if ($geo->geoLocationPostcodeCoordinatesRD(new \Webservices\StructType\GeoLocationPostcodeCoordinatesRDRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationNeighborhoodCoordinatesLatLon operation/method
 */
if ($geo->geoLocationNeighborhoodCoordinatesLatLon(new \Webservices\StructType\GeoLocationNeighborhoodCoordinatesLatLonRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationPostcodeCoordinatesLatLon operation/method
 */
if ($geo->geoLocationPostcodeCoordinatesLatLon(new \Webservices\StructType\GeoLocationPostcodeCoordinatesLatLonRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationAddressCoordinatesLatLon operation/method
 */
if ($geo->geoLocationAddressCoordinatesLatLon(new \Webservices\StructType\GeoLocationAddressCoordinatesLatLonRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationAddressCoordinatesRD operation/method
 */
if ($geo->geoLocationAddressCoordinatesRD(new \Webservices\StructType\GeoLocationAddressCoordinatesRDRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationLatLonToPostcode operation/method
 */
if ($geo->geoLocationLatLonToPostcode(new \Webservices\StructType\GeoLocationLatLonToPostcodeRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationLatLonToAddressV2 operation/method
 */
if ($geo->geoLocationLatLonToAddressV2(new \Webservices\StructType\GeoLocationLatLonToAddressV2RequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationRDToPostcode operation/method
 */
if ($geo->geoLocationRDToPostcode(new \Webservices\StructType\GeoLocationRDToPostcodeRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationRDToAddressV2 operation/method
 */
if ($geo->geoLocationRDToAddressV2(new \Webservices\StructType\GeoLocationRDToAddressV2RequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationInternationalPostcodeCoordinatesLatLon
 * operation/method
 */
if ($geo->geoLocationInternationalPostcodeCoordinatesLatLon(new \Webservices\StructType\GeoLocationInternationalPostcodeCoordinatesLatLonRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationInternationalAddressCoordinatesLatLon
 * operation/method
 */
if ($geo->geoLocationInternationalAddressCoordinatesLatLon(new \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationInternationalAddressCoordinatesLatLonV2
 * operation/method
 */
if ($geo->geoLocationInternationalAddressCoordinatesLatLonV2(new \Webservices\StructType\GeoLocationInternationalAddressCoordinatesLatLonV2RequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationInternationalLatLonToAddress operation/method
 */
if ($geo->geoLocationInternationalLatLonToAddress(new \Webservices\StructType\GeoLocationInternationalLatLonToAddressRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationNeighborhoodDistance operation/method
 */
if ($geo->geoLocationNeighborhoodDistance(new \Webservices\StructType\GeoLocationNeighborhoodDistanceRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationPostcodeDistance operation/method
 */
if ($geo->geoLocationPostcodeDistance(new \Webservices\StructType\GeoLocationPostcodeDistanceRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationHaversineDistance operation/method
 */
if ($geo->geoLocationHaversineDistance(new \Webservices\StructType\GeoLocationHaversineDistanceRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationDistanceSortedNeighborhoodCodes operation/method
 */
if ($geo->geoLocationDistanceSortedNeighborhoodCodes(new \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationDistanceSortedNeighborhoodCodesRadius
 * operation/method
 */
if ($geo->geoLocationDistanceSortedNeighborhoodCodesRadius(new \Webservices\StructType\GeoLocationDistanceSortedNeighborhoodCodesRadiusRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationDistanceSortedPostcodesRadius operation/method
 */
if ($geo->geoLocationDistanceSortedPostcodesRadius(new \Webservices\StructType\GeoLocationDistanceSortedPostcodesRadiusRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationDistanceSortedPostcodes operation/method
 */
if ($geo->geoLocationDistanceSortedPostcodes(new \Webservices\StructType\GeoLocationDistanceSortedPostcodesRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationLatLonToRD operation/method
 */
if ($geo->geoLocationLatLonToRD(new \Webservices\StructType\GeoLocationLatLonToRDRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Sample call for geoLocationRDToLatLon operation/method
 */
if ($geo->geoLocationRDToLatLon(new \Webservices\StructType\GeoLocationRDToLatLonRequestType()) !== false) {
    print_r($geo->getResult());
} else {
    print_r($geo->getLastError());
}
/**
 * Samples for Graydon ServiceType
 */
$graydon = new \Webservices\ServiceType\Graydon($options);
$graydon->setSoapHeaderHeaderLogin($HeaderLogin);
$graydon->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for graydonCreditGetReport operation/method
 */
if ($graydon->graydonCreditGetReport(new \Webservices\StructType\GraydonCreditGetReportRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditSearchIdentification operation/method
 */
if ($graydon->graydonCreditSearchIdentification(new \Webservices\StructType\GraydonCreditSearchIdentificationRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditSearchName operation/method
 */
if ($graydon->graydonCreditSearchName(new \Webservices\StructType\GraydonCreditSearchNameRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditSearchPostcode operation/method
 */
if ($graydon->graydonCreditSearchPostcode(new \Webservices\StructType\GraydonCreditSearchPostcodeRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditQuickscan operation/method
 */
if ($graydon->graydonCreditQuickscan(new \Webservices\StructType\GraydonCreditQuickscanRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditRatings operation/method
 */
if ($graydon->graydonCreditRatings(new \Webservices\StructType\GraydonCreditRatingsRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditVatNumber operation/method
 */
if ($graydon->graydonCreditVatNumber(new \Webservices\StructType\GraydonCreditVatNumberRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditCompanyLiaisons operation/method
 */
if ($graydon->graydonCreditCompanyLiaisons(new \Webservices\StructType\GraydonCreditCompanyLiaisonsRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Sample call for graydonCreditManagement operation/method
 */
if ($graydon->graydonCreditManagement(new \Webservices\StructType\GraydonCreditManagementRequestType()) !== false) {
    print_r($graydon->getResult());
} else {
    print_r($graydon->getLastError());
}
/**
 * Samples for Insolvency ServiceType
 */
$insolvency = new \Webservices\ServiceType\Insolvency($options);
$insolvency->setSoapHeaderHeaderLogin($HeaderLogin);
$insolvency->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for insolvencyGetCaseByPublication operation/method
 */
if ($insolvency->insolvencyGetCaseByPublication(new \Webservices\StructType\InsolvencyGetCaseByPublicationRequestType()) !== false) {
    print_r($insolvency->getResult());
} else {
    print_r($insolvency->getLastError());
}
/**
 * Sample call for insolvencySearchPublicationsByCoCNumber operation/method
 */
if ($insolvency->insolvencySearchPublicationsByCoCNumber(new \Webservices\StructType\InsolvencySearchPublicationsByCoCNumberRequestType()) !== false) {
    print_r($insolvency->getResult());
} else {
    print_r($insolvency->getLastError());
}
/**
 * Sample call for insolvencySearchPublicationsByPerson operation/method
 */
if ($insolvency->insolvencySearchPublicationsByPerson(new \Webservices\StructType\InsolvencySearchPublicationsByPersonRequestType()) !== false) {
    print_r($insolvency->getResult());
} else {
    print_r($insolvency->getLastError());
}
/**
 * Samples for International ServiceType
 */
$international = new \Webservices\ServiceType\International($options);
$international->setSoapHeaderHeaderLogin($HeaderLogin);
$international->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for internationalAddressSearchV2 operation/method
 */
if ($international->internationalAddressSearchV2(new \Webservices\StructType\InternationalAddressSearchV2RequestType()) !== false) {
    print_r($international->getResult());
} else {
    print_r($international->getLastError());
}
/**
 * Sample call for internationalAddressSearchInteractive operation/method
 */
if ($international->internationalAddressSearchInteractive(new \Webservices\StructType\InternationalAddressSearchInteractiveRequestType()) !== false) {
    print_r($international->getResult());
} else {
    print_r($international->getLastError());
}
/**
 * Samples for Kadaster ServiceType
 */
$kadaster = new \Webservices\ServiceType\Kadaster($options);
$kadaster->setSoapHeaderHeaderLogin($HeaderLogin);
$kadaster->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for kadasterEigendomsBerichtDocumentPerceel operation/method
 */
if ($kadaster->kadasterEigendomsBerichtDocumentPerceel(new \Webservices\StructType\KadasterEigendomsBerichtDocumentPerceelRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterEigendomsBerichtDocumentPostcode operation/method
 */
if ($kadaster->kadasterEigendomsBerichtDocumentPostcode(new \Webservices\StructType\KadasterEigendomsBerichtDocumentPostcodeRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterEigendomsBerichtPerceelV2 operation/method
 */
if ($kadaster->kadasterEigendomsBerichtPerceelV2(new \Webservices\StructType\KadasterEigendomsBerichtPerceelV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterEigendomsBerichtPostcodeV2 operation/method
 */
if ($kadaster->kadasterEigendomsBerichtPostcodeV2(new \Webservices\StructType\KadasterEigendomsBerichtPostcodeV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterKoopsommenOverzichtV2 operation/method
 */
if ($kadaster->kadasterKoopsommenOverzichtV2(new \Webservices\StructType\KadasterKoopsommenOverzichtV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterUittrekselKadastraleKaartPerceelV3 operation/method
 */
if ($kadaster->kadasterUittrekselKadastraleKaartPerceelV3(new \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV3RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterUittrekselKadastraleKaartPostcodeV3 operation/method
 */
if ($kadaster->kadasterUittrekselKadastraleKaartPostcodeV3(new \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV3RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterHypothecairBerichtPostcodeV3 operation/method
 */
if ($kadaster->kadasterHypothecairBerichtPostcodeV3(new \Webservices\StructType\KadasterHypothecairBerichtPostcodeV3RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterHypothecairBerichtPerceelV3 operation/method
 */
if ($kadaster->kadasterHypothecairBerichtPerceelV3(new \Webservices\StructType\KadasterHypothecairBerichtPerceelV3RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterBronDocument operation/method
 */
if ($kadaster->kadasterBronDocument(new \Webservices\StructType\KadasterBronDocumentRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterValueListGetRanges operation/method
 */
if ($kadaster->kadasterValueListGetRanges(new \Webservices\StructType\KadasterValueListGetRangesRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterValueListGetMunicipalities operation/method
 */
if ($kadaster->kadasterValueListGetMunicipalities(new \Webservices\StructType\KadasterValueListGetMunicipalitiesRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterAddressCoordinates operation/method
 */
if ($kadaster->kadasterAddressCoordinates(new \Webservices\StructType\KadasterAddressCoordinatesRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterKadastraleKaartPerceelV2 operation/method
 */
if ($kadaster->kadasterKadastraleKaartPerceelV2(new \Webservices\StructType\KadasterKadastraleKaartPerceelV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterKadastraleKaartPostcodeV2 operation/method
 */
if ($kadaster->kadasterKadastraleKaartPostcodeV2(new \Webservices\StructType\KadasterKadastraleKaartPostcodeV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterUittrekselKadastraleKaartPerceel operation/method
 */
if ($kadaster->kadasterUittrekselKadastraleKaartPerceel(new \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterUittrekselKadastraleKaartPostcode operation/method
 */
if ($kadaster->kadasterUittrekselKadastraleKaartPostcode(new \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterHypothecairBerichtPostcode operation/method
 */
if ($kadaster->kadasterHypothecairBerichtPostcode(new \Webservices\StructType\KadasterHypothecairBerichtPostcodeRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterHypothecairBerichtPerceel operation/method
 */
if ($kadaster->kadasterHypothecairBerichtPerceel(new \Webservices\StructType\KadasterHypothecairBerichtPerceelRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterEigendomsBerichtPerceel operation/method
 */
if ($kadaster->kadasterEigendomsBerichtPerceel(new \Webservices\StructType\KadasterEigendomsBerichtPerceelRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterEigendomsBerichtPostcode operation/method
 */
if ($kadaster->kadasterEigendomsBerichtPostcode(new \Webservices\StructType\KadasterEigendomsBerichtPostcodeRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterUittrekselKadastraleKaartPerceelV2 operation/method
 */
if ($kadaster->kadasterUittrekselKadastraleKaartPerceelV2(new \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterUittrekselKadastraleKaartPostcodeV2 operation/method
 */
if ($kadaster->kadasterUittrekselKadastraleKaartPostcodeV2(new \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterKadastraleKaartPerceel operation/method
 */
if ($kadaster->kadasterKadastraleKaartPerceel(new \Webservices\StructType\KadasterKadastraleKaartPerceelRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterKadastraleKaartPostcode operation/method
 */
if ($kadaster->kadasterKadastraleKaartPostcode(new \Webservices\StructType\KadasterKadastraleKaartPostcodeRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterHypothecairBerichtPostcodeV2 operation/method
 */
if ($kadaster->kadasterHypothecairBerichtPostcodeV2(new \Webservices\StructType\KadasterHypothecairBerichtPostcodeV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterHypothecairBerichtPerceelV2 operation/method
 */
if ($kadaster->kadasterHypothecairBerichtPerceelV2(new \Webservices\StructType\KadasterHypothecairBerichtPerceelV2RequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterKoopsommenOverzicht operation/method
 */
if ($kadaster->kadasterKoopsommenOverzicht(new \Webservices\StructType\KadasterKoopsommenOverzichtRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetKadastraalBerichtObjectByAdres operation/method
 */
if ($kadaster->kadasterV2GetKadastraalBerichtObjectByAdres(new \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByAdresRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetKadastraalBerichtObjectByKadastraleAanduiding
 * operation/method
 */
if ($kadaster->kadasterV2GetKadastraalBerichtObjectByKadastraleAanduiding(new \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByKadastraleAanduidingRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetKadastraalBerichtObjectByObjectId operation/method
 */
if ($kadaster->kadasterV2GetKadastraalBerichtObjectByObjectId(new \Webservices\StructType\KadasterV2GetKadastraalBerichtObjectByObjectIdRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetHypothecairBerichtObjectByAdres operation/method
 */
if ($kadaster->kadasterV2GetHypothecairBerichtObjectByAdres(new \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByAdresRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetHypothecairBerichtObjectByKadastraleAanduiding
 * operation/method
 */
if ($kadaster->kadasterV2GetHypothecairBerichtObjectByKadastraleAanduiding(new \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByKadastraleAanduidingRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetHypothecairBerichtObjectByObjectId operation/method
 */
if ($kadaster->kadasterV2GetHypothecairBerichtObjectByObjectId(new \Webservices\StructType\KadasterV2GetHypothecairBerichtObjectByObjectIdRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetUittrekselKadastraleKaartByAdres operation/method
 */
if ($kadaster->kadasterV2GetUittrekselKadastraleKaartByAdres(new \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByAdresRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetUittrekselKadastraleKaartByKadastraleAanduiding
 * operation/method
 */
if ($kadaster->kadasterV2GetUittrekselKadastraleKaartByKadastraleAanduiding(new \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByKadastraleAanduidingRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetUittrekselKadastraleKaartByObjectId
 * operation/method
 */
if ($kadaster->kadasterV2GetUittrekselKadastraleKaartByObjectId(new \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetKoopsommenOverzicht operation/method
 */
if ($kadaster->kadasterV2GetKoopsommenOverzicht(new \Webservices\StructType\KadasterV2GetKoopsommenOverzichtRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Sample call for kadasterV2GetBronDocument operation/method
 */
if ($kadaster->kadasterV2GetBronDocument(new \Webservices\StructType\KadasterV2GetBronDocumentRequestType()) !== false) {
    print_r($kadaster->getResult());
} else {
    print_r($kadaster->getLastError());
}
/**
 * Samples for Kvk ServiceType
 */
$kvk = new \Webservices\ServiceType\Kvk($options);
$kvk->setSoapHeaderHeaderLogin($HeaderLogin);
$kvk->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for kvkGetDossier operation/method
 */
if ($kvk->kvkGetDossier(new \Webservices\StructType\KvkGetDossierRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkSearchDossierNumber operation/method
 */
if ($kvk->kvkSearchDossierNumber(new \Webservices\StructType\KvkSearchDossierNumberRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkSearchParameters operation/method
 */
if ($kvk->kvkSearchParameters(new \Webservices\StructType\KvkSearchParametersRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkSearchPostcode operation/method
 */
if ($kvk->kvkSearchPostcode(new \Webservices\StructType\KvkSearchPostcodeRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkSearchSelection operation/method
 */
if ($kvk->kvkSearchSelection(new \Webservices\StructType\KvkSearchSelectionRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkGetExtractDocument operation/method
 */
if ($kvk->kvkGetExtractDocument(new \Webservices\StructType\KvkGetExtractDocumentRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkUpdateCheckDossier operation/method
 */
if ($kvk->kvkUpdateCheckDossier(new \Webservices\StructType\KvkUpdateCheckDossierRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkUpdateGetChangedDossiers operation/method
 */
if ($kvk->kvkUpdateGetChangedDossiers(new \Webservices\StructType\KvkUpdateGetChangedDossiersRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkUpdateGetDossiers operation/method
 */
if ($kvk->kvkUpdateGetDossiers(new \Webservices\StructType\KvkUpdateGetDossiersRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkUpdateAddDossier operation/method
 */
if ($kvk->kvkUpdateAddDossier(new \Webservices\StructType\KvkUpdateAddDossierRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Sample call for kvkUpdateRemoveDossier operation/method
 */
if ($kvk->kvkUpdateRemoveDossier(new \Webservices\StructType\KvkUpdateRemoveDossierRequestType()) !== false) {
    print_r($kvk->getResult());
} else {
    print_r($kvk->getLastError());
}
/**
 * Samples for Map ServiceType
 */
$map = new \Webservices\ServiceType\Map($options);
$map->setSoapHeaderHeaderLogin($HeaderLogin);
$map->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for mapViewPostcodeV2 operation/method
 */
if ($map->mapViewPostcodeV2(new \Webservices\StructType\MapViewPostcodeV2RequestType()) !== false) {
    print_r($map->getResult());
} else {
    print_r($map->getLastError());
}
/**
 * Sample call for mapViewLatLon operation/method
 */
if ($map->mapViewLatLon(new \Webservices\StructType\MapViewLatLonRequestType()) !== false) {
    print_r($map->getResult());
} else {
    print_r($map->getLastError());
}
/**
 * Sample call for mapViewRD operation/method
 */
if ($map->mapViewRD(new \Webservices\StructType\MapViewRDRequestType()) !== false) {
    print_r($map->getResult());
} else {
    print_r($map->getLastError());
}
/**
 * Sample call for mapViewInternationalLatLon operation/method
 */
if ($map->mapViewInternationalLatLon(new \Webservices\StructType\MapViewInternationalLatLonRequestType()) !== false) {
    print_r($map->getResult());
} else {
    print_r($map->getLastError());
}
/**
 * Samples for Meta ServiceType
 */
$meta = new \Webservices\ServiceType\Meta($options);
$meta->setSoapHeaderHeaderLogin($HeaderLogin);
$meta->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for metaGetServices operation/method
 */
if ($meta->metaGetServices(new \Webservices\StructType\MetaGetServicesRequestType()) !== false) {
    print_r($meta->getResult());
} else {
    print_r($meta->getLastError());
}
/**
 * Sample call for metaGetService operation/method
 */
if ($meta->metaGetService(new \Webservices\StructType\MetaGetServiceRequestType()) !== false) {
    print_r($meta->getResult());
} else {
    print_r($meta->getLastError());
}
/**
 * Sample call for metaGetMethod operation/method
 */
if ($meta->metaGetMethod(new \Webservices\StructType\MetaGetMethodRequestType()) !== false) {
    print_r($meta->getResult());
} else {
    print_r($meta->getLastError());
}
/**
 * Samples for Nbwo ServiceType
 */
$nbwo = new \Webservices\ServiceType\Nbwo($options);
$nbwo->setSoapHeaderHeaderLogin($HeaderLogin);
$nbwo->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for nbwoEstimateValue operation/method
 */
if ($nbwo->nbwoEstimateValue(new \Webservices\StructType\NbwoEstimateValueRequestType()) !== false) {
    print_r($nbwo->getResult());
} else {
    print_r($nbwo->getLastError());
}
/**
 * Samples for Risk ServiceType
 */
$risk = new \Webservices\ServiceType\Risk($options);
$risk->setSoapHeaderHeaderLogin($HeaderLogin);
$risk->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for riskCheckPerson operation/method
 */
if ($risk->riskCheckPerson(new \Webservices\StructType\RiskCheckPersonRequestType()) !== false) {
    print_r($risk->getResult());
} else {
    print_r($risk->getLastError());
}
/**
 * Sample call for riskCheckGetRiskPersonCompanyReport operation/method
 */
if ($risk->riskCheckGetRiskPersonCompanyReport(new \Webservices\StructType\RiskCheckGetRiskPersonCompanyReportRequestType()) !== false) {
    print_r($risk->getResult());
} else {
    print_r($risk->getLastError());
}
/**
 * Samples for Route ServiceType
 */
$route = new \Webservices\ServiceType\Route($options);
$route->setSoapHeaderHeaderLogin($HeaderLogin);
$route->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for routePlannerGetRoute operation/method
 */
if ($route->routePlannerGetRoute(new \Webservices\StructType\RoutePlannerGetRouteRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerInformationAddress operation/method
 */
if ($route->routePlannerInformationAddress(new \Webservices\StructType\RoutePlannerInformationAddressRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerDescriptionAddress operation/method
 */
if ($route->routePlannerDescriptionAddress(new \Webservices\StructType\RoutePlannerDescriptionAddressRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerDescription operation/method
 */
if ($route->routePlannerDescription(new \Webservices\StructType\RoutePlannerDescriptionRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerDescriptionShortest operation/method
 */
if ($route->routePlannerDescriptionShortest(new \Webservices\StructType\RoutePlannerDescriptionShortestRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerDescriptionCoordinatesRD operation/method
 */
if ($route->routePlannerDescriptionCoordinatesRD(new \Webservices\StructType\RoutePlannerDescriptionCoordinatesRDRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerInformation operation/method
 */
if ($route->routePlannerInformation(new \Webservices\StructType\RoutePlannerInformationRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerRDDescription operation/method
 */
if ($route->routePlannerRDDescription(new \Webservices\StructType\RoutePlannerRDDescriptionRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerRDInformation operation/method
 */
if ($route->routePlannerRDInformation(new \Webservices\StructType\RoutePlannerRDInformationRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerRDDescriptionCoordinatesRD operation/method
 */
if ($route->routePlannerRDDescriptionCoordinatesRD(new \Webservices\StructType\RoutePlannerRDDescriptionCoordinatesRDRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerInformationDutchAddress operation/method
 */
if ($route->routePlannerInformationDutchAddress(new \Webservices\StructType\RoutePlannerInformationDutchAddressRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerDescriptionDutchAddress operation/method
 */
if ($route->routePlannerDescriptionDutchAddress(new \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerEUDescription operation/method
 */
if ($route->routePlannerEUDescription(new \Webservices\StructType\RoutePlannerEUDescriptionRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerEUInformation operation/method
 */
if ($route->routePlannerEUInformation(new \Webservices\StructType\RoutePlannerEUInformationRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerEUDescriptionCoordinatesLatLon operation/method
 */
if ($route->routePlannerEUDescriptionCoordinatesLatLon(new \Webservices\StructType\RoutePlannerEUDescriptionCoordinatesLatLonRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Sample call for routePlannerEUMap operation/method
 */
if ($route->routePlannerEUMap(new \Webservices\StructType\RoutePlannerEUMapRequestType()) !== false) {
    print_r($route->getResult());
} else {
    print_r($route->getLastError());
}
/**
 * Samples for Sepa ServiceType
 */
$sepa = new \Webservices\ServiceType\Sepa($options);
$sepa->setSoapHeaderHeaderLogin($HeaderLogin);
$sepa->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for sepaConvertBasicBankAccountNumber operation/method
 */
if ($sepa->sepaConvertBasicBankAccountNumber(new \Webservices\StructType\SepaConvertBasicBankAccountNumberRequestType()) !== false) {
    print_r($sepa->getResult());
} else {
    print_r($sepa->getLastError());
}
/**
 * Sample call for sepaValidateInternationalBankAccountNumberFormat
 * operation/method
 */
if ($sepa->sepaValidateInternationalBankAccountNumberFormat(new \Webservices\StructType\SepaValidateInternationalBankAccountNumberFormatRequestType()) !== false) {
    print_r($sepa->getResult());
} else {
    print_r($sepa->getLastError());
}
/**
 * Samples for Vat ServiceType
 */
$vat = new \Webservices\ServiceType\Vat($options);
$vat->setSoapHeaderHeaderLogin($HeaderLogin);
$vat->setSoapHeaderHeaderAuthenticate($HeaderAuthenticate);
/**
 * Sample call for vatValidate operation/method
 */
if ($vat->vatValidate(new \Webservices\StructType\VatValidateRequestType()) !== false) {
    print_r($vat->getResult());
} else {
    print_r($vat->getLastError());
}
/**
 * Sample call for vatViesProxyCheckVat operation/method
 */
if ($vat->vatViesProxyCheckVat(new \Webservices\StructType\VatViesProxyCheckVatRequestType()) !== false) {
    print_r($vat->getResult());
} else {
    print_r($vat->getLastError());
}
