<?php
	date_default_timezone_set('Asia/Kolkata');
	$start=strtotime(date("Y-m-d H:i:s",strtotime("now")));
		if(isset($_COOKIE['end']))
	$end=$_COOKIE['end'];
	$diff=$end-$start;
	echo gmdate("H:i:s",$diff);
?>