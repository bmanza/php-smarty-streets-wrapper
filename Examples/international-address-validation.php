<?php  

require_once('../vendor/autoload.php');

use SmartyStreets\AddressValidationService\ClientDetail;
use SmartyStreets\AddressValidationService\International\Address;
use SmartyStreets\AddressValidationService\International\Request;

$client_detail = new ClientDetail();
$client_detail->setAuthId('xx')
	->setAuthToken('xx');

$address = new Address();
$address->setAddress1('xx') // line 1
	->setPostalCode('xx') // postal code
	->setAdministrativeArea('xx') // Province or State
	->setLocality('xx') // city
	->setCountry('xx') // country
	->setGeocode('xx'); // boolean true will return geolocation (lat/long)

$request = new Request();
$request->setClientDetail($client_detail)
	->setAddress($address);

$response = $request->send();

var_dump($response);