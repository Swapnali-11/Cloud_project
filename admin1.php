<?php
	include 'includes/db.php';

	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];

	$sql = "select * from admin where admin_id='$uname' and admin_pwd='$pwd'";

	$result = pg_query($con, $sql);

	if($row = pg_fetch_row($result))
	{
		include 'admin_home.php';
	}
	else
	{
?>
<body style='backround:linen;'>
<h1>Login Failed.</h1>
Click <a href='admin.php'>here</a> to login again.
</body>
<?php
	}
?>
