<?php
	$host = "localhost";
	$dbname = "push";
	$port = 5432;
	$user = "postgres";

	$con = pg_connect("host=$host dbname=$dbname port=$port user=$user");
?>
