<?php
	session_start();
?>
<div class="fullscreen-bg">
<video autoplay loop preload=metadata width='100%' height='100%' class="fullscreen-bg__video">
    <source src='videos/videoplayback.webm' type='video/webm'>
</video>
</div>

<body style='background:black;'>
<link rel='stylesheet' type='text/css' href='css/style.css'>
<header>
<div style='text-align:center;'>
	<a href='admin_home.php'><img src='images/admin.png' width=150 height=150/></a>
</div>
<div style='text-align:center;color:white;'>
	<h1>Welcome Admin - <?php echo $_SESSION["aname"]?></h1>
</div>
</header>
<?php
$d=$_POST['sid'];

include "db.php";
	$rs = pg_query($con, "select * from orders,phone where phone.product_id=orders.product_id and phone.brand='$d'")
or die("for query");
echo"<article style='padding:10px;'>

<table border=1 align='center' width='100%' style='background:linen;'><tr>
	<td style='background:linen;padding:30px;'>Order id</td><td>Date</td><td>Amount</td><td>Product id</td><td>User id</td><td>Pay Mode</td>
	<td>Card no</td><td>Bank Name</td><td>Status</td><td>Brand</td>";
while($row = pg_fetch_row($rs))
{
echo"<tr>
	<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>
	<td>$row[7]</td><td>$row[8]</td><td>$row[10]</td>
	</tr>";
}
?>
