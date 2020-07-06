<script>
function validate()
{
	x = document.forms["reg"]["uid"];

	if(x==null || x.value=='')
	{
		alert("User ID cannot be blank.");
		x.focus();
		return false;
	}

	x = document.forms["reg"]["pass"];
	if(x==null || x.value=='')
	{
		alert("Password cannot be blank.");
		x.focus();
		return false;
	}

	x = document.forms["reg"]["name"];
	if(x==null || x.value=='')
	{
		alert("Name cannot be blank.");
		x.focus();
		return false;
	}

	x = document.forms["reg"]["phone"];
	if(x==null || x.value=='')
	{
		alert("Phone cannot be blank.");
		x.focus();
		return false;
	}

	if(!x.value.match(/^\d{10}$/))
	{
		alert("Invalid phone number.");
		x.focus();
		return false;
	}

	x = document.forms["reg"]["email"];
	if(x==null || x.value=='')
	{
		alert("Email cannot be blank.");
		x.focus();
		return false;
	}

	if(!x.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/))
	{
		alert("Invalid email id.");
		x.focus();
		return false;
	}

	x = document.forms["reg"]["sq"];
	if(x==null || x.value=='')
	{
		alert("Please select valid security question.");
		x.focus();
		return false;
	}

	x = document.forms["reg"]["ans"];
	if(x==null || x.value=='')
	{
		alert("Please enter valid answer.");
		x.focus();
		return false;
	}	
}
</script>

<link rel='stylesheet' type='text/css' href="css/style.css">
<body>
<header>
<?php
	session_start();

	include "user_header.php";
	include 'includes/db.php';
	
	$uid = $_SESSION['uid'];
	$rs = pg_query($con, "select * from users where user_id='$uid'");
	$row = pg_fetch_row($rs);		
?>
</header>
<article style='padding:40px;'>

<form method='post' action='edit_profile.php' name='reg' onsubmit='return validate()'>
<table align='center' class='reg' width='50%' height='50%'>
<tr>
	<td colspan=2 align='center'><b>User Details</b></td>
</tr>
<tr>
	<td><b>User ID:</b></td>
	<td><input type='text' name='uid' value='<?php echo $row[0]?>' readOnly></td>
</tr>
<tr>
	<td><b>Password:</b></td>
	<td><input type='password' name='pass' value='<?php echo $row[1]?>'></td>
</tr>
<tr>
	<td><b>Name:</b></td>
	<td><input type='text' name='name' value='<?php echo $row[2]?>'></td>
</tr>
<tr>
	<td><b>Phone:</b></td>
	<td><input type='text' name='phone' value='<?php echo $row[3]?>'></td>
</tr>
<tr>
	<td><b>Email:</b></td>
	<td><input type='text' name='email' value='<?php echo $row[4]?>'></td>
</tr>
<tr>
	<td><b>Security Question:</b></td>
	<td>
	<select name='sq'>
	<option value=''>Select your security question.</option>
	<?php
		include 'includes/db.php';

		$result = pg_query($con, "select * from s_questions");
		while($row1 = pg_fetch_row($result)){
	?>
	<option value=<?php echo $row1[0]?> <?php if($row[6]==$row1[0]) echo ' selected';?>> <?php echo $row1[1]?> </option>
	<?php
		}
	?>
	</select>
	</td>
</tr>	
<tr>
	<td><b>Answer:</b></td>
	<td><input type='text' name='ans' value='<?php echo $row[7]?>'></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='UPDATE' class='btn'></td>
	<td align='center'><input type='reset' value='RESET' class='btn'></td>
</tr>
</table>
</form>
</article>

<footer>
	<?php include 'footer.php';?>
</footer>
</body>
