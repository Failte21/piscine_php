#!/usr/bin/php

<?PHP
	date_default_timezone_set('America/Los_Angeles');
	//echo date_default_timezone_get()."\n";

	function error()
	{
		echo "Wrong format";
		exit;
	}

	function day_checker($day)
	{
		//echo $day;
		if ($day == '1')
			error();
		$day = preg_replace('/[lL]undi/', '1', $day);
		$day = preg_replace('/[Mm]ardi/', '1', $day);
		$day = preg_replace('/[Mm]ercredi/', '1', $day);
		$day = preg_replace('/[Jj]eudi/', '1', $day);
		$day = preg_replace('/[Vv]endredi/', '1', $day);
		$day = preg_replace('/[Ss]amedi/', '1', $day);
		$day = preg_replace('/[Dd]imanche/', '1', $day);
		//echo $day;
		if ($day != '1')
			error();
	}

	function month_checker($month)
	{
		if ($month > '0' && $month <= '12')
			error();
		$month = preg_replace('/[Jj]anvier/', '1', $month);
		$month = preg_replace('/[Ff]evrier/', '2', $month);
		$month = preg_replace('/[Mm]ars/', '3', $month);
		$month = preg_replace('/[Jj]vril/', '4', $month);
		$month = preg_replace('/[Mm]ai/', '5', $month);
		$month = preg_replace('/[Jj]uin/', '6', $month);
		$month = preg_replace('/[Jj]uillet/', '7', $month);
		$month = preg_replace('/[Aa]out/', '8', $month);
		$month = preg_replace('/[Ss]eptembre/', '9', $month);
		$month = preg_replace('/[Oo]ctobre/', '10', $month);
		$month = preg_replace('/[Nn]ovembre/', '11', $month);
		$month = preg_replace('/[Dd]ecembre/', '12', $month);
		//echo $month;
		if ($month < '0' || $month > '12')
			error();
		return ($month);
	}

	function date_checker($nb)
	{
		if (!preg_match('/[1-31]/', $nb))
			error();
	}

	function year_checker($year)
	{
		//echo $year."\n";
		if (!preg_match('/[1-2][0-9]{3,3}/', $year))
			error();
	}

	function hour_checker($hour)
	{
		if (!preg_match('/[0-2][0-9]:[0-5][0-9]:[0-5][0-9]/', $hour))
			error();
	}

	if ($argv > 1)
	{
		$array = explode(" ", $argv[1]);
		//print_r($array);
		if (count($array) != 5)
			error();
		day_checker($array[0]);
		date_checker($array[1]);
		$array[2] = month_checker($array[2]);
		year_checker($array[3]);
		hour_checker($array[4]);
		//echo $array[2];
		echo strtotime($array[2]."/".$array[1]."/".$array[3]." ".$array[4]);
	}
?>
