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
		$query_string = '';
		foreach ($this->toArray() as $key => $value) {
			$query_string .= $query_string.$key.'='.$value.'&';
		}
		return $query_string;
	}
}

	