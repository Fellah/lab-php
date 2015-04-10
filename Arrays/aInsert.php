<?php

/**
 * Insert value to the associate array.
 *
 * PHP 5.4: Using short array syntax.
 */

$foo = [
	'one'	=> 1,
	'two'	=> 2,
	'four'	=> 4,
	'five'	=> 5,
];

$foo = array_slice($foo, 0, 2) + ['three' => 3] + array_slice($foo, 2);

var_dump($foo);
echo PHP_EOL;
