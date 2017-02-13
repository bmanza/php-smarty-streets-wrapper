<?php

namespace SmartyStreets;

abstract class ComplexType
{
	/**
     * Province or State of the address.
     *
     * @return array $this
     */
	public function toArray()
	{
		return get_object_vars($this);
	}

	/**
     * Province or State of the address.
     *
     * @return array $this
     */
	public function toUrl()
	{
		$url = '?';
		if ($this instanceof \SmartyStreets\AddressValidationService\ClientDetail) {
			foreach ($this->toArray() as $key => $value) {
				$key = str_replace('_', '-', $key);
				$url .= $key.'='.$value;
			}
		} else {
			$url = '&';
			foreach ($this->toArray() as $key => $value) {
				$url .= $key.'='.$value;
			}
		}

		return $url;
	}
}

	