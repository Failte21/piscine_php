<?PHP
	function ft_split($str)
	{
		$str = preg_replace('/ +/', ' ', $str);
		$tab = explode(" ", $str);
		return ($tab);
	}
?>
