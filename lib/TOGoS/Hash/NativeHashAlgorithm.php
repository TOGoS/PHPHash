<?php

class TOGoS_Hash_NativeHashAlgorithm implements TOGoS_Hash_HashAlgorithm
{
	protected $algorithmName;
	public function __construct($algorithmName) {
		$this->algorithmName = $algorithmName;
	}
	public function newHashing() {
		return new TOGoS_Hash_NativeHashing($this->algorithmName);
	}
}
