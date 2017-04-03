<?PHP
	function ft_is_sort($array)
	{
		$sorted = $array;
		sort($array);
		for($i = 0; $i < count($array); $i++)
		{
			if (strcmp($array[$i], $sorted[$i]) != 0)
				return (FALSE);
		}
		return (TRUE);
	}

	$tab = array("c", "b", "c", "d", "e");
	if (ft_is_sort($tab))
?>
