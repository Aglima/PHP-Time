Time
===========
<b>Functions</b>
<ul>
  <li>setOldTime(timestamp);</li>
  <li>setNewTime(timestamp);</li>
  <li>getOldTime();</li>
  <li>getNewTime();</li>
  <li>getYears();</li>
  <li>getWeeks();</li>
  <li>getDays();</li>
  <li>getHours();</li>
  <li>getMinutes();</li>
  <li>getSeconds();</li>
</ul>
<b>Example</b>

	require_once("aglima.time.class.php");
	$Time = new AglimaTime(1403558580);
	
	echo $Time->getYears()." Year(s). <br />";
	echo $Time->getWeeks()." Week(s). <br />";
	echo $Time->getDays()." Day(s). <br />";
	echo $Time->getHours()." Hour(s). <br />";
	echo $Time->getMinutes()." Minute(s). <br />";
	echo $Time->getSeconds(). " Second(s).";
