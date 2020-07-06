<?php
	session_start();
	include 'includes/db.php';
?>

<body style='background:white;'>
<link rel='stylesheet' type='text/css' href='css/style.css'>
<header>
<div style='text-align:center;'>
	<a href='admin_home.php'><img src='images/admin.png' width=150 height=150/></a>
</div>
<div style='text-align:center;color:white;'>
	<h1>Welcome Admin</h>
</div>
</header>

<?php
$d=$_POST['date'];

if(isset($_POST['uploaded-file']))
{
echo"DATE :$d\n";
$a="select * from documents where upload_date='$d'";
$rs = pg_query($con,$a)or die("........RECORD NOT FOUND.......");
echo"<table border=2 align='center'><tr><td>UPLOADED FILES</td></tr></table>";
$count=pg_num_rows($rs);
if($count>=1)
{
echo"<article style='padding:10px;'>

<table border=1 align='center' width='100%' style='background:linen;'><tr>
	<td style='background:linen;padding:10px;'>Doc no</td>
	<td style='background:linen;padding:10px;'>Doc Name</td></tr>";


while($row = pg_fetch_row($rs))
{
echo"<tr><td>$row[0]</td>
	<td>$row[1]</td>
	</tr>";
}
}

else
echo"NO FILE UPLOADED ON THIS DAY";
}

if(isset($_POST['deleted-file']))
{
echo"DATE :$d<br><br><br>";
$d=$_POST['date'];
$b="select * from documents where delete_flag=1 and delete_date='$d'";
$rs1=pg_query($con,$b)or die("........RECORD NOT FOUND.......");
echo"<table border=2 align='center'><tr><td>DELETED FILES</td></tr></table>";
$count=pg_num_rows($rs1);
if(count>=1)
{
echo"<article style='padding:10px;'>

<table border=1 align='center' width='100%' style='background:linen;'><tr>

	<td style='background:linen;padding:10px;'>Doc no</td>
	<td style='background:linen;padding:10px;'>Doc Name</td></tr>";
while($row1 = pg_fetch_row($rs1))
{
echo"<tr>
	<td>$row1[0]</td>
	<td>$row1[1]</td>
	</tr>";
}
}
else
echo"NO FILE DELETED ON THIS DAY";
}


if(isset($_POST['downloaded-file']))
{
echo"DATE :$d<br><br><br>";
$d=$_POST['date'];
$b="select * from documents where download_date='$d'";
$rs1=pg_query($con,$b)or die("........RECORD NOT FOUND.......");
$count=pg_num_rows($rs1);
echo"<table border=2 align='center'><tr><td>DOWNLOADED FILES</td></tr></table>";
if($count>=1)
{
echo"<article style='padding:10px;'>

<table border=1 align='center' width='100%' style='background:linen;'><tr>

	<td style='background:linen;padding:10px;'>Doc no</td>
	<td style='background:linen;padding:10px;'>Doc Name</td></tr>";

while($row1 = pg_fetch_row($rs1))
{
echo"<tr>
	<td>$row1[0]</td>
	<td>$row1[1]</td>
	</tr>";
}
}
else
echo"NO RECORD DOWNLOADED ON THIS DAY";
}
?>
