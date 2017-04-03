#!/usr/bin/php

<?PHP
	$tab = array_slice($argv, 1);
	$num = array();
	$alpha = array();
	$other = array();
	foreach($tab as $elem)
	{
		if (ord($elem) > 47 && ord($elem) < 58)
			$num[] = $elem;
		else if ((ord($elem) > 64 && ord($elem) < 91)
			|| ord($elem) > 97 && ord($elem) < 123)
			$alpha[] = $elem;
		else
			$other[] = $elem;
	}
	sort($num);
	sort($alpha, SORT_FLAG_CASE | SORT_NATURAL);
	print_r($alpha);
	sort($other);
	$tab = array_merge($num, $alpha, $other);
	print_r($tab);
?>
