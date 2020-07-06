<?php
	session_start();
?>
<link rel='stylesheet' type='text/css' href="css/style.css">
<div class='header'>
	<a href='user_home.php' class='menu'><?php echo $_SESSION['uname']?></a>
	<a href='user_home.php' class='menu'>Home</a>
	<a href='view_profile.php' class='menu'>Profile</a>
	<a href='add_docs.php' class='menu'>Upload Documents</a>
	<a href='view_docs.php' class='menu'>View Documents</a>
	<a href='recover_docs.php' class='menu'>Recover Documents</a>
	<a href='logout.php' class='menu'>Logout</a>
</div>
