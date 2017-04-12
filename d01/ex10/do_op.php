#!/usr/bin/php
<?PHP
	if (count($argv) < 4)
	{
		echo "Incorrect Parameters\n";
		exit;
	}
	$a = trim($argv[1]);
	$b = trim($argv[3]);
	$op = trim($argv[2]);
	if ($op == '+')
		echo $a + $b."\n";
	else if ($op == '-')
		echo $a - $b."\n";
	else if ($op == '*')
		echo $a * $b."\n";
	else if ($op == '/' && $b != 0)
		echo $a / $b."\n";
	else if ($op == '%' && $b != 0)
		echo $a % $b."\n";
	else
		echo "0\n";
?>
