<?PHP
	function ft_split($str)
	{
		$str = str_replace('  ', ' ', $str);
		$tab = explode(" ", $str);
		return ($tab);
	}
?>
