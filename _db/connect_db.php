<?php
	$host='numrunggroup.com';#NOT NULL : IP ADDRESS
	$username='numrungg_backoffice';#NOT NULL : DATABASE USER
	$pass='Numrung254!#';#NOT NULL : DATABASE PASSWORD
	$db='numrungg_backoffice';
	$conn=mysqli_connect($host,$username,$pass, $db) or die ("<div class='text-center'><li><a  class='label label-danger' href='#login' data-toggle='tab' >ขณะนี้ ระบบไม่สามารถเชื่อมต่อกับ SERVER ได้</a></li></div>");
	// mysqli_select_db($conn, $db) or die("<div class='text-center'><li><a  class='label label-danger' href='#logi' data-toggle='tab' >Cannot select DB <a></li></div>"); 

	mysqli_query($conn, "SET character_set_results=utf8");
	mysqli_query($conn, "SET character_set_client=utf8");
	mysqli_query($conn, "SET character_set_connection=utf8");
	mysqli_query($conn, "SET NAMES UTF8");

	
?>
