<?php

namespace SmartyStreets;

abstract class SimpleType
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
		$query_string = '';
		foreach ($this->toArray() as $key => $value) {
			//need to change underscores to dashes
			if ($this instanceof SmartyStreets\AddressValidationService\ClientDetail) {
				$key = str_replace('_', '-', $key);
			}
			$query_string .= $query_string.$key.'='.$value.'&';
		}
		return $query_string;
	}
}

	