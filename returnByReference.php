<?php

/**
 * Return by reference.
 *
 * @link http://php.net/manual/en/language.references.return.php
 */

class Foo {
	public $reference = 0;

	public $copy = 0;

	private $hidden = 0;

	public function &getReference() {
		return $this->reference;
	}

	public function getCopy() {
		return $this->copy;
	}

	public function &getHidden() {
		return $this->hidden;
	}

	public function printHidden() {
		echo 'hidden: ', $this->hidden, PHP_EOL;
	}
}

$foo = new Foo;

$reference = &$foo->getReference();
$reference = 42;
echo 'reference: ', $foo->reference, PHP_EOL;

$copy = $foo->getCopy();
$copy = 42;
echo 'copy: ', $foo->copy, PHP_EOL;

// Modify private property.
$hiden = &$foo->getHidden();
$hiden = 42;
$foo->printHidden();
