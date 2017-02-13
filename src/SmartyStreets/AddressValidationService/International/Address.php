<?php

namespace SmartyStreets\AddressValidationService\International;

use SmartyStreets\ComplexType;

class Address extends ComplexType
{
	/**
     * Address line 1
     *
     * @var string
     */
	protected $address1;

	/**
     * Address line 2
     *
     * @var string
     */
	protected $address2;

	/**
     * Address line 3
     *
     * @var string
     */
	protected $address3;

	/**
     * Recipient Name
     *
     * @var string
     */
	protected $organization;

	/**
     * Postal Code
     *
     * @var string
     */
	protected $postal_code;

	/**
     * State or Province
     *
     * @var string
     */
	protected $administrative_area;

	/**
     * City
     *
     * @var string
     */
	protected $locality;

	/**
     * Country
     *
     * @var string
     */
	protected $country;

	/**
     * Optional parameter when set to 'true' will output the geolocation of the address
     *
     * @var string  'true|false'
     */
	protected $geocode;

	/**
     * Optional parameter will set the output returned from Smarty Streets in desired language
     *
     * @var string  
     */
	protected $language;

    /**
     * Line 1 of the address.
     *
     * @param string $address1
     * return Address
     */
	public function setAddress1($address1)
	{
		$this->address1 = $address1;
		return $this;
	}

	/**
     * Line 2 of the address.
     *
     * @param string $address2
     * return Address
     */
	public function setAddress2($address2)
	{
		$this->address2 = $address2;
		return $this;
	}

	/**
     * Line 3 of the address.
     *
     * @param string $address3
     * return Address
     */
	public function setAddress3($address3)
	{
		$this->address3 = $address3;
		return $this;
	}

	/**
     * Postal Code of the address.
     *
     * @param string $postal_code
     * return Address
     */
	public function setPostalCode($postal_code)
	{
		$postal_code = strtoupper($postal_code);
		$postal_code = str_replace(' ', '', $postal_code);
		$this->postal_code = $postal_code;
		return $this;
	}

	/**
     * country of the address.
     *
     * @param string $country
     * return Address
     */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
     * city of the address.
     *
     * @param string $locality
     * return Address
     */
	public function setLocality($locality)
	{
		$this->locality = $locality;
		return $this;
	}

	/**
     * Province or State of the address.
     *
     * @param string $administrative_area
     * return Address
     */
	public function setAdministrativeArea($administrative_area)
	{
		$this->administrative_area = $administrative_area;
		return $this;
	}
}
