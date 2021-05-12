<?php

use magic3w\support\base32\Base32Int;
use PHPUnit\Framework\TestCase;

/**
 * These tests ensure that encoding is done in a consistent fashion. Since this
 * is super simple, I just wanna make sure that it works consistently at all.
 */
class EncodeTest extends TestCase
{
	
	public function testEncode()
	{
		$this->assertEquals('1', Base32Int::encode(1));
		$this->assertEquals('A', Base32Int::encode(10));
		$this->assertEquals('V8', Base32Int::encode(1000));
	}
	
}