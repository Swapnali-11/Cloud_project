<header>
	<?php include 'admin_header.php'?>
</header>

<article style='padding:50px;'>

<?php
	include 'includes/db.php';

	$n = rand(1,22);
	$did = $_GET['did'];

	$rs = pg_query($con, "select * from captcha where cap_id=$n");
	$row = pg_fetch_row($rs);
?>
<form method='post' action='download_doc1.php'>
<table align='center'>
<tr>
<td align='center'>
<img src="<?php echo $row[1]?>" width=100 height=50/>
<input type='text' name='capans'>
<input type='submit' value='Check'>	
<input type='hidden' id='capvalue' name='capvalue' value='<?php echo $row[2]?>'>
<input type='hidden' id='capvalue' name='did' value='<?php echo $did?>'>
</td>
</tr>
</table>
</form>
</article>

<footer>
	<?php include 'footer.php'?>
</footer>
