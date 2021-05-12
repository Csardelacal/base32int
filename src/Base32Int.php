<?php namespace magic3w\support\base32;

use Exception;

/* 
 * The MIT License
 *
 * Copyright 2018 César de la Cal Bretschneider <cesar@magic3w.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Utility class that allows numbers to be converted into more human-friendly
 * identifiers. A base32 id is composed of uppercase characters and numbers that
 * are shorter and more accessible.
 * 
 * @author César de la Cal Bretschneider <cesar@magic3w.com>
 */
class Base32Int
{
	
	/**
	 * 
	 * @param int $number
	 * @return string
	 */
	public static function encode(int $number) : string
	{
		return strtoupper(base_convert((string)$number, 10, 32));
	}
	
	/**
	 * 
	 * @param string $number
	 * @return int
	 */
	public static function decode(string $number) : int
	{
		if (!preg_match('/^[A-Va-v0-9]+$/', $number)) {
			throw new Exception('Invalid base 32 identifier');
		}
		
		return (int)base_convert(strtoupper($number), 32, 10);
	}
	
}