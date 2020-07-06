<?php
	include 'includes/db.php';

	$uid = $_POST['uid'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$sq = $_POST['sq'];
	$ans = $_POST['ans'];
	$update = date('Y-m-d');
	$sql = "insert into users values('$uid','$pass','$name','$phone','$email',0,$sq,'$ans','$update')";

	pg_query($con, $sql);

	mkdir($uid,0777) or die('Failed to create directory');
?>

<link rel='stylesheet' type='text/css' href="css/style.css">
<body>
<header>
	<?php
		include "header.php";
	?>
</header>
<article style='padding:40px;'>
	<div class='confirm'>You are registered successfully. Wait for your account activation.</div>
</article>

<footer>
	<?php include 'footer.php';?>
</footer>
</body>

	
