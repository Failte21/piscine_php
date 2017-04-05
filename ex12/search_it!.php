#!/usr/bin/php
<?PHP
	if ($argc > 2)
	{
		$key = $argv[1];
		$array = array_slice($argv, 2);
		$result = "";
		foreach($array as $elem)
		{
			$tab = explode(":", $elem);
			if ($tab[0] == $key)
				$result = $tab[1];
		}
		if ($result)
			echo $result."\n";
	}
?>
