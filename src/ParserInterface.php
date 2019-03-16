<?php

namespace valjak\parser;

/**
* @author Oleg Marsal <oms2@inbox.ru>
*/
interface ParserInterface
{
	/**
	* @param string $url
	* @param string $tag
	* @return array
	*/
	public function process(string $url, string $tag): array;
}
