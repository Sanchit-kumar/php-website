<?php
	date_default_timezone_set('Asia/Kolkata');
	$start=strtotime(date("Y-m-d H:i:s",strtotime("now")));
	$end=strtotime(date("Y-m-d H:i:s",strtotime("+30 minutes")));
	setcookie('start',$start);	
		setcookie('end',$end);	

	$diff=$end-$start;
	echo gmdate("H:i:s",$diff);
?>