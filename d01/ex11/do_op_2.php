#!/usr/bin/php
<?PHP
	if ($argc < 2)
	{
		echo "Incorrect Parameters";
		exit;
	}
	$array = sscanf($argv[1], "%d %c %d %s");
	//print_r($array);
	if (!$array[0] || !$array[1] || !$array[2])
	{
		echo "Syntax Error";
		exit;
	}
	if ($array[1] == '+')
		echo ($array[0] + $array[2])."\n";
	if ($array[1] == '-')
		echo ($array[0] - $array[2])."\n";
	if ($array[1] == '*')
		echo ($array[0] * $array[2])."\n";
	if ($array[1] == '/')
		echo ($array[0] / $array[2])."\n";
	if ($array[1] == '%')
		echo ($array[0] % $array[2])."\n";
?>
