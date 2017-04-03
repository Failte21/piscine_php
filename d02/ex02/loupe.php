#!/usr/bin/php

<?PHP

	function pprint($s1, $s2, $s3)
	{
		//$s2 = stripslashes($s2);
		//echo "$s1$s2$s3";
		echo $s1."\n";
		$s2 = strtoupper($s2);
		$final = $s1.$s2.$s3;
		$final = stripslashes($final);
		//echo "$s1$s2$s3";
		//$s2 = preg_replace('\\', '', $s2);
		//exit;
		//return strtoupper($str);
		return ($final);
	}

	if (count($argv) > 1 && file_exists($argv[1]))
	{
		$str = file_get_contents($argv[1]);
		//echo $str."\n";
		//$str = preg_replace('/(<a.{0,}title {0,}=)(.{1,}")(.{0,}\/a>)/e',
			//"pprint('$1', '$2', '$3')", $str);
		$str = preg_replace('/(<a.{0,}\>)(.{0,}<)(.{0,}\/a>)/e',
			"pprint('$1', '$2', '$3')", $str);
		//stripslashes($str);
		//echo $str;
		//$array = explode("<a", $str);
		//print_r($array);
		//foreach($array as $element)
		//{
			//if ()
		//}
	}
?>
