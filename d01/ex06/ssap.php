#!/usr/bin/php

<?PHP
	$tab = array_slice($argv, 1);
	asort($tab);
	foreach($tab as $elem)
		echo trim(preg_replace('/ +/', ' ', $elem))."\n";
?>
