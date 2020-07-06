<?php
	include 'includes/db.php';

	$uid = $_POST['uid'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$sq = $_POST['sq'];
	$ans = $_POST['ans'];

	$sql = "update users set user_pwd='$pass',user_name='$name',user_phone='$phone',user_email='$email',s_id=$sq,s_ans='$ans' where user_id='$uid'";

	pg_query($con, $sql);
?>

<link rel='stylesheet' type='text/css' href="css/style.css">
<body>
<header>
	<?php
		include "user_header.php";
	?>
</header>
<article style='padding:40px;'>
	<div class='confirm'>Your profile updated successfully.</div>
</article>

<footer>
	<?php include 'footer.php';?>
</footer>
</body>

	
