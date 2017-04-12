<?PHP
	function ft_is_sort($array)
	{
		$sorted = $array;
		sort($array);
		if ($sorted == $array)
			return (TRUE);
		array_reverse($array);
		if ($sorted == $array)
			return (TRUE);
		return (FALSE);
	}
?>
