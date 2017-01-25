<?php

class TOGoS_Hash_NativeHashAlgorithmTest extends PHPUnit_Framework_TestCase
{
	public function testSomeSha1() {
		$sha1 = new TOGoS_Hash_NativeHashAlgorithm('sha1');
		$hashing = $sha1->newHashing();
		$hashing->update("Hello, ");
		$hashing->update("world!");
		$this->assertEquals("943a702d06f34599aee1f8da8ef9f7296031d699", bin2hex($hashing->digest()));
		
		// Make sure reset works!
		$hashing->reset();
		$hashing->update("Just hello.");
		$this->assertEquals("d195ef8e72226b97bdf642c695416c13aa3730d7", bin2hex($hashing->digest()));
	}
}
