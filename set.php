<?php
	date_default_timezone_set('Asia/Kolkata');
	include 'com_conn.php';
	include 'commenting.php';
	$a=$_POST['cid'];
	setcomments($conn,$a);
	getcomments($conn,$a);
?>