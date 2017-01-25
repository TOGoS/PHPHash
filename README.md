# PHPHash

A simple object-oriented (and thereby extensible)
hashing framework for PHP, similar to Java's MessageDigest class
or tshash.

Basically:

```
HashAlgorithm
- newHashing():Hashing

Hashing
- reset()
- update( $data )
- digest() : hash bytes

NativeHashAlgorithm( name ) implements HashAlgorithm

NativeHashing extends Hashing
```
