<?php

namespace SmartyStreets\AddressValidationService;

use SmartyStreets\SimpleType;

class ClientDetail extends SimpleType
{
	/**
     * Smarty Streets API Auth Id
     *
     * @var string
     */
	protected $auth_id;

	/**
     * Smarty Streets API Auth Token
     *
     * @var string
     */
	protected $auth_token;

	/**
     * The Smarty Street Authentication Id.
     *
     * @param string $auth_id
     * return ClientDetail
     */
	public function setAuthId($auth_id)
	{
		$this->auth_id = $auth_id;
		return $this;
	}

	/**
     * The Smarty Street Authentication Token.
     *
     * @param string $auth_token
     * return ClientDetail
     */
	public function setAuthToken($auth_token)
	{
		$this->auth_token = $auth_token;
		return $this;
	}

	public function toUrl()
	{	
		$query_string = '';
		foreach ($this->toArray() as $key => $value) {
			$key = str_replace('_', '-', $key);
			$query_string = $query_string.$key.'='.$value.'&';
		}
		return $query_string;	
	}
}