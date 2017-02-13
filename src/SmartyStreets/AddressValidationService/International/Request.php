<?php 

namespace SmartyStreets\AddressValidationService\International;

use SmartyStreets\AddressValidationService\ClientDetail;

class Request
{
	/**
     * base International url
     *
     * @var string
     */
	protected $base_url = 'https://international-street.api.smartystreets.com/verify?';

	/**
     * Client Authentication Detail
     *
     * @var object  SmartyStreets\AddressValidationService\ClientDetail
     */
	protected $client_detail;

	/**
     * Address to Validate
     *
     * @var object  SmartyStreets\AddressValidationService\International\Address
     */
	protected $address;

	/**
     * set Address
     *
     * @param object SmartyStreets\AddressValidationService\International\Address
     * return Request
     */
	public function setAddress(Address $address)
	{
		$this->address = $address;
		return $this;
	}

	/**
     * Set Client Authentication Detail
     *
     * @param object SmartyStreets\AddressValidationService\ClientDetail
     * @return Request
     */
	public function setClientDetail(ClientDetail $client_detail)
	{
		$this->client_detail = $client_detail;
		return $this;
	}

	/**
     * Send API Request 
     *
     * @return Request
     */
	public function send()
	{
		$request_url = $this->assembleRequest($this->url);
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', $request_url, [
			'headers' => [
				'host' =>  'international-street.api.smartystreets.com'
			]
		]);
		return $response;
	}

	/**
     * Assemble API Request 
     *
     * @return string  $url
     */
	private function assembleRequest()
	{
		$url = $this->base_url.$this->client_detail->toUrl().'&'.$this->address->toUrl();
		return urlencode($url);
	}
}
