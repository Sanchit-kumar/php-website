<?php
	date_default_timezone_set('Asia/Kolkata');
	$start=strtotime(date("Y-m-d H:i:s",strtotime("now")));
		if(isset($_COOKIE['end']))
				$end=$_COOKIE['end'];
		else $end=0;
	if($end>$start)
	$diff=$end-$start;
	else $diff=0;
	if($end==$start)
	{
		setcookie('timeup','1',time()+160,"/");
	}
	echo gmdate("H:i:s",$diff);
	echo"<p style='font-size:10px;margin-top:0px;'><a>Remaining time</a></p>";
?>