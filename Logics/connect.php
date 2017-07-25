<?php
	define('DB_NAME', 'exam');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

	$con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

	if (!$con){

		 die("connection error: ". mysql_connect_error());
	}

	// else {
	// 	echo "connected to database successfully";
	// }
?>