#!/usr/bin/php

<?PHP
	if (count($argv) > 1)
		echo trim(preg_replace("/[\t ]+/", ' ', $argv[1]));
?>
