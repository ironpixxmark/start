<?php 
	$con = mysql_connect("localhost", "root", "1");
	if (!$con) {
		die('Could not connect' . mysql_error());
	}

	$db_select = mysql_select_db("startup", $con);



?>