<?php
	include 'includes/db.php';

	$did = $_GET['did'];
	pg_query($con, "update documents set delete_flag=0 where doc_id=$did");

	header('Location: recover_docs.php');
?>	
	
