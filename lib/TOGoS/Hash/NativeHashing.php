<?php

class TOGoS_Hash_NativeHashing implements TOGoS_Hash_Hashing
{
	protected $algorithmName;
	protected $ctx;
	public function __construct( $algorithmName ) {
		$this->algorithmName = $algorithmName;
	}
	public function reset() {
		$this->ctx = hash_init( $this->algorithmName );
	}
	public function update( $data ) {
		if( $this->ctx === null ) $this->reset();
		hash_update( $this->ctx, $data );
	}
	public function digest() {
		return hash_final( $this->ctx, true );
	}
}
