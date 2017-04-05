#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$tab = explode(" ", $str);
		$tab = array_filter($tab);
		sort($tab);
		return ($tab);
	}

	function get_ascii($char)
	{
		$ascii = ord($char);
		if ($ascii == 0)
			return (0);
		if (($ascii < 48) || ($ascii >= 91 && $ascii <= 96) || ($ascii >= 123))
			$ascii += 1000;
		else if (is_numeric($char))
			$ascii += 100;
		else if (ctype_upper($char))
			$ascii += 32;
		return $ascii;
	}

	function ssort($e1, $e2)
	{
		$l1 = strlen($e1);
		$l2 = strlen($e1);
		$i = 0;
		while ($i < $l1 && $i < $l2)
		{
			$a1 = get_ascii($e1[$i]);
			$a2 = get_ascii($e2[$i]);
			if ($a1 != $a2)
				return ($a1 < $a2 ? -1 : 1);
			$i++;
		}
		if ($i == $l1 && $i == $l2)
			return (0);
		if ($i == $l1)
			return (-1);
		return (1);
	}

	$array = array();
	unset($argv[0]);
	foreach($argv as $elem)
		$array = array_merge($array, ft_split($elem));
	//print_r($array);
	usort($array, ssort);
	foreach($array as $elem)
		echo $elem."\n";
?>
