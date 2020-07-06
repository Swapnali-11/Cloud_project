<?php
	session_start();

	include 'includes/db.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pass'];

	$sql = "select * from users where user_id='$uid' and user_pwd='$pwd' and active_flag=1";

	$result = pg_query($con, $sql);

	if($row = pg_fetch_row($result))
	{
		$_SESSION['uid'] = $uid;
		$_SESSION['uname'] = $row[2];

		include 'user_home.php';
	}
	else
	{
?>
<body style='backround:linen;'>
<h1>Login Failed. Either incorrect user id/password or not yet activated.</h1>
Click <a href='user_login.php'>here</a> to login again.
</body>
<?php
	}
?>
