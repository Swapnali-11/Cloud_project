<?php
	include 'includes/db.php';

	$id = $_GET['id'];
	$active = $_GET['active'];

	$active = $active==0?1:0;

	$sql = "update users set active_flag=$active where user_id='$id'";
	pg_query($con, $sql);

	include 'manage_users.php';
?>
 
