<link rel='stylesheet' type='text/css' href="css/style.css">
<body style='background:url(images/bg.jpg);background-size:100%;'>

<header>
	<?php
		include "header.php";
	?>
</header>

<article>
<form method='post' action='user_login1.php'>
<table align='center' class='user' height='30%'>
<tr>
	<td colspan=2 align='center'><b>User Login</b></td>
</tr>
<tr>
	<td><b>User ID:</b></td>
	<td><input type='text' name='uid'></td>
</tr>
<tr>
	<td><b>Password:</b></td>
	<td><input type='password' name='pass'></td>
</tr>
<tr>
	<td align='center'><a href='user_reg.php' class='links'>New User</a></td>
	<td align='center'><a href='reset_password.php' class='links'>Forgot Password</a></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='SUBMIT' class='btn'></td>
	<td align='center'><input type='reset' value='RESET' class='btn'></td>
</tr>
</table>
</form>
</article>

<footer>
	<?php include 'footer.php';?>
</footer>

</body>
