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

	y = document.forms["reg"]["cpass"];
	if(y==null || y.value=='')
	{
		alert("Confirm password cannot be blank.");
		x.focus();
		return false;
	}

	if(x.value!=y.value)
	{
		alert("Password and confirm password don't match.");
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

	x = document.forms["reg"]["capans"];
	if(x==null || x.value=='')
	{
		alert("Please enter CAPTCHA value.");
		x.focus();
		return false;
	}

	y = document.forms["reg"]["capvalue"];

	if(x.value!=y.value)
	{
		alert("CAPTCHA invalid.");
		x.focus();
		return false;
	}

	return true;	
}

function show_image(){
	xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("img").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","get_image.php",true);
        xmlhttp.send();
}

</script>

<link rel='stylesheet' type='text/css' href="css/style.css">
<body style='background:url(images/bg.jpg);background-size:100%;'>
<header>
	<?php
		include "header.php";
	?>
</header>
<article style='padding:40px;'>

<form method='post' action='user_reg1.php' name='reg' onsubmit='return validate()'>
<table align='center' class='reg' width='50%' height='50%'>
<tr>
	<td colspan=2 align='center'><b>New User</b></td>
</tr>
<tr>
	<td><b>User ID:</b></td>
	<td><input type='text' name='uid' placeholder="Enter login ID"></td>
</tr>
<tr>
	<td><b>Password:</b></td>
	<td><input type='password' name='pass' placeholder="Enter Password"></td>
</tr>
<tr>
	<td><b>Confirm Password:</b></td>
	<td><input type='password' name='cpass' placeholder="Retype Password"></td>
</tr>
<tr>
	<td><b>Name:</b></td>
	<td><input type='text' name='name' placeholder="Enter your name"></td>
</tr>
<tr>
	<td><b>Phone:</b></td>
	<td><input type='text' name='phone' placeholder="Enter your phone"></td>
</tr>
<tr>
	<td><b>Email:</b></td>
	<td><input type='text' name='email' placeholder="Enter your email ID"></td>
</tr>
<tr>
	<td><b>Security Question:</b></td>
	<td>
	<select name='sq'>
	<option value=''>Select your security question.</option>
	<?php
		include 'includes/db.php';

		$result = pg_query($con, "select * from s_questions");
		while($row = pg_fetch_row($result)){
	?>
	<option value=<?php echo $row[0]?>> <?php echo $row[1]?> </option>
	<?php
		}
	?>
	</select>
	</td>
</tr>	
<tr>
	<td><b>Answer:</b></td>
	<td><input type='text' name='ans' placeholder="Enter your answer"></td>
</tr>
<tr>
	<td>
	<div id='img'>
	<img src='captcha/1.jpg' width=100 height=50/>
	<input type='hidden' id='capvalue' value='captcha'>
	</div>
	</td>
	<td><input type='text' name='capans'><input type='button' value='Refresh' onclick='show_image()'></td>
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
