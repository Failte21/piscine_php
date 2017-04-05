#!/usr/bin/php
<?PHP
	if (count($argv) > 1)
	{
		$array = explode(" ", trim(preg_replace('/ +/', ' ', $argv[1])));
		$center = array_slice($array, 1);
		foreach($center as $elem)
			echo $elem." ";
		echo "$array[0]\n";
	}
?>
