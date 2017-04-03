#!/usr/bin/php

<?PHP
	include("ft_is_sort.php");

	$tab = array("a", "b", "c", "g", "e");
	if (ft_is_sort($tab))
		echo("ok");
	else
		echo("ko");
?>
