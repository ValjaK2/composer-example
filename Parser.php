<?php

require_once 'ParserInterface.php';

/**
* @author Oleg Marsal <oms2@inbox.ru>
*/
class Parser implements ParserInterface
{
	public function process(string $url, string $tag)
	{
		return [
			'just',
			'do',
			'it'
		];
	}
}

