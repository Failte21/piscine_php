#!/usr/bin/php
<?PHP
	$i = 0;
	if ($argc > 1)
	{
		foreach ($argv as $elem)
		{
			$i++;
			if ($i > 1)
				$str = "$str $elem";
		}
		$str = trim($str);
		$array = preg_split("/\s+/", $str);
		sort($array);
		foreach ($array as $elem)
			echo $elem."\n";
	}
?>
