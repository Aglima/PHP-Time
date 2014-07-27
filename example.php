<?php
	require_once("aglima.time.class.php");
	$Time = new AglimaTime(1403558580);
	
	echo $Time->getYears()." Year(s). <br />";
	echo $Time->getWeeks()." Week(s). <br />";
	echo $Time->getDays()." Day(s). <br />";
	echo $Time->getHours()." Hour(s). <br />";
	echo $Time->getMinutes()." Minute(s). <br />";
	echo $Time->getSeconds(). " Second(s).";
?>
