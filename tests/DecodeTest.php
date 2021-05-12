<?php

use magic3w\support\base32\Base32Int;
use PHPUnit\Framework\TestCase;

/**
 * These tests ensure that encoding is done in a consistent fashion. Since this
 * is super simple, I just wanna make sure that it works consistently at all.
 */
class DecodeTest extends TestCase
{
	
	public function testDecode()
	{
		$this->assertEquals(1, Base32Int::decode('1'));
		$this->assertEquals(10, Base32Int::decode('A'));
		$this->assertEquals(1000, Base32Int::decode('V8'));
		$this->assertEquals(1000, Base32Int::decode('v8'));
	}
	
	/**
	 * When decoding we need to make sure that extraneous characters are not accepted.
	 */
	public function testDecodeInvalid() 
	{
		$this->expectException(Exception::class);
		Base32Int::decode('XYZ');
	}
	
	public function testDecodeInvalid2() 
	{
		$this->expectException(Exception::class);
		Base32Int::decode('AX98');
	}
	
}