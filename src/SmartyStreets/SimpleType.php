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
		$array = get_object_vars($this);
		foreach ($array as $key => $value) {
			if (is_null($array[$key])) {
				unset($array[$key]);
			}
		}
		return $array;
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
			$query_string = $query_string.$key.'='.$value.'&';
		}
		return $query_string;
	}
}
